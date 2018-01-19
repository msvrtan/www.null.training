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
        $cooking101->setActive(false);
        $cooking101->setShowOnHomepage(false);

        $introToUnitTesting = new Workshop();
        $introToUnitTesting->setEnTitle('Introduction to unit testing');
        $introToUnitTesting->setEnShortIntroduction('Increase code quality and productivity by writing unit tests for your code.');
        $introToUnitTesting->setEnDescription('xxxxx');
        $introToUnitTesting->setHrTitle('Uvod u unit testiranje');
        $introToUnitTesting->setHrShortIntroduction('Povećajte kvalitetu svog koda i produktivnost pišući unit testove.');
        $introToUnitTesting->setHrDescription('xxxxx');
        $introToUnitTesting->setActive(true);
        $introToUnitTesting->setShowOnHomepage(true);

        $introToSymfony = new Workshop();
        $introToSymfony->setEnTitle('Introduction to Symfony framework');
        $introToSymfony->setEnShortIntroduction('Looking to switch to Symfony framework?');
        $introToSymfony->setEnDescription('xxxxx');
        $introToSymfony->setHrTitle('Uvod u Symfony framework');
        $introToSymfony->setHrShortIntroduction('Razmišljate o prelasku na Symfony framework?');
        $introToSymfony->setHrDescription('xxxxx');
        $introToSymfony->setActive(true);
        $introToSymfony->setShowOnHomepage(true);

        $symfony4 = new Workshop();
        $symfony4->setEnTitle("Symfony 4: what's new?");
        $symfony4->setEnShortIntroduction('One day training, covering all the changes and new features that came in version 4.');
        $symfony4->setEnDescription('xxxxx');
        $symfony4->setHrTitle('Što je novo u Symfonyu 4?');
        $symfony4->setHrShortIntroduction('Jednodnevna radionica u kojoj prolazimo kroz sve promjene i novosti koje su došle sa verzijom 4.');
        $symfony4->setHrDescription('xxxxx');
        $symfony4->setActive(true);
        $symfony4->setShowOnHomepage(true);

        $codeReviews = new Workshop();
        $codeReviews->setEnTitle('Code reviews');
        $codeReviews->setEnShortIntroduction('No one should be the <b>only</b> person understanding specific parts of your projects.');
        $codeReviews->setEnDescription('xxxxx');
        $codeReviews->setHrTitle('Code reviews');
        $codeReviews->setHrShortIntroduction('Nitko ne bi smio biti <b>jedina</b> osoba koja razumije dijelove vašega projekta.');
        $codeReviews->setHrDescription('xxxxx');
        $codeReviews->setActive(true);
        $codeReviews->setShowOnHomepage(true);

        $acceptanceTesting = new Workshop();
        $acceptanceTesting->setEnTitle('Acceptance testing');
        $acceptanceTesting->setEnShortIntroduction('By writing acceptance tests we can verify that our changes are inlined with user stories.');
        $acceptanceTesting->setEnDescription('xxxxx');
        $acceptanceTesting->setHrTitle('Acceptance testing');
        $acceptanceTesting->setHrShortIntroduction('Kroz pisanje acceptanca testova potvrdjujemo da se naše promjene poklapaju sa "user story"-ima.');
        $acceptanceTesting->setHrDescription('xxxxx');
        $acceptanceTesting->setActive(true);
        $acceptanceTesting->setShowOnHomepage(true);

        $manager->persist($cooking101);
        $manager->persist($introToUnitTesting);
        $manager->persist($introToSymfony);
        $manager->persist($symfony4);
        $manager->persist($codeReviews);
        $manager->persist($acceptanceTesting);

        $manager->flush();

        $this->addReference('workshop-cooking101', $cooking101);
        $this->addReference('workshop-intro-to-unit-testing', $introToUnitTesting);
        $this->addReference('workshop-intro-to-symfony', $introToSymfony);
        $this->addReference('workshop-symfony4', $symfony4);
        $this->addReference('workshop-code-reviews', $codeReviews);
        $this->addReference('workshop-acceptance-testing', $acceptanceTesting);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 10;
    }
}
