<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhoneNumberTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\PhoneNumberType' shared autowired service.
     *
     * @return \Eccube\Form\Type\PhoneNumberType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/PhoneNumberType.php';

        return $container->privates['Eccube\\Form\\Type\\PhoneNumberType'] = new \Eccube\Form\Type\PhoneNumberType(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
    }
}
