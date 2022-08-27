<?php

namespace ContainerUcYchce;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xe60xz3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Xe60xz3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Xe60xz3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'documentManager' => ['services', 'doctrine_mongodb.odm.default_document_manager', 'getDoctrineMongodb_Odm_DefaultDocumentManagerService', true],
            'order' => ['privates', 'App\\Document\\Order', 'getOrderService', true],
        ], [
            'documentManager' => '?',
            'order' => 'App\\Document\\Order',
        ]);
    }
}
