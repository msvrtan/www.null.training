<?php

declare(strict_types=1);

namespace WorkshopSession\Behat;

use Doctrine\ORM\EntityManager;

trait SymfonyTrait
{
    private function getService(string $name)
    {
        return $this->kernel->getContainer()->get($name);
    }

    protected function getEntityManager(): EntityManager
    {
        return $this->getService('doctrine')->getManager();
    }
}
