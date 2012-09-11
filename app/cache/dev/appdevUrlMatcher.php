<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // wmsintroduction_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wmsintroduction_accueil');
            }

            return array (  '_controller' => 'Wms\\IntroductionBundle\\Controller\\IntroductionController::accueilAction',  '_route' => 'wmsintroduction_accueil',);
        }

        // wmsintroduction_cv
        if ($pathinfo === '/cv') {
            return array (  '_controller' => 'Wms\\IntroductionBundle\\Controller\\IntroductionController::cvAction',  '_route' => 'wmsintroduction_cv',);
        }

        // wmsintroduction_apropos
        if ($pathinfo === '/apropos') {
            return array (  '_controller' => 'Wms\\IntroductionBundle\\Controller\\IntroductionController::aproposAction',  '_route' => 'wmsintroduction_apropos',);
        }

        // wmsintroduction_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Wms\\IntroductionBundle\\Controller\\IntroductionController::contactAction',  '_route' => 'wmsintroduction_contact',);
        }

        if (0 === strpos($pathinfo, '/ldc')) {
            // ldcwebsitebundle_accueil
            if (rtrim($pathinfo, '/') === '/ldc') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ldcwebsitebundle_accueil');
                }

                return array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\WebsiteController::indexAction',  '_route' => 'ldcwebsitebundle_accueil',);
            }

            // ldcwebsitebundle_usersprofile
            if (0 === strpos($pathinfo, '/ldc/users/profile') && preg_match('#^/ldc/users/profile/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\UserController::profileAction',)), array('_route' => 'ldcwebsitebundle_usersprofile'));
            }

            // ldcwebsitebundle_articles
            if (0 === strpos($pathinfo, '/ldc/articles') && preg_match('#^/ldc/articles/(?<page>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\ArticleController::indexAction',)), array('_route' => 'ldcwebsitebundle_articles'));
            }

            // ldcwebsitebundle_articlesshow
            if (0 === strpos($pathinfo, '/ldc/articles/show') && preg_match('#^/ldc/articles/show/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\ArticleController::showAction',)), array('_route' => 'ldcwebsitebundle_articlesshow'));
            }

            // ldcwebsitebundle_events
            if ($pathinfo === '/ldc/events') {
                return array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\EventController::indexAction',  '_route' => 'ldcwebsitebundle_events',);
            }

            // ldcwebsitebundle_surveys
            if ($pathinfo === '/ldc/surveys') {
                return array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\SurveyController::indexAction',  '_route' => 'ldcwebsitebundle_surveys',);
            }

            // ldcwebsitebundle_unhautorized
            if ($pathinfo === '/ldc/unauthorized') {
                return array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\WebsiteController::unauthorizedAction',  '_route' => 'ldcwebsitebundle_unhautorized',);
            }

        }

        if (0 === strpos($pathinfo, '/ldc/survey')) {
            // ldcsurveybundle_newform
            if (0 === strpos($pathinfo, '/ldc/survey/vote') && preg_match('#^/ldc/survey/vote/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\SurveyBundle\\Controller\\SurveyController::voteAction',)), array('_route' => 'ldcsurveybundle_newform'));
            }

            // ldcsurveybundle_result
            if (0 === strpos($pathinfo, '/ldc/survey/result') && preg_match('#^/ldc/survey/result/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\SurveyBundle\\Controller\\SurveyController::resultAction',)), array('_route' => 'ldcsurveybundle_result'));
            }

        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/ldc/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/ldc/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Ldc\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/ldc/profile/edit') {
                return array (  '_controller' => 'Ldc\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/ldc/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/ldc/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Ldc\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/ldc/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'Ldc\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/ldc/register/confirm') && preg_match('#^/ldc/register/confirm/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/ldc/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'Ldc\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/ldc/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/ldc/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/ldc/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/ldc/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/ldc/resetting/reset') && preg_match('#^/ldc/resetting/reset/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/ldc/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // ldcwebsitebundle_admin_index
        if (rtrim($pathinfo, '/') === '/ldc/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ldcwebsitebundle_admin_index');
            }

            return array (  '_controller' => 'Ldc\\WebsiteBundle\\Controller\\AdminController::indexAction',  '_route' => 'ldcwebsitebundle_admin_index',);
        }

        if (0 === strpos($pathinfo, '/ldc/admin/article')) {
            // ldcarticlebundle_new
            if ($pathinfo === '/ldc/admin/article/new') {
                return array (  '_controller' => 'Ldc\\ArticleBundle\\Controller\\ArticleAdminController::newAction',  '_route' => 'ldcarticlebundle_new',);
            }

            // ldcarticlebundle_edit
            if (0 === strpos($pathinfo, '/ldc/admin/article/edit') && preg_match('#^/ldc/admin/article/edit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\ArticleBundle\\Controller\\ArticleAdminController::editAction',)), array('_route' => 'ldcarticlebundle_edit'));
            }

            // ldcarticlebundle_delete
            if (0 === strpos($pathinfo, '/ldc/admin/article/delete') && preg_match('#^/ldc/admin/article/delete/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\ArticleBundle\\Controller\\ArticleAdminController::deleteAction',)), array('_route' => 'ldcarticlebundle_delete'));
            }

            // ldcarticlebundle_list
            if ($pathinfo === '/ldc/admin/article/list') {
                return array (  '_controller' => 'Ldc\\ArticleBundle\\Controller\\ArticleAdminController::listAction',  '_route' => 'ldcarticlebundle_list',);
            }

            // ldcarticlebundle_confirmed
            if ($pathinfo === '/ldc/admin/article/confirmed') {
                return array (  '_controller' => 'Ldc\\ArticleBundle\\Controller\\ArticleAdminController::confirmedAction',  '_route' => 'ldcarticlebundle_confirmed',);
            }

        }

        if (0 === strpos($pathinfo, '/ldc/admin/event')) {
            // ldceventbundle_new
            if ($pathinfo === '/ldc/admin/event/new') {
                return array (  '_controller' => 'Ldc\\EventBundle\\Controller\\EventAdminController::newAction',  '_route' => 'ldceventbundle_new',);
            }

            // ldceventbundle_create
            if ($pathinfo === '/ldc/admin/event/create') {
                return array (  '_controller' => 'Ldc\\EventBundle\\Controller\\EventAdminController::createAction',  '_route' => 'ldceventbundle_create',);
            }

            // ldceventbundle_edit
            if (0 === strpos($pathinfo, '/ldc/admin/event/edit') && preg_match('#^/ldc/admin/event/edit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\EventBundle\\Controller\\EventAdminController::editAction',)), array('_route' => 'ldceventbundle_edit'));
            }

            // ldceventbundle_update
            if (0 === strpos($pathinfo, '/ldc/admin/event/update') && preg_match('#^/ldc/admin/event/update/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\EventBundle\\Controller\\EventAdminController::updateAction',)), array('_route' => 'ldceventbundle_update'));
            }

            // ldceventbundle_delete
            if (0 === strpos($pathinfo, '/ldc/admin/event/delete') && preg_match('#^/ldc/admin/event/delete/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\EventBundle\\Controller\\EventAdminController::deleteAction',)), array('_route' => 'ldceventbundle_delete'));
            }

            // ldceventbundle_list
            if ($pathinfo === '/ldc/admin/event/list') {
                return array (  '_controller' => 'Ldc\\EventBundle\\Controller\\EventAdminController::listAction',  '_route' => 'ldceventbundle_list',);
            }

            // ldceventbundle_confirmed
            if ($pathinfo === '/ldc/admin/event/confirmed') {
                return array (  '_controller' => 'Ldc\\EventBundle\\Controller\\EventAdminController::confirmedAction',  '_route' => 'ldceventbundle_confirmed',);
            }

        }

        if (0 === strpos($pathinfo, '/ldc/admin/slider')) {
            // ldcsliderimagebundle_new
            if ($pathinfo === '/ldc/admin/slider/new') {
                return array (  '_controller' => 'Ldc\\SliderImageBundle\\Controller\\SliderImageAdminController::newAction',  '_route' => 'ldcsliderimagebundle_new',);
            }

            // ldcsliderimagebundle_edit
            if (0 === strpos($pathinfo, '/ldc/admin/slider/edit') && preg_match('#^/ldc/admin/slider/edit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\SliderImageBundle\\Controller\\SliderImageAdminController::editAction',)), array('_route' => 'ldcsliderimagebundle_edit'));
            }

            // ldcsliderimagebundle_list
            if ($pathinfo === '/ldc/admin/slider/list') {
                return array (  '_controller' => 'Ldc\\SliderImageBundle\\Controller\\SliderImageAdminController::listAction',  '_route' => 'ldcsliderimagebundle_list',);
            }

            // ldcsliderimagebundle_confirmed
            if ($pathinfo === '/ldc/admin/slider/confirmed') {
                return array (  '_controller' => 'Ldc\\SliderImageBundle\\Controller\\SliderImageAdminController::confirmedAction',  '_route' => 'ldcsliderimagebundle_confirmed',);
            }

        }

        if (0 === strpos($pathinfo, '/ldc/admin/survey')) {
            // ldcsurveybundle_list
            if ($pathinfo === '/ldc/admin/survey/list') {
                return array (  '_controller' => 'Ldc\\SurveyBundle\\Controller\\AdminController::listAction',  '_route' => 'ldcsurveybundle_list',);
            }

            // ldcsurveybundle_new
            if ($pathinfo === '/ldc/admin/survey/new') {
                return array (  '_controller' => 'Ldc\\SurveyBundle\\Controller\\AdminController::newAction',  '_route' => 'ldcsurveybundle_new',);
            }

            // ldcsurveybundle_edit
            if (0 === strpos($pathinfo, '/ldc/admin/survey/edit') && preg_match('#^/ldc/admin/survey/edit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\SurveyBundle\\Controller\\AdminController::editAction',)), array('_route' => 'ldcsurveybundle_edit'));
            }

            // ldcsurveybundle_delete
            if (0 === strpos($pathinfo, '/ldc/admin/survey/delete') && preg_match('#^/ldc/admin/survey/delete/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\SurveyBundle\\Controller\\AdminController::deleteAction',)), array('_route' => 'ldcsurveybundle_delete'));
            }

            // ldcsurveybundle_confirmed
            if ($pathinfo === '/ldc/admin/survey/confirmed') {
                return array (  '_controller' => 'Ldc\\SurveyBundle\\Controller\\AdminController::confirmedAction',  '_route' => 'ldcsurveybundle_confirmed',);
            }

        }

        if (0 === strpos($pathinfo, '/ldc/admin/user')) {
            // ldc_user_admin_list
            if ($pathinfo === '/ldc/admin/user/list') {
                return array (  '_controller' => 'Ldc\\UserBundle\\Controller\\AdminController::listAction',  '_route' => 'ldc_user_admin_list',);
            }

            // ldc_user_admin_edit
            if (preg_match('#^/ldc/admin/user/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\UserBundle\\Controller\\AdminController::editAction',)), array('_route' => 'ldc_user_admin_edit'));
            }

            // ldc_user_admin_delete
            if (preg_match('#^/ldc/admin/user/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ldc\\UserBundle\\Controller\\AdminController::deleteAction',)), array('_route' => 'ldc_user_admin_delete'));
            }

            // ldc_user_admin_confirmed
            if ($pathinfo === '/ldc/admin/user/confirmed') {
                return array (  '_controller' => 'Ldc\\UserBundle\\Controller\\AdminController::confirmedAction',  '_route' => 'ldc_user_admin_confirmed',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
