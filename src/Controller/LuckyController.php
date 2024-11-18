<?php
    namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
    

    class LuckyController extends AbstractController
    {
        #[Route('/porte-bonheur')]
        public function makeMeHappy()
        {
	$reponse =rand(0,100);
    return $this->render('base.html.twig',['reponse'=>$reponse]);

        }
    }