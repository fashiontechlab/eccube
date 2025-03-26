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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_beb52bf4e41d9b7d9ce796e3224ae347 extends Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            echo "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . $this->sandbox->ensureToStringAllowed(($context["align"] ?? null), 3, $this->source))) : (""));
            // line 4
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["classAlign"] ?? null), 4, $this->source), "html", null, true);
            echo "\">

            ";
            // line 6
            if (array_key_exists("previous", $context)) {
                // line 7
                echo "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 8, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 8, $this->source), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            } else {
                // line 13
                echo "                <li class=\"pagination-previous disabled\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </li>
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if ((($context["startPage"] ?? null) > 1)) {
                // line 19
                echo "                <li>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 20, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 20, $this->source), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 22
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 23
                    echo "                    <li>
                        <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 24, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 24, $this->source), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 26
($context["startPage"] ?? null) != 2)) {
                    // line 27
                    echo "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 29
                echo "            ";
            }
            // line 30
            echo "
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 33
                    echo "                    <li>
                        <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 34, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 34, $this->source), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">
                            ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 35, $this->source), "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                } else {
                    // line 39
                    echo "                    <li class=\"current\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 39, $this->source), "html", null, true);
                    echo "</li>
                ";
                }
                // line 41
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
            ";
            // line 43
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 44
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 45
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 46
                        echo "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 48
                        echo "                        <li>
                            <a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 49, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 49, $this->source), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">
                                ";
                        // line 50
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "                <li>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 56, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 56, $this->source), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageCount"] ?? null), 56, $this->source), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if (array_key_exists("next", $context)) {
                // line 61
                echo "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 62, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 62, $this->source), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            } else {
                // line 67
                echo "                <li class=\"pagination-next disabled\">
                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </li>
            ";
            }
            // line 71
            echo "
        </ul>
    </nav>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
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
        return array (  228 => 71,  222 => 68,  219 => 67,  212 => 63,  208 => 62,  205 => 61,  203 => 60,  200 => 59,  192 => 56,  189 => 55,  186 => 54,  179 => 50,  175 => 49,  172 => 48,  168 => 46,  165 => 45,  162 => 44,  160 => 43,  157 => 42,  151 => 41,  145 => 39,  138 => 35,  134 => 34,  131 => 33,  128 => 32,  124 => 31,  121 => 30,  118 => 29,  114 => 27,  112 => 26,  107 => 24,  104 => 23,  102 => 22,  97 => 20,  94 => 19,  92 => 18,  89 => 17,  83 => 14,  80 => 13,  73 => 9,  69 => 8,  66 => 7,  64 => 6,  58 => 4,  56 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "/home/manabu/work/2025/02/28/ec-cube/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v6_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 3, "for" => 31);
        static $filters = array("escape" => 4, "merge" => 8, "trans" => 9);
        static $functions = array("path" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
