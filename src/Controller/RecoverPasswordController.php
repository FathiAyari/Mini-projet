<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecoverPasswordController extends AbstractController
{
    /**
     * @Route("/recover_password", name="recover_password")
     */
    public function index(): Response
    {
        return $this->render('recover_password/index.html.twig', [
            'controller_name' => 'RecoverPasswordController',
        ]);
    }
}
