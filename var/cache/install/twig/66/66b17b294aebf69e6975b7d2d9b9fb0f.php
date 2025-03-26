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

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_0c4647e90ad8c9e7541158db926e0016 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dumpsCount", [], "any", false, false, true, 4)) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "            ";
            echo twig_source($this->env, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dumpsCount", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 10
            ob_start(function () { return ''; });
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getDumps", ["html"], "method", false, false, true, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, $context["dump"], "label", [], "any", true, true, true, 14) && ("" != twig_get_attribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, true, 14)))) {
                    // line 15
                    echo "                        <span class=\"sf-toolbar-file-line\"><strong>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo "</strong> in </span>
                    ";
                }
                // line 17
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 17)) {
                    // line 18
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 18), 18, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, true, 18), 18, $this->source));
                    // line 19
                    echo "                        ";
                    if (($context["link"] ?? null)) {
                        // line 20
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 20, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 22
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 24
                    echo "                    ";
                } else {
                    // line 25
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "
                    ";
                }
                // line 27
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</span>

                    ";
                // line 30
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "data", [], "any", false, false, true, 30), 30, $this->source);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo "
        ";
            // line 35
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 40
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dumpsCount", [], "any", false, false, true, 40) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 41
        echo twig_source($this->env, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
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
        echo "    <h2>Dumped Contents</h2>

    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getDumps", ["html"], "method", false, false, true, 49));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 50
            echo "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">
                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["dump"], "label", [], "any", true, true, true, 52) && ("" != twig_get_attribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, true, 52)))) {
                // line 53
                echo "                    <strong>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "</strong> in
                ";
            } else {
                // line 55
                echo "                    In
                ";
            }
            // line 57
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, true, 57)) {
                // line 58
                echo "                    ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 58), 58, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, true, 58), 58, $this->source));
                // line 59
                echo "                    ";
                if (($context["link"] ?? null)) {
                    // line 60
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 60, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 62
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 64
                echo "                ";
            } else {
                // line 65
                echo "                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
                ";
            }
            // line 67
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 70
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 72
            echo ((twig_get_attribute($this->env, $this->source, $context["dump"], "fileExcerpt", [], "any", false, false, true, 72)) ? ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "fileExcerpt", [], "any", false, false, true, 72), 72, $this->source)) : ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, true, 72), 72, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, true, 72), 72, $this->source))));
            echo "
                </div>
            </div>

            ";
            // line 76
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["dump"], "data", [], "any", false, false, true, 76), 76, $this->source);
            echo "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 79
            echo "        <div class=\"empty empty-panel\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
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
        return array (  323 => 79,  307 => 76,  300 => 72,  295 => 70,  286 => 67,  280 => 65,  277 => 64,  269 => 62,  259 => 60,  256 => 59,  253 => 58,  250 => 57,  246 => 55,  240 => 53,  238 => 52,  234 => 50,  216 => 49,  212 => 47,  205 => 46,  194 => 41,  189 => 40,  182 => 39,  172 => 35,  169 => 34,  166 => 33,  157 => 30,  152 => 28,  149 => 27,  143 => 25,  140 => 24,  132 => 22,  122 => 20,  119 => 19,  116 => 18,  113 => 17,  107 => 15,  105 => 14,  101 => 12,  96 => 11,  94 => 10,  91 => 9,  86 => 7,  81 => 6,  78 => 5,  75 => 4,  68 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Debug/Profiler/dump.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/debug-bundle/Resources/views/Profiler/dump.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "for" => 11);
        static $filters = array("escape" => 7, "file_link" => 18, "raw" => 30, "file_excerpt" => 72);
        static $functions = array("source" => 6, "include" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'file_link', 'raw', 'file_excerpt'],
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
