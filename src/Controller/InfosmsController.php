<?php

namespace App\Controller;

use App\Entity\Infosms;
use App\Form\InfosmsType;
use App\Repository\InfosmsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/infosms")
 */
class InfosmsController extends AbstractController
{
    /**
     * @Route("/", name="infosms_index", methods="GET")
     */
    public function index(InfosmsRepository $infosmsRepository): Response
    {
        return $this->render('infosms/index.html.twig', ['infosms' => $infosmsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="infosms_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $infosm = new Infosms();
        $form = $this->createForm(InfosmsType::class, $infosm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($infosm);
            $em->flush();

            return $this->redirectToRoute('infosms_index');
        }

        return $this->render('infosms/new.html.twig', [
            'infosm' => $infosm,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="infosms_show", methods="GET")
     */
    public function show(Infosms $infosm): Response
    {
        return $this->render('infosms/show.html.twig', ['infosm' => $infosm]);
    }

    /**
     * @Route("/{id}/edit", name="infosms_edit", methods="GET|POST")
     */
    public function edit(Request $request, Infosms $infosm): Response
    {
        $form = $this->createForm(InfosmsType::class, $infosm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('infosms_edit', ['id' => $infosm->getId()]);
        }

        return $this->render('infosms/edit.html.twig', [
            'infosm' => $infosm,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="infosms_delete", methods="DELETE")
     */
    public function delete(Request $request, Infosms $infosm): Response
    {
        if ($this->isCsrfTokenValid('delete'.$infosm->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($infosm);
            $em->flush();
        }

        return $this->redirectToRoute('infosms_index');
    }
}
