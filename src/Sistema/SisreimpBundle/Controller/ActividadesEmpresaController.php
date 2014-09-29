<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\ActividadesEmpresa;
use Sistema\SisreimpBundle\Form\ActividadesEmpresaType;

/**
 * ActividadesEmpresa controller.
 *
 * @Route("/actividadesempresa")
 */
class ActividadesEmpresaController extends Controller
{

    /**
     * Lists all ActividadesEmpresa entities.
     *
     * @Route("/", name="actividadesempresa")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:ActividadesEmpresa')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ActividadesEmpresa entity.
     *
     * @Route("/", name="actividadesempresa_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:ActividadesEmpresa:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ActividadesEmpresa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('actividadesempresa_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ActividadesEmpresa entity.
    *
    * @param ActividadesEmpresa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ActividadesEmpresa $entity)
    {
        $form = $this->createForm(new ActividadesEmpresaType(), $entity, array(
            'action' => $this->generateUrl('actividadesempresa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ActividadesEmpresa entity.
     *
     * @Route("/new", name="actividadesempresa_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ActividadesEmpresa();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ActividadesEmpresa entity.
     *
     * @Route("/{id}", name="actividadesempresa_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:ActividadesEmpresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ActividadesEmpresa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ActividadesEmpresa entity.
     *
     * @Route("/{id}/edit", name="actividadesempresa_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:ActividadesEmpresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ActividadesEmpresa entity.');
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
    * Creates a form to edit a ActividadesEmpresa entity.
    *
    * @param ActividadesEmpresa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ActividadesEmpresa $entity)
    {
        $form = $this->createForm(new ActividadesEmpresaType(), $entity, array(
            'action' => $this->generateUrl('actividadesempresa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ActividadesEmpresa entity.
     *
     * @Route("/{id}", name="actividadesempresa_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:ActividadesEmpresa:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:ActividadesEmpresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ActividadesEmpresa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('actividadesempresa_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ActividadesEmpresa entity.
     *
     * @Route("/{id}", name="actividadesempresa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:ActividadesEmpresa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ActividadesEmpresa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('actividadesempresa'));
    }

    /**
     * Creates a form to delete a ActividadesEmpresa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actividadesempresa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
