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

/* frame.twig */
class __TwigTemplate_f2cc1560abcd6a24bd59d0920108de3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'script' => [$this, 'block_script'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frame.twig"));

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

        // line 11
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/common/favicon.ico", "install"), "html", null, true);
        echo "\">
    <title>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ようこそ | EC-CUBEインストール"), "html", null, true);
        echo "</title>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("install.bundle.js", "bundle"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css", "install"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js", "install"), "html", null, true);
        echo "\"></script>
</head>

<body>
<div id=\"wrapper\">
    <!-- ▼ #header ▼ -->
    <header id=\"header\" role=\"navigation\">
        <div class=\"navbar\">
            <div class=\"logo\" href=\"./\"><svg class=\"cb cb-logomark\"><use xlink:href=\"#cb-logomark\" /></svg><svg class=\"cb cb-logotext\"><use xlink:href=\"#cb-logotext\" /></svg></div>
        </div>
    </header>
    <!-- ▲ #header ▲ -->
    <div class=\"main_wrap\">
        <!-- ▼ #side ▼ -->
        <aside id=\"side\">
            <div class=\"step_nav\">
                <ol>
                    <li";
        // line 40
        if ((($context["current"] ?? null) >= 1)) {
            echo " class=\"current\"";
        }
        echo "><span class=\"number\">1</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ようこそ"), "html", null, true);
        echo "</li>
                    <li";
        // line 41
        if ((($context["current"] ?? null) >= 2)) {
            echo " class=\"current\"";
        }
        echo "><span class=\"number\">2</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("権限チェック"), "html", null, true);
        echo "</li>
                    <li";
        // line 42
        if ((($context["current"] ?? null) >= 3)) {
            echo " class=\"current\"";
        }
        echo "><span class=\"number\">3</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("サイトの設定"), "html", null, true);
        echo "</li>
                    <li";
        // line 43
        if ((($context["current"] ?? null) >= 4)) {
            echo " class=\"current\"";
        }
        echo "><span class=\"number\">4</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("データベースの設定"), "html", null, true);
        echo "</li>
                    <li";
        // line 44
        if ((($context["current"] ?? null) >= 5)) {
            echo " class=\"current\"";
        }
        echo "><span class=\"number\">5</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("データベースの初期化"), "html", null, true);
        echo "</li>
                    <li";
        // line 45
        if ((($context["current"] ?? null) >= 6)) {
            echo " class=\"current\"";
        }
        echo "><span class=\"number\">6</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("インストール完了"), "html", null, true);
        echo "</li>
                </ol>
            </div>
        </aside>
        <!-- ▲ #side ▲ -->
        <!-- ▼ #main ▼ -->
        ";
        // line 51
        $this->displayBlock('main', $context, $blocks);
        // line 52
        echo "        <!-- ▲ #main ▲ -->
    </div>

</div>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js", "install"), "html", null, true);
        echo "\"></script>
<script>
\$(function() {
    /*
     * for svg icon
     */
    \$.ajax({
        type: 'GET',
        url: \"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/svg.html", "install"), "html", null, true);
        echo "\",
        dataType: 'html',
        success: function(data){
            \$('body').prepend(data);
        },
        error: function() {
            console.log('error');
        }
    });
});
</script>
";
        // line 75
        $this->displayBlock('script', $context, $blocks);
        // line 76
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "frame.twig";
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
        return array (  214 => 75,  202 => 51,  193 => 76,  191 => 75,  177 => 64,  166 => 56,  160 => 52,  158 => 51,  145 => 45,  137 => 44,  129 => 43,  121 => 42,  113 => 41,  105 => 40,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  59 => 12,  56 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "frame.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/install/frame.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "block" => 51);
        static $filters = array("escape" => 12, "trans" => 20);
        static $functions = array("asset" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'trans'],
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
