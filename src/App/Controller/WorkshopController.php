<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Workshop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WorkshopController
{
    /**
     * @Route("/{lang}/radionica/{slug}-{id}",name="workshop_details_hr",requirements={"lang"="hr","slug"="[a-z0-9\-]*"})
     * @Route("/{lang}/workshop/{slug}-{id}",name="workshop_details_en",requirements={"lang"="en","slug"="[a-z0-9\-]*"})
     * @Template()
     */
    public function showAction(Workshop $workshop, string $lang)
    {
        return ['lang' => $lang, 'workshop' => $workshop];
    }
}
