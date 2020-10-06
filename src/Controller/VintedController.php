<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VintedController extends AbstractController
{
    /**
     * @Route("/vinted", name="vinted")
     */
    public function index()
    {
        return $this->render('vinted/index.html.twig', [
            'controller_name' => 'VintedController',
        ]);
    }
}
