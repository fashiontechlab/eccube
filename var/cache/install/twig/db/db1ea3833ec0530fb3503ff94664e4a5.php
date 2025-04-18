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

/* Mail/customer_change_notify.twig */
class __TwigTemplate_bf621ea3179f20898738d8d2c2a71ced extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/customer_change_notify.twig"));

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

        // line 9
        echo "※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 13), 13, $this->source), "safe_textmail", null, true);
        echo "よりお送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, true, 15), 15, $this->source), "safe_textmail", null, true);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "name01", [], "any", false, false, true, 19), 19, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "name02", [], "any", false, false, true, 19), 19, $this->source), "safe_textmail", null, true);
        echo " 様

";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 21), 21, $this->source), "safe_textmail", null, true);
        echo "でございます。
下記の日時に ";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["eventName"] ?? null), 22, $this->source), "safe_textmail", null, true);
        echo " がありましたのでお知らせいたします。

日時：";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_date_converter($this->env)), "safe_textmail", null, true);
        echo "
IPアドレス：";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ipAddress"] ?? null), 25, $this->source), "safe_textmail", null, true);
        echo "
環境：";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["userAgent"] ?? null), 26, $this->source), "safe_textmail", null, true);
        echo "

URL：";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage"), "safe_textmail", null, true);
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Mail/customer_change_notify.twig";
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
        return array (  101 => 28,  96 => 26,  92 => 25,  88 => 24,  83 => 22,  79 => 21,  72 => 19,  65 => 15,  60 => 13,  54 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/customer_change_notify.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Mail/customer_change_notify.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 8);
        static $filters = array("escape" => 13, "date_sec" => 24);
        static $functions = array("date" => 24, "url" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['autoescape'],
                ['escape', 'date_sec'],
                ['date', 'url']
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
