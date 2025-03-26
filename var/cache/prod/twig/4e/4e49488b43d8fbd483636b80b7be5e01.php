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

/* Block/auto_new_item.twig */
class __TwigTemplate_9f5b483cc532c6e82a4f7b9aa4b08c72 extends Template
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

        // line 11
        echo "
";
        // line 12
        if (array_key_exists("Products", $context)) {
            // line 13
            echo "<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NEW ITEM"), "html", null, true);
            echo "</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新着商品"), "html", null, true);
            echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
            // line 21
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
            echo "</a>
                </div>
            </div>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 25
                echo "                <div class=\"ec-newItemRole__listItem __getAutoNewItemBlock\">
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 26)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, true, 27), 27, $this->source)), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">
                            ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 30) && (twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, true, 30) != twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, true, 30)))) {
                    // line 31
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 31), 31, $this->source)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, true, 31), 31, $this->source)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 33
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 33), 33, $this->source)), "html", null, true);
                    echo "
                            ";
                }
                // line 35
                echo "                        </p>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
    </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Block/auto_new_item.twig";
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
        return array (  127 => 39,  118 => 35,  112 => 33,  104 => 31,  102 => 30,  97 => 28,  91 => 27,  87 => 26,  84 => 25,  80 => 24,  72 => 21,  68 => 20,  63 => 18,  56 => 13,  54 => 12,  51 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/auto_new_item.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Block/auto_new_item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 24);
        static $filters = array("escape" => 18, "trans" => 18, "no_image_product" => 27, "price" => 31);
        static $functions = array("url" => 21, "asset" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price'],
                ['url', 'asset']
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
