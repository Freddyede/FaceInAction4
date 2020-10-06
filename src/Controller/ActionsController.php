<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActionsController extends AbstractController
{
    /**
     * @Route("/actions", name="actions")
     */
    public function index()
    {
        return $this->render('actions/index.html.twig', [
            'controller_name' => 'ActionsController',
        ]);
    }
}
