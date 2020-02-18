<?php
// src/AppBundle/Controller/AboutController.php
namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AboutController extends Controller
{
    /**
     * @Route("/about", name="aboutpage")
     */
    public function indexAction() {
      return $this->render('about/index.html.twig', [
        'name' => 'Belhassen Gharsallah',
        'description' => 'Fullstack Developer.',
        'skills' => ['Javascript', 'reactjs', 'CSS3']
      ]);
    }
}
