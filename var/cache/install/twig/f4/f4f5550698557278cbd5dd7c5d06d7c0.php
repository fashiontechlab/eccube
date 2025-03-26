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

/* SalesReport42/Resource/template/admin/age.twig */
class __TwigTemplate_6b2da3c1487d908b7f666a6e36116416 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Resource/template/admin/age.twig"));

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
        $context["report_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.report_title");
        // line 14
        $context["action"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sales_report_admin_age");
        // line 15
        $context["menus"] = ["SalesReport42", "sales_report_admin_age"];
        // line 10
        $this->parent = $this->loadTemplate("SalesReport42/Resource/template/admin/index.twig", "SalesReport42/Resource/template/admin/age.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.sub.title.age"), "html", null, true);
        
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
            //create bar chart
            if (graphData != null) {
                var dataSet = graphData.datasets;
                graphData.datasets = [dataSet];
                var config = {
                    type: 'bar',
                    data: graphData,
                    options: {
                        responsive: true,
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return '";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.money"), "html", null, true);
        echo "' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        legend: {
                            display: false
                        },
                        scales: {
                            xAxes: [{
                                categoryPercentage: 0.3
                            }],
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    }
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
        // line 79
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sales_report_admin_export", ["type" => "age"]);
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

    // line 88
    public function block_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "option"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 91
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 91), "method", [], "any", false, false, true, 91) == "POST")) {
            // line 92
            echo "        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 94
            if ( !(null === ($context["rawData"] ?? null))) {
                // line 95
                echo "                    <div class=\"col-12 text-end mb-2\">
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group d-inline-block\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-ec-regular\" id=\"export-csv\"><i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i> ";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.csv.download"), "html", null, true);
                echo "
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class=\"table table-striped\" id=\"age-table\">
                        <thead>
                        <tr>
                            <th class=\"border-top-0 py-2 text-start\">";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.age.field.001"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.age.field.002"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-end\">";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.age.field.003"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-end\">";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.age.field.004"), "html", null, true);
                echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["rawData"] ?? null));
                foreach ($context['_seq'] as $context["age"] => $context["row"]) {
                    // line 115
                    echo "                            <tr>
                                <td class=\"align-middle ps-3\">";
                    // line 116
                    echo twig_escape_filter($this->env, ((($context["age"] == 999)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.age.list.001")) : (($this->sandbox->ensureToStringAllowed($context["age"], 116, $this->source) . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.age.list.002")))), "html", null, true);
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 117
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 117), 117, $this->source)), "html", null, true);
                    echo "</td>
                                <td class=\"price-format text-end align-middle\">
                                    ";
                    // line 119
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, true, 119), 119, $this->source)), "html", null, true);
                    echo "
                                    <span class=\"d-none\">";
                    // line 120
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                    echo "</span>
                                </td>
                                <td class=\"price-format text-end align-middle\">
                                    ";
                    // line 123
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 123) > 0)) {
                        // line 124
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_round((twig_get_attribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, true, 124) / twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 124)), 2, "floor")), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 126
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(0), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 128
                    echo "                                    <span class=\"d-none\">
                                                    ";
                    // line 129
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 129) > 0)) {
                        // line 130
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, true, 130) / twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 130)), 2, "floor"), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 132
                        echo "                                                        0
                                                    ";
                    }
                    // line 134
                    echo "                                                </span>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['age'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                        </tbody>
                    </table>
                ";
            } else {
                // line 141
                echo "                    <div class=\"col-12\">
                        <p class=\"mb-0\">";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.nodata"), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            // line 145
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
        return "SalesReport42/Resource/template/admin/age.twig";
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
        return array (  336 => 145,  330 => 142,  327 => 141,  322 => 138,  313 => 134,  309 => 132,  303 => 130,  301 => 129,  298 => 128,  292 => 126,  286 => 124,  284 => 123,  278 => 120,  274 => 119,  269 => 117,  265 => 116,  262 => 115,  258 => 114,  251 => 110,  247 => 109,  243 => 108,  239 => 107,  228 => 99,  222 => 95,  220 => 94,  216 => 92,  213 => 91,  206 => 90,  194 => 88,  179 => 79,  148 => 51,  128 => 34,  125 => 33,  118 => 32,  97 => 18,  90 => 17,  77 => 11,  69 => 10,  67 => 15,  65 => 14,  63 => 13,  41 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "SalesReport42/Resource/template/admin/age.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SalesReport42/Resource/template/admin/age.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 91, "for" => 114);
        static $filters = array("trans" => 13, "escape" => 11, "raw" => 34, "number_format" => 117, "price" => 119, "round" => 124);
        static $functions = array("url" => 14, "asset" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['trans', 'escape', 'raw', 'number_format', 'price', 'round'],
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
