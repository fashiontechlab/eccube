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

/* @KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig */
class __TwigTemplate_3f69d3b336d03f65b001434606e7f749 extends Template
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

        // line 9
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["action"] ?? null), 9, $this->source), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">
    <div class=\"input-group mb-3\">
        ";
        // line 11
        if ((twig_length_filter($this->env, ($context["fields"] ?? null)) > 1)) {
            // line 12
            echo "            <select class=\"form-select\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["filterFieldName"] ?? null), 12, $this->source), "html", null, true);
            echo "\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 14
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["field"], 14, $this->source), "html", null, true);
                echo "\"";
                if ((($context["selectedField"] ?? null) == $context["field"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["label"], 14, $this->source), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </select>
        ";
        } else {
            // line 18
            echo "            <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["filterFieldName"] ?? null), 18, $this->source), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(($context["fields"] ?? null), 18, $this->source))), "html", null, true);
            echo "\"/>
        ";
        }
        // line 20
        echo "        <input class=\"form-control\" type=\"search\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["selectedValue"] ?? null), 20, $this->source), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["filterValueName"] ?? null), 20, $this->source), "html", null, true);
        echo "\"
               placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter_searchword", [], "KnpPaginatorBundle"), "html", null, true);
        echo "\"/>
        <button class=\"btn btn-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "button", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
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
        return "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig";
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
        return array (  106 => 22,  102 => 21,  95 => 20,  87 => 18,  83 => 16,  68 => 14,  64 => 13,  59 => 12,  57 => 11,  51 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/knplabs/knp-paginator-bundle/templates/Pagination/bootstrap_v5_filtration.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "for" => 13);
        static $filters = array("escape" => 9, "length" => 11, "first" => 18, "keys" => 18, "trans" => 21);
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
