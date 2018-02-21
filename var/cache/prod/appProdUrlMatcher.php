<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        // category
        if ($pathinfo === '/newCategory') {
            return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::createCategoryAction',  '_route' => 'category',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // ana
        if ($pathinfo === '/ana') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  '_route' => 'ana',);
        }

        // showProduct
        if (0 === strpos($pathinfo, '/showProducts') && preg_match('#^/showProducts/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showProduct')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showAction',));
        }

        // updateProduct
        if (0 === strpos($pathinfo, '/updateProduct') && preg_match('#^/updateProduct/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateProduct')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::updateAction',));
        }

        // testRepository
        if ($pathinfo === '/tesssssteRepository') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ironow',  '_route' => 'testRepository',);
        }

        // AccueilGestionStock
        if ($pathinfo === '/Accueil') {
            return array (  '_controller' => 'AppBundle\\Controller\\gestionStockController::Accueil',  '_route' => 'AccueilGestionStock',);
        }

        // hellloo
        if ($pathinfo === '/hellloo') {
            return array (  '_controller' => 'AppBundle\\Controller\\testAppController::helllooAction',  '_route' => 'hellloo',);
        }

        // TesteHHH
        if ($pathinfo === '/testeHHH') {
            return array (  '_controller' => 'AppBundle\\Controller\\testAppController::testeHHHAction',  '_route' => 'TesteHHH',);
        }

        // Test_App
        if ($pathinfo === '/hellooB') {
            return array (  '_controller' => 'AppBundle\\Controller\\testAppController::testeIndexBo',  '_route' => 'Test_App',);
        }

        // Test_Apppp
        if ($pathinfo === '/testApppp') {
            return array (  '_controller' => 'AppBundle\\Controller\\testAppController::createProductAction',  '_route' => 'Test_Apppp',);
        }

        if (0 === strpos($pathinfo, '/show')) {
            // showCaterName
            if (0 === strpos($pathinfo, '/showprotName') && preg_match('#^/showprotName/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showCaterName')), array (  '_controller' => 'AppBundle\\Controller\\testAppController::showProductsAction',));
            }

            // shoowCaterName
            if (0 === strpos($pathinfo, '/showcatIdSecExp') && preg_match('#^/showcatIdSecExp/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'shoowCaterName')), array (  '_controller' => 'AppBundle\\Controller\\testAppController::shoowAction',));
            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            // article
            if (rtrim($pathinfo, '/') === '/article') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'article');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
            }

            // article_ajax
            if ($pathinfo === '/article/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::ajaxlisteAction',  '_route' => 'article_ajax',);
            }

            // article_show
            if (preg_match('#^/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',));
            }

            // article_new
            if ($pathinfo === '/article/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
            }

            // article_create
            if ($pathinfo === '/article/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
            }

            // article_edit
            if (preg_match('#^/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::editAction',));
            }

            // article_update
            if (preg_match('#^/article/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_update')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::updateAction',));
            }

            // article_delete
            if (preg_match('#^/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::deleteAction',));
            }

            // article_remove
            if ($pathinfo === '/article/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::removeAction',  '_route' => 'article_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/config')) {
            // config
            if (rtrim($pathinfo, '/') === '/config') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'config');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::indexAction',  '_route' => 'config',);
            }

            // config_show
            if (preg_match('#^/config/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_show')), array (  '_controller' => 'AppBundle\\Controller\\ConfigController::showAction',));
            }

            // config_new
            if ($pathinfo === '/config/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::newAction',  '_route' => 'config_new',);
            }

            // config_create
            if ($pathinfo === '/config/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::createAction',  '_route' => 'config_create',);
            }

            // config_edit
            if (preg_match('#^/config/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_edit')), array (  '_controller' => 'AppBundle\\Controller\\ConfigController::editAction',));
            }

            // config_update
            if ($pathinfo === '/config/update') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::updateAction',  '_route' => 'config_update',);
            }

            // config_delete
            if (preg_match('#^/config/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_delete')), array (  '_controller' => 'AppBundle\\Controller\\ConfigController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
