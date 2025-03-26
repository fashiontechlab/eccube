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

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_33a77e0ac927ce71a147d1f0335997da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

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

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 2, $this->source), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink data-turbo=\"false\">
    <button type=\"button\" title=\"Show Symfony toolbar\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 3, $this->source), "html", null, true);
        echo "\" accesskey=\"D\" aria-expanded=\"false\" aria-controls=\"sfToolbarMainContent-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 3, $this->source), "html", null, true);
        echo "\">
        ";
        // line 4
        echo twig_source($this->env, "@WebProfiler/Icon/symfony.svg");
        echo "
    </button>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 7, $this->source), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 9, $this->source), "html", null, true);
        echo "\" class=\"sf-toolbarreset notranslate clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
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
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["collector" => ((                // line 13
($context["profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [$context["name"]], "method", false, false, true, 13)) : (null)), "profiler_url" =>                 // line 14
($context["profiler_url"] ?? null), "token" => ((                // line 15
$context["token"]) ?? (((($context["profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, true, 15)) : (null)))), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
($context["profiler_markup_version"] ?? null), "csp_script_nonce" =>                 // line 18
($context["csp_script_nonce"] ?? null), "csp_style_nonce" =>                 // line 19
($context["csp_style_nonce"] ?? null)];
                if (!is_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 13, $this->getSourceContext());
                }
                $__internal_compile_1 = twig_to_array($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $__internal_compile_0;
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
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
        // line 25
        echo "    ";
        if (($context["full_stack"] ?? null)) {
            // line 26
            echo "        <div class=\"sf-full-stack sf-toolbar-block sf-toolbar-block-full-stack sf-toolbar-status-red sf-toolbar-block-right\">
            <div class=\"sf-toolbar-icon\">
                <span class=\"sf-toolbar-value\">Using symfony/symfony is NOT supported</span>
            </div>
            <div class=\"sf-toolbar-info sf-toolbar-status-red\">
                <p>This project is using Symfony via the \"symfony/symfony\" package.</p>
                <p>This is NOT supported anymore since Symfony 4.0.</p>
                <p>Even if it seems to work well, it has some important limitations with no workarounds.</p>
                <p>Using this package also makes your project slower.</p>

                <strong>Please, stop using this package and replace it with individual packages instead.</strong>
            </div>
            <div></div>
        </div>
    ";
        }
        // line 41
        echo "
    <button class=\"hide-button\" type=\"button\" id=\"sfToolbarHideButton-";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 42, $this->source), "html", null, true);
        echo "\" title=\"Close Toolbar\" accesskey=\"D\" aria-expanded=\"true\" aria-controls=\"sfToolbarMainContent-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 42, $this->source), "html", null, true);
        echo "\">
        ";
        // line 43
        echo twig_source($this->env, "@WebProfiler/Icon/close.svg");
        echo "
    </button>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
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
        return array (  170 => 43,  164 => 42,  161 => 41,  144 => 26,  141 => 25,  127 => 24,  124 => 23,  118 => 21,  111 => 19,  110 => 18,  109 => 17,  108 => 16,  107 => 15,  106 => 14,  105 => 13,  102 => 12,  99 => 11,  82 => 10,  78 => 9,  73 => 7,  67 => 4,  61 => 3,  57 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/toolbar.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10, "if" => 11, "with" => 12);
        static $filters = array("escape" => 2);
        static $functions = array("source" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'with'],
                ['escape'],
                ['source']
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
