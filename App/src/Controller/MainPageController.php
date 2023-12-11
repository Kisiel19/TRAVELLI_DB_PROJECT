<?php

namespace App\Controller;

use App\Entity\Objekt;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MainPageController extends AbstractController
{
    #[Route('/', name: 'app_main_page')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $objekt=$entityManager->getRepository(Objekt::class)->findAll();
        return $this->render('main_page/index.html.twig', array('objekt'=>$objekt));
    }
}
