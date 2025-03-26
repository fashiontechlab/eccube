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

/* RelatedProduct42/Resource/template/front/related_product.twig */
class __TwigTemplate_787d636e7820747c11be562336582ded extends Template
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
        echo "<script>
    \$(function () {
        \$('#RelatedProduct-product_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));
    });
</script>

<div id=\"RelatedProduct-product_area\" class=\"ec-shelfRole\">
    <ul class=\"ec-shelfGrid\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "RelatedProducts", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProduct"]) {
            // line 10
            echo "            ";
            $context["ChildProduct"] = twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 10);
            // line 11
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "Status", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW"))) {
                // line 12
                echo "                <li class=\"ec-shelfGrid__item\">
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "id", [], "any", false, false, true, 13)]), "html", null, true);
                echo "\">
                        <p class=\"ec-shelfGrid__item-image\">
                            <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 15), "main_list_image", [], "any", false, false, true, 15), 15, $this->source)), "save_image"), "html", null, true);
                echo "\">
                        </p>
                        <p>";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 17), "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</p>
                        <p>
                            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 19), "hasProductClass", [], "any", false, false, true, 19)) {
                    // line 20
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 20), "getPrice02Min", [], "any", false, false, true, 20) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 20), "getPrice02Max", [], "any", false, false, true, 20))) {
                        // line 21
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 21), "getPrice02IncTaxMin", [], "any", false, false, true, 21), 21, $this->source)), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 23
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 23), "getPrice02IncTaxMin", [], "any", false, false, true, 23), 23, $this->source)), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 23), "getPrice02IncTaxMax", [], "any", false, false, true, 23), 23, $this->source)), "html", null, true);
                        echo "
                                ";
                    }
                    // line 25
                    echo "                            ";
                } else {
                    // line 26
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", [], "any", false, false, true, 26), "getPrice02IncTaxMin", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
                    echo "
                            ";
                }
                // line 28
                echo "                        </p>
                    </a>
                    <span>";
                // line 30
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "content", [], "any", false, false, true, 30), 30, $this->source));
                echo "</span>
                </li>
            ";
            }
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "RelatedProduct42/Resource/template/front/related_product.twig";
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
        return array (  133 => 34,  127 => 33,  121 => 30,  117 => 28,  111 => 26,  108 => 25,  100 => 23,  94 => 21,  91 => 20,  89 => 19,  84 => 17,  79 => 15,  74 => 13,  71 => 12,  68 => 11,  65 => 10,  61 => 9,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "RelatedProduct42/Resource/template/front/related_product.twig", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/RelatedProduct42/Resource/template/front/related_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "set" => 10, "if" => 11);
        static $filters = array("escape" => 13, "no_image_product" => 15, "price" => 21, "purify" => 30, "raw" => 30);
        static $functions = array("constant" => 11, "url" => 13, "asset" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'no_image_product', 'price', 'purify', 'raw'],
                ['constant', 'url', 'asset']
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
