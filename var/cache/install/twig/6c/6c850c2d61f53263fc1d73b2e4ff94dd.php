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

/* @WebProfiler/Profiler/_request_summary.html.twig */
class __TwigTemplate_33fa44a059446419e9017568b6d6e45c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_request_summary.html.twig"));

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
        $context["status_code"] = ((($context["request_collector"] ?? null)) ? (((twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, true, 1)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", false, false, true, 1), 1, $this->source), 0)) : (0))) : (0));
        // line 2
        $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
        // line 3
        echo "
";
        // line 4
        if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, true, 4))) {
            // line 5
            echo "    ";
            $context["redirect"] = twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, true, 5);
            // line 6
            echo "    ";
            $context["link_to_source_code"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, true, 6), "class", [], "any", true, true, true, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, true, 6), "file", [], "any", false, false, true, 6), 6, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, true, 6), "line", [], "any", false, false, true, 6), 6, $this->source))) : (""));
            // line 7
            echo "    ";
            $context["redirect_route_name"] = ("@" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "route", [], "any", false, false, true, 7), 7, $this->source));
            // line 8
            echo "
    <div class=\"status status-compact status-warning\">
        <span class=\"icon icon-redirect\">";
            // line 10
            echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
            echo "</span>

        <span class=\"status-response-status-code\">";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "status_code", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</span> redirect from

        <span class=\"status-request-method\">";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "method", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</span>

        ";
            // line 16
            if (($context["link_to_source_code"] ?? null)) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_to_source_code"] ?? null), 17, $this->source), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, true, 17), "file", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["redirect_route_name"] ?? null), 17, $this->source), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["redirect_route_name"] ?? null), 19, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "
        (<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, true, 22), "panel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, true, 22), "get", ["panel", "request"], "method", false, false, true, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</a>)
    </div>
";
        }
        // line 25
        echo "
<div class=\"status ";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_class"] ?? null), 26, $this->source), "html", null, true);
        echo "\">
    ";
        // line 27
        if ((($context["status_code"] ?? null) > 399)) {
            // line 28
            echo "        <p class=\"status-error-details\">
            <span class=\"icon\">";
            // line 29
            echo twig_source($this->env, "@WebProfiler/Icon/alert-circle.svg");
            echo "</span>
            <span class=\"status-response-status-code\">Error ";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_code"] ?? null), 30, $this->source), "html", null, true);
            echo "</span>
            <span class=\"status-response-status-text\">";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</span>
        </p>
    ";
        }
        // line 34
        echo "
    <h2>
        <span class=\"status-request-method\">
            ";
        // line 37
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
        echo "
        </span>

        ";
        // line 40
        $context["profile_title"] = (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, true, 40), 40, $this->source)) < 160)) ? (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, true, 40)) : ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, true, 40), 40, $this->source), 0, 160) . "…")));
        // line 41
        echo "        ";
        if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, true, 41)), ["GET", "HEAD"])) {
            // line 42
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_title"] ?? null), 42, $this->source), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_title"] ?? null), 44, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 46
        echo "    </h2>

    <dl class=\"metadata\">
        ";
        // line 49
        if ((($context["status_code"] ?? null) < 400)) {
            // line 50
            echo "            <dt>Response</dt>
            <dd>
                <span class=\"status-response-status-code\">";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_code"] ?? null), 52, $this->source), "html", null, true);
            echo "</span>
                <span class=\"status-response-status-text\">";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "</span>
            </dd>
        ";
        }
        // line 56
        echo "
        ";
        // line 57
        $context["referer"] = ((($context["request_collector"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestheaders", [], "any", false, false, true, 57), "get", ["referer"], "method", false, false, true, 57)) : (null));
        // line 58
        echo "        ";
        if (($context["referer"] ?? null)) {
            // line 59
            echo "            <dt></dt>
            <dd>
                <span class=\"icon icon-referer\">";
            // line 61
            echo twig_source($this->env, "@WebProfiler/Icon/referrer.svg");
            echo "</span>
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["referer"] ?? null), 62, $this->source), "html", null, true);
            echo "\" class=\"referer\">Browse referrer URL</a>
            </dd>
        ";
        }
        // line 65
        echo "
        <dt>IP</dt>
        <dd>
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, true, 68)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "</a>
        </dd>

        <dt>Profiled on</dt>
        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, true, 72), 72, $this->source), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, true, 72), 72, $this->source), "r"), "html", null, true);
        echo "</time></dd>

        <dt>Token</dt>
        <dd>";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</dd>
    </dl>
</div>

";
        // line 79
        if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, true, 79))) {
            // line 80
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, true, 80)], "method", false, false, true, 80);
            // line 81
            echo "    ";
            $context["controller"] = ((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", ["request"], "method", false, false, true, 81), "controller", [], "any", false, false, true, 81)) : ("n/a"));
            // line 82
            echo "    <div class=\"status status-compact status-compact-forward\">
        <span class=\"icon icon-forward\">";
            // line 83
            echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
            echo "</span>

        Forwarded to

        ";
            // line 87
            $context["link"] = ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, true, 87)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, true, 87), 87, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, true, 87), 87, $this->source))) : (null));
            // line 88
            if (($context["link"] ?? null)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 88, $this->source), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "\">";
            }
            // line 89
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, true, 89)) {
                // line 90
                echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, true, 90), 90, $this->source), "html", null, true))), "html", null, true);
                // line 91
                ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, true, 91)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, true, 91)), "html", null, true))) : (print ("")));
            } else {
                // line 93
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["controller"] ?? null), 93, $this->source), "html", null, true);
            }
            // line 95
            if (($context["link"] ?? null)) {
                echo "</a>";
            }
            // line 96
            echo "        (<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, true, 96)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "</a>)

    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/_request_summary.html.twig";
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
        return array (  289 => 96,  285 => 95,  282 => 93,  279 => 91,  277 => 90,  275 => 89,  267 => 88,  265 => 87,  258 => 83,  255 => 82,  252 => 81,  250 => 80,  248 => 79,  241 => 75,  233 => 72,  224 => 68,  219 => 65,  213 => 62,  209 => 61,  205 => 59,  202 => 58,  200 => 57,  197 => 56,  191 => 53,  187 => 52,  183 => 50,  181 => 49,  176 => 46,  170 => 44,  162 => 42,  159 => 41,  157 => 40,  151 => 37,  146 => 34,  140 => 31,  136 => 30,  132 => 29,  129 => 28,  127 => 27,  123 => 26,  120 => 25,  112 => 22,  109 => 21,  103 => 19,  93 => 17,  91 => 16,  86 => 14,  81 => 12,  76 => 10,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  61 => 4,  58 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/_request_summary.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/_request_summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 4);
        static $filters = array("default" => 1, "file_link" => 6, "escape" => 12, "upper" => 37, "length" => 40, "slice" => 40, "date" => 72, "striptags" => 90, "abbr_class" => 90);
        static $functions = array("source" => 10, "path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'file_link', 'escape', 'upper', 'length', 'slice', 'date', 'striptags', 'abbr_class'],
                ['source', 'path']
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
