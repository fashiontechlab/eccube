<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Purchase_Flow_Item_Holder_Preprocessor_Tax_Processor_BeforeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'eccube.purchase.flow.item.holder.preprocessor.tax.processor.before' shared service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\TaxProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPreprocessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/TaxProcessor.php';

        return $container->privates['eccube.purchase.flow.item.holder.preprocessor.tax.processor.before'] = new \Eccube\Service\PurchaseFlow\Processor\TaxProcessor(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? self::getTaxRuleRepositoryService($container)), ($container->services['Eccube\\Service\\TaxRuleService'] ?? $container->load('getTaxRuleServiceService')), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')));
    }
}
