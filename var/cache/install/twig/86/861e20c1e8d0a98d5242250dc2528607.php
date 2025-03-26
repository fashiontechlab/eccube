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

/* @WebProfiler/Profiler/_command_summary.html.twig */
class __TwigTemplate_8773ef7c181d3b77002d4278e7a12dbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_command_summary.html.twig"));

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
        $context["status_code"] = ((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", true, true, true, 1)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", false, false, true, 1), 1, $this->source), 0)) : (0));
        // line 2
        $context["interrupted"] = (((($context["command_collector"] ?? null) === false)) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["command_collector"] ?? null), "interruptedBySignal", [], "any", false, false, true, 2)));
        // line 3
        $context["css_class"] = ((((($context["status_code"] ?? null) == 113) ||  !(null === ($context["interrupted"] ?? null)))) ? ("status-warning") : ((((($context["status_code"] ?? null) > 0)) ? ("status-error") : ("status-success"))));
        // line 4
        echo "
<div class=\"terminal status ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_class"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">
        <h2>
            <span class=\"status-request-method\">
                ";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
        echo "
            </span>

            <span class=\"status-command\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
            </span>
        </h2>

        <dl class=\"metadata\">
            ";
        // line 18
        if (($context["interrupted"] ?? null)) {
            // line 19
            echo "                <span class=\"status-response-status-code\">Interrupted</span>
                <dt>Signal</dt>
                <dd class=\"status-response-status-text\">";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["interrupted"] ?? null), 21, $this->source), "html", null, true);
            echo "</dd>

                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\">";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_code"] ?? null), 24, $this->source), "html", null, true);
            echo "</dd>
            ";
        } elseif ((        // line 25
($context["status_code"] ?? null) == 0)) {
            // line 26
            echo "                <span class=\"status-response-status-code\">Success</span>
            ";
        } elseif ((        // line 27
($context["status_code"] ?? null) > 0)) {
            // line 28
            echo "                <span class=\"status-response-status-code\">Error</span>
                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\"><span class=\"status-response-status-code\">";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_code"] ?? null), 30, $this->source), "html", null, true);
            echo "</span></dd>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, true, 33), "has", ["SYMFONY_CLI_BINARY_NAME"], "method", false, false, true, 33)) {
            // line 34
            echo "                <dt>Symfony CLI</dt>
                <dd>v";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, true, 35), "get", ["SYMFONY_CLI_VERSION"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</dd>
            ";
        }
        // line 37
        echo "
            <dt>Application</dt>
            <dd>
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, true, 40), "type" => "command"]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "</a>
            </dd>

            <dt>Profiled on</dt>
            <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, true, 44), 44, $this->source), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, true, 44), 44, $this->source), "r"), "html", null, true);
        echo "</time></dd>

            <dt>Token</dt>
            <dd>";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</dd>
        </dl>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/_command_summary.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  152 => 47,  144 => 44,  135 => 40,  130 => 37,  125 => 35,  122 => 34,  120 => 33,  117 => 32,  112 => 30,  108 => 28,  106 => 27,  103 => 26,  101 => 25,  97 => 24,  91 => 21,  87 => 19,  85 => 18,  77 => 13,  70 => 9,  63 => 5,  60 => 4,  58 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/_command_summary.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/_command_summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 18);
        static $filters = array("default" => 1, "escape" => 5, "upper" => 9, "date" => 44);
        static $functions = array("path" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape', 'upper', 'date'],
                ['path']
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
