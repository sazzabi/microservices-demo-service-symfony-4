<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="default_")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->json(
            [
                'message' => 'Welcome to your new controller!',
                'path'    => 'src/Controller/DefaultController.php',
            ]
        );
    }
}
