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

/* @admin/Setting/Shop/delivery_time_prototype.twig */
class __TwigTemplate_81391dd44e0a21c1b9c053276ab852f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery_time_prototype.twig"));

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
        $context["DeliveryTime"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11);
        // line 12
        echo "<li class=\"list-group-item delivery-time-item sortable-item\">
    <div class=\"row justify-content-around mode-view\">
        <div class=\"col-auto d-flex align-items-center\">
            <i class=\"fa fa-bars text-ec-gray\"></i>
        </div>
        <div class=\"col d-flex align-items-center\">
            <a class=\"display-label\">";
        // line 18
        if (twig_test_empty(($context["DeliveryTime"] ?? null))) {
            echo "__value__";
        } else {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["DeliveryTime"] ?? null), 18, $this->source), "html", null, true);
        }
        echo "</a>
        </div>
        <div class=\"col-auto text-end\">
            <a class=\"btn btn-ec-actionIcon me-2 action-up\" href=\"\" data-bs-toggle=\"tooltip\"
               data-bs-placement=\"top\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon me-2 action-down\" href=\"\" data-bs-toggle=\"tooltip\"
               data-bs-placement=\"top\" title=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon me-2 action-edit\" href=\"\" data-bs-toggle=\"tooltip\"
               data-bs-placement=\"top\" title=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
        echo "\">
                <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
            </a>
            ";
        // line 33
        if (twig_test_empty(($context["DeliveryTime"] ?? null))) {
            // line 34
            echo "                <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"\" data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"top\" title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-toggle-on fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            ";
        } else {
            // line 39
            echo "                <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"\" data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"top\" title=\"";
            // line 40
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["DeliveryTime"] ?? null), "visible", [], "any", false, false, true, 40)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-toggle-";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, ($context["DeliveryTime"] ?? null), "visible", [], "any", false, false, true, 41)) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            ";
        }
        // line 44
        echo "            <a class=\"btn btn-ec-actionIcon me-2 remove-delivery-time-item\" href=\"\" data-bs-toggle=\"tooltip\"
               data-bs-placement=\"top\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around mode-edit d-none\">
        <div class=\"col d-flex align-items-center\">
            <div class=\"row\">
                <div class=\"col-auto d-flex align-items-center\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_time", [], "any", false, false, true, 54), 54, $this->source), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54)]]);
        echo "
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-conversion action-edit-submit\" type=\"submit\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
        echo "</button>
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button type=\"button\" class=\"btn btn-ec-sub action-edit-cancel\" >";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_time", [], "any", false, false, true, 62), 62, $this->source), 'errors');
        echo "
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sort_no", [], "any", false, false, true, 63), 63, $this->source), 'widget', ["attr" => ["class" => "sort-no"]]);
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sort_no", [], "any", false, false, true, 64), 64, $this->source), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 65), 65, $this->source), 'widget', ["attr" => ["class" => "visible d-none"]]);
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 66), 66, $this->source), 'errors');
        echo "
            </div>
        </div>
    </div>
</li>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Setting/Shop/delivery_time_prototype.twig";
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
        return array (  168 => 66,  164 => 65,  160 => 64,  156 => 63,  152 => 62,  147 => 60,  141 => 57,  135 => 54,  123 => 45,  120 => 44,  114 => 41,  110 => 40,  107 => 39,  100 => 35,  97 => 34,  95 => 33,  89 => 30,  82 => 26,  75 => 22,  64 => 18,  56 => 12,  54 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/delivery_time_prototype.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Setting/Shop/delivery_time_prototype.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 18);
        static $filters = array("escape" => 18, "trans" => 22);
        static $functions = array("form_widget" => 54, "form_errors" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans'],
                ['form_widget', 'form_errors']
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
