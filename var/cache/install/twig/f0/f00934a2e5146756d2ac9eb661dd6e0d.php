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

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_6204ca46ce0b0d49fef62299e64c74c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 4), "calls", [], "any", false, false, true, 4) > 0)) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/cache.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 7), "calls", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 10), "time", [], "any", false, false, true, 10) * 1000)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start(function () { return ''; });
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 17), "calls", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 21), "time", [], "any", false, false, true, 21) * 1000)), "html", null, true);
            echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 25), "hits", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 25), "reads", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 25), "hit_read_ratio", [], "any", false, false, true, 25))) {
                echo " (";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 25), "hit_read_ratio", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "%)";
            }
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 29), "writes", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 38), "calls", [], "any", false, false, true, 38) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 40
        echo twig_source($this->env, "@WebProfiler/Icon/cache.svg");
        echo "
        </span>
        <strong>Cache</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Cache</h2>

    ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 49), "calls", [], "any", false, false, true, 49) == 0)) {
            // line 50
            echo "        <div class=\"empty empty-panel\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_render_metrics", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, true, 54), true], 54, $context, $this->getSourceContext());
            echo "

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 59
            echo "            ";
            $context["cache_pools_with_calls"] = twig_array_merge(twig_array_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, true, 59), 59, $this->source), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["calls"] ?? null), 59, $this->source)) > 0); }), []);
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cache_pools_with_calls"] ?? null));
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
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 61
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($context["calls"], 61, $this->source)) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 62
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 62, $this->source), "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statistics", [], "any", false, false, true, 62)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["name"]] ?? null) : null), "calls", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        <h4>Adapter</h4>
                        <div class=\"card\">
                            ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "adapters", [], "any", false, true, true, 67), $context["name"], [], "array", true, true, true, 67)) {
                    // line 68
                    echo "                                <code>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "adapters", [], "any", false, false, true, 68)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["name"]] ?? null) : null), 68, $this->source), "html", null, true);
                    echo "</code>
                            ";
                } else {
                    // line 70
                    echo "                                <span class=\"text-muted\">Unable to get the adapter class.</span>
                            ";
                }
                // line 72
                echo "                        </div>
                        ";
                // line 73
                if ((twig_length_filter($this->env, $context["calls"]) == 0)) {
                    // line 74
                    echo "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 75, $this->source), "html", null, true);
                    echo " pool.</p>
                            </div>
                        ";
                } else {
                    // line 78
                    echo "                            <h4>Metrics</h4>
                            ";
                    // line 79
                    echo twig_call_macro($macros["_self"], "macro_render_metrics", [(($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statistics", [], "any", false, false, true, 79)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null)], 79, $context, $this->getSourceContext());
                    echo "

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["calls"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 93
                        echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 94
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                        echo "</td>
                                        <td class=\"nowrap\">";
                        // line 95
                        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", ((twig_get_attribute($this->env, $this->source, $context["call"], "end", [], "any", false, false, true, 95) - twig_get_attribute($this->env, $this->source, $context["call"], "start", [], "any", false, false, true, 95)) * 1000)), "html", null, true);
                        echo " ms</td>
                                        <td class=\"nowrap\">";
                        // line 96
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["call"], "name", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                        echo "()</td>
                                        <td>";
                        // line 97
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "value", [], "any", false, false, true, 97), "result", [], "any", false, false, true, 97), 97, $this->source), 2);
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 103
                echo "                    </div>
                </div>

                ";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 106)) {
                    // line 107
                    echo "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Pools without calls <span class=\"badge\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, true, 108), 108, $this->source), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($context["calls"], 108, $this->source))); })), "html", null, true);
                    echo "</span></h3>

                        <div class=\"tab-content\">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Cache pools that received no calls</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, true, 118), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == twig_length_filter($this->env, $context["calls"])); }))));
                    foreach ($context['_seq'] as $context["_key"] => $context["cache_pool"]) {
                        // line 119
                        echo "                                        <tr><td>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["cache_pool"], 119, $this->source), "html", null, true);
                        echo "</td></tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cache_pool'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                ";
                }
                // line 126
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function macro_render_metrics($__pool__ = null, $__is_total__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pool" => $__pool__,
            "is_total" => $__is_total__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_metrics"));

            // line 132
            echo "    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
            // line 134
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "calls", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "</span>
            <span class=\"label\">";
            // line 135
            echo ((($context["is_total"] ?? null)) ? ("Total calls") : ("Calls"));
            echo "</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
            // line 138
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "time", [], "any", false, false, true, 138) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">";
            // line 139
            echo ((($context["is_total"] ?? null)) ? ("Total time") : ("Time"));
            echo "</span>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "reads", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 147
            echo ((($context["is_total"] ?? null)) ? ("Total reads") : ("Reads"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 150
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "writes", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 151
            echo ((($context["is_total"] ?? null)) ? ("Total writes") : ("Writes"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 154
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "deletes", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 155
            echo ((($context["is_total"] ?? null)) ? ("Total deletes") : ("Deletes"));
            echo "</span>
            </div>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hits", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 164
            echo ((($context["is_total"] ?? null)) ? ("Total hits") : ("Hits"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 167
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "misses", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 168
            echo ((($context["is_total"] ?? null)) ? ("Total misses") : ("Misses"));
            echo "</span>
            </div>
            <div class=\"metric\">
                    <span class=\"value\">
                        ";
            // line 172
            (((twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", true, true, true, 172) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", false, false, true, 172)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", false, false, true, 172), "html", null, true))) : (print (0)));
            echo " <span class=\"unit\">%</span>
                    </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>
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
        return "@WebProfiler/Collector/cache.html.twig";
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
        return array (  508 => 172,  501 => 168,  497 => 167,  491 => 164,  487 => 163,  476 => 155,  472 => 154,  466 => 151,  462 => 150,  456 => 147,  452 => 146,  442 => 139,  438 => 138,  432 => 135,  428 => 134,  424 => 132,  407 => 131,  398 => 127,  384 => 126,  377 => 121,  368 => 119,  364 => 118,  351 => 108,  348 => 107,  346 => 106,  341 => 103,  336 => 100,  319 => 97,  315 => 96,  311 => 95,  307 => 94,  304 => 93,  287 => 92,  271 => 79,  268 => 78,  262 => 75,  259 => 74,  257 => 73,  254 => 72,  250 => 70,  244 => 68,  242 => 67,  232 => 62,  227 => 61,  209 => 60,  206 => 59,  198 => 54,  192 => 50,  190 => 49,  186 => 47,  179 => 46,  167 => 40,  161 => 38,  154 => 37,  144 => 33,  141 => 32,  135 => 29,  121 => 25,  114 => 21,  107 => 17,  103 => 15,  100 => 14,  93 => 10,  87 => 7,  82 => 6,  79 => 5,  76 => 4,  69 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/cache.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/cache.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "for" => 60, "macro" => 131);
        static $filters = array("escape" => 7, "format" => 10, "merge" => 59, "filter" => 59, "length" => 59, "sort" => 118, "keys" => 118);
        static $functions = array("source" => 6, "include" => 33, "profiler_dump" => 97);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'macro', 'import'],
                ['escape', 'format', 'merge', 'filter', 'length', 'sort', 'keys'],
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
