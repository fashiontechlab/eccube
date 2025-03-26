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

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_b5d35fb616d6177d3253dbadfa893cc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'panelContent' => [$this, 'block_panelContent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #timeline-control {
            background: var(--table-background);
            box-shadow: var(--shadow);
            margin: 1em 0;
            padding: 10px;
        }
        #timeline-control label {
            font-weight: bold;
            margin-right: 1em;
        }
        #timeline-control input {
            background: var(--metric-value-background);
            font-size: 16px;
            padding: 4px;
            text-align: right;
            width: 5em;
        }
        #timeline-control .help {
            margin-left: 1em;
        }

        .sf-profiler-timeline .legends {
            font-size: 12px;
            line-height: 1.5em;
        }
        .sf-profiler-timeline .legends button {
            color: var(--color-text);
        }
        .sf-profiler-timeline + p.help {
            margin-top: 0;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 42
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 42), 42, $this->source)) > 0);
        // line 43
        echo "    ";
        $context["total_time"] = ((($context["has_time_events"] ?? null)) ? (twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, true, 43), 43, $this->source))) : ("n/a"));
        // line 44
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 44), 44, $this->source))) ? (twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, true, 44), 44, $this->source))) : ("n/a"));
        // line 45
        echo "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, true, 45) > 1000))) ? ("yellow") : (""));
        // line 46
        echo "
    ";
        // line 47
        ob_start(function () { return ''; });
        // line 48
        echo "        ";
        echo twig_source($this->env, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_time"] ?? null), 49, $this->source), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        ob_start(function () { return ''; });
        // line 54
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_time"] ?? null), 56, $this->source), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["initialization_time"] ?? null), 60, $this->source), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "
    ";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 69
        echo twig_source($this->env, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 75
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 75), 75, $this->source)) > 0);
        // line 76
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 81
        echo twig_escape_filter($this->env, twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, true, 81), 81, $this->source)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total execution time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 86
        echo twig_escape_filter($this->env, twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, true, 86), 86, $this->source)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Symfony initialization</span>
            </div>
        </div>

        ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, true, 91), "memory", [], "any", false, false, true, 91)) {
            // line 92
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 95
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, true, 95), "memory", [], "any", false, false, true, 95), "memory", [], "any", false, false, true, 95) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 100)) > 0)) {
            // line 101
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 105
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 105), 105, $this->source)), "html", null, true);
            echo "</span>
                    <span class=\"label\">Sub-";
            // line 106
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 106, $this->source)), "html", null, true);
            echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 106), 106, $this->source)) > 1)) ? ("s") : (""));
            echo "</span>
                </div>

                ";
            // line 109
            $context["subrequests_time"] = ((($context["has_time_events"] ?? null)) ? (twig_array_reduce($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 110
($context["profile"] ?? null), "children", [], "any", false, false, true, 110), 110, $this->source), function ($__total__, $__child__) use ($context, $macros) { $context["total"] = $__total__; $context["child"] = $__child__; return (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "getcollector", ["time"], "method", false, false, true, 110), "events", [], "any", false, false, true, 110), "__section__", [], "any", false, false, true, 110), "duration", [], "any", false, false, true, 110)); }, 0)) : ("n/a"));
            // line 112
            echo "
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 114
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subrequests_time"] ?? null), 114, $this->source), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Sub-";
            // line 115
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 115, $this->source)), "html", null, true);
            echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 115), 115, $this->source)) > 1)) ? ("s") : (""));
            echo " time</span>
                </div>
            </div>
        ";
        }
        // line 119
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 123
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isStopwatchInstalled", [], "method", false, false, true, 123)) {
            // line 124
            echo "        <div class=\"empty empty-panel\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 127
