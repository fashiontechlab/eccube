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

/* @email/zurb_2/notification/body.txt.twig */
class __TwigTemplate_73ff363c26f34f9542cce4a5c3951f31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
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
        $this->displayBlock('lead', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('action', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('exception', $context, $blocks);
    }

    // line 1
    public function block_lead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, true, 2), 2, $this->source);
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 6, $this->source);
        echo "
";
    }

    // line 9
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (($context["action_url"] ?? null)) {
            // line 11
            echo $this->sandbox->ensureToStringAllowed(($context["action_text"] ?? null), 11, $this->source);
            echo ": ";
            echo $this->sandbox->ensureToStringAllowed(($context["action_url"] ?? null), 11, $this->source);
            echo "
";
        }
    }

    // line 15
    public function block_exception($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        if (($context["exception"] ?? null)) {
            // line 17
            echo "Exception stack trace attached.
";
            // line 18
            echo $this->sandbox->ensureToStringAllowed(($context["exception"] ?? null), 18, $this->source);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@email/zurb_2/notification/body.txt.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  118 => 18,  115 => 17,  113 => 16,  109 => 15,  100 => 11,  98 => 10,  94 => 9,  88 => 6,  84 => 5,  78 => 2,  74 => 1,  70 => 15,  67 => 14,  65 => 9,  62 => 8,  60 => 5,  57 => 4,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/zurb_2/notification/body.txt.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/symfony/twig-bridge/Resources/views/Email/zurb_2/notification/body.txt.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "if" => 10);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
