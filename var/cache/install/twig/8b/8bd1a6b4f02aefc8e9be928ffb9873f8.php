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

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_f4bd4bcba441b91634de35fdc1728f2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'messages' => [$this, 'block_messages'],
            'defined_messages' => [$this, 'block_defined_messages'],
            'fallback_messages' => [$this, 'block_fallback_messages'],
            'missing_messages' => [$this, 'block_missing_messages'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 4))) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 7
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 7)) ? ("red") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 7)) ? ("yellow") : (""))));
            // line 8
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 8) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 8));
            // line 9
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, ((($context["error_count"] ?? null)) ?: (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, true, 9))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start(function () { return ''; });
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Default locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, true, 16)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, true, 16), 16, $this->source), "-")) : ("-")), "html", null, true);
            echo "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 21)) ? ("red") : (""));
            echo "\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 28
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 28)) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "
        ";
            // line 39
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 44)) ? ("error") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 44)) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 44))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 45
        echo twig_source($this->env, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 47) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 47))) {
            // line 48
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 48) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 48));
            // line 49
            echo "            <span class=\"count\">
                <span>";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error_count"] ?? null), 50, $this->source), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 53
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 57
        echo "    <h2>Translation</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 61
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, true, 61)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, true, 61), 61, $this->source), "-")) : ("-")), "html", null, true);
        echo "</span>
            <span class=\"label\">Default locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 65
        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "fallbackLocales", [], "any", false, false, true, 65), 65, $this->source), ", "), "-"), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback locale";
        // line 66
        echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "fallbackLocales", [], "any", false, false, true, 66), 66, $this->source)) != 1)) ? ("s") : (""));
        echo "</span>
        </div>
    </div>

    <h2>Messages</h2>

    ";
        // line 72
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 72))) {
            // line 73
            echo "        <div class=\"empty empty-panel\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 77
            echo "        ";
            $this->displayBlock('messages', $context, $blocks);
            // line 157
            echo "    ";
        }
        // line 158
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 78
        echo "
        ";
        // line 80
        echo "        ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         [[], [], []];
        // line 81
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, true, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, true, 82) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 83
                echo "                ";
                $context["messages_defined"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["messages_defined"] ?? null), 83, $this->source), [$context["message"]]);
                // line 84
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, true, 84) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 85
                echo "                ";
                $context["messages_missing"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["messages_missing"] ?? null), 85, $this->source), [$context["message"]]);
                // line 86
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, true, 86) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 87
                echo "                ";
                $context["messages_fallback"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["messages_fallback"] ?? null), 87, $this->source), [$context["message"]]);
                // line 88
                echo "            ";
            }
            // line 89
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
        <div class=\"sf-tabs\">
            <div class=\"tab ";
        // line 92
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 92) == 0)) ? ("active") : (""));
        echo "\">
                <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 93
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are correctly translated into the given locale.
                    </p>

                    ";
        // line 100
        if (twig_test_empty(($context["messages_defined"] ?? null))) {
            // line 101
            echo "                        <div class=\"empty\">
                            <p>None of the used translation messages are defined for the given locale.</p>
                        </div>
                    ";
        } else {
            // line 105
            echo "                        ";
            $this->displayBlock('defined_messages', $context, $blocks);
            // line 108
            echo "                    ";
        }
        // line 109
        echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 113
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 113)) ? ("status-warning") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale
                        but Symfony found them in the fallback locale catalog.
                    </p>

                    ";
        // line 121
        if (twig_test_empty(($context["messages_fallback"] ?? null))) {
            // line 122
            echo "                        <div class=\"empty\">
                            <p>No fallback translation messages were used.</p>
                        </div>
                    ";
        } else {
            // line 126
            echo "                        ";
            $this->displayBlock('fallback_messages', $context, $blocks);
            // line 129
            echo "                    ";
        }
        // line 130
        echo "                </div>
            </div>

            <div class=\"tab ";
        // line 133
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 133) > 0)) ? ("active") : (""));
        echo "\">
                <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 134
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 134)) ? ("status-error") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale and cannot
                        be found in the fallback locales. Add them to the translation
                        catalogue to avoid Symfony outputting untranslated contents.
                    </p>

                    ";
        // line 143
        if (twig_test_empty(($context["messages_missing"] ?? null))) {
            // line 144
            echo "                        <div class=\"empty\">
                            <p>There are no messages of this category.</p>
                        </div>
                    ";
        } else {
            // line 148
            echo "                        ";
            $this->displayBlock('missing_messages', $context, $blocks);
            // line 151
            echo "                    ";
        }
        // line 152
        echo "                </div>
            </div>
        </div>

        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_defined_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 106
        echo "                            ";
        echo twig_call_macro($macros["_self"], "macro_render_table", [($context["messages_defined"] ?? null)], 106, $context, $this->getSourceContext());
        echo "
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_fallback_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 127
        echo "                            ";
        echo twig_call_macro($macros["_self"], "macro_render_table", [($context["messages_fallback"] ?? null), true], 127, $context, $this->getSourceContext());
        echo "
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 148
    public function block_missing_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 149
        echo "                            ";
        echo twig_call_macro($macros["_self"], "macro_render_table", [($context["messages_missing"] ?? null)], 149, $context, $this->getSourceContext());
        echo "
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function macro_render_table($__messages__ = null, $__is_fallback__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "is_fallback" => $__is_fallback__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 162
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                ";
            // line 166
            if (($context["is_fallback"] ?? null)) {
                // line 167
                echo "                    <th>Fallback locale</th>
                ";
            }
            // line 169
            echo "                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 176
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 177
                echo "            <tr>
                <td class=\"font-normal text-small nowrap\">";
                // line 178
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                echo "</td>
                ";
                // line 179
                if (($context["is_fallback"] ?? null)) {
                    // line 180
                    echo "                    <td class=\"font-normal text-small nowrap\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", true, true, true, 180)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", false, false, true, 180), 180, $this->source), "-")) : ("-")), "html", null, true);
                    echo "</td>
                ";
                }
                // line 182
                echo "                <td class=\"font-normal text-small text-bold nowrap\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small nowrap\">";
                // line 183
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "count", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
                echo "</td>
                <td>
                    <span class=\"";
                // line 185
                echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, true, 185), 185, $this->source)) < 64)) ? ("nowrap") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                echo "</span>

                    ";
                // line 187
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "transChoiceNumber", [], "any", false, false, true, 187))) {
                    // line 188
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 190
                echo "
                    ";
                // line 191
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, true, 191)) > 0)) {
                    // line 192
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 194
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 195
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, true, 195));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 196
                        echo "                                ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["parameters"], 196, $this->source), 1);
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "                        </div>
                    ";
                }
                // line 200
                echo "                </td>
                <td class=\"prewrap\">";
                // line 201
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "translation", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "        </tbody>
    </table>
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
        return "@WebProfiler/Collector/translation.html.twig";
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
        return array (  615 => 204,  598 => 201,  595 => 200,  591 => 198,  582 => 196,  578 => 195,  574 => 194,  568 => 192,  566 => 191,  563 => 190,  559 => 188,  557 => 187,  550 => 185,  545 => 183,  540 => 182,  534 => 180,  532 => 179,  528 => 178,  525 => 177,  508 => 176,  499 => 169,  495 => 167,  493 => 166,  487 => 162,  470 => 161,  460 => 149,  453 => 148,  443 => 127,  436 => 126,  426 => 106,  419 => 105,  408 => 152,  405 => 151,  402 => 148,  396 => 144,  394 => 143,  380 => 134,  376 => 133,  371 => 130,  368 => 129,  365 => 126,  359 => 122,  357 => 121,  344 => 113,  338 => 109,  335 => 108,  332 => 105,  326 => 101,  324 => 100,  314 => 93,  310 => 92,  306 => 90,  300 => 89,  297 => 88,  294 => 87,  291 => 86,  288 => 85,  285 => 84,  282 => 83,  279 => 82,  274 => 81,  271 => 80,  268 => 78,  261 => 77,  253 => 158,  250 => 157,  247 => 77,  241 => 73,  239 => 72,  230 => 66,  226 => 65,  219 => 61,  213 => 57,  206 => 56,  198 => 53,  192 => 50,  189 => 49,  186 => 48,  184 => 47,  179 => 45,  172 => 44,  165 => 43,  155 => 39,  152 => 38,  146 => 35,  137 => 29,  133 => 28,  124 => 22,  120 => 21,  112 => 16,  107 => 13,  105 => 12,  102 => 11,  96 => 9,  93 => 8,  91 => 7,  86 => 6,  83 => 5,  80 => 4,  73 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/translation.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/translation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "block" => 77, "for" => 81, "macro" => 161);
        static $filters = array("length" => 4, "escape" => 9, "default" => 16, "join" => 65, "merge" => 83);
        static $functions = array("source" => 6, "include" => 39, "constant" => 82, "profiler_dump" => 196);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'for', 'macro', 'import'],
                ['length', 'escape', 'default', 'join', 'merge'],
                ['source', 'include', 'constant', 'profiler_dump']
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
