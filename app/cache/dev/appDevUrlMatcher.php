<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // ever_fail_main_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ever_fail_main_homepage')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/ca')) {
                if (0 === strpos($pathinfo, '/category')) {
                    // category
                    if (rtrim($pathinfo, '/') === '/category') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'category');
                        }

                        return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                    }

                    // category_show
                    if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CategoryController::showAction',));
                    }

                    // category_new
                    if ($pathinfo === '/category/new') {
                        return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                    }

                    // category_create
                    if ($pathinfo === '/category/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_category_create;
                        }

                        return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                    }
                    not_category_create:

                    // category_edit
                    if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CategoryController::editAction',));
                    }

                    // category_update
                    if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_category_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CategoryController::updateAction',));
                    }
                    not_category_update:

                    // category_delete
                    if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CategoryController::deleteAction',));
                    }
                    not_category_delete:

                }

                if (0 === strpos($pathinfo, '/car')) {
                    // car
                    if (rtrim($pathinfo, '/') === '/car') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'car');
                        }

                        return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CarController::indexAction',  '_route' => 'car',);
                    }

                    // car_show
                    if (preg_match('#^/car/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'car_show')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CarController::showAction',));
                    }

                    // car_new
                    if ($pathinfo === '/car/new') {
                        return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CarController::newAction',  '_route' => 'car_new',);
                    }

                    // car_create
                    if ($pathinfo === '/car/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_car_create;
                        }

                        return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CarController::createAction',  '_route' => 'car_create',);
                    }
                    not_car_create:

                    // car_edit
                    if (preg_match('#^/car/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'car_edit')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CarController::editAction',));
                    }

                    // car_update
                    if (preg_match('#^/car/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_car_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'car_update')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CarController::updateAction',));
                    }
                    not_car_update:

                    // car_delete
                    if (preg_match('#^/car/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_car_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'car_delete')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CarController::deleteAction',));
                    }
                    not_car_delete:

                }

            }

            if (0 === strpos($pathinfo, '/customer')) {
                // customer
                if (rtrim($pathinfo, '/') === '/customer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'customer');
                    }

                    return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customer',);
                }

                // customer_show
                if (preg_match('#^/customer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_show')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CustomerController::showAction',));
                }

                // customer_new
                if ($pathinfo === '/customer/new') {
                    return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CustomerController::newAction',  '_route' => 'customer_new',);
                }

                // customer_create
                if ($pathinfo === '/customer/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_customer_create;
                    }

                    return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CustomerController::createAction',  '_route' => 'customer_create',);
                }
                not_customer_create:

                // customer_edit
                if (preg_match('#^/customer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_edit')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CustomerController::editAction',));
                }

                // customer_update
                if (preg_match('#^/customer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_customer_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_update')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CustomerController::updateAction',));
                }
                not_customer_update:

                // customer_delete
                if (preg_match('#^/customer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_customer_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_delete')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\CustomerController::deleteAction',));
                }
                not_customer_delete:

            }

        }

        if (0 === strpos($pathinfo, '/invoice')) {
            // invoice
            if (rtrim($pathinfo, '/') === '/invoice') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'invoice');
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\InvoiceController::indexAction',  '_route' => 'invoice',);
            }

            // invoice_show
            if (preg_match('#^/invoice/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_show')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\InvoiceController::showAction',));
            }

            // invoice_new
            if ($pathinfo === '/invoice/new') {
                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\InvoiceController::newAction',  '_route' => 'invoice_new',);
            }

            // invoice_create
            if ($pathinfo === '/invoice/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_invoice_create;
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\InvoiceController::createAction',  '_route' => 'invoice_create',);
            }
            not_invoice_create:

            // invoice_edit
            if (preg_match('#^/invoice/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_edit')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\InvoiceController::editAction',));
            }

            // invoice_update
            if (preg_match('#^/invoice/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_invoice_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_update')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\InvoiceController::updateAction',));
            }
            not_invoice_update:

            // invoice_delete
            if (preg_match('#^/invoice/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_invoice_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_delete')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\InvoiceController::deleteAction',));
            }
            not_invoice_delete:

        }

        if (0 === strpos($pathinfo, '/part')) {
            // part
            if (rtrim($pathinfo, '/') === '/part') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'part');
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\PartController::indexAction',  '_route' => 'part',);
            }

            // part_show
            if (preg_match('#^/part/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'part_show')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\PartController::showAction',));
            }

            // part_new
            if ($pathinfo === '/part/new') {
                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\PartController::newAction',  '_route' => 'part_new',);
            }

            // part_create
            if ($pathinfo === '/part/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_part_create;
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\PartController::createAction',  '_route' => 'part_create',);
            }
            not_part_create:

            // part_edit
            if (preg_match('#^/part/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'part_edit')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\PartController::editAction',));
            }

            // part_update
            if (preg_match('#^/part/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_part_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'part_update')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\PartController::updateAction',));
            }
            not_part_update:

            // part_delete
            if (preg_match('#^/part/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_part_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'part_delete')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\PartController::deleteAction',));
            }
            not_part_delete:

        }

        if (0 === strpos($pathinfo, '/service')) {
            // service
            if (rtrim($pathinfo, '/') === '/service') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'service');
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service',);
            }

            // service_show
            if (preg_match('#^/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\ServiceController::showAction',));
            }

            // service_new
            if ($pathinfo === '/service/new') {
                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
            }

            // service_create
            if ($pathinfo === '/service/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_create;
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\ServiceController::createAction',  '_route' => 'service_create',);
            }
            not_service_create:

            // service_edit
            if (preg_match('#^/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\ServiceController::editAction',));
            }

            // service_update
            if (preg_match('#^/service/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_service_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_update')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\ServiceController::updateAction',));
            }
            not_service_update:

            // service_delete
            if (preg_match('#^/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_service_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\ServiceController::deleteAction',));
            }
            not_service_delete:

        }

        if (0 === strpos($pathinfo, '/vendor')) {
            // vendor
            if (rtrim($pathinfo, '/') === '/vendor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vendor');
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\VendorController::indexAction',  '_route' => 'vendor',);
            }

            // vendor_show
            if (preg_match('#^/vendor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendor_show')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\VendorController::showAction',));
            }

            // vendor_new
            if ($pathinfo === '/vendor/new') {
                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\VendorController::newAction',  '_route' => 'vendor_new',);
            }

            // vendor_create
            if ($pathinfo === '/vendor/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vendor_create;
                }

                return array (  '_controller' => 'EverFail\\MainBundle\\Controller\\VendorController::createAction',  '_route' => 'vendor_create',);
            }
            not_vendor_create:

            // vendor_edit
            if (preg_match('#^/vendor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendor_edit')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\VendorController::editAction',));
            }

            // vendor_update
            if (preg_match('#^/vendor/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vendor_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendor_update')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\VendorController::updateAction',));
            }
            not_vendor_update:

            // vendor_delete
            if (preg_match('#^/vendor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_vendor_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendor_delete')), array (  '_controller' => 'EverFail\\MainBundle\\Controller\\VendorController::deleteAction',));
            }
            not_vendor_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
