<?php

namespace Dojo\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Dojo\BackendBundle\Entity\Modulos;
use Dojo\BackendBundle\Form\ModulosType;

/**
 * Modulos controller.
 *
 */
class ModulosController extends Controller
{

    /**
     * Lists all Modulos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DojoBackendBundle:Modulos')->findAll();

        return $this->render('DojoBackendBundle:Modulos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Modulos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Modulos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('modulos_show', array('id' => $entity->getId())));
        }

        return $this->render('DojoBackendBundle:Modulos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Modulos entity.
     *
     * @param Modulos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Modulos $entity)
    {
        $form = $this->createForm(new ModulosType(), $entity, array(
            'action' => $this->generateUrl('modulos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Modulos entity.
     *
     */
    public function newAction()
    {
        $entity = new Modulos();
        $form   = $this->createCreateForm($entity);

        return $this->render('DojoBackendBundle:Modulos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Modulos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DojoBackendBundle:Modulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modulos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DojoBackendBundle:Modulos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Modulos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DojoBackendBundle:Modulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modulos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DojoBackendBundle:Modulos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Modulos entity.
    *
    * @param Modulos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Modulos $entity)
    {
        $form = $this->createForm(new ModulosType(), $entity, array(
            'action' => $this->generateUrl('modulos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Modulos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DojoBackendBundle:Modulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modulos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('modulos_edit', array('id' => $id)));
        }

        return $this->render('DojoBackendBundle:Modulos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Modulos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DojoBackendBundle:Modulos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Modulos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('modulos'));
    }

    /**
     * Creates a form to delete a Modulos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('modulos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
