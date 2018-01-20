<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Inquiry;
use Swift_Mailer;
use Symfony\Bundle\TwigBundle\TwigEngine;

class InquiryReceivedEmailService
{
    /** @var Swift_Mailer */
    private $mailer;
    /**
     * @var TwigEngine
     */
    private $templating;

    public function __construct(Swift_Mailer $mailer, TwigEngine $templating)
    {
        $this->mailer     = $mailer;
        $this->templating = $templating;
    }

    public function notify(Inquiry $inquiry)
    {
        $subject = sprintf('New inquiry received (%s)', $inquiry->getName());
        $body    = $this->templating->render('emails/inquiry.html.twig', ['inquiry' => $inquiry]);

        $message = (new \Swift_Message($subject))
            ->setFrom('info@null.training')
            ->setTo('miro@mirosvrtan.me')
            ->setBody($body, 'text/html');

        $this->mailer->send($message);
    }
}
