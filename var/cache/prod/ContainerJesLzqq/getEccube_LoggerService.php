<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_LoggerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'eccube.logger' shared autowired service.
     *
     * @return \Eccube\Log\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['eccube.logger'] = $container->createProxy('LoggerGhostC30bf98', static fn () => \LoggerGhostC30bf98::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Log/Logger.php';

        return ($lazyLoad->__construct(($container->privates['Eccube\\Request\\Context'] ?? self::getContextService($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['monolog.logger.front'] ?? $container->load('getMonolog_Logger_FrontService')), ($container->services['monolog.logger.admin'] ?? $container->load('getMonolog_Logger_AdminService'))) && false ?: $lazyLoad);
    }
}
