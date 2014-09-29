<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\tipoVehiculo;
use Sistema\SisreimpBundle\Form\tipoVehiculoType;

/**
 * tipoVehiculo controller.
 *
 * @Route("/tipovehiculo")
 */
class tipoVehiculoController extends Controller
{

    /**
     * Lists all tipoVehiculo entities.
     *
     * @Route("/", name="tipovehiculo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:tipoVehiculo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new tipoVehiculo entity.
     *
     * @Route("/", name="tipovehiculo_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:tipoVehiculo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new tipoVehiculo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipovehiculo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a tipoVehiculo entity.
    *
    * @param tipoVehiculo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(tipoVehiculo $entity)
    {
        $form = $this->createForm(new tipoVehiculoType(), $entity, array(
            'action' => $this->generateUrl('tipovehiculo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tipoVehiculo entity.
     *
     * @Route("/new", name="tipovehiculo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new tipoVehiculo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a tipoVehiculo entity.
     *
     * @Route("/{id}", name="tipovehiculo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:tipoVehiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipoVehiculo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing tipoVehiculo entity.
     *
     * @Route("/{id}/edit", name="tipovehiculo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:tipoVehiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipoVehiculo entity.');
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
    * Creates a form to edit a tipoVehiculo entity.
    *
    * @param tipoVehiculo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tipoVehiculo $entity)
    {
        $form = $this->createForm(new tipoVehiculoType(), $entity, array(
            'action' => $this->generateUrl('tipovehiculo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tipoVehiculo entity.
     *
     * @Route("/{id}", name="tipovehiculo_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:tipoVehiculo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:tipoVehiculo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipoVehiculo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipovehiculo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a tipoVehiculo entity.
     *
     * @Route("/{id}", name="tipovehiculo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:tipoVehiculo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tipoVehiculo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipovehiculo'));
    }

    /**
     * Creates a form to delete a tipoVehiculo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipovehiculo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
