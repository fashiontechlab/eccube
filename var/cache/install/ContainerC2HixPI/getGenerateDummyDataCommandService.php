<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateDummyDataCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\GenerateDummyDataCommand' shared autowired service.
     *
     * @return \Eccube\Command\GenerateDummyDataCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/GenerateDummyDataCommand.php';

        $container->privates['Eccube\\Command\\GenerateDummyDataCommand'] = $instance = new \Eccube\Command\GenerateDummyDataCommand(NULL, ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? self::getProductRepositoryService($container)));

        $instance->setName('eccube:fixtures:generate');

        return $instance;
    }
}
