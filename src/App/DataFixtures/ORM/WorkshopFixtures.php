<?php

declare(strict_types=1);

namespace App\DataFixtures\ORM;

use App\Entity\Workshop;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class WorkshopFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $cooking101 = new Workshop();
        $cooking101->setEnTitle('Cooking 101');
        $cooking101->setEnShortIntroduction('This is a 2 day workshop covering basics of cooking');
        $cooking101->setEnDescription('In this workshop we will cover: - cooking eggs ...');
        $cooking101->setHrTitle('Uvod u kuhanje');
        $cooking101->setHrShortIntroduction('Osnove kuhanja u obliku dvodnevne radionice');
        $cooking101->setHrDescription('U ovoj radionici ćemo proći: - kuhanje jaja ...');

        $manager->persist($cooking101);

        $manager->flush();

        $this->addReference('workshop-cooking101', $cooking101);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 10;
    }
}
