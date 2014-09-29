<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\Contribuyente;
use Sistema\SisreimpBundle\Form\ContribuyenteType;

/**
 * Contribuyente controller.
 *
 * @Route("/contribuyentes")
 */
class ContribuyenteController extends Controller
{

    /**
     * Lists all Contribuyente entities.
     *
     * @Route("/", name="contribuyente")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:Contribuyente')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Contribuyente entity.
     *
     * @Route("/", name="contribuyente_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:Contribuyente:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Contribuyente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contribuyente_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Contribuyente entity.
    *
    * @param Contribuyente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Contribuyente $entity)
    {
        $form = $this->createForm(new ContribuyenteType(), $entity, array(
            'action' => $this->generateUrl('contribuyente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Contribuyente entity.
     *
     * @Route("/new", name="contribuyente_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Contribuyente();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Contribuyente entity.
     *
     * @Route("/{id}", name="contribuyente_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Contribuyente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contribuyente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Contribuyente entity.
     *
     * @Route("/{id}/edit", name="contribuyente_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Contribuyente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contribuyente entity.');
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
    * Creates a form to edit a Contribuyente entity.
    *
    * @param Contribuyente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contribuyente $entity)
    {
        $form = $this->createForm(new ContribuyenteType(), $entity, array(
            'action' => $this->generateUrl('contribuyente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Contribuyente entity.
     *
     * @Route("/{id}", name="contribuyente_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:Contribuyente:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Contribuyente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contribuyente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('contribuyente_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Contribuyente entity.
     *
     * @Route("/{id}", name="contribuyente_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:Contribuyente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contribuyente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contribuyente'));
    }

    /**
     * Creates a form to delete a Contribuyente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contribuyente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
