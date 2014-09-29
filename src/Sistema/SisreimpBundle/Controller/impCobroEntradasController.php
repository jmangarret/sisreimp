<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\impCobroEntradas;
use Sistema\SisreimpBundle\Form\impCobroEntradasType;

/**
 * impCobroEntradas controller.
 *
 * @Route("/impcobroentradas")
 */
class impCobroEntradasController extends Controller
{

    /**
     * Lists all impCobroEntradas entities.
     *
     * @Route("/", name="impcobroentradas")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:impCobroEntradas')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new impCobroEntradas entity.
     *
     * @Route("/", name="impcobroentradas_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:impCobroEntradas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new impCobroEntradas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('impcobroentradas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a impCobroEntradas entity.
    *
    * @param impCobroEntradas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(impCobroEntradas $entity)
    {
        $form = $this->createForm(new impCobroEntradasType(), $entity, array(
            'action' => $this->generateUrl('impcobroentradas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new impCobroEntradas entity.
     *
     * @Route("/new", name="impcobroentradas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new impCobroEntradas();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a impCobroEntradas entity.
     *
     * @Route("/{id}", name="impcobroentradas_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:impCobroEntradas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find impCobroEntradas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing impCobroEntradas entity.
     *
     * @Route("/{id}/edit", name="impcobroentradas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:impCobroEntradas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find impCobroEntradas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a impCobroEntradas entity.
    *
    * @param impCobroEntradas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(impCobroEntradas $entity)
    {
        $form = $this->createForm(new impCobroEntradasType(), $entity, array(
            'action' => $this->generateUrl('impcobroentradas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing impCobroEntradas entity.
     *
     * @Route("/{id}", name="impcobroentradas_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:impCobroEntradas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:impCobroEntradas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find impCobroEntradas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('impcobroentradas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a impCobroEntradas entity.
     *
     * @Route("/{id}", name="impcobroentradas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:impCobroEntradas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find impCobroEntradas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('impcobroentradas'));
    }

    /**
     * Creates a form to delete a impCobroEntradas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('impcobroentradas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
