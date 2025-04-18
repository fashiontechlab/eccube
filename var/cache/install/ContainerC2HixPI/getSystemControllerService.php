<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSystemControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Setting\System\SystemController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Setting\System\SystemController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/SystemController.php';

        return $container->services['Eccube\\Controller\\Admin\\Setting\\System\\SystemController'] = new \Eccube\Controller\Admin\Setting\System\SystemController(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)), ($container->services['Eccube\\Service\\SystemService'] ?? $container->load('getSystemServiceService')));
    }
}
