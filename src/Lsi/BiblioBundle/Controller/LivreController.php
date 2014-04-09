<?php

namespace Lsi\BiblioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lsi\BiblioBundle\Entity\Livre;
use Lsi\BiblioBundle\Form\LivreType;
use Lsi\BiblioBundle\Entity\Collection;
use Lsi\BiblioBundle\Entity\AvisUserLivre;
use Lsi\BiblioBundle\Form\AvisUserLivreType;

/**
 * Livre controller.
 *
 */
class LivreController extends Controller
{

    /**
     * Lists all Livre entities.
     *
     */
    public function indexAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$collections = $em->getRepository('LsiBiblioBundle:collection')->getWithLivres();
		
		foreach($collections as $collection)
		{  
            $collection->setActiveLivres($em->getRepository('LsiBiblioBundle:Livre')->getActiveLivres($collection->getId(), $this->container->getParameter('max_livres_on_homepage')));
			$collection->setMoreLivres($em->getRepository('LsiBiblioBundle:Livre')->countActiveLivres($collection->getId()));
		}
        
        $livres_recents=$em->getRepository('LsiBiblioBundle:Livre')->getActiveLivres(NULL, $this->container->getParameter('max_livres_recenst'),NULL);
        $livres_populaire=$em->getRepository('LsiBiblioBundle:Livre')->getPopularLivres(NULL, $this->container->getParameter('max_livres_populaires'),NULL);
		
        $liste_auteurs=$em->getRepository('LsiBiblioBundle:Livre')->auteurLivres();
        
