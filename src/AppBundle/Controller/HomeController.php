<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        return $this->render('home/index.html.twig', [
            'name' => 'Belhassen Gharsallah',
            'role' => 'Fullstack Developer.',
            'skills' => ['Javascript', 'ReactJS', 'React Native', 'CSS3', 'redux', 'NestJS', 'Typescript', 'GraphQL', 'TypeORM']
        ]);
    }
}
