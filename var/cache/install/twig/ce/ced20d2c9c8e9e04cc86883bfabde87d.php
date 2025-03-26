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

/* @WebProfiler/Collector/command.html.twig */
class __TwigTemplate_07bd2687b7880953345d4e4b5b3f9daf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/command.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/command.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 5
        echo twig_source($this->env, "@WebProfiler/Icon/command.svg");
        echo "</span>
        <strong>Console Command</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        echo "    <h2>
        ";
        // line 12
        $context["command"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "command", [], "any", false, false, true, 12);
        // line 13
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "file", [], "any", false, false, true, 13), 13, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "line", [], "any", false, false, true, 13), 13, $this->source)), "html", null, true);
        echo "\">
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "executor", [], "any", true, true, true, 14)) {
            // line 15
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrMethod(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "executor", [], "any", false, false, true, 15), 15, $this->source), "html", null, true));
            echo "
            ";
        } else {
            // line 17
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "class", [], "any", false, false, true, 17), 17, $this->source), "html", null, true));
            echo "
            ";
        }
        // line 19
        echo "        </a>
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Command</h3>

            <div class=\"tab-content\">
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</span>
                        <span class=\"label\">Duration</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "maxMemoryUsage", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</span>
                        <span class=\"label\">Peak Memory Usage</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "verbosityLevel", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</span>
                        <span class=\"label\">Verbosity Level</span>
                    </div>
                </div>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 46
        echo twig_source($this->env, (("@WebProfiler/Icon/" . (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, true, 46))) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Signalable</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 51
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactive", [], "any", false, false, true, 51)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Interactive</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 56
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "validateInput", [], "any", false, false, true, 56)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Validate Input</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 61
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, true, 61)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Enabled</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 66
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "visible", [], "any", false, false, true, 66)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Visible</span>
                    </div>
                </div>

                <h3>Arguments</h3>

                ";
        // line 73
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "arguments", [], "any", false, false, true, 73))) {
            // line 74
            echo "                    <div class=\"empty\">
                        <p>No arguments were set</p>
                    </div>
                ";
        } else {
            // line 78
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "arguments", [], "any", false, false, true, 78), "labels" => ["Argument", "Value"], "maxDepth" => 2], false);
            echo "
                ";
        }
        // line 80
        echo "
                <h3>Options</h3>

                ";
        // line 83
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "options", [], "any", false, false, true, 83))) {
            // line 84
            echo "                    <div class=\"empty\">
                        <p>No options were set</p>
                    </div>
                ";
        } else {
            // line 88
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "options", [], "any", false, false, true, 88), "labels" => ["Option", "Value"], "maxDepth" => 2], false);
            echo "
                ";
        }
        // line 90
        echo "
                ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactive", [], "any", false, false, true, 91)) {
            // line 92
            echo "                    <h3>Interactive Inputs</h3>

                    <p class=\"help\">
                        The values which have been set interactively.
                    </p>

                    ";
            // line 98
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactiveInputs", [], "any", false, false, true, 98))) {
                // line 99
                echo "                        <div class=\"empty\">
                            <p>No inputs were set</p>
                        </div>
                    ";
            } else {
                // line 103
                echo "                        ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactiveInputs", [], "any", false, false, true, 103), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
                echo "
                    ";
            }
            // line 105
            echo "                ";
        }
        // line 106
        echo "
                <h3>Application inputs</h3>

                ";
        // line 109
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "applicationInputs", [], "any", false, false, true, 109))) {
            // line 110
            echo "                    <div class=\"empty\">
                        <p>No application inputs are set</p>
                    </div>
                ";
        } else {
            // line 114
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "applicationInputs", [], "any", false, false, true, 114), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
            echo "
                ";
        }
        // line 116
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Input / Output</h3>

            <div class=\"tab-content\">
                <table>
                    <tr>
                        <td class=\"font-normal\">Input</td>
                        <td class=\"font-normal\">";
        // line 126
        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "input", [], "any", false, false, true, 126), 126, $this->source));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"font-normal\">Output</td>
                        <td class=\"font-normal\">";
        // line 130
        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "output", [], "any", false, false, true, 130), 130, $this->source));
        echo "</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Helper Set</h3>

            <div class=\"tab-content\">
                ";
        // line 140
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "helperSet", [], "any", false, false, true, 140))) {
            // line 141
            echo "                    <div class=\"empty\">
                        <p>No helpers</p>
                    </div>
                ";
        } else {
            // line 145
            echo "                    <table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 145, $this->source), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Helpers</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "helperSet", [], "any", false, false, true, 152)));
            foreach ($context['_seq'] as $context["_key"] => $context["helper"]) {
                // line 153
                echo "                            <tr>
                                <td>";
                // line 154
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["helper"], 154, $this->source));
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helper'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 160
        echo "            </div>
        </div>

        <div class=\"tab\">
            ";
        // line 164
        $context["request_collector"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, true, 164), "request", [], "any", false, false, true, 164);
        // line 165
        echo "            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 169
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "dotenvvars", [], "any", false, false, true, 169)], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 172
        $context["requestserver"] = [];
        // line 173
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, true, 173), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "dotenvvars", [], "any", false, false, true, 173), "keys", [], "any", false, false, true, 173)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 174
            echo "                    ";
            $context["requestserver"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["requestserver"] ?? null), 174, $this->source), [$context["key"] => $context["value"]]);
            // line 175
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                ";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        echo "
            </div>
        </div>

        ";
        // line 180
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, true, 180))) {
            // line 181
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Signals</h3>

                <div class=\"tab-content\">
                    <h3>Subscribed signals</h3>
                    ";
            // line 186
            echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, true, 186), 186, $this->source), ", "), "html", null, true);
            echo "

                    <h3>Handled signals</h3>
                    ";
            // line 189
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledSignals", [], "any", false, false, true, 189))) {
                // line 190
                echo "                        <div class=\"empty\">
                            <p>No signals handled</p>
                        </div>
                    ";
            } else {
                // line 194
                echo "                        <table>
                            <thead>
                                <tr>
                                    <th>Signal</th>
                                    <th>Times handled</th>
                                    <th>Total execution time</th>
                                    <th>Memory peak</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledSignals", [], "any", false, false, true, 204));
                foreach ($context['_seq'] as $context["signal"] => $context["data"]) {
                    // line 205
                    echo "                                    <tr>
                                        <td>";
                    // line 206
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["signal"], 206, $this->source), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 207
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "handled", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 208
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "duration", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
                    echo " ms</td>
                                        <td>";
                    // line 209
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "memory", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
                    echo " MiB</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['signal'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 215
            echo "                </div>
            </div>
        ";
        }
        // line 218
        echo "
        ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 219)) {
            // line 220
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Parent Command</h3>

                <div class=\"tab-content\">
                    <h3>
                        <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 225), "token", [], "any", false, false, true, 225)]), "html", null, true);
            echo "\">Return to parent command</a>
                        <small>(token = ";
            // line 226
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 226), "token", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            echo ")</small>
                    </h3>

                    ";
            // line 229
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 229), "url", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 233
        echo "
        ";
        // line 234
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 234))) {
            // line 235
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Sub Commands <span class=\"badge\">";
            // line 236
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 236), 236, $this->source)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 239));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 240
                echo "                        <h3>
                            ";
                // line 241
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
                echo "
                            <small>(token = <a href=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 242)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
                echo "</a>)</small>
                        </h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                </div>
            </div>
        ";
        }
        // line 248
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/command.html.twig";
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
        return array (  540 => 248,  535 => 245,  524 => 242,  520 => 241,  517 => 240,  513 => 239,  507 => 236,  504 => 235,  502 => 234,  499 => 233,  492 => 229,  486 => 226,  482 => 225,  475 => 220,  473 => 219,  470 => 218,  465 => 215,  460 => 212,  451 => 209,  447 => 208,  443 => 207,  439 => 206,  436 => 205,  432 => 204,  420 => 194,  414 => 190,  412 => 189,  406 => 186,  399 => 181,  397 => 180,  389 => 176,  383 => 175,  380 => 174,  375 => 173,  373 => 172,  367 => 169,  361 => 165,  359 => 164,  353 => 160,  348 => 157,  339 => 154,  336 => 153,  332 => 152,  321 => 145,  315 => 141,  313 => 140,  300 => 130,  293 => 126,  281 => 116,  275 => 114,  269 => 110,  267 => 109,  262 => 106,  259 => 105,  253 => 103,  247 => 99,  245 => 98,  237 => 92,  235 => 91,  232 => 90,  226 => 88,  220 => 84,  218 => 83,  213 => 80,  207 => 78,  201 => 74,  199 => 73,  189 => 66,  181 => 61,  173 => 56,  165 => 51,  157 => 46,  147 => 39,  139 => 34,  131 => 29,  119 => 19,  113 => 17,  107 => 15,  105 => 14,  100 => 13,  98 => 12,  95 => 11,  88 => 10,  77 => 5,  74 => 4,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/command.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/command.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 14, "for" => 152);
        static $filters = array("escape" => 13, "file_link" => 13, "abbr_method" => 15, "abbr_class" => 17, "default" => 145, "sort" => 152, "filter" => 173, "merge" => 174, "join" => 186, "length" => 234);
        static $functions = array("source" => 5, "include" => 78, "profiler_dump" => 126, "path" => 225);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'file_link', 'abbr_method', 'abbr_class', 'default', 'sort', 'filter', 'merge', 'join', 'length'],
                ['source', 'include', 'profiler_dump', 'path']
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
