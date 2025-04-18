<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_TemplateCacheWarmerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/TemplateIterator.php';

        return $container->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'twig' => ['privates', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $container), new \Symfony\Bundle\TwigBundle\TemplateIterator(($container->services['kernel'] ?? $container->get('kernel', 1)), [(\dirname(__DIR__, 4).'/app/template/'.$container->getEnv('string:ECCUBE_TEMPLATE_CODE')) => NULL, (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default') => NULL, (\dirname(__DIR__, 4).'/app/Plugin') => NULL, (\dirname(__DIR__, 4).'/app/template/admin') => 'admin', (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin') => 'admin', (\dirname(__DIR__, 4).'/app/template/user_data') => 'user_data', (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/toolbar') => 'toolbar', (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/common') => 'common', (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/install') => NULL, (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates'), []));
    }
}
