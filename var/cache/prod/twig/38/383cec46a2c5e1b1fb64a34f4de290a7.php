<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Api42/Controller/Admin/WebHookController.php */
class __TwigTemplate_02d6c96b61dcb7573c85c8e874609844 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__eccube__gblobal = $this->env->getGlobals();
        $__eccube__eventDispatcher = $__eccube__gblobal['event_dispatcher'];
        $__eccube__source = $this->env->getLoader()->getSourceContext($this->getTemplateName())->getCode();
        $__eccube__event = new \Eccube\Event\TemplateEvent($this->getTemplateName(), $__eccube__source, $context);
        $__eccube__eventDispatcher->dispatch($__eccube__event, $this->getTemplateName());
        $context = $__eccube__event->getParameters();
        if ($__eccube__event->getSource() !== $__eccube__source) {
            $__eccube__newTemplate = $this->env->createTemplate($__eccube__event->getSource());
            $__eccube__newTemplate->display($__eccube__event->getParameters());
            return;
        }

        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Api42\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Exception;
use Plugin\\Api42\\Entity\\WebHook;
use Plugin\\Api42\\Form\\Type\\Admin\\WebHookType;
use Plugin\\Api42\\Repository\\WebHookRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class WebHookController extends AbstractController
{
    /**
     * @var WebHookRepository
     */
    private \$webHookRepository;

    /**
     * WebHookController constructor.
     * @param WebHookRepository \$webHookRepository
     */
    public function __construct(WebHookRepository \$webHookRepository)
    {
        \$this->webHookRepository = \$webHookRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/api/webhook\", name=\"admin_api_webhook\", methods={\"GET\"})
     * @Template(\"@Api42/admin/WebHook/index.twig\")
     */
    public function index()
    {
        \$WebHooks = \$this->webHookRepository->findAll();

        return [
            'webhooks' => \$WebHooks,
        ];
    }

    /**
     * @Route(\"/%eccube_admin_route%/api/webhook/new\", name=\"admin_api_webhook_new\", methods={\"GET\", \"POST\"})
     * @Route(\"/%eccube_admin_route%/api/webhook/edit/{id}\", requirements={\"id\" = \"\\d+\"}, name=\"admin_api_webhook_edit\", methods={\"GET\", \"POST\"})
     * @Template(\"@Api42/admin/WebHook/edit.twig\")
     *
     * @param Request \$request
     * @param WebHook|null \$WebHook
     * @return array
     */
    public function edit(Request \$request, WebHook \$WebHook = null)
    {
        \$WebHook = \$WebHook ?: new WebHook();
        \$builder = \$this->formFactory->createBuilder(WebHookType::class, \$WebHook);
        \$form = \$builder->getForm();

        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$this->webHookRepository->save(\$WebHook);
            \$this->entityManager->flush();

            \$this->addSuccess('admin.common.save_complete', 'admin');

            return \$this->redirectToRoute('admin_api_webhook_edit', ['id' => \$WebHook->getId()]);
        }

        return [
            'form' => \$form->createView(),
        ];
    }

    /**
     * @Route(\"/%eccube_admin_route%/api/webhook/delete/{id}\", requirements={\"id\" = \"\\d+\"}, name=\"admin_api_webhook_delete\", methods={\"DELETE\"})
     *
     * @param WebHook \$WebHook
     * @return RedirectResponse
     */
    public function delete(WebHook \$WebHook)
    {
        \$this->isTokenValid();

        try {
            \$this->webHookRepository->delete(\$WebHook);
            \$this->entityManager->flush();
            \$this->addSuccess('admin.common.delete_complete', 'admin');
        } catch (Exception \$e) {
            \$this->addError('admin.common.delete_error', 'admin');
            log_error('WebHook削除エラー', [\$WebHook->getId(), \$e]);
        }

        return \$this->redirectToRoute('admin_api_webhook');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Controller/Admin/WebHookController.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Controller/Admin/WebHookController.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/Controller/Admin/WebHookController.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
