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

/* @KnpPaginator/Pagination/foundation_v5_pagination.html.twig */
class __TwigTemplate_d99bda12e774ac0a6974f5d002ae8942 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig"));

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

        // line 20
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 21
            echo "    <ul class=\"pagination\">
        ";
            // line 22
            if (array_key_exists("previous", $context)) {
                // line 23
                echo "                 <li class=\"arrow\">
                     <a rel=\"prev\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 24, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 24, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                 </li>
        ";
            } else {
                // line 27
                echo "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            if ((($context["startPage"] ?? null) > 1)) {
                // line 35
                echo "            <li>
                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 36, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 36, $this->source), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 38
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 39
                    echo "                <li>
                    <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 40, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 40, $this->source), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 42
($context["startPage"] ?? null) != 2)) {
                    // line 43
                    echo "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 51
                    echo "                <li>
                    <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 52, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 52, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">
                        ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 53, $this->source), "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                } else {
                    // line 57
                    echo "                <li class=\"current\">
                    <a>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 58, $this->source), "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 61
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
        ";
            // line 64
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 65
                echo "            ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 66
                    echo "                ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 67
                        echo "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 71
                        echo "                    <li>
                        <a href=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 72, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 72, $this->source), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">
                            ";
                        // line 73
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 77
                    echo "            ";
                }
                // line 78
                echo "            <li>
                <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 79, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 79, $this->source), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageCount"] ?? null), 79, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 82
            echo "
        ";
            // line 83
            if (array_key_exists("next", $context)) {
                // line 84
                echo "            <li class=\"arrow\">
                <a rel=\"next\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 85, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 85, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                    ";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 90
                echo "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 96
            echo "    </ul>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig";
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
        return array (  232 => 96,  225 => 92,  221 => 90,  214 => 86,  210 => 85,  207 => 84,  205 => 83,  202 => 82,  194 => 79,  191 => 78,  188 => 77,  181 => 73,  177 => 72,  174 => 71,  168 => 67,  165 => 66,  162 => 65,  160 => 64,  157 => 63,  150 => 61,  144 => 58,  141 => 57,  134 => 53,  130 => 52,  127 => 51,  124 => 50,  120 => 49,  117 => 48,  114 => 47,  108 => 43,  106 => 42,  101 => 40,  98 => 39,  96 => 38,  91 => 36,  88 => 35,  86 => 34,  83 => 33,  76 => 29,  72 => 27,  64 => 24,  61 => 23,  59 => 22,  56 => 21,  54 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v5_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 49);
        static $filters = array("escape" => 24, "merge" => 24, "trans" => 24);
        static $functions = array("path" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'merge', 'trans'],
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
