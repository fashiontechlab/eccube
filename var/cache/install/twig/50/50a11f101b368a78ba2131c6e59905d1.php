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

/* Coupon42/Resource/template/default/shopping_coupon.twig */
class __TwigTemplate_4096d71a5c4a0101f4973c0ab0fefe3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/default/shopping_coupon.twig"));

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

        // line 12
        $context["body_class"] = "cart_page";
        // line 10
        $this->parent = $this->loadTemplate("default_frame.twig", "Coupon42/Resource/template/default/shopping_coupon.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "    <script>
        \$(function() {
            \$('input[name~=\"front_plugin_coupon_shopping[coupon_use]\"]').change(function () {
                if(\$(this).val() == 0) {
                    \$('#front_plugin_coupon_shopping_coupon_cd').attr('readonly', '');
                    \$('#front_plugin_coupon_shopping_coupon_cd').css('background-color', '#eee');
                } else {
                    \$('#front_plugin_coupon_shopping_coupon_cd').removeAttr('readonly');
                    \$('#front_plugin_coupon_shopping_coupon_cd').css('background-color', 'white');
                }
            });
        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 30
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping_coupon.header"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-registerRole\">
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-addressRole\">
                    <div class=\"ec-addressRole__actions\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping_coupon.body"), "html", null, true);
        echo "
                    </div>
                </div>

                <form method=\"post\" action=\"";
        // line 45
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 46), 46, $this->source), 'widget');
        echo "
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt></dt>
                            <dd class=\"lh-base\">
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_use", [], "any", false, false, true, 51), 51, $this->source), 'widget');
        echo "
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_use", [], "any", false, false, true, 52), 52, $this->source), 'errors');
        echo "
                            </dd>
                        </dl>
                        <dl id=\"coupon_box__cd\">
                            <dt><label for=\"coupon_use_coupon_cd\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_cd", [], "any", false, false, true, 56), "vars", [], "any", false, false, true, 56), "label", [], "any", false, false, true, 56), 56, $this->source)), "html", null, true);
        echo "</label></dt>
                            <dd>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_cd", [], "any", false, false, true, 58), 58, $this->source), 'widget');
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupon_cd", [], "any", false, false, true, 59), 59, $this->source), 'errors');
        echo "
                            </dd>
                        </dl>
                    </div>
                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.registration"), "html", null, true);
        echo "</button>
                                <a href=\"";
        // line 67
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
        return "Coupon42/Resource/template/default/shopping_coupon.twig";
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
        return array (  173 => 67,  169 => 66,  159 => 59,  155 => 58,  150 => 56,  143 => 52,  139 => 51,  131 => 46,  127 => 45,  120 => 41,  108 => 32,  104 => 30,  97 => 29,  77 => 14,  70 => 13,  62 => 10,  60 => 12,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/default/shopping_coupon.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Coupon42/Resource/template/default/shopping_coupon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12);
        static $filters = array("escape" => 32, "trans" => 32);
        static $functions = array("url" => 45, "form_widget" => 46, "form_errors" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'form_errors']
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