($context["collector"] ?? null), "events", [], "any", false, false, true, 127))) {
            // line 128
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 132
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 136
    public function block_panelContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        // line 137
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 144)) {
            // line 145
            echo "        <h3 class=\"dump-inline\">
            Sub-";
            // line 146
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 146, $this->source)), "html", null, true);
            echo " ";
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", ["request"], "method", false, false, true, 146), "requestattributes", [], "any", false, false, true, 146), "get", ["_controller"], "method", false, false, true, 146), 146, $this->source));
            echo "
            <small>
                ";
            // line 148
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 148), "__section__", [], "any", false, false, true, 148), "duration", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 149), "token", [], "any", false, false, true, 149), "panel" => "time"]), "html", null, true);
            echo "\">Return to parent ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 149, $this->source), "html", null, true);
            echo "</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 152
($context["profile"] ?? null), "children", [], "any", false, false, true, 152)) > 0)) {
            // line 153
            echo "        <h3>
            Main ";
            // line 154
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 154, $this->source)), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 154), "__section__", [], "any", false, false, true, 154), "duration", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 157
        echo "
    ";
        // line 158
        echo twig_call_macro($macros["_self"], "macro_display_timeline", [($context["token"] ?? null), twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 158), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 158), "__section__", [], "any", false, false, true, 158), "origin", [], "any", false, false, true, 158)], 158, $context, $this->getSourceContext());
        echo "

    ";
        // line 160
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 160))) {
            // line 161
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 161, $this->source), "html", null, true);
            echo "s.</p>

        <h3>Sub-";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 163, $this->source), "html", null, true);
            echo "s <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 163), 163, $this->source)), "html", null, true);
            echo ")</small></h3>

        ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 165));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 166
                echo "            ";
                $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", ["time"], "method", false, false, true, 166), "events", [], "any", false, false, true, 166);
                // line 167
                echo "            <h4>
                <a href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 168), "panel" => "time"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, true, 168), "identifier", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                echo "</a>
                <small>";
                // line 169
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, true, 169), "duration", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 172
                echo twig_call_macro($macros["_self"], "macro_display_timeline", [twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 172), ($context["events"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 172), "__section__", [], "any", false, false, true, 172), "origin", [], "any", false, false, true, 172)], 172, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "    ";
        }
        // line 175
        echo "
<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style>
";
        // line 184
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Collector/time.css.twig");
        echo "
