<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Command_DeleteClientService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'league.oauth2_server.command.delete_client' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Command\DeleteClientCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server-bundle/src/Command/DeleteClientCommand.php';

        $container->privates['league.oauth2_server.command.delete_client'] = $instance = new \League\Bundle\OAuth2ServerBundle\Command\DeleteClientCommand(($container->privates['league.oauth2_server.manager.doctrine.client'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_ClientService')));

        $instance->setName('league:oauth2-server:delete-client');
        $instance->setDescription('Deletes an OAuth2 client');

        return $instance;
    }
}
