<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductReviewRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\ProductReview42\Repository\ProductReviewRepository' shared autowired service.
     *
     * @return \Plugin\ProductReview42\Repository\ProductReviewRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/ProductReview42/Repository/ProductReviewRepository.php';

        return $container->privates['Plugin\\ProductReview42\\Repository\\ProductReviewRepository'] = new \Plugin\ProductReview42\Repository\ProductReviewRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