        return $this->render('LsiBiblioBundle:Livre:index.html.twig', array(
        		'collections' => $collections,
        		'livres_recents' => $livres_recents,
        		'livres_populaire' => $livres_populaire,
                'liste_auteurs'=>$liste_auteurs
        		));
    }
    /**
     * Creates a new Livre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Livre();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $entity->file->move(__DIR__.'/../../../../web/bundles/lsibiblio/images/thumbnails/', $entity->file->getClientOriginalName());
			$entity->setCouverture($entity->file->getClientOriginalName());
            
			$entity->file2->move(__DIR__.'/../../../../web/bundles/lsibiblio/images/thumbnails/', $entity->file2->getClientOriginalName()); 
			$entity->setSupport($entity->file2->getClientOriginalName());
			
			$entity->setNombreDeVue(0); 
            
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('lien_livre_show', 
            array(
                'id' => $entity->getId(),
				'collection' => $entity->getCollectionSlug(),
				'auteur' => $entity->getAuteurSlug(), 
				'titre' => $entity->getTitreSlug()
				)));
        }

        return $this->render('LsiBiblioBundle:Livre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
	public function allAction($page)
    {
        $em = $this->getDoctrine()->getManager(); 
		$total_livres = $em->getRepository('LsiBiblioBundle:Livre')->countActiveLivres(null,null,null);
		$livres_per_page = $this->container->getParameter('max_livres_on_collection');
		$last_page = ceil($total_livres / $livres_per_page);
		$previous_page = $page > 1 ? $page - 1 : 1;
		$next_page = $page < $last_page ? $page + 1 : $last_page;
		
		$list_livres=$em->getRepository('LsiBiblioBundle:Livre')->getActiveLivres(null,$livres_per_page, ($page - 1) * $livres_per_page,null,null);
		
        $liste_collection = $em->getRepository('LsiBiblioBundle:Collection')->findAll();
        
		return $this->render('LsiBiblioBundle:Livre:all.html.twig', array(
		'list_livres' => $list_livres,
		'last_page' => $last_page,
		'previous_page' => $previous_page,
		'current_page' => $page,
		'next_page' => $next_page,
		'total_livres' => $total_livres,
        'liste_collection'=>$liste_collection
		));
    }
    /**
    * Creates a form to create a Livre entity.
    *
    * @param Livre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Livre $entity)
    {
        $form = $this->createForm(new LivreType(), $entity, array(
            'action' => $this->generateUrl('lien_livre_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Livre entity.
     *
     */
    public function newAction()
    {
        $entity = new Livre();
        $form   = $this->createCreateForm($entity);

        return $this->render('LsiBiblioBundle:Livre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Livre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:Livre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livre entity.');
        }
 
        /*avis et commentaire*/
        $entity_avis= new AvisUserLivre();
        $avis_form = $this->createForm(new AvisUserLivreType(), $entity_avis, array(
            'action' => $this->generateUrl('lien_avis_create'),
            'method' => 'POST',
        ));   
          $avis_form->add('livre_id', 'hidden', array( 'data' => $id,));
        $avis_form->add('submit', 'submit', array('label' => 'envoyer'));
        /*fin avis commentaire*/


        return $this->render('LsiBiblioBundle:Livre:show.html.twig', array(
            'entity'      => $entity,
            'avis_form'   => $avis_form->createView()       ));
    }

    public function showAllAction($page)
    { 
        $em = $this->getDoctrine()->getManager(); 
		$total_livres = $em->getRepository('LsiBiblioBundle:Livre')->countActiveLivres(null,null,null);
		$livres_per_page = $this->container->getParameter('max_livres_on_collection');
		$last_page = ceil($total_livres / $livres_per_page);
		$previous_page = $page > 1 ? $page - 1 : 1;
		$next_page = $page < $last_page ? $page + 1 : $last_page;
		
		//$list_livres=$em->getRepository('LsiBiblioBundle:Livre')->getActiveLivres(null,$livres_per_page, ($page - 1) * $livres_per_page);
		
		$list_livres=$em->getRepository('LsiBiblioBundle:Livre')->getActiveLivres(null,$livres_per_page, ($page - 1) * $livres_per_page,null,null);
		
        
        //$em = $this->getDoctrine()->getManager();
        $liste_collection = $em->getRepository('LsiBiblioBundle:Collection')->findAll();
        
		return $this->render('LsiBiblioBundle:Livre:showAll.html.twig', array(
		'list_livres' => $list_livres,
		'last_page' => $last_page,
		'previous_page' => $previous_page,
		'current_page' => $page,
		'next_page' => $next_page,
		'total_livres' => $total_livres,
        'liste_collection'=>$liste_collection
		));
    }
    
    public function findAction(Request $request)
    { 
        $titre=null;$auteur=null;$collection=null;
        
        if($request->request->get('titre_find')!='')
		  $titre=$request->request->get('titre_find');
          
        if($request->request->get('auteur_find')!='')
          $auteur=$request->request->get('auteur_find'); 
          
        if($request->request->get('collection_find')!='')
		  $collection=$request->request->get('collection_find');
          
        $em = $this->getDoctrine()->getManager();  
        $list_livres=$em->getRepository('LsiBiblioBundle:Livre')->getActiveLivres($collection,null,null,$titre,$auteur); 
        $liste_collection = $em->getRepository('LsiBiblioBundle:Collection')->findAll();
        
		return $this->render('LsiBiblioBundle:Livre:showFind.html.twig', array(
		'list_livres' => $list_livres,
		'total_livres' => Count($list_livres),
        'liste_collection'=>$liste_collection
		));
    } 
    
    public function readAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:Livre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livre entity.');
        }
  
        /*avis et commentaire*/
        $entity_avis= new AvisUserLivre();
        $avis_form = $this->createForm(new AvisUserLivreType(), $entity_avis, array(
            'action' => $this->generateUrl('lien_avis_create'),
            'method' => 'POST',
        ));   
          $avis_form->add('livre_id', 'hidden', array( 'data' => $id,));
        $avis_form->add('submit', 'submit', array('label' => 'envoyer'));
        /*fin avis commentaire*/


        return $this->render('LsiBiblioBundle:Livre:read.html.twig', array(
            'entity'      => $entity,
            'avis_form'   => $avis_form->createView()       ));
    } 
    /**
     * Displays a form to edit an existing Livre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:Livre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livre entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LsiBiblioBundle:Livre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Livre entity.
    *
    * @param Livre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Livre $entity)
    {
        $form = $this->createForm(new LivreType(), $entity, array(
            'action' => $this->generateUrl('lien_livre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre a jours'));

        return $form;
    }
    /**
     * Edits an existing Livre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:Livre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) { 
            if(!empty($entity->file)){
                $entity->file->move(__DIR__.'/../../../../web/bundles/lsibiblio/images/thumbnails/', $entity->file->getClientOriginalName());
    			$entity->setCouverture($entity->file->getClientOriginalName());
            }
            if(!empty($entity->file2)){
    			$entity->file2->move(__DIR__.'/../../../../web/bundles/lsibiblio/images/thumbnails/', $entity->file2->getClientOriginalName()); 
    			$entity->setSupport($entity->file2->getClientOriginalName());
			}
            $em->flush();

            //return $this->redirect($this->generateUrl('lien_livre_edit', array('id' => $id)));
            return $this->redirect($this->generateUrl('lien_livre_show', 
            array(
                'id' => $entity->getId(),
				'collection' => $entity->getCollectionSlug(),
				'auteur' => $entity->getAuteurSlug(), 
				'titre' => $entity->getTitreSlug()
				)));
        }

        return $this->render('LsiBiblioBundle:Livre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Livre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LsiBiblioBundle:Livre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Livre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lien_livre'));
    }

    /**
     * Creates a form to delete a Livre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lien_livre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer ce livre'))
            ->getForm()
        ;
    }
}
