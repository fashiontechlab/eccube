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

/* @admin/Product/class_name.twig */
class __TwigTemplate_36fc6fb76d2ebc9d5525f58246e4d090 extends Template
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
        $context["menus"] = ["product", "class_name"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/class_name.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
";
    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <script>
        \$(function() {
            var oldSortNos = [];
            // 画面の中のsortNo一覧を保持
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            // rsort
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();

            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                    updateSortNo();
                }
            });

            var updateSortNo = function() {
                // 並び替え後にsortNoを更新
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.classNameId] = oldSortNos[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 59
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).done(function() {
                    // remove class disable
                    \$('a.up.disabled').removeClass('disabled');
                    \$('a.down.disabled').removeClass('disabled');
                    // First element
                    \$('.sortable-item > li:nth-child(2) > div > div.col-auto.text-end > a.up').addClass('disabled');
                }).always(function() {
                    redrawDisableAllows();
                    \$('.modal-backdrop').remove();
                });
            };

            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.up').removeClass('disabled');
                items.find('a.down').removeClass('disabled');
                items.first().find('a.up').addClass('disabled');
                items.last().find('a.down').addClass('disabled');
            };

            \$('.sortable-item a.up').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.prev().before(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });

            \$('.sortable-item a.down').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.next().after(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });

            // 編集
            \$('.sortable-item').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 編集キャンセル
            \$('.sortable-item').on('click', 'button.action-edit-cancel', function(e) {
                location.href = '";
        // line 108
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name");
        echo "';
            });

            // 編集時, エラーがあれば入力欄を表示.
            \$('.sortable-item').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>

";
    }

    // line 132
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-12 text-right\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 138
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name_export");
        echo "\">
                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                            <span>";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CLASS_NAME")]), "html", null, true);
        echo "\">
                            <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                            <span>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" class=\"row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 159
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name");
        echo "\">
                                        <div class=\"col-auto align-self-center\">
                                            <span>";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
        echo "</span>
                                            <span class=\"badge bg-primary ms-1\">";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                        </div>
                                        <div class=\"col-3 me-2\">
                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 165), 165, $this->source), 'widget');
        echo "
                                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 166), 166, $this->source), 'widget');
        echo "
                                            ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 167), 167, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto align-self-center\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.backend_name"), "html", null, true);
        echo "\">
                                            <span>";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <div class=\"col-3\">
                                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "backend_name", [], "any", false, false, true, 174), 174, $this->source), 'widget');
        echo "
                                            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "backend_name", [], "any", false, false, true, 175), 175, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                        </div>
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-1\"><strong>";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_management"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ClassNames"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ClassName"]) {
            // line 190
            echo "                                    <li id=\"ex-class_name-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-class-name-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "sortNo", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">";
            // line 193
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "</div>
                                            <div class=\"col d-flex align-items-center\">
                                                <a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_category", ["class_name_id" => twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 195)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "name", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "［";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "backend_name", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "］ (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "ClassCategories", [], "any", false, false, true, 195), 195, $this->source)), "html", null, true);
            echo ")</a>
                                            </div>
                                            <div class=\"col-auto text-end\">
                                                <a class=\"btn btn-ec-actionIcon me-2 up ";
            // line 198
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 198)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 down ";
            // line 201
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 201)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 action-edit\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\"
                                                     data-bs-placement=\"top\" title=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    ";
            // line 209
            $context["classCategories"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassName"], "ClassCategories", [], "any", false, false, true, 209), 209, $this->source));
            // line 210
            echo "                                                    <a class=\"btn btn-ec-actionIcon";
            if ((($context["classCategories"] ?? null) > 0)) {
                echo " disabled";
            }
            echo "\"
                                                       ";
            // line 211
            if ((($context["classCategories"] ?? null) == 0)) {
                echo "data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                       data-url=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 212)]), "html", null, true);
                echo "\"
                                                       data-message=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ClassName"], "name", [], "any", false, false, true, 213)]), "html", null, true);
                echo "\"";
            }
            echo ">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class=\"row d-none mode-edit\" method=\"post\" action=\"";
            // line 219
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name");
            echo "\">
                                            ";
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["forms"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 220)] ?? null) : null), "_token", [], "any", false, false, true, 220), 220, $this->source), 'widget');
            echo "
                                            <div class=\"col-auto align-self-center\"><span>";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
            echo "</span></div>
                                            <div class=\"col-auto align-items-center\">
                                                ";
            // line 223
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["forms"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 223)] ?? null) : null), "name", [], "any", false, false, true, 223), 223, $this->source), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["forms"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 223)] ?? null) : null), "name", [], "any", false, false, true, 223), "vars", [], "any", false, false, true, 223), "value", [], "any", false, false, true, 223)]]);
            echo "
                                                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["forms"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 224)] ?? null) : null), "name", [], "any", false, false, true, 224), 224, $this->source), 'errors');
            echo "
                                            </div>
                                            <div class=\"col-auto align-self-center\"><span>";
            // line 226
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
            echo "</span></div>
                                            <div class=\"col-auto align-items-center\">
                                                ";
            // line 228
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["forms"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 228)] ?? null) : null), "backend_name", [], "any", false, false, true, 228), 228, $this->source), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["forms"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 228)] ?? null) : null), "backend_name", [], "any", false, false, true, 228), "vars", [], "any", false, false, true, 228), "value", [], "any", false, false, true, 228)]]);
            echo "
                                                ";
            // line 229
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["forms"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, true, 229)] ?? null) : null), "backend_name", [], "any", false, false, true, 229), 229, $this->source), 'errors');
            echo "
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-conversion\" type=\"submit\">";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                            </div>
                                        </form>
                                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ClassName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title fw-bold\">
                                                ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                            </h5>
                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                            </button>
                                        </div>
                                        <div class=\"modal-body text-start\">
                                            <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                ";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 261
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
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
        return "@admin/Product/class_name.twig";
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
        return array (  539 => 272,  527 => 263,  522 => 261,  517 => 259,  503 => 248,  493 => 240,  474 => 235,  468 => 232,  462 => 229,  458 => 228,  453 => 226,  448 => 224,  444 => 223,  439 => 221,  435 => 220,  431 => 219,  420 => 213,  416 => 212,  412 => 211,  405 => 210,  403 => 209,  399 => 208,  392 => 204,  382 => 201,  372 => 198,  358 => 195,  353 => 193,  342 => 190,  325 => 189,  319 => 186,  315 => 185,  305 => 178,  299 => 175,  295 => 174,  288 => 170,  284 => 169,  279 => 167,  275 => 166,  271 => 165,  265 => 162,  261 => 161,  256 => 159,  238 => 144,  233 => 142,  228 => 140,  223 => 138,  216 => 133,  212 => 132,  185 => 108,  133 => 59,  100 => 28,  96 => 27,  87 => 20,  83 => 19,  76 => 16,  69 => 15,  64 => 11,  62 => 18,  60 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/class_name.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Product/class_name.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 189, "if" => 198);
        static $filters = array("escape" => 15, "trans" => 15, "length" => 195);
        static $functions = array("url" => 59, "constant" => 142, "form_widget" => 165, "form_errors" => 167, "csrf_token_for_anchor" => 261);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'length'],
                ['url', 'constant', 'form_widget', 'form_errors', 'csrf_token_for_anchor']
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
