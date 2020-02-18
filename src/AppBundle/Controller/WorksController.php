<?php
// src/AppBundle/Controller/WorksController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorksController extends Controller
{
    /**
     * @Route("/works", name="workspage")
     */
    public function indexAction() {
      return $this->render('works/index.html.twig', [
        'works' => ["https://bel7ag.netlify.com/",
        "https://couscous-connection.com/",
        "https://dietlicious.ae/",
        "https://pizzas.netlify.com/",
        "https://artists.netlify.com/",
        "https://cosuno.netlify.com/"]
      ]);
    }
}
