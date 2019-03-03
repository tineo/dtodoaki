<?php

namespace DirectoryPlatform\AppBundle\EventListener;

use DateTime;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;

use Symfony\Component\DependencyInjection\ContainerInterface;

use DirectoryPlatform\AppBundle\Entity\Order;
use DirectoryPlatform\AppBundle\Entity\OrderItem;

class OrderSubscriber implements EventSubscriber
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getSubscribedEvents()
    {
        return ['postUpdate',];
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        /** @var Order $entity */
        $entity = $args->getEntity();

        if ($entity instanceof Order) {
            $changeSet = $args->getEntityManager()->getUnitOfWork()->getEntityChangeSet($entity);

            if (!empty($changeSet['status'])) {
                if (Order::STATUS_NEW === $changeSet['status'][0] && Order::STATUS_COMPLETED === $changeSet['status'][1]) {
                    $message = \Swift_Message::newInstance()
                        ->setSubject('['.$this->container->getParameter('app.project_name').'] Order Completed')
                        ->setFrom($this->container->getParameter('app.email_from'))
                        ->setTo($entity->getUser()->getEmail())
                        ->setBody(
                            $this->container->get('templating')->render(
                                'AppBundle::Email/order_completed.html.twig',
                                [
                                    'order' => $entity,
                                ]
                            ),
                            'text/html'
                        );
                    $this->container->get('mailer')->send($message);

                    /** @var OrderItem $item */
                    foreach ($entity->getItems() as $item) {
                        switch ($item->getType()) {
                            case 'pay_for_featured':
                                $listing = $item->getListing();
                                $listing->setIsFeatured(true);
                                if (0 != $this->container->getParameter('app.payments')['pay_for_featured']['duration']) {
                                    $date = new DateTime();
                                    $listing->setFeaturedUntil($date->modify('+'.$item->getDuration().'day'));
                                }

                                $em = $args->getEntityManager();
                                $em->persist($listing);
                                $em->flush();
                                break;
                            case 'pay_for_publish':
                                $listing = $item->getListing();
                                $listing->setIsPublished(true);
                                if (0 != $this->container->getParameter('app.payments')['pay_for_publish']['duration']) {
                                    $date = new DateTime();
                                    $listing->setPublishedUntil($date->modify('+'.$item->getDuration().'day'));
                                }
                                $em = $args->getEntityManager();
                                $em->persist($listing);
                                $em->flush();
                                break;
                                break;
                        }
                    }
                }
            }
        }
    }
}