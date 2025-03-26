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

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_677933e8d50b0fe37440fc1db0ed6ca0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        echo "
        ";
        // line 6
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"container\">
        ";
        // line 12
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

        ";
        // line 14
        $context["source"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["file_info"] ?? null), "pathname", [], "any", false, false, true, 14), 14, $this->source), $this->sandbox->ensureToStringAllowed(($context["line"] ?? null), 14, $this->source),  -1);
        // line 15
        echo "        <div id=\"content\">
            <div id=\"main\">
                <div id=\"source\">
                    <h1 class=\"source-file-name\">";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["file"] ?? null), 18, $this->source), "html", null, true);
        if ((0 < ($context["line"] ?? null))) {
            echo " <small>line ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["line"] ?? null), 18, $this->source), "html", null, true);
            echo "</small>";
        }
        echo "</h1>

                    <div class=\"source-content\">
                        ";
        // line 21
        if ((null === ($context["source"] ?? null))) {
            // line 22
            echo "                            <p class=\"empty empty-panel\">The file is not readable.</p>
                        ";
        } else {
            // line 24
            echo "                            ";
            echo $this->sandbox->ensureToStringAllowed(($context["source"] ?? null), 24, $this->source);
            echo "
                        ";
        }
        // line 26
        echo "                    </div>
                </div>

                <div id=\"sidebar\">
                    <dl class=\"file-metadata\">
                        <dt>Filepath:</dt>
                        <dd>";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["file_info"] ?? null), "pathname", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</dd>

                        <dt>Last modified:</dt>
                        <dd>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["file_info"] ?? null), "mTime", [], "any", false, false, true, 35), 35, $this->source)), "html", null, true);
        echo "</dd>

                        <dt>Size:</dt>
                        ";
        // line 38
        $context["file_size_in_kb"] = (twig_get_attribute($this->env, $this->source, ($context["file_info"] ?? null), "size", [], "any", false, false, true, 38) / 1024);
        // line 39
        echo "                        ";
        $context["file_num_lines"] = (twig_length_filter($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["source"] ?? null), 39, $this->source), "
")) - 1);
        // line 40
        echo "                        <dd>
                            ";
        // line 41
        echo twig_escape_filter($this->env, (((($context["file_size_in_kb"] ?? null) < 1)) ? (($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["file_info"] ?? null), "size", [], "any", false, false, true, 41), 41, $this->source) . " bytes")) : ((twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size_in_kb"] ?? null), 41, $this->source), 0) . " KB"))), "html", null, true);
        echo "
                            / ";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_num_lines"] ?? null), 42, $this->source), "html", null, true);
        echo " lines
                        </dd>
                    </dl>

                    <a class=\"doc-link\" href=\"https://symfony.com/doc/";
        // line 46
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open this file in your IDE?</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function () {
            const selectedLineElement = document.querySelector('.source-content li.selected');
            if (null === selectedLineElement) {
                return;
            }

            const selectedLineYCoordinate = selectedLineElement.getBoundingClientRect().y;
            console.log(selectedLineYCoordinate);
            window.scrollTo({ top: selectedLineYCoordinate - 20, left: 0, behavior: 'smooth' });
        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
        return array (  176 => 46,  169 => 42,  165 => 41,  162 => 40,  158 => 39,  156 => 38,  150 => 35,  144 => 32,  136 => 26,  130 => 24,  126 => 22,  124 => 21,  113 => 18,  108 => 15,  106 => 14,  101 => 12,  98 => 11,  91 => 10,  81 => 6,  77 => 5,  74 => 4,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/open.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 18);
        static $filters = array("file_excerpt" => 14, "escape" => 18, "raw" => 24, "date" => 35, "length" => 39, "split" => 39, "number_format" => 41);
        static $functions = array("include" => 5, "constant" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['file_excerpt', 'escape', 'raw', 'date', 'length', 'split', 'number_format'],
                ['include', 'constant']
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
