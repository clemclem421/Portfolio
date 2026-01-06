<?php

namespace App\Controller;

use App\Form\RegisterType;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'register')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(RegisterType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            // GEN PDF
            $dompdf = new Dompdf();
            $html = $this->renderView('cv/pdf.html.twig', [
                'data' => $data
            ]);

            $dompdf->loadHtml($html);
            $dompdf->render();
            return new Response($dompdf->stream("CV.pdf"));
        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
