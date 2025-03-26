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

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_f5e7063e982b267fc9f3049e0d0c7e5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

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
        echo "<div id=\"sidebar-search\" class=\"";
        echo (((($context["render_hidden_by_default"]) ?? (true))) ? ("hidden") : (""));
        echo "\">
    <form action=\"";
        // line 2
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">
                ";
        // line 5
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 6
            echo "                    Application
                ";
        } else {
            // line 8
            echo "                    IP
                ";
        }
        // line 10
        echo "            </label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ip"] ?? null), 11, $this->source), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group-row\">
            <div class=\"form-group\">
                <label for=\"method\">
                    ";
        // line 17
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 18
            echo "                        Mode
                    ";
        } else {
            // line 20
            echo "                        Method
                    ";
        }
        // line 22
        echo "                </label>
                <select name=\"method\" id=\"method\">
                    <option value=\"\">Any</option>
                    ";
        // line 25
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 26
            echo "                        ";
            $context["methods"] = ["BATCH", "INTERACTIVE"];
            // line 27
            echo "                    ";
        } else {
            // line 28
            echo "                        ";
            $context["methods"] = ["DELETE", "GET", "HEAD", "PATCH", "POST", "PUT"];
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 31
            echo "                        <option ";
            echo ((($context["m"] == ($context["method"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["m"], 31, $this->source), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"status_code\">
                    ";
        // line 38
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 39
            echo "                        Exit code
                        ";
            // line 40
            $context["min_and_max"] = twig_sprintf("min=%d max=%d", 0, 255);
            // line 41
            echo "                    ";
        } else {
            // line 42
            echo "                        Status
                        ";
            // line 43
            $context["min_and_max"] = twig_sprintf("min=%d max=%d", 100, 599);
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                </label>
                <input type=\"number\" name=\"status_code\" id=\"status_code\" ";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["min_and_max"] ?? null), 46, $this->source), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_code"] ?? null), 46, $this->source), "html", null, true);
        echo "\">
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"url\">
                ";
        // line 52
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 53
            echo "                    Command
                ";
        } else {
            // line 55
            echo "                    URL
                ";
        }
        // line 57
        echo "            </label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 58, $this->source), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" size=\"8\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 63, $this->source), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["start"] ?? null), 68, $this->source), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["end"] ?? null), 73, $this->source), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group-row form-group-row-search-button\">
            <div class=\"form-group\">
                <label for=\"limit\">Results</label>
                <select name=\"limit\" id=\"limit\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([10, 50, 100]);
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 81
            echo "                        <option ";
            echo ((($context["l"] == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["l"], 81, $this->source), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </select>
            </div>

            <input type=\"hidden\" name=\"type\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_type"] ?? null), 86, $this->source), "html", null, true);
        echo "\">

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-sm\">Search</button>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/search.html.twig";
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
        return array (  238 => 86,  233 => 83,  222 => 81,  218 => 80,  208 => 73,  200 => 68,  192 => 63,  184 => 58,  181 => 57,  177 => 55,  173 => 53,  171 => 52,  160 => 46,  157 => 45,  154 => 44,  152 => 43,  149 => 42,  146 => 41,  144 => 40,  141 => 39,  139 => 38,  132 => 33,  121 => 31,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  102 => 25,  97 => 22,  93 => 20,  89 => 18,  87 => 17,  78 => 11,  75 => 10,  71 => 8,  67 => 6,  65 => 5,  59 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/search.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "set" => 26, "for" => 30);
        static $filters = array("escape" => 11, "format" => 40);
        static $functions = array("path" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'format'],
                ['path']
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
