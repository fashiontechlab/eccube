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

/* @admin/alert.twig */
class __TwigTemplate_a62a0f4add5c15cdbec0e83bc0dd8160 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/alert.twig"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["eccube.admin.info"], "method", false, false, true, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "    <div class=\"alert alert-primary alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-comment fa-lg me-2\"></i>
        <span class=\"fw-bold\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 14, $this->source)), "html", null, true);
            echo "</span>
        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\">

        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["eccube.admin.success"], "method", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-check fa-lg me-2\"></i>
        <span class=\"fw-bold\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 24, $this->source)), "html", null, true);
            echo "</span>
        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\">

        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["eccube.admin.danger"], "method", false, false, true, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg me-2\"></i>
        <span class=\"fw-bold\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 34, $this->source)), "html", null, true);
            echo "</span>
        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\">

        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["eccube.admin.error"], "method", false, false, true, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg me-2\"></i>
        <span class=\"fw-bold\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 44, $this->source)), "html", null, true);
            echo "</span>
        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\">

        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["eccube.admin.warning"], "method", false, false, true, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "    <div class=\"alert alert-warning alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg me-2\"></i>
        <span class=\"fw-bold\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 54, $this->source)), "html", null, true);
            echo "</span>
        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\">

        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/alert.twig";
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
        return array (  154 => 54,  150 => 52,  146 => 51,  143 => 50,  131 => 44,  127 => 42,  123 => 41,  120 => 40,  108 => 34,  104 => 32,  100 => 31,  97 => 30,  85 => 24,  81 => 22,  77 => 21,  74 => 20,  62 => 14,  58 => 12,  54 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/alert.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/alert.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11);
        static $filters = array("escape" => 14, "trans" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
