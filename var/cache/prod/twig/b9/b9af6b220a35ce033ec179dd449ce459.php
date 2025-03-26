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

/* @admin/Product/csv_category.twig */
class __TwigTemplate_612c7e047ca770779559865fef59f1cd extends Template
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
        $context["menus"] = ["product", "category_csv_import"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/csv_category.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_csv_upload"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script>
        \$(function() {

            var opts = {
                lines: 13,
                length: 30,
                width: 2,
                radius: 12,
                corners: 1,
                rotate: 0,
                direction: 1,
                color: '#BBB',
                speed: 1,
                trail: 67,
                shadow: true,
                hwaccel: false,
                className: 'spinner',
                zIndex: 2e9,
                top: top
            };

            ImageSpinner = new Spinner(opts).spin(document.getElementById('spinner'));
            ImageSpinner.stop();

            \$('#upload-form').submit(function() {
                \$('#upload-button').attr('disabled', 'disabled');
                \$('#download-button').attr('disabled', 'disabled');
                ImageSpinner.spin(document.getElementById('spinner'));
            });

            \$('#file-select').click(function() {
                \$('#admin_csv_import_import_file').click();
                \$('#admin_csv_import_import_file').on('change', function() {
                    var files = \$(this).prop('files');
                    if (files.length) {
                        \$('#admin_csv_import_import_file_name').text(files[0].name);
                    }
                });
            });
        });
    </script>
";
    }

    // line 63
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.category.csv_upload"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg fa-lg ms-1\"></i></div>
                    </div>
                    <div id=\"ex-csv_category-upload\" class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\"><span>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_select"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <form id=\"upload-form\" method=\"post\" action=\"";
        // line 75
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_csv_import");
        echo "\" enctype=\"multipart/form-data\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 76), 76, $this->source), 'widget');
        echo "
                                    <div class=\"mb-2\">
                                        <span id=\"file-select\" class=\"btn btn-ec-regular me-2\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>
                                        <span id=\"admin_csv_import_import_file_name\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select_empty"), "html", null, true);
        echo "</span>
                                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "import_file", [], "any", false, false, true, 80), 80, $this->source), 'widget', ["attr" => ["accept" => "text/csv,text/tsv", "class" => "d-none"]]);
        echo "
                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "import_file", [], "any", false, false, true, 81), 81, $this->source), 'errors');
        echo "
                                    </div>
                                    <button class=\"btn btn-ec-conversion\" id=\"upload-button\" type=\"submit\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_registration"), "html", null, true);
        echo "</button>
                                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 85
            echo "                                        <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["error"], 85, $this->source), "html", null, true);
            echo "</div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                </form>
                            </div>
                        </div>
                        <div id=\"spinner\"></div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row justify-content-between\">
                            <div class=\"col-6\">
                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.category.csv_format"), "html", null, true);
        echo "\"><span class=\"align-middle\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_format"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg fa-lg ms-1\"></i></div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <a href=\"";
        // line 100
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_csv_template", ["type" => "category"]);
        echo "\" class=\"btn btn-ec-regular\" id=\"download-button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_skeleton_download"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"ex-csv_category-format\" class=\"card-body\">
                        <table class=\"table table-striped table-bordered\">
                            <tbody>
                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["header"] => $context["key"]) {
            // line 108
            echo "                                <tr>
                                    <th class=\"w-25 align-middle table-ec-lightGray\" id=\"file_format_box__header--";
            // line 109
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["header"], 109, $this->source), "html", null, true);
            echo "
                                        ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["key"], "required", [], "any", false, false, true, 110)) {
                // line 111
                echo "                                            <span class=\"badge bg-primary ms-1\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 113
            echo "                                    </th>
                                    <td class=\"align-middle\">
                                        ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, $context["key"], "description", [], "any", false, false, true, 115)) {
                // line 116
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["key"], "description", [], "any", false, false, true, 116), 116, $this->source)), "html", null, true);
                echo "
                                        ";
            }
            // line 118
            echo "                                    </td>
                                </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['header'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Product/csv_category.twig";
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
        return array (  293 => 121,  277 => 118,  271 => 116,  269 => 115,  265 => 113,  259 => 111,  257 => 110,  251 => 109,  248 => 108,  231 => 107,  219 => 100,  211 => 97,  199 => 87,  190 => 85,  186 => 84,  182 => 83,  177 => 81,  173 => 80,  169 => 79,  165 => 78,  160 => 76,  156 => 75,  151 => 73,  142 => 69,  135 => 64,  131 => 63,  86 => 21,  82 => 20,  75 => 16,  68 => 15,  63 => 11,  61 => 18,  59 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/csv_category.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Product/csv_category.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 84, "if" => 110);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 75, "form_widget" => 76, "form_errors" => 81);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
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
