<?php

namespace ContainerB91bnqL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H8Ml21GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h8Ml21G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h8Ml21G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'filters' => ['privates', '.errored..service_locator.h8Ml21G.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters', NULL, 'Cannot autowire service ".service_locator.h8Ml21G": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters" but no such service exists.'],
        ], [
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters',
        ]);
    }
}
