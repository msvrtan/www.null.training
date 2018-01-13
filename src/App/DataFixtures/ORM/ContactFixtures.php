<?php

declare(strict_types=1);

namespace App\DataFixtures\ORM;

use App\Entity\Contact;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ContactFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $contact1 = new Contact();
        $contact1->setName('John Smith');
        $contact1->setEmailAddress('john@example.com');
        $contact1->setBody('We are interested in .....');

        $manager->persist($contact1);

        $manager->flush();

        $this->addReference('contact-contact1', $contact1);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 20;
    }
}
