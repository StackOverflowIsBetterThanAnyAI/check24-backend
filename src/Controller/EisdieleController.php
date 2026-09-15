<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EisdieleController extends AbstractController
{
    #[Route('/eisdielen', name: 'app_eisdiele')]
    public function index(): Response
    {
        $eisdielen = [
            [
                'id' => 1,
                'name' => 'Eiscafé Sarcletti',
                'stadt' => 'München',
                'bewertung' => 4.8,
                'lieblingssorte' => 'Pistazie',
            ],
            [
                'id' => 2,
                'name' => 'Eis Venezia',
                'stadt' => 'Hamburg',
                'bewertung' => 4.6,
                'lieblingssorte' => 'Spaghetti-Eis',
            ],
            [
                'id' => 3,
                'name' => 'Tamino Eis',
                'stadt' => 'Berlin',
                'bewertung' => 4.9,
                'lieblingssorte' => 'Mango',
            ],
        ];

        return $this->json($eisdielen);
    }
}