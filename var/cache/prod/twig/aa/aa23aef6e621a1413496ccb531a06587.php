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

/* @admin/Product/product.twig */
class __TwigTemplate_db4e55d2e50b7d75e05670238b552dc0 extends Template
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
        $context["menus"] = ["product", "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
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
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });

        \$(function() {
            ";
        // line 27
        if ((($context["has_class"] ?? null) == false)) {
            // line 28
            echo "            if (\$(\"#";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 28), "stock_unlimited", [], "any", false, false, true, 28), "vars", [], "any", false, false, true, 28), "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\").prop(\"checked\")) {
                \$(\"#";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 29), "stock", [], "any", false, false, true, 29), "vars", [], "any", false, false, true, 29), "id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 31), "stock", [], "any", false, false, true, 31), "vars", [], "any", false, false, true, 31), "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\").removeAttr(\"disabled\");
            }
            \$(\"#";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 33), "stock_unlimited", [], "any", false, false, true, 33), "vars", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 35), "stock", [], "any", false, false, true, 35), "vars", [], "any", false, false, true, 35), "id", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 37), "stock", [], "any", false, false, true, 37), "vars", [], "any", false, false, true, 37), "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                }
            });
            ";
        }
        // line 41
        echo "
            // ファイルアップロード
            // see https://pqina.nl/filepond/
            var inputFileElement = document.querySelector('input[type=file]');
            ";
        // line 45
        if (((twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 45) == "ja") || (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 45) == "en"))) {
            // line 46
            echo "            FilePond.setOptions(FilePondLocale_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo ");
            ";
        }
        // line 48
        echo "            FilePond.setOptions({
                server: {
                    process: {
                        url: '";
        // line 51
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_image_process");
        echo "',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    load: {
                        url: '";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_image_load");
        echo "?source=',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    revert: {
                        url: '";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_image_revert");
        echo "',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }
                }
            });
            var pond = FilePond.create(inputFileElement, {
                allowFileTypeValidation: true,
                acceptedFileTypes: [
                    'image/gif',
                    'image/png',
                    'image/jpeg'
                ],
                allowFileSizeValidation: true,
                maxFileSize: 10000000,
                maxFiles: 10,
                allowBrowse: true,
                allowDrop: true,
                allowReorder: true,
                labelIdle: '<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\" style=\"font-size: 40px\"></i>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "<span class=\"filepond--label-action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>',
                styleItemPanelAspectRatio: 0.5625,
                // 保存されている画像のロード
                files: [
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, true, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 90
            echo "                    {
                        source: '";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, true, 91), "value", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "',
                        options: {
                            type: 'local'
                        }
                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    // 追加してすぐの画像のロード. バリデーションエラーの場合など.
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, true, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 99
            echo "                    {
                        source: '";
            // line 100
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "',
                        options: {
                            type: 'local'
                        }
                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                ]
            });
            // 画像が追加されたら add_images にファイル名を追加する
            var proto_add = '";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, true, 109), "vars", [], "any", false, false, true, 109), "prototype", [], "any", false, false, true, 109), 109, $this->source), 'widget');
        echo "';
            pond.on('processfile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#upload-zone').append(
                        \$(proto_add.replace(/__name__/g, file.id))
                            .val(file.serverId)
                            .addClass('add_images')
                    );
                }
            });
            // 画像が削除されたら delete_images にファイル名を追加する
            var proto_del = '";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", [], "any", false, false, true, 122), "vars", [], "any", false, false, true, 122), "prototype", [], "any", false, false, true, 122), 122, $this->source), 'widget');
        echo "';
            pond.on('removefile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    // file.serverId にはアップロードしたファイル名が格納される.
                    if (file.serverId) {
                        \$('#upload-zone').append(
                            \$(proto_del.replace(/__name__/g, file.id))
                                .val(file.serverId)
                                .addClass('del_images')
                        );
                    }
                    // 追加してすぐ削除した画像があれば削除する
                    \$('#upload-zone').find('#admin_product_add_images_' + file.id).remove(); // 追加してすぐ削除した画像
                    \$('#upload-zone').find('.add_images[value=\"' + file.filename + '\"]').remove(); // 追加後, バリデーションエラーが発生した後に削除した画像
                }
            });
            pond.on('initfile', function() {
                \$('#product_image_error').hide();
            });
            pond.on('error', function(error, file) {
                var message = '";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "';
                if (error.main !== undefined) {
                    message = `\${error.main}: \${error.sub}`;
                }
                \$('#product_image_error')
                    .show()
                    .find('.form-error-message').text(message);

                // エラーメッセージが表示されてからプレビューエリアのエラーメッセージを非表示にする
                setTimeout(function() {
                    \$('.filepond--file-status').hide();
                }, 300);
            });

            // バリデーションエラーが出た場合に画像を保持するための hidden を追加しておく
            var proto_image = '";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, true, 159), "vars", [], "any", false, false, true, 159), "prototype", [], "any", false, false, true, 159), 159, $this->source), 'widget');
        echo "';
            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, true, 160));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 161
            echo "                \$('#upload-zone').append(
                    \$(proto_image.replace(/__name__/g, '";
            // line 162
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "'))
                        .val('";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "')
                        .addClass('images')
                );
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, true, 167));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 168
            echo "                \$('#upload-zone').append(
                    \$('";
            // line 169
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["add_image"], 169, $this->source), 'widget');
            echo "')
                        .val('";
            // line 170
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, true, 170), "value", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "')
                        .addClass('add_images')
                );
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", [], "any", false, false, true, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 175
            echo "                \$('#upload-zone').append(
                    \$('";
            // line 176
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["delete_image"], 176, $this->source), 'widget');
            echo "').addClass('del_images')
                );
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
            // タグ管理
            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });
    </script>
