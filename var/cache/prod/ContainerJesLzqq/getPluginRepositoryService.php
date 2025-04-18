<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Repository\PluginRepository' shared autowired service.
     *
     * @return \Eccube\Repository\PluginRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['Eccube\\Repository\\PluginRepository'] = $container->createProxy('PluginRepositoryGhostD6a6052', static fn () => \PluginRepositoryGhostD6a6052::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';

        return ($lazyLoad->__construct(($container->services['doctrine'] ?? self::getDoctrineService($container))) && false ?: $lazyLoad);
    }
}
