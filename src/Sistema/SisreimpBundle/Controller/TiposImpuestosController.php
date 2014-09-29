<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\TiposImpuestos;
use Sistema\SisreimpBundle\Form\TiposImpuestosType;

/**
 * TiposImpuestos controller.
 *
 * @Route("/tiposimpuestos")
 */
class TiposImpuestosController extends Controller
{

    /**
     * Lists all TiposImpuestos entities.
     *
     * @Route("/", name="tiposimpuestos")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:TiposImpuestos')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new TiposImpuestos entity.
     *
     * @Route("/", name="tiposimpuestos_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:TiposImpuestos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new TiposImpuestos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiposimpuestos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a TiposImpuestos entity.
    *
    * @param TiposImpuestos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TiposImpuestos $entity)
    {
        $form = $this->createForm(new TiposImpuestosType(), $entity, array(
            'action' => $this->generateUrl('tiposimpuestos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TiposImpuestos entity.
     *
     * @Route("/new", name="tiposimpuestos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TiposImpuestos();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TiposImpuestos entity.
     *
     * @Route("/{id}", name="tiposimpuestos_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:TiposImpuestos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TiposImpuestos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TiposImpuestos entity.
     *
     * @Route("/{id}/edit", name="tiposimpuestos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:TiposImpuestos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TiposImpuestos entity.');
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
    * Creates a form to edit a TiposImpuestos entity.
    *
    * @param TiposImpuestos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TiposImpuestos $entity)
    {
        $form = $this->createForm(new TiposImpuestosType(), $entity, array(
            'action' => $this->generateUrl('tiposimpuestos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TiposImpuestos entity.
     *
     * @Route("/{id}", name="tiposimpuestos_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:TiposImpuestos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:TiposImpuestos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TiposImpuestos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiposimpuestos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TiposImpuestos entity.
     *
     * @Route("/{id}", name="tiposimpuestos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:TiposImpuestos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TiposImpuestos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiposimpuestos'));
    }

    /**
     * Creates a form to delete a TiposImpuestos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiposimpuestos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
