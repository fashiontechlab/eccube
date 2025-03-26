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

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_240e8ff7a9eac942ec343ca7b03a18bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'summary' => [$this, 'block_summary'],
            'sidebar' => [$this, 'block_sidebar'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", ["profile_type" => ($context["profile_type"] ?? null)], false);
        echo "

        <div id=\"summary\">
        ";
        // line 8
        $this->displayBlock('summary', $context, $blocks);
        // line 21
        echo "    </div>

        <div id=\"content\">
            <div id=\"main\">
                <div id=\"sidebar\">
                    ";
        // line 26
        $this->displayBlock('sidebar', $context, $blocks);
        // line 71
        echo "                </div>

                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 75
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                        ";
        // line 76
        $this->displayBlock('panel', $context, $blocks);
        // line 77
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 9
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 10
            echo "                ";
            $context["request_collector"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, true, 10), "request", [], "any", true, true, true, 10)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, true, 10), "request", [], "any", false, false, true, 10), 10, $this->source), false)) : (false));
            // line 11
            echo "
                ";
            // line 12
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, twig_sprintf("@WebProfiler/Profiler/_%s_summary.html.twig", $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 12, $this->source)), ["profile" =>             // line 13
($context["profile"] ?? null), "command_collector" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
($context["profile"] ?? null), "collectors", [], "any", false, true, true, 14), "command", [], "any", true, true, true, 14)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, true, 14), "command", [], "any", false, false, true, 14), 14, $this->source), false)) : (false)), "request_collector" =>             // line 15
($context["request_collector"] ?? null), "request" =>             // line 16
($context["request"] ?? null), "token" =>             // line 17
($context["token"] ?? null)], false);
            // line 18
            echo "
            ";
        }
        // line 20
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        echo "                        <div id=\"sidebar-contents\">
                            <div id=\"sidebar-shortcuts\">
                                ";
        // line 29
        $this->displayBlock('sidebar_shortcuts_links', $context, $blocks);
        // line 39
        echo "
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("web_profiler.controller.profiler::searchBarAction", array(), twig_array_merge(["type" => ($context["profile_type"] ?? null)], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, true, 40), "all", [], "any", false, false, true, 40), 40, $this->source))));
        echo "
                            </div>

                            ";
        // line 43
        if (array_key_exists("templates", $context)) {
            // line 44
            echo "                                <ul id=\"menu-profiler\">
                                    ";
            // line 45
            if (("request" === ($context["profile_type"] ?? null))) {
                // line 46
                echo "                                        ";
                $context["excludes"] = ["command"];
                // line 47
                echo "                                    ";
            } elseif (("command" === ($context["profile_type"] ?? null))) {
                // line 48
                echo "                                        ";
                $context["excludes"] = ["request", "router"];
                // line 49
                echo "                                    ";
            }
            // line 50
            echo "
                                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["templates"] ?? null), function ($__t__, $__n__) use ($context, $macros) { $context["t"] = $__t__; $context["n"] = $__n__; return !twig_in_filter(($context["n"] ?? null), ($context["excludes"] ?? null)); }));
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
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 52
                echo "                                        ";
                ob_start(function () { return ''; });
                // line 53
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 53)->hasBlock("menu", $context)) {
                    // line 54
                    $__internal_compile_0 = $context;
                    $__internal_compile_1 = ["collector" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [$context["name"]], "method", false, false, true, 54), "profiler_markup_version" => ($context["profiler_markup_version"] ?? null)];
                    if (!is_iterable($__internal_compile_1)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 54, $this->getSourceContext());
                    }
                    $__internal_compile_1 = twig_to_array($__internal_compile_1);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                    // line 55
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 55)->displayBlock("menu", $context);
                    $context = $__internal_compile_0;
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 59
                echo "                                        ";
                if ( !twig_test_empty(($context["menu"] ?? null))) {
                    // line 60
                    echo "                                            <li class=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 60, $this->source), "html", null, true);
                    echo " ";
                    echo ((($context["name"] == ($context["panel"] ?? null))) ? ("selected") : (""));
                    echo "\">
                                                <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => ($context["token"] ?? null), "panel" => $context["name"], "type" => ($context["profile_type"] ?? null)]), "html", null, true);
                    echo "\">";
                    echo $this->sandbox->ensureToStringAllowed(($context["menu"] ?? null), 61, $this->source);
                    echo "</a>
                                            </li>
                                        ";
                }
                // line 64
                echo "                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                </ul>
                            ";
        }
        // line 67
        echo "                        </div>

                        ";
        // line 69
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/settings.html.twig");
        echo "
                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_sidebar_shortcuts_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        // line 30
        echo "                                    <div class=\"shortcuts\">
                                        <a class=\"btn btn-link\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_search", ["limit" => 10, "type" => ($context["profile_type"] ?? null)]), "html", null, true);
        echo "\">Last 10</a>
                                        <a class=\"btn btn-link\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", twig_array_merge(["token" => "latest", "type" => ($context["profile_type"] ?? null)], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, true, 32), "all", [], "any", false, false, true, 32), 32, $this->source))), "html", null, true);
        echo "\">Latest</a>

                                        <a class=\"sf-toggle btn btn-link\" data-toggle-selector=\"#sidebar-search\" ";
        // line 34
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                                            ";
        // line 35
        echo twig_source($this->env, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                                        </a>
                                    </div>
                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
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
        return array (  319 => 76,  308 => 35,  302 => 34,  297 => 32,  293 => 31,  290 => 30,  283 => 29,  274 => 69,  270 => 67,  266 => 65,  252 => 64,  244 => 61,  237 => 60,  234 => 59,  229 => 55,  221 => 54,  219 => 53,  216 => 52,  199 => 51,  196 => 50,  193 => 49,  190 => 48,  187 => 47,  184 => 46,  182 => 45,  179 => 44,  177 => 43,  171 => 40,  168 => 39,  166 => 29,  162 => 27,  155 => 26,  148 => 20,  144 => 18,  142 => 17,  141 => 16,  140 => 15,  139 => 14,  138 => 13,  137 => 12,  134 => 11,  131 => 10,  128 => 9,  121 => 8,  109 => 77,  107 => 76,  103 => 75,  97 => 71,  95 => 26,  88 => 21,  86 => 8,  80 => 5,  77 => 4,  70 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/layout.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 8, "if" => 9, "set" => 10, "for" => 51, "with" => 54);
        static $filters = array("default" => 10, "format" => 12, "merge" => 40, "filter" => 51, "escape" => 60, "raw" => 61);
        static $functions = array("include" => 5, "render" => 40, "controller" => 40, "path" => 61, "source" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'for', 'with'],
                ['default', 'format', 'merge', 'filter', 'escape', 'raw'],
                ['include', 'render', 'controller', 'path', 'source']
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
