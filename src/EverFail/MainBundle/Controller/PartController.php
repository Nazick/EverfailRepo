<?php

namespace EverFail\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EverFail\MainBundle\Entity\Part;
use EverFail\MainBundle\Form\PartType;

/**
 * Part controller.
 *
 */
class PartController extends Controller {

    /**
     * Lists all Part entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EverFailMainBundle:Part')->findAll();

        return $this->render('EverFailMainBundle:Part:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Part entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Part();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $amounts = $form->get('amount');
        $amount = $amounts->getData();
        
        if ($form->isValid()) {
            for ($temp = 1; $temp <= $amount; $temp++) {
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($entity);
                    $em->flush();
                    $entity = new Part();
                    $form = $this->createCreateForm($entity);
                    $form->handleRequest($request);
                }
            }
            return $this->render('EverFailMainBundle:Default:index.html.twig', array('amount' => $amount));
        }
        return $this->render('EverFailMainBundle:Part:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Part entity.
     *
     * @param Part $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Part $entity) {
        $form = $this->createForm(new PartType(), $entity, array(
            'action' => $this->generateUrl('part_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Part entity.
     *
     */
    public function newAction() {
        $entity = new Part();
        $form = $this->createCreateForm($entity);

        return $this->render('EverFailMainBundle:Part:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Part entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EverFailMainBundle:Part')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Part entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EverFailMainBundle:Part:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Part entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EverFailMainBundle:Part')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Part entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EverFailMainBundle:Part:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Part entity.
     *
     * @param Part $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Part $entity) {
        $form = $this->createForm(new PartType(), $entity, array(
            'action' => $this->generateUrl('part_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Part entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EverFailMainBundle:Part')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Part entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('part_edit', array('id' => $id)));
        }

        return $this->render('EverFailMainBundle:Part:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Part entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EverFailMainBundle:Part')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Part entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('part'));
    }

    /**
     * Creates a form to delete a Part entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('part_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
