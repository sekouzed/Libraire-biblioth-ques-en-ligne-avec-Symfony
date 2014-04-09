<?php

namespace Lsi\BiblioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lsi\BiblioBundle\Entity\User;
use Lsi\BiblioBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LsiBiblioBundle:User')->findAll();

        return $this->render('LsiBiblioBundle:User:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$entity->setRole('user'); 
			$entity->setUserSuspendu(true);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lien_user_show', array('id' => $entity->getId())));
        }

        return $this->render('LsiBiblioBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('lien_user_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Envoyer'));

        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('LsiBiblioBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LsiBiblioBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);//pour un simple utilisateur
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LsiBiblioBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    public function editAdminAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditFormAdmin($entity);//pour les adminstrateur
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LsiBiblioBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('lien_user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        )); 
        $form->add('submit', 'submit', array('label' => 'Mettre a jours'));

        return $form;
    }
    private function createEditFormAdmin(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('lien_user_update_admin', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->remove('password');
        $form->add('role','choice', array('choices' => array('user' => 'utilisateur', 'admin' => 'administrateur'), 'expanded' => false));
        $form->add('userSuspendu');
        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lien_user_edit', array('id' => $id)));
        }

        return $this->render('LsiBiblioBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function modifAction(Request $request)
    {
        $id=$request->request->get('id');
       $role=$request->request->get('role');
       $suspendu=$request->request->get('suspendu'); 
       
        $em = $this->getDoctrine()->getManager(); 
        $entity = $em->getRepository('LsiBiblioBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
             
			$entity->setRole($role); 
			$entity->setUserSuspendu($suspendu);
            $em->persist($entity);
            $em->flush();
            /*
        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lien_user_edit', array('id' => $id)));
        }
*/
            return $this->redirect($this->generateUrl('lien_user'));
    }
    public function updateAdminAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditFormAdmin($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lien_user_edit_admin', array('id' => $id)));
        }

        return $this->render('LsiBiblioBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LsiBiblioBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lien_livre'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lien_user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer ce compte'))
            ->getForm()
        ;
    }
    
    /**
     * login User .
     *
     */
    public function loginAction(Request $request)
    {
        $mail_user=$request->request->get('mail_user');
        $pwd_user=$request->request->get('pwd_user'); 
        
        $em = $this->getDoctrine()->getManager();

        $entity = new User(); 
       $entity = $em->getRepository('LsiBiblioBundle:User')->findOneBy(array('userSuspendu' => false,'email' => $mail_user,'password' => $pwd_user));
 // $entity = $em->getRepository('LsiBiblioBundle:User')->findOneBy(array('email' => $mail_user,'password' => $pwd_user));
 
        if (!$entity) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }
        
         $session = $this->getRequest()->getSession();
         if (!$session->isStarted()){ 
            //$session = new Session();
            //$session->start(); 
            $session->set('loginId', $entity->getId());
            $session->set('loginNomComplet', $entity->getNomComplet());
            $session->set('loginEmail', $entity->getEmail());
            $session->set('loginAge', $entity->getAge());
            $session->set('loginRole', $entity->getRole());
            $session->set('loginUserSuspendu', $entity->getUserSuspendu());
          }
         // else
       
        $deleteForm = $this->createDeleteForm($entity->getId());

        return $this->render('LsiBiblioBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
    /**
     * login User .
     *
     */
    public function logoutAction()
    {  
        //$session = new Session();
        $session = $this->getRequest()->getSession();
        $session->invalidate();
        return $this->redirect($this->generateUrl('lien_livre'));
    }
}
