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

/* @admin/Product/index.twig */
class __TwigTemplate_fa83f3f9e74e72a0adc814f64b888430 extends Template
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
        $context["menus"] = ["product", "product_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), ["@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <script>
        \$(function() {
            \$('#bulkDelete').on('click', function() {

                var modal = \$('#bulkDeleteModal');

                // 削除中のUI変更処理
                modal.find('button').attr('disabled', 'disabled');
                \$('.modal-body p', modal).text(\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__in_progress"), "html", null, true);
        echo "\");
                \$('.progress', modal).show();

                var checkedList = \$('input[type=checkbox][data-delete-url]:checked');
                var totalCount = checkedList.length;
                var currentCount = 0;

                var promises = checkedList.map(function() {
                    return \$.ajax({
                        'url': \$(this).data('delete-url'),
                        'type': 'delete',
                        'data': {'_token': \$(this).attr('token-for-anchor')}
                    }).always(function() {
                        \$('.progress-bar', modal).css('width', (++currentCount / totalCount * 100) + '%');
                    });
                });

                var addError = function(errorMessage) {
                    \$('<li><span class=\"badge bg-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(errorMessage))
                        .appendTo('#bulkErrors');
                };

                \$.when.apply(\$, promises)
                    .done(function() {
                        // 削除できなかった場合はエラーメッセージを表示
                        var args = promises.length === 1 ? [arguments[0]] : [].slice.call(arguments).map(function(result) {
                            return result[0];
                        });
                        args.filter(function(result) {
                            return result.success === false;
                        }).forEach(function(result) {
                            addError(result.message);
                        });
                    })
                    .fail(function() {
                        // システムエラー
                        addError(\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__system_error"), "html", null, true);
        echo "\");
                    })
                    .always(function() {
                        \$('.progress', modal).hide();
                        \$('.modal-body p', modal).text(\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete_message"), "html", null, true);
        echo "\");
                        modal.find('button').removeAttr('disabled').toggle();
                    })
            });

            \$('#bulkDeleteDone').on('click', function() {
                location.reload(true);
            });

            toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#trigger_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#trigger_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#form_bulk').find('.action-submit').on('click', function(event) {
                event.preventDefault();
                var form = \$(this).closest('form');
                if (!form.find('input:checkbox[name^=\"ids\"]:checked').length) {
                    ";
        // line 99
        echo "                    alert('please check');
                    return false;
                }

                \$('<input />').attr('type', 'hidden').attr('name', '";
        // line 103
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
        echo "')
                    .val(\$(this).attr('token-for-anchor'))
                    .appendTo(form);
                form.attr('action', \$(this).data('action')).submit();
                return false;
            });

            var dataClass = [];
            var modalClass = \$('#productClassesModal');
            \$('form#form_bulk').on('click', 'table.table button[data-class-url]', function() {
                var btnClass = \$(this);
                btnClass.attr('disabled', true);
                var productId = btnClass.data('product-id');

                if (dataClass[productId] != undefined) {
                    renderClass(dataClass[productId], btnClass);
                    return;
                }

                \$.ajax({
                    url: btnClass.data('class-load'),
                    type: 'GET',
                }).done(function(data) {
                    dataClass[productId] = data;
                    renderClass(dataClass[productId], btnClass);
                }).fail(function() {
                    alert('Failed');
                });
            });

            // Append html and show popup
            function renderClass(data, btnClass) {
                \$('div.modal-body', modalClass).html(data);
                \$('h5.modal-title', modalClass).text(btnClass.data('message'));
                \$('a.btn-ec-conversion', modalClass).attr('href', btnClass.data('class-url'));
                modalClass.modal('show');
                btnClass.attr('disabled', false);
            }
        });
    </script>
";
    }

    // line 145
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "    <div class=\"c-outsideBlock\">
        <form id='search_form' method=\"post\" action=\"";
        // line 147
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product");
        echo "\">
            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, true, 148), 148, $this->source), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">

                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "id", [], "any", false, false, true, 155), 155, $this->source), 'widget');
        echo "
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "id", [], "any", false, false, true, 156), 156, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3\" data-bs-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o fw-bold me-1\"></i><span
                                        class=\"fw-bold\">";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse";
        // line 166
        echo ((($context["has_errors"] ?? null)) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6\">
                        <div class=\"row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</label>
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, true, 172), 172, $this->source), 'widget');
        echo "
                                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, true, 173), 173, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status"), "html", null, true);
        echo "</p>
                                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, true, 179), 179, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, true, 180), 180, $this->source), 'errors', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock__short"), "html", null, true);
        echo "</p>
                                ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "stock", [], "any", false, false, true, 186), 186, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "stock", [], "any", false, false, true, 187), 187, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag"), "html", null, true);
        echo "</label>
                                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tag_id", [], "any", false, false, true, 195), 195, $this->source), 'widget');
        echo "
                                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tag_id", [], "any", false, false, true, 196), 196, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">
                                ";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "
                            </label>
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 206
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_start", [], "any", false, false, true, 206), 206, $this->source), 'widget');
        echo "
                                    ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_start", [], "any", false, false, true, 207), 207, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_end", [], "any", false, false, true, 212), 212, $this->source), 'widget');
        echo "
                                    ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_end", [], "any", false, false, true, 213), 213, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 222
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, true, 222), 222, $this->source), 'widget');
        echo "
                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, true, 223), 223, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto\"><span>";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, true, 227), 227, $this->source), 'widget');
        echo "
                                    ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, true, 228), 228, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 235
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["searchForm"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 235), "eccube_form_options", [], "any", false, false, true, 235), "auto_render", [], "any", false, false, true, 235); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 236
            echo "                    ";
            // line 237
            echo "                    <div class=\"row mb-2\">
                        ";
            // line 238
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 238), "eccube_form_options", [], "any", false, false, true, 238), "form_theme", [], "any", false, false, true, 238)) {
                // line 239
                echo "                            ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 239), "eccube_form_options", [], "any", false, false, true, 239), "form_theme", [], "any", false, false, true, 239)], true);
                // line 240
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 240, $this->source), 'row');
                echo "
                        ";
            } else {
                // line 242
                echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                // line 244
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 244), "label", [], "any", false, false, true, 244), 244, $this->source)), "html", null, true);
                echo "</label>
                                    ";
                // line 245
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 245, $this->source), 'widget');
                echo "
                                    ";
                // line 246
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 246, $this->source), 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 250
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                ";
        // line 255
        if (($context["pagination"] ?? null)) {
            // line 256
            echo "                    <span class=\"fw-bold ms-2\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 256)]);
            echo "</span>
                ";
        }
        // line 258
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 260
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => ($context["searchForm"] ?? null)], true, true);
        echo "
            </div>
            ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sortkey", [], "any", false, false, true, 262), 262, $this->source), 'widget', ["attr" => ["class" => "js-listSort-key"]]);
        echo "
            ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sorttype", [], "any", false, false, true, 263), 263, $this->source), 'widget', ["attr" => ["class" => "js-listSort-type"]]);
        echo "
        </form>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 269
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 269))) {
            // line 270
            echo "                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\">
                                <div id=\"btn_bulk\" class=\"d-none\">
                                    <label class=\"me-2\">";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_actions"), "html", null, true);
            echo "</label>
                                    <div class=\"btn-group me-2\" role=\"group\">
                                        <button ";
            // line 276
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 277
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__show"), "html", null, true);
            echo "</span>
                                        </button>
                                        <button ";
            // line 279
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_HIDE")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__hide"), "html", null, true);
            echo "</span>
                                        </button>
                                    </div>
                                    <button ";
            // line 283
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_ABOLISHED")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular me-2 action-submit\">
                                        ";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__abolished"), "html", null, true);
            echo "
                                    </button>
                                    <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#bulkDeleteModal\" class=\"btn btn-ec-delete\">";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
            echo "</button>
                                </div>
                            </div>
                            <div class=\"col-5 text-end\">
                                <div class=\"d-inline-block me-2 align-bottom\">
                                    <div>
                                        <select class=\"form-select\" onchange=\"location = this.value;\">
                                            ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 294
                echo "                                                <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 294) == ($context["page_count"] ?? null))) {
                    echo "selected=\"\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 294)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 294)]), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 301
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_export");
            echo "\">
                                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i><span>";
            // line 302
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT")]), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-cog me-1 text-secondary\"></i><span>";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 ps-3 pt-2 pb-2\">
                                            <input type=\"checkbox\" name=\"filter\" value=\"open\" id=\"trigger_check_all\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2\" nowrap>";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id__short"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"product_id\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"name\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 322
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"product_code\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 323
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 324
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"stock\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__short"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"status\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 326
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"create_date\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"update_date\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 pe-3\" colspan=\"3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 333
                echo "                                        <tr id=\"ex-product-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
                echo "\">
                                            <td class=\"align-middle ps-3\">
                                                <input type=\"checkbox\" name=\"ids[]\" value=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 335), 335, $this->source), "html", null, true);
                echo "\" id=\"check_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 335), 335, $this->source), "html", null, true);
                echo "\" data-delete-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 335)]), "html", null, true);
                echo "\">
                                            </td>
                                            <td class=\"align-middle\">";
                // line 337
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
                echo "</td>
                                            ";
                // line 339
                echo "                                            <td class=\"align-middle\">
                                                <a href=\"";
                // line 340
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 340)]), "html", null, true);
                echo "\">
                                                    <img src=\"";
                // line 341
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "mainFileName", [], "any", false, false, true, 341), 341, $this->source)), "save_image"), "html", null, true);
                echo "\"
                                                         style=\"max-width: 50px\">
                                                </a>
                                            </td>
                                            <td class=\"align-middle\"><a
                                                        href=\"";
                // line 346
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 346)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
                echo "</a>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 349
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
                echo "
                                                ";
                // line 350
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 350) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 350))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 350), 350, $this->source), "html", null, true);
                    echo "
                                                ";
                }
                // line 352
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 354
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, true, 354), 354, $this->source)), "html", null, true);
                echo "
                                                ";
                // line 355
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, true, 355) != twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, true, 355))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, true, 355), 355, $this->source)), "html", null, true);
                    echo "
                                                ";
                }
                // line 357
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 359
                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 359)) {
                    // line 360
                    echo "                                                    <button type=\"button\" class=\"btn page-link text-dark d-inline-block\"
                                                            data-product-id=\"";
                    // line 361
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 361), 361, $this->source), "html", null, true);
                    echo "\"
                                                            data-message=\"";
                    // line 362
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class__confirm_title", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 362)]), "html", null, true);
                    echo "\"
                                                            data-class-load=\"";
                    // line 363
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_classes_load", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 363)]), "html", null, true);
                    echo "\"
                                                            data-class-url=\"";
                    // line 364
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 364), "return_product_list" => true]), "html", null, true);
                    echo "\">
                                                        ";
                    // line 365
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm"), "html", null, true);
                    echo "
                                                    </button>
                                                ";
                } else {
                    // line 368
                    echo "                                                    ";
                    // line 369
                    echo "                                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "stockunlimited_min", [], "any", false, false, true, 369)) {
                        // line 370
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 372
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "stock_min", [], "any", false, false, true, 372), 372, $this->source), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 374
                    echo "                                                ";
                }
                // line 375
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 377
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "status", [], "any", false, false, true, 377), "name", [], "any", false, false, true, 377), 377, $this->source), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 380
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "create_date", [], "any", false, false, true, 380), 380, $this->source)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 383
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "update_date", [], "any", false, false, true, 383), 383, $this->source)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle pe-3\" colspan=\"3\">
                                                <div class=\"text-end\">
                                                    <div class=\"px-1 d-inline-block text-center\" data-bs-toggle=\"tooltip\"
                                                         data-bs-placement=\"top\"
                                                         title=\"";
                // line 389
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.display"), "html", null, true);
                echo "\"><a class=\"btn btn-ec-actionIcon\"
                                                                                                       href=\"";
                // line 390
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 390)]), "html", null, true);
                echo "\"
                                                                                                       target=\"_blank\"><i
                                                                    class=\"fa fa-eye fa-lg text-secondary\"
                                                                    aria-hidden=\"true\"></i></a></div>
                                                    <div class=\"px-1 d-inline-block text-center\" data-bs-toggle=\"tooltip\"
                                                         data-bs-placement=\"top\"
                                                         title=\"";
                // line 396
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                                           data-bs-toggle=\"modal\"
                                                           data-bs-target=\"#confirmModal-";
                // line 399
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 399), 399, $this->source), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-files-o fa-lg text-secondary\"
                                                               aria-hidden=\"true\"></i></a>
                                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 402
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 402), 402, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-";
                // line 404
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 404), 404, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">
                                                                            ";
                // line 409
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"btn-close\" type=\"button\"
                                                                                data-bs-dismiss=\"modal\"
                                                                                aria-label=\"Close\">
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">
                                                                            ";
                // line 417
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_message"), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                                data-bs-dismiss=\"modal\">";
                // line 421
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                        </button>
                                                                        <a
                                                                                href=\"";
                // line 424
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 424)]), "html", null, true);
                echo "\"
                                                                                class=\"btn btn-ec-conversion\"
                                                                                data-confirm=\"false\"
                                                                                ";
                // line 427
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                                data-method=\"post\">
                                                                            ";
                // line 429
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 440
            echo "
                                    </tbody>
                                </table>
                            </div>
                            ";
            // line 444
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 444) > 0)) {
                // line 445
                echo "                                <div class=\"row justify-content-md-center mb-4 pb-4\">
                                    ";
                // line 446
                $this->loadTemplate("@admin/pager.twig", "@admin/Product/index.twig", 446)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 446), "routes" => "admin_product_page"]));
                // line 447
                echo "                                </div>
                            ";
            }
            // line 449
            echo "                        </div>
                    </form>
                ";
        } elseif (        // line 451
($context["has_errors"] ?? null)) {
            // line 452
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 454
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 455
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 459
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 461
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 462
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 463
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 467
        echo "            </div>

            <!-- 完全に削除の確認モーダル-->
            <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title fw-bold\">";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_title"), "html", null, true);
        echo "</h5>
                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body text-start\">
                            <p class=\"text-start\">";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_message"), "html", null, true);
        echo "</p>
                            <ul id=\"bulkErrors\"></ul>
                            <div class=\"progress\" style=\"display: none\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-delete\" type=\"button\" id=\"bulkDelete\">";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-regular\" id=\"bulkDeleteDone\" style=\"display: none\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"modal fade\" id=\"productClassesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productClassesModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">";
        // line 500
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 506
        echo "                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-v-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                        ";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                    </button>
                    <a class=\"btn btn-ec-conversion\"
                       href=\"#\">
                        ";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class"), "html", null, true);
        echo "
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#productClassesModal -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Product/index.twig";
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
        return array (  1017 => 513,  1010 => 509,  1005 => 506,  998 => 500,  982 => 487,  978 => 486,  974 => 485,  964 => 478,  957 => 474,  948 => 467,  941 => 463,  937 => 462,  933 => 461,  929 => 459,  922 => 455,  918 => 454,  914 => 452,  912 => 451,  908 => 449,  904 => 447,  902 => 446,  899 => 445,  897 => 444,  891 => 440,  874 => 429,  869 => 427,  863 => 424,  857 => 421,  850 => 417,  839 => 409,  831 => 404,  826 => 402,  820 => 399,  814 => 396,  805 => 390,  801 => 389,  792 => 383,  786 => 380,  780 => 377,  776 => 375,  773 => 374,  767 => 372,  761 => 370,  758 => 369,  756 => 368,  750 => 365,  746 => 364,  742 => 363,  738 => 362,  734 => 361,  731 => 360,  729 => 359,  725 => 357,  718 => 355,  714 => 354,  710 => 352,  703 => 350,  699 => 349,  691 => 346,  683 => 341,  679 => 340,  676 => 339,  672 => 337,  663 => 335,  657 => 333,  653 => 332,  645 => 327,  641 => 326,  637 => 325,  633 => 324,  629 => 323,  625 => 322,  621 => 321,  617 => 320,  613 => 319,  596 => 305,  592 => 304,  587 => 302,  583 => 301,  576 => 296,  561 => 294,  557 => 293,  547 => 286,  542 => 284,  536 => 283,  530 => 280,  524 => 279,  519 => 277,  513 => 276,  508 => 274,  502 => 270,  500 => 269,  491 => 263,  487 => 262,  482 => 260,  478 => 258,  472 => 256,  470 => 255,  466 => 254,  462 => 252,  455 => 250,  448 => 246,  444 => 245,  440 => 244,  436 => 242,  430 => 240,  427 => 239,  425 => 238,  422 => 237,  420 => 236,  415 => 235,  406 => 228,  402 => 227,  397 => 225,  392 => 223,  387 => 222,  381 => 218,  373 => 213,  369 => 212,  363 => 209,  358 => 207,  353 => 206,  346 => 201,  338 => 196,  334 => 195,  330 => 194,  320 => 187,  316 => 186,  312 => 185,  304 => 180,  300 => 179,  296 => 178,  288 => 173,  284 => 172,  280 => 171,  272 => 166,  264 => 161,  256 => 156,  252 => 155,  246 => 154,  237 => 148,  233 => 147,  230 => 146,  226 => 145,  181 => 103,  175 => 99,  143 => 69,  136 => 65,  96 => 28,  86 => 20,  82 => 19,  75 => 16,  68 => 15,  63 => 11,  61 => 18,  59 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/index.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Product/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 235, "if" => 238, "include" => 446);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 235, "raw" => 256, "no_image_product" => 341, "price" => 354, "date_min" => 380);
        static $functions = array("constant" => 103, "url" => 147, "form_widget" => 148, "form_errors" => 156, "form_row" => 240, "include" => 260, "csrf_token_for_anchor" => 276, "path" => 294, "asset" => 341);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter', 'raw', 'no_image_product', 'price', 'date_min'],
                ['constant', 'url', 'form_widget', 'form_errors', 'form_row', 'include', 'csrf_token_for_anchor', 'path', 'asset']
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
