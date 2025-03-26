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

/* @WebProfiler/Collector/time.css.twig */
class __TwigTemplate_a129f1a4666004b202db0c9379aaa772 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.css.twig"));

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
        echo "/* Legend */

.sf-profiler-timeline .legends .timeline-category {
    border: none;
    background: none;
    border-left: 1em solid transparent;
    line-height: 1em;
    margin: 0 1em 0 0;
    padding: 0 0.5em;
    display: none;
    opacity: 0.5;
}

.sf-profiler-timeline .legends .timeline-category.active {
    opacity: 1;
}

.sf-profiler-timeline .legends .timeline-category.present {
    display: inline-block;
}

.timeline-graph {
    margin: 1em 0;
    width: 100%;
    background-color: var(--table-background);
    border: 1px solid var(--table-border-color);
}

/* Typography */

.timeline-graph .timeline-label {
    font-family: var(--font-sans-serif);
    font-size: 12px;
    line-height: 12px;
    font-weight: normal;
    fill: var(--color-text);
}

.timeline-graph .timeline-label .timeline-sublabel {
    margin-left: 1em;
    fill: var(--color-muted);
}

.timeline-graph .timeline-subrequest,
.timeline-graph .timeline-border {
    fill: none;
    stroke: var(--table-border-color);
    stroke-width: 1px;
}

.timeline-graph .timeline-subrequest {
    fill: url(#subrequest);
    fill-opacity: 0.5;
}

.timeline-subrequest-pattern {
    fill: var(--gray-200);
}
.theme-dark .timeline-subrequest-pattern {
    fill: var(--gray-600);
}

/* Timeline periods */

.timeline-graph .timeline-period {
    stroke-width: 0;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.css.twig";
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
        return new Source("", "@WebProfiler/Collector/time.css.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/time.css.twig");
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
