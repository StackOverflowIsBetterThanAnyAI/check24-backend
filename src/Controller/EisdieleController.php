<?php

namespace App\Controller;

use App\Repository\EisdieleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EisdieleController extends AbstractController
{
    #[Route('/eisdielen', name: 'app_eisdiele')]
    public function index(EisdieleRepository $repository): Response
    {
        $eisdielen = $repository->findAll();

        return $this->json($eisdielen);
    }
}