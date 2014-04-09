<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'lien_collection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/collection/',    ),  ),  4 =>   array (  ),),
        'lien_collection_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/collection',    ),  ),  4 =>   array (  ),),
        'lien_collection_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/collection/new',    ),  ),  4 =>   array (  ),),
        'lien_collection_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/collection/create',    ),  ),  4 =>   array (  ),),
        'lien_collection_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/collection',    ),  ),  4 =>   array (  ),),
        'lien_collection_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/collection',    ),  ),  4 =>   array (  ),),
        'lien_collection_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\CollectionController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/collection',    ),  ),  4 =>   array (  ),),
        'lien_avis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/avis/',    ),  ),  4 =>   array (  ),),
        'lien_avis_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/avis',    ),  ),  4 =>   array (  ),),
        'lien_avis_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/avis/new',    ),  ),  4 =>   array (  ),),
        'lien_avis_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/avis/create',    ),  ),  4 =>   array (  ),),
        'lien_avis_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/avis',    ),  ),  4 =>   array (  ),),
        'lien_avis_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/avis',    ),  ),  4 =>   array (  ),),
        'lien_avis_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\AvisUserLivreController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/avis',    ),  ),  4 =>   array (  ),),
        'lien_livre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livre/',    ),  ),  4 =>   array (  ),),
        'lien_livre_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/livre',    ),  ),  4 =>   array (  ),),
        'lien_livre_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livre/new',    ),  ),  4 =>   array (  ),),
        'lien_livre_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livre/create',    ),  ),  4 =>   array (  ),),
        'lien_livre_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/livre',    ),  ),  4 =>   array (  ),),
        'lien_livre_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/livre',    ),  ),  4 =>   array (  ),),
        'lien_livre_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\LivreController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/livre',    ),  ),  4 =>   array (  ),),
        'lien_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),),
        'lien_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'lien_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),),
        'lien_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),),
        'lien_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'lien_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'lien_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'lsi_biblio_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Lsi\\BiblioBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
