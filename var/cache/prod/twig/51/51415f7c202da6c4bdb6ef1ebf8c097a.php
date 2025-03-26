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

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_1defbe4ebad14f07839b7399b98eaabd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
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

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('submit_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('reset_row', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 10, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 10)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 10), 10, $this->source), "")) : ("")) . " col-form-label"))]);
            }
            // line 12
            $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 12, $this->source), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 12)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 12), 12, $this->source), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 17
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "col-sm-2";
    }

    // line 23
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            $context["widget_attr"] = [];
            // line 28
            if ( !twig_test_empty(($context["help"] ?? null))) {
                // line 29
                $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 29, $this->source) . "_help")]];
            }
            // line 31
            echo "<div";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 31), "")) : ("")) . " form-group row") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 31, $this->getSourceContext());
            }
            $__internal_compile_1 = twig_to_array($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_0;
            echo ">";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 32, $this->source), 'label');
            // line 33
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 34, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 34, $this->source));
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 35, $this->source), 'help');
            // line 36
            echo "</div>
    ";
            // line 37
            echo "</div>";
        }
    }

    // line 41
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["widget_attr"] = [];
        // line 43
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 44
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 44, $this->source) . "_help")]];
        }
        // line 46
        echo "<fieldset";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 46), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 46, $this->getSourceContext());
        }
        $__internal_compile_3 = twig_to_array($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        echo ">
        <div class=\"row";
        // line 47
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 48, $this->source), 'label');
        // line 49
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 50, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 50, $this->source));
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 51, $this->source), 'help');
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 52, $this->source), 'errors');
        // line 53
        echo "</div>
        </div>
";
        // line 55
        echo "</fieldset>";
    }

    // line 58
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 59), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 59, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        echo ">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 62, $this->source), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
    }

    // line 67
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 68), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 68, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 69
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 70
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 71, $this->source), 'widget');
        // line 72
        echo "</div>";
        // line 73
        echo "</div>";
    }

    // line 76
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "col-sm-10";
    }

    // line 80
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 81), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 81, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 82
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 83
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 84, $this->source), 'widget');
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 85, $this->source), 'help');
        // line 86
        echo "</div>";
        // line 87
        echo "</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  347 => 87,  345 => 86,  343 => 85,  341 => 84,  337 => 83,  333 => 82,  321 => 81,  317 => 80,  313 => 77,  309 => 76,  305 => 73,  303 => 72,  301 => 71,  297 => 70,  293 => 69,  281 => 68,  277 => 67,  273 => 64,  271 => 63,  269 => 62,  265 => 61,  261 => 60,  249 => 59,  245 => 58,  241 => 55,  237 => 53,  235 => 52,  233 => 51,  231 => 50,  227 => 49,  225 => 48,  220 => 47,  207 => 46,  204 => 44,  202 => 43,  200 => 42,  196 => 41,  191 => 37,  188 => 36,  186 => 35,  184 => 34,  180 => 33,  178 => 32,  166 => 31,  163 => 29,  161 => 28,  159 => 27,  156 => 25,  154 => 24,  150 => 23,  146 => 18,  142 => 17,  137 => 13,  135 => 12,  132 => 10,  130 => 9,  125 => 7,  123 => 6,  119 => 5,  115 => 80,  112 => 79,  110 => 76,  107 => 75,  105 => 67,  102 => 66,  100 => 58,  97 => 57,  95 => 41,  92 => 40,  90 => 23,  87 => 22,  84 => 20,  82 => 17,  79 => 16,  77 => 5,  74 => 4,  71 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_4_horizontal_layout.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "if" => 6, "set" => 10, "with" => 31);
        static $filters = array("merge" => 10, "trim" => 10, "default" => 10);
        static $functions = array("form_label" => 32, "form_widget" => 34, "form_help" => 35, "form_errors" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'with'],
                ['merge', 'trim', 'default'],
                ['form_label', 'form_widget', 'form_help', 'form_errors']
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
