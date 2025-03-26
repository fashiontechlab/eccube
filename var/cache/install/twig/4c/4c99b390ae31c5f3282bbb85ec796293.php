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
class __TwigTemplate_9ec39d05c798ffa8022b64b6a0513c0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tailwind_2_layout.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $context["row_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["row_attr"] ?? null), 4, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 4), 4, $this->source), ((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 4, $this->source), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 4, $this->source), "mb-6")) : ("mb-6"))))]);
        // line 5
        $this->displayParentBlock("form_row", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 9
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 9, $this->source), ["class" => ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 9)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 9), 9, $this->source), ((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 9, $this->source), "mt-1 w-full")) : ("mt-1 w-full")))) : (((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 9, $this->source), "mt-1 w-full")) : ("mt-1 w-full")))) . ((($context["disabled"] ?? null)) ? ((" " . ((array_key_exists("widget_disabled_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_disabled_class"] ?? null), 9, $this->source), "border-gray-300 text-gray-500")) : ("border-gray-300 text-gray-500")))) : (""))) . ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 9, $this->source))) ? ((" " . ((array_key_exists("widget_errors_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_errors_class"] ?? null), 9, $this->source), "border-red-700")) : ("border-red-700")))) : ("")))]);
        // line 10
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 14
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 14, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 14)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 14), 14, $this->source), ((array_key_exists("label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 14, $this->source), "block text-gray-800")) : ("block text-gray-800")))) : (((array_key_exists("label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 14, $this->source), "block text-gray-800")) : ("block text-gray-800"))))]);
        // line 15
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 19
        $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 19, $this->source), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 19)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 19), 19, $this->source), ((array_key_exists("help_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["help_class"] ?? null), 19, $this->source), "mt-1 text-gray-600")) : ("mt-1 text-gray-600")))) : (((array_key_exists("help_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["help_class"] ?? null), 19, $this->source), "mt-1 text-gray-600")) : ("mt-1 text-gray-600"))))]);
        // line 20
        $this->displayParentBlock("form_help", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 62
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 62, $this->source), "mr-2")) : ("mr-2"));
        // line 63
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 67
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 67, $this->source), "mr-2")) : ("mr-2"));
        // line 68
        $this->displayParentBlock("radio_widget", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  304 => 68,  302 => 67,  295 => 66,  288 => 63,  286 => 62,  279 => 61,  272 => 58,  270 => 57,  268 => 56,  266 => 55,  264 => 54,  262 => 53,  260 => 52,  248 => 51,  245 => 49,  243 => 48,  241 => 47,  239 => 46,  232 => 45,  225 => 42,  218 => 40,  216 => 39,  214 => 38,  212 => 37,  208 => 36,  204 => 35,  202 => 34,  195 => 33,  187 => 29,  177 => 27,  173 => 26,  171 => 25,  169 => 24,  162 => 23,  155 => 20,  153 => 19,  146 => 18,  139 => 15,  137 => 14,  130 => 13,  123 => 10,  121 => 9,  114 => 8,  107 => 5,  105 => 4,  98 => 3,  91 => 66,  89 => 61,  87 => 45,  85 => 33,  83 => 23,  81 => 18,  79 => 13,  77 => 8,  75 => 3,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tailwind_2_layout.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/tailwind_2_layout.html.twig");
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
