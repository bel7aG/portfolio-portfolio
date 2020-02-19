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
        'name' => 'Belhassen',
        'description' => 'Fullstack Developer with a passion for design. I have
        experience working with Java, Python, C, C# and countless other
        frontend and backend frameworks and tools, but I spend most of my
        time fighting with Javascript, React, React Native, NestJS, Typescript, NoSQL, CSS, SASS preprocessor and others.',
        'links' => ['https://www.linkedin.com/in/bel7ag/', 'https://github.com/bel7aG']
      ]);
    }
}
