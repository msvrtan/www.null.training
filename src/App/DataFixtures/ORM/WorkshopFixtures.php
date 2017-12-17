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
        $cooking101->setTitle('Cooking 101');
        $cooking101->setShortIntroduction('This is a 2 day workshop covering basics of cooking');
        $cooking101->setDescription('In this course we will cover: - cooking eggs ...');

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
