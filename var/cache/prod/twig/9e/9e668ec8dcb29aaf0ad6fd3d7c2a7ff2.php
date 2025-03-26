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

/* @admin/Store/plugin_confirm_uninstall.twig */
class __TwigTemplate_f648c8c5829f8c170525b0696951441e extends Template
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
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_confirm_uninstall.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "削除確認";
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "オーナーズストア";
    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <style type=\"text/css\">
        .btn-remove {
            background: #C04949;
            border-color: #C04949;
        }
    </style>
";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">以下のプラグインを削除します。よろしいですか？（取り消しできません)</span>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"row m-0 p-3 border-bt\">
                            <div class=\"col-sm-2 pe-2 pe-sm-3\">
                                <img class=\"w-100 img-responsive\"
                                     src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"col-sm-10 col-md-9\">
                                <div class=\"info\">
                                    <h5>
                                        <a href=\"#\" class=\"fw-bold\">EC-CUBEペイメント決済プラグイン</a> （最新バージョン：1.0.2）
                                    </h5>
                                    <span>EC-CUBEの開発元が提供する決済プラグイン。EC-CUBE開発元提供サービスだからこそ実現できた、豊富な機能をそろえています。</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row text-end my-4 mx-0\">
                            <div class=\"col-12\">
                                <a href=\"#\" class=\"btn btn-ec-sub\">キャンセル</a>
                                <a href=\"#\" class=\"btn btn-primary btn-remove\">削除</a>
                            </div>
                        </div>
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
        return "@admin/Store/plugin_confirm_uninstall.twig";
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
        return array (  111 => 39,  98 => 28,  94 => 27,  84 => 19,  80 => 18,  73 => 16,  66 => 15,  61 => 11,  59 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_confirm_uninstall.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Store/plugin_confirm_uninstall.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13);
        static $filters = array("escape" => 39);
        static $functions = array("asset" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['asset']
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
