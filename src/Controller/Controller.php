<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Controller extends AbstractController
{
    #[Route('/lucky/texte')]
    public function texte(): Response
    {
        $texte = 'Hello les amis';

        return $this->render(view: 'lucky/texte.html.twig', parameters: [
            'texte' => $texte,
        ]);
    }
}
