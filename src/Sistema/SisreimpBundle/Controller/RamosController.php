<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\Ramos;
use Sistema\SisreimpBundle\Form\RamosType;

/**
 * Ramos controller.
 *
 * @Route("/ramos")
 */
class RamosController extends Controller
{

    /**
     * Lists all Ramos entities.
     *
     * @Route("/", name="ramos")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:Ramos')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Ramos entity.
     *
     * @Route("/", name="ramos_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:Ramos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Ramos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ramos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Ramos entity.
    *
    * @param Ramos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Ramos $entity)
    {
        $form = $this->createForm(new RamosType(), $entity, array(
            'action' => $this->generateUrl('ramos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ramos entity.
     *
     * @Route("/new", name="ramos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ramos();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ramos entity.
     *
     * @Route("/{id}", name="ramos_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Ramos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ramos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ramos entity.
     *
     * @Route("/{id}/edit", name="ramos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Ramos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ramos entity.');
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
    * Creates a form to edit a Ramos entity.
    *
    * @param Ramos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ramos $entity)
    {
        $form = $this->createForm(new RamosType(), $entity, array(
            'action' => $this->generateUrl('ramos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ramos entity.
     *
     * @Route("/{id}", name="ramos_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:Ramos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Ramos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ramos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ramos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Ramos entity.
     *
     * @Route("/{id}", name="ramos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:Ramos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ramos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ramos'));
    }

    /**
     * Creates a form to delete a Ramos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ramos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
