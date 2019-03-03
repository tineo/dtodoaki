<?php

namespace DirectoryPlatform\AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UnpublishUnfeatureListingsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('directory-platform:unpublish-unfeature-listings');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get('doctrine')->getManager()->getRepository('AppBundle:Listing')->unfeature();
        $this->getContainer()->get('doctrine')->getManager()->getRepository('AppBundle:Listing')->unpublish();
    }
}