<?php

namespace DirectoryPlatform\AppBundle\EventListener;

use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\FOSUserEvents;

class UserSubscriber implements EventSubscriberInterface
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public static function getSubscribedEvents()
    {
        return [
            FOSUserEvents::REGISTRATION_COMPLETED => 'onUserCreated',
        ];
    }

    public function onUserCreated(FilterUserResponseEvent $event)
    {
        $user = $event->getUser();

        $message = \Swift_Message::newInstance()
            ->setSubject('['.$this->container->getParameter('app.project_name').'] New User Registration')
            ->setFrom($this->container->getParameter('app.email_from'))
            ->setTo($user->getEmail())
            ->setBody($this->container->get('templating')->render('AppBundle::Email/user_registered.html.twig', [
                'user' => $user,
            ]), 'text/html');

        $this->container->get('mailer')->send($message);

        $response = $event->getResponse();
        $response->setTargetUrl($this->container->get('router')->generate('listing_my'));
    }
}