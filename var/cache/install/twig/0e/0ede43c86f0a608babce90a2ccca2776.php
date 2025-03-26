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

/* MailMagazine42/Resource/template/admin/history_condition.twig */
class __TwigTemplate_3af601133d46d625782d9f5a0ee3ad00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_condition.twig"));

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

        // line 12
        $context["menus"] = ["mailmagazine", "mailmagazine_history"];
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/history_condition.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.title"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.title"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <table class=\"table table-striped\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.multi_search_label"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 26
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "multi", [], "any", false, false, true, 26))) {
            // line 27
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 29
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "multi", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 31
        echo "
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 37
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "customer_status", [], "any", false, false, true, 37))) {
            // line 38
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 40
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "customer_status", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 42
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 47
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "sex", [], "any", false, false, true, 47))) {
            // line 48
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 50
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "sex", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 52
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.birth_month"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 57
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_month", [], "any", false, false, true, 57))) {
            // line 58
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 60
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_month", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 62
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 67
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_start", [], "any", false, false, true, 67))) {
            // line 68
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 70
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_start", [], "any", false, false, true, 70), 70, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 72
        echo "                                ～
                                ";
        // line 73
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_end", [], "any", false, false, true, 73))) {
            // line 74
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 76
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "birth_end", [], "any", false, false, true, 76), 76, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 78
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 83
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "pref", [], "any", false, false, true, 83))) {
            // line 84
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 86
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "pref", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 88
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 93
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "phone_number", [], "any", false, false, true, 93))) {
            // line 94
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 96
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "phone_number", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 98
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 103
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_start", [], "any", false, false, true, 103))) {
            // line 104
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 106
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_start", [], "any", false, false, true, 106), 106, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 108
        echo "                                ～
                                ";
        // line 109
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_end", [], "any", false, false, true, 109))) {
            // line 110
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 112
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "create_date_end", [], "any", false, false, true, 112), 112, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 114
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 119
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_start", [], "any", false, false, true, 119))) {
            // line 120
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 122
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_start", [], "any", false, false, true, 122), 122, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 124
        echo "                                ～
                                ";
        // line 125
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_end", [], "any", false, false, true, 125))) {
            // line 126
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 128
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "update_date_end", [], "any", false, false, true, 128), 128, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 130
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 135
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_start", [], "any", false, false, true, 135))) {
            // line 136
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 138
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_start", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 140
        echo "                                ～
                                ";
        // line 141
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_end", [], "any", false, false, true, 141))) {
            // line 142
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 144
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_total_end", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 146
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 151
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_start", [], "any", false, false, true, 151))) {
            // line 152
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 154
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_start", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 156
        echo "                                ～
                                ";
        // line 157
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_end", [], "any", false, false, true, 157))) {
            // line 158
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 160
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_times_end", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 162
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 167
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_product_name", [], "any", false, false, true, 167))) {
            // line 168
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 170
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "buy_product_name", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 172
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.last_buy_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 177
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_start", [], "any", false, false, true, 177))) {
            // line 178
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 180
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_start", [], "any", false, false, true, 180), 180, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 182
        echo "                                ～
                                ";
        // line 183
        if ((null === twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_end", [], "any", false, false, true, 183))) {
            // line 184
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 186
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["search_data"] ?? null), "last_buy_end", [], "any", false, false, true, 186), 186, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 188
        echo "                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"";
        // line 200
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_history");
        echo "\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.preview.btn_back"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/admin/history_condition.twig";
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
        return array (  540 => 201,  536 => 200,  522 => 188,  516 => 186,  510 => 184,  508 => 183,  505 => 182,  499 => 180,  493 => 178,  491 => 177,  486 => 175,  481 => 172,  475 => 170,  469 => 168,  467 => 167,  462 => 165,  457 => 162,  451 => 160,  445 => 158,  443 => 157,  440 => 156,  434 => 154,  428 => 152,  426 => 151,  421 => 149,  416 => 146,  410 => 144,  404 => 142,  402 => 141,  399 => 140,  393 => 138,  387 => 136,  385 => 135,  380 => 133,  375 => 130,  369 => 128,  363 => 126,  361 => 125,  358 => 124,  352 => 122,  346 => 120,  344 => 119,  339 => 117,  334 => 114,  328 => 112,  322 => 110,  320 => 109,  317 => 108,  311 => 106,  305 => 104,  303 => 103,  298 => 101,  293 => 98,  287 => 96,  281 => 94,  279 => 93,  274 => 91,  269 => 88,  263 => 86,  257 => 84,  255 => 83,  250 => 81,  245 => 78,  239 => 76,  233 => 74,  231 => 73,  228 => 72,  222 => 70,  216 => 68,  214 => 67,  209 => 65,  204 => 62,  198 => 60,  192 => 58,  190 => 57,  185 => 55,  180 => 52,  174 => 50,  168 => 48,  166 => 47,  161 => 45,  156 => 42,  150 => 40,  144 => 38,  142 => 37,  137 => 35,  131 => 31,  125 => 29,  119 => 27,  117 => 26,  112 => 24,  104 => 18,  97 => 17,  84 => 15,  71 => 14,  63 => 10,  61 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/history_condition.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/MailMagazine42/Resource/template/admin/history_condition.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 26);
        static $filters = array("escape" => 14, "trans" => 14, "date" => 70);
        static $functions = array("url" => 200);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'date'],
                ['url']
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
