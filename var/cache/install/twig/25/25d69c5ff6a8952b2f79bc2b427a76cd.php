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

/* @admin/Order/csv_shipping.twig */
class __TwigTemplate_b03ba1aa4c74d5ebff766bbd149f5f8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/csv_shipping.twig"));

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
        $context["menus"] = ["order", "shipping_csv_import"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/csv_shipping.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_csv_upload"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 64
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <!-- CSVファイルアップロード -->
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.shipping.csv_upload"), "html", null, true);
        echo "\">
                            <span>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload"), "html", null, true);
        echo "</span>
                            <i class=\"fa fa-question-circle fa-lg fa-lg ms-1\"></i>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <span>";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_select"), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col\">
                                <!-- ファイル選択ボタン -->
                                <form id=\"upload-form\" method=\"post\" action=\"";
        // line 82
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_csv_import");
        echo "\" enctype=\"multipart/form-data\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 83), 83, $this->source), 'widget');
        echo "
                                    <div class=\"mb-2\">
                                        <span id=\"file-select\" class=\"btn btn-ec-regular me-2\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>
                                        <span id=\"admin_csv_import_import_file_name\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select_empty"), "html", null, true);
        echo "</span>
                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "import_file", [], "any", false, false, true, 87), 87, $this->source), 'widget', ["attr" => ["accept" => "text/csv,text/tsv", "class" => "d-none"]]);
        echo "
                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "import_file", [], "any", false, false, true, 88), 88, $this->source), 'errors');
        echo "
                                    </div>
                                    <button class=\"btn btn-ec-conversion\" id=\"upload-button\" type=\"submit\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_registration"), "html", null, true);
        echo "</button>
                                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 92
            echo "                                        <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["error"], 92, $this->source), "html", null, true);
            echo "</div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                </form>
                            </div>
                        </div>
                        <div id=\"spinner\"></div>
                    </div>
                </div>
                <!-- CSVファイルフォーマット -->
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row justify-content-between\">
                            <div class=\"col-6\">
                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.shipping.csv_format"), "html", null, true);
        echo "\">
                                    <span class=\"align-middle\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_format"), "html", null, true);
        echo "</span>
                                    <i class=\"fa fa-question-circle fa-lg fa-lg ms-1\"></i>
                                </div>
                            </div>
                            <!-- 雛形ファイルダウンロード -->
                            <div class=\"col-4 text-end\">
                                <a id=\"download-button\" class=\"btn btn-ec-regular\" href=\"";
        // line 112
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_csv_template");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_skeleton_download"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-striped table-bordered\">
                            <tbody>
                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 120
            echo "                                <tr>
                                    <th class=\"w-25 align-middle table-ec-lightGray\">
                                        ";
            // line 122
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
                                        ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, $context["header"], "required", [], "any", false, false, true, 123)) {
                // line 124
                echo "                                            <span class=\"badge bg-primary ms-1\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 126
            echo "                                    </th>
                                    <td class=\"align-middle\">";
            // line 127
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "description", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                            </tbody>
                        </table>
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
        return "@admin/Order/csv_shipping.twig";
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
        return array (  304 => 130,  295 => 127,  292 => 126,  286 => 124,  284 => 123,  280 => 122,  276 => 120,  272 => 119,  260 => 112,  251 => 106,  247 => 105,  234 => 94,  225 => 92,  221 => 91,  217 => 90,  212 => 88,  208 => 87,  204 => 86,  200 => 85,  195 => 83,  191 => 82,  184 => 78,  174 => 71,  170 => 70,  162 => 64,  155 => 63,  107 => 20,  100 => 19,  87 => 16,  74 => 15,  66 => 11,  64 => 18,  62 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/csv_shipping.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Order/csv_shipping.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 91, "if" => 123);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 82, "form_widget" => 83, "form_errors" => 88);

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
