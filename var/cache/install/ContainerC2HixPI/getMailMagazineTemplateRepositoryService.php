<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailMagazineTemplateRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\MailMagazine42\Repository\MailMagazineTemplateRepository' shared autowired service.
     *
     * @return \Plugin\MailMagazine42\Repository\MailMagazineTemplateRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/MailMagazine42/Repository/MailMagazineTemplateRepository.php';

        return $container->privates['Plugin\\MailMagazine42\\Repository\\MailMagazineTemplateRepository'] = new \Plugin\MailMagazine42\Repository\MailMagazineTemplateRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
