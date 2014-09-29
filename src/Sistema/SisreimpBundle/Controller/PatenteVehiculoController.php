<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\PatenteVehiculo;
use Sistema\SisreimpBundle\Form\PatenteVehiculoType;

/**
 * PatenteVehiculo controller.
 *
 * @Route("/patentevehiculo")
 */
class PatenteVehiculoController extends Controller
{

    /**
     * Lists all PatenteVehiculo entities.
     *
     * @Route("/", name="patentevehiculo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:PatenteVehiculo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new PatenteVehiculo entity.
     *
     * @Route("/", name="patentevehiculo_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:PatenteVehiculo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new PatenteVehiculo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('patentevehiculo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a PatenteVehiculo entity.
    *
    * @param PatenteVehiculo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PatenteVehiculo $entity)
    {
        $form = $this->createForm(new PatenteVehiculoType(), $entity, array(
            'action' => $this->generateUrl('patentevehiculo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PatenteVehiculo entity.
     *
     * @Route("/new", name="patentevehiculo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PatenteVehiculo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a PatenteVehiculo entity.
     *
     * @Route("/{id}", name="patentevehiculo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:PatenteVehiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PatenteVehiculo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing PatenteVehiculo entity.
     *
     * @Route("/{id}/edit", name="patentevehiculo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:PatenteVehiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PatenteVehiculo entity.');
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
    * Creates a form to edit a PatenteVehiculo entity.
    *
    * @param PatenteVehiculo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PatenteVehiculo $entity)
    {
        $form = $this->createForm(new PatenteVehiculoType(), $entity, array(
            'action' => $this->generateUrl('patentevehiculo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PatenteVehiculo entity.
     *
     * @Route("/{id}", name="patentevehiculo_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:PatenteVehiculo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:PatenteVehiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PatenteVehiculo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('patentevehiculo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a PatenteVehiculo entity.
     *
     * @Route("/{id}", name="patentevehiculo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:PatenteVehiculo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PatenteVehiculo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('patentevehiculo'));
    }

    /**
     * Creates a form to delete a PatenteVehiculo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('patentevehiculo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
