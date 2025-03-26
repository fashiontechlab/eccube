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

/* SalesReport42/Resource/template/admin/product.twig */
class __TwigTemplate_8c72a7b80ca8c4edd19f1df680ba0379 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'chart' => [$this, 'block_chart'],
            'option' => [$this, 'block_option'],
            'table' => [$this, 'block_table'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "SalesReport42/Resource/template/admin/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Resource/template/admin/product.twig"));

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
        $context["report_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.report_title");
        // line 14
        $context["action"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sales_report_admin_product");
        // line 15
        $context["menus"] = ["SalesReport42", "sales_report_admin_product"];
        // line 10
        $this->parent = $this->loadTemplate("SalesReport42/Resource/template/admin/index.twig", "SalesReport42/Resource/template/admin/product.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.sub.title.product"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 18
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tempusdominus-bootstrap-4.min.css", "admin"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_chart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart"));

        // line 33
        echo "    <script>
        var graphData = ";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(($context["graphData"] ?? null), 34, $this->source);
        echo ";
        window.onload = function () {
            if (graphData != null) {
                var dataSet = graphData.datasets;
                graphData.datasets = [dataSet];
                let graphWidth = 0.8;
                if (graphData.labels.length < 5) {
                    graphWidth = 0.3;
                }
                var config = {
                    type: 'bar',
                    data: graphData,
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: \"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.001"), "html", null, true);
        echo "\" + ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "sales_report_product_maximum_display", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo " +\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.002"), "html", null, true);
        echo "\"
                        },
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return tooltipLabel + ' : ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.money.code"), "html", null, true);
        echo "' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        legend: {
                            display: false
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    minRotation: 90,
                                    maxRotation: 90
                                },
                                categoryPercentage: graphWidth
                            }],
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    },
                                    beginAtZero: true,
                                    suggestedMin: 0
                                }
                            }]
                        }
                    }
                };
                var ctx = document.getElementById(\"chart\").getContext(\"2d\");
                new Chart(ctx, config);
            }
            //export csv
            \$('#export-csv').click(function () {
                var form = document.createElement(\"form\");
                form.setAttribute(\"method\", 'POST');
                form.setAttribute(\"action\", \"";
        // line 92
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sales_report_admin_export", ["type" => "product"]);
        echo "\");
                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            });
        };
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "option"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 104
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 104), "method", [], "any", false, false, true, 104) == "POST")) {
            // line 105
            echo "        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 107
            if ( !(null === ($context["rawData"] ?? null))) {
                // line 108
                echo "                    <div class=\"col-12 text-end mb-2\">
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group d-inline-block\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-ec-regular\" id=\"export-csv\"><i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i> ";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.csv.download"), "html", null, true);
                echo "
                                </button>
                            </div>
                        </div>
                    </div>

                    <table class=\"table table-striped\" id=\"product-table\">
                        <thead>
                        <tr>
                            <th class=\"border-top-0 py-2 text-start\">";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.003"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-start\">";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.004"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.005"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.006"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-end\">";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.product.007"), "html", null, true);
                echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["rawData"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 130
                    echo "                            <tr>
                                <td class=\"align-middle text-start ps-3\">";
                    // line 131
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "OrderDetail", [], "any", false, false, true, 131), "product_code", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                    echo "</td>
                                <td class=\"align-middle text-start ps-3\">";
                    // line 132
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "OrderDetail", [], "any", false, false, true, 132), "product_name", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "OrderDetail", [], "any", false, false, true, 132), "class_category_name1", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "OrderDetail", [], "any", false, false, true, 132), "class_category_name2", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 133
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 133), 133, $this->source)), "html", null, true);
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 134
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "quantity", [], "any", false, false, true, 134), 134, $this->source)), "html", null, true);
                    echo "</td>
                                <td class=\"align-middle price-format text-end pe-3\">
                                    ";
                    // line 136
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, true, 136), 136, $this->source)), "html", null, true);
                    echo "
                                    <span class=\"d-none\">";
                    // line 137
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                    echo "</span>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                        </tbody>
                    </table>
                ";
            } else {
                // line 144
                echo "                    <div class=\"col-12\">
                        <p class=\"mb-0\">";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.nodata"), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            // line 148
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "SalesReport42/Resource/template/admin/product.twig";
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
        return array (  339 => 148,  333 => 145,  330 => 144,  325 => 141,  315 => 137,  311 => 136,  306 => 134,  302 => 133,  294 => 132,  290 => 131,  287 => 130,  283 => 129,  276 => 125,  272 => 124,  268 => 123,  264 => 122,  260 => 121,  248 => 112,  242 => 108,  240 => 107,  236 => 105,  233 => 104,  226 => 103,  214 => 101,  199 => 92,  162 => 58,  147 => 50,  128 => 34,  125 => 33,  118 => 32,  97 => 18,  90 => 17,  77 => 11,  69 => 10,  67 => 15,  65 => 14,  63 => 13,  41 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/Resource/template/admin/product.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SalesReport42/Resource/template/admin/product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 104, "for" => 129);
        static $filters = array("trans" => 13, "escape" => 11, "raw" => 34, "number_format" => 133, "price" => 136);
        static $functions = array("url" => 14, "asset" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['trans', 'escape', 'raw', 'number_format', 'price'],
                ['url', 'asset']
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
