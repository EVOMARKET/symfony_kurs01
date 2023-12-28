<?php

namespace App\Controller;

use App\Entity\Auta;
use App\Entity\AutosPhotos;
use App\Entity\Owners;
use App\Repository\OwnersRepository;
use App\Service\AutoImageProvider;
use App\Repository\AutaRepository;
use App\Service\AutoProvider;
use App\Service\OwnersProvider;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AutaPageController extends AbstractController
{
    public function __construct(
        private AutaRepository $autaRepository,
        private AutoProvider $autoProvider,
        private OwnersRepository $ownersRepository,
        private OwnersProvider $ownersProvider,
        )
        {

    }

    #[Route('/auta', name: 'auta-page')]
    public function showAutos(): Response
    {

    $dane = $this->autaRepository->findAll();

   $parameters =$this->autoProvider->prepareAuta($dane);

return $this->render('auta_page/index.html.twig', parameters:$parameters);

    }


    #[Route('/owners/{id}', name: 'owners-page')]

    public function showAuto(Auta $id): Response
    {

    $dane = $this->autaRepository->findAll();

  $parameters =$this->autoProvider->prepareAuta($dane);

    return $this->render('auta_page/users.html.twig', parameters:$parameters);

    }

}

