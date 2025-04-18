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

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_55fbf72bff93a638762400d7db5ce1be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        #twig-dump pre {
            font-size: var(--font-size-monospace);
            line-height: 1.7;
            background-color: var(--page-background);
            border: var(--border);
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0 0 1px rgba(128, 128, 128, .2);
        }
        #twig-dump span {
            border-radius: 2px;
            padding: 1px 2px;
        }
        #twig-dump .status-error { background: transparent; color: var(--color-error); }
        #twig-dump .status-warning { background: rgba(240, 181, 24, 0.3); }
        #twig-dump .status-success { background: rgba(100, 189, 99, 0.2); }
        #twig-dump .status-info { background: var(--info-background); }
        .theme-dark #twig-dump .status-warning { color: var(--yellow-200); }
        .theme-dark #twig-dump .status-success { color: var(--green-200); }

        #twig-table tbody td {
            position: relative;
        }
        #twig-table tbody td div {
            margin: 0;
        }
        #twig-table .template-file-path {
            color: var(--color-muted);
            display: block;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 41
        echo "    ";
        $context["time"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 41)) ? (twig_sprintf("%0.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 41), 41, $this->source))) : ("n/a"));
        // line 42
        echo "    ";
        ob_start(function () { return ''; });
        // line 43
        echo "        ";
        echo twig_source($this->env, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["time"] ?? null), 44, $this->source), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
    ";
        // line 48
        ob_start(function () { return ''; });
        // line 49
        echo "        ";
        $context["template"] = twig_first($this->env, twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templates", [], "any", false, false, true, 49), 49, $this->source)));
        // line 50
        echo "        ";
        $context["file"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, true, 50), ($context["template"] ?? null), [], "array", true, true, true, 50)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, true, 50)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["template"] ?? null)] ?? null) : null), 50, $this->source), false)) : (false));
        // line 51
        echo "        ";
        $context["link"] = ((($context["file"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(($context["file"] ?? null), 51, $this->source), 1)) : (false));
        // line 52
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Entry View</b>
            <span>
                 ";
        // line 55
        if (($context["link"] ?? null)) {
            // line 56
            echo "                     <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 56, $this->source), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["file"] ?? null), 56, $this->source), "html", null, true);
            echo "\">
                         ";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["template"] ?? null), 57, $this->source), "html", null, true);
            echo "
                     </a>
                 ";
        } else {
            // line 60
            echo "                     ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["template"] ?? null), 60, $this->source), "html", null, true);
            echo "
                 ";
        }
        // line 62
        echo "            </span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["time"] ?? null), 66, $this->source), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "
    ";
        // line 82
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 86
        echo "    <span class=\"label ";
        echo (((0 == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templateCount", [], "any", false, false, true, 86))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 87
        echo twig_source($this->env, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 93
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 93) == 0)) {
            // line 94
            echo "        <h2>Twig</h2>

        <div class=\"empty empty-panel\">
            <p>No Twig templates were rendered.</p>
        </div>
    ";
        } else {
            // line 100
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 104
            echo twig_escape_filter($this->env, twig_sprintf("%0.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 104), 104, $this->source)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric-divider\"></div>

            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"label\">Template calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 117
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"label\">Block calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 122
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"label\">Macro calls</span>
                </div>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table id=\"twig-table\">
            <thead>
            <tr>
                <th scope=\"col\">Template Name &amp; Path</th>
                <th class=\"num-col\" scope=\"col\">Render Count</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templates", [], "any", false, false, true, 142));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 143
                echo "                <tr>
                    ";
                // line 144
                $context["file"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, true, 144), $context["template"], [], "array", true, true, true, 144)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, true, 144)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["template"]] ?? null) : null), 144, $this->source), false)) : (false));
                // line 145
                echo "                    ";
                $context["link"] = ((($context["file"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(($context["file"] ?? null), 145, $this->source), 1)) : (false));
                // line 146
                echo "                    <td class=\"font-normal\">
                        ";
                // line 147
                if (($context["link"] ?? null)) {
                    // line 148
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 148, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["file"] ?? null), 148, $this->source), "html", null, true);
                    echo "\" class=\"stretched-link\">
                                ";
                    // line 149
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["template"], 149, $this->source), "html", null, true);
                    echo "
                                <span class=\"template-file-path\">";
                    // line 150
                    echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileRelative($this->sandbox->ensureToStringAllowed(($context["file"] ?? null), 150, $this->source)), $this->sandbox->ensureToStringAllowed(($context["file"] ?? null), 150, $this->source)), "html", null, true);
                    echo "</span>
                            </a>
                        ";
                } else {
                    // line 153
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["template"], 153, $this->source), "html", null, true);
                    echo "
                        ";
                }
                // line 155
                echo "                    </td>
                    <td class=\"font-normal num-col\">";
                // line 156
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["count"], 156, $this->source), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 165
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "htmlcallgraph", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
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
        return array (  385 => 165,  377 => 159,  368 => 156,  365 => 155,  359 => 153,  353 => 150,  349 => 149,  342 => 148,  340 => 147,  337 => 146,  334 => 145,  332 => 144,  329 => 143,  325 => 142,  302 => 122,  294 => 117,  286 => 112,  275 => 104,  269 => 100,  261 => 94,  258 => 93,  251 => 92,  240 => 87,  235 => 86,  228 => 85,  219 => 82,  216 => 81,  210 => 78,  203 => 74,  196 => 70,  189 => 66,  183 => 62,  177 => 60,  171 => 57,  164 => 56,  162 => 55,  157 => 52,  154 => 51,  151 => 50,  148 => 49,  146 => 48,  143 => 47,  137 => 44,  132 => 43,  129 => 42,  126 => 41,  119 => 40,  76 => 4,  69 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/twig.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/twig.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 55, "for" => 142);
        static $filters = array("format" => 41, "escape" => 44, "first" => 49, "keys" => 49, "default" => 50, "file_link" => 51, "file_relative" => 150);
        static $functions = array("source" => 43, "include" => 82);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['format', 'escape', 'first', 'keys', 'default', 'file_link', 'file_relative'],
                ['source', 'include']
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
