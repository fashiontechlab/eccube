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

/* Coupon42/Resource/template/admin/search_category.twig */
class __TwigTemplate_ac1d0d857a080edab14b1555055b1a85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/admin/search_category.twig"));

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
        echo "<script>
    function fnAddCategoryDetail(\$row, id, name) {
        // ================================================================
        // 商品情報を取得.
        // ================================================================
        var list = \$('#coupon_detail_list2');

        // prototype templateを取得.
        var newWidget = list.attr('data-prototype');
        // レコード数カウンタで置換.
        var cnt = coupon_details_count + 1;
        newWidget = newWidget.replace(/__name__/g, cnt);

        // フォーム入力値をセットm
        \$newWidget = \$(newWidget);

        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_Category').val(id);
        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_category_name').text(name);
        \$newWidget.find('#coupon_CouponDetails_' + cnt + '_coupon_type').val(";
        // line 28
        echo twig_escape_filter($this->env, twig_constant("Plugin\\Coupon42\\Entity\\Coupon::CATEGORY"), "html", null, true);
        echo ");

        // 明細行に追加.
        list.append(\$newWidget);

        // カウンタを更新.
        coupon_details_count++;

        // モーダル閉じる.
        \$('#searchCategoryModal').modal('hide');

        return false;
    }
</script>
<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 46
            echo "                <tr>
                    <td>
                        ";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 48, $this->source), "html", null, true);
            echo "
                    </td>
                    <td>
                    </td>
                    <td class=\"align-middle text-end\">
                        <button onclick=\"fnAddCategoryDetail(\$(this).parent().parent(), ";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["id"], 53, $this->source), "html", null, true);
            echo ",  '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 53, $this->source), "js"), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-ec-actionIcon\">
                            <i class=\"fa fa-plus fa-lg fw-bold text-secondary\"></i>
                        </button>
                    </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/search_category.twig";
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
        return array (  124 => 59,  110 => 53,  102 => 48,  98 => 46,  94 => 45,  74 => 28,  54 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/search_category.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Coupon42/Resource/template/admin/search_category.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 45);
        static $filters = array("escape" => 28);
        static $functions = array("constant" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['constant']
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
