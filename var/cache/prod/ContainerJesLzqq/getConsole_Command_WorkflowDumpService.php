<?php

namespace ContainerJesLzqq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_WorkflowDumpService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'console.command.workflow_dump' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/WorkflowDumpCommand.php';

        $container->privates['console.command.workflow_dump'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'order' => ['privates', 'state_machine.order', 'getStateMachine_OrderService', false],
        ], [
            'order' => 'Symfony\\Component\\Workflow\\StateMachine',
        ]));

        $instance->setName('workflow:dump');
        $instance->setDescription('Dump a workflow');

        return $instance;
    }
}
