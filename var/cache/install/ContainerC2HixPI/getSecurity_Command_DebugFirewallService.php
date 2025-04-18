<?php

namespace ContainerC2HixPI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.YP.F1Xa'] ?? self::get_ServiceLocator_YP_F1XaService($container)), ($container->privates['.service_locator.sQ6iP0V'] ?? $container->load('get_ServiceLocator_SQ6iP0VService')), ['api' => [($container->privates['security.authenticator.oauth2.api'] ?? $container->load('getSecurity_Authenticator_Oauth2_ApiService'))], 'admin' => [($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService'))], 'customer' => [($container->privates['security.authenticator.form_login.customer'] ?? $container->load('getSecurity_Authenticator_FormLogin_CustomerService')), ($container->privates['security.authenticator.remember_me.customer'] ?? $container->load('getSecurity_Authenticator_RememberMe_CustomerService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
