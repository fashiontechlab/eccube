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

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_51856cdf8979d6a52ca18ddf7265f273 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sliding.html.twig"));

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

        // line 2
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 3
            echo "    <div class=\"pagination\">
        ";
            // line 4
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 5
                echo "            <span class=\"first\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 6, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 6, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 9
            echo "
        ";
            // line 10
            if (array_key_exists("previous", $context)) {
                // line 11
                echo "            <span class=\"previous\">
                <a rel=\"prev\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 12, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 12, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&lt;</a>
            </span>
        ";
            }
            // line 15
            echo "
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 18
                    echo "                <span class=\"page\">
                    <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 19, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 19, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 19, $this->source), "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 22
                    echo "                <span class=\"current\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 22, $this->source), "html", null, true);
                    echo "</span>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (array_key_exists("next", $context)) {
                // line 27
                echo "            <span class=\"next\">
                <a rel=\"next\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 28, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 28, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">&gt;</a>
            </span>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 33
                echo "            <span class=\"last\">
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 34, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 34, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 37
            echo "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sliding.html.twig";
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
        return array (  145 => 37,  139 => 34,  136 => 33,  134 => 32,  131 => 31,  125 => 28,  122 => 27,  120 => 26,  117 => 25,  111 => 24,  105 => 22,  97 => 19,  94 => 18,  91 => 17,  87 => 16,  84 => 15,  78 => 12,  75 => 11,  73 => 10,  70 => 9,  64 => 6,  61 => 5,  59 => 4,  56 => 3,  54 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/sliding.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/knplabs/knp-paginator-bundle/templates/Pagination/sliding.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 16);
        static $filters = array("escape" => 6, "merge" => 6);
        static $functions = array("path" => 6);

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
