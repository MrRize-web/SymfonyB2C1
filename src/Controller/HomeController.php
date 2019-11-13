<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);

    }
    /**
 * @Route("/DireBonjour/{prenom}", name="test")
 */
    public function test($prenom)
    {
        return $this->render('home/index.html.twig', [
            'prenom'=>"$prenom",
        ]);
    }
}
