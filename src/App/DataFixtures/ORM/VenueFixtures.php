<?php

declare(strict_types=1);

namespace App\DataFixtures\ORM;

use App\Entity\City;
use App\Entity\Venue;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class VenueFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $nullTraining = new Venue();
        $nullTraining->setId('b2956a26-5509-48fe-ae87-3b8cc8519186');
        $nullTraining->setName('Null Training');
        $nullTraining->setAddress('Krizna cesta 18');
        $nullTraining->setDescription('Null Training classroom');
        $nullTraining->setCity($this->getCity('city-zagreb'));
        $nullTraining->setPriority(1);
        $nullTraining->setAdditionalInformation('This is some additional information.');

        $companyX = new Venue();
        $companyX->setId('0cdb001b-9d4a-400f-8dd7-69018063c6d5');
        $companyX->setAddress('Somewhere 22');
        $companyX->setName('Company X');
        $companyX->setCity($this->getCity('city-belgrade'));
        $companyX->setPriority(5);

        $manager->persist($nullTraining);
        $manager->persist($companyX);

        $manager->flush();

        $this->addReference('venue-null-training', $nullTraining);
        $this->addReference('venue-company-x', $companyX);
    }

    private function getCity(string $referenceName): City
    {
        return $this->getReference($referenceName);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 20;
    }
}
