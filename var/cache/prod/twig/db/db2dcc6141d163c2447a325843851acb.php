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

/* Coupon42/Resource/template/default/coupon_shopping_item_confirm.twig */
class __TwigTemplate_4b6f9708257230c69662bec16bfb812c extends Template
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

        // line 10
        echo "<script type=\"text/javascript\">
    \$(function () {
        // append to layout
        \$(\".ec-orderPayment\").last().after(\$(\"#coupon\").detach());
    })
</script>

<div id=\"coupon\" class=\"ec-orderCoupon\">
    <div class=\"ec-rectHeading\">
        <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.header"), "html", null, true);
        echo "</h2>
    </div>

    <div id=\"customer_detail_box\" class=\"column is-edit\">
        ";
        // line 23
        if (($context["CouponOrder"] ?? null)) {
            // line 24
            echo "            <strong class=\"ec-color-red\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.use_code", ["%code%" => twig_get_attribute($this->env, $this->source, ($context["CouponOrder"] ?? null), "coupon_cd", [], "any", false, false, true, 24)]), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.empty"), "html", null, true);
            echo "
        ";
        }
        // line 28
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Resource/template/default/coupon_shopping_item_confirm.twig";
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
        return array (  83 => 28,  77 => 26,  71 => 24,  69 => 23,  62 => 19,  51 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/default/coupon_shopping_item_confirm.twig", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Coupon42/Resource/template/default/coupon_shopping_item_confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23);
        static $filters = array("escape" => 19, "trans" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
                []
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
