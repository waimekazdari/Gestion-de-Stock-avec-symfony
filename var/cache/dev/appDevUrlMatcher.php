<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // helo
        if ($pathinfo === '/helo') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::heloAction',  '_route' => 'helo',);
        }

        // Accueil
        if ($pathinfo === '/Accueil') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::AccueilAction',  '_route' => 'Accueil',);
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

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
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

            if (0 === strpos($pathinfo, '/article_user')) {
                // article_user
                if (rtrim($pathinfo, '/') === '/article_user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article_user');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Article_UserController::indexAction',  '_route' => 'article_user',);
                }

                // article_user_ajax
                if ($pathinfo === '/article_user/ajaxliste') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Article_UserController::ajaxlisteAction',  '_route' => 'article_user_ajax',);
                }

                // article_user_show
                if (preg_match('#^/article_user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_user_show')), array (  '_controller' => 'AppBundle\\Controller\\Article_UserController::showAction',));
                }

                // article_user_delete
                if (preg_match('#^/article_user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_user_delete')), array (  '_controller' => 'AppBundle\\Controller\\Article_UserController::deleteAction',));
                }

                // article_user_remove
                if ($pathinfo === '/article_user/remove') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Article_UserController::removeAction',  '_route' => 'article_user_remove',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category
            if (rtrim($pathinfo, '/') === '/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
            }

            // category_ajax
            if ($pathinfo === '/category/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::ajaxlisteAction',  '_route' => 'category_ajax',);
            }

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::showAction',));
            }

            // category_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }

            // category_create
            if ($pathinfo === '/category/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
            }

            // category_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::updateAction',));
            }

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
            }

            // category_remove
            if ($pathinfo === '/category/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::removeAction',  '_route' => 'category_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/fournisseur')) {
            // fournisseur
            if (rtrim($pathinfo, '/') === '/fournisseur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fournisseur');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::indexAction',  '_route' => 'fournisseur',);
            }

            // fournisseur_ajax
            if ($pathinfo === '/fournisseur/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::ajaxlisteAction',  '_route' => 'fournisseur_ajax',);
            }

            // fournisseur_show
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_show')), array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::showAction',));
            }

            // fournisseur_new
            if ($pathinfo === '/fournisseur/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::newAction',  '_route' => 'fournisseur_new',);
            }

            // fournisseur_create
            if ($pathinfo === '/fournisseur/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::createAction',  '_route' => 'fournisseur_create',);
            }

            // fournisseur_edit
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_edit')), array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::editAction',));
            }

            // fournisseur_update
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_update')), array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::updateAction',));
            }

            // fournisseur_delete
            if (preg_match('#^/fournisseur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_delete')), array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::deleteAction',));
            }

            // fournisseur_remove
            if ($pathinfo === '/fournisseur/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\FournisseurController::removeAction',  '_route' => 'fournisseur_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/departement')) {
            // departement
            if (rtrim($pathinfo, '/') === '/departement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'departement');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DepartementController::indexAction',  '_route' => 'departement',);
            }

            // departement_ajax
            if ($pathinfo === '/departement/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\DepartementController::ajaxlisteAction',  '_route' => 'departement_ajax',);
            }

            // departement_show
            if (preg_match('#^/departement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_show')), array (  '_controller' => 'AppBundle\\Controller\\DepartementController::showAction',));
            }

            // departement_new
            if ($pathinfo === '/departement/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\DepartementController::newAction',  '_route' => 'departement_new',);
            }

            // departement_create
            if ($pathinfo === '/departement/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\DepartementController::createAction',  '_route' => 'departement_create',);
            }

            // departement_edit
            if (preg_match('#^/departement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_edit')), array (  '_controller' => 'AppBundle\\Controller\\DepartementController::editAction',));
            }

            // departement_update
            if (preg_match('#^/departement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_update')), array (  '_controller' => 'AppBundle\\Controller\\DepartementController::updateAction',));
            }

            // departement_delete
            if (preg_match('#^/departement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_delete')), array (  '_controller' => 'AppBundle\\Controller\\DepartementController::deleteAction',));
            }

            // departement_remove
            if ($pathinfo === '/departement/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\DepartementController::removeAction',  '_route' => 'departement_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/service')) {
            // service
            if (rtrim($pathinfo, '/') === '/service') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'service');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service',);
            }

            // service_ajax
            if ($pathinfo === '/service/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\ServiceController::ajaxlisteAction',  '_route' => 'service_ajax',);
            }

            // service_show
            if (preg_match('#^/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'AppBundle\\Controller\\ServiceController::showAction',));
            }

            // service_new
            if ($pathinfo === '/service/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
            }

            // service_create
            if ($pathinfo === '/service/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\ServiceController::createAction',  '_route' => 'service_create',);
            }

            // service_edit
            if (preg_match('#^/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'AppBundle\\Controller\\ServiceController::editAction',));
            }

            // service_update
            if (preg_match('#^/service/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_update')), array (  '_controller' => 'AppBundle\\Controller\\ServiceController::updateAction',));
            }

            // service_delete
            if (preg_match('#^/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'AppBundle\\Controller\\ServiceController::deleteAction',));
            }

            // service_remove
            if ($pathinfo === '/service/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\ServiceController::removeAction',  '_route' => 'service_remove',);
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

        if (0 === strpos($pathinfo, '/li')) {
            if (0 === strpos($pathinfo, '/livraison')) {
                // livraison
                if (rtrim($pathinfo, '/') === '/livraison') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'livraison');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::indexAction',  '_route' => 'livraison',);
                }

                // livraison_ajax
                if ($pathinfo === '/livraison/ajaxliste') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::ajaxlisteAction',  '_route' => 'livraison_ajax',);
                }

                // livraison_show
                if (preg_match('#^/livraison/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraison_show')), array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::showAction',));
                }

                // livraison_new
                if ($pathinfo === '/livraison/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::newMultipleAction',  '_route' => 'livraison_new',);
                }

                // livraison_create
                if ($pathinfo === '/livraison/create') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::createMultipleAction',  '_route' => 'livraison_create',);
                }

                // livraison_edit
                if (preg_match('#^/livraison/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraison_edit')), array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::editAction',));
                }

                // livraison_update
                if (preg_match('#^/livraison/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraison_update')), array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::updateAction',));
                }

                // livraison_delete
                if (preg_match('#^/livraison/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraison_delete')), array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::deleteAction',));
                }

                // livraison_remove
                if ($pathinfo === '/livraison/remove') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LivraisonController::removeAction',  '_route' => 'livraison_remove',);
                }

            }

            if (0 === strpos($pathinfo, '/ligne')) {
                // ligne
                if (rtrim($pathinfo, '/') === '/ligne') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ligne');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LigneController::indexAction',  '_route' => 'ligne',);
                }

                // ligne_ajax
                if ($pathinfo === '/ligne/ajaxliste') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LigneController::ajaxlisteAction',  '_route' => 'ligne_ajax',);
                }

                // ligne_show
                if (preg_match('#^/ligne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_show')), array (  '_controller' => 'AppBundle\\Controller\\LigneController::showAction',));
                }

                // ligne_new
                if ($pathinfo === '/ligne/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LigneController::newAction',  '_route' => 'ligne_new',);
                }

                // ligne_create
                if ($pathinfo === '/ligne/create') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LigneController::createAction',  '_route' => 'ligne_create',);
                }

                // ligne_edit
                if (preg_match('#^/ligne/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_edit')), array (  '_controller' => 'AppBundle\\Controller\\LigneController::editAction',));
                }

                // ligne_update
                if (preg_match('#^/ligne/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_update')), array (  '_controller' => 'AppBundle\\Controller\\LigneController::updateAction',));
                }

                // ligne_delete
                if (preg_match('#^/ligne/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligne_delete')), array (  '_controller' => 'AppBundle\\Controller\\LigneController::deleteAction',));
                }

                // ligne_remove
                if ($pathinfo === '/ligne/remove') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LigneController::removeAction',  '_route' => 'ligne_remove',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/entree')) {
            // entree
            if (rtrim($pathinfo, '/') === '/entree') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'entree');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EntreeController::indexAction',  '_route' => 'entree',);
            }

            // entree_ajax
            if ($pathinfo === '/entree/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\EntreeController::ajaxlisteAction',  '_route' => 'entree_ajax',);
            }

            // entree_show
            if (preg_match('#^/entree/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entree_show')), array (  '_controller' => 'AppBundle\\Controller\\EntreeController::showAction',));
            }

            // entree_new
            if ($pathinfo === '/entree/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\EntreeController::newMultipleAction',  '_route' => 'entree_new',);
            }

            // entree_create
            if ($pathinfo === '/entree/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\EntreeController::createMultipleAction',  '_route' => 'entree_create',);
            }

            // entree_edit
            if (preg_match('#^/entree/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entree_edit')), array (  '_controller' => 'AppBundle\\Controller\\EntreeController::editAction',));
            }

            // entree_update
            if (preg_match('#^/entree/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entree_update')), array (  '_controller' => 'AppBundle\\Controller\\EntreeController::updateAction',));
            }

            // entree_delete
            if (preg_match('#^/entree/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entree_delete')), array (  '_controller' => 'AppBundle\\Controller\\EntreeController::deleteAction',));
            }

            // entree_remove
            if ($pathinfo === '/entree/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\EntreeController::removeAction',  '_route' => 'entree_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/ar_entree')) {
            // ar_entree
            if (rtrim($pathinfo, '/') === '/ar_entree') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ar_entree');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::indexAction',  '_route' => 'ar_entree',);
            }

            // ar_entree_ajax
            if ($pathinfo === '/ar_entree/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::ajaxlisteAction',  '_route' => 'ar_entree_ajax',);
            }

            // ar_entree_show
            if (preg_match('#^/ar_entree/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_entree_show')), array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::showAction',));
            }

            // ar_entree_new
            if ($pathinfo === '/ar_entree/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::newAction',  '_route' => 'ar_entree_new',);
            }

            // ar_entree_create
            if ($pathinfo === '/ar_entree/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::createAction',  '_route' => 'ar_entree_create',);
            }

            // ar_entree_edit
            if (preg_match('#^/ar_entree/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_entree_edit')), array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::editAction',));
            }

            // ar_entree_update
            if (preg_match('#^/ar_entree/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_entree_update')), array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::updateAction',));
            }

            // ar_entree_delete
            if (preg_match('#^/ar_entree/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_entree_delete')), array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::deleteAction',));
            }

            // ar_entree_remove
            if ($pathinfo === '/ar_entree/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_entreeController::removeAction',  '_route' => 'ar_entree_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/sortie')) {
            // sortie
            if (rtrim($pathinfo, '/') === '/sortie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sortie');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SortieController::indexAction',  '_route' => 'sortie',);
            }

            // sortie_ajax
            if ($pathinfo === '/sortie/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\SortieController::ajaxlisteAction',  '_route' => 'sortie_ajax',);
            }

            // sortie_show
            if (preg_match('#^/sortie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sortie_show')), array (  '_controller' => 'AppBundle\\Controller\\SortieController::showAction',));
            }

            // sortie_new
            if ($pathinfo === '/sortie/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\SortieController::newMultipleAction',  '_route' => 'sortie_new',);
            }

            // sortie_create
            if ($pathinfo === '/sortie/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\SortieController::createMultipleAction',  '_route' => 'sortie_create',);
            }

            // sortie_edit
            if (preg_match('#^/sortie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sortie_edit')), array (  '_controller' => 'AppBundle\\Controller\\SortieController::editAction',));
            }

            // sortie_update
            if (preg_match('#^/sortie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sortie_update')), array (  '_controller' => 'AppBundle\\Controller\\SortieController::updateAction',));
            }

            // sortie_delete
            if (preg_match('#^/sortie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sortie_delete')), array (  '_controller' => 'AppBundle\\Controller\\SortieController::deleteAction',));
            }

            // sortie_remove
            if ($pathinfo === '/sortie/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\SortieController::removeAction',  '_route' => 'sortie_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/ar_sortie')) {
            // ar_sortie
            if (rtrim($pathinfo, '/') === '/ar_sortie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ar_sortie');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::indexAction',  '_route' => 'ar_sortie',);
            }

            // ar_sortie_ajax
            if ($pathinfo === '/ar_sortie/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::ajaxlisteAction',  '_route' => 'ar_sortie_ajax',);
            }

            // ar_sortie_show
            if (preg_match('#^/ar_sortie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_sortie_show')), array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::showAction',));
            }

            // ar_sortie_new
            if ($pathinfo === '/ar_sortie/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::newAction',  '_route' => 'ar_sortie_new',);
            }

            // ar_sortie_create
            if ($pathinfo === '/ar_sortie/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::createAction',  '_route' => 'ar_sortie_create',);
            }

            // ar_sortie_edit
            if (preg_match('#^/ar_sortie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_sortie_edit')), array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::editAction',));
            }

            // ar_sortie_update
            if (preg_match('#^/ar_sortie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_sortie_update')), array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::updateAction',));
            }

            // ar_sortie_delete
            if (preg_match('#^/ar_sortie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ar_sortie_delete')), array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::deleteAction',));
            }

            // ar_sortie_remove
            if ($pathinfo === '/ar_sortie/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\Ar_sortieController::removeAction',  '_route' => 'ar_sortie_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/expression_besoin')) {
            // expression_besoin
            if (rtrim($pathinfo, '/') === '/expression_besoin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'expression_besoin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::indexAction',  '_route' => 'expression_besoin',);
            }

            // expression_besoin_ajax
            if ($pathinfo === '/expression_besoin/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::ajaxlisteAction',  '_route' => 'expression_besoin_ajax',);
            }

            // expression_besoin_show
            if (preg_match('#^/expression_besoin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expression_besoin_show')), array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::showAction',));
            }

            // expression_besoin_new
            if ($pathinfo === '/expression_besoin/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::newMultipleAction',  '_route' => 'expression_besoin_new',);
            }

            // expression_besoin_create
            if ($pathinfo === '/expression_besoin/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::createMultipleAction',  '_route' => 'expression_besoin_create',);
            }

            // expression_besoin_delete
            if (preg_match('#^/expression_besoin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expression_besoin_delete')), array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::deleteAction',));
            }

            // expression_besoin_remove
            if ($pathinfo === '/expression_besoin/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::removeAction',  '_route' => 'expression_besoin_remove',);
            }

            // expression_besoin_accord
            if ($pathinfo === '/expression_besoin/accord') {
                return array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::accordAction',  '_route' => 'expression_besoin_accord',);
            }

            // expression_besoin_desaccord
            if ($pathinfo === '/expression_besoin/desaccord') {
                return array (  '_controller' => 'AppBundle\\Controller\\Expression_besoinController::desaccordAction',  '_route' => 'expression_besoin_desaccord',);
            }

        }

        if (0 === strpos($pathinfo, '/mesExpression_besoin')) {
            // mesExpression_besoin
            if (rtrim($pathinfo, '/') === '/mesExpression_besoin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mesExpression_besoin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MesExpression_besoinController::indexAction',  '_route' => 'mesExpression_besoin',);
            }

            // mesExpression_besoin_ajax
            if ($pathinfo === '/mesExpression_besoin/ajaxliste') {
                return array (  '_controller' => 'AppBundle\\Controller\\MesExpression_besoinController::ajaxlisteAction',  '_route' => 'mesExpression_besoin_ajax',);
            }

            // mesExpression_besoin_show
            if (preg_match('#^/mesExpression_besoin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mesExpression_besoin_show')), array (  '_controller' => 'AppBundle\\Controller\\MesExpression_besoinController::showAction',));
            }

            // mesExpression_besoin_new
            if ($pathinfo === '/mesExpression_besoin/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\MesExpression_besoinController::newMultipleAction',  '_route' => 'mesExpression_besoin_new',);
            }

            // mesExpression_besoin_create
            if ($pathinfo === '/mesExpression_besoin/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\MesExpression_besoinController::createMultipleAction',  '_route' => 'mesExpression_besoin_create',);
            }

            // mesExpression_besoin_delete
            if (preg_match('#^/mesExpression_besoin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mesExpression_besoin_delete')), array (  '_controller' => 'AppBundle\\Controller\\MesExpression_besoinController::deleteAction',));
            }

            // mesExpression_besoin_remove
            if ($pathinfo === '/mesExpression_besoin/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\MesExpression_besoinController::removeAction',  '_route' => 'mesExpression_besoin_remove',);
            }

        }

        // register
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'register');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ben_users
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ben_users');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'ben_users',);
            }

            // ben_users_ajax
            if ($pathinfo === '/admin/userslist') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::ajaxListAction',  '_route' => 'ben_users_ajax',);
            }

            // ben_show_user
            if (0 === strpos($pathinfo, '/admin/show') && preg_match('#^/admin/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_show_user')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::showAction',));
            }

            // ben_new_user
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::newAction',  '_route' => 'ben_new_user',);
            }

            // ben_add_user
            if ($pathinfo === '/admin/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addAction',  '_route' => 'ben_add_user',);
            }

            // ben_edit_user
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_edit_user')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editAction',));
            }

            if (0 === strpos($pathinfo, '/admin/u')) {
                // ben_update_user
                if (0 === strpos($pathinfo, '/admin/update') && preg_match('#^/admin/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_update_user')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/admin/users')) {
                    // ben_users_list
                    if ($pathinfo === '/admin/users/list') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::usersListAction',  '_route' => 'ben_users_list',);
                    }

                    // ben_enable_users
                    if (0 === strpos($pathinfo, '/admin/users/active') && preg_match('#^/admin/users/active(?:/(?P<etat>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_enable_users')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::enableUsersAction',  'etat' => 1,));
                    }

                }

            }

            // ben_promote_users
            if (0 === strpos($pathinfo, '/admin/promote') && preg_match('#^/admin/promote(?:/(?P<role>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_promote_users')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::setRoleAction',  'role' => 'user',));
            }

            if (0 === strpos($pathinfo, '/admin/delete')) {
                // ben_delete_user
                if (preg_match('#^/admin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_delete_user')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::deleteAction',));
                }

                // ben_remove_users
                if ($pathinfo === '/admin/delete') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::removeUsersAction',  '_route' => 'ben_remove_users',);
                }

            }

            // ben_users_export
            if ($pathinfo === '/admin/export') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::exportAction',  '_route' => 'ben_users_export',);
            }

        }

        if (0 === strpos($pathinfo, '/myprofile')) {
            // myprofile_edit
            if (0 === strpos($pathinfo, '/myprofile/me/edit') && preg_match('#^/myprofile/me/edit/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myprofile_edit')), array (  '_controller' => 'AppBundle\\Controller\\MyprofileController::editAction',));
            }

            // myprofile_update
            if (0 === strpos($pathinfo, '/myprofile/_me') && preg_match('#^/myprofile/_me/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myprofile_update')), array (  '_controller' => 'AppBundle\\Controller\\MyprofileController::updateAction',));
            }

            // myprofile_show
            if (0 === strpos($pathinfo, '/myprofile/show') && preg_match('#^/myprofile/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myprofile_show')), array (  '_controller' => 'AppBundle\\Controller\\MyprofileController::showAction',));
            }

            // password_edit
            if ($pathinfo === '/myprofile/edit') {
                return array (  '_controller' => 'AppBundle\\Controller\\MyprofileController::changePasswordFormAction',  '_route' => 'password_edit',);
            }

            // password_update
            if ($pathinfo === '/myprofile/update') {
                return array (  '_controller' => 'AppBundle\\Controller\\MyprofileController::changePasswordAction',  '_route' => 'password_update',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
