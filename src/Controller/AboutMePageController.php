<?php

namespace App\Controller;

use App\Repository\InformationAboutMeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutMePageController extends AbstractController
{
    public function __construct(
    private InformationAboutMeRepository $informacje)
    {

    }

    #[Route('/about-me', name: 'about-me')]
    public function index(): Response
    {
        $informations = $this->informacje->findAll();
        //dd($informations);

        return $this->render(view:'about_me_page/index.html.twig',parameters:['informations'=> $informations] );
    }
}
