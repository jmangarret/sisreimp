<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\LicenciaActEcon;
use Sistema\SisreimpBundle\Form\LicenciaActEconType;

/**
 * LicenciaActEcon controller.
 *
 * @Route("/licenciaactecon")
 */
class LicenciaActEconController extends Controller
{

    /**
     * Lists all LicenciaActEcon entities.
     *
     * @Route("/", name="licenciaactecon")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:LicenciaActEcon')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new LicenciaActEcon entity.
     *
     * @Route("/", name="licenciaactecon_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:LicenciaActEcon:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new LicenciaActEcon();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('licenciaactecon_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a LicenciaActEcon entity.
    *
    * @param LicenciaActEcon $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(LicenciaActEcon $entity)
    {
        $form = $this->createForm(new LicenciaActEconType(), $entity, array(
            'action' => $this->generateUrl('licenciaactecon_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LicenciaActEcon entity.
     *
     * @Route("/new", name="licenciaactecon_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LicenciaActEcon();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a LicenciaActEcon entity.
     *
     * @Route("/{id}", name="licenciaactecon_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:LicenciaActEcon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LicenciaActEcon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LicenciaActEcon entity.
     *
     * @Route("/{id}/edit", name="licenciaactecon_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:LicenciaActEcon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LicenciaActEcon entity.');
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
    * Creates a form to edit a LicenciaActEcon entity.
    *
    * @param LicenciaActEcon $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LicenciaActEcon $entity)
    {
        $form = $this->createForm(new LicenciaActEconType(), $entity, array(
            'action' => $this->generateUrl('licenciaactecon_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LicenciaActEcon entity.
     *
     * @Route("/{id}", name="licenciaactecon_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:LicenciaActEcon:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:LicenciaActEcon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LicenciaActEcon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('licenciaactecon_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a LicenciaActEcon entity.
     *
     * @Route("/{id}", name="licenciaactecon_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:LicenciaActEcon')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LicenciaActEcon entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('licenciaactecon'));
    }

    /**
     * Creates a form to delete a LicenciaActEcon entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('licenciaactecon_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
