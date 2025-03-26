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

/* tailwind_2_layout.html.twig */
class __TwigTemplate_0f56e78d0c456fe9bad776724c9ee3d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "tailwind_2_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'form_label' => [$this, 'block_form_label'],
                'form_help' => [$this, 'block_form_help'],
                'form_errors' => [$this, 'block_form_errors'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
            ]
        );
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

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 8
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        $this->displayBlock('form_help', $context, $blocks);
        // line 23
        $this->displayBlock('form_errors', $context, $blocks);
        // line 33
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 45
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 61
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 66
        $this->displayBlock('radio_widget', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["row_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["row_attr"] ?? null), 4, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 4), 4, $this->source), ((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 4, $this->source), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 4, $this->source), "mb-6")) : ("mb-6"))))]);
        // line 5
        $this->displayParentBlock("form_row", $context, $blocks);
    }

    // line 8
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 9, $this->source), ["class" => ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 9)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 9), 9, $this->source), ((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 9, $this->source), "mt-1 w-full")) : ("mt-1 w-full")))) : (((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 9, $this->source), "mt-1 w-full")) : ("mt-1 w-full")))) . ((($context["disabled"] ?? null)) ? ((" " . ((array_key_exists("widget_disabled_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_disabled_class"] ?? null), 9, $this->source), "border-gray-300 text-gray-500")) : ("border-gray-300 text-gray-500")))) : (""))) . ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 9, $this->source))) ? ((" " . ((array_key_exists("widget_errors_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_errors_class"] ?? null), 9, $this->source), "border-red-700")) : ("border-red-700")))) : ("")))]);
        // line 10
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 14, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 14)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 14), 14, $this->source), ((array_key_exists("label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 14, $this->source), "block text-gray-800")) : ("block text-gray-800")))) : (((array_key_exists("label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 14, $this->source), "block text-gray-800")) : ("block text-gray-800"))))]);
        // line 15
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 18
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 19, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 19)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 19), 19, $this->source), ((array_key_exists("help_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["help_class"] ?? null), 19, $this->source), "mt-1 text-gray-600")) : ("mt-1 text-gray-600")))) : (((array_key_exists("help_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["help_class"] ?? null), 19, $this->source), "mt-1 text-gray-600")) : ("mt-1 text-gray-600"))))]);
        // line 20
        $this->displayParentBlock("form_help", $context, $blocks);
    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 25
            echo "<ul>";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "<li class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("error_item_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["error_item_class"] ?? null), 27, $this->source), "text-red-700")) : ("text-red-700")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</ul>";
        }
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 34, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 34)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 34), 34, $this->source), "mt-2")) : ("mt-2"))]);
        // line 35
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            echo "            <div class=\"flex items-center\">";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 38, $this->source), 'widget');
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 39, $this->source), 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            // line 40
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>";
    }

    // line 45
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $context["row_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["row_attr"] ?? null), 46, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 46)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 46), 46, $this->source), ((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 46, $this->source), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 46, $this->source), "mb-6")) : ("mb-6"))))]);
        // line 47
        $context["widget_attr"] = [];
        // line 48
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 49
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 49, $this->source) . "_help")]];
        }
        // line 51
        echo "<div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 51, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 52, $this->source), 'errors');
        // line 53
        echo "<div class=\"inline-flex items-center\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 54, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 54, $this->source));
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 55, $this->source), 'label');
        // line 56
        echo "</div>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 57, $this->source), 'help');
        // line 58
        echo "</div>";
    }

    // line 61
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 62, $this->source), "mr-2")) : ("mr-2"));
        // line 63
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
    }

    // line 66
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 67, $this->source), "mr-2")) : ("mr-2"));
        // line 68
        $this->displayParentBlock("radio_widget", $context, $blocks);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tailwind_2_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  247 => 68,  245 => 67,  241 => 66,  237 => 63,  235 => 62,  231 => 61,  227 => 58,  225 => 57,  223 => 56,  221 => 55,  219 => 54,  217 => 53,  215 => 52,  203 => 51,  200 => 49,  198 => 48,  196 => 47,  194 => 46,  190 => 45,  186 => 42,  179 => 40,  177 => 39,  175 => 38,  173 => 37,  169 => 36,  165 => 35,  163 => 34,  159 => 33,  154 => 29,  144 => 27,  140 => 26,  138 => 25,  136 => 24,  132 => 23,  128 => 20,  126 => 19,  122 => 18,  118 => 15,  116 => 14,  112 => 13,  108 => 10,  106 => 9,  102 => 8,  98 => 5,  96 => 4,  92 => 3,  88 => 66,  86 => 61,  84 => 45,  82 => 33,  80 => 23,  78 => 18,  76 => 13,  74 => 8,  72 => 3,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tailwind_2_layout.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/tailwind_2_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 3, "set" => 4, "if" => 24, "for" => 26, "with" => 51);
        static $filters = array("merge" => 4, "default" => 4, "length" => 9, "escape" => 27);
        static $functions = array("form_widget" => 38, "form_label" => 39, "form_errors" => 52, "form_help" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'for', 'with'],
                ['merge', 'default', 'length', 'escape'],
                ['form_widget', 'form_label', 'form_errors', 'form_help']
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
