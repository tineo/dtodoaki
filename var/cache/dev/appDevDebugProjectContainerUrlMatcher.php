<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/css')) {
                if (0 === strpos($pathinfo, '/css/24e12ff')) {
                    // _assetic_24e12ff
                    if ('/css/24e12ff.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '24e12ff',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_24e12ff',);
                    }

                    // _assetic_24e12ff_0
                    if ('/css/24e12ff_summernote_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '24e12ff',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_24e12ff_0',);
                    }

                    // _assetic_24e12ff_1
                    if ('/css/24e12ff_styles_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '24e12ff',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_24e12ff_1',);
                    }

                }

                // _assetic_f32663f
                if ('/css/f32663f.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f32663f',);
                }

                if (0 === strpos($pathinfo, '/css/f32663f_')) {
                    // _assetic_f32663f_0
                    if ('/css/f32663f_bootstrap-select.min_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f32663f_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/f32663f_s')) {
                        // _assetic_f32663f_1
                        if ('/css/f32663f_summernote_2.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_f32663f_1',);
                        }

                        // _assetic_f32663f_3
                        if ('/css/f32663f_slick_4.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_f32663f_3',);
                        }

                        // _assetic_f32663f_9
                        if ('/css/f32663f_styles_10.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_f32663f_9',);
                        }

                    }

                    // _assetic_f32663f_2
                    if ('/css/f32663f_magnific-popup_3.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_f32663f_2',);
                    }

                    // _assetic_f32663f_4
                    if ('/css/f32663f_nouislider.min_5.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_f32663f_4',);
                    }

                    // _assetic_f32663f_5
                    if ('/css/f32663f_jssocials_6.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_f32663f_5',);
                    }

                    // _assetic_f32663f_6
                    if ('/css/f32663f_jssocials-theme-minima_7.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_f32663f_6',);
                    }

                    // _assetic_f32663f_7
                    if ('/css/f32663f_fontawesome-stars_8.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_f32663f_7',);
                    }

                    // _assetic_f32663f_8
                    if ('/css/f32663f_fontawesome-stars-o_9.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f32663f',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_f32663f_8',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/cart')) {
                // cart
                if ('/cart' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CartController::indexAction',  '_route' => 'cart',);
                }

                // cart_delete
                if (0 === strpos($pathinfo, '/cart/delete') && preg_match('#^/cart/delete/(?P<type>\\w+)/(?P<listing_id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'cart_delete']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CartController::deleteAction',));
                }

                // cart_empty
                if ('/cart/empty' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CartController::emptyAction',  '_route' => 'cart_empty',);
                }

            }

            elseif (0 === strpos($pathinfo, '/categories')) {
                // category
                if ('/categories' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }

                // category_detail
                if (preg_match('#^/categories/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_detail']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CategoryController::detailAction',));
                }

            }

            // claim_create
            if (0 === strpos($pathinfo, '/claims/create') && preg_match('#^/claims/create/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'claim_create']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ClaimController::createAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/js')) {
            // _assetic_1d254ac
            if ('/js/1d254ac.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1d254ac',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1d254ac',);
            }

            if (0 === strpos($pathinfo, '/js/1d254ac_')) {
                // _assetic_1d254ac_0
                if ('/js/1d254ac_jquery.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1d254ac',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1d254ac_0',);
                }

                // _assetic_1d254ac_4
                if ('/js/1d254ac_jquery.collection_5.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1d254ac',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_1d254ac_4',);
                }

                // _assetic_1d254ac_1
                if ('/js/1d254ac_tether.min_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1d254ac',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1d254ac_1',);
                }

                // _assetic_1d254ac_2
                if ('/js/1d254ac_bootstrap.min_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1d254ac',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1d254ac_2',);
                }

                // _assetic_1d254ac_3
                if ('/js/1d254ac_summernote.min_4.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1d254ac',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1d254ac_3',);
                }

                // _assetic_1d254ac_5
                if ('/js/1d254ac_scripts_6.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1d254ac',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_1d254ac_5',);
                }

            }

            // _assetic_6d9f134
            if ('/js/6d9f134.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6d9f134',);
            }

            if (0 === strpos($pathinfo, '/js/6d9f134_')) {
                if (0 === strpos($pathinfo, '/js/6d9f134_google-map-')) {
                    // _assetic_6d9f134_0
                    if ('/js/6d9f134_google-map-infobox.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6d9f134_0',);
                    }

                    // _assetic_6d9f134_1
                    if ('/js/6d9f134_google-map-markerclusterer_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_6d9f134_1',);
                    }

                    // _assetic_6d9f134_2
                    if ('/js/6d9f134_google-map-richmarker.min_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_6d9f134_2',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/js/6d9f134_jquery.')) {
                    // _assetic_6d9f134_3
                    if ('/js/6d9f134_jquery.min_4.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_6d9f134_3',);
                    }

                    // _assetic_6d9f134_15
                    if ('/js/6d9f134_jquery.magnific-popup.min_16.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_6d9f134_15',);
                    }

                    // _assetic_6d9f134_4
                    if ('/js/6d9f134_jquery.collection_5.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_6d9f134_4',);
                    }

                    // _assetic_6d9f134_14
                    if ('/js/6d9f134_jquery.barrating.min_15.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_6d9f134_14',);
                    }

                }

                // _assetic_6d9f134_11
                if ('/js/6d9f134_jssocials.min_12.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_6d9f134_11',);
                }

                if (0 === strpos($pathinfo, '/js/6d9f134_s')) {
                    // _assetic_6d9f134_5
                    if ('/js/6d9f134_summernote.min_6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_6d9f134_5',);
                    }

                    // _assetic_6d9f134_10
                    if ('/js/6d9f134_slick.min_11.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_6d9f134_10',);
                    }

                    // _assetic_6d9f134_16
                    if ('/js/6d9f134_scripts_17.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_6d9f134_16',);
                    }

                }

                // _assetic_6d9f134_6
                if ('/js/6d9f134_bootstrap-select.min_7.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_6d9f134_6',);
                }

                // _assetic_6d9f134_9
                if ('/js/6d9f134_bootstrap.min_10.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_6d9f134_9',);
                }

                // _assetic_6d9f134_7
                if ('/js/6d9f134_defaults-es_ES.min_8.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_6d9f134_7',);
                }

                // _assetic_6d9f134_8
                if ('/js/6d9f134_tether.min_9.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_6d9f134_8',);
                }

                // _assetic_6d9f134_12
                if ('/js/6d9f134_wNumb_13.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_6d9f134_12',);
                }

                // _assetic_6d9f134_13
                if ('/js/6d9f134_nouislider.min_14.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6d9f134',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_6d9f134_13',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            // agent
            if (0 === strpos($pathinfo, '/agent') && preg_match('#^/agent/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'agent']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\AgentController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/amenities')) {
                // amenity
                if ('/amenities' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\AmenityController::indexAction',  '_route' => 'amenity',);
                }

                // amenity_detail
                if (preg_match('#^/amenities/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'amenity_detail']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\AmenityController::detailAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/account')) {
                if (0 === strpos($pathinfo, '/account/favorites')) {
                    // favorite
                    if ('/account/favorites' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\FavoriteController::indexAction',  '_route' => 'favorite',);
                    }

                    // favorite_remove
                    if (0 === strpos($pathinfo, '/account/favorites/delete') && preg_match('#^/account/favorites/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'favorite_remove']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\FavoriteController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/account/listings')) {
                    // listing_my
                    if ('/account/listings' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::myAction',  '_route' => 'listing_my',);
                    }

                    if (0 === strpos($pathinfo, '/account/listings/u')) {
                        // listing_update
                        if (0 === strpos($pathinfo, '/account/listings/update') && preg_match('#^/account/listings/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'listing_update']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::updateAction',));
                        }

                        // listing_unpublish
                        if (0 === strpos($pathinfo, '/account/listings/unpublish') && preg_match('#^/account/listings/unpublish/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'listing_unpublish']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::unpublishAction',));
                        }

                        // listing_unfeature
                        if (0 === strpos($pathinfo, '/account/listings/unfeature') && preg_match('#^/account/listings/unfeature/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'listing_unfeature']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::unfeatureAction',));
                        }

                    }

                    // listing_create
                    if ('/account/listings/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::createAction',  '_route' => 'listing_create',);
                    }

                    // listing_delete
                    if (0 === strpos($pathinfo, '/account/listings/delete') && preg_match('#^/account/listings/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'listing_delete']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::deleteAction',));
                    }

                    // listing_publish
                    if (0 === strpos($pathinfo, '/account/listings/publish') && preg_match('#^/account/listings/publish/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'listing_publish']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::publishAction',));
                    }

                    // listing_feature
                    if (0 === strpos($pathinfo, '/account/listings/feature') && preg_match('#^/account/listings/feature/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'listing_feature']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::featureAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/accounts')) {
                    // order
                    if ('/accounts/orders' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::ordersAction',  '_route' => 'order',);
                    }

                    // order_paypal_completed
                    if ('/accounts/order/paypal/completed' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::orderPaypalCompletedAction',  '_route' => 'order_paypal_completed',);
                    }

                    // invoice
                    if (0 === strpos($pathinfo, '/accounts/invoice') && preg_match('#^/accounts/invoice/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'invoice']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::invoiceAction',));
                    }

                    // checkout
                    if ('/accounts/checkout' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::checkoutAction',  '_route' => 'checkout',);
                    }

                }

                // profile_update
                if ('/account/profile' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ProfileController::updateGeneralAction',  '_route' => 'profile_update',);
                }

                if (0 === strpos($pathinfo, '/account/searches')) {
                    // search
                    if ('/account/searches' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SearchController::indexAction',  '_route' => 'search',);
                    }

                    // search_create
                    if (0 === strpos($pathinfo, '/account/searches/create') && preg_match('#^/account/searches/create/(?P<entity>\\w+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'search_create']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SearchController::createAction',));
                    }

                    // search_delete
                    if (0 === strpos($pathinfo, '/account/searches/delete') && preg_match('#^/account/searches/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'search_delete']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SearchController::deleteAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/amenities')) {
                    // admin_amenity
                    if ('/admin/amenities' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::indexAction',  '_route' => 'admin_amenity',);
                    }

                    // admin_amenity_delete
                    if (0 === strpos($pathinfo, '/admin/amenities/delete') && preg_match('#^/admin/amenities/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_amenity_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::deleteAction',));
                    }

                    // admin_amenity_update
                    if (0 === strpos($pathinfo, '/admin/amenities/update') && preg_match('#^/admin/amenities/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_amenity_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::updateAction',));
                    }

                    // admin_amenity_create
                    if ('/admin/amenities/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::createAction',  '_route' => 'admin_amenity_create',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/categories')) {
                    // admin_category
                    if ('/admin/categories' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::indexAction',  '_route' => 'admin_category',);
                    }

                    // admin_category_delete
                    if (0 === strpos($pathinfo, '/admin/categories/delete') && preg_match('#^/admin/categories/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_category_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                    }

                    // admin_category_update
                    if (0 === strpos($pathinfo, '/admin/categories/update') && preg_match('#^/admin/categories/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_category_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::updateAction',));
                    }

                    // admin_category_create
                    if ('/admin/categories/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/claims')) {
                    // admin_claim
                    if ('/admin/claims' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ClaimController::indexAction',  '_route' => 'admin_claim',);
                    }

                    // admin_claim_approve
                    if (0 === strpos($pathinfo, '/admin/claims/approve') && preg_match('#^/admin/claims/approve/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_claim_approve']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ClaimController::approveAction',));
                    }

                }

                // admin_dashboard
                if ('/admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\DashboardController::indexAction',  '_route' => 'admin_dashboard',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_dashboard;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_dashboard'));
                    }

                    return $ret;
                }
                not_admin_dashboard:

                if (0 === strpos($pathinfo, '/admin/inquires')) {
                    // admin_inquire
                    if ('/admin/inquires' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::indexAction',  '_route' => 'admin_inquire',);
                    }

                    // admin_inquire_delete
                    if (0 === strpos($pathinfo, '/admin/inquires/delete') && preg_match('#^/admin/inquires/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_inquire_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::deleteAction',));
                    }

                    // admin_inquire_update
                    if (0 === strpos($pathinfo, '/admin/inquires/update') && preg_match('#^/admin/inquires/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_inquire_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::updateAction',));
                    }

                    // admin_inquire_create
                    if ('/admin/inquires/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::createAction',  '_route' => 'admin_inquire_create',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/listings')) {
                    // admin_listing
                    if ('/admin/listings' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::indexAction',  '_route' => 'admin_listing',);
                    }

                    // admin_listing_create
                    if ('/admin/listings/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::createAction',  '_route' => 'admin_listing_create',);
                    }

                    // admin_listing_delete
                    if (0 === strpos($pathinfo, '/admin/listings/delete') && preg_match('#^/admin/listings/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_listing_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::deleteAction',));
                    }

                    // admin_listing_update
                    if (0 === strpos($pathinfo, '/admin/listings/update') && preg_match('#^/admin/listings/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_listing_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::updateAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/locations')) {
                    // admin_location
                    if ('/admin/locations' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::indexAction',  '_route' => 'admin_location',);
                    }

                    // admin_location_delete
                    if (0 === strpos($pathinfo, '/admin/locations/delete') && preg_match('#^/admin/locations/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_location_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::deleteAction',));
                    }

                    // admin_location_update
                    if (0 === strpos($pathinfo, '/admin/locations/update') && preg_match('#^/admin/locations/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_location_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::updateAction',));
                    }

                    // admin_location_create
                    if ('/admin/locations/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::createAction',  '_route' => 'admin_location_create',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/orders')) {
                    // admin_order
                    if ('/admin/orders' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\OrderController::indexAction',  '_route' => 'admin_order',);
                    }

                    // admin_order_complete
                    if (0 === strpos($pathinfo, '/admin/orders/complete') && preg_match('#^/admin/orders/complete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_complete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\OrderController::completeAction',));
                    }

                    // admin_order_cancel
                    if (0 === strpos($pathinfo, '/admin/orders/cancel') && preg_match('#^/admin/orders/cancel/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_order_cancel']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\OrderController::cancelAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/posts')) {
                    // admin_post
                    if ('/admin/posts' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::indexAction',  '_route' => 'admin_post',);
                    }

                    // admin_post_create
                    if ('/admin/posts/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::createAction',  '_route' => 'admin_post_create',);
                    }

                    // admin_post_delete
                    if (0 === strpos($pathinfo, '/admin/posts/delete') && preg_match('#^/admin/posts/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_post_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::deleteAction',));
                    }

                    // admin_post_update
                    if (0 === strpos($pathinfo, '/admin/posts/update') && preg_match('#^/admin/posts/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_post_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::updateAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/reports')) {
                    // admin_report
                    if ('/admin/reports' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReportController::indexAction',  '_route' => 'admin_report',);
                    }

                    // admin_report_approve
                    if (0 === strpos($pathinfo, '/admin/reports/approve') && preg_match('#^/admin/reports/approve/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_report_approve']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReportController::approveAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/reviews')) {
                    // admin_review
                    if ('/admin/reviews' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::indexAction',  '_route' => 'admin_review',);
                    }

                    // admin_review_publish
                    if (0 === strpos($pathinfo, '/admin/reviews/publish') && preg_match('#^/admin/reviews/publish/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_review_publish']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::publishAction',));
                    }

                    // admin_review_create
                    if ('/admin/reviews/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::createAction',  '_route' => 'admin_review_create',);
                    }

                    // admin_review_delete
                    if (0 === strpos($pathinfo, '/admin/reviews/delete') && preg_match('#^/admin/reviews/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_review_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::deleteAction',));
                    }

                    // admin_review_update
                    if (0 === strpos($pathinfo, '/admin/reviews/update') && preg_match('#^/admin/reviews/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_review_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::updateAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/subscribers')) {
                    // admin_subscriber
                    if ('/admin/subscribers' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::indexAction',  '_route' => 'admin_subscriber',);
                    }

                    // admin_subscriber_delete
                    if (0 === strpos($pathinfo, '/admin/subscribers/delete') && preg_match('#^/admin/subscribers/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_subscriber_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::deleteAction',));
                    }

                    // admin_subscriber_update
                    if (0 === strpos($pathinfo, '/admin/subscribers/update') && preg_match('#^/admin/subscribers/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_subscriber_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::updateAction',));
                    }

                    // admin_subscriber_create
                    if ('/admin/subscribers/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::createAction',  '_route' => 'admin_subscriber_create',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/users')) {
                    // admin_user
                    if ('/admin/users' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                    }

                    // admin_user_create
                    if ('/admin/users/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                    }

                    // admin_user_delete
                    if (0 === strpos($pathinfo, '/admin/users/delete') && preg_match('#^/admin/users/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_delete']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::deleteAction',));
                    }

                    // admin_user_update
                    if (0 === strpos($pathinfo, '/admin/users/update') && preg_match('#^/admin/users/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_update']), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::updateAction',));
                    }

                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // favorite_add
        if (0 === strpos($pathinfo, '/favorites/add') && preg_match('#^/favorites/add/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'favorite_add']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\FavoriteController::addAction',));
        }

        // inquire
        if (0 === strpos($pathinfo, '/inquire') && preg_match('#^/inquire/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'inquire']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\InquireController::inquireAction',));
        }

        if (0 === strpos($pathinfo, '/listings')) {
            // listing
            if ('/listings' === $pathinfo) {
                return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::indexAction',  '_route' => 'listing',);
            }

            // listing_detail
            if (preg_match('#^/listings/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'listing_detail']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::detailAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/lo')) {
            if (0 === strpos($pathinfo, '/locations')) {
                // location
                if ('/locations' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\LocationController::indexAction',  '_route' => 'location',);
                }

                // location_detail
                if (preg_match('#^/locations/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'location_detail']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\LocationController::detailAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/blog')) {
            // post
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
            }

            // post_detail
            if (preg_match('#^/blog/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'post_detail']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\PostController::detailAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // report_create
            if (0 === strpos($pathinfo, '/reports/create') && preg_match('#^/reports/create/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'report_create']), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ReportController::createAction',));
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        // subscriber_subscribe
        if ('/subscriber/subscribe' === $pathinfo) {
            return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SubscriberController::subscribeAction',  '_route' => 'subscriber_subscribe',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/payment')) {
            if (0 === strpos($pathinfo, '/payment/capture')) {
                // payum_capture_do_session
                if ('/payment/capture/session-token' === $pathinfo) {
                    return array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction',  '_route' => 'payum_capture_do_session',);
                }

                // payum_capture_do
                if (preg_match('#^/payment/capture/(?P<payum_token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_capture_do']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction',));
                }

            }

            // payum_cancel_do
            if (0 === strpos($pathinfo, '/payment/cancel') && preg_match('#^/payment/cancel/(?P<payum_token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_cancel_do']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CancelController::doAction',));
            }

            // payum_authorize_do
            if (0 === strpos($pathinfo, '/payment/authorize') && preg_match('#^/payment/authorize/(?P<payum_token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_authorize_do']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction',));
            }

            if (0 === strpos($pathinfo, '/payment/notify')) {
                // payum_notify_do_unsafe
                if (0 === strpos($pathinfo, '/payment/notify/unsafe') && preg_match('#^/payment/notify/unsafe/(?P<gateway>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_notify_do_unsafe']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction',));
                }

                // payum_notify_do
                if (preg_match('#^/payment/notify/(?P<payum_token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_notify_do']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction',));
                }

            }

            // payum_payout_do
            if (0 === strpos($pathinfo, '/payment/payout') && preg_match('#^/payment/payout/(?P<payum_token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_payout_do']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\PayoutController::doAction',));
            }

            // payum_refund_do
            if (0 === strpos($pathinfo, '/payment/refund') && preg_match('#^/payment/refund/(?P<payum_token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_refund_do']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\RefundController::doAction',));
            }

            // payum_sync_do
            if (0 === strpos($pathinfo, '/payment/sync') && preg_match('#^/payment/sync/(?P<payum_token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'payum_sync_do']), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\SyncController::doAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
