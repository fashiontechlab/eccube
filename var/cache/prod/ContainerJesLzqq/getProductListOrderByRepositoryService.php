<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductListOrderByRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\ProductListOrderByRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\ProductListOrderByRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/ProductListOrderByRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\ProductListOrderByRepository'] = new \Eccube\Repository\Master\ProductListOrderByRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
