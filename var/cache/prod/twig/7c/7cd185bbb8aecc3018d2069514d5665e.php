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

/* Api42/Controller/ApiController.php */
class __TwigTemplate_bc536cac6d6acd7d3956a3e2f866bcc2 extends Template
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

namespace Plugin\\Api42\\Controller;

use Eccube\\Controller\\AbstractController;
use GraphQL\\Error\\DebugFlag;
use GraphQL\\GraphQL;
use GraphQL\\Validator\\DocumentValidator;
use Plugin\\Api42\\GraphQL\\Schema;
use Plugin\\Api42\\GraphQL\\ScopeValidationRule;
use Plugin\\Api42\\GraphQL\\Types;
use RuntimeException;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\IsGranted;

class ApiController extends AbstractController
{
    /**
     * @var Types
     */
    private \$types;

    /**
     * @var KernelInterface
     */
    private \$kernel;

    /**
     * @var Schema
     */
    private \$schema;

    /**
     * @var ScopeValidationRule
     */
    private \$scopeValidationRule;

    public function __construct(
        Types \$types,
        KernelInterface \$kernel,
        Schema \$schema,
        ScopeValidationRule \$scopeValidationRule
    ) {
        \$this->types = \$types;
        \$this->kernel = \$kernel;
        \$this->schema = \$schema;
        \$this->scopeValidationRule = \$scopeValidationRule;
    }

    /**
     * @Route(\"/api\", name=\"api\", methods={\"GET\", \"POST\"})
     * @IsGranted(\"ROLE_OAUTH2_READ\", \"ROLE_OAUTH2_WRITE\")
     */

    public function index(Request \$request)
    {
        switch (\$request->getMethod()) {
            case 'GET':
                \$query = \$request->get('query');
                \$variableValues = json_decode(\$request->get('variables'), true);
                break;
            case 'POST':
                \$body = json_decode(\$request->getContent(), true);
                \$query = \$body['query'];
                \$variableValues = isset(\$body['variables']) ? \$body['variables'] : null;
                break;
            default:
                throw new RuntimeException();
        }

        DocumentValidator::addRule(\$this->scopeValidationRule);
        \$result = GraphQL::executeQuery(\$this->schema, \$query, null, null, \$variableValues);

        if (\$this->kernel->isDebug()) {
            \$debug = DebugFlag::INCLUDE_DEBUG_MESSAGE | DebugFlag::INCLUDE_TRACE;
            \$result = \$result->toArray(\$debug);
        }

        return \$this->json(\$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Controller/ApiController.php";
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
        return new Source("", "Api42/Controller/ApiController.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/Controller/ApiController.php");
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
