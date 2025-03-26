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

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_d07c334ae1ff62f8e76337b3651b27dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'summary' => [$this, 'block_summary'],
            'sidebar_search_css_class' => [$this, 'block_sidebar_search_css_class'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #search-results td {
            font-family: var(--font-family-system);
            vertical-align: middle;
        }

        #search-results .sf-search {
            visibility: hidden;
            margin-left: 2px;
        }
        #search-results tr:hover .sf-search {
            visibility: visible;
        }
        #search-results .sf-search svg {
            stroke-width: 3;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 32
        echo "    <div class=\"status\">
        <h2>Profile Search</h2>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_sidebar_search_css_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_search_css_class"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_sidebar_shortcuts_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    <div class=\"sf-tabs\" data-processed=\"true\">
        <div class=\"tab-navigation\" role=\"tablist\">
            <button class=\"tab-control ";
        // line 43
        echo ((("request" == ($context["profile_type"] ?? null))) ? ("active") : (""));
        echo "\" role=\"tab\" ";
        echo ((("request" == ($context["profile_type"] ?? null))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        echo " >
                <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10]), "html", null, true);
        echo "\">
                    HTTP Requests
                </a>
            </button>
            <button class=\"tab-control ";
        // line 48
        echo ((("command" == ($context["profile_type"] ?? null))) ? ("active") : (""));
        echo "\" role=\"tab\" ";
        echo ((("command" == ($context["profile_type"] ?? null))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        echo ">
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10, "type" => "command"]), "html", null, true);
        echo "\">
                    Console Commands
                </a>
            </button>
        </div>
    </div>

    <h2>";
        // line 56
        ((($context["tokens"] ?? null)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, ($context["tokens"] ?? null)), "html", null, true))) : (print ("No")));
        echo " results found</h2>

    ";
        // line 58
        if (($context["tokens"] ?? null)) {
            // line 59
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">
                        ";
            // line 63
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 64
                echo "                            Exit code
                        ";
            } else {
                // line 66
                echo "                            Status
                        ";
            }
            // line 68
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 70
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 71
                echo "                            Application
                        ";
            } else {
                // line 73
                echo "                            IP
                        ";
            }
            // line 75
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 77
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 78
                echo "                            Mode
                        ";
            } else {
                // line 80
                echo "                            Method
                        ";
            }
            // line 82
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 84
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 85
                echo "                            Command
                        ";
            } else {
                // line 87
                echo "                            URL
                        ";
            }
            // line 89
            echo "                    </th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tokens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 96
                echo "                    ";
                if (("command" == ($context["profile_type"] ?? null))) {
                    // line 97
                    echo "                        ";
                    $context["css_class"] = (((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, true, 97) == 113)) ? ("status-warning") : ((((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, true, 97) > 0)) ? ("status-error") : ("status-success"))));
                    // line 98
                    echo "                    ";
                } else {
                    // line 99
                    echo "                        ";
                    $context["css_class"] = (((((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, true, 99)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, true, 99), 99, $this->source), 0)) : (0)) > 399)) ? ("status-error") : ((((((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, true, 99)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, true, 99), 99, $this->source), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                    // line 100
                    echo "                    ";
                }
                // line 101
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 104
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_class"] ?? null), 104, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, true, 104)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, true, 104), 104, $this->source), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 107
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "ip", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo " ";
                echo twig_call_macro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "ip"], 107, $context, $this->getSourceContext());
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "method", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo " ";
                echo twig_call_macro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "method"], 110, $context, $this->getSourceContext());
                echo "</span>
                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 113
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "url", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "
                            ";
                // line 114
                echo twig_call_macro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "url"], 114, $context, $this->getSourceContext());
                echo "
                        </td>
                        <td class=\"text-small\">
                            <time data-convert-to-user-timezone data-render-as-date datetime=\"";
                // line 117
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, true, 117), 117, $this->source), "c"), "html", null, true);
                echo "\">
                                ";
                // line 118
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, true, 118), 118, $this->source), "d-M-Y"), "html", null, true);
                echo "
                            </time>
                            <time class=\"newline\" data-convert-to-user-timezone data-render-as-time datetime=\"";
                // line 120
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, true, 120), 120, $this->source), "c"), "html", null, true);
                echo "\">
                                ";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, true, 121), 121, $this->source), "H:i:s"), "html", null, true);
                echo "
                            </time>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, true, 124)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 130
            echo "        <div class=\"empty empty-panel\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 134
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function macro_profile_search_filter($__request__ = null, $__result__ = null, $__property__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "request" => $__request__,
            "result" => $__result__,
            "property" => $__property__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "profile_search_filter"));

            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "hasSession", [], "any", false, false, true, 4)) {
                // line 5
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_search_results", twig_array_merge(twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, true, 5), "all", [], "any", false, false, true, 5), 5, $this->source), ["token" => twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "token", [], "any", false, false, true, 5)]), [($context["property"] ?? null) => (($__internal_compile_0 = ($context["result"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["property"] ?? null)] ?? null) : null)])), "html", null, true);
                echo "\" title=\"Search\"><span title=\"Search\" class=\"sf-icon sf-search\">";
                echo twig_source($this->env, "@WebProfiler/Icon/search.svg");
                echo "</span></a>";
            }
            
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
        return "@WebProfiler/Profiler/results.html.twig";
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
        return array (  387 => 5,  385 => 4,  367 => 3,  359 => 134,  353 => 130,  348 => 127,  337 => 124,  331 => 121,  327 => 120,  322 => 118,  318 => 117,  312 => 114,  308 => 113,  300 => 110,  292 => 107,  284 => 104,  279 => 101,  276 => 100,  273 => 99,  270 => 98,  267 => 97,  264 => 96,  260 => 95,  252 => 89,  248 => 87,  244 => 85,  242 => 84,  238 => 82,  234 => 80,  230 => 78,  228 => 77,  224 => 75,  220 => 73,  216 => 71,  214 => 70,  210 => 68,  206 => 66,  202 => 64,  200 => 63,  194 => 59,  192 => 58,  187 => 56,  177 => 49,  171 => 48,  164 => 44,  158 => 43,  154 => 41,  147 => 40,  135 => 38,  123 => 37,  113 => 32,  106 => 31,  78 => 10,  71 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/results.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/results.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 58, "for" => 95, "set" => 97, "macro" => 3);
        static $filters = array("escape" => 44, "length" => 56, "default" => 99, "date" => 117, "merge" => 5);
        static $functions = array("path" => 44, "source" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'macro', 'import'],
                ['escape', 'length', 'default', 'date', 'merge'],
                ['path', 'source']
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
