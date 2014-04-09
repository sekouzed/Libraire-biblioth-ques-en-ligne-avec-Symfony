<?php

namespace Lsi\BiblioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lsi\BiblioBundle\Entity\AvisUserLivre;
use Lsi\BiblioBundle\Form\AvisUserLivreType;
use Lsi\BiblioBundle\Entity\Livre;
use Lsi\BiblioBundle\Entity\User;

/**
 * AvisUserLivre controller.
 *
 */
class AvisUserLivreController extends Controller
{

    /**
     * Lists all AvisUserLivre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LsiBiblioBundle:AvisUserLivre')->findAll();

        return $this->render('LsiBiblioBundle:AvisUserLivre:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AvisUserLivre entity.
     *
     */
    public function createAction(Request $request)
    {
        
        $entity = new AvisUserLivre();
        $form = $this->createForm(new AvisUserLivreType(), $entity, array(
            'action' => $this->generateUrl('lien_avis_create'),
            'method' => 'POST',
        ));

          $form->add('livre_id', 'hidden');
        $form->add('submit', 'submit', array('label' => 'Create'));
        $form->handleRequest($request);

        if ($form->isValid()) {
            
             $session = $this->getRequest()->getSession();
            //$k=$session->get('loginId');
            // if (isset($session->get('loginId'))){ 
            
            $em = $this->getDoctrine()->getManager();
            $entity->setLivre($em->getRepository('LsiBiblioBundle:Livre')->find($entity->livre_id));
            $entity->setUser($em->getRepository('LsiBiblioBundle:User')->find($session->get('loginId'))); 
            $em->persist($entity);
            $em->flush();
            
            return $this->redirect($this->generateUrl('lien_avis_show', array('id' => $entity->getId())));
        }

        return $this->render('LsiBiblioBundle:AvisUserLivre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a AvisUserLivre entity.
    *
    * @param AvisUserLivre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(AvisUserLivre $entity)
    {
        $form = $this->createForm(new AvisUserLivreType(), $entity, array(
            'action' => $this->generateUrl('lien_avis_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new AvisUserLivre entity.
     *
     */
    public function newAction()
    {
        $entity = new AvisUserLivre();
        $form   = $this->createCreateForm($entity);

        return $this->render('LsiBiblioBundle:AvisUserLivre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AvisUserLivre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:AvisUserLivre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AvisUserLivre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LsiBiblioBundle:AvisUserLivre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing AvisUserLivre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:AvisUserLivre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AvisUserLivre entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LsiBiblioBundle:AvisUserLivre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AvisUserLivre entity.
    *
    * @param AvisUserLivre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AvisUserLivre $entity)
    {
        $form = $this->createForm(new AvisUserLivreType(), $entity, array(
            'action' => $this->generateUrl('lien_avis_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre a jours'));

        return $form;
    }
    /**
     * Edits an existing AvisUserLivre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:AvisUserLivre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AvisUserLivre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lien_avis_edit', array('id' => $id)));
        }

        return $this->render('LsiBiblioBundle:AvisUserLivre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AvisUserLivre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LsiBiblioBundle:AvisUserLivre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AvisUserLivre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lien_avis'));
    }

    /**
     * Creates a form to delete a AvisUserLivre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lien_avis_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer cet avis'))
            ->getForm()
        ;
    }
}
