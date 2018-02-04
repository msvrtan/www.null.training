<?php

declare(strict_types=1);

namespace App\DataFixtures\ORM;

use App\Entity\City;
use App\Entity\Country;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CityFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    private $manager;

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;

        $croatia  = $this->getCountry('HR');
        $serbia   = $this->getCountry('RS');
        $slovenia = $this->getCountry('SI');

        $zagreb = new City();
        $zagreb->setId('dd4cd998-05e4-459b-909f-ef3a735e1e3c');
        $zagreb->setName('Zagreb');
        $zagreb->setCountry($croatia);
        $zagreb->setPriority(1);

        $belgrade = new City();
        $belgrade->setId('10d2dd89-8eaf-4eed-8391-e545123b1a54');
        $belgrade->setName('Belgrade');
        $belgrade->setCountry($serbia);
        $belgrade->setPriority(5);

        $ljubljana = new City();
        $ljubljana->setId('3d70a69e-9ca8-46a2-90b0-d87ff3a15b23');
        $ljubljana->setName('Ljubljana');
        $ljubljana->setCountry($slovenia);
        $ljubljana->setPriority(5);

        $manager->persist($zagreb);
        $manager->persist($belgrade);
        $manager->persist($ljubljana);

        $manager->flush();

        $this->addReference('city-zagreb', $zagreb);
        $this->addReference('city-belgrade', $belgrade);
        $this->addReference('city-ljubljana', $ljubljana);
    }

    private function getCountry(string $countryCode): Country
    {
        return $this->manager->getRepository('App:Country')->find($countryCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 20;
    }
}
