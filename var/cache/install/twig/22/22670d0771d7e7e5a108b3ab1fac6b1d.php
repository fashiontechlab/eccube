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

/* Coupon42/Resource/template/admin/regist_category_list_prototype.twig */
class __TwigTemplate_62762bd723a3884776283ce37d8161c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/admin/regist_category_list_prototype.twig"));

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
        ob_start(function () { return ''; });
        // line 2
        echo "    <div class=\"row item_box\">
        <input type=\"hidden\" id=\"coupon_CouponDetails___name___id\" name=\"coupon[CouponDetails][__name__][id]\">
        <input type=\"hidden\" id=\"coupon_CouponDetails___name___Category\" name=\"coupon[CouponDetails][__name__][Category]\">
        <input type=\"hidden\" id=\"coupon_CouponDetails___name___coupon_type\" name=\"coupon[CouponDetails][__name__][coupon_type]\">
        <div class=\"col-11 item_detail\">
            <div class=\"item_name_area\">
                <div class=\"item_name fw-bold\">
                    <div id=\"coupon_CouponDetails___name___category_name\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-1 icon_edit\">
            <a class=\"btn btn-ec-actionIcon mr-3 delete-item\" data-bs-toggle=\"modal\" data-bs-toggle=\"tooltip\" data-bs-target=\"#confirmModal\" data-bs-placement=\"top\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div><!-- /.item_box -->
";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_escape_filter($this->env, $___internal_parse_5_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/regist_category_list_prototype.twig";
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
        return array (  81 => 1,  72 => 16,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/regist_category_list_prototype.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Coupon42/Resource/template/admin/regist_category_list_prototype.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 1);
        static $filters = array("escape" => 16, "trans" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply'],
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