</style>
<script>
";
        // line 187
        echo twig_source($this->env, "@WebProfiler/Collector/time.js");
        echo "
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 191
    public function macro_dump_request_data($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 193
            echo "{
    id: \"";
            // line 194
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 194, $this->source), "js", null, true);
            echo "\",
    left: ";
            // line 195
            echo twig_escape_filter($this->env, twig_sprintf("%F", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, true, 195), "origin", [], "any", false, false, true, 195) - ($context["origin"] ?? null))), "js", null, true);
            echo ",
    end: \"";
            // line 196
            echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, true, 196), "endtime", [], "any", false, false, true, 196), 196, $this->source)), "js", null, true);
            echo "\",
    events: [ ";
            // line 197
            echo twig_call_macro($macros["_self"], "macro_dump_events", [($context["events"] ?? null)], 197, $context, $this->getSourceContext());
            echo " ],
}
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 202
    public function macro_dump_events($__events__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "events" => $__events__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 205
                if (("__section__" != $context["name"])) {
                    // line 206
                    echo "{
    name: \"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 207, $this->source), "js", null, true);
                    echo "\",
    category: \"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "category", [], "any", false, false, true, 208), 208, $this->source), "js", null, true);
                    echo "\",
    origin: ";
                    // line 209
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "origin", [], "any", false, false, true, 209), 209, $this->source)), "js", null, true);
                    echo ",
    starttime: ";
                    // line 210
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "starttime", [], "any", false, false, true, 210), 210, $this->source)), "js", null, true);
                    echo ",
    endtime: ";
                    // line 211
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "endtime", [], "any", false, false, true, 211), 211, $this->source)), "js", null, true);
                    echo ",
    duration: ";
                    // line 212
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, true, 212), 212, $this->source)), "js", null, true);
                    echo ",
    memory: ";
                    // line 213
                    echo twig_escape_filter($this->env, twig_sprintf("%.1F", ((twig_get_attribute($this->env, $this->source, $context["event"], "memory", [], "any", false, false, true, 213) / 1024) / 1024)), "js", null, true);
                    echo ",
    elements: {},
    periods: [";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "periods", [], "any", false, false, true, 216));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 217
                        echo "{
            start: ";
                        // line 218
                        echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["period"], "starttime", [], "any", false, false, true, 218), 218, $this->source)), "js", null, true);
                        echo ",
            end: ";
                        // line 219
                        echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["period"], "endtime", [], "any", false, false, true, 219), 219, $this->source)), "js", null, true);
                        echo ",
            duration: ";
                        // line 220
                        echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["period"], "duration", [], "any", false, false, true, 220), 220, $this->source)), "js", null, true);
                        echo ",
            elements: {}
        },";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "],
},
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 231
    public function macro_display_timeline($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 232
            echo "    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-";
            // line 233
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 233, $this->source), "html", null, true);
            echo "\" class=\"legends\"></div>
        <svg id=\"timeline-";
            // line 234
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 234, $this->source), "html", null, true);
            echo "\" class=\"timeline-graph\"></svg>
        <script>";
            // line 236
            echo "            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-";
            // line 241
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 241, $this->source), "js", null, true);
            echo "')),
                    new Legend(document.getElementById('legend-";
            // line 242
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 242, $this->source), "js", null, true);
            echo "'), theme),
                    document.getElementById('threshold'),
                    ";
            // line 244
            echo twig_call_macro($macros["_self"], "macro_dump_request_data", [($context["token"] ?? null), ($context["events"] ?? null), ($context["origin"] ?? null)], 244, $context, $this->getSourceContext());
            echo "
                );
            });
        ";
            // line 247
            echo "</script>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
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
        return array (  664 => 247,  658 => 244,  653 => 242,  649 => 241,  642 => 236,  638 => 234,  634 => 233,  631 => 232,  613 => 231,  594 => 224,  585 => 220,  581 => 219,  577 => 218,  574 => 217,  570 => 216,  565 => 213,  561 => 212,  557 => 211,  553 => 210,  549 => 209,  545 => 208,  541 => 207,  538 => 206,  536 => 205,  532 => 204,  516 => 202,  501 => 197,  497 => 196,  493 => 195,  489 => 194,  486 => 193,  468 => 191,  458 => 187,  452 => 184,  441 => 175,  438 => 174,  430 => 172,  424 => 169,  418 => 168,  415 => 167,  412 => 166,  408 => 165,  401 => 163,  395 => 161,  393 => 160,  388 => 158,  385 => 157,  377 => 154,  374 => 153,  372 => 152,  364 => 149,  360 => 148,  353 => 146,  350 => 145,  348 => 144,  339 => 137,  332 => 136,  321 => 132,  315 => 128,  313 => 127,  308 => 124,  306 => 123,  300 => 119,  292 => 115,  288 => 114,  284 => 112,  282 => 110,  281 => 109,  274 => 106,  270 => 105,  264 => 101,  262 => 100,  259 => 99,  252 => 95,  247 => 92,  245 => 91,  237 => 86,  229 => 81,  222 => 76,  219 => 75,  212 => 74,  201 => 69,  198 => 68,  191 => 67,  182 => 64,  179 => 63,  173 => 60,  166 => 56,  162 => 54,  160 => 53,  157 => 52,  151 => 49,  146 => 48,  144 => 47,  141 => 46,  138 => 45,  135 => 44,  132 => 43,  129 => 42,  122 => 41,  78 => 4,  71 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/time.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/time.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 91, "for" => 165, "macro" => 191, "autoescape" => 192);
        static $filters = array("length" => 42, "format" => 43, "escape" => 49, "title" => 106, "reduce" => 110);
        static $functions = array("source" => 48, "include" => 64, "profiler_dump" => 146, "path" => 149);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'macro', 'autoescape', 'import'],
                ['length', 'format', 'escape', 'title', 'reduce'],
                ['source', 'include', 'profiler_dump', 'path']
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
