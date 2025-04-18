<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_League_Oauth2Server_Command_CreateClient_LazyService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.league.oauth2_server.command.create_client.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.league.oauth2_server.command.create_client.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('league:oauth2-server:create-client', [], 'Creates a new OAuth2 client', false, #[\Closure(name: 'league.oauth2_server.command.create_client', class: 'League\\Bundle\\OAuth2ServerBundle\\Command\\CreateClientCommand')] fn (): \League\Bundle\OAuth2ServerBundle\Command\CreateClientCommand => ($container->privates['league.oauth2_server.command.create_client'] ?? $container->load('getLeague_Oauth2Server_Command_CreateClientService')));
    }
}
