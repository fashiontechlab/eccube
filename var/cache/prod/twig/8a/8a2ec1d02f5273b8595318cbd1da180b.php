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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig */
class __TwigTemplate_43cf1f1c8eeb563817c7a409bceedabd extends Template
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
        echo "<form class=\"form-inline\" method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["action"] ?? null), 1, $this->source), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <div class=\"form-group\">

        ";
        // line 5
        if ((twig_length_filter($this->env, ($context["fields"] ?? null)) > 1)) {
            // line 6
            echo "            <select class=\"form-control\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["filterFieldName"] ?? null), 6, $this->source), "html", null, true);
            echo "\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 8
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["field"], 8, $this->source), "html", null, true);
                echo "\"";
                if ((($context["selectedField"] ?? null) == $context["field"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["label"], 8, $this->source), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </select>
        ";
        } else {
            // line 12
            echo "            <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["filterFieldName"] ?? null), 12, $this->source), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(($context["fields"] ?? null), 12, $this->source))), "html", null, true);
            echo "\" />
        ";
        }
        // line 14
        echo "
        <input class=\"form-control\" type=\"search\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["selectedValue"] ?? null), 15, $this->source), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["filterValueName"] ?? null), 15, $this->source), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter_searchword", [], "KnpPaginatorBundle"), "html", null, true);
        echo "\" />

    </div>

    <div class=\"form-group\">
        <button class=\"btn btn-primary\">";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "button", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</button>
    </div>

</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig";
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
        return array (  112 => 20,  100 => 15,  97 => 14,  89 => 12,  85 => 10,  70 => 8,  66 => 7,  61 => 6,  59 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v4_filtration.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "for" => 7);
        static $filters = array("escape" => 1, "length" => 5, "first" => 12, "keys" => 12, "trans" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'first', 'keys', 'trans'],
                []
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
