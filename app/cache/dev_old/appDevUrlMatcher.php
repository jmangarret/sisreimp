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

        if (0 === strpos($pathinfo, '/actividadesempresa')) {
            // actividadesempresa
            if (rtrim($pathinfo, '/') === '/actividadesempresa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividadesempresa;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'actividadesempresa');
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ActividadesEmpresaController::indexAction',  '_route' => 'actividadesempresa',);
            }
            not_actividadesempresa:

            // actividadesempresa_create
            if ($pathinfo === '/actividadesempresa/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_actividadesempresa_create;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ActividadesEmpresaController::createAction',  '_route' => 'actividadesempresa_create',);
            }
            not_actividadesempresa_create:

            // actividadesempresa_new
            if ($pathinfo === '/actividadesempresa/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividadesempresa_new;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ActividadesEmpresaController::newAction',  '_route' => 'actividadesempresa_new',);
            }
            not_actividadesempresa_new:

            // actividadesempresa_show
            if (preg_match('#^/actividadesempresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividadesempresa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadesempresa_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ActividadesEmpresaController::showAction',));
            }
            not_actividadesempresa_show:

            // actividadesempresa_edit
            if (preg_match('#^/actividadesempresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividadesempresa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadesempresa_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ActividadesEmpresaController::editAction',));
            }
            not_actividadesempresa_edit:

            // actividadesempresa_update
            if (preg_match('#^/actividadesempresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_actividadesempresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadesempresa_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ActividadesEmpresaController::updateAction',));
            }
            not_actividadesempresa_update:

            // actividadesempresa_delete
            if (preg_match('#^/actividadesempresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_actividadesempresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadesempresa_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ActividadesEmpresaController::deleteAction',));
            }
            not_actividadesempresa_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/clasificacion')) {
                // clasificacion
                if (rtrim($pathinfo, '/') === '/clasificacion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_clasificacion;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'clasificacion');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ClasificacionController::indexAction',  '_route' => 'clasificacion',);
                }
                not_clasificacion:

                // clasificacion_create
                if ($pathinfo === '/clasificacion/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_clasificacion_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ClasificacionController::createAction',  '_route' => 'clasificacion_create',);
                }
                not_clasificacion_create:

                // clasificacion_new
                if ($pathinfo === '/clasificacion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_clasificacion_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ClasificacionController::newAction',  '_route' => 'clasificacion_new',);
                }
                not_clasificacion_new:

                // clasificacion_show
                if (preg_match('#^/clasificacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_clasificacion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificacion_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ClasificacionController::showAction',));
                }
                not_clasificacion_show:

                // clasificacion_edit
                if (preg_match('#^/clasificacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_clasificacion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificacion_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ClasificacionController::editAction',));
                }
                not_clasificacion_edit:

                // clasificacion_update
                if (preg_match('#^/clasificacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_clasificacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificacion_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ClasificacionController::updateAction',));
                }
                not_clasificacion_update:

                // clasificacion_delete
                if (preg_match('#^/clasificacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_clasificacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificacion_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ClasificacionController::deleteAction',));
                }
                not_clasificacion_delete:

            }

            if (0 === strpos($pathinfo, '/contribuyentes')) {
                // contribuyente
                if (rtrim($pathinfo, '/') === '/contribuyentes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contribuyente;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contribuyente');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ContribuyenteController::indexAction',  '_route' => 'contribuyente',);
                }
                not_contribuyente:

                // contribuyente_create
                if ($pathinfo === '/contribuyentes/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contribuyente_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ContribuyenteController::createAction',  '_route' => 'contribuyente_create',);
                }
                not_contribuyente_create:

                // contribuyente_new
                if ($pathinfo === '/contribuyentes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contribuyente_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ContribuyenteController::newAction',  '_route' => 'contribuyente_new',);
                }
                not_contribuyente_new:

                // contribuyente_show
                if (preg_match('#^/contribuyentes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contribuyente_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contribuyente_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ContribuyenteController::showAction',));
                }
                not_contribuyente_show:

                // contribuyente_edit
                if (preg_match('#^/contribuyentes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contribuyente_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contribuyente_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ContribuyenteController::editAction',));
                }
                not_contribuyente_edit:

                // contribuyente_update
                if (preg_match('#^/contribuyentes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_contribuyente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contribuyente_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ContribuyenteController::updateAction',));
                }
                not_contribuyente_update:

                // contribuyente_delete
                if (preg_match('#^/contribuyentes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_contribuyente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contribuyente_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\ContribuyenteController::deleteAction',));
                }
                not_contribuyente_delete:

            }

        }

        // inicio_home
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\DefaultController::indexAction',  '_route' => 'inicio_home',);
        }

        // inicio_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\DefaultController::loginAction',  '_route' => 'inicio_login',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/empresa')) {
                // empresa
                if (rtrim($pathinfo, '/') === '/empresa') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresa;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'empresa');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EmpresaController::indexAction',  '_route' => 'empresa',);
                }
                not_empresa:

                // empresa_create
                if ($pathinfo === '/empresa/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_empresa_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EmpresaController::createAction',  '_route' => 'empresa_create',);
                }
                not_empresa_create:

                // empresa_new
                if ($pathinfo === '/empresa/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresa_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa_new',);
                }
                not_empresa_new:

                // empresa_show
                if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresa_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EmpresaController::showAction',));
                }
                not_empresa_show:

                // empresa_edit
                if (0 === strpos($pathinfo, '/empresa/edit') && preg_match('#^/empresa/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresa_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EmpresaController::editAction',));
                }
                not_empresa_edit:

                // empresa_update
                if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_empresa_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EmpresaController::updateAction',));
                }
                not_empresa_update:

                // empresa_delete
                if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_empresa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EmpresaController::deleteAction',));
                }
                not_empresa_delete:

            }

            if (0 === strpos($pathinfo, '/espectaculos')) {
                // espectaculos
                if (rtrim($pathinfo, '/') === '/espectaculos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_espectaculos;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'espectaculos');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EspectaculosController::indexAction',  '_route' => 'espectaculos',);
                }
                not_espectaculos:

                // espectaculos_create
                if ($pathinfo === '/espectaculos/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_espectaculos_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EspectaculosController::createAction',  '_route' => 'espectaculos_create',);
                }
                not_espectaculos_create:

                // espectaculos_new
                if ($pathinfo === '/espectaculos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_espectaculos_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EspectaculosController::newAction',  '_route' => 'espectaculos_new',);
                }
                not_espectaculos_new:

                // espectaculos_show
                if (preg_match('#^/espectaculos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_espectaculos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'espectaculos_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EspectaculosController::showAction',));
                }
                not_espectaculos_show:

                // espectaculos_edit
                if (preg_match('#^/espectaculos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_espectaculos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'espectaculos_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EspectaculosController::editAction',));
                }
                not_espectaculos_edit:

                // espectaculos_update
                if (preg_match('#^/espectaculos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_espectaculos_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'espectaculos_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EspectaculosController::updateAction',));
                }
                not_espectaculos_update:

                // espectaculos_delete
                if (preg_match('#^/espectaculos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_espectaculos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'espectaculos_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\EspectaculosController::deleteAction',));
                }
                not_espectaculos_delete:

            }

        }

        if (0 === strpos($pathinfo, '/licenciaactecon')) {
            // licenciaactecon
            if (rtrim($pathinfo, '/') === '/licenciaactecon') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licenciaactecon;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'licenciaactecon');
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\LicenciaActEconController::indexAction',  '_route' => 'licenciaactecon',);
            }
            not_licenciaactecon:

            // licenciaactecon_create
            if ($pathinfo === '/licenciaactecon/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_licenciaactecon_create;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\LicenciaActEconController::createAction',  '_route' => 'licenciaactecon_create',);
            }
            not_licenciaactecon_create:

            // licenciaactecon_new
            if ($pathinfo === '/licenciaactecon/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licenciaactecon_new;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\LicenciaActEconController::newAction',  '_route' => 'licenciaactecon_new',);
            }
            not_licenciaactecon_new:

            // licenciaactecon_show
            if (preg_match('#^/licenciaactecon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licenciaactecon_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licenciaactecon_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\LicenciaActEconController::showAction',));
            }
            not_licenciaactecon_show:

            // licenciaactecon_edit
            if (preg_match('#^/licenciaactecon/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licenciaactecon_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licenciaactecon_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\LicenciaActEconController::editAction',));
            }
            not_licenciaactecon_edit:

            // licenciaactecon_update
            if (preg_match('#^/licenciaactecon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_licenciaactecon_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licenciaactecon_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\LicenciaActEconController::updateAction',));
            }
            not_licenciaactecon_update:

            // licenciaactecon_delete
            if (preg_match('#^/licenciaactecon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_licenciaactecon_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licenciaactecon_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\LicenciaActEconController::deleteAction',));
            }
            not_licenciaactecon_delete:

        }

        if (0 === strpos($pathinfo, '/patentevehiculo')) {
            // patentevehiculo
            if (rtrim($pathinfo, '/') === '/patentevehiculo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patentevehiculo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'patentevehiculo');
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\PatenteVehiculoController::indexAction',  '_route' => 'patentevehiculo',);
            }
            not_patentevehiculo:

            // patentevehiculo_create
            if ($pathinfo === '/patentevehiculo/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_patentevehiculo_create;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\PatenteVehiculoController::createAction',  '_route' => 'patentevehiculo_create',);
            }
            not_patentevehiculo_create:

            // patentevehiculo_new
            if ($pathinfo === '/patentevehiculo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patentevehiculo_new;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\PatenteVehiculoController::newAction',  '_route' => 'patentevehiculo_new',);
            }
            not_patentevehiculo_new:

            // patentevehiculo_show
            if (preg_match('#^/patentevehiculo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patentevehiculo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patentevehiculo_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\PatenteVehiculoController::showAction',));
            }
            not_patentevehiculo_show:

            // patentevehiculo_edit
            if (preg_match('#^/patentevehiculo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patentevehiculo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patentevehiculo_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\PatenteVehiculoController::editAction',));
            }
            not_patentevehiculo_edit:

            // patentevehiculo_update
            if (preg_match('#^/patentevehiculo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_patentevehiculo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patentevehiculo_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\PatenteVehiculoController::updateAction',));
            }
            not_patentevehiculo_update:

            // patentevehiculo_delete
            if (preg_match('#^/patentevehiculo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_patentevehiculo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patentevehiculo_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\PatenteVehiculoController::deleteAction',));
            }
            not_patentevehiculo_delete:

        }

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/ramos')) {
                // ramos
                if (rtrim($pathinfo, '/') === '/ramos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ramos;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ramos');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RamosController::indexAction',  '_route' => 'ramos',);
                }
                not_ramos:

                // ramos_create
                if ($pathinfo === '/ramos/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ramos_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RamosController::createAction',  '_route' => 'ramos_create',);
                }
                not_ramos_create:

                // ramos_new
                if ($pathinfo === '/ramos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ramos_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RamosController::newAction',  '_route' => 'ramos_new',);
                }
                not_ramos_new:

                // ramos_show
                if (preg_match('#^/ramos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ramos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ramos_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RamosController::showAction',));
                }
                not_ramos_show:

                // ramos_edit
                if (preg_match('#^/ramos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ramos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ramos_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RamosController::editAction',));
                }
                not_ramos_edit:

                // ramos_update
                if (preg_match('#^/ramos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_ramos_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ramos_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RamosController::updateAction',));
                }
                not_ramos_update:

                // ramos_delete
                if (preg_match('#^/ramos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ramos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ramos_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RamosController::deleteAction',));
                }
                not_ramos_delete:

            }

            if (0 === strpos($pathinfo, '/rubrostributarios')) {
                // rubrostributarios
                if (rtrim($pathinfo, '/') === '/rubrostributarios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rubrostributarios;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rubrostributarios');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RubrosTributariosController::indexAction',  '_route' => 'rubrostributarios',);
                }
                not_rubrostributarios:

                // rubrostributarios_create
                if ($pathinfo === '/rubrostributarios/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rubrostributarios_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RubrosTributariosController::createAction',  '_route' => 'rubrostributarios_create',);
                }
                not_rubrostributarios_create:

                // rubrostributarios_new
                if ($pathinfo === '/rubrostributarios/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rubrostributarios_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RubrosTributariosController::newAction',  '_route' => 'rubrostributarios_new',);
                }
                not_rubrostributarios_new:

                // rubrostributarios_show
                if (preg_match('#^/rubrostributarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rubrostributarios_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rubrostributarios_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RubrosTributariosController::showAction',));
                }
                not_rubrostributarios_show:

                // rubrostributarios_edit
                if (preg_match('#^/rubrostributarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rubrostributarios_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rubrostributarios_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RubrosTributariosController::editAction',));
                }
                not_rubrostributarios_edit:

                // rubrostributarios_update
                if (preg_match('#^/rubrostributarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_rubrostributarios_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rubrostributarios_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RubrosTributariosController::updateAction',));
                }
                not_rubrostributarios_update:

                // rubrostributarios_delete
                if (preg_match('#^/rubrostributarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_rubrostributarios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rubrostributarios_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\RubrosTributariosController::deleteAction',));
                }
                not_rubrostributarios_delete:

            }

        }

        if (0 === strpos($pathinfo, '/tiposimpuestos')) {
            // tiposimpuestos
            if (rtrim($pathinfo, '/') === '/tiposimpuestos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tiposimpuestos;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tiposimpuestos');
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\TiposImpuestosController::indexAction',  '_route' => 'tiposimpuestos',);
            }
            not_tiposimpuestos:

            // tiposimpuestos_create
            if ($pathinfo === '/tiposimpuestos/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tiposimpuestos_create;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\TiposImpuestosController::createAction',  '_route' => 'tiposimpuestos_create',);
            }
            not_tiposimpuestos_create:

            // tiposimpuestos_new
            if ($pathinfo === '/tiposimpuestos/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tiposimpuestos_new;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\TiposImpuestosController::newAction',  '_route' => 'tiposimpuestos_new',);
            }
            not_tiposimpuestos_new:

            // tiposimpuestos_show
            if (preg_match('#^/tiposimpuestos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tiposimpuestos_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiposimpuestos_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\TiposImpuestosController::showAction',));
            }
            not_tiposimpuestos_show:

            // tiposimpuestos_edit
            if (preg_match('#^/tiposimpuestos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tiposimpuestos_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiposimpuestos_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\TiposImpuestosController::editAction',));
            }
            not_tiposimpuestos_edit:

            // tiposimpuestos_update
            if (preg_match('#^/tiposimpuestos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_tiposimpuestos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiposimpuestos_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\TiposImpuestosController::updateAction',));
            }
            not_tiposimpuestos_update:

            // tiposimpuestos_delete
            if (preg_match('#^/tiposimpuestos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tiposimpuestos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tiposimpuestos_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\TiposImpuestosController::deleteAction',));
            }
            not_tiposimpuestos_delete:

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios
            if (rtrim($pathinfo, '/') === '/usuarios') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios');
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'usuarios',);
            }
            not_usuarios:

            // usuarios_create
            if ($pathinfo === '/usuarios/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuarios_create;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\UsuariosController::createAction',  '_route' => 'usuarios_create',);
            }
            not_usuarios_create:

            // usuarios_new
            if ($pathinfo === '/usuarios/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_new;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\UsuariosController::newAction',  '_route' => 'usuarios_new',);
            }
            not_usuarios_new:

            // usuarios_show
            if (preg_match('#^/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\UsuariosController::showAction',));
            }
            not_usuarios_show:

            // usuarios_edit
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\UsuariosController::editAction',));
            }
            not_usuarios_edit:

            // usuarios_update
            if (preg_match('#^/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_usuarios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\UsuariosController::updateAction',));
            }
            not_usuarios_update:

            // usuarios_delete
            if (preg_match('#^/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuarios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\UsuariosController::deleteAction',));
            }
            not_usuarios_delete:

        }

        if (0 === strpos($pathinfo, '/vehiculos')) {
            // vehiculos
            if (rtrim($pathinfo, '/') === '/vehiculos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vehiculos;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vehiculos');
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\VehiculosController::indexAction',  '_route' => 'vehiculos',);
            }
            not_vehiculos:

            // vehiculos_create
            if ($pathinfo === '/vehiculos/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vehiculos_create;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\VehiculosController::createAction',  '_route' => 'vehiculos_create',);
            }
            not_vehiculos_create:

            // vehiculos_new
            if ($pathinfo === '/vehiculos/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vehiculos_new;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\VehiculosController::newAction',  '_route' => 'vehiculos_new',);
            }
            not_vehiculos_new:

            // vehiculos_show
            if (preg_match('#^/vehiculos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vehiculos_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculos_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\VehiculosController::showAction',));
            }
            not_vehiculos_show:

            // vehiculos_edit
            if (preg_match('#^/vehiculos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vehiculos_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculos_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\VehiculosController::editAction',));
            }
            not_vehiculos_edit:

            // vehiculos_update
            if (preg_match('#^/vehiculos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_vehiculos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculos_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\VehiculosController::updateAction',));
            }
            not_vehiculos_update:

            // vehiculos_delete
            if (preg_match('#^/vehiculos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_vehiculos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehiculos_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\VehiculosController::deleteAction',));
            }
            not_vehiculos_delete:

        }

        if (0 === strpos($pathinfo, '/imp')) {
            if (0 === strpos($pathinfo, '/impcobroentradas')) {
                // impcobroentradas
                if (rtrim($pathinfo, '/') === '/impcobroentradas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impcobroentradas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'impcobroentradas');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impCobroEntradasController::indexAction',  '_route' => 'impcobroentradas',);
                }
                not_impcobroentradas:

                // impcobroentradas_create
                if ($pathinfo === '/impcobroentradas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_impcobroentradas_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impCobroEntradasController::createAction',  '_route' => 'impcobroentradas_create',);
                }
                not_impcobroentradas_create:

                // impcobroentradas_new
                if ($pathinfo === '/impcobroentradas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impcobroentradas_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impCobroEntradasController::newAction',  '_route' => 'impcobroentradas_new',);
                }
                not_impcobroentradas_new:

                // impcobroentradas_show
                if (preg_match('#^/impcobroentradas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impcobroentradas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impcobroentradas_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impCobroEntradasController::showAction',));
                }
                not_impcobroentradas_show:

                // impcobroentradas_edit
                if (preg_match('#^/impcobroentradas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impcobroentradas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impcobroentradas_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impCobroEntradasController::editAction',));
                }
                not_impcobroentradas_edit:

                // impcobroentradas_update
                if (preg_match('#^/impcobroentradas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_impcobroentradas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impcobroentradas_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impCobroEntradasController::updateAction',));
                }
                not_impcobroentradas_update:

                // impcobroentradas_delete
                if (preg_match('#^/impcobroentradas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_impcobroentradas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impcobroentradas_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impCobroEntradasController::deleteAction',));
                }
                not_impcobroentradas_delete:

            }

            if (0 === strpos($pathinfo, '/impespectaculosgratuitos')) {
                // impespectaculosgratuitos
                if (rtrim($pathinfo, '/') === '/impespectaculosgratuitos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impespectaculosgratuitos;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'impespectaculosgratuitos');
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impEspectaculosGratuitosController::indexAction',  '_route' => 'impespectaculosgratuitos',);
                }
                not_impespectaculosgratuitos:

                // impespectaculosgratuitos_create
                if ($pathinfo === '/impespectaculosgratuitos/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_impespectaculosgratuitos_create;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impEspectaculosGratuitosController::createAction',  '_route' => 'impespectaculosgratuitos_create',);
                }
                not_impespectaculosgratuitos_create:

                // impespectaculosgratuitos_new
                if ($pathinfo === '/impespectaculosgratuitos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impespectaculosgratuitos_new;
                    }

                    return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impEspectaculosGratuitosController::newAction',  '_route' => 'impespectaculosgratuitos_new',);
                }
                not_impespectaculosgratuitos_new:

                // impespectaculosgratuitos_show
                if (preg_match('#^/impespectaculosgratuitos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impespectaculosgratuitos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impespectaculosgratuitos_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impEspectaculosGratuitosController::showAction',));
                }
                not_impespectaculosgratuitos_show:

                // impespectaculosgratuitos_edit
                if (preg_match('#^/impespectaculosgratuitos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impespectaculosgratuitos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impespectaculosgratuitos_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impEspectaculosGratuitosController::editAction',));
                }
                not_impespectaculosgratuitos_edit:

                // impespectaculosgratuitos_update
                if (preg_match('#^/impespectaculosgratuitos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_impespectaculosgratuitos_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impespectaculosgratuitos_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impEspectaculosGratuitosController::updateAction',));
                }
                not_impespectaculosgratuitos_update:

                // impespectaculosgratuitos_delete
                if (preg_match('#^/impespectaculosgratuitos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_impespectaculosgratuitos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impespectaculosgratuitos_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\impEspectaculosGratuitosController::deleteAction',));
                }
                not_impespectaculosgratuitos_delete:

            }

        }

        if (0 === strpos($pathinfo, '/tipovehiculo')) {
            // tipovehiculo
            if (rtrim($pathinfo, '/') === '/tipovehiculo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipovehiculo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipovehiculo');
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\tipoVehiculoController::indexAction',  '_route' => 'tipovehiculo',);
            }
            not_tipovehiculo:

            // tipovehiculo_create
            if ($pathinfo === '/tipovehiculo/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipovehiculo_create;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\tipoVehiculoController::createAction',  '_route' => 'tipovehiculo_create',);
            }
            not_tipovehiculo_create:

            // tipovehiculo_new
            if ($pathinfo === '/tipovehiculo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipovehiculo_new;
                }

                return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\tipoVehiculoController::newAction',  '_route' => 'tipovehiculo_new',);
            }
            not_tipovehiculo_new:

            // tipovehiculo_show
            if (preg_match('#^/tipovehiculo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipovehiculo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipovehiculo_show')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\tipoVehiculoController::showAction',));
            }
            not_tipovehiculo_show:

            // tipovehiculo_edit
            if (preg_match('#^/tipovehiculo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipovehiculo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipovehiculo_edit')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\tipoVehiculoController::editAction',));
            }
            not_tipovehiculo_edit:

            // tipovehiculo_update
            if (preg_match('#^/tipovehiculo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_tipovehiculo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipovehiculo_update')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\tipoVehiculoController::updateAction',));
            }
            not_tipovehiculo_update:

            // tipovehiculo_delete
            if (preg_match('#^/tipovehiculo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipovehiculo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipovehiculo_delete')), array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\tipoVehiculoController::deleteAction',));
            }
            not_tipovehiculo_delete:

        }

        // sistema_sisreimp_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sistema_sisreimp_homepage');
            }

            return array (  '_controller' => 'Sistema\\SisreimpBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sistema_sisreimp_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
