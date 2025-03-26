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

/* Coupon42/Resource/template/admin/order_edit_coupon.twig */
class __TwigTemplate_477aa35a876eda343f5d18aed1205d66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/admin/order_edit_coupon.twig"));

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
        \$(\".c-primaryCol .card\").last().before(\$(\"#coupon\").detach());
    });
</script>
";
        // line 16
        echo "<div id=\"coupon\" class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\">
                    <span class=\"card-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.order_edit.header"), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#couponArea\" aria-expanded=\"false\" aria-controls=\"couponArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
        </div>
    </div>
    <div class=\"collapse show ec-cardCollapse\" id=\"couponArea\">
        <div class=\"card-body\">
            <label class=\"control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.order_edit.body"), "html", null, true);
        echo "</label>　
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["coupon_cd"] ?? null), 30, $this->source), "html", null, true);
        echo "　";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["coupon_name"] ?? null), 30, $this->source), "html", null, true);
        echo " ";
        if (($context["coupon_change_status"] ?? null)) {
            echo "<p class=\"text-danger\">注文がキャンセルされたため、クーポンが適用されていません。お支払い合計を変更する場合は、「";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["coupon_name"] ?? null), 30, $this->source), "html", null, true);
            echo "」の明細を手動にて削除してください。</p>";
        }
        // line 31
        echo "        </div>
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
        return "Coupon42/Resource/template/admin/order_edit_coupon.twig";
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
        return array (  93 => 31,  83 => 30,  79 => 29,  68 => 21,  61 => 16,  54 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/order_edit_coupon.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Coupon42/Resource/template/admin/order_edit_coupon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30);
        static $filters = array("escape" => 21, "trans" => 21);
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
