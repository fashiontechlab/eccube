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

/* @admin/Order/search_customer.twig */
class __TwigTemplate_3364cd6ed231a6db5c7d0fc18ddd57fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/search_customer.twig"));

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
        echo "<script>
    \$('.set-customer').on('click', function() {
        \$.ajax({
            url: '";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_customer_by_id");
        echo "',
            type: 'POST',
            dataType: 'json',
            data: {'id': this.dataset.customer}
        }).done(function(data) {
            // 顧客情報をフォームにセットする.
            \$('#order_CustomerId').html(data['id']);
            \$('#order_Customer').val(data['id']);
            \$('#order_name_name01').val(data['name01']);
            \$('#order_name_name02').val(data['name02']);
            \$('#order_kana_kana01').val(data['kana01']);
            \$('#order_kana_kana02').val(data['kana02']);
            \$('#order_postal_code').val(data['postal_code']);
            \$('#order_address_pref').val(data['pref']);
            \$('#order_address_addr01').val(data['addr01']);
            \$('#order_address_addr02').val(data['addr02']);
            \$('#order_email').val(data['email']);
            \$('#order_phone_number').val(data['phone_number']);
            \$('#order_company_name').val(data['company_name']);
            // モーダルを閉じる.
            \$('#searchCustomerModal').modal('hide');
        }).fail(function(data) {
            alert('search customer(by id) failed.');
        });
    });

    // 会員検索
    \$('#customer_pagination a').on('click', function(event) {
        if (!\$(this).parent().is('.active')) {
            var list = \$('#searchCustomerModalList');
            list.children().remove();

            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchCustomerModalList').html(data);
            }).fail(function(data) {
                alert('search customer failed.');
            });
        }
        event.preventDefault();
    });
</script>

<table class=\"table table-striped\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 ps-3\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 ps-5\">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Customer"]) {
            // line 72
            echo "        <tr>
            <td class=\"text-center\"><span>";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</span></td>
            <td><span>";
            // line 74
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "name", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "</span></td>
            <td><span>";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "phone_number", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</span></td>
            <td><span>";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</span></td>
            <td>
                <div class=\"row justify-content-end pe-2\">
                    <button type=\"button\" class=\"btn btn-ec-actionIcon set-customer\" data-customer=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-plus fa-lg text-secondary\" aria-hidden=\"true\"></i></button>
                </div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    </tbody>
</table>
";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 86) > 0)) {
            // line 87
            echo "    <div id=\"customer_pagination\" class=\"row justify-content-md-center mb-4\">
        ";
            // line 88
            $this->loadTemplate("@admin/pager.twig", "@admin/Order/search_customer.twig", 88)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 88), "routes" => "admin_order_search_customer_html_page"]));
            // line 89
            echo "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Order/search_customer.twig";
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
        return array (  178 => 89,  176 => 88,  173 => 87,  171 => 86,  167 => 84,  156 => 79,  150 => 76,  146 => 75,  142 => 74,  138 => 73,  135 => 72,  131 => 71,  123 => 66,  119 => 65,  115 => 64,  111 => 63,  59 => 14,  54 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/search_customer.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Order/search_customer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 71, "if" => 86, "include" => 88);
        static $filters = array("escape" => 63, "trans" => 63);
        static $functions = array("url" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'include'],
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
