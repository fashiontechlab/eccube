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

/* ProductReview42/Resource/template/admin/index.twig */
class __TwigTemplate_cade1ef5a2343e8229f51f9c56f9dea7 extends Template
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
        // line 15
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Resource/template/admin/index.twig"));

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

        // line 17
        $context["menus"] = ["product", "product_review"];
        // line 21
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), ["@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 15
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "ProductReview42/Resource/template/admin/index.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.title"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.sub_title"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 24
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

    // line 38
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 39
        echo "    <script>
        \$(function() {
            if (\$('[type=\"date\"]').prop('type') != 'date') {
                // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
                \$.when(
                    \$.getScript(\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
                ).done(function() {
                    \$('input[id\$=_review_start]').datetimepicker({
                        locale: '";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                    \$('input[id\$=_review_end]').datetimepicker({
                        locale: '";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                });
            }
        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 73
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, true, 76), 76, $this->source), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_multi"), "html", null, true);
        echo "</label>
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 82), 82, $this->source), 'widget');
        echo "
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 83), 83, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3\" data-bs-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o fw-bold mr-1\"></i><span
                                        class=\"fw-bold\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_detail"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "product_name", [], "any", false, false, true, 96), 96, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "product_name", [], "any", false, false, true, 98), 98, $this->source), 'widget');
        echo "
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "product_name", [], "any", false, false, true, 99), 99, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "product_code", [], "any", false, false, true, 103), 103, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "product_code", [], "any", false, false, true, 105), 105, $this->source), 'widget');
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "product_code", [], "any", false, false, true, 106), 106, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "recommend_level", [], "any", false, false, true, 110), 110, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "recommend_level", [], "any", false, false, true, 112), 112, $this->source), 'widget');
        echo "
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "recommend_level", [], "any", false, false, true, 113), 113, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_posted_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-group range\">
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "review_start", [], "any", false, false, true, 119), 119, $this->source), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "review_start", [], "any", false, false, true, 119), 119, $this->source), 'errors');
        echo " ～ ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "review_end", [], "any", false, false, true, 119), 119, $this->source), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "review_end", [], "any", false, false, true, 119), 119, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sex", [], "any", false, false, true, 123), 123, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sex", [], "any", false, false, true, 125), 125, $this->source), 'widget');
        echo "
                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sex", [], "any", false, false, true, 126), 126, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, true, 130), 130, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, true, 132), 132, $this->source), 'widget');
        echo "
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, true, 133), 133, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"d-block text-center\">
                    <button class=\"btn btn-ec-regular search-clear\"
                            type=\"reset\">";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_clear"), "html", null, true);
        echo "</button>
                </div>
            </div><!-- /.col -->
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\"
                        type=\"submit\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_button"), "html", null, true);
        echo "</button>
                ";
        // line 145
        if (($context["pagination"] ?? null)) {
            // line 146
            echo "                    <span id=\"search-result\"
                          class=\"fw-bold ml-2\">";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_result_count", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 147)]), "html", null, true);
            echo "</span>
                ";
        }
        // line 149
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 151
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => ($context["searchForm"] ?? null)], true, true);
        echo "
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 159
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 159))) {
            // line 160
            echo "
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-6\">
                        &nbsp;
                    </div>
                    <div class=\"col-5 text-right\">
                        <div class=\"d-inline-block mr-2 align-bottom\">
                            <div>
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 170
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 170) == ($context["page_count"] ?? null))) {
                    echo "selected=\"\"";
                }
                // line 171
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("product_review_admin_product_review_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 171)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.diaply_count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 171)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                                </select>
                            </div>
                        </div>
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group\" role=\"group\">
                                <button class=\"btn btn-ec-regular\" type=\"button\"
                                        onclick='location.href=\"";
            // line 179
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_review_admin_product_review_download");
            echo "\"'>
                                    <i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.csv_download"), "html", null, true);
            echo "</span>
                                </button>
                                <button class=\"btn btn-ec-regular\" type=\"button\"
                                        onclick='location.href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_get_attribute($this->env, $this->source, ($context["CsvType"] ?? null), "id", [], "any", false, false, true, 184)]), "html", null, true);
            echo "\"'>
                                    <i class=\"fa fa-cog mr-1 text-secondary\"></i><span>";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.csv_download_setting"), "html", null, true);
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <thead>
                            <tr>
                                <th class=\"border-top-0 ps-3 pt-2 pb-2\">ID</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_posted_date"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_contributor"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_product_name"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_title"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_level"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_status"), "html", null, true);
            echo "</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Review"]) {
                // line 208
                echo "                                <tr>
                                    <td class=\"align-middle ps-3\">";
                // line 209
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 210
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "create_date", [], "any", false, false, true, 210), 210, $this->source)), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 211
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "reviewer_name", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 212
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Review"], "Product", [], "any", false, false, true, 212), "name", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">
                                        <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_review_admin_product_review_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 214)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "title", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "</a>
                                    </td>
                                    <td class=\"align-middle\">";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["Review"], "recommend_level", [], "any", false, false, true, 216)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "★";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 217
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "status", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"icon_edit\">
                                        <div class=\"col-auto text-right\">
                                            <a href=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_review_admin_product_review_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 220)]), "html", null, true);
                echo "\"
                                               class=\"btn btn-ec-actionIcon mr-3 action-edit\"
                                               data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"\"
                                               data-bs-original-title=\"\"><i class=\"fa fa-pencil fa-lg text-secondary\"></i></a>

                                            <a
                                                    class=\"btn btn-ec-actionIcon mr-3\"
                                                    data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#confirmModal-";
                // line 229
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
                echo "\"
                                                    data-bs-toggle=\"tooltip\"
                                                    data-bs-placement=\"top\"><i
                                                        class=\"fa fa-close fa-lg text-secondary\"></i></a>
                                        </div>
                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 234
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                             role=\"dialog\"
                                             aria-labelledby=\"confirmModal-";
                // line 236
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title fw-bold\">
                                                            ";
                // line 241
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete_confirm_title"), "html", null, true);
                echo "</h5>
                                                        <button class=\"btn-close\" type=\"button\"
                                                                data-bs-dismiss=\"modal\"
                                                                aria-label=\"Close\">
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body text-left\">
                                                        <p class=\"text-left\">
                                                            ";
                // line 249
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete_confirm_message"), "html", null, true);
                echo "</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                data-bs-dismiss=\"modal\">";
                // line 253
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete_cancel"), "html", null, true);
                echo "
                                                        </button>
                                                        <a
                                                                href=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_review_admin_product_review_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 256)]), "html", null, true);
                echo "\"
                                                                class=\"btn btn-ec-delete\"
                                                                data-confirm=\"false\"
                                                                ";
                // line 259
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                data-method=\"delete\">
                                                            ";
                // line 261
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete"), "html", null, true);
                echo "
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "                            </tbody>
                        </table>
                    </div>

                    <div class=\"row justify-content-md-center mb-4\">
                        ";
            // line 275
            if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 0)) {
                // line 276
                echo "                            ";
                $this->loadTemplate("@admin/pager.twig", "ProductReview42/Resource/template/admin/index.twig", 276)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 276), "routes" => "product_review_admin_product_review_page"]));
                // line 277
                echo "                        ";
            }
            // line 278
            echo "                    </div>
                    ";
        } elseif (        // line 279
($context["has_errors"] ?? null)) {
            // line 280
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 282
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_invalid_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_change_condition_and_retry"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        } else {
            // line 287
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 289
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_no_result"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 290
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_change_condition_and_retry"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 291
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_try_detail_condition"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        }
        // line 295
        echo "                </div>
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
        return "ProductReview42/Resource/template/admin/index.twig";
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
        return array (  655 => 295,  648 => 291,  644 => 290,  640 => 289,  636 => 287,  629 => 283,  625 => 282,  621 => 280,  619 => 279,  616 => 278,  613 => 277,  610 => 276,  608 => 275,  601 => 270,  586 => 261,  581 => 259,  575 => 256,  569 => 253,  562 => 249,  551 => 241,  543 => 236,  538 => 234,  530 => 229,  518 => 220,  512 => 217,  501 => 216,  494 => 214,  489 => 212,  485 => 211,  481 => 210,  477 => 209,  474 => 208,  470 => 207,  462 => 202,  458 => 201,  454 => 200,  450 => 199,  446 => 198,  442 => 197,  427 => 185,  423 => 184,  417 => 181,  412 => 179,  404 => 173,  393 => 171,  388 => 170,  384 => 169,  373 => 160,  371 => 159,  360 => 151,  356 => 149,  351 => 147,  348 => 146,  346 => 145,  342 => 144,  334 => 139,  325 => 133,  321 => 132,  316 => 130,  309 => 126,  305 => 125,  300 => 123,  289 => 119,  284 => 117,  277 => 113,  273 => 112,  268 => 110,  261 => 106,  257 => 105,  252 => 103,  245 => 99,  241 => 98,  236 => 96,  225 => 88,  217 => 83,  213 => 82,  209 => 81,  201 => 76,  196 => 73,  189 => 72,  169 => 58,  157 => 49,  151 => 46,  147 => 45,  143 => 44,  136 => 39,  129 => 38,  108 => 24,  101 => 23,  88 => 19,  75 => 18,  67 => 15,  65 => 21,  63 => 17,  41 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProductReview42/Resource/template/admin/index.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/ProductReview42/Resource/template/admin/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "form_theme" => 21, "if" => 145, "for" => 169, "include" => 276);
        static $filters = array("escape" => 18, "trans" => 18, "date_min" => 210, "length" => 275);
        static $functions = array("asset" => 24, "form_widget" => 76, "form_errors" => 83, "form_label" => 96, "include" => 151, "path" => 171, "url" => 179, "range" => 216, "csrf_token_for_anchor" => 259);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'include'],
                ['escape', 'trans', 'date_min', 'length'],
                ['asset', 'form_widget', 'form_errors', 'form_label', 'include', 'path', 'url', 'range', 'csrf_token_for_anchor']
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
