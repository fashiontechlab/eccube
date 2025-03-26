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

/* @admin/pager.twig */
class __TwigTemplate_7098274b1abf47a8ea838c4ad3fc0f88 extends Template
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

        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pageCount", [], "any", false, false, true, 11) > 1)) {
            // line 12
            echo "    <ul class=\"pagination col-auto\">

        <!-- 最初へ -->
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, true, 15) != 1)) {
                // line 16
                echo "            <li class=\"page-item\">
                ";
                // line 18
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 18), "query", [], "any", false, false, true, 18), "all", [], "any", false, false, true, 18), 18, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "first", [], "any", false, false, true, 18)]);
                // line 19
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 19, $this->source), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 20
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 21), "attributes", [], "any", false, false, true, 21), "get", ["_route"], "method", false, false, true, 21))), $this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 21, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 24
            echo "
        <!-- 前へ -->
        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, true, 26)) {
                // line 27
                echo "            <li class=\"page-item\">
                ";
                // line 29
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 29), "query", [], "any", false, false, true, 29), "all", [], "any", false, false, true, 29), 29, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", false, false, true, 29)]);
                // line 30
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 30, $this->source), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 31
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 32), "attributes", [], "any", false, false, true, 32), "get", ["_route"], "method", false, false, true, 32))), $this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 32, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.prev"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 35
            echo "
        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, true, 37) != 1)) {
                // line 38
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 40
            echo "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pagesInRange", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "current", [], "any", false, false, true, 42))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 44
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 44), "query", [], "any", false, false, true, 44), "all", [], "any", false, false, true, 44), 44, $this->source), ["page_no" => $context["page"]]);
                // line 45
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 45, $this->source), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 46
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 47), "attributes", [], "any", false, false, true, 47), "get", ["_route"], "method", false, false, true, 47))), $this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 47, $this->source)), "html", null, true);
                echo "\">
                    ";
                // line 48
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 48, $this->source), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 54) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, true, 54))) {
                // line 55
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 57
            echo "
        <!-- 次へ -->
        ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, true, 59)) {
                // line 60
                echo "            <li class=\"page-item\">
                ";
                // line 62
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 62), "query", [], "any", false, false, true, 62), "all", [], "any", false, false, true, 62), 62, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", false, false, true, 62)]);
                // line 63
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 63, $this->source), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 64
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 65), "attributes", [], "any", false, false, true, 65), "get", ["_route"], "method", false, false, true, 65))), $this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 65, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.next"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 68
            echo "
        <!-- 最後へ -->
        ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 70) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, true, 70))) {
                // line 71
                echo "            <li class=\"page-item\">
                ";
                // line 73
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 73), "query", [], "any", false, false, true, 73), "all", [], "any", false, false, true, 73), 73, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 73)]);
                // line 74
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 74, $this->source), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 75
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 76), "attributes", [], "any", false, false, true, 76), "get", ["_route"], "method", false, false, true, 76))), $this->sandbox->ensureToStringAllowed(($context["request"] ?? null), 76, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 78
            echo "
    </ul>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/pager.twig";
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
        return array (  214 => 78,  207 => 76,  204 => 75,  201 => 74,  198 => 73,  195 => 71,  193 => 70,  189 => 68,  181 => 65,  178 => 64,  175 => 63,  172 => 62,  169 => 60,  167 => 59,  163 => 57,  159 => 55,  157 => 54,  153 => 52,  143 => 48,  139 => 47,  136 => 46,  133 => 45,  130 => 44,  123 => 42,  119 => 41,  116 => 40,  112 => 38,  110 => 37,  106 => 35,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 27,  84 => 26,  80 => 24,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 16,  58 => 15,  53 => 12,  51 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/pager.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "set" => 18, "for" => 41);
        static $filters = array("merge" => 18, "escape" => 21, "trans" => 21);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['merge', 'escape', 'trans'],
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
