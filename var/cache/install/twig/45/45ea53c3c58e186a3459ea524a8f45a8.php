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

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_d50537923eb3c994634e7c0ac8021c71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

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
        echo "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, true, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, true, 5), "html", null, true))) : (print ("(none)")));
        echo "</span>
        <span class=\"label\">Matched route</span>
    </div>
</div>

";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, true, 10)) {
            // line 11
            echo "    <h3>Route Parameters</h3>

    ";
            // line 13
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, true, 13))) {
                // line 14
                echo "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 18
                echo "        ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, true, 18), "labels" => ["Name", "Value"]], false);
                echo "
    ";
            }
        }
        // line 21
        echo "
";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "redirect", [], "any", false, false, true, 22)) {
            // line 23
            echo "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "targetUrl", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, true, 28)) {
                echo "<span class=\"text-muted\">(route: \"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\")</span>";
            }
            // line 29
            echo "    </div>
";
        }
        // line 31
        echo "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "pathinfo", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["traces"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 49
            echo "        <tr class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, true, 49) == 1)) ? ("status-warning") : ((((twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, true, 49) == 2)) ? ("status-success") : (""))));
            echo "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "name", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "path", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</td>
            <td class=\"break-long-words font-normal\">
                ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, true, 54) == 1)) {
                // line 55
                echo "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "</span>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 57
$context["trace"], "level", [], "any", false, false, true, 57) == 2)) {
                // line 58
                echo "                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
                ";
            } else {
                // line 60
                echo "                    Path does not match
                ";
            }
            // line 62
            echo "            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Router/panel.html.twig";
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
        return array (  208 => 65,  192 => 62,  188 => 60,  182 => 58,  180 => 57,  176 => 56,  173 => 55,  171 => 54,  166 => 52,  162 => 51,  158 => 50,  153 => 49,  136 => 48,  120 => 35,  114 => 31,  110 => 29,  104 => 28,  100 => 27,  94 => 23,  92 => 22,  89 => 21,  82 => 18,  76 => 14,  74 => 13,  70 => 11,  68 => 10,  60 => 5,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Router/panel.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Router/panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 48);
        static $filters = array("escape" => 5);
        static $functions = array("include" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['include']
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
