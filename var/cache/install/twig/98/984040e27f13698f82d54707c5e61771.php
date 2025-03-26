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

/* Product/detail.twig */
class __TwigTemplate_eed13c1aaedf059573fd5ae7fc071a62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/detail.twig"));

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
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 96
        echo "    <script>
        eccube.classCategories = ";
        // line 97
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($this->sandbox->ensureToStringAllowed(($context["Product"] ?? null), 97, $this->source));
        echo ";

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 108)) {
            // line 109
            echo "        fnSetClassCategories(
            \$('#form1'), ";
            // line 110
            echo json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, true, 110), "vars", [], "any", false, false, true, 110), "value", [], "any", false, false, true, 110), 110, $this->source));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 112
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 112)) {
            // line 113
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo ", ";
            echo json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, true, 113), "vars", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113), 113, $this->source));
            echo ", null);
        ";
        }
        // line 115
        echo "    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            // Core Web Vital の Cumulative Layout Shift(CLS)対策のため
            // img タグに width, height が付与されている.
            // 630px 未満の画面サイズでは縦横比が壊れるための対策
            // see https://github.com/EC-CUBE/ec-cube/pull/5023
            \$('.ec-grid2__cell').hide();
            var removeSize = function () {
                \$('.slide-item').height('');
                \$('.slide-item img')
                    .removeAttr('width')
                    .removeAttr('height')
                    .removeAttr('style');
            };
            var slickInitial = function(slick) {
                \$('.ec-grid2__cell').fadeIn(1500);
                var baseHeight = \$(slick.target).height();
                var baseWidth = \$(slick.target).width();
                var rate = baseWidth / baseHeight;

                \$('.slide-item').height(baseHeight * rate); // 余白を削除する
                // transform を使用することでCLSの影響を受けないようにする
                \$('.slide-item img')
                    .css(
                        {
                            'transform-origin': 'top left',
                            'transform': 'scaleY(' + rate + ')',
                            'transition': 'transform .1s'
                        }
                    );
                // 正しいサイズに近くなったら属性を解除する
                setTimeout(removeSize, 500);
            };
            \$('.item_visual').on('init', slickInitial);
            // リサイズ時は CLS の影響を受けないため属性を解除する
            \$(window).resize(removeSize);
            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                ";
        // line 179
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 179)) {
            // line 180
            echo "                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                ";
        }
        // line 188
        echo "
                ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 189)) {
            // line 190
            echo "                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                ";
        }
        // line 198
        echo "
                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').text(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: \"";
        // line 228
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("block_cart");
        echo "\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへの追加に失敗しました。"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });

        \$('.ec-modal-wrap').on('click', function(e) {
            // モーダル内の処理は外側にバブリングさせない
            e.stopPropagation();
        });
        \$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org/\",
        \"@type\": \"Product\",
        \"name\": \"";
        // line 255
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
        echo "\",
        \"image\": [
            ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, true, 257));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 258
            echo "                \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 258), "schemeAndHttpHost", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["img"], 258, $this->source), "save_image"), "html", null, true);
            echo "\"";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 258)) {
                echo ",";
            }
            // line 259
            echo "
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 261
            echo "                \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 261), "schemeAndHttpHost", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\"
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "        ],
        \"description\": \"";
        // line 264
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", true, true, true, 264)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", false, false, true, 264), 264, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, true, 264), 264, $this->source))) : (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, true, 264))), ["
" => "", "" => ""]), 0, 300), "html", null, true);
        echo "\",
        ";
        // line 265
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, true, 265)) {
            // line 266
            echo "        \"sku\": \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
            echo "\",
        ";
        }
        // line 268
        echo "        \"offers\": {
            \"@type\": \"Offer\",
            \"url\": \"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 270)]), "html", null, true);
        echo "\",
            \"priceCurrency\": \"";
        // line 271
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "currency", [], "any", false, false, true, 271), 271, $this->source), "html", null, true);
        echo "\",
            \"price\": ";
        // line 272
        ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, true, 272)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, true, 272), "html", null, true))) : (print (0)));
        echo ",
            \"availability\": \"";
        // line 273
        echo ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, true, 273)) ? ("InStock") : ("OutOfStock"));
        echo "\"
        }
    }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 279
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 280
        echo "    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">

                    <div class=\"item_visual\">
                        ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, true, 286));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 287
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["ProductImage"], 287, $this->source), "save_image"), "html", null, true);
            echo "\" alt=\"";
            ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 287)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 287), "html", null, true))) : (print ("")));
            echo "\" width=\"550\" height=\"550\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 287) > 1)) {
                echo " loading=\"lazy\"";
            }
            echo "></div>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 289
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\" alt=\"";
            ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 289)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 289), "html", null, true))) : (print ("")));
            echo "\" width=\"550\" height=\"550\"></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                    </div>
                    <div class=\"item_nav\">
                        ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, true, 293));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 294
            echo "                            <div class=\"slideThumb\" data-index=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["ProductImage"], 294, $this->source), "save_image"), "html", null, true);
            echo "\" alt=\"\" width=\"133\" height=\"133\" loading=\"lazy\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    ";
        // line 302
        echo "                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">";
        // line 303
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 306
        echo "                    <ul class=\"ec-productRole__tags\">
                        ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Tags", [], "any", false, false, true, 307));
        foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
            // line 308
            echo "                            <li class=\"ec-productRole__tag tag_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["Tag"], 308, $this->source), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "                    </ul>
                    ";
        // line 312
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, true, 312)) {
            // line 313
            echo "<div class=\"ec-productRole__priceRegular\">
                            ";
            // line 314
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, true, 314)) && (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, true, 314) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, true, 314)))) {
                // line 315
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, true, 315), 315, $this->source)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 316
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                            ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 317
($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, true, 317)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, true, 317)))) {
                // line 318
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, true, 318), 318, $this->source)), "html", null, true);
                echo "～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, true, 318), 318, $this->source)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 319
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                            ";
            }
            // line 321
            echo "                        </div>
                    ";
        } else {
            // line 323
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, true, 323))) {
                // line 324
                echo "                            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, true, 324), 324, $this->source)), "html", null, true);
                echo "</span>
                            <span class=\"ec-productRole__priceRegularTax\">";
                // line 325
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 327
            echo "                    ";
        }
        // line 328
        echo "                    ";
        // line 329
        echo "                    <div class=\"ec-productRole__price\">
                        ";
        // line 330
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, true, 330)) {
            // line 331
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, true, 331) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, true, 331))) {
                // line 332
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 333
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, true, 333), 333, $this->source)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 334
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            } else {
                // line 337
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 338
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, true, 338), 338, $this->source)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, true, 338), 338, $this->source)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 339
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 342
            echo "                        ";
        } else {
            // line 343
            echo "                            <div class=\"ec-price\">
                                <span class=\"ec-price__price\">";
            // line 344
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, true, 344), 344, $this->source)), "html", null, true);
            echo "</span>
                                <span class=\"ec-price__tax\">";
            // line 345
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 348
        echo "                    </div>
                    ";
        // line 350
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, true, 350))) {
            // line 351
            echo "                        <div class=\"ec-productRole__code\">
                            ";
            // line 352
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品コード"), "html", null, true);
            echo "： <span class=\"product-code-default\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, true, 352) != twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, true, 352))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
            }
            echo "</span>
                        </div>
                    ";
        }
        // line 355
        echo "                    ";
        // line 356
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, true, 356))) {
            // line 357
            echo "                        <div class=\"ec-productRole__category\">
                            <div>";
            // line 358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("関連カテゴリ"), "html", null, true);
            echo "</div>
                            ";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, true, 359));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 360
                echo "                                <ul>
                                    <li>
                                        ";
                // line 362
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, true, 362), "path", [], "any", false, false, true, 362));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                    // line 363
                    echo "                                            <a href=\"";
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 363), 363, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, true, 363), 363, $this->source), "html", null, true);
                    echo "</a>";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 363) == false)) {
                        // line 364
                        echo "                                            <span>＞</span>";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                echo "                                    </li>
                                </ul>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "                        </div>
                    ";
        }
        // line 371
        echo "                    <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 371)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                        ";
        // line 372
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, true, 372)) {
            // line 373
            echo "                            <div class=\"ec-productRole__actions\">
                                ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 374)) {
                // line 375
                echo "                                    <div class=\"ec-select\">
                                        ";
                // line 376
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, true, 376), 376, $this->source), 'row');
                echo "
                                        ";
                // line 377
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, true, 377), 377, $this->source), 'errors');
                echo "
                                    </div>
                                    ";
                // line 379
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 379)) {
                    // line 380
                    echo "                                        <div class=\"ec-select\">
                                            ";
                    // line 381
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, true, 381), 381, $this->source), 'row');
                    echo "
                                            ";
                    // line 382
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, true, 382), 382, $this->source), 'errors');
                    echo "
                                        </div>
                                    ";
                }
                // line 385
                echo "                                ";
            }
            // line 386
            echo "                                <div class=\"ec-numberInput\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
            echo "</span>
                                    ";
            // line 387
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, true, 387), 387, $this->source), 'widget');
            echo "
                                    ";
            // line 388
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, true, 388), 388, $this->source), 'errors');
            echo "
                                </div>
                            </div>
                            <div class=\"ec-productRole__btn\">
                                <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                    ";
            // line 393
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        } else {
            // line 397
            echo "                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    ";
            // line 399
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        }
        // line 403
        echo "
                        ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 404, $this->source), 'rest');
        echo "
                    </form>
                    <div class=\"ec-modal\">
                        <div class=\"ec-modal-overlay\">
                            <div class=\"ec-modal-wrap\">
                                <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span></span>
                                <div id=\"ec-modal-header\" class=\"text-center\">";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
        echo "</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <span class=\"ec-inlineBtn--cancel\">";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
        echo "</span>
                                        <a href=\"";
        // line 414
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\" class=\"ec-inlineBtn--action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 420
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, true, 420)) {
            // line 421
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 421)]), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"ec-productRole__btn\">
                                ";
            // line 423
            if ((($context["is_favorite"] ?? null) == false)) {
                // line 424
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                        ";
                // line 425
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りに追加"), "html", null, true);
                echo "
                                    </button>
                                ";
            } else {
                // line 428
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                            disabled=\"disabled\">";
                // line 429
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りに追加済です。"), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 432
            echo "                            </div>
                        </form>
                    ";
        }
        // line 435
        echo "                    <div class=\"ec-productRole__description\">";
        echo twig_nl2br($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, true, 435), 435, $this->source));
        echo "
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 440
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, true, 440)) {
            // line 441
            echo "             <div class=\"ec-productRole__description\">
                 ";
            // line 442
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, twig_template_from_string($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, true, 442), 442, $this->source)), array(), true, false, true);
            echo "
            </div>
        ";
        }
        // line 445
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Product/detail.twig";
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
        return array (  984 => 445,  978 => 442,  975 => 441,  973 => 440,  964 => 435,  959 => 432,  953 => 429,  950 => 428,  944 => 425,  941 => 424,  939 => 423,  933 => 421,  931 => 420,  920 => 414,  916 => 413,  910 => 410,  906 => 409,  898 => 404,  895 => 403,  888 => 399,  884 => 397,  877 => 393,  869 => 388,  865 => 387,  860 => 386,  857 => 385,  851 => 382,  847 => 381,  844 => 380,  842 => 379,  837 => 377,  833 => 376,  830 => 375,  828 => 374,  825 => 373,  823 => 372,  818 => 371,  814 => 369,  806 => 366,  791 => 364,  782 => 363,  765 => 362,  761 => 360,  757 => 359,  753 => 358,  750 => 357,  747 => 356,  745 => 355,  733 => 352,  730 => 351,  727 => 350,  724 => 348,  718 => 345,  714 => 344,  711 => 343,  708 => 342,  702 => 339,  696 => 338,  693 => 337,  687 => 334,  683 => 333,  680 => 332,  678 => 331,  676 => 330,  673 => 329,  671 => 328,  668 => 327,  663 => 325,  656 => 324,  653 => 323,  649 => 321,  644 => 319,  635 => 318,  633 => 317,  629 => 316,  622 => 315,  620 => 314,  617 => 313,  614 => 312,  611 => 310,  600 => 308,  596 => 307,  593 => 306,  588 => 303,  585 => 302,  578 => 296,  559 => 294,  542 => 293,  538 => 291,  527 => 289,  505 => 287,  487 => 286,  479 => 280,  472 => 279,  460 => 273,  456 => 272,  452 => 271,  448 => 270,  444 => 268,  438 => 266,  436 => 265,  431 => 264,  428 => 263,  418 => 261,  404 => 259,  396 => 258,  378 => 257,  373 => 255,  350 => 235,  340 => 228,  310 => 201,  305 => 198,  296 => 192,  292 => 190,  290 => 189,  287 => 188,  278 => 182,  274 => 180,  272 => 179,  206 => 115,  198 => 113,  196 => 112,  191 => 110,  188 => 109,  186 => 108,  172 => 97,  169 => 96,  162 => 95,  78 => 16,  71 => 15,  63 => 11,  61 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/detail.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Product/detail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 108, "for" => 257);
        static $filters = array("raw" => 97, "json_encode" => 110, "escape" => 113, "trans" => 182, "no_image_product" => 261, "slice" => 264, "replace" => 264, "default" => 264, "price" => 315, "nl2br" => 435);
        static $functions = array("class_categories_as_json" => 97, "url" => 228, "asset" => 258, "form_row" => 376, "form_errors" => 377, "form_widget" => 387, "form_rest" => 404, "include" => 442, "template_from_string" => 442);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['raw', 'json_encode', 'escape', 'trans', 'no_image_product', 'slice', 'replace', 'default', 'price', 'nl2br'],
                ['class_categories_as_json', 'url', 'asset', 'form_row', 'form_errors', 'form_widget', 'form_rest', 'include', 'template_from_string']
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
