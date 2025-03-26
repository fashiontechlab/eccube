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

/* @KnpPaginator/Pagination/tailwindcss_pagination.html.twig */
class __TwigTemplate_1c92ab3a6db7cff460d4ea32bbf2cbe9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig"));

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
            echo "    <div class=\"inline-block\">
        <div class=\"flex items-baseline flex-row border border-gray-400 rounded-sm w-auto\">
        ";
            // line 5
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 6
                echo "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400 font-bold\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 7, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 7, $this->source), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 10
            echo "
        ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "            <span class=\"bg-white text-blue-600 px-3 text-lg py-2 border-r border-gray-400\">
                <a rel=\"prev\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 13, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 13, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&lt;</a>
            </span>
        ";
            }
            // line 16
            echo "
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 19
                    echo "                <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r  border-gray-400\">
                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 20, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 20, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 20, $this->source), "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 23
                    echo "                <span class=\"bg-blue-600 text-white px-3 py-2 text-lg font-bold\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 23, $this->source), "html", null, true);
                    echo "</span>
            ";
                }
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
        ";
            // line 27
            if (array_key_exists("next", $context)) {
                // line 28
                echo "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400\">
                <a rel=\"next\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 29, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 29, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">&gt;</a>
            </span>
        ";
            }
            // line 32
            echo "
        ";
            // line 33
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 34
                echo "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-gray-400 font-bold\">
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 35, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 35, $this->source), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 38
            echo "        </div>
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
        return "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig";
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
        return array (  146 => 38,  140 => 35,  137 => 34,  135 => 33,  132 => 32,  126 => 29,  123 => 28,  121 => 27,  118 => 26,  112 => 25,  106 => 23,  98 => 20,  95 => 19,  92 => 18,  88 => 17,  85 => 16,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 7,  62 => 6,  60 => 5,  56 => 3,  54 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/knplabs/knp-paginator-bundle/templates/Pagination/tailwindcss_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 17);
        static $filters = array("escape" => 7, "merge" => 7);
        static $functions = array("path" => 7);

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
