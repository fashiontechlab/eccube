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

/* foundation_6_layout.html.twig */
class __TwigTemplate_a167ff173a0e4c0c45bf1af9687071f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'button_widget' => [$this, 'block_button_widget'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
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

        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_6_layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["parent_class"] = ((array_key_exists("parent_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_class"] ?? null), 4, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 4), 4, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 4), 4, $this->source), "")) : (""))));
        // line 5
        if (twig_in_filter("switch-input", ($context["parent_class"] ?? null))) {
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 6, $this->source), 'label');
            // line 7
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 7, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 7)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 7), 7, $this->source), "")) : ("")) . " switch-input"))]);
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 8, $this->source), 'widget');
            // line 9
            echo "<label class=\"switch-paddle\" for=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 9), "id", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\"></label>";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 10, $this->source), 'errors');
        } else {
            // line 12
            $this->displayBlock("form_row", $context, $blocks);
        }
    }

    // line 16
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 18
        echo "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 19
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 20
            echo "        <div class=\"input-group\">
            ";
            // line 21
            if (($context["prepend"] ?? null)) {
                // line 22
                echo "                <span class=\"input-group-label\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 22, $this->source));
                echo "</span>
            ";
            }
            // line 24
            echo "            ";
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 24, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 24)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 24), 24, $this->source), "")) : ("")) . " input-group-field"))]);
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-label\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 27, $this->source));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if (($context["symbol"] ?? null)) {
            // line 37
            echo "<div class=\"input-group\">
            ";
            // line 38
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 38, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 38)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 38), 38, $this->source), "")) : ("")) . " input-group-field"))]);
            // line 39
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 40
            echo "<span class=\"input-group-label\">";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["symbol"] ?? null), 40, $this->source), "%")) : ("%")), "html", null, true);
            echo "</span>
        </div>";
        } else {
            // line 43
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 47
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 48, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 48)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 48), 48, $this->source), "")) : ("")) . " button"))]);
        // line 49
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "foundation_6_layout.html.twig";
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
        return array (  164 => 49,  162 => 48,  158 => 47,  153 => 43,  147 => 40,  145 => 39,  143 => 38,  140 => 37,  138 => 36,  134 => 35,  129 => 31,  125 => 29,  119 => 27,  117 => 26,  115 => 25,  112 => 24,  106 => 22,  104 => 21,  101 => 20,  98 => 19,  95 => 18,  93 => 17,  89 => 16,  84 => 12,  81 => 10,  77 => 9,  75 => 8,  73 => 7,  71 => 6,  69 => 5,  67 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "foundation_6_layout.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/foundation_6_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 5);
        static $filters = array("default" => 4, "merge" => 7, "trim" => 7, "escape" => 9, "form_encode_currency" => 22);
        static $functions = array("form_label" => 6, "form_widget" => 8, "form_errors" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'merge', 'trim', 'escape', 'form_encode_currency'],
                ['form_label', 'form_widget', 'form_errors']
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
