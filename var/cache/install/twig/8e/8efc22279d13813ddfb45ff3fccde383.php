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

/* SiteKit42/Resource/assets/google-pagespeed-insights.svg */
class __TwigTemplate_3e72aeaabe2fe4bd375fce82af915e39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteKit42/Resource/assets/google-pagespeed-insights.svg"));

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
        echo "<svg viewBox=\"-1.7422960456529886 -1.8059591651793312 285.554592091306 266.85191833035867\" xmlns=\"http://www.w3.org/2000/svg\" width=\"2500\" height=\"2338\"><linearGradient id=\"a\" gradientTransform=\"matrix(.5 0 0 -.5 -710.34 -5458.18)\" gradientUnits=\"userSpaceOnUse\" x1=\"1766.94\" x2=\"1943.97\" y1=\"-11285.72\" y2=\"-11462.75\"><stop offset=\"0\" stop-color=\"#212121\" stop-opacity=\".2\"/><stop offset=\"1\" stop-color=\"#212121\" stop-opacity=\"0\"/></linearGradient><radialGradient id=\"b\" cx=\"1452.8\" cy=\"-10980.17\" gradientTransform=\"matrix(.5 0 0 -.5 -710.34 -5458.18)\" gradientUnits=\"userSpaceOnUse\" r=\"680.38\"><stop offset=\"0\" stop-color=\"#fff\" stop-opacity=\".1\"/><stop offset=\"1\" stop-color=\"#fff\" stop-opacity=\"0\"/></radialGradient><path d=\"M272.73 37.23v179.68a18.58 18.58 0 0 1-18.57 18.59H18.65A18.58 18.58 0 0 1 .06 216.94V37.23z\" fill=\"#e1e1e1\"/><path d=\"M18.65 0h235.5a18.58 18.58 0 0 1 18.58 18.56v18.67H.07V18.59A18.58 18.58 0 0 1 18.64 0z\" fill=\"#c2c2c2\"/><path d=\"M254.15 0H18.65A18.64 18.64 0 0 0 .07 18.59v1.48A18.64 18.64 0 0 1 18.65 1.54h235.5a18.64 18.64 0 0 1 18.58 18.59v-1.48A18.64 18.64 0 0 0 254.15 0z\" fill=\"#fff\" fill-opacity=\".2\"/><path d=\"M.07 37.23h272.66v1.48H.07z\" fill=\"#212121\" fill-opacity=\".1\"/><path d=\"M136.3 92.96a99 99 0 0 0-99 99v.13c0 2.08-.12 4.64 0 6.2h43.25a54.87 54.87 0 0 1 0-6.2 55.81 55.81 0 0 1 85.06-47.45l31.12-31.12a98.76 98.76 0 0 0-60.44-20.57z\" fill=\"#4285f4\"/><path d=\"M196.73 113.46l-31.14 31.14a55.74 55.74 0 0 1 26.56 47.45 54.87 54.87 0 0 1 0 6.2h43.39c.12-1.48 0-4.12 0-6.2a99 99 0 0 0-38.81-78.59z\" fill=\"#f44336\"/><circle cx=\"24.85\" cy=\"18.59\" fill=\"#eee\" r=\"6.2\"/><circle cx=\"49.65\" cy=\"18.59\" fill=\"#eee\" r=\"6.2\"/><path d=\"M254.18 233.93H18.59A18.64 18.64 0 0 1 0 215.34v1.48a18.64 18.64 0 0 0 18.59 18.59h235.59a18.64 18.64 0 0 0 18.55-18.59v-1.48a18.64 18.64 0 0 1-18.55 18.59z\" fill=\"#212121\" fill-opacity=\".1\"/><path d=\"M197.01 117.23a3.05 3.05 0 0 0 .59-1.81 3.11 3.11 0 0 0-3.1-3.1 3 3 0 0 0-1.91.68l-67.56 52a18.58 18.58 0 1 0 27.24 24.33l44.73-72.1z\" fill=\"#9e9e9e\"/><path d=\"M125.03 166.57l67.56-52a3.05 3.05 0 0 1 4.88 1.62 2.88 2.88 0 0 0 .12-.74 3.11 3.11 0 0 0-3.1-3.1 3 3 0 0 0-1.91.68l-67.54 52a18.51 18.51 0 0 0-7.24 14.71v.83a18.57 18.57 0 0 1 7.23-14z\" fill=\"#fff\" opacity=\".2\"/><path d=\"M197.01 117.23l-44.72 72.14a18.57 18.57 0 0 1-34.43-8.79v.71a18.58 18.58 0 0 0 34.48 9.64l44.72-72.14a3.05 3.05 0 0 0 .59-1.81 2.74 2.74 0 0 0-.12-.8 3.29 3.29 0 0 1-.52 1.05z\" fill=\"#212121\" opacity=\".2\"/><path d=\"M206.24 141.32a3.05 3.05 0 0 1 0 3.68l-44.72 72.14a18.57 18.57 0 0 1-27.94 4.45l41.62 41.62h88.19A18.58 18.58 0 0 0 282 244.65V217.1z\" fill=\"url(#a)\" transform=\"translate(-9.27 -27.77)\"/><path d=\"M282 46.36a18.58 18.58 0 0 0-18.57-18.59H27.92A18.58 18.58 0 0 0 9.34 46.35v198.3a18.58 18.58 0 0 0 18.57 18.59h235.51A18.58 18.58 0 0 0 282 244.69z\" fill=\"url(#b)\" transform=\"translate(-9.27 -27.77)\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "SiteKit42/Resource/assets/google-pagespeed-insights.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SiteKit42/Resource/assets/google-pagespeed-insights.svg", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SiteKit42/Resource/assets/google-pagespeed-insights.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
