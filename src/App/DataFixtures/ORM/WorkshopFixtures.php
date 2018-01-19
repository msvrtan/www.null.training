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
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
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
        $introToUnitTesting->setEnDescription('
As our web applications are getting more and more complex, manual testing of our logic is not always the most performant way to comfirm we have not broken anything.

I have personally seen an increase in productivity and descrease in stress levels by running tests to confirm my changes have not broken anything: this empowered me to often refactor and keep the code cleaner. Switching developer mindsets from manual to automated testing is much harder than writing the tests. For teams that build complex applications, unit testing should be the first step on the road. 

This workshop will cover how to use PHPUnit and Mockery to write good unit tests. We will start with some algorithmic code examples to get us into writing input-output based unit tests and move towards unit tests covering interactions between classes: behaviour of our code. 

Workshop is interactive, after a bit of theory, all excercises will be a mix of live coding and attendees doing it themselves. This is best suited environment for 3-10 attendees.

### Agenda:
  * writing code examples based on algorithms (so we can later write tests for them)
  * installing & setting up PHPUnit using composer
  * structure & flow of a unit test
  * writing input-output tests for written code examples
  * writing code examples based on algorithms with tests from start
  * installing & setting up Mockery
  * writing tests for code examples based on class interactions
  * writing code examples based on class interactions together with tests  

All attendees have to bring their own laptop with PHP (preferably PHP 7.1) & IDE/editor of their choice set up. We can do this workshop in our classroom or in your offices, if you pick your offices we need projector & small whiteboard to be available.

**Duration: 2 days**
');
        $introToUnitTesting->setHrTitle('Uvod u unit testiranje');
        $introToUnitTesting->setHrShortIntroduction('Povećajte kvalitetu svog koda i produktivnost pišući unit testove.');
        $introToUnitTesting->setHrDescription('xxxxx');
        $introToUnitTesting->setActive(true);
        $introToUnitTesting->setShowOnHomepage(true);

        $introToSymfony = new Workshop();
        $introToSymfony->setEnTitle('Introduction to Symfony framework');
        $introToSymfony->setEnShortIntroduction('Looking to switch to Symfony framework?');
        $introToSymfony->setEnDescription('
Symfony is an open source PHP framework that has changed way we are developing web applications: while it has a backing of a company most of the development is driven by the community.

If you are looking to switch from another framework or interested in learning a new one, this workshop is best suited for developers with small or no experience in Symfony. 

We will be building a small CRUD app, a Vagrant box or docker (your choice) will be provided beforehand so all attendees should bring their own laptops with vagrant/docker support and their favourite IDE/editor set up. Workshop is interactive, after a bit of theory, all excercises will be a mix of live coding and attendees building the application. This is best suited environment for 4-8 attendees as they would be working in pairs or teams of 3. We suggest using GitHub to host the demo applications but it can be hosted on git repositories of your choice. We can do this workshop in our classroom or in your offices, if you pick your offices we need projector & small whiteboard to be available.


### Agenda:
This workshop agenda is based on Symfony 4 (released in December 2017).

  * installing bare Symfony 4 project using composer
  * adding basic libraries & components (ORM, forms..)
  * build small CRUD based app (something like blog,todo app)
  * adding user support via FOSUserBundle (registration,login..)
  * testing Symfony application using PHPUnit
  * using migrations & fixtures



Workshop can be done in 2 or 3 days, this is something we discuss beforehand as it depends on the level of expertise of the attendees.

**Duration: 2/3 days**

');
        $introToSymfony->setHrTitle('Uvod u Symfony framework');
        $introToSymfony->setHrShortIntroduction('Razmišljate o prelasku na Symfony framework?');
        $introToSymfony->setHrDescription('xxxxx');
        $introToSymfony->setActive(true);
        $introToSymfony->setShowOnHomepage(true);

        $symfony4 = new Workshop();
        $symfony4->setEnTitle("Symfony 4: what's new?");
        $symfony4->setEnShortIntroduction('One day training, covering all the changes and new features that came in version 4.');
        $symfony4->setEnDescription('
Symfony 4 brought lot of changes, from new folder structure, droping standard-edition release for micro-framework where we add components (being self configured using Symfony Flex), abandoning bundles as a way of grouping code, using environment variables instead of parameters and much much more...

In this workshop attendees should have experience with Symfony version 2 or 3, by building a small CRUD app we will cover all the differences/changes. If you are interested in learning Symfony, please check our \'Introduction to Symfony\' workshop.

A Vagrant box or docker (your choice) will be provided beforehand so all attendees should bring their own laptops with vagrant/docker support and their favourite IDE/editor set up.  

Workshop is interactive, if interested we can team up attendees or they can work solo. I suggest using GitHub to host the demo applications but it can be hosted on git repositories of your choice. We usually do workshops in our classroom but it can be organized in your offices as well, if you pick your offices we need projector & small whiteboard to be available.

### Agenda:

  * setting up new project
  * explaining new folder structure
  * adding components using Symfony flex
  * autoloading/autowiring services
  * environment variables instead of parameters
  * maker bundle
  * build small CRUD based app (something like blog,todo app)

**Duration: 1 day**


If you are interested in a migrate from Symfony 3 to Symfony 4 training/consulation for an existing application I can help you with that as well.

');
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
        $codeReviews->setActive(false);
        $codeReviews->setShowOnHomepage(false);

        $acceptanceTesting = new Workshop();
        $acceptanceTesting->setEnTitle('Acceptance testing');
        $acceptanceTesting->setEnShortIntroduction('By writing acceptance tests we can verify that our changes are inlined with user stories.');
        $acceptanceTesting->setEnDescription('
Communicating expectations with our clients in form of a user story:

**Scenario: Switching language**
```
Given customer is viewing FAQ page in English
When they click \'fr\' in language switcher
They should be on FAQ page in French
```

**Scenario: Customer registration**
```
Given new customer wants to register
When they fill username, password & email address
And they press \'Register\'
Then they should see a message \'Welcome to our site! We have sent you an activation email...\'
```

is a nice way to avoid ambiguity and a way of \'documenting\' features too, in a human readable way. 

Behat allows us to use this stories as tests, running in headless or browser mode, as we change our web site or application we can be sure existing features & expectations have not been broken.

We will be working on a simple web site/application, a Vagrant box or docker (your choice) will be provided beforehand so all attendees should bring their own laptops with vagrant/docker support and their favourite IDE/editor set up. We can do this workshop in our classroom or in your offices, if you pick your offices we need projector & small whiteboard to be available.

### Agenda:
  * installing & configuring Behat
  * introduction to Gherkin (user story language)
  * introduction to Behat contexts
  * live coding & exercises with headless browser
  * setting up selenium
  * live coding & exercises with browser

**Duration: 2 days**
');
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
