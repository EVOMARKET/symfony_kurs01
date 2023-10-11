<?php

namespace App\Controller;

use App\Repository\NotatkiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    public function __construct(
        private NotatkiRepository $notatkiRepository
    ){

    }
    #[Route('/note', name: 'note-page')]
    public function index(): Response
    {
        $notatki = $this->notatkiRepository->findAll();

        $parameters = [
            'notatki'=>$notatki,
        ];



        return $this->render(view:'note/index.html.twig', parameters:$parameters);




}
}
