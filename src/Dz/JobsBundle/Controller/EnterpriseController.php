<?php

namespace Dz\JobsBundle\Controller;

use Dz\JobsBundle\Entity\Enterprise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Enterprise controller.
 *
 */
class EnterpriseController extends Controller
{
    /**
     * Lists all enterprise entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enterprises = $em->getRepository('JobsBundle:Enterprise')->findAll();

        return $this->render('enterprise/index.html.twig', array(
            'enterprises' => $enterprises,
        ));
    }

    /**
     * Creates a new enterprise entity.
     *
     */
    public function newAction(Request $request)
    {
        $enterprise = new Enterprise();
        $form = $this->createForm('Dz\JobsBundle\Form\EnterpriseType', $enterprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enterprise);
            $em->flush($enterprise);

            return $this->redirectToRoute('entreprises_show', array('id' => $enterprise->getId()));
        }

        return $this->render('enterprise/new.html.twig', array(
            'enterprise' => $enterprise,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a enterprise entity.
     *
     */
    public function showAction(Enterprise $enterprise)
    {
        $deleteForm = $this->createDeleteForm($enterprise);

        return $this->render('enterprise/show.html.twig', array(
            'enterprise' => $enterprise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing enterprise entity.
     *
     */
    public function editAction(Request $request, Enterprise $enterprise)
    {
        $deleteForm = $this->createDeleteForm($enterprise);
        $editForm = $this->createForm('Dz\JobsBundle\Form\EnterpriseType', $enterprise);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('entreprises_edit', array('id' => $enterprise->getId()));
        }

        return $this->render('enterprise/edit.html.twig', array(
            'enterprise' => $enterprise,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a enterprise entity.
     *
     */
    public function deleteAction(Request $request, Enterprise $enterprise)
    {
        $form = $this->createDeleteForm($enterprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enterprise);
            $em->flush($enterprise);
        }

        return $this->redirectToRoute('entreprises_index');
    }

    /**
     * Creates a form to delete a enterprise entity.
     *
     * @param Enterprise $enterprise The enterprise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enterprise $enterprise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entreprises_delete', array('id' => $enterprise->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
