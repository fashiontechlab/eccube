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

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_d99c992c89331fb1fce2f2d9e2a9d265 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
            ]
        );
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('date_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('time_widget', $context, $blocks);
        // line 108
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 146
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 165
        echo "
";
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('choice_label', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('radio_label', $context, $blocks);
        // line 181
        echo "
";
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('button_row', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('choice_row', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('date_row', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('time_row', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 6, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 6)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 6), 6, $this->source), "")) : ("")) . " form-control"))]);
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            echo "        <div class=\"input-group ";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["group_class"] ?? null), 14, $this->source), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 16, $this->source));
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 20, $this->source));
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        if (($context["symbol"] ?? null)) {
            // line 30
            echo "<div class=\"input-group\">";
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 32
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["symbol"] ?? null), 32, $this->source), "%")) : ("%")), "html", null, true);
            echo "</span>
        </div>";
        } else {
            // line 35
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 40
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 41
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 43
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 43, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 43)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 43), 43, $this->source), "")) : ("")) . " form-inline"))]);
            // line 44
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 45), 45, $this->source), 'errors');
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 46), 46, $this->source), 'errors');
            // line 48
            echo "<div class=\"sr-only\">";
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, true, 49), "year", [], "any", true, true, true, 49)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 49), "year", [], "any", false, false, true, 49), 49, $this->source), 'label');
            }
            // line 50
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, true, 50), "month", [], "any", true, true, true, 50)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 50), "month", [], "any", false, false, true, 50), 50, $this->source), 'label');
            }
            // line 51
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, true, 51), "day", [], "any", true, true, true, 51)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 51), "day", [], "any", false, false, true, 51), 51, $this->source), 'label');
            }
            // line 52
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, true, 52), "hour", [], "any", true, true, true, 52)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 52), "hour", [], "any", false, false, true, 52), 52, $this->source), 'label');
            }
            // line 53
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, true, 53), "minute", [], "any", true, true, true, 53)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 53), "minute", [], "any", false, false, true, 53), 53, $this->source), 'label');
            }
            // line 54
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, true, 54), "second", [], "any", true, true, true, 54)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 54), "second", [], "any", false, false, true, 54), 54, $this->source), 'label');
            }
            // line 55
            echo "</div>";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 57), 57, $this->source), 'widget', ["datetime" => true]);
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 58), 58, $this->source), 'widget', ["datetime" => true]);
            // line 59
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 64
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 65
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 67, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 67)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 67), 67, $this->source), "")) : ("")) . " form-inline"))]);
            // line 68
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 69
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 71
            if ( !(($context["label"] ?? null) === false)) {
                // line 72
                echo "<div class=\"sr-only\">
                ";
                // line 73
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, true, 73), 73, $this->source), 'label');
                echo "
                ";
                // line 74
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, true, 74), 74, $this->source), 'label');
                echo "
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, true, 75), 75, $this->source), 'label');
                echo "
            </div>";
            }
            // line 79
            echo twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["date_pattern"] ?? null), 79, $this->source), ["{{ year }}" =>             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, true, 80), 80, $this->source), 'widget'), "{{ month }}" =>             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, true, 81), 81, $this->source), 'widget'), "{{ day }}" =>             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, true, 82), 82, $this->source), 'widget')]);
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 94, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 94)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 94), 94, $this->source), "")) : ("")) . " form-inline"))]);
            // line 95
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 96
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 98
            if ( !(($context["label"] ?? null) === false)) {
                echo "<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, true, 98), 98, $this->source), 'label');
                echo "</div>";
            }
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, true, 99), 99, $this->source), 'widget');
            // line 100
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                if ( !(($context["label"] ?? null) === false)) {
                    echo "<div class=\"sr-only\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, true, 100), 100, $this->source), 'label');
                    echo "</div>";
                }
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, true, 100), 100, $this->source), 'widget');
            }
            // line 101
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                if ( !(($context["label"] ?? null) === false)) {
                    echo "<div class=\"sr-only\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, true, 101), 101, $this->source), 'label');
                    echo "</div>";
                }
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, true, 101), 101, $this->source), 'widget');
            }
            // line 102
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 103
                echo "</div>";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 109
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 112, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 112)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 112), 112, $this->source), "")) : ("")) . " form-inline"))]);
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 114, $this->source), 'errors');
            // line 115
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 116
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["table_class"] ?? null), 116, $this->source), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 119
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 119), 119, $this->source), 'label');
                echo "</th>";
            }
            // line 120
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 120), 120, $this->source), 'label');
                echo "</th>";
            }
            // line 121
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 121), 121, $this->source), 'label');
                echo "</th>";
            }
            // line 122
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 122), 122, $this->source), 'label');
                echo "</th>";
            }
            // line 123
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 123), 123, $this->source), 'label');
                echo "</th>";
            }
            // line 124
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 124), 124, $this->source), 'label');
                echo "</th>";
            }
            // line 125
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 125), 125, $this->source), 'label');
                echo "</th>";
            }
            // line 126
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 130
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 130), 130, $this->source), 'widget');
                echo "</td>";
            }
            // line 131
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 131), 131, $this->source), 'widget');
                echo "</td>";
            }
            // line 132
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 132), 132, $this->source), 'widget');
                echo "</td>";
            }
            // line 133
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 133), 133, $this->source), 'widget');
                echo "</td>";
            }
            // line 134
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 134), 134, $this->source), 'widget');
                echo "</td>";
            }
            // line 135
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 135), 135, $this->source), 'widget');
                echo "</td>";
            }
            // line 136
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 136), 136, $this->source), 'widget');
                echo "</td>";
            }
            // line 137
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 141
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, true, 141), 141, $this->source), 'widget');
            }
            // line 142
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 147
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 147)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 147), "")) : ("")))) {
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 149, $this->source), 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 150
($context["label_attr"] ?? null), "class", [], "any", true, true, true, 150)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 150), 150, $this->source), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 155
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 157
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 157, $this->source), 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 158
($context["label_attr"] ?? null), "class", [], "any", true, true, true, 158)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 158), 158, $this->source), "")) : ("")), "translation_domain" =>                 // line 159
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 168
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        // line 170
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 170, $this->source), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 170)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 170), 170, $this->source), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "", "switch-custom" => ""]))]);
        // line 171
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 175
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 179
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 184
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 185
        echo "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 185)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 185), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 185, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        echo ">";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 186, $this->source), 'widget');
        // line 187
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 190
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_row"));

        // line 191
        $context["force_error"] = true;
        // line 192
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 195
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_row"));

        // line 196
        $context["force_error"] = true;
        // line 197
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 200
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_row"));

        // line 201
        $context["force_error"] = true;
        // line 202
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 205
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 206
        $context["force_error"] = true;
        // line 207
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  749 => 207,  747 => 206,  740 => 205,  733 => 202,  731 => 201,  724 => 200,  717 => 197,  715 => 196,  708 => 195,  701 => 192,  699 => 191,  692 => 190,  685 => 187,  683 => 186,  671 => 185,  664 => 184,  657 => 179,  650 => 178,  643 => 175,  636 => 174,  629 => 171,  627 => 170,  620 => 168,  612 => 162,  606 => 159,  605 => 158,  604 => 157,  600 => 156,  596 => 155,  589 => 151,  588 => 150,  587 => 149,  583 => 148,  581 => 147,  574 => 146,  566 => 142,  562 => 141,  557 => 137,  551 => 136,  545 => 135,  539 => 134,  533 => 133,  527 => 132,  521 => 131,  515 => 130,  510 => 126,  504 => 125,  498 => 124,  492 => 123,  486 => 122,  480 => 121,  474 => 120,  468 => 119,  463 => 116,  460 => 115,  458 => 114,  454 => 113,  452 => 112,  449 => 110,  447 => 109,  440 => 108,  431 => 103,  429 => 102,  419 => 101,  409 => 100,  407 => 99,  401 => 98,  396 => 96,  394 => 95,  392 => 94,  389 => 92,  387 => 91,  380 => 90,  371 => 85,  369 => 84,  367 => 82,  366 => 81,  365 => 80,  364 => 79,  359 => 75,  355 => 74,  351 => 73,  348 => 72,  346 => 71,  341 => 69,  339 => 68,  337 => 67,  334 => 65,  332 => 64,  325 => 63,  317 => 59,  315 => 58,  313 => 57,  311 => 55,  307 => 54,  303 => 53,  299 => 52,  295 => 51,  291 => 50,  287 => 49,  285 => 48,  283 => 46,  281 => 45,  277 => 44,  275 => 43,  272 => 41,  270 => 40,  263 => 39,  255 => 35,  249 => 32,  247 => 31,  245 => 30,  243 => 29,  236 => 28,  228 => 24,  224 => 22,  218 => 20,  216 => 19,  214 => 18,  208 => 16,  206 => 15,  201 => 14,  198 => 13,  195 => 12,  193 => 11,  186 => 10,  179 => 7,  177 => 6,  170 => 5,  163 => 205,  160 => 204,  158 => 200,  155 => 199,  153 => 195,  150 => 194,  148 => 190,  145 => 189,  143 => 184,  140 => 183,  137 => 181,  135 => 178,  132 => 177,  130 => 174,  127 => 173,  125 => 168,  122 => 167,  119 => 165,  117 => 146,  115 => 108,  113 => 90,  110 => 89,  108 => 63,  105 => 62,  103 => 39,  100 => 38,  98 => 28,  95 => 27,  93 => 10,  90 => 9,  88 => 5,  85 => 4,  82 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_base_layout.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "set" => 6, "if" => 13, "for" => 148, "with" => 185);
        static $filters = array("merge" => 6, "trim" => 6, "default" => 6, "escape" => 14, "form_encode_currency" => 16, "raw" => 83, "replace" => 79);
        static $functions = array("form_errors" => 45, "form_label" => 49, "form_widget" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'for', 'with'],
                ['merge', 'trim', 'default', 'escape', 'form_encode_currency', 'raw', 'replace'],
                ['form_errors', 'form_label', 'form_widget']
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
