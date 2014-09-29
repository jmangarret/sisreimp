<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\SisreimpBundle\Entity\Clasificacion;
use Sistema\SisreimpBundle\Form\ClasificacionType;

/**
 * Clasificacion controller.
 *
 * @Route("/clasificacion")
 */
class ClasificacionController extends Controller
{

    /**
     * Lists all Clasificacion entities.
     *
     * @Route("/", name="clasificacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaSisreimpBundle:Clasificacion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Clasificacion entity.
     *
     * @Route("/", name="clasificacion_create")
     * @Method("POST")
     * @Template("SistemaSisreimpBundle:Clasificacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Clasificacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clasificacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Clasificacion entity.
    *
    * @param Clasificacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Clasificacion $entity)
    {
        $form = $this->createForm(new ClasificacionType(), $entity, array(
            'action' => $this->generateUrl('clasificacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Clasificacion entity.
     *
     * @Route("/new", name="clasificacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Clasificacion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Clasificacion entity.
     *
     * @Route("/{id}", name="clasificacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Clasificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clasificacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Clasificacion entity.
     *
     * @Route("/{id}/edit", name="clasificacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Clasificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clasificacion entity.');
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
    * Creates a form to edit a Clasificacion entity.
    *
    * @param Clasificacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Clasificacion $entity)
    {
        $form = $this->createForm(new ClasificacionType(), $entity, array(
            'action' => $this->generateUrl('clasificacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Clasificacion entity.
     *
     * @Route("/{id}", name="clasificacion_update")
     * @Method("PUT")
     * @Template("SistemaSisreimpBundle:Clasificacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaSisreimpBundle:Clasificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clasificacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clasificacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Clasificacion entity.
     *
     * @Route("/{id}", name="clasificacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaSisreimpBundle:Clasificacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Clasificacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clasificacion'));
    }

    /**
     * Creates a form to delete a Clasificacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clasificacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
