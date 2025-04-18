<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExceptionListenerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\EventListener\ExceptionListener' shared autowired service.
     *
     * @return \Eccube\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/EventListener/ExceptionListener.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['Eccube\\EventListener\\ExceptionListener'])) {
            return $container->privates['Eccube\\EventListener\\ExceptionListener'];
        }

        return $container->privates['Eccube\\EventListener\\ExceptionListener'] = new \Eccube\EventListener\ExceptionListener($a, ($container->privates['Eccube\\Request\\Context'] ?? self::getContextService($container)));
    }
}
