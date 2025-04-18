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

/* meta.twig */
class __TwigTemplate_950f6d5112b0ea83f152108a85ae8f3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meta.twig"));

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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 1), "get", ["_route"], "method", false, false, true, 1) == "product_detail")) {
            // line 2
            echo "    ";
            $context["meta_og_type"] = "og:product";
            // line 3
            echo "    ";
            $context["meta_description"] = _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", true, true, true, 3)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", false, false, true, 3), 3, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, true, 3), 3, $this->source))) : (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, true, 3))), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, true, 3), 3, $this->source));
            // line 4
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 4)]);
            // line 5
            echo "    <meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "main_list_image", [], "any", false, false, true, 6), 6, $this->source)), "save_image")), "html", null, true);
            echo "\" />
    <meta property=\"product:price:amount\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\"/>
    <meta property=\"product:price:currency\" content=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "currency", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\"/>
    <meta property=\"product:product_link\" content=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 9)]), "html", null, true);
            echo "\"/>
    <meta property=\"product:retailer_title\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\"/>
    ";
            // line 11
            if ( !twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, true, 11)) {
                // line 12
                echo "        <meta name=\"robots\" content=\"noindex\">
    ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["app"] ?? null), "request", [], "any", false, false, true, 14), "get", ["_route"], "method", false, false, true, 14) == "product_list")) {
            // line 15
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => ((twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", true, true, true, 15)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, true, 15), 15, $this->source), null)) : (null))]);
            // line 16
            echo "    ";
            if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) == 0)) {
                // line 17
                echo "        <meta name=\"robots\" content=\"noindex\">
    ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["app"] ?? null), "request", [], "any", false, false, true, 19), "get", ["_route"], "method", false, false, true, 19) == "homepage")) {
            // line 20
            echo "    ";
            $context["meta_og_type"] = "website";
            // line 21
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        } elseif (((        // line 22
array_key_exists("Page", $context) && (twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "edit_type", [], "any", false, false, true, 22) == 0)) && twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "url", [], "any", true, true, true, 22))) {
            // line 23
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_user_data_route", [], "any", false, false, true, 23), 23, $this->source), ["route" => twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "url", [], "any", false, false, true, 23)]);
        }
        // line 25
        echo "
<meta property=\"og:type\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("meta_og_type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["meta_og_type"] ?? null), 26, $this->source), "article")) : ("article")), "html", null, true);
        echo "\"/>
<meta property=\"og:site_name\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "\"/>
";
        // line 28
        $context["meta_description"] = ((array_key_exists("meta_description", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["meta_description"] ?? null), 28, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, true, 28), 28, $this->source))) : (twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, true, 28)));
        // line 29
        if (($context["meta_description"] ?? null)) {
            // line 30
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(($context["meta_description"] ?? null), 30, $this->source)), 0, 120), "html", null, true);
            echo "\">
    <meta property=\"og:description\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(($context["meta_description"] ?? null), 31, $this->source)), 0, 120), "html", null, true);
            echo "\"/>
";
        }
        // line 33
        if (((array_key_exists("meta_canonical", $context)) ? (_twig_default_filter(($context["meta_canonical"] ?? null))) : (""))) {
            // line 34
            echo "    ";
            // line 35
            echo "    ";
            // line 36
            echo "    ";
            if ((array_key_exists("Category", $context) && ($context["Category"] ?? null))) {
                // line 37
                echo "        ";
                if (((array_key_exists("pagination", $context) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", true, true, true, 37)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 37), "pageCount", [], "any", false, false, true, 37) > 1))) {
                    // line 38
                    echo "            ";
                    // line 39
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 39), "current", [], "any", false, false, true, 39) == 1)) {
                        // line 40
                        echo "            <meta property=\"og:url\" content=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 40, $this->source), "html", null, true);
                        echo "\"/>
            <link rel=\"next\" href=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 41, $this->source), "html", null, true);
                        echo "&pageno=2\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => 2]), "html", null, true);
                        echo "\">
            <link rel=\"canonical\" href=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 42, $this->source), "html", null, true);
                        echo "\" />
            ";
                        // line 44
                        echo "            ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 44), "last", [], "any", false, false, true, 44) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 44), "current", [], "any", false, false, true, 44))) {
                        // line 45
                        echo "            <meta property=\"og:url\" content=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 45, $this->source), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 45), "last", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                        echo "\"/>
            <link rel=\"prev\" href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 46, $this->source), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 46), "previous", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 46), "previous", [], "any", false, false, true, 46)]), "html", null, true);
                        echo "\">
            <link rel=\"canonical\" href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 47, $this->source), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 47), "last", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                        echo "\" />
            ";
                        // line 49
                        echo "            ";
                    } else {
                        // line 50
                        echo "            <meta property=\"og:url\" content=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 50, $this->source), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 50), "current", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                        echo "\"/>
            <link rel=\"next\" href=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 51, $this->source), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 51), "next", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 51), "next", [], "any", false, false, true, 51)]), "html", null, true);
                        echo "\">
            <link rel=\"prev\" href=\"";
                        // line 52
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 52, $this->source), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 52), "previous", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 52), "previous", [], "any", false, false, true, 52)]), "html", null, true);
                        echo "\">
            <link rel=\"canonical\" href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 53, $this->source), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 53), "current", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "\" />
            ";
                    }
                    // line 55
                    echo "        ";
                } else {
                    // line 56
                    echo "        ";
                    // line 57
                    echo "        <meta property=\"og:url\" content=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 57, $this->source), "html", null, true);
                    echo "\"/>
        <link rel=\"canonical\" href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 58, $this->source), "html", null, true);
                    echo "\" />
        ";
                }
                // line 60
                echo "    ";
                // line 61
                echo "    ";
            } else {
                // line 62
                echo "    <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 62, $this->source), "html", null, true);
                echo "\"/>
    <link rel=\"canonical\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["meta_canonical"] ?? null), 63, $this->source), "html", null, true);
                echo "\" />
    ";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "meta.twig";
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
        return array (  269 => 63,  264 => 62,  261 => 61,  259 => 60,  254 => 58,  249 => 57,  247 => 56,  244 => 55,  237 => 53,  227 => 52,  217 => 51,  210 => 50,  207 => 49,  201 => 47,  191 => 46,  184 => 45,  181 => 44,  177 => 42,  169 => 41,  164 => 40,  161 => 39,  159 => 38,  156 => 37,  153 => 36,  151 => 35,  149 => 34,  147 => 33,  142 => 31,  137 => 30,  135 => 29,  133 => 28,  129 => 27,  125 => 26,  122 => 25,  118 => 23,  116 => 22,  113 => 21,  110 => 20,  108 => 19,  104 => 17,  101 => 16,  98 => 15,  96 => 14,  92 => 12,  90 => 11,  86 => 10,  82 => 9,  78 => 8,  74 => 7,  70 => 6,  65 => 5,  62 => 4,  59 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "meta.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/meta.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("default" => 3, "escape" => 5, "no_image_product" => 6, "length" => 16, "slice" => 30, "striptags" => 30, "trans" => 41);
        static $functions = array("url" => 4, "absolute_url" => 6, "asset" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['default', 'escape', 'no_image_product', 'length', 'slice', 'striptags', 'trans'],
                ['url', 'absolute_url', 'asset']
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
