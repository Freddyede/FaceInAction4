<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FacebookController extends AbstractController
{
    /**
     * @Route("/facebook", name="home")
     */
    public function index()
    {
        return $this->render('face/index.html.twig', [
            'controller_name' => 'FacebookController',
        ]);
    }
}
