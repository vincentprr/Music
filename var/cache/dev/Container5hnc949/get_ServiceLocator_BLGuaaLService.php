<?php

namespace Container5hnc949;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BLGuaaLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BLGuaaL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BLGuaaL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AddingController::delete' => ['privates', '.service_locator.pjpOzEa', 'get_ServiceLocator_PjpOzEaService', true],
            'App\\Controller\\AddingController::index' => ['privates', '.service_locator.yJTy2pp', 'get_ServiceLocator_YJTy2ppService', true],
            'App\\Controller\\AlbumDetailsController::index' => ['privates', '.service_locator.zSDAfxj', 'get_ServiceLocator_ZSDAfxjService', true],
            'App\\Controller\\FavoritesController::index' => ['privates', '.service_locator.LxeYT6N', 'get_ServiceLocator_LxeYT6NService', true],
            'App\\Controller\\IndexController::index' => ['privates', '.service_locator.zSDAfxj', 'get_ServiceLocator_ZSDAfxjService', true],
            'App\\Controller\\RegisterController::index' => ['privates', '.service_locator.5KGLszz', 'get_ServiceLocator_5KGLszzService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AddingController:delete' => ['privates', '.service_locator.pjpOzEa', 'get_ServiceLocator_PjpOzEaService', true],
            'App\\Controller\\AddingController:index' => ['privates', '.service_locator.yJTy2pp', 'get_ServiceLocator_YJTy2ppService', true],
            'App\\Controller\\AlbumDetailsController:index' => ['privates', '.service_locator.zSDAfxj', 'get_ServiceLocator_ZSDAfxjService', true],
            'App\\Controller\\FavoritesController:index' => ['privates', '.service_locator.LxeYT6N', 'get_ServiceLocator_LxeYT6NService', true],
            'App\\Controller\\IndexController:index' => ['privates', '.service_locator.zSDAfxj', 'get_ServiceLocator_ZSDAfxjService', true],
            'App\\Controller\\RegisterController:index' => ['privates', '.service_locator.5KGLszz', 'get_ServiceLocator_5KGLszzService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AddingController::delete' => '?',
            'App\\Controller\\AddingController::index' => '?',
            'App\\Controller\\AlbumDetailsController::index' => '?',
            'App\\Controller\\FavoritesController::index' => '?',
            'App\\Controller\\IndexController::index' => '?',
            'App\\Controller\\RegisterController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AddingController:delete' => '?',
            'App\\Controller\\AddingController:index' => '?',
            'App\\Controller\\AlbumDetailsController:index' => '?',
            'App\\Controller\\FavoritesController:index' => '?',
            'App\\Controller\\IndexController:index' => '?',
            'App\\Controller\\RegisterController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