";
    }

    // line 230
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 257), 257, $this->source), 'widget');
        echo "
        ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "return_link", [], "any", false, false, true, 258), 258, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        ";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product__card_title"), "html", null, true);
        echo "
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                ";
        // line 282
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 282)) {
            // line 283
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 291
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 295
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
        echo "</span>
                                            <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 305), 305, $this->source), 'widget');
        echo "
                                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 306), 306, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 309
        if ((($context["has_class"] ?? null) == false)) {
            // line 310
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_type"), "html", null, true);
            echo "\">
                                                <span>";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                                <span class=\"badge bg-primary ms-1\">
                                                    ";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            ";
            // line 321
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 321), "sale_type", [], "any", false, false, true, 321), 321, $this->source), 'widget');
            echo "
                                            ";
            // line 322
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 322), "sale_type", [], "any", false, false, true, 322), 322, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 326
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.image"), "html", null, true);
        echo "\">
                                            <span>";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <br>";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image_size"), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"rounded\">
                                            ";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, true, 337), 337, $this->source), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                                            ";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, true, 338), 338, $this->source), 'errors');
        echo "
                                        </div><!-- /#upload-zone -->
                                        <span class=\"invalid-feedback\" id=\"product_image_error\" style=\"display: none\">
                                            <span class=\"d-block\">
                                                <span class=\"form-error-icon badge bg-danger text-uppercase\">";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
        echo "</span>
                                                <span class=\"form-error-message\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
                                            <span>";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", [], "any", false, false, true, 357), 357, $this->source), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                        ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", [], "any", false, false, true, 358), 358, $this->source), 'errors');
        echo "
                                        <div class=\"d-inline-block mb-2\" data-bs-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o fw-bold me-1\"></i>
                                                <span class=\"fw-bold text-ec-black\">
                                                    ";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list__add"), "html", null, true);
        echo "
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"collapse ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
                                                <span>";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", [], "any", false, false, true, 381), 381, $this->source), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
                                                ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", [], "any", false, false, true, 382), 382, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 387
        if ((($context["has_class"] ?? null) == false)) {
            // line 388
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 391
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
                                                <span class=\"badge bg-primary ms-1\">
                                                    ";
            // line 393
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 399
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 399), "price02", [], "any", false, false, true, 399), 399, $this->source), 'widget');
            echo "
                                                ";
            // line 400
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 400), "price02", [], "any", false, false, true, 400), 400, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 407
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
                                                <span>";
            // line 408
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 414
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 414), "price01", [], "any", false, false, true, 414), 414, $this->source), 'widget');
            echo "
                                                ";
            // line 415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 415), "price01", [], "any", false, false, true, 415), 415, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 422
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
                                                <span class=\"badge bg-primary ms-1\">
                                                    ";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                ";
            // line 430
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 430), "stock", [], "any", false, false, true, 430), 430, $this->source), 'widget');
            echo "
                                                ";
            // line 431
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 431), "stock", [], "any", false, false, true, 431), 431, $this->source), 'errors');
            echo "
                                                ";
            // line 433
            echo "                                                ";
            // line 434
            echo "                                                ";
            // line 435
            echo "                                                ";
            // line 436
            echo "                                                ";
            // line 437
            echo "                                                ";
            // line 438
            echo "                                                ";
            // line 439
            echo "                                                ";
            // line 440
            echo "                                                ";
            // line 441
            echo "                                                ";
            // line 442
            echo "                                                ";
            // line 443
            echo "                                                ";
            // line 444
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 444), "stock_unlimited", [], "any", false, false, true, 444), 444, $this->source), 'widget');
            echo "
                                                ";
            // line 445
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 445), "stock_unlimited", [], "any", false, false, true, 445), 445, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 450
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
                                            <span>";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 460
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", [], "any", false, false, true, 460), 460, $this->source), 'widget');
        echo "
                                            ";
        // line 461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", [], "any", false, false, true, 461), 461, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 466
        if ((($context["has_class"] ?? null) == false)) {
            // line 467
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 470
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
                                                <span>";
            // line 471
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 477
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 477), "code", [], "any", false, false, true, 477), 477, $this->source), 'widget');
            echo "
                                                ";
            // line 478
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 478), "code", [], "any", false, false, true, 478), 478, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 485
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
                                                <span>";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 492
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 492), "sale_limit", [], "any", false, false, true, 492), 492, $this->source), 'widget');
            echo "
                                                ";
            // line 493
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 493), "sale_limit", [], "any", false, false, true, 493), 493, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 500
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
                                                <span>";
            // line 501
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 507
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 507), "delivery_duration", [], "any", false, false, true, 507), 507, $this->source), 'widget');
            echo "
                                                ";
            // line 508
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 508), "delivery_duration", [], "any", false, false, true, 508), 508, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 513
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_delivery_fee", [], "any", false, false, true, 513)) {
                // line 514
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 517
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 522
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 522), "delivery_fee", [], "any", false, false, true, 522), 522, $this->source), 'widget');
                echo "
                                                    ";
                // line 523
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 523), "delivery_fee", [], "any", false, false, true, 523), 523, $this->source), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 528
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_tax_rule", [], "any", false, false, true, 528)) {
                // line 529
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 532
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 537
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 537), "tax_rate", [], "any", false, false, true, 537), 537, $this->source), 'widget');
                echo "
                                                    ";
                // line 538
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 538), "tax_rate", [], "any", false, false, true, 538), 538, $this->source), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 543
            echo "                                ";
        }
        // line 544
        echo "
                                ";
        // line 546
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 546), "eccube_form_options", [], "any", false, false, true, 546), "auto_render", [], "any", false, false, true, 546); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 547
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 547), "eccube_form_options", [], "any", false, false, true, 547), "form_theme", [], "any", false, false, true, 547)) {
                // line 548
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 548), "eccube_form_options", [], "any", false, false, true, 548), "form_theme", [], "any", false, false, true, 548)], true);
                // line 549
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 549, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 551
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>";
                // line 553
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 553), "label", [], "any", false, false, true, 553), 553, $this->source)), "html", null, true);
                echo "</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 557
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 557, $this->source), 'widget');
                echo "
                                                    ";
                // line 558
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 558, $this->source), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 563
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        echo "
                                ";
        // line 565
        if ((($context["has_class"] ?? null) == false)) {
            // line 566
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, true, 566), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 566), "eccube_form_options", [], "any", false, false, true, 566), "auto_render", [], "any", false, false, true, 566); }));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 567
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 567), "eccube_form_options", [], "any", false, false, true, 567), "form_theme", [], "any", false, false, true, 567)) {
                    // line 568
                    echo "                                            ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 568), "eccube_form_options", [], "any", false, false, true, 568), "form_theme", [], "any", false, false, true, 568)], true);
                    // line 569
                    echo "                                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 569, $this->source), 'row');
                    echo "
                                        ";
                } else {
                    // line 571
                    echo "                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>";
                    // line 573
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 573), "label", [], "any", false, false, true, 573), 573, $this->source)), "html", null, true);
                    echo "</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        ";
                    // line 577
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 577, $this->source), 'widget');
                    echo "
                                                        ";
                    // line 578
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 578, $this->source), 'errors');
                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 583
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 584
            echo "                                ";
        }
        // line 585
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 589
        if ( !(null === ($context["id"] ?? null))) {
            // line 590
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
            // line 595
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_class"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 597
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__card_title"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    ";
            // line 612
            if ((($context["has_class"] ?? null) == true)) {
                // line 613
                echo "                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"ps-3 pt-2 pb-2\">";
                // line 615
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 616
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 617
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 618
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
                echo "</th>
                                            <th class=\"pe-3 pt-2 pb-2\">";
                // line 619
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 622
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductClasses", [], "any", false, false, true, 622));
                foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
                    // line 623
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Class"], "visible", [], "any", false, false, true, 623) == 1)) {
                        // line 624
                        echo "                                                    <tr>
                                                        <td class=\"ps-3\">";
                        // line 625
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [], "any", false, false, true, 625)) {
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", [], "any", false, false, true, 625), "name", [], "any", false, false, true, 625), 625, $this->source), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 626
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [], "any", false, false, true, 626)) {
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", [], "any", false, false, true, 626), "name", [], "any", false, false, true, 626), 626, $this->source), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 627
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Class"], "code", [], "any", false, false, true, 627), 627, $this->source), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 628
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, true, 628)) {
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Class"], "stock", [], "any", false, false, true, 628), 628, $this->source), "html", null, true);
                        }
                        echo "</td>
                                                        <td class=\"pe-3\">";
                        // line 629
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [], "any", false, false, true, 629), 629, $this->source)), "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    // line 632
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 633
                echo "                                            </tbody>
                                        </table>
                                    ";
            }
            // line 636
            echo "
                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"";
            // line 638
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_product_class", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"";
            // line 639
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration")]), "html", null, true);
            // line 641
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm_of_product"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 647
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.free_area"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area__card_title"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            ";
        // line 673
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", [], "any", false, false, true, 673), 673, $this->source), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
                                            ";
        // line 674
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", [], "any", false, false, true, 674), 674, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    ";
        // line 686
        if ( !(null === ($context["id"] ?? null))) {
            // line 687
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn w-100 btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"";
            // line 693
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                           title=\"";
            // line 694
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 700
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category__product_card_title"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-text\">
                                                    <span id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 747
        echo "
                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    ";
        // line 749
        $macros["renderMacro"] = $this;
        // line 750
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 751
            echo "                                        <ul class=\"list-unstyled\">
                                            ";
            // line 752
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [($context["ChoicedCategoryIds"] ?? null), $context["TopCategory"], twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", [], "any", false, false, true, 752)], 752, $context, $this->getSourceContext());
            echo "
                                        </ul>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", [], "any", false, false, true, 755), 755, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn w-100 btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"";
        // line 760
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_category");
        echo "\"
                                       title=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        // line 762
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_category"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            ";
        // line 773
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag__product_card_title"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                ";
        // line 787
        if ((twig_length_filter($this->env, ($context["Tags"] ?? null)) > 0)) {
            // line 788
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 789
                echo "                                        <div class=\"d-inline-block mb-2 me-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 790
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, true, 790), 790, $this->source), "html", null, true);
                echo "</button>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 793
            echo "                                ";
        }
        // line 794
        echo "
                                <div class=\"d-block mb-3\" data-bs-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o fw-bold me-1\"></i>
                                        <span class=\"fw-bold\">";
        // line 799
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        ";
        // line 804
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tag", [], "any", false, false, true, 804), 804, $this->source), 'widget');
        echo "
                                    </div>
                                    ";
        // line 806
        if ((twig_length_filter($this->env, ($context["TagsList"] ?? null)) > 0)) {
            // line 807
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["TagsList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 808
                echo "                                            <div class=\"d-inline-block mb-2 me-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"";
                // line 810
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, true, 810), 810, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, true, 810), 810, $this->source), "html", null, true);
                echo "</button>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 813
            echo "                                    ";
        }
        // line 814
        echo "
                                    <div class=\"d-block mb-3\" data-bs-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"";
        // line 820
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_tag");
        echo "\"
                                       class=\"btn w-100 btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        // line 824
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_tag"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 833
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.create_date__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag me-1\"></i>
                                        <span>";
        // line 848
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "create_date", [], "any", false, false, true, 851), 851, $this->source)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh me-1\"></i>
                                        <span>";
        // line 857
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 860
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "update_date", [], "any", false, false, true, 860), 860, $this->source)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user me-1\"></i>
                                        <span>";
        // line 866
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 869
        ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", [], "any", false, false, true, 869)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", [], "any", false, false, true, 869), "name", [], "any", false, false, true, 869), "html", null, true))) : (print ("")));
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 880
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 882
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                ";
        // line 897
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, true, 897), 897, $this->source), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                ";
        // line 898
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, true, 898), 898, $this->source), 'errors');
        echo "
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
                            <a class=\"c-baseLink\" href=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 910), "get", ["eccube.admin.product.search.page_no"], "method", true, true, true, 910)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 910), "get", ["eccube.admin.product.search.page_no"], "method", false, false, true, 910), 910, $this->source), "1")) : ("1"))]), "html", null, true);
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 912
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 919
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", [], "any", false, false, true, 919), 919, $this->source), 'widget');
        echo "
                                ";
        // line 920
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", [], "any", false, false, true, 920), 920, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 923
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
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

    // line 735
    public function macro_tree($__ChoicedIds__ = null, $__Category__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "ChoicedIds" => $__ChoicedIds__,
            "Category" => $__Category__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 736
            echo "                                    ";
            $macros["selfMacro"] = $this;
            // line 737
            echo "                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_";
            // line 738
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, true, 738), 738, $this->source), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, true, 738), 738, $this->source), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, true, 738), ($context["ChoicedIds"] ?? null))) {
                echo "checked";
            }
            echo ">
                                        <label for=\"admin_product_category_";
            // line 739
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, true, 739), 739, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, true, 739), 739, $this->source), "html", null, true);
            echo "</label>
                                        <ul class=\"list-unstyled\">
                                            ";
            // line 741
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, true, 741));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 742
                echo "                                                ";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [($context["ChoicedIds"] ?? null), $context["ChildCategory"], ($context["form"] ?? null)], 742, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 744
            echo "                                        </ul>
                                    </li>
                                ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Product/product.twig";
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
        return array (  1738 => 744,  1729 => 742,  1725 => 741,  1718 => 739,  1708 => 738,  1705 => 737,  1702 => 736,  1687 => 735,  1674 => 923,  1668 => 920,  1664 => 919,  1654 => 912,  1650 => 911,  1646 => 910,  1631 => 898,  1627 => 897,  1609 => 882,  1604 => 880,  1590 => 869,  1584 => 866,  1575 => 860,  1569 => 857,  1560 => 851,  1554 => 848,  1536 => 833,  1523 => 824,  1521 => 823,  1515 => 820,  1507 => 814,  1504 => 813,  1493 => 810,  1489 => 808,  1484 => 807,  1482 => 806,  1477 => 804,  1469 => 799,  1462 => 794,  1459 => 793,  1450 => 790,  1447 => 789,  1442 => 788,  1440 => 787,  1423 => 773,  1408 => 762,  1406 => 761,  1402 => 760,  1393 => 755,  1384 => 752,  1381 => 751,  1376 => 750,  1374 => 749,  1370 => 747,  1360 => 728,  1334 => 705,  1327 => 700,  1316 => 694,  1312 => 693,  1304 => 687,  1302 => 686,  1287 => 674,  1283 => 673,  1276 => 669,  1257 => 653,  1253 => 652,  1246 => 647,  1236 => 641,  1234 => 639,  1230 => 638,  1226 => 636,  1221 => 633,  1215 => 632,  1209 => 629,  1201 => 628,  1197 => 627,  1191 => 626,  1185 => 625,  1182 => 624,  1179 => 623,  1175 => 622,  1169 => 619,  1165 => 618,  1161 => 617,  1157 => 616,  1153 => 615,  1149 => 613,  1147 => 612,  1129 => 597,  1124 => 595,  1117 => 590,  1115 => 589,  1109 => 585,  1106 => 584,  1100 => 583,  1092 => 578,  1088 => 577,  1081 => 573,  1077 => 571,  1071 => 569,  1068 => 568,  1065 => 567,  1060 => 566,  1058 => 565,  1055 => 564,  1049 => 563,  1041 => 558,  1037 => 557,  1030 => 553,  1026 => 551,  1020 => 549,  1017 => 548,  1014 => 547,  1009 => 546,  1006 => 544,  1003 => 543,  995 => 538,  991 => 537,  983 => 532,  978 => 529,  975 => 528,  967 => 523,  963 => 522,  955 => 517,  950 => 514,  948 => 513,  940 => 508,  936 => 507,  927 => 501,  923 => 500,  913 => 493,  909 => 492,  900 => 486,  896 => 485,  886 => 478,  882 => 477,  873 => 471,  869 => 470,  864 => 467,  862 => 466,  854 => 461,  850 => 460,  841 => 454,  837 => 453,  832 => 450,  824 => 445,  819 => 444,  817 => 443,  815 => 442,  813 => 441,  811 => 440,  809 => 439,  807 => 438,  805 => 437,  803 => 436,  801 => 435,  799 => 434,  797 => 433,  793 => 431,  789 => 430,  780 => 424,  775 => 422,  765 => 415,  761 => 414,  752 => 408,  748 => 407,  738 => 400,  734 => 399,  725 => 393,  720 => 391,  715 => 388,  713 => 387,  705 => 382,  701 => 381,  692 => 375,  688 => 374,  675 => 364,  666 => 358,  662 => 357,  654 => 352,  650 => 351,  638 => 342,  631 => 338,  627 => 337,  618 => 331,  613 => 329,  609 => 328,  605 => 326,  598 => 322,  594 => 321,  586 => 316,  580 => 313,  576 => 312,  572 => 310,  570 => 309,  564 => 306,  560 => 305,  552 => 300,  547 => 298,  542 => 295,  535 => 291,  527 => 286,  523 => 285,  519 => 283,  517 => 282,  500 => 268,  487 => 258,  483 => 257,  473 => 250,  467 => 247,  454 => 237,  446 => 231,  442 => 230,  389 => 179,  380 => 176,  377 => 175,  372 => 174,  362 => 170,  358 => 169,  355 => 168,  350 => 167,  332 => 163,  328 => 162,  325 => 161,  308 => 160,  304 => 159,  286 => 144,  261 => 122,  245 => 109,  240 => 106,  228 => 100,  225 => 99,  221 => 98,  218 => 97,  206 => 91,  203 => 90,  199 => 89,  190 => 85,  166 => 64,  157 => 58,  147 => 51,  142 => 48,  136 => 46,  134 => 45,  128 => 41,  121 => 37,  116 => 35,  111 => 33,  106 => 31,  101 => 29,  96 => 28,  94 => 27,  86 => 21,  82 => 20,  75 => 16,  68 => 15,  63 => 11,  61 => 18,  59 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/product.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Product/product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 27, "for" => 89, "import" => 749, "macro" => 735);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 546, "price" => 629, "length" => 787, "date_min" => 851, "default" => 910);
        static $functions = array("path" => 51, "form_widget" => 109, "form_errors" => 306, "form_row" => 549, "url" => 693);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'import', 'macro'],
                ['escape', 'trans', 'filter', 'price', 'length', 'date_min', 'default'],
                ['path', 'form_widget', 'form_errors', 'form_row', 'url']
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
