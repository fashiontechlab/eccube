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

/* @admin/error.twig */
class __TwigTemplate_c177e63e279355aa3d7de895cb183398 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
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

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"ja\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error_title"] ?? null), 16, $this->source), "html", null, true);
        echo "</title>
    <meta name=\"robots\" content=\"noindex,nofollow\"/>
    <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.5.2/css/all.css\" integrity=\"sha384-PPIZEGYM1v8zp5Py7UjFb79S58UeqCL9pYVnVPURKEqvioPROaVAJKKLzvH2rDnI\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.5.2/css/v4-shims.css\" integrity=\"sha384-XyvK/kKwgVW+fuRkusfLgfhAMuaxLPSOY8W7wj8tUkf0Nr2WGHniPmpdu+cmPS5n\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css", "admin"), "html", null, true);
        echo "\">
</head>
<body id=\"error-page\" class=\"bg-light\">

<div class=\"c-container\">
    <div class=\"c-contentsArea\">


        <div class=\"container\" style=\"margin-top: 150px;\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 offset-sm-3\">

                    <div class=\"text-center p-5 bg-white\">
                        <h3><i class=\"fa fa-exclamation-triangle fa-lg ms-1\"></i>";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error_title"] ?? null), 34, $this->source), "html", null, true);
        echo "</h3>
                        <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error_message"] ?? null), 35, $this->source), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 36
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_homepage");
        echo "\" class=\"btn btn-info btn-lg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.error.go_to_login"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js", "admin"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/error.twig";
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
        return array (  109 => 45,  95 => 36,  91 => 35,  87 => 34,  71 => 21,  65 => 18,  60 => 16,  54 => 12,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/error.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/error.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 16, "trans" => 36);
        static $functions = array("asset" => 18, "path" => 36);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
                ['asset', 'path']
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
