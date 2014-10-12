<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\Vehiculos;
use Sistema\SisreimpBundle\Entity\VehiculoRepository;
use Sistema\SisreimpBundle\Form\VehiculosType;

/**
 * Vehiculos controller.
 *
 * @Route("/vehiculos")
 */
class VehiculosController extends Controller {

    /**
     * Lists all Vehiculos entities.
     *
     * @Route("/", name="vehiculos")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:Vehiculos')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Vehiculos entity.
     *
     * @Route("/", name="vehiculos_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:Vehiculos:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Vehiculos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setStatus(1);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vehiculos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    public function impuestoVehiculo($id_ve) {

        $em = $this->getDoctrine()->getManager();
        $entities_vh = $em->getRepository('SistemaSisreimpBundle:Vehiculos')->find($id_ve);
        $monto = $entities_vh->getCosto();
        
        //$fecha( date('Y')-  )
        
        
        
        
        $ano = $entities_vh->getAno();
        $tipo = $entities_vh->getTipo();
        $entities_tipo = $em->getRepository('SistemaSisreimpBundle:tipoVehiculo')->find($tipo);
        $porce = $entities_tipo->getporcAlicuota();
        $impuesto = ($monto * $porce) / 100;
        return $impuesto;
    }

    /**
     * Creates a form to create a Vehiculos entity.
     *
     * @param Vehiculos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Vehiculos $entity) {
        $form = $this->createForm(new VehiculosType(), $entity, array(
            'action' => $this->generateUrl('vehiculos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vehiculos entity.
     *
     * @Route("/new", name="vehiculos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Vehiculos();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Vehiculos entity.
     *
     * @Route("/{id}", name="vehiculos_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Vehiculos')->find($id);
        $imp = $this->impuestoVehiculo($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vehiculos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'impuesto' => $imp,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Vehiculos entity.
     *
     * @Route("/{id}/edit", name="vehiculos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Vehiculos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vehiculos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Vehiculos entity.
     *
     * @param Vehiculos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Vehiculos $entity) {
        $form = $this->createForm(new VehiculosType(), $entity, array(
            'action' => $this->generateUrl('vehiculos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Vehiculos entity.
     *
     * @Route("/{id}", name="vehiculos_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:Vehiculos:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Vehiculos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vehiculos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vehiculos_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Vehiculos entity.
     *
     * @Route("/{id}", name="vehiculos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:Vehiculos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vehiculos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vehiculos'));
    }

    /**
     * Creates a form to delete a Vehiculos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('vehiculos_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
