<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxRuleServiceService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Service\TaxRuleService' shared autowired service.
     *
     * @return \Eccube\Service\TaxRuleService
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['Eccube\\Service\\TaxRuleService'] = $container->createProxy('TaxRuleServiceGhostE0f5b2e', static fn () => \TaxRuleServiceGhostE0f5b2e::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/TaxRuleService.php';

        return ($lazyLoad->__construct(($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? self::getTaxRuleRepositoryService($container)), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container))) && false ?: $lazyLoad);
    }
}
