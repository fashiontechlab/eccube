<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLimiter_LoginGlobalAdminService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'limiter._login_global_admin' shared service.
     *
     * @return \Symfony\Component\RateLimiter\RateLimiterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/RateLimiterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/StorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/CacheStorage.php';

        return $container->privates['limiter._login_global_admin'] = new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 25, 'interval' => '30 minutes', 'id' => '_login_global_admin'], new \Symfony\Component\RateLimiter\Storage\CacheStorage(($container->services['cache.rate_limiter'] ?? $container->load('getCache_RateLimiterService'))), NULL);
    }
}
