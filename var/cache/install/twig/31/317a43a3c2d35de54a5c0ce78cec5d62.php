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

/* Coupon42/Resource/template/default/coupon_shopping_item.twig */
class __TwigTemplate_4bb1a0538b278d2b2d69709524cfe108 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/default/coupon_shopping_item.twig"));

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
        \$('#coupon_button').on(\"click\", function () {
            \$(this).attr('disabled', 'disabled');
            \$.ajax({
                type: 'POST',
                data: \$('#shopping-form').serialize(),
                url: '";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_redirect_to");
        echo "',
                success: function(data) {
                    window.location.href = '";
        // line 19
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                },
                error: function() {
                    window.location.href = '";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                }
            });
            return false;
        });

        // append to layout
        \$(\".ec-orderPayment\").last().after(\$(\"#coupon\").detach());
    })
</script>

<div id=\"coupon\" class=\"ec-orderCoupon\">
    <div class=\"ec-rectHeading\">
        <h2>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.header"), "html", null, true);
        echo "</h2>
    </div>
    <div id=\"customer_detail_box\" class=\"column\">
        ";
        // line 38
        if (($context["CouponOrder"] ?? null)) {
            // line 39
            echo "            <strong class=\"ec-color-red\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.use_code", ["%code%" => twig_get_attribute($this->env, $this->source, ($context["CouponOrder"] ?? null), "coupon_cd", [], "any", false, false, true, 39)]), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.empty"), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "        <p><a class=\"ec-inlineBtn\" id=\"coupon_button\" href=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.button.add_coupon"), "html", null, true);
        echo "</a></p>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Resource/template/default/coupon_shopping_item.twig";
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
        return array (  110 => 43,  104 => 41,  98 => 39,  96 => 38,  90 => 35,  74 => 22,  68 => 19,  63 => 17,  54 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/default/coupon_shopping_item.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Coupon42/Resource/template/default/coupon_shopping_item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 35, "trans" => 35);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
                ['url']
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
