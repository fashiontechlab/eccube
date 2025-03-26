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

/* @WebProfiler/Collector/notifier.html.twig */
class __TwigTemplate_6ba5d01cfa238f0578ff0c67efcbf306 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/notifier.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/notifier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 4);
        // line 5
        echo "
    ";
        // line 6
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 6))) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/notifier.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start(function () { return ''; });
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent notifications</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
            echo "</span>
            </div>

            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, true, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 20
                (($context["transport"]) ? (print (twig_escape_filter($this->env, $context["transport"], "html", null, true))) : (print ("<em>Empty Transport Name</em>")));
                echo "</b>
                    <span class=\"sf-toolbar-status\">";
                // line 21
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [$context["transport"]], "method", false, false, true, 21), 21, $this->source)), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 31
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style>
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 68);
        // line 69
        echo "
    <span class=\"label ";
        // line 70
        echo ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 70), 70, $this->source))) ? ("") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 71
        echo twig_source($this->env, "@WebProfiler/Icon/notifier.svg");
        echo "</span>

        <strong>Notifications</strong>
        ";
        // line 74
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 74)) > 0)) {
            // line 75
            echo "            <span class=\"count\">
                <span>";
            // line 76
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 79
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 83
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 83);
        // line 84
        echo "
    <h2>Notifications</h2>

    ";
        // line 87
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 87))) {
            // line 88
            echo "        <div class=\"empty empty-panel\">
            <p>No notifications were sent.</p>
        </div>
    ";
        }
        // line 92
        echo "
    <div class=\"metrics\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, true, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 95
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 96
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [$context["transport"]], "method", false, false, true, 96), 96, $this->source)), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 97
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["transport"], 97, $this->source), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, true, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            echo "        <h3>";
            (($context["transport"]) ? (print (twig_escape_filter($this->env, $context["transport"], "html", null, true))) : (print ("<em>Empty Transport Name</em>")));
            echo "</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [$context["transport"]], "method", false, false, true, 107));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 108
                echo "                    ";
                $context["message"] = twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, true, 108);
                // line 109
                echo "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Message #";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo " <small>(";
                echo ((twig_get_attribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, true, 110)) ? ("queued") : ("sent"));
                echo ")</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <span class=\"label\">Subject</span>
                                    <h2 class=\"m-t-10\">";
                // line 115
                (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, true, 115) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, true, 115)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, true, 115), "html", null, true))) : (print ("(empty)")));
                echo "</h2>
                                </div>
                                ";
                // line 117
                $context["notification"] = (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "notification", [], "any", true, true, true, 117) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "notification", [], "any", false, false, true, 117)))) ? (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "notification", [], "any", false, false, true, 117)) : (null));
                // line 118
                echo "                                ";
                if (($context["notification"] ?? null)) {
                    // line 119
                    echo "                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <span class=\"label\">Content</span>
                                                <pre class=\"prewrap\">";
                    // line 123
                    (((twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", true, true, true, 123) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", false, false, true, 123)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", false, false, true, 123), "html", null, true))) : (print ("(empty)")));
                    echo "</pre>
                                                <span class=\"label\">Importance</span>
                                                <pre class=\"prewrap\">";
                    // line 125
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getImportance", [], "method", false, false, true, 125), 125, $this->source), "html", null, true);
                    echo "</pre>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 130
                echo "                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            ";
                // line 132
                if (($context["notification"] ?? null)) {
                    // line 133
                    echo "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Notification</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 137
                    echo twig_escape_filter($this->env, ("Subject: " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getSubject", [], "method", false, false, true, 137), 137, $this->source)), "html", null, true);
                    echo "<br/>";
                    // line 138
                    echo twig_escape_filter($this->env, ("Content: " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", false, false, true, 138), 138, $this->source)), "html", null, true);
                    echo "<br/>";
                    // line 139
                    echo twig_escape_filter($this->env, ("Importance: " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getImportance", [], "method", false, false, true, 139), 139, $this->source)), "html", null, true);
                    echo "<br/>";
                    // line 140
                    echo twig_escape_filter($this->env, ("Emoji: " . ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getEmoji", [], "method", false, false, true, 140))) ? ("(empty)") : (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getEmoji", [], "method", false, false, true, 140)))), "html", null, true);
                    echo "<br/>";
                    // line 141
                    echo twig_escape_filter($this->env, ("Exception: " . (((twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", true, true, true, 141) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, true, 141)))) ? (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, true, 141)) : ("(empty)"))), "html", null, true);
                    echo "<br/>";
                    // line 142
                    echo twig_escape_filter($this->env, ("ExceptionAsString: " . ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getExceptionAsString", [], "method", false, false, true, 142))) ? ("(empty)") : (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getExceptionAsString", [], "method", false, false, true, 142)))), "html", null, true);
                    echo "
                                                        </pre>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 147
                echo "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Message Options</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                // line 151
                if ((null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getOptions", [], "method", false, false, true, 151))) {
                    // line 152
                    echo "(empty)";
                } else {
                    // line 154
                    echo twig_escape_filter($this->env, json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getOptions", [], "method", false, false, true, 154), 154, $this->source), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                }
                // line 156
                echo "                                                        </pre>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/notifier.html.twig";
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
        return array (  434 => 165,  412 => 156,  409 => 154,  406 => 152,  404 => 151,  399 => 147,  391 => 142,  388 => 141,  385 => 140,  382 => 139,  379 => 138,  376 => 137,  371 => 133,  369 => 132,  365 => 130,  357 => 125,  352 => 123,  346 => 119,  343 => 118,  341 => 117,  336 => 115,  326 => 110,  323 => 109,  320 => 108,  303 => 107,  295 => 103,  291 => 102,  287 => 100,  278 => 97,  274 => 96,  271 => 95,  267 => 94,  263 => 92,  257 => 88,  255 => 87,  250 => 84,  247 => 83,  240 => 82,  232 => 79,  226 => 76,  223 => 75,  221 => 74,  215 => 71,  211 => 70,  208 => 69,  205 => 68,  198 => 67,  155 => 31,  148 => 30,  138 => 26,  135 => 25,  132 => 24,  123 => 21,  119 => 20,  116 => 19,  112 => 18,  106 => 15,  102 => 13,  100 => 12,  97 => 11,  92 => 9,  87 => 8,  84 => 7,  82 => 6,  79 => 5,  76 => 4,  69 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/notifier.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/notifier.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 6, "for" => 18);
        static $filters = array("length" => 6, "escape" => 9, "json_encode" => 154);
        static $functions = array("source" => 8, "include" => 26, "constant" => 154);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'json_encode'],
                ['source', 'include', 'constant']
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
