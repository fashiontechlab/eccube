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

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_8ee7fe8d1b7667e0bc09c33413d45f4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
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
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none; color: inherit; }
        .message-item .icon svg { height: 24px; width: 24px; }
        .message-item .icon-close svg { transform: rotate(180deg); }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }

        #collector-content .message-bus .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .message-bus .trace {
            font-size: 12px;
        }
        #collector-content .message-bus .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .message-bus .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 43
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 43)) > 0)) {
            // line 44
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, true, 44)) ? ("red") : (""));
            // line 45
            echo "        ";
            ob_start(function () { return ''; });
            // line 46
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/messenger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 47
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "
        ";
            // line 50
            ob_start(function () { return ''; });
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, true, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 52
                echo "                ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, true, 52);
                // line 53
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 54
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["bus"], 54, $this->source), "html", null, true);
                echo "</b>
                    <span
                        title=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["exceptionsCount"] ?? null), 56, $this->source), "html", null, true);
                echo " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                // line 57
                echo ((($context["exceptionsCount"] ?? null)) ? ("red") : (""));
                echo "\"
                    >
                        ";
                // line 59
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, true, 59), 59, $this->source)), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            echo "
        ";
            // line 65
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 70
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, true, 70)) ? (" label-status-error") : (""));
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 70))) ? (" disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 71
        echo twig_source($this->env, "@WebProfiler/Icon/messenger.svg");
        echo "</span>
        <strong>Messages</strong>
        ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, true, 73) > 0)) {
            // line 74
            echo "            <span class=\"count\">
                <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 78
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 82
        echo "    <h2>Messages</h2>

    ";
        // line 84
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 84))) {
            // line 85
            echo "        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } elseif ((1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 88
($context["collector"] ?? null), "buses", [], "any", false, false, true, 88)))) {
            // line 89
            echo "        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        ";
            // line 90
            echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 90), true], 90, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 92
            echo "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 94
            $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 94);
            // line 95
            echo "                ";
            $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, true, 95);
            // line 96
            echo "                <h3 class=\"tab-title\">All<span class=\"badge ";
            echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 96, $this->source)))) ? ("status-error") : ("status-some-errors"))) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 96, $this->source)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 100
            echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [($context["messages"] ?? null), true], 100, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, true, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 105
                echo "                <div class=\"tab message-bus\">
                    ";
                // line 106
                $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, true, 106);
                // line 107
                echo "                    ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, true, 107);
                // line 108
                echo "                    <h3 class=\"tab-title\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["bus"], 108, $this->source), "html", null, true);
                echo "<span class=\"badge ";
                echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 108, $this->source)))) ? ("status-error") : ("status-some-errors"))) : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 108, $this->source)), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 111
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["bus"], 111, $this->source), "html", null, true);
                echo "</code> bus</p>
                        ";
                // line 112
                echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [($context["messages"] ?? null)], 112, $context, $this->getSourceContext());
                echo "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        </div>
    ";
        }
        // line 118
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 122
            echo "    ";
            $context["discr"] = twig_random($this->env);
            // line 123
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 124
                echo "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["discr"] ?? null), 128, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "-details\"
                    data-toggle-initial=\"";
                // line 129
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 129)) ? ("display") : (""));
                echo "\"
                >
                    <span class=\"dump-inline\">";
                // line 131
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, true, 131), "type", [], "any", false, false, true, 131), 131, $this->source));
                echo "</span>
                    ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, true, 132)) {
                    // line 133
                    echo "                        <span class=\"label status-error\">exception</span>
                    ";
                }
                // line 135
                echo "                    <button class=\"btn btn-link toggle-button\" type=\"button\">
                        <span class=\"icon icon-close\">";
                // line 136
                echo twig_source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                echo "</span>
                        <span class=\"icon icon-open\">";
                // line 137
                echo twig_source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                echo "</span>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 142
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["discr"] ?? null), 142, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo "-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    ";
                // line 147
                $context["caller"] = twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, true, 147);
                // line 148
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 148)) {
                    // line 149
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 149), 149, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 149), 149, $this->source));
                    // line 150
                    echo "                        ";
                    if (($context["link"] ?? null)) {
                        // line 151
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 151, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 153
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 155
                    echo "                    ";
                } else {
                    // line 156
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                    echo "
                    ";
                }
                // line 158
                echo "                    line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["discr"] ?? null), 158, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "</button>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 160
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["discr"] ?? null), 160, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "\">
                        <div class=\"trace\">
                            ";
                // line 162
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 162), 162, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 162), 162, $this->source)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 167
                echo "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 172
                if (($context["showBus"] ?? null)) {
                    // line 173
                    echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>";
                    // line 175
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 178
                echo "            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>";
                // line 180
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, true, 180), "value", [], "any", false, false, true, 180), 180, $this->source), 2);
                echo "</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, true, 185));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 186
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 186, $this->source));
                    echo "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 188
                    echo "                        <span class=\"text-muted font-normal\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "                </td>
            </tr>
            ";
                // line 192
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, true, 192)) {
                    // line 193
                    echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        ";
                    // line 196
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, true, 196));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 197
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 197, $this->source));
                        echo "
                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 199
                        echo "                            <span class=\"text-muted\">No items</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "                    </td>
                </tr>
            ";
                }
                // line 204
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, true, 204)) {
                    // line 205
                    echo "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                    // line 208
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, true, 208), "value", [], "any", false, false, true, 208), 208, $this->source), 1);
                    echo "
                    </td>
                </tr>
            ";
                }
                // line 212
                echo "        </tbody>
    </table>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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
        return "@WebProfiler/Collector/messenger.html.twig";
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
        return array (  593 => 212,  586 => 208,  581 => 205,  578 => 204,  573 => 201,  566 => 199,  558 => 197,  553 => 196,  548 => 193,  546 => 192,  542 => 190,  535 => 188,  527 => 186,  522 => 185,  514 => 180,  510 => 178,  504 => 175,  500 => 173,  498 => 172,  491 => 167,  489 => 162,  482 => 160,  472 => 158,  466 => 156,  463 => 155,  455 => 153,  445 => 151,  442 => 150,  439 => 149,  436 => 148,  434 => 147,  424 => 142,  416 => 137,  412 => 136,  409 => 135,  405 => 133,  403 => 132,  399 => 131,  394 => 129,  388 => 128,  382 => 124,  364 => 123,  361 => 122,  344 => 121,  336 => 118,  332 => 116,  322 => 112,  318 => 111,  307 => 108,  304 => 107,  302 => 106,  299 => 105,  295 => 104,  288 => 100,  278 => 96,  275 => 95,  273 => 94,  269 => 92,  264 => 90,  261 => 89,  259 => 88,  254 => 85,  252 => 84,  248 => 82,  241 => 81,  233 => 78,  227 => 75,  224 => 74,  222 => 73,  217 => 71,  211 => 70,  204 => 69,  194 => 65,  191 => 64,  188 => 63,  178 => 59,  173 => 57,  169 => 56,  164 => 54,  161 => 53,  158 => 52,  153 => 51,  151 => 50,  148 => 49,  143 => 47,  138 => 46,  135 => 45,  132 => 44,  129 => 43,  122 => 42,  77 => 4,  70 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/messenger.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/messenger.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43, "set" => 44, "for" => 51, "macro" => 121);
        static $filters = array("length" => 43, "escape" => 47, "file_link" => 149, "raw" => 167, "replace" => 162, "file_excerpt" => 162);
        static $functions = array("source" => 46, "include" => 65, "random" => 122, "profiler_dump" => 131);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'macro', 'import'],
                ['length', 'escape', 'file_link', 'raw', 'replace', 'file_excerpt'],
                ['source', 'include', 'random', 'profiler_dump']
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
