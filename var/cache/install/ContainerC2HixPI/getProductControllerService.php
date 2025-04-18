<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Product\ProductController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Product\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductController.php';

        $container->services['Eccube\\Controller\\Admin\\Product\\ProductController'] = $instance = new \Eccube\Controller\Admin\Product\ProductController(($container->privates['Eccube\\Service\\CsvExportService'] ?? $container->load('getCsvExportServiceService')), ($container->privates['Eccube\\Repository\\ProductClassRepository'] ?? self::getProductClassRepositoryService($container)), ($container->privates['Eccube\\Repository\\ProductImageRepository'] ?? $container->load('getProductImageRepositoryService')), ($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? self::getTaxRuleRepositoryService($container)), ($container->privates['Eccube\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? self::getProductRepositoryService($container)), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container)), ($container->privates['Eccube\\Repository\\Master\\PageMaxRepository'] ?? $container->load('getPageMaxRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\ProductStatusRepository'] ?? $container->load('getProductStatusRepositoryService')), ($container->privates['Eccube\\Repository\\TagRepository'] ?? $container->load('getTagRepositoryService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.mjcLOvh'] ?? $container->load('get_ServiceLocator_MjcLOvhService'))->withContext('Eccube\\Controller\\Admin\\Product\\ProductController', $container));

        return $instance;
    }
}
