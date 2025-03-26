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

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_d76fb3065bc8032ad2bdd54a5082d47f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 5
        echo twig_source($this->env, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        echo "    <h2>Dispatched Events</h2>

    <div class=\"sf-tabs\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 14));
        foreach ($context['_seq'] as $context["dispatcherName"] => $context["dispatcherData"]) {
            // line 15
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["dispatcherName"], 16, $this->source), "html", null, true);
            echo "</h3>
                <div class=\"tab-content\">
                    ";
            // line 18
            if (twig_test_empty((($__internal_compile_0 = $context["dispatcherData"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["called_listeners"] ?? null) : null))) {
                // line 19
                echo "                        <div class=\"empty empty-panel\">
                            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 23
                echo "                        <div class=\"sf-tabs\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
                // line 25
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["dispatcherData"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["called_listeners"] ?? null) : null), 25, $this->source)), "html", null, true);
                echo "</span></h3>

                                <div class=\"tab-content\">
                                    ";
                // line 28
                echo twig_call_macro($macros["_self"], "macro_render_table", [(($__internal_compile_2 = $context["dispatcherData"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["called_listeners"] ?? null) : null)], 28, $context, $this->getSourceContext());
                echo "
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
                // line 33
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = $context["dispatcherData"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["not_called_listeners"] ?? null) : null), 33, $this->source)), "html", null, true);
                echo "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 35
                if (twig_test_empty((($__internal_compile_4 = $context["dispatcherData"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["not_called_listeners"] ?? null) : null))) {
                    // line 36
                    echo "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no uncalled listeners</strong>.
                                            </p>
                                            <p>
                                                All listeners were called or an error occurred
                                                when trying to collect uncalled listeners (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 47
                    echo "                                        ";
                    echo twig_call_macro($macros["_self"], "macro_render_table", [(($__internal_compile_5 = $context["dispatcherData"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["not_called_listeners"] ?? null) : null)], 47, $context, $this->getSourceContext());
                    echo "
                                    ";
                }
                // line 49
                echo "                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Orphaned Events <span class=\"badge\">";
                // line 53
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = $context["dispatcherData"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["orphaned_events"] ?? null) : null), 53, $this->source)), "html", null, true);
                echo "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 55
                if (twig_test_empty((($__internal_compile_7 = $context["dispatcherData"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["orphaned_events"] ?? null) : null))) {
                    // line 56
                    echo "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no orphaned events</strong>.
                                            </p>
                                            <p>
                                                All dispatched events were handled or an error occurred
                                                when trying to collect orphaned events (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 67
                    echo "                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_8 = $context["dispatcherData"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["orphaned_events"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 75
                        echo "                                                    <tr>
                                                        <td class=\"font-normal\">";
                        // line 76
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["event"], 76, $this->source), "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                            </tbody>
                                        </table>
                                    ";
                }
                // line 82
                echo "                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 86
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dispatcherName'], $context['dispatcherData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 93
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 101
            $context["previous_event"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["listeners"] ?? null), 101, $this->source)), "event", [], "any", false, false, true, 101);
            // line 102
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeners"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 103
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 103) || (twig_get_attribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, true, 103) != ($context["previous_event"] ?? null)))) {
                    // line 104
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 104)) {
                        // line 105
                        echo "                    </tbody>
                ";
                    }
                    // line 107
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 110
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 113
                    $context["previous_event"] = twig_get_attribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, true, 113);
                    // line 114
                    echo "            ";
                }
                // line 115
                echo "
            <tr>
                <td class=\"text-right nowrap\">";
                // line 117
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["listener"], "priority", [], "any", true, true, true, 117)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["listener"], "priority", [], "any", false, false, true, 117), 117, $this->source), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 118
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, true, 118), 118, $this->source));
                echo "</td>
            </tr>

            ";
                // line 121
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 121)) {
                    // line 122
                    echo "                </tbody>
            ";
                }
                // line 124
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "    </table>
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
        return "@WebProfiler/Collector/events.html.twig";
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
        return array (  349 => 125,  335 => 124,  331 => 122,  329 => 121,  323 => 118,  319 => 117,  315 => 115,  312 => 114,  310 => 113,  304 => 110,  299 => 107,  295 => 105,  292 => 104,  289 => 103,  271 => 102,  269 => 101,  259 => 93,  243 => 92,  235 => 89,  227 => 86,  221 => 82,  216 => 79,  207 => 76,  204 => 75,  200 => 74,  191 => 67,  178 => 56,  176 => 55,  171 => 53,  165 => 49,  159 => 47,  146 => 36,  144 => 35,  139 => 33,  131 => 28,  125 => 25,  121 => 23,  115 => 19,  113 => 18,  108 => 16,  105 => 15,  101 => 14,  96 => 11,  89 => 10,  78 => 5,  75 => 4,  68 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/events.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/events.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 14, "if" => 18, "macro" => 92, "set" => 101);
        static $filters = array("escape" => 16, "length" => 25, "first" => 101, "default" => 117);
        static $functions = array("source" => 5, "profiler_dump" => 118);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'macro', 'set', 'import'],
                ['escape', 'length', 'first', 'default'],
                ['source', 'profiler_dump']
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
