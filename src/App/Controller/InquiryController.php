<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Inquiry;
use App\Repository\InquiryRepository;
use App\Service\InquiryReceivedEmailService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class InquiryController implements ContainerAwareInterface
{
    use ContainerAwareTrait;
    use ControllerTrait;
    /** @var InquiryRepository */
    private $inquiryRepository;
    /** @var InquiryReceivedEmailService */
    private $inquiryReceivedEmailService;

    public function __construct(
        InquiryRepository $inquiryRepository,
        InquiryReceivedEmailService $inquiryReceivedEmailService
    ) {
        $this->inquiryRepository           = $inquiryRepository;
        $this->inquiryReceivedEmailService = $inquiryReceivedEmailService;
    }

    /**
     * @Route("/{_locale}/kontakt",name="contact_hr",requirements={"_locale"="hr"})
     * @Route("/{_locale}/contact",name="contact_en",requirements={"_locale"="en"})
     * @Template()
     */
    public function showAction(Request $request)
    {
        $inquiry = new Inquiry();

        $form = $this->createFormBuilder($inquiry)
            ->add('name', TextType::class, ['label'=> 'Your name:'])
            ->add('emailAddress', EmailType::class, ['label'=> 'E-mail address:'])
            ->add('body', TextareaType::class, ['label'=> 'Message:', 'attr' => ['cols' => '12', 'rows' => '12']])
            ->add('send', SubmitType::class, ['label' => 'Send'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $inquiry = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($inquiry);
            $em->flush();

            $this->inquiryReceivedEmailService->notify($inquiry);

            return $this->redirectToRoute('contact_thank_you_'.$request->getLocale());
        }

        return [
            'lang' => $request->getLocale(),
            'form' => $form->createView(),
        ];
    }

    /**
     * @Route("/{_locale}/kontakt/hvala",name="contact_thank_you_hr",requirements={"_locale"="hr"})
     * @Route("/{_locale}/contact/thank-you",name="contact_thank_you_en",requirements={"_locale"="en"})
     * @Template()
     */
    public function thankYouAction(Request $request)
    {
        return [
            'lang' => $request->getLocale(),
        ];
    }
}
