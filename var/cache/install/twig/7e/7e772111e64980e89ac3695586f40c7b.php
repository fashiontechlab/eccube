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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_39da37b724b49686945a17e03326b832 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/serializer.html.twig", 1);
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
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 32
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, true, 32) > 0)) {
            // line 33
            echo "        ";
            ob_start(function () { return ''; });
            // line 34
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            echo "
        ";
            // line 40
            ob_start(function () { return ''; });
            // line 41
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, true, 48) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 56
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 56), "serialize", [], "any", false, false, true, 56), 56, $this->source)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 60
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 60), "deserialize", [], "any", false, false, true, 60), 60, $this->source)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 66), "encode", [], "any", false, false, true, 66), 66, $this->source)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 70), "decode", [], "any", false, false, true, 70), 70, $this->source)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 76
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 76), "normalize", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 80
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 80), "denormalize", [], "any", false, false, true, 80), 80, $this->source)), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            echo "
        ";
            // line 86
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, true, 91)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 92
        echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
        echo "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 98
        echo "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 100
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, true, 100)) {
            // line 101
            echo "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 105
            echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 107
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, true, 112) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 118
            echo twig_call_macro($macros["_self"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 118), true], 118, $context, $this->getSourceContext());
            echo "
                ";
            // line 119
            echo twig_call_macro($macros["_self"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 119), false], 119, $context, $this->getSourceContext());
            echo "

                ";
            // line 121
            echo twig_call_macro($macros["_self"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 121), true], 121, $context, $this->getSourceContext());
            echo "
                ";
            // line 122
            echo twig_call_macro($macros["_self"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 122), false], 122, $context, $this->getSourceContext());
            echo "

                ";
            // line 124
            echo twig_call_macro($macros["_self"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 124), true], 124, $context, $this->getSourceContext());
            echo "
                ";
            // line 125
            echo twig_call_macro($macros["_self"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 125), false], 125, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 128
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function macro_render_serialize_tab($__collectorData__ = null, $__serialize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "serialize" => $__serialize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 132
            echo "    ";
            $context["data"] = ((($context["serialize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "serialize", [], "any", false, false, true, 132)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "deserialize", [], "any", false, false, true, 132)));
            // line 133
            echo "    ";
            $context["cellPrefix"] = ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            // line 134
            echo "
    <div class=\"tab ";
            // line 135
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 136
            echo ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 136, $this->source)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 138
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 139
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 140
                echo ((($context["serialize"] ?? null)) ? ("serialized") : ("deserialized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 143
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 156
                    echo "                            <tr>
                                <td>";
                    // line 157
                    echo twig_call_macro($macros["_self"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 157), ($context["cellPrefix"] ?? null)], 157, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 158
                    echo twig_call_macro($macros["_self"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 158), ($context["cellPrefix"] ?? null)], 158, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 159
                    echo twig_call_macro($macros["_self"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 159), ($context["cellPrefix"] ?? null)], 159, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 160
                    echo twig_call_macro($macros["_self"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 160), ($context["cellPrefix"] ?? null)], 160, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 161
                    echo twig_call_macro($macros["_self"], "macro_render_time_cell", [$context["item"]], 161, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 162
                    echo twig_call_macro($macros["_self"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 162), ($context["cellPrefix"] ?? null)], 162, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                    </tbody>
                </table>
            ";
            }
            // line 168
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 172
    public function macro_render_caller_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 173
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, true, 173)) {
                // line 174
                echo "        <span class=\"metadata\">
            ";
                // line 175
                $context["caller"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", false, false, true, 175);
                // line 176
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 176)) {
                    // line 177
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 177), 177, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 177), 177, $this->source));
                    // line 178
                    echo "                ";
                    if (($context["link"] ?? null)) {
                        // line 179
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 179, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                        echo "</a>
                ";
                    } else {
                        // line 181
                        echo "                    <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                        echo "</abbr>
                ";
                    }
                    // line 183
                    echo "            ";
                } else {
                    // line 184
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 186
                echo "            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 186, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 186, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                echo "</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-";
                // line 189
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 189, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 189, $this->source), "html", null, true);
                echo "\">
            <div class=\"trace\">
                ";
                // line 191
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, true, 191), 191, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, true, 191), 191, $this->source)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 196
                echo "
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 202
    public function macro_render_normalize_tab($__collectorData__ = null, $__normalize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "normalize" => $__normalize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 203
            echo "    ";
            $context["data"] = ((($context["normalize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "normalize", [], "any", false, false, true, 203)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "denormalize", [], "any", false, false, true, 203)));
            // line 204
            echo "    ";
            $context["cellPrefix"] = ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            // line 205
            echo "
    <div class=\"tab ";
            // line 206
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 207
            echo ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 207, $this->source)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 209
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 210
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 211
                echo ((($context["normalize"] ?? null)) ? ("normalized") : ("denormalized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 214
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 226
                    echo "                            <tr>
                                <td>";
                    // line 227
                    echo twig_call_macro($macros["_self"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 227), ($context["cellPrefix"] ?? null)], 227, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 228
                    echo twig_call_macro($macros["_self"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 228), ($context["cellPrefix"] ?? null)], 228, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 229
                    echo twig_call_macro($macros["_self"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 229), ($context["cellPrefix"] ?? null)], 229, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 230
                    echo twig_call_macro($macros["_self"], "macro_render_time_cell", [$context["item"]], 230, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 231
                    echo twig_call_macro($macros["_self"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 231), ($context["cellPrefix"] ?? null)], 231, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                echo "                    </tbody>
                </table>
            ";
            }
            // line 237
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 241
    public function macro_render_encode_tab($__collectorData__ = null, $__encode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "encode" => $__encode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 242
            echo "    ";
            $context["data"] = ((($context["encode"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "encode", [], "any", false, false, true, 242)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "decode", [], "any", false, false, true, 242)));
            // line 243
            echo "    ";
            $context["cellPrefix"] = ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            // line 244
            echo "
    <div class=\"tab ";
            // line 245
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 246
            echo ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 246, $this->source)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 248
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 249
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 250
                echo ((($context["encode"] ?? null)) ? ("encoded") : ("decoded"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 253
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 264
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 265
                    echo "                            <tr>
                                <td>";
                    // line 266
                    echo twig_call_macro($macros["_self"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 266), ($context["cellPrefix"] ?? null)], 266, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 267
                    echo twig_call_macro($macros["_self"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 267), ($context["cellPrefix"] ?? null)], 267, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 268
                    echo twig_call_macro($macros["_self"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 268), ($context["cellPrefix"] ?? null)], 268, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 269
                    echo twig_call_macro($macros["_self"], "macro_render_time_cell", [$context["item"]], 269, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 270
                    echo twig_call_macro($macros["_self"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 270), ($context["cellPrefix"] ?? null)], 270, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                    </tbody>
                </table>
            ";
            }
            // line 276
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 280
    public function macro_render_data_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 281
            echo "    ";
            $context["data_id"] = ((("data-" . $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 281, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 281, $this->source));
            // line 282
            echo "
    <span class=\"nowrap\">";
            // line 283
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dataType", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
            echo "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 286
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["data_id"] ?? null), 286, $this->source), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 287
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["data_id"] ?? null), 287, $this->source), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 288
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "data", [], "any", false, false, true, 288), 288, $this->source));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 293
    public function macro_render_context_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 294
            echo "    ";
            $context["context_id"] = ((("context-" . $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 294, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 294, $this->source));
            // line 295
            echo "
    ";
            // line 296
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, true, 296)) {
                // line 297
                echo "        <span class=\"nowrap\">Type: ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
                echo "</span>
        <div class=\"nowrap\">Format: ";
                // line 298
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, true, 298)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, true, 298), "html", null, true))) : (print ("none")));
                echo "</div>
    ";
            } else {
                // line 300
                echo "        <span class=\"nowrap\">Format: ";
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, true, 300)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, true, 300), "html", null, true))) : (print ("none")));
                echo "</span>
    ";
            }
            // line 302
            echo "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 304
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_id"] ?? null), 304, $this->source), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_id"] ?? null), 305, $this->source), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 306
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "context", [], "any", false, false, true, 306), 306, $this->source));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 311
    public function macro_render_normalizer_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 312
            echo "    ";
            $context["nested_normalizers_id"] = ((("nested-normalizers-" . $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 312, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 312, $this->source));
            // line 313
            echo "
    ";
            // line 314
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, true, 314)) {
                // line 315
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, true, 315), "file", [], "any", false, false, true, 315), 315, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, true, 315), "line", [], "any", false, false, true, 315), 315, $this->source)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, true, 315), "file", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, true, 315), "class", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, true, 315), "time", [], "any", false, false, true, 315) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 317
            echo "
    ";
            // line 318
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, true, 318)) > 1)) {
                // line 319
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 320
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nested_normalizers_id"] ?? null), 320, $this->source), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 321
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nested_normalizers_id"] ?? null), 321, $this->source), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, true, 323));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 324
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, true, 324), 324, $this->source), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, true, 324), 324, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, true, 324), 324, $this->source)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, true, 324), 324, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, true, 324), 324, $this->source), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, true, 324) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normalizer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 332
    public function macro_render_encoder_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 333
            echo "    ";
            $context["nested_encoders_id"] = ((("nested-encoders-" . $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 333, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 333, $this->source));
            // line 334
            echo "
    ";
            // line 335
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, true, 335)) {
                // line 336
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, true, 336), "file", [], "any", false, false, true, 336), 336, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, true, 336), "line", [], "any", false, false, true, 336), 336, $this->source)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, true, 336), "file", [], "any", false, false, true, 336), 336, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, true, 336), "class", [], "any", false, false, true, 336), 336, $this->source), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, true, 336), "time", [], "any", false, false, true, 336) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 338
            echo "
    ";
            // line 339
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, true, 339)) > 1)) {
                // line 340
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 341
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nested_encoders_id"] ?? null), 341, $this->source), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 342
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nested_encoders_id"] ?? null), 342, $this->source), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 344
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, true, 344));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 345
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, true, 345), 345, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, true, 345), 345, $this->source)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, true, 345) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encoder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 353
    public function macro_render_time_cell($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 354
            echo "    <span class=\"nowrap\">";
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "time", [], "any", false, false, true, 354) * 1000)), "html", null, true);
            echo " ms</span>
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
        return "@WebProfiler/Collector/serializer.html.twig";
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
        return array (  1149 => 354,  1133 => 353,  1117 => 347,  1100 => 345,  1096 => 344,  1091 => 342,  1087 => 341,  1084 => 340,  1082 => 339,  1079 => 338,  1067 => 336,  1065 => 335,  1062 => 334,  1059 => 333,  1041 => 332,  1025 => 326,  1008 => 324,  1004 => 323,  999 => 321,  995 => 320,  992 => 319,  990 => 318,  987 => 317,  975 => 315,  973 => 314,  970 => 313,  967 => 312,  949 => 311,  933 => 306,  929 => 305,  925 => 304,  921 => 302,  915 => 300,  910 => 298,  905 => 297,  903 => 296,  900 => 295,  897 => 294,  879 => 293,  863 => 288,  859 => 287,  855 => 286,  849 => 283,  846 => 282,  843 => 281,  825 => 280,  811 => 276,  806 => 273,  789 => 270,  785 => 269,  781 => 268,  777 => 267,  773 => 266,  770 => 265,  753 => 264,  740 => 253,  734 => 250,  731 => 249,  729 => 248,  722 => 246,  718 => 245,  715 => 244,  712 => 243,  709 => 242,  692 => 241,  678 => 237,  673 => 234,  656 => 231,  652 => 230,  648 => 229,  644 => 228,  640 => 227,  637 => 226,  620 => 225,  607 => 214,  601 => 211,  598 => 210,  596 => 209,  589 => 207,  585 => 206,  582 => 205,  579 => 204,  576 => 203,  559 => 202,  543 => 196,  541 => 191,  534 => 189,  523 => 186,  517 => 184,  514 => 183,  506 => 181,  496 => 179,  493 => 178,  490 => 177,  487 => 176,  485 => 175,  482 => 174,  479 => 173,  461 => 172,  447 => 168,  442 => 165,  425 => 162,  421 => 161,  417 => 160,  413 => 159,  409 => 158,  405 => 157,  402 => 156,  385 => 155,  371 => 143,  365 => 140,  362 => 139,  360 => 138,  353 => 136,  349 => 135,  346 => 134,  343 => 133,  340 => 132,  323 => 131,  315 => 128,  309 => 125,  305 => 124,  300 => 122,  296 => 121,  291 => 119,  287 => 118,  278 => 112,  270 => 107,  266 => 105,  260 => 101,  258 => 100,  254 => 98,  247 => 97,  236 => 92,  231 => 91,  224 => 90,  214 => 86,  211 => 85,  203 => 80,  196 => 76,  187 => 70,  180 => 66,  171 => 60,  164 => 56,  153 => 48,  145 => 43,  141 => 41,  139 => 40,  136 => 39,  130 => 36,  124 => 34,  121 => 33,  118 => 32,  111 => 31,  77 => 4,  70 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/serializer.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "set" => 33, "macro" => 131, "for" => 155);
        static $filters = array("escape" => 36, "format" => 48, "length" => 56, "file_link" => 177, "raw" => 196, "replace" => 191, "file_excerpt" => 191);
        static $functions = array("source" => 34, "include" => 86, "profiler_dump" => 288);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'macro', 'for', 'import'],
                ['escape', 'format', 'length', 'file_link', 'raw', 'replace', 'file_excerpt'],
                ['source', 'include', 'profiler_dump']
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
