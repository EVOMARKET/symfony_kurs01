<?php

namespace App\Controller;

use App\Entity\AutosPhotos;
use App\Service\AutoImageProvider;
use App\Repository\AutaRepository;
use App\Service\AutoProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AutaPageController extends AbstractController
{
    public function __construct(
        private AutaRepository $autaRepository,
        private AutoProvider $autoProvider

        )

        {

    }


    #[Route('/auta', name: 'auta-page')]
    public function showAutos(): Response
    {

    $auta = $this->autaRepository->findAll();

   $parameters =$this->autoProvider->prepareAuta($auta);

return $this->render('auta_page/index.html.twig', parameters:$parameters);


    }
}
