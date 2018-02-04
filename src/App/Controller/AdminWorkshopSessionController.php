<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Venue;
use App\Entity\Workshop;
use App\Entity\WorkshopSessionInput;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class AdminWorkshopSessionController extends BaseAdminController
{
    // Creates a new instance of the entity being created. This instance is passed
    // to the form created with the 'createNewForm()' method. Override this method
    // if your entity has a constructor that expects some arguments to be passed
    protected function createNewEntity()
    {
        return new WorkshopSessionInput();
    }

    protected function createWorkshopSessionEntityForm($entity)
    {
        $form = $this->createFormBuilder()
            ->add('workshop', EntityType::class, [
                'class'        => Workshop::class,
                'choice_label' => 'enTitle',
            ])
            ->add('venue', EntityType::class, [
                'class'        => Venue::class,
                'choice_label' => 'name',
            ])
            ->add('startDate', DateType::class, ['data' => new \DateTime('today')])
            ->add('endDate', DateType::class, ['data' => new \DateTime('tomorrow')])
            ->add('startTime', TimeType::class, ['data' => new \DateTime('today 9:00')])
            ->add('endTime', TimeType::class, ['data' => new \DateTime('today 17:00')])
            ->add('language', ChoiceType::class, [
                'choices'  => [
                    'HR' => 'HR',
                    'EN' => 'EN',
                ],
            ])
            ->add('priceAmount', TextType::class, ['required'=>false])
            ->add('priceCurrency', ChoiceType::class, [
                'choices'  => [
                    'HRK' => 'HRK',
                    'EUR' => 'EUR',
                ],
            ])
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();

        return $form;
    }

    // Creates the form used to create a new entity item
    protected function createNewForm($entity, array $entityProperties)
    {
        return $this->createEntityForm($entity, $entityProperties, 'new');
    }

    // It persists and flushes the given Doctrine entity. It allows to modify the entity
    // before/after being saved in the database (e.g. to transform a DTO into a Doctrine entity)
    protected function persistEntity($entity)
    {
        var_dump($entity->getId());
        var_dump($entity->getPrice());
        die();

        return;
        $this->em->persist($entity);
        $this->em->flush($entity);
    }
}
