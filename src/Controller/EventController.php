<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="app_")
 */
class EventController extends AbstractController
{

    /**
     * @Route("/", "events_list")
     */
    public function list(EventRepository $er)
    {
        $events = $er->getEvents();

        dump($events);

        return $this->render("events/list.html.twig", [
            "events" => $events,
        ]);
    }
}
