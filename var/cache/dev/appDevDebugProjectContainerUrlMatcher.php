<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        if (0 === strpos($pathinfo, '/bibliography')) {
            // bibliography_index
            if (rtrim($pathinfo, '/') === '/bibliography') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bibliography_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bibliography_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BibliographyController::indexAction',  '_route' => 'bibliography_index',);
            }
            not_bibliography_index:

            // bibliography_user
            if ($pathinfo === '/bibliography/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bibliography_user;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BibliographyController::userBibliographyAction',  '_route' => 'bibliography_user',);
            }
            not_bibliography_user:

            // bibliography_new
            if ($pathinfo === '/bibliography/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_bibliography_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BibliographyController::newAction',  '_route' => 'bibliography_new',);
            }
            not_bibliography_new:

            // bibliography_show
            if (preg_match('#^/bibliography/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bibliography_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_show')), array (  '_controller' => 'AppBundle\\Controller\\BibliographyController::showAction',));
            }
            not_bibliography_show:

            // bibliography_edit
            if (preg_match('#^/bibliography/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_bibliography_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_edit')), array (  '_controller' => 'AppBundle\\Controller\\BibliographyController::editAction',));
            }
            not_bibliography_edit:

            // bibliography_delete
            if (preg_match('#^/bibliography/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_bibliography_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_delete')), array (  '_controller' => 'AppBundle\\Controller\\BibliographyController::deleteAction',));
            }
            not_bibliography_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/basket')) {
            // reference_basket_index
            if (rtrim($pathinfo, '/') === '/basket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reference_basket_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReferenceBasketController::indexAction',  '_route' => 'reference_basket_index',);
            }

            // reference_basket_add
            if (0 === strpos($pathinfo, '/basket/add') && preg_match('#^/basket/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_basket_add')), array (  '_controller' => 'AppBundle\\Controller\\ReferenceBasketController::addToReferenceBasket',));
            }

            // reference_basket_clear
            if ($pathinfo === '/basket/clear') {
                return array (  '_controller' => 'AppBundle\\Controller\\ReferenceBasketController::clearAction',  '_route' => 'reference_basket_clear',);
            }

            // reference_basket_delete
            if (0 === strpos($pathinfo, '/basket/delete') && preg_match('#^/basket/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_basket_delete')), array (  '_controller' => 'AppBundle\\Controller\\ReferenceBasketController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/reference')) {
            // reference_index
            if (rtrim($pathinfo, '/') === '/reference') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reference_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reference_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReferenceController::indexAction',  '_route' => 'reference_index',);
            }
            not_reference_index:

            // reference_new
            if ($pathinfo === '/reference/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reference_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReferenceController::newAction',  '_route' => 'reference_new',);
            }
            not_reference_new:

            // reference_show
            if (preg_match('#^/reference/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reference_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_show')), array (  '_controller' => 'AppBundle\\Controller\\ReferenceController::showAction',));
            }
            not_reference_show:

            // reference_edit
            if (preg_match('#^/reference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reference_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_edit')), array (  '_controller' => 'AppBundle\\Controller\\ReferenceController::editAction',));
            }
            not_reference_edit:

            // reference_delete
            if (preg_match('#^/reference/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reference_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_delete')), array (  '_controller' => 'AppBundle\\Controller\\ReferenceController::deleteAction',));
            }
            not_reference_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/tag')) {
            // tag_index
            if (rtrim($pathinfo, '/') === '/tag') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tag_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::indexAction',  '_route' => 'tag_index',);
            }
            not_tag_index:

            // tag_new
            if ($pathinfo === '/tag/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
            }
            not_tag_new:

            // tag_show
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'AppBundle\\Controller\\TagController::showAction',));
            }
            not_tag_show:

            // tag_edit
            if (preg_match('#^/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'AppBundle\\Controller\\TagController::editAction',));
            }
            not_tag_edit:

            // tag_delete
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tag_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'AppBundle\\Controller\\TagController::deleteAction',));
            }
            not_tag_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_index',);
            }
            not_admin_index:

            // admin_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'admin_new',);
            }

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_admin_edit:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
