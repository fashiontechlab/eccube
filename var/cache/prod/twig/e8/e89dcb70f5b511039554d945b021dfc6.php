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

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_9fb3e90b37d0bb6b5086dda0ad698638 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
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
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 61
        echo "
";
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('form_label', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('choice_label', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('radio_label', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 127
        echo "
";
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('form_row', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('button_row', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('choice_row', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('date_row', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('time_row', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('radio_row', $context, $blocks);
        // line 184
        echo "
";
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('form_errors', $context, $blocks);
        // line 198
        echo "
";
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 7
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 7, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 7)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 7), 7, $this->source), "")) : ("")) . " form-control"))]);
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 13, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 13)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 13), 13, $this->source), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 19
        echo "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 20
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 21
            echo "        <div class=\"input-group\">
            ";
            // line 22
            if (($context["prepend"] ?? null)) {
                // line 23
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 23, $this->source));
                echo "</span>
            ";
            }
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-addon\">";
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
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 36, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 36)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 36), 36, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 36)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 36), 36, $this->source), "")) : (""))));
        // line 37
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 38, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            echo "<div class=\"checkbox\">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 41, $this->source), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            echo "</div>";
        }
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 47, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 47)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 47), 47, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 47)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 47), 47, $this->source), "")) : (""))));
        // line 48
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 49, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            echo "<div class=\"radio\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 52, $this->source), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            echo "</div>";
        }
    }

    // line 57
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 58, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, true, 58)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, true, 58), 58, $this->source), "")) : ("")) . " form-control"))]);
        // line 59
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 64
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 65, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 65)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 65), 65, $this->source), "")) : ("")) . " control-label"))]);
        // line 66
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 69
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 71, $this->source), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 71)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 71), 71, $this->source), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 72
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 75
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 76, $this->source), ["for" => ($context["id"] ?? null)]);
        // line 78
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 81
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 82, $this->source), ["for" => ($context["id"] ?? null)]);
        // line 84
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 87
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        if (array_key_exists("widget", $context)) {
            // line 90
            if (($context["required"] ?? null)) {
                // line 91
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 91, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 91)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 91), 91, $this->source), "")) : ("")) . " required"))]);
            }
            // line 93
            if (array_key_exists("parent_label_class", $context)) {
                // line 94
                $context["embed_label_classes"] = twig_array_filter($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent_label_class"] ?? null), 94, $this->source), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return twig_in_filter(($context["class"] ?? null), ["checkbox-inline", "radio-inline"]); });
                // line 95
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 95, $this->source), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 95)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 95), 95, $this->source), "")) : ("")) . " ") . twig_join_filter($this->sandbox->ensureToStringAllowed(($context["embed_label_classes"] ?? null), 95, $this->source), " ")))]);
            }
            // line 97
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 98
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 99
                    $context["label"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["label_format"] ?? null), 99, $this->source), ["%name%" =>                     // line 100
($context["name"] ?? null), "%id%" =>                     // line 101
($context["id"] ?? null)]);
                } else {
                    // line 104
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 104, $this->source));
                }
            }
            // line 107
            echo "<label";
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 107, $this->getSourceContext());
            }
            $__internal_compile_5 = twig_to_array($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            echo ">";
            // line 109
            echo $this->sandbox->ensureToStringAllowed(($context["widget"] ?? null), 109, $this->source);
            echo " ";
            if ( !(($context["label"] ?? null) === false)) {
                // line 110
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 111
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 112
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 112, $this->source), "html", null, true);
                    } else {
                        // line 114
                        echo $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 114, $this->source);
                    }
                } else {
                    // line 117
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 118
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 118, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 118, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 118, $this->source)), "html", null, true);
                    } else {
                        // line 120
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 120, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 120, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 120, $this->source));
                    }
                }
            }
            // line 124
            echo "</label>";
        }
    }

    // line 130
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        $context["widget_attr"] = [];
        // line 132
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 133
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 133, $this->source) . "_help")]];
        }
        // line 135
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 135), "")) : ("")) . " form-group") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 135, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 136, $this->source), 'label');
        echo " ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 137, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 137, $this->source));
        echo " ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 138, $this->source), 'help');
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 139, $this->source), 'errors');
        echo " ";
        // line 140
        echo "</div> ";
    }

    // line 143
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 144), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 144, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 145, $this->source), 'widget');
        // line 146
        echo "</div>";
    }

    // line 149
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        $context["force_error"] = true;
        // line 151
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 154
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        $context["force_error"] = true;
        // line 156
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 159
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        $context["force_error"] = true;
        // line 161
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 164
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        $context["force_error"] = true;
        // line 166
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 169
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 170)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 170), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 170, $this->getSourceContext());
        }
        $__internal_compile_11 = twig_to_array($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        echo ">";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 171, $this->source), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 172, $this->source), 'help');
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 173, $this->source), 'errors');
        // line 174
        echo "</div>";
    }

    // line 177
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "<div";
        $__internal_compile_12 = $context;
        $__internal_compile_13 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 178)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 178), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_13)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 178, $this->getSourceContext());
        }
        $__internal_compile_13 = twig_to_array($__internal_compile_13);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_13));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_12;
        echo ">";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 179, $this->source), 'widget');
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 180, $this->source), 'help');
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 181, $this->source), 'errors');
        // line 182
        echo "</div>";
    }

    // line 187
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 189
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 190
            echo "    <ul class=\"list-unstyled\">";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 192
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "</ul>
    ";
            // line 195
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    // line 201
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 203
            $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 203, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 203)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 203), 203, $this->source), "")) : ("")) . " help-block"))]);
            // line 204
            echo "<span id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 204, $this->source), "html", null, true);
            echo "_help\"";
            $__internal_compile_14 = $context;
            $__internal_compile_15 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_15)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 204, $this->getSourceContext());
            }
            $__internal_compile_15 = twig_to_array($__internal_compile_15);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_15));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_14;
            echo ">";
            // line 205
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 206
                if ((($context["help_html"] ?? null) === false)) {
                    // line 207
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 207, $this->source), "html", null, true);
                } else {
                    // line 209
                    echo $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 209, $this->source);
                }
            } else {
                // line 212
                if ((($context["help_html"] ?? null) === false)) {
                    // line 213
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 213, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 213, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 213, $this->source)), "html", null, true);
                } else {
                    // line 215
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 215, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 215, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 215, $this->source));
                }
            }
            // line 218
            echo "</span>";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  666 => 218,  662 => 215,  659 => 213,  657 => 212,  653 => 209,  650 => 207,  648 => 206,  646 => 205,  632 => 204,  630 => 203,  628 => 202,  624 => 201,  615 => 195,  612 => 194,  604 => 192,  600 => 191,  598 => 190,  592 => 189,  590 => 188,  586 => 187,  582 => 182,  580 => 181,  578 => 180,  576 => 179,  564 => 178,  560 => 177,  556 => 174,  554 => 173,  552 => 172,  550 => 171,  538 => 170,  534 => 169,  530 => 166,  528 => 165,  524 => 164,  520 => 161,  518 => 160,  514 => 159,  510 => 156,  508 => 155,  504 => 154,  500 => 151,  498 => 150,  494 => 149,  490 => 146,  488 => 145,  476 => 144,  472 => 143,  468 => 140,  465 => 139,  463 => 138,  460 => 137,  457 => 136,  445 => 135,  442 => 133,  440 => 132,  438 => 131,  434 => 130,  429 => 124,  424 => 120,  421 => 118,  419 => 117,  415 => 114,  412 => 112,  410 => 111,  408 => 110,  404 => 109,  392 => 107,  388 => 104,  385 => 101,  384 => 100,  383 => 99,  381 => 98,  379 => 97,  376 => 95,  374 => 94,  372 => 93,  369 => 91,  367 => 90,  365 => 89,  361 => 87,  357 => 84,  355 => 82,  351 => 81,  347 => 78,  345 => 76,  341 => 75,  337 => 72,  335 => 71,  331 => 69,  327 => 66,  325 => 65,  321 => 64,  317 => 59,  315 => 58,  311 => 57,  306 => 53,  304 => 52,  302 => 51,  299 => 49,  297 => 48,  295 => 47,  291 => 46,  286 => 42,  284 => 41,  282 => 40,  279 => 38,  277 => 37,  275 => 36,  271 => 35,  266 => 31,  262 => 29,  256 => 27,  254 => 26,  252 => 25,  246 => 23,  244 => 22,  241 => 21,  238 => 20,  235 => 19,  233 => 18,  229 => 17,  225 => 14,  223 => 13,  219 => 12,  215 => 9,  212 => 7,  210 => 6,  206 => 5,  202 => 201,  199 => 200,  196 => 198,  194 => 187,  191 => 186,  188 => 184,  186 => 177,  183 => 176,  181 => 169,  178 => 168,  176 => 164,  173 => 163,  171 => 159,  168 => 158,  166 => 154,  163 => 153,  161 => 149,  158 => 148,  156 => 143,  153 => 142,  151 => 130,  148 => 129,  145 => 127,  143 => 87,  140 => 86,  138 => 81,  135 => 80,  133 => 75,  130 => 74,  128 => 69,  125 => 68,  123 => 64,  120 => 63,  117 => 61,  115 => 57,  112 => 56,  110 => 46,  107 => 45,  105 => 35,  102 => 34,  100 => 17,  97 => 16,  95 => 12,  92 => 11,  90 => 5,  87 => 4,  84 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_layout.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "if" => 6, "set" => 7, "with" => 107, "for" => 191);
        static $filters = array("merge" => 7, "trim" => 7, "default" => 7, "form_encode_currency" => 23, "replace" => 71, "filter" => 94, "split" => 94, "join" => 95, "humanize" => 104, "raw" => 109, "escape" => 112, "trans" => 118, "length" => 188);
        static $functions = array("form_label" => 38, "form_widget" => 137, "form_help" => 138, "form_errors" => 139);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'with', 'for'],
                ['merge', 'trim', 'default', 'form_encode_currency', 'replace', 'filter', 'split', 'join', 'humanize', 'raw', 'escape', 'trans', 'length'],
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
