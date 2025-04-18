<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingMultipleItemTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\ShippingMultipleItemType' shared autowired service.
     *
     * @return \Eccube\Form\Type\ShippingMultipleItemType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/ShippingMultipleItemType.php';

        return $container->privates['Eccube\\Form\\Type\\ShippingMultipleItemType'] = new \Eccube\Form\Type\ShippingMultipleItemType(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)), ($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)), ($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container)), ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $container->load('getPrefRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')));
    }
}
