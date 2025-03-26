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

/* @KnpPaginator/Pagination/semantic_ui_pagination.html.twig */
class __TwigTemplate_b946ed3d3a87b7c4e3a152aa42733315 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig"));

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

        // line 13
        echo "<div class=\"ui pagination menu\">
    ";
        // line 14
        if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
            // line 15
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 15, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 15, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle double left icon\"></i>
        </a>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (array_key_exists("previous", $context)) {
            // line 21
            echo "        <a rel=\"prev\" class=\"item icon\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 21, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 21, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle left icon\"></i>
        </a>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 27
            echo "        ";
            if (($context["page"] != ($context["current"] ?? null))) {
                // line 28
                echo "            <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 28, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 28, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 28, $this->source), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 30
                echo "            <span class=\"active item\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 30, $this->source), "html", null, true);
                echo "</span>
        ";
            }
            // line 32
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    ";
        // line 35
        if (array_key_exists("next", $context)) {
            // line 36
            echo "        <a rel=\"next\" class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 36, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 36, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle right icon\"></i>
        </a>
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
            // line 42
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 42, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 42, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
            echo "\">
            <i class=\"angle right double icon\"></i>
        </a>
    ";
        }
        // line 46
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig";
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
        return array (  137 => 46,  129 => 42,  127 => 41,  124 => 40,  116 => 36,  114 => 35,  111 => 34,  104 => 32,  98 => 30,  90 => 28,  87 => 27,  83 => 26,  80 => 25,  72 => 21,  70 => 20,  67 => 19,  59 => 15,  57 => 14,  54 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/knplabs/knp-paginator-bundle/templates/Pagination/semantic_ui_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "for" => 26);
        static $filters = array("escape" => 15, "merge" => 15);
        static $functions = array("path" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'merge'],
                ['path']
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
