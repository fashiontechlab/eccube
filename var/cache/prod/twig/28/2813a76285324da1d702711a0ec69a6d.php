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

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_79e9eb653a9463ef0f9c49b3f3828f92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'money_widget' => [$this, 'block_money_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_errors' => [$this, 'block_form_label_errors'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
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
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('date_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('time_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('file_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('button_widget', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 222
        echo "
";
        // line 224
        echo "
";
        // line 225
        $this->displayBlock('form_label', $context, $blocks);
        // line 247
        echo "
";
        // line 248
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 278
        echo "
";
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('form_row', $context, $blocks);
        // line 295
        echo "
";
        // line 297
        echo "
";
        // line 298
        $this->displayBlock('form_errors', $context, $blocks);
        // line 309
        echo "
";
        // line 311
        echo "
";
        // line 312
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                echo "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 12, $this->source));
                echo "</span>
                </div>";
            }
            // line 15
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 16
            if (($context["append"] ?? null)) {
                // line 17
                echo "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 18, $this->source));
                echo "</span>
                </div>";
            }
            // line 21
            echo "</div>";
        } else {
            // line 23
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 27
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 29
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 29, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 29)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 29), 29, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 30
            $context["valid"] = true;
        }
        // line 32
        $this->displayParentBlock("datetime_widget", $context, $blocks);
    }

    // line 35
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 37
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 37, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 37)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 37), 37, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 38
            $context["valid"] = true;
        }
        // line 40
        $this->displayParentBlock("date_widget", $context, $blocks);
    }

    // line 43
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 45
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 45, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 45)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 45), 45, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 46
            $context["valid"] = true;
        }
        // line 48
        $this->displayParentBlock("time_widget", $context, $blocks);
    }

    // line 51
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 53
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 53, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 53)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 53), 53, $this->source), "")) : ("")) . " form-control is-invalid"))]);
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 59, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 59)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 59), 59, $this->source), "")) : ("")) . " form-inline"))]);
            // line 60
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 61
            if (($context["with_years"] ?? null)) {
                // line 62
                echo "<div class=\"col-auto\">
                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 63), 63, $this->source), 'label');
                echo "
                ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 64), 64, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 67
            if (($context["with_months"] ?? null)) {
                // line 68
                echo "<div class=\"col-auto\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 69), 69, $this->source), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 70), 70, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 73
            if (($context["with_weeks"] ?? null)) {
                // line 74
                echo "<div class=\"col-auto\">
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 75), 75, $this->source), 'label');
                echo "
                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 76), 76, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 79
            if (($context["with_days"] ?? null)) {
                // line 80
                echo "<div class=\"col-auto\">
                ";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 81), 81, $this->source), 'label');
                echo "
                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 82), 82, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 85
            if (($context["with_hours"] ?? null)) {
                // line 86
                echo "<div class=\"col-auto\">
                ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 87), 87, $this->source), 'label');
                echo "
                ";
                // line 88
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 88), 88, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 91
            if (($context["with_minutes"] ?? null)) {
                // line 92
                echo "<div class=\"col-auto\">
                ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 93), 93, $this->source), 'label');
                echo "
                ";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 94), 94, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 97
            if (($context["with_seconds"] ?? null)) {
                // line 98
                echo "<div class=\"col-auto\">
                ";
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 99), 99, $this->source), 'label');
                echo "
                ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 100), 100, $this->source), 'widget');
                echo "
            </div>";
            }
            // line 103
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, true, 103), 103, $this->source), 'widget');
            }
            // line 104
            echo "</div>";
        }
    }

    // line 108
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        if (($context["symbol"] ?? null)) {
            // line 110
            echo "<div class=\"input-group\">";
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 112
            echo "<div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 113
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["symbol"] ?? null), 113, $this->source), "%")) : ("%")), "html", null, true);
            echo "</span>
            </div>
        </div>";
        } else {
            // line 117
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 121
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 122, $this->source), "div")) : ("div")), "html", null, true);
        echo " class=\"custom-file\">";
        // line 123
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 123, $this->source), "file")) : ("file"));
        // line 124
        $context["input_lang"] = "en";
        // line 125
        if ((array_key_exists("app", $context) && twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", true, true, true, 125))) {
            $context["input_lang"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 125), "locale", [], "any", false, false, true, 125);
        }
        // line 126
        $context["attr"] = twig_array_merge(["lang" => ($context["input_lang"] ?? null)], $this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 126, $this->source));
        // line 127
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 128
        $context["label_attr"] = twig_array_filter($this->env, twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 128, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 128)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 128), 128, $this->source), "")) : ("")) . " custom-file-label"))]), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return (($context["key"] ?? null) != "id"); });
        // line 129
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 129), "id", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "\" ";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 129, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        echo ">";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true, true, 130) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, true, 130)))) {
            // line 131
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, true, 131)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, true, 131), 131, $this->source), [], $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 131, $this->source)))), "html", null, true);
        }
        // line 133
        echo "</label>
    </";
        // line 134
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 134, $this->source), "div")) : ("div")), "html", null, true);
        echo ">
