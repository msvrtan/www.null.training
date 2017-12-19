<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\WorkshopRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Router;

class HomepageController
{
    /** @var WorkshopRepository */
    private $workshopRepository;
    /** @var Router */
    private $router;

    public function __construct(WorkshopRepository $workshopRepository, Router $router)
    {
        $this->workshopRepository = $workshopRepository;
        $this->router             = $router;
    }

    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $preferredLanguage = $request->getPreferredLanguage(['en', 'hr']);

        $url = $this->router->generate('homepage', ['_locale' => $preferredLanguage]);

        return new RedirectResponse($url, 302);
    }

    /**
     * @Route("/{_locale}/",name="homepage",requirements={"_locale":"en|hr"})
     * @Template()
     */
    public function homepageAction(Request $request)
    {
        return ['lang' => $request->getLocale(), 'workshops' => $this->workshopRepository->findAll()];
    }

    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return new Response('Hello');
    }
}
