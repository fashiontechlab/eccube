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

/* @admin/Order/order_pdf.twig */
class __TwigTemplate_162c6880b9ddac20f4b78d5227e318c4 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
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

        // line 13
        $context["menus"] = ["order", "order_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/order_pdf.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note_short"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style type=\"text/css\">
        .c-container {
            min-width: inherit;
            margin-top: 0;
        }

        .c-headerBar {
            display: none;
            height: inherit;
        }

        .c-headerBar__toggleBtn,
        .c-mainNavArea {
            display: none;
        }
    </style>
";
    }

    // line 39
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <script type=\"text/javascript\">
        \$(function() {
            var close = \$('#windowclose');

            \$('.btn-ec-regular').on('click', function() {
                window.open('about:blank', '_self').close();
            });

        });

        Ladda.bind('button[type=\"submit\"]', {timeout: 3000});
    </script>
";
    }

    // line 54
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    <form role=\"form\" name=\"order_pdf_form\" id=\"order_pdf_form\" method=\"post\" action=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_pdf_download");
        echo "\">
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 56), 56, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <h4 class=\"box-title fw-bold\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
        echo "</h4>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_create_date"), "html", null, true);
        echo "</label>
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "issue_date", [], "any", false, false, true, 68), 68, $this->source), 'widget');
        echo "
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "issue_date", [], "any", false, false, true, 69), 69, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_id"), "html", null, true);
        echo "</label>
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ids", [], "any", false, false, true, 74), 74, $this->source), 'widget');
        echo "
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ids", [], "any", false, false, true, 75), 75, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_title"), "html", null, true);
        echo "</label>
                                <span class=\"badge bg-primary ml-1\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 81), 81, $this->source), 'widget');
        echo "
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 82), 82, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_output_format"), "html", null, true);
        echo "</label>
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "download_kind", [], "any", false, false, true, 87), 87, $this->source), 'widget');
        echo "
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "download_kind", [], "any", false, false, true, 88), 88, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"fw-bold\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_message"), "html", null, true);
        echo "</div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_line1"), "html", null, true);
        echo "</label>
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message1", [], "any", false, false, true, 95), 95, $this->source), 'widget');
        echo "
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message1", [], "any", false, false, true, 96), 96, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_line2"), "html", null, true);
        echo "</label>
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message2", [], "any", false, false, true, 101), 101, $this->source), 'widget');
        echo "
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message2", [], "any", false, false, true, 102), 102, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_line3"), "html", null, true);
        echo "</label>
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message3", [], "any", false, false, true, 107), 107, $this->source), 'widget');
        echo "
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message3", [], "any", false, false, true, 108), 108, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"fw-bold\">";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_memo"), "html", null, true);
        echo "</div>
                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_line1"), "html", null, true);
        echo "</label>
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note1", [], "any", false, false, true, 114), 114, $this->source), 'widget');
        echo "
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note1", [], "any", false, false, true, 115), 115, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_line2"), "html", null, true);
        echo "</label>
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note2", [], "any", false, false, true, 120), 120, $this->source), 'widget');
        echo "
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note2", [], "any", false, false, true, 121), 121, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_note_line3"), "html", null, true);
        echo "</label>
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note3", [], "any", false, false, true, 126), 126, $this->source), 'widget');
        echo "
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note3", [], "any", false, false, true, 127), 127, $this->source), 'errors');
        echo "
                            </div>

                            <div class=\"mb-3 text-end\">
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "default", [], "any", false, false, true, 132), 132, $this->source), 'widget');
        echo "
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "default", [], "any", false, false, true, 133), 133, $this->source), 'errors');
        echo "
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <button class=\"btn btn-ec-regular px-5\" type=\"button\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Order/order_pdf.twig";
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
        return array (  348 => 154,  339 => 148,  321 => 133,  317 => 132,  309 => 127,  305 => 126,  301 => 125,  294 => 121,  290 => 120,  286 => 119,  279 => 115,  275 => 114,  271 => 113,  266 => 111,  260 => 108,  256 => 107,  252 => 106,  245 => 102,  241 => 101,  237 => 100,  230 => 96,  226 => 95,  222 => 94,  216 => 91,  210 => 88,  206 => 87,  202 => 86,  195 => 82,  191 => 81,  187 => 80,  183 => 79,  176 => 75,  172 => 74,  168 => 73,  161 => 69,  157 => 68,  153 => 67,  145 => 62,  136 => 56,  131 => 55,  127 => 54,  111 => 40,  107 => 39,  87 => 21,  83 => 20,  76 => 16,  69 => 15,  64 => 11,  62 => 18,  60 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/order_pdf.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Order/order_pdf.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 55, "form_widget" => 56, "form_errors" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'form_errors']
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
