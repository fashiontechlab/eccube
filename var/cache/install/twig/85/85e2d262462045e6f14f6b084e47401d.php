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

/* Block/calendar.twig */
class __TwigTemplate_5a7afc203fb00bce4ac7584ef86433ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/calendar.twig"));

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

        // line 12
        echo "<br><br>
<div class=\"ec-role\">
    <div>
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CALENDAR"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カレンダー"), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("* 赤字は休業日です。"), "html", null, true);
        echo "<br>
        <br>
        <div class=\"ec-calendar\">
            <table id=\"this-month-table\" class=\"ec-calendar__month\">
                <tr>
                    <th id=\"this-month-title\" colspan=\"7\" class=\"ec-calendar__title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ThisMonthTitle"] ?? null), 25, $this->source), "html", null, true);
        echo "</th>
                </tr>
                <tr>
                    <th class=\"ec-calendar__sun\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("日"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__mon\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("月"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__tue\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("火"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__wed\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("水"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__thu\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("木"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__fri\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("金"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__sat\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("土"), "html", null, true);
        echo "</th>
                </tr>
                <tr>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ThisMonthCalendar"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 38
            echo "                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["day"], "today", [], "any", false, false, true, 38) == 1) && (twig_get_attribute($this->env, $this->source, $context["day"], "holiday", [], "any", false, false, true, 38) == 1))) {
                // line 39
                echo "                            <td id=\"today-and-holiday\" class=\"ec-calendar__today ec-calendar__holiday\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "</td>
                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 40
$context["day"], "today", [], "any", false, false, true, 40) == 1) && (twig_get_attribute($this->env, $this->source, $context["day"], "holiday", [], "any", false, false, true, 40) == 0))) {
                // line 41
                echo "                            <td id=\"today\" class=\"ec-calendar__today\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</td>
                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 42
$context["day"], "today", [], "any", false, false, true, 42) == 0) && (twig_get_attribute($this->env, $this->source, $context["day"], "holiday", [], "any", false, false, true, 42) == 1))) {
                // line 43
                echo "                            <td id=\"this-month-holiday-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\" class=\"ec-calendar__holiday\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</td>
                        ";
                // line 45
                echo "                        ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["day"], "dayOfWeek", [], "any", false, false, true, 45) == "Sun") || (twig_get_attribute($this->env, $this->source, $context["day"], "dayOfWeek", [], "any", false, false, true, 45) == "Sat"))) {
                // line 46
                echo "                            <td id=\"this-month-holiday-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "\" class=\"ec-calendar__holiday\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</td>
                        ";
                // line 48
                echo "                        ";
            } else {
                // line 49
                echo "                            <td class=\"ec-calendar__day\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "</td>
                        ";
            }
            // line 51
            echo "                        ";
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) % 7) == 0) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) != twig_length_filter($this->env, ($context["ThisMonthCalendar"] ?? null))))) {
                // line 52
                echo "                            </tr><tr>
                        ";
            }
            // line 54
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tr>
            </table>

            <table id=\"next-month-table\" class=\"ec-calendar__month\">
                <tr>
                    <th id=\"next-month-title\" colspan=\"7\" class=\"ec-calendar__title\">";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["NextMonthTitle"] ?? null), 60, $this->source), "html", null, true);
        echo "</th>
                </tr>
                <tr>
                    <th class=\"ec-calendar__sun\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("日"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__mon\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("月"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__tue\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("火"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__wed\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("水"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__thu\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("木"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__fri\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("金"), "html", null, true);
        echo "</th>
                    <th class=\"ec-calendar__sat\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("土"), "html", null, true);
        echo "</th>
                </tr>
                <tr>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["NextMonthCalendar"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 73
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["day"], "holiday", [], "any", false, false, true, 73) == 1)) {
                // line 74
                echo "                            <td id=\"next-month-holiday-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "\" class=\"ec-calendar__holiday\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "</td>
                        ";
                // line 76
                echo "                        ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["day"], "dayOfWeek", [], "any", false, false, true, 76) == "Sun") || (twig_get_attribute($this->env, $this->source, $context["day"], "dayOfWeek", [], "any", false, false, true, 76) == "Sat"))) {
                // line 77
                echo "                            <td id=\"next-month-holiday-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "\" class=\"ec-calendar__holiday\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</td>
                        ";
                // line 79
                echo "                        ";
            } else {
                // line 80
                echo "                            <td class=\"ec-calendar__day\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "</td>
                        ";
            }
            // line 82
            echo "                        ";
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 82) % 7) == 0) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 82) != twig_length_filter($this->env, ($context["NextMonthCalendar"] ?? null))))) {
                // line 83
                echo "                            </tr><tr>
                        ";
            }
            // line 85
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </tr>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Block/calendar.twig";
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
        return array (  305 => 86,  291 => 85,  287 => 83,  284 => 82,  278 => 80,  275 => 79,  268 => 77,  265 => 76,  258 => 74,  255 => 73,  238 => 72,  232 => 69,  228 => 68,  224 => 67,  220 => 66,  216 => 65,  212 => 64,  208 => 63,  202 => 60,  195 => 55,  181 => 54,  177 => 52,  174 => 51,  168 => 49,  165 => 48,  158 => 46,  155 => 45,  148 => 43,  146 => 42,  141 => 41,  139 => 40,  134 => 39,  131 => 38,  114 => 37,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  78 => 25,  70 => 20,  65 => 18,  60 => 16,  54 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/calendar.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Block/calendar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 37, "if" => 38);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans', 'length'],
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
