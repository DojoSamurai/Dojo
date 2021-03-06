<?php

namespace Dojo\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Dojo\BackendBundle\Entity\Asignaturas;
use Dojo\BackendBundle\Form\AsignaturasType;

/**
 * Asignaturas controller.
 *
 */
class AsignaturasController extends Controller
{

    /**
     * Lists all Asignaturas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DojoBackendBundle:Asignaturas')->findAll();

        return $this->render('DojoBackendBundle:Asignaturas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Asignaturas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Asignaturas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('asignaturas_show', array('id' => $entity->getId())));
        }

        return $this->render('DojoBackendBundle:Asignaturas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Asignaturas entity.
     *
     * @param Asignaturas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Asignaturas $entity)
    {
        $form = $this->createForm(new AsignaturasType(), $entity, array(
            'action' => $this->generateUrl('asignaturas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Asignaturas entity.
     *
     */
    public function newAction()
    {
        $entity = new Asignaturas();
        $form   = $this->createCreateForm($entity);

        return $this->render('DojoBackendBundle:Asignaturas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Asignaturas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DojoBackendBundle:Asignaturas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Asignaturas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DojoBackendBundle:Asignaturas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Asignaturas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DojoBackendBundle:Asignaturas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Asignaturas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DojoBackendBundle:Asignaturas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Asignaturas entity.
    *
    * @param Asignaturas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Asignaturas $entity)
    {
        $form = $this->createForm(new AsignaturasType(), $entity, array(
            'action' => $this->generateUrl('asignaturas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Asignaturas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DojoBackendBundle:Asignaturas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Asignaturas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('asignaturas_edit', array('id' => $id)));
        }

        return $this->render('DojoBackendBundle:Asignaturas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Asignaturas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DojoBackendBundle:Asignaturas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Asignaturas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('asignaturas'));
    }

    /**
     * Creates a form to delete a Asignaturas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('asignaturas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
