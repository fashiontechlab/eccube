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

/* @WebProfiler/Profiler/open.css.twig */
class __TwigTemplate_2459a54e3811d4bdecb116d6c10a72e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.css.twig"));

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
        echo "#header {
    margin-bottom: 30px;
}

#source {
    background: var(--page-background);
    border: 1px solid var(--menu-border-color);
    box-shadow: 0 0 0 5px var(--page-background);
    border-radius: 6px;
    margin: 0 30px 45px 0;
    max-width: 960px;
    padding: 15px 20px;
}
.width-full #source {
    max-width: unset;
    width: 100%;
}

#source code {
    font-size: 15px;
}

#source .source-file-name {
    border-bottom: 1px solid var(--table-border-color);
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 15px 0;
    padding: 0 0 15px;
}
#source .source-file-name small {
    color: var(--color-muted);
}

#source .source-content {
    overflow-x: auto;
}
#source .source-content ol {
    margin: 0;
}
#source .source-content ol li {
    margin: 0 0 2px 0;
    padding-left: 5px;
}
#source .source-content ol li::marker {
    color: var(--color-muted);
    font-family: var(--font-family-monospace);
    padding-right: 5px;
}
#source .source-content li.selected {
    background: var(--yellow-100);
    border-radius: 4px;
}
.theme-dark #source .source-content li.selected {
    background: var(--gray-600);
}
#source .source-content li.selected::marker {
    color: var(--color-text);
    font-weight: bold;
}

#source span[style=\"color: #FF8000\"] { color: var(--highlight-comment) !important; }
#source span[style=\"color: #007700\"] { color: var(--highlight-keyword) !important; }
#source span[style=\"color: #0000BB\"] { color: var(--color-text) !important; }
#source span[style=\"color: #DD0000\"] { color: var(--highlight-string) !important; }

.file-metadata dt {
    color: var(--header-metadata-key);
    display: block;
    font-weight: bold;
}
.file-metadata dd {
    color: var(--header-metadata-value);
    margin: 5px 0 20px;

    /* needed to break the long file paths */
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-all;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.css.twig";
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
        return new Source("", "@WebProfiler/Profiler/open.css.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.css.twig");
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
