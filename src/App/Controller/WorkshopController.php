<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Workshop;
use App\Repository\WorkshopRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class WorkshopController
{
    /** @var WorkshopRepository */
    private $workshopRepository;

    public function __construct(WorkshopRepository $workshopRepository)
    {
        $this->workshopRepository = $workshopRepository;
    }

    /**
     * @Route("/{_locale}/radionica/{slug}-{id}",name="workshop_details_hr",requirements={"_locale"="hr","slug"="[a-z0-9\-]*"})
     * @Route("/{_locale}/workshop/{slug}-{id}",name="workshop_details_en",requirements={"_locale"="en","slug"="[a-z0-9\-]*"})
     * @Template()
     */
    public function showAction(Workshop $workshop, Request $request)
    {
        return [
            'lang'      => $request->getLocale(),
            'workshop'  => $workshop,
            'workshops' => $this->workshopRepository->findSimilarWorkshops($workshop),
        ];
    }
}
