<?php

namespace Lsi\BiblioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lsi\BiblioBundle\Entity\Collection;
use Lsi\BiblioBundle\Form\CollectionType;

/**
 * Collection controller.
 *
 */
class CollectionController extends Controller
{

    /**
     * Lists all Collection entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LsiBiblioBundle:Collection')->findAll();

        return $this->render('LsiBiblioBundle:Collection:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Collection entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Collection();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lien_collection_show', array('id' => $entity->getId(),'slug' => $entity->getSlug())));
        }

        return $this->render('LsiBiblioBundle:Collection:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Collection entity.
    *
    * @param Collection $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Collection $entity)
    {
        $form = $this->createForm(new CollectionType(), $entity, array(
            'action' => $this->generateUrl('lien_collection_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Collection entity.
     *
     */
    public function newAction()
    {
        $entity = new Collection();
        $form   = $this->createCreateForm($entity);

        return $this->render('LsiBiblioBundle:Collection:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Collection entity.
     *
     */
    public function showAction($id,$slug, $page) 
    {
		$em = $this->getDoctrine()->getEntityManager();
		$collection = $em->getRepository('LsiBiblioBundle:Collection')->findOneById($id);
		if (!$collection) {
			throw $this->createNotFoundException('Unable to find Collection entity.');
		}
		$total_livres = $em->getRepository('LsiBiblioBundle:Livre')->countActiveLivres($collection->getId());
		$livres_per_page = $this->container->getParameter('max_livres_on_collection');
		$last_page = ceil($total_livres / $livres_per_page);
		$previous_page = $page > 1 ? $page - 1 : 1;
		$next_page = $page < $last_page ? $page + 1 : $last_page;
		$collection->setActiveLivres($em->getRepository('LsiBiblioBundle:Livre')->getActiveLivres($collection->getId(), $livres_per_page, ($page - 1) * $livres_per_page));
		return $this->render('LsiBiblioBundle:Collection:show.html.twig', array(
		'collection' => $collection,
		'last_page' => $last_page,
		'previous_page' => $previous_page,
		'current_page' => $page,
		'next_page' => $next_page,
		'total_livres' => $total_livres
		));
    }

    /**
     * Displays a form to edit an existing Collection entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:Collection')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Collection entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LsiBiblioBundle:Collection:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Collection entity.
    *
    * @param Collection $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Collection $entity)
    {
        $form = $this->createForm(new CollectionType(), $entity, array(
            'action' => $this->generateUrl('lien_collection_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre a jours'));

        return $form;
    }
    /**
     * Edits an existing Collection entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LsiBiblioBundle:Collection')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Collection entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lien_collection_edit', array('id' => $id)));
        }

        return $this->render('LsiBiblioBundle:Collection:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Collection entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LsiBiblioBundle:Collection')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Collection entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lien_collection'));
    }

    /**
     * Creates a form to delete a Collection entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lien_collection_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer cette collection'))
            ->getForm()
        ;
    }
}
