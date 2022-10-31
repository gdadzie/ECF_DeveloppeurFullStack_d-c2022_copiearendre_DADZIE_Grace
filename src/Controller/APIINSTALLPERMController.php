<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class APIINSTALLPERMController extends AbstractController
{
    /**
     * @Route("/a/p/i/i/n/s/t/a/l/l/p/e/r/m", name="app_a_p_i_i_n_s_t_a_l_l_p_e_r_m")
     */
    public function index(): Response
    {
        return $this->render('apiinstallperm/index.html.twig', [
            'controller_name' => 'APIINSTALLPERMController',
        ]);
    }
}
