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

/* bootstrap_5_layout.html.twig */
class __TwigTemplate_73fba4aaeba67d2d8b90b9fe9ce58ecd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_5_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'money_widget' => [$this, 'block_money_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'form_label' => [$this, 'block_form_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_5_layout.html.twig"));

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
        $this->displayBlock('money_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('date_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('time_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 194
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 201
        $this->displayBlock('button_widget', $context, $blocks);
        // line 206
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 211
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 235
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 256
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 261
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 272
        echo "
";
        // line 275
        $this->displayBlock('form_label', $context, $blocks);
        // line 294
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 320
        echo "
";
        // line 323
        $this->displayBlock('form_row', $context, $blocks);
        // line 345
        $this->displayBlock('button_row', $context, $blocks);
        // line 350
        echo "
";
        // line 353
        $this->displayBlock('form_errors', $context, $blocks);
        // line 360
        echo "
";
        // line 363
        $this->displayBlock('form_help', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 7
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 8
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 9
            echo "<div class=\"input-group ";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["group_class"] ?? null), 9, $this->source), "")) : ("")), "html", null, true);
            echo "\">";
            // line 10
            if (($context["prepend"] ?? null)) {
                // line 11
                echo "<span class=\"input-group-text\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 11, $this->source));
                echo "</span>";
            }
            // line 13
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 14
            if (($context["append"] ?? null)) {
                // line 15
                echo "<span class=\"input-group-text\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 15, $this->source));
                echo "</span>";
            }
            // line 17
            echo "</div>";
        } else {
            // line 19
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 24
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 27
            if ( !($context["valid"] ?? null)) {
                // line 28
                echo "            ";
                $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 28, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 28)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 28), 28, $this->source), "")) : ("")) . " is-invalid"))]);
                // line 29
                $context["valid"] = true;
                // line 30
                echo "        ";
            }
            // line 31
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 32
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 34
            if ( !(($context["label"] ?? null) === false)) {
                // line 35
                echo "<div class=\"visually-hidden\">";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, true, 36), 36, $this->source), 'label');
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, true, 37), 37, $this->source), 'label');
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, true, 38), 38, $this->source), 'label');
                // line 39
                echo "</div>";
            }
            // line 41
            echo "<div class=\"input-group\">";
            // line 42
            echo twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["date_pattern"] ?? null), 42, $this->source), ["{{ year }}" =>             // line 43
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, true, 43), 43, $this->source), 'widget'), "{{ month }}" =>             // line 44
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, true, 44), 44, $this->source), 'widget'), "{{ day }}" =>             // line 45
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, true, 45), 45, $this->source), 'widget')]);
            // line 47
            echo "</div>";
            // line 48
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 49
                echo "</div>";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 55
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 56
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 58
            if ( !($context["valid"] ?? null)) {
                // line 59
                echo "            ";
                $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 59, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 59)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 59), 59, $this->source), "")) : ("")) . " is-invalid"))]);
                // line 60
                $context["valid"] = true;
                // line 61
                echo "        ";
            }
            // line 62
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 63
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 65
            if ( !(($context["label"] ?? null) === false)) {
                // line 66
                echo "<div class=\"visually-hidden\">";
                // line 67
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, true, 67), 67, $this->source), 'label');
                // line 68
                if (($context["with_minutes"] ?? null)) {
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, true, 68), 68, $this->source), 'label');
                }
                // line 69
                if (($context["with_seconds"] ?? null)) {
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, true, 69), 69, $this->source), 'label');
                }
                // line 70
                echo "</div>";
            }
            // line 72
            if ((($context["with_minutes"] ?? null) || ($context["with_seconds"] ?? null))) {
                // line 73
                echo "            <div class=\"input-group\">
        ";
            }
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, true, 75), 75, $this->source), 'widget');
            // line 76
            if (($context["with_minutes"] ?? null)) {
                // line 77
                echo "<span class=\"input-group-text\">:</span>";
                // line 78
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, true, 78), 78, $this->source), 'widget');
            }
            // line 80
            if (($context["with_seconds"] ?? null)) {
                // line 81
                echo "<span class=\"input-group-text\">:</span>";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, true, 82), 82, $this->source), 'widget');
            }
            // line 84
            if ((($context["with_minutes"] ?? null) || ($context["with_seconds"] ?? null))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 88
                echo "</div>";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            if ( !($context["valid"] ?? null)) {
                // line 98
                echo "            ";
                $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 98, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 98)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 98), 98, $this->source), "")) : ("")) . " is-invalid"))]);
                // line 99
                $context["valid"] = true;
                // line 100
                echo "        ";
            }
            // line 101
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 102), 102, $this->source), 'widget', ["datetime" => true]);
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 103), 103, $this->source), 'errors');
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 104), 104, $this->source), 'widget', ["datetime" => true]);
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 105), 105, $this->source), 'errors');
            // line 106
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 111
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 112
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 114
            if ( !($context["valid"] ?? null)) {
                // line 115
                echo "            ";
                $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 115, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 115)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 115), 115, $this->source), "")) : ("")) . " is-invalid"))]);
                // line 116
                $context["valid"] = true;
                // line 117
                echo "        ";
            }
            // line 118
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 119
            if (($context["with_years"] ?? null)) {
                // line 120
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 121), 121, $this->source), 'label');
                echo "
                    ";
                // line 122
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 122), 122, $this->source), 'widget');
                echo "
                </div>";
            }
            // line 125
            if (($context["with_months"] ?? null)) {
                // line 126
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 127
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 127), 127, $this->source), 'label');
                echo "
                    ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 128), 128, $this->source), 'widget');
                echo "
                </div>";
            }
            // line 131
            if (($context["with_weeks"] ?? null)) {
                // line 132
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 133), 133, $this->source), 'label');
                echo "
                    ";
                // line 134
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 134), 134, $this->source), 'widget');
                echo "
                </div>";
            }
            // line 137
            if (($context["with_days"] ?? null)) {
                // line 138
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 139), 139, $this->source), 'label');
                echo "
                    ";
                // line 140
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 140), 140, $this->source), 'widget');
                echo "
                </div>";
            }
            // line 143
            if (($context["with_hours"] ?? null)) {
                // line 144
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 145
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 145), 145, $this->source), 'label');
                echo "
                    ";
                // line 146
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 146), 146, $this->source), 'widget');
                echo "
                </div>";
            }
            // line 149
            if (($context["with_minutes"] ?? null)) {
                // line 150
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 151
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 151), 151, $this->source), 'label');
                echo "
                    ";
                // line 152
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 152), 152, $this->source), 'widget');
                echo "
                </div>";
            }
            // line 155
            if (($context["with_seconds"] ?? null)) {
                // line 156
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 157
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 157), 157, $this->source), 'label');
                echo "
                    ";
                // line 158
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 158), 158, $this->source), 'widget');
                echo "
                </div>";
            }
            // line 161
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, true, 161), 161, $this->source), 'widget');
            }
            // line 162
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 166
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 167
        if (($context["symbol"] ?? null)) {
            // line 168
            echo "<div class=\"input-group\">";
            // line 169
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 170
            echo "<span class=\"input-group-text\">";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["symbol"] ?? null), 170, $this->source), "%")) : ("%")), "html", null, true);
            echo "</span>
        </div>";
        } else {
            // line 173
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 177
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 178
        if (( !array_key_exists("type", $context) || (($context["type"] ?? null) != "hidden"))) {
            // line 179
            $context["widget_class"] = " form-control";
            // line 180
            if ((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "color")) {
                // line 181
                $context["widget_class"] = ($this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 181, $this->source) . " form-control-color");
            } elseif ((((            // line 182
array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "range")) {
                // line 183
                $context["widget_class"] = " form-range";
            }
            // line 185
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 185, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 185)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 185), 185, $this->source), "")) : ("")) . $this->sandbox->ensureToStringAllowed(($context["widget_class"] ?? null), 185, $this->source)))]);
        }
        // line 187
        if ((array_key_exists("type", $context) && twig_in_filter(($context["type"] ?? null), ["range", "color"]))) {
            // line 188
            echo "        ";
            // line 189
            echo "        ";
            $context["required"] = false;
            // line 190
            echo "    ";
        }
        // line 191
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 194
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 195
        if ( !($context["valid"] ?? null)) {
            // line 196
            echo "        ";
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 196, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 196)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 196), 196, $this->source), "")) : ("")) . " is-invalid"))]);
            // line 197
            echo "    ";
        }
        // line 198
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 201
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 202
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 202, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 202)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 202), 202, $this->source), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        // line 203
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 206
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 207
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 207, $this->source), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 207)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 207), 207, $this->source), "btn-primary")) : ("btn-primary")))]);
        // line 208
        $this->displayParentBlock("submit_widget", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 211
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 212
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["attr_class"] ?? null), 212, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 212)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 212), 212, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 212)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 212), 212, $this->source), "")) : (""))));
        // line 213
        $context["row_class"] = "";
        // line 214
        if (!twig_in_filter("btn-check", ($context["attr_class"] ?? null))) {
            // line 215
            $context["attr_class"] = ($this->sandbox->ensureToStringAllowed(($context["attr_class"] ?? null), 215, $this->source) . " form-check-input");
            // line 216
            $context["row_class"] = "form-check";
        }
        // line 218
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 218, $this->source), ["class" => twig_trim_filter($this->sandbox->ensureToStringAllowed(($context["attr_class"] ?? null), 218, $this->source))]);
        // line 219
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 219, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 219)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 219), 219, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 219)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 219), 219, $this->source), "")) : (""))));
        // line 220
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 221
            $context["row_class"] = ($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 221, $this->source) . " form-check-inline");
        }
        // line 223
        if (twig_in_filter("checkbox-switch", ($context["parent_label_class"] ?? null))) {
            // line 224
            $context["row_class"] = ($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 224, $this->source) . " form-switch");
        }
        // line 226
        if ( !twig_test_empty(($context["row_class"] ?? null))) {
            // line 227
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 227, $this->source), "html", null, true);
            echo "\">";
        }
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 229, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        // line 230
        if ( !twig_test_empty(($context["row_class"] ?? null))) {
            // line 231
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 235
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 236
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["attr_class"] ?? null), 236, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 236)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 236), 236, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 236)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 236), 236, $this->source), "")) : (""))));
        // line 237
        $context["row_class"] = "";
        // line 238
        if (!twig_in_filter("btn-check", ($context["attr_class"] ?? null))) {
            // line 239
            $context["attr_class"] = ($this->sandbox->ensureToStringAllowed(($context["attr_class"] ?? null), 239, $this->source) . " form-check-input");
            // line 240
            $context["row_class"] = "form-check";
        }
        // line 242
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 242, $this->source), ["class" => twig_trim_filter($this->sandbox->ensureToStringAllowed(($context["attr_class"] ?? null), 242, $this->source))]);
        // line 243
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 243, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 243)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 243), 243, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 243)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 243), 243, $this->source), "")) : (""))));
        // line 244
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 245
            $context["row_class"] = ($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 245, $this->source) . " form-check-inline");
        }
        // line 247
        if ( !twig_test_empty(($context["row_class"] ?? null))) {
            // line 248
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 248, $this->source), "html", null, true);
            echo "\">";
        }
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 250, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        // line 251
        if ( !twig_test_empty(($context["row_class"] ?? null))) {
            // line 252
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 256
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 257
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 257, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 257)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 257), 257, $this->source), "")) : ("")) . " form-select"))]);
        // line 258
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 261
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 262
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 264
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 264, $this->source), 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 265
($context["label_attr"] ?? null), "class", [], "any", true, true, true, 265)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 265), 265, $this->source), "")) : ("")), "translation_domain" =>             // line 266
($context["choice_translation_domain"] ?? null), "valid" =>             // line 267
($context["valid"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 275
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 276
        if ( !(($context["label"] ?? null) === false)) {
            // line 277
            $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 277, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 277)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 277), 277, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 277)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 277), 277, $this->source), "")) : (""))));
            // line 278
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 279
                $context["element"] = "legend";
                // line 280
                if (!twig_in_filter("col-form-label", ($context["parent_label_class"] ?? null))) {
                    // line 281
                    $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 281, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 281)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 281), 281, $this->source), "")) : ("")) . " col-form-label"))]);
                }
            } else {
                // line 284
                $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 284, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 284)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 284), 284, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 284)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 284), 284, $this->source), "")) : (""))));
                // line 285
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 285, $this->source), ["for" => ($context["id"] ?? null)]);
                // line 286
                if (!twig_in_filter("col-form-label", ($context["parent_label_class"] ?? null))) {
                    // line 287
                    $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 287, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 287)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 287), 287, $this->source), "")) : ("")) . ((twig_in_filter("input-group", ($context["row_class"] ?? null))) ? (" input-group-text") : (" form-label"))))]);
                }
            }
        }
        // line 291
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 294
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 296
        if (array_key_exists("widget", $context)) {
            // line 297
            $context["label_attr_class"] = ((array_key_exists("label_attr_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_attr_class"] ?? null), 297, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 297)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 297), 297, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 297)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 297), 297, $this->source), "")) : (""))));
            // line 298
            if (!twig_in_filter("btn", ($context["label_attr_class"] ?? null))) {
                // line 299
                $context["label_attr_class"] = ($this->sandbox->ensureToStringAllowed(($context["label_attr_class"] ?? null), 299, $this->source) . " form-check-label");
            }
            // line 301
            $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 301, $this->source), ["class" => twig_trim_filter($this->sandbox->ensureToStringAllowed(($context["label_attr_class"] ?? null), 301, $this->source))]);
            // line 302
            if ( !($context["compound"] ?? null)) {
                // line 303
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 303, $this->source), ["for" => ($context["id"] ?? null)]);
            }
            // line 305
            if (($context["required"] ?? null)) {
                // line 306
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 306, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 306)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 306), 306, $this->source), "")) : ("")) . " required"))]);
            }
            // line 308
            if (array_key_exists("parent_label_class", $context)) {
                // line 309
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 309, $this->source), ["class" => twig_trim_filter(twig_replace_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 309)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 309), 309, $this->source), "")) : ("")) . " ") . $this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 309, $this->source)), ["checkbox-inline" => "", "radio-inline" => ""]))]);
            }
            // line 312
            echo $this->sandbox->ensureToStringAllowed(($context["widget"] ?? null), 312, $this->source);
            echo "
        <label";
            // line 313
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 313, $this->getSourceContext());
            }
            $__internal_compile_5 = twig_to_array($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            echo ">";
            // line 314
            if ( !(($context["label"] ?? null) === false)) {
                // line 315
                $this->displayBlock("form_label_content", $context, $blocks);
            }
            // line 317
            echo "</label>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 323
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 324
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
            // line 325
            $context["element"] = "fieldset";
        }
        // line 327
        $context["widget_attr"] = [];
        // line 328
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 329
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 329, $this->source) . "_help")]];
        }
        // line 331
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 331, $this->source), twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 331)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 331), 331, $this->source), "mb-3")) : ("mb-3"))))) : (twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 331)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 331), 331, $this->source), "mb-3")) : ("mb-3")))));
        // line 332
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 332, $this->source), "div")) : ("div")), "html", null, true);
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => ($context["row_class"] ?? null)])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 332, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 333
        if (twig_in_filter("form-floating", ($context["row_class"] ?? null))) {
            // line 334
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 334, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 334, $this->source));
            // line 335
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 335, $this->source), 'label');
        } else {
            // line 337
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 337, $this->source), 'label');
            // line 338
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 338, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 338, $this->source));
        }
        // line 340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 340, $this->source), 'help');
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 341, $this->source), 'errors');
        // line 342
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 342, $this->source), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 345
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 346
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 346)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 346), "mb-3")) : ("mb-3")))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 346, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 347
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 347, $this->source), 'widget');
        // line 348
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 353
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 354
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 355
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 356
                echo "<div class=\"";
                if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                    echo "invalid-feedback";
                } else {
                    echo "alert alert-danger";
                }
                echo " d-block\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 363
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 364
        $context["row_class"] = ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 364)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 364), 364, $this->source), "")) : (""));
        // line 365
        echo "    ";
        $context["help_class"] = " form-text";
        // line 366
        echo "    ";
        if (twig_in_filter("input-group", ($context["row_class"] ?? null))) {
            // line 368
            $context["help_class"] = " input-group-text";
            // line 369
            echo "    ";
        }
        // line 370
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 371
            $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 371, $this->source), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 371)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 371), 371, $this->source), "")) : ("")) . $this->sandbox->ensureToStringAllowed(($context["help_class"] ?? null), 371, $this->source)) . " mb-0"))]);
        }
        // line 373
        $this->displayParentBlock("form_help", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_5_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1046 => 373,  1043 => 371,  1041 => 370,  1038 => 369,  1036 => 368,  1033 => 366,  1030 => 365,  1028 => 364,  1021 => 363,  1001 => 356,  997 => 355,  995 => 354,  988 => 353,  981 => 348,  979 => 347,  967 => 346,  960 => 345,  951 => 342,  949 => 341,  947 => 340,  944 => 338,  942 => 337,  939 => 335,  937 => 334,  935 => 333,  922 => 332,  920 => 331,  917 => 329,  915 => 328,  913 => 327,  910 => 325,  908 => 324,  901 => 323,  893 => 317,  890 => 315,  888 => 314,  877 => 313,  873 => 312,  870 => 309,  868 => 308,  865 => 306,  863 => 305,  860 => 303,  858 => 302,  856 => 301,  853 => 299,  851 => 298,  849 => 297,  847 => 296,  840 => 294,  833 => 291,  828 => 287,  826 => 286,  824 => 285,  822 => 284,  818 => 281,  816 => 280,  814 => 279,  812 => 278,  810 => 277,  808 => 276,  801 => 275,  794 => 270,  788 => 267,  787 => 266,  786 => 265,  785 => 264,  781 => 263,  777 => 262,  770 => 261,  763 => 258,  761 => 257,  754 => 256,  746 => 252,  744 => 251,  742 => 250,  737 => 248,  735 => 247,  732 => 245,  730 => 244,  728 => 243,  726 => 242,  723 => 240,  721 => 239,  719 => 238,  717 => 237,  715 => 236,  708 => 235,  700 => 231,  698 => 230,  696 => 229,  691 => 227,  689 => 226,  686 => 224,  684 => 223,  681 => 221,  679 => 220,  677 => 219,  675 => 218,  672 => 216,  670 => 215,  668 => 214,  666 => 213,  664 => 212,  657 => 211,  650 => 208,  648 => 207,  641 => 206,  634 => 203,  632 => 202,  625 => 201,  618 => 198,  615 => 197,  612 => 196,  610 => 195,  603 => 194,  596 => 191,  593 => 190,  590 => 189,  588 => 188,  586 => 187,  583 => 185,  580 => 183,  578 => 182,  576 => 181,  574 => 180,  572 => 179,  570 => 178,  563 => 177,  555 => 173,  549 => 170,  547 => 169,  545 => 168,  543 => 167,  536 => 166,  528 => 162,  524 => 161,  519 => 158,  515 => 157,  512 => 156,  510 => 155,  505 => 152,  501 => 151,  498 => 150,  496 => 149,  491 => 146,  487 => 145,  484 => 144,  482 => 143,  477 => 140,  473 => 139,  470 => 138,  468 => 137,  463 => 134,  459 => 133,  456 => 132,  454 => 131,  449 => 128,  445 => 127,  442 => 126,  440 => 125,  435 => 122,  431 => 121,  428 => 120,  426 => 119,  422 => 118,  419 => 117,  417 => 116,  414 => 115,  412 => 114,  409 => 112,  407 => 111,  400 => 110,  392 => 106,  390 => 105,  388 => 104,  386 => 103,  384 => 102,  380 => 101,  377 => 100,  375 => 99,  372 => 98,  370 => 97,  367 => 95,  365 => 94,  358 => 93,  349 => 88,  347 => 87,  343 => 85,  341 => 84,  338 => 82,  336 => 81,  334 => 80,  331 => 78,  329 => 77,  327 => 76,  325 => 75,  321 => 73,  319 => 72,  316 => 70,  312 => 69,  308 => 68,  306 => 67,  304 => 66,  302 => 65,  297 => 63,  295 => 62,  292 => 61,  290 => 60,  287 => 59,  285 => 58,  282 => 56,  280 => 55,  273 => 54,  264 => 49,  262 => 48,  260 => 47,  258 => 45,  257 => 44,  256 => 43,  255 => 42,  253 => 41,  250 => 39,  248 => 38,  246 => 37,  244 => 36,  242 => 35,  240 => 34,  235 => 32,  233 => 31,  230 => 30,  228 => 29,  225 => 28,  223 => 27,  220 => 25,  218 => 24,  211 => 23,  203 => 19,  200 => 17,  195 => 15,  193 => 14,  191 => 13,  186 => 11,  184 => 10,  180 => 9,  178 => 8,  176 => 7,  174 => 6,  167 => 5,  160 => 363,  157 => 360,  155 => 353,  152 => 350,  150 => 345,  148 => 323,  145 => 320,  143 => 294,  141 => 275,  138 => 272,  136 => 261,  134 => 256,  132 => 235,  130 => 211,  128 => 206,  126 => 201,  124 => 194,  122 => 177,  119 => 176,  117 => 166,  114 => 165,  112 => 110,  109 => 109,  107 => 93,  104 => 92,  102 => 54,  99 => 53,  97 => 23,  94 => 22,  92 => 5,  89 => 4,  86 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_5_layout.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_5_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "set" => 6, "if" => 8, "for" => 263, "with" => 313);
        static $filters = array("escape" => 9, "default" => 9, "form_encode_currency" => 11, "merge" => 28, "trim" => 28, "raw" => 46, "replace" => 42, "length" => 354);
        static $functions = array("form_label" => 36, "form_widget" => 43, "form_errors" => 103, "form_help" => 340);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'for', 'with'],
                ['escape', 'default', 'form_encode_currency', 'merge', 'trim', 'raw', 'replace', 'length'],
                ['form_label', 'form_widget', 'form_errors', 'form_help']
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