";
    }

    // line 137
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        if (( !array_key_exists("type", $context) || (($context["type"] ?? null) != "hidden"))) {
            // line 139
            $context["className"] = " form-control";
            // line 140
            if ((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "file")) {
                // line 141
                $context["className"] = " custom-file-input";
            } elseif ((((            // line 142
array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "range")) {
                // line 143
                $context["className"] = " form-control-range";
            }
            // line 145
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 145, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 145)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 145), 145, $this->source), "")) : ("")) . $this->sandbox->ensureToStringAllowed(($context["className"] ?? null), 145, $this->source)))]);
        }
        // line 147
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 148
            echo "        ";
            // line 149
            $context["required"] = false;
        }
        // line 151
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 154
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        if ( !($context["valid"] ?? null)) {
            // line 156
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 156, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 156)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 156), 156, $this->source), "")) : ("")) . " is-invalid"))]);
        }
        // line 158
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 161
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 162, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 162)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 162), 162, $this->source), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        // line 163
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 166
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 167, $this->source), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 167)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 167), 167, $this->source), "btn-primary")) : ("btn-primary")))]);
        // line 168
        $this->displayParentBlock("submit_widget", $context, $blocks);
    }

    // line 171
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 172, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 172)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 172), 172, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 172)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 172), 172, $this->source), "")) : (""))));
        // line 173
        if (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null))) {
            // line 174
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 174, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 174)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 174), 174, $this->source), "")) : ("")) . " custom-control-input"))]);
            // line 175
            echo "<div class=\"custom-control custom-checkbox";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 176
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 176, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 177
            echo "</div>";
        } elseif (twig_in_filter("switch-custom",         // line 178
($context["parent_label_class"] ?? null))) {
            // line 179
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 179, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 179)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 179), 179, $this->source), "")) : ("")) . " custom-control-input"))]);
            // line 180
            echo "<div class=\"custom-control custom-switch";
            echo ((twig_in_filter("switch-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 181, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 182
            echo "</div>";
        } else {
            // line 184
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 184, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 184)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 184), 184, $this->source), "")) : ("")) . " form-check-input"))]);
            // line 185
            echo "<div class=\"form-check";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 186, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 187
            echo "</div>";
        }
    }

    // line 191
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 192, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 192)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 192), 192, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 192)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 192), 192, $this->source), "")) : (""))));
        // line 193
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 194
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 194, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 194)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 194), 194, $this->source), "")) : ("")) . " custom-control-input"))]);
            // line 195
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 196, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 197
            echo "</div>";
        } else {
            // line 199
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 199, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 199)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 199), 199, $this->source), "")) : ("")) . " form-check-input"))]);
            // line 200
            echo "<div class=\"form-check";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 201
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 201, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 202
            echo "</div>";
        }
    }

    // line 206
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 207, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 207)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 207), 207, $this->source), "")) : ("")) . " form-control"))]);
        // line 208
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 211
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 214, $this->source), 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 215
($context["label_attr"] ?? null), "class", [], "any", true, true, true, 215)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 215), 215, $this->source), "")) : ("")), "translation_domain" =>             // line 216
($context["choice_translation_domain"] ?? null), "valid" =>             // line 217
($context["valid"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "</div>";
    }

    // line 225
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        if ( !(($context["label"] ?? null) === false)) {
            // line 227
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 228
                $context["element"] = "legend";
                // line 229
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 229, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 229)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 229), 229, $this->source), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 231
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 231, $this->source), ["for" => ($context["id"] ?? null)]);
            }
            // line 233
            if (($context["required"] ?? null)) {
                // line 234
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 234, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 234)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 234), 234, $this->source), "")) : ("")) . " required"))]);
            }
            // line 236
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 236, $this->source), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_6 = $context;
                $__internal_compile_7 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($__internal_compile_7)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 236, $this->getSourceContext());
                }
                $__internal_compile_7 = twig_to_array($__internal_compile_7);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_6;
            }
            echo ">";
            // line 237
            $this->displayBlock("form_label_content", $context, $blocks);
            // line 238
            $this->displayBlock('form_label_errors', $context, $blocks);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 238, $this->source), "label")) : ("label")), "html", null, true);
            echo ">";
        } else {
            // line 240
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 241
                echo "<div id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 241, $this->source), "html", null, true);
                echo "_errors\" class=\"mb-2\">";
                // line 242
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 242, $this->source), 'errors');
                // line 243
                echo "</div>";
            }
        }
    }

    // line 238
    public function block_form_label_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 238, $this->source), 'errors');
    }

    // line 248
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        if (array_key_exists("widget", $context)) {
            // line 251
            $context["is_parent_custom"] = (array_key_exists("parent_label_class", $context) && ((twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null)) || twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) || twig_in_filter("switch-custom", ($context["parent_label_class"] ?? null))));
            // line 252
            echo "        ";
            $context["is_custom"] = (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 252) && ((twig_in_filter("checkbox-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 252)) || twig_in_filter("radio-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 252))) || twig_in_filter("switch-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 252))));
            // line 253
            if ((($context["is_parent_custom"] ?? null) || ($context["is_custom"] ?? null))) {
                // line 254
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 254, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 254)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 254), 254, $this->source), "")) : ("")) . " custom-control-label"))]);
            } else {
                // line 256
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 256, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 256)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 256), 256, $this->source), "")) : ("")) . " form-check-label"))]);
            }
            // line 258
            if ( !($context["compound"] ?? null)) {
                // line 259
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 259, $this->source), ["for" => ($context["id"] ?? null)]);
            }
            // line 261
            if (($context["required"] ?? null)) {
                // line 262
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 262, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 262)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 262), 262, $this->source), "")) : ("")) . " required"))]);
            }
            // line 264
            if (array_key_exists("parent_label_class", $context)) {
                // line 265
                $context["embed_label_classes"] = twig_array_filter($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 265, $this->source), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return twig_in_filter(($context["class"] ?? null), ["checkbox-inline", "radio-inline"]); });
                // line 266
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 266, $this->source), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 266)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 266), 266, $this->source), "")) : ("")) . " ") . twig_join_filter($this->sandbox->ensureToStringAllowed(($context["embed_label_classes"] ?? null), 266, $this->source), " ")))]);
            }
            // line 268
            echo "
        ";
            // line 269
            echo $this->sandbox->ensureToStringAllowed(($context["widget"] ?? null), 269, $this->source);
            echo "
        <label";
            // line 270
            $__internal_compile_8 = $context;
            $__internal_compile_9 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($__internal_compile_9)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 270, $this->getSourceContext());
            }
            $__internal_compile_9 = twig_to_array($__internal_compile_9);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_8;
            echo ">";
            // line 271
            if ( !(($context["label"] ?? null) === false)) {
                // line 272
                $this->displayBlock("form_label_content", $context, $blocks);
            }
            // line 274
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 274, $this->source), 'errors');
            // line 275
            echo "</label>";
        }
    }

    // line 281
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 282
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
            // line 283
            $context["element"] = "fieldset";
        }
        // line 285
        $context["widget_attr"] = [];
        // line 286
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 287
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 287, $this->source) . "_help")]];
        }
        // line 289
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 289, $this->source), "div")) : ("div")), "html", null, true);
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 289)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 289), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 289, $this->getSourceContext());
        }
        $__internal_compile_11 = twig_to_array($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        echo ">";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 290, $this->source), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 291, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 291, $this->source));
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 292, $this->source), 'help');
        // line 293
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 293, $this->source), "div")) : ("div")), "html", null, true);
        echo ">";
    }

    // line 298
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 299
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 300
            echo "<span class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo " d-block\">";
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 302
                echo "<span class=\"d-block\">
                    <span class=\"form-error-icon badge badge-danger text-uppercase\">";
                // line 303
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
                echo "</span> <span class=\"form-error-message\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "</span>
                </span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "</span>";
        }
    }

    // line 312
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 313
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 314
            $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 314, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 314)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 314), 314, $this->source), "")) : ("")) . " form-text text-muted"))]);
            // line 315
            echo "<small id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 315, $this->source), "html", null, true);
            echo "_help\"";
            $__internal_compile_12 = $context;
            $__internal_compile_13 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_13)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 315, $this->getSourceContext());
            }
            $__internal_compile_13 = twig_to_array($__internal_compile_13);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_13));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_12;
            echo ">";
            // line 316
            $this->displayBlock("form_help_content", $context, $blocks);
            // line 317
            echo "</small>";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  900 => 317,  898 => 316,  884 => 315,  882 => 314,  880 => 313,  876 => 312,  871 => 306,  861 => 303,  858 => 302,  854 => 301,  846 => 300,  844 => 299,  840 => 298,  834 => 293,  832 => 292,  830 => 291,  828 => 290,  815 => 289,  812 => 287,  810 => 286,  808 => 285,  805 => 283,  803 => 282,  799 => 281,  794 => 275,  792 => 274,  789 => 272,  787 => 271,  776 => 270,  772 => 269,  769 => 268,  766 => 266,  764 => 265,  762 => 264,  759 => 262,  757 => 261,  754 => 259,  752 => 258,  749 => 256,  746 => 254,  744 => 253,  741 => 252,  739 => 251,  737 => 250,  733 => 248,  726 => 238,  720 => 243,  718 => 242,  714 => 241,  712 => 240,  706 => 238,  704 => 237,  689 => 236,  686 => 234,  684 => 233,  681 => 231,  678 => 229,  676 => 228,  674 => 227,  672 => 226,  668 => 225,  664 => 220,  658 => 217,  657 => 216,  656 => 215,  655 => 214,  651 => 213,  647 => 212,  643 => 211,  639 => 208,  637 => 207,  633 => 206,  628 => 202,  626 => 201,  622 => 200,  620 => 199,  617 => 197,  615 => 196,  611 => 195,  609 => 194,  607 => 193,  605 => 192,  601 => 191,  596 => 187,  594 => 186,  590 => 185,  588 => 184,  585 => 182,  583 => 181,  579 => 180,  577 => 179,  575 => 178,  573 => 177,  571 => 176,  567 => 175,  565 => 174,  563 => 173,  561 => 172,  557 => 171,  553 => 168,  551 => 167,  547 => 166,  543 => 163,  541 => 162,  537 => 161,  533 => 158,  530 => 156,  528 => 155,  524 => 154,  520 => 151,  517 => 149,  515 => 148,  513 => 147,  510 => 145,  507 => 143,  505 => 142,  503 => 141,  501 => 140,  499 => 139,  497 => 138,  493 => 137,  487 => 134,  484 => 133,  481 => 131,  479 => 130,  465 => 129,  463 => 128,  461 => 127,  459 => 126,  455 => 125,  453 => 124,  451 => 123,  447 => 122,  443 => 121,  438 => 117,  432 => 113,  429 => 112,  427 => 111,  425 => 110,  423 => 109,  419 => 108,  414 => 104,  410 => 103,  405 => 100,  401 => 99,  398 => 98,  396 => 97,  391 => 94,  387 => 93,  384 => 92,  382 => 91,  377 => 88,  373 => 87,  370 => 86,  368 => 85,  363 => 82,  359 => 81,  356 => 80,  354 => 79,  349 => 76,  345 => 75,  342 => 74,  340 => 73,  335 => 70,  331 => 69,  328 => 68,  326 => 67,  321 => 64,  317 => 63,  314 => 62,  312 => 61,  308 => 60,  306 => 59,  303 => 57,  301 => 56,  298 => 54,  296 => 53,  294 => 52,  290 => 51,  286 => 48,  283 => 46,  281 => 45,  279 => 44,  275 => 43,  271 => 40,  268 => 38,  266 => 37,  264 => 36,  260 => 35,  256 => 32,  253 => 30,  251 => 29,  249 => 28,  245 => 27,  240 => 23,  237 => 21,  232 => 18,  229 => 17,  227 => 16,  225 => 15,  220 => 12,  217 => 11,  215 => 10,  211 => 9,  209 => 8,  207 => 7,  205 => 6,  201 => 5,  197 => 312,  194 => 311,  191 => 309,  189 => 298,  186 => 297,  183 => 295,  181 => 281,  178 => 280,  175 => 278,  173 => 248,  170 => 247,  168 => 225,  165 => 224,  162 => 222,  160 => 211,  157 => 210,  155 => 206,  152 => 205,  150 => 191,  147 => 190,  145 => 171,  142 => 170,  140 => 166,  137 => 165,  135 => 161,  132 => 160,  130 => 154,  127 => 153,  125 => 137,  122 => 136,  120 => 121,  117 => 120,  115 => 108,  112 => 107,  110 => 51,  107 => 50,  105 => 43,  102 => 42,  100 => 35,  97 => 34,  95 => 27,  92 => 26,  90 => 5,  87 => 4,  84 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_4_layout.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "set" => 6, "if" => 8, "with" => 129, "for" => 213);
        static $filters = array("escape" => 9, "default" => 9, "form_encode_currency" => 12, "merge" => 29, "trim" => 29, "filter" => 128, "trans" => 131, "length" => 240, "split" => 265, "join" => 266, "raw" => 269);
        static $functions = array("form_label" => 63, "form_widget" => 64, "form_errors" => 242, "form_help" => 292);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'with', 'for'],
                ['escape', 'default', 'form_encode_currency', 'merge', 'trim', 'filter', 'trans', 'length', 'split', 'join', 'raw'],
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
