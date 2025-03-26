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

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_a97c757aab13e78a1ef99f717d07ad12 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
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
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('submit_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('reset_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 4, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 4), 4, $this->source), "")) : ("")) . " form-horizontal"))]);
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 14, $this->source), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 14)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 14), 14, $this->source), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 19
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "col-sm-2";
    }

    // line 25
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["widget_attr"] = [];
        // line 27
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 28
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 28, $this->source) . "_help")]];
        }
        // line 30
        echo "<div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 30), "")) : ("")) . " form-group") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 30, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 31, $this->source), 'label');
        // line 32
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 33, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 33, $this->source));
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 34, $this->source), 'help');
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 35, $this->source), 'errors');
        // line 36
        echo "</div>
";
        // line 37
        echo "</div>";
    }

    // line 40
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "<div";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 41), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 41, $this->getSourceContext());
        }
        $__internal_compile_3 = twig_to_array($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        echo ">";
        // line 42
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 43
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 44, $this->source), 'widget');
        // line 45
        echo "</div>";
        // line 46
        echo "</div>";
    }

    // line 49
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 50), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 50, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        echo ">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 53, $this->source), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "col-sm-10";
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 63), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 63, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 64
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 65
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 66, $this->source), 'widget');
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 67, $this->source), 'help');
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 68, $this->source), 'errors');
        // line 69
        echo "</div>";
        // line 70
        echo "</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  301 => 70,  299 => 69,  297 => 68,  295 => 67,  293 => 66,  289 => 65,  285 => 64,  273 => 63,  269 => 62,  265 => 59,  261 => 58,  257 => 55,  255 => 54,  253 => 53,  249 => 52,  245 => 51,  233 => 50,  229 => 49,  225 => 46,  223 => 45,  221 => 44,  217 => 43,  213 => 42,  201 => 41,  197 => 40,  193 => 37,  190 => 36,  188 => 35,  186 => 34,  184 => 33,  180 => 32,  178 => 31,  166 => 30,  163 => 28,  161 => 27,  159 => 26,  155 => 25,  151 => 20,  147 => 19,  142 => 15,  140 => 14,  135 => 12,  133 => 11,  129 => 10,  125 => 5,  123 => 4,  119 => 3,  115 => 62,  112 => 61,  110 => 58,  107 => 57,  105 => 49,  102 => 48,  100 => 40,  97 => 39,  95 => 25,  92 => 24,  89 => 22,  87 => 19,  84 => 18,  82 => 10,  79 => 9,  76 => 7,  74 => 3,  71 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_horizontal_layout.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 3, "set" => 4, "if" => 11, "with" => 30);
        static $filters = array("merge" => 4, "trim" => 4, "default" => 4);
        static $functions = array("form_label" => 31, "form_widget" => 33, "form_help" => 34, "form_errors" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'with'],
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
