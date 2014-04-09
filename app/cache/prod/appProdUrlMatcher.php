<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/collection')) {
            // lien_collection
            if (rtrim($pathinfo, '/') === '/collection') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lien_collection');
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::indexAction',  '_route' => 'lien_collection',);
            }

            // lien_collection_show
            if (preg_match('#^/collection/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_collection_show')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::showAction',));
            }

            // lien_collection_new
            if ($pathinfo === '/collection/new') {
                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::newAction',  '_route' => 'lien_collection_new',);
            }

            // lien_collection_create
            if ($pathinfo === '/collection/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lien_collection_create;
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::createAction',  '_route' => 'lien_collection_create',);
            }
            not_lien_collection_create:

            // lien_collection_edit
            if (preg_match('#^/collection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_collection_edit')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::editAction',));
            }

            // lien_collection_update
            if (preg_match('#^/collection/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_lien_collection_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_collection_update')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::updateAction',));
            }
            not_lien_collection_update:

            // lien_collection_delete
            if (preg_match('#^/collection/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_lien_collection_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_collection_delete')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::deleteAction',));
            }
            not_lien_collection_delete:

        }

        if (0 === strpos($pathinfo, '/avis')) {
            // lien_avis
            if (rtrim($pathinfo, '/') === '/avis') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lien_avis');
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::indexAction',  '_route' => 'lien_avis',);
            }

            // lien_avis_show
            if (preg_match('#^/avis/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_avis_show')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::showAction',));
            }

            // lien_avis_new
            if ($pathinfo === '/avis/new') {
                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::newAction',  '_route' => 'lien_avis_new',);
            }

            // lien_avis_create
            if ($pathinfo === '/avis/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lien_avis_create;
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::createAction',  '_route' => 'lien_avis_create',);
            }
            not_lien_avis_create:

            // lien_avis_edit
            if (preg_match('#^/avis/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_avis_edit')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::editAction',));
            }

            // lien_avis_update
            if (preg_match('#^/avis/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_lien_avis_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_avis_update')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::updateAction',));
            }
            not_lien_avis_update:

            // lien_avis_delete
            if (preg_match('#^/avis/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_lien_avis_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_avis_delete')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::deleteAction',));
            }
            not_lien_avis_delete:

        }

        if (0 === strpos($pathinfo, '/livre')) {
            // lien_livre
            if (rtrim($pathinfo, '/') === '/livre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lien_livre');
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::indexAction',  '_route' => 'lien_livre',);
            }

            // lien_livre_show
            if (preg_match('#^/livre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_livre_show')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::showAction',));
            }

            // lien_livre_new
            if ($pathinfo === '/livre/new') {
                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::newAction',  '_route' => 'lien_livre_new',);
            }

            // lien_livre_create
            if ($pathinfo === '/livre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lien_livre_create;
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::createAction',  '_route' => 'lien_livre_create',);
            }
            not_lien_livre_create:

            // lien_livre_edit
            if (preg_match('#^/livre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_livre_edit')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::editAction',));
            }

            // lien_livre_update
            if (preg_match('#^/livre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_lien_livre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_livre_update')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::updateAction',));
            }
            not_lien_livre_update:

            // lien_livre_delete
            if (preg_match('#^/livre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_lien_livre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_livre_delete')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::deleteAction',));
            }
            not_lien_livre_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // lien_user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lien_user');
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::indexAction',  '_route' => 'lien_user',);
            }

            // lien_user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_user_show')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::showAction',));
            }

            // lien_user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::newAction',  '_route' => 'lien_user_new',);
            }

            // lien_user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lien_user_create;
                }

                return array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::createAction',  '_route' => 'lien_user_create',);
            }
            not_lien_user_create:

            // lien_user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_user_edit')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::editAction',));
            }

            // lien_user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_lien_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_user_update')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::updateAction',));
            }
            not_lien_user_update:

            // lien_user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_lien_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lien_user_delete')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::deleteAction',));
            }
            not_lien_user_delete:

        }

        // lsi_biblio_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lsi_biblio_homepage')), array (  '_controller' => 'Lsi\\BiblioBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
