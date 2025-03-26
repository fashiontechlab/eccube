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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_85599ba3e19dc17c9ea32006ac1541d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "isXmlHttpRequest", [], "any", false, false, true, 1)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

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

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 6) > 0) || (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 6) > 0))) {
            // line 7
            echo "
        ";
            // line 8
            ob_start(function () { return ''; });
            // line 9
            echo "            ";
            $context["status"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 9) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 9) > 50)) ? ("yellow") : (""))));
            // line 10
            echo "
            ";
            // line 11
            if ((($context["profiler_markup_version"] ?? null) >= 3)) {
                // line 12
                echo "                ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@Doctrine/Collector/database.svg");
                echo "
            ";
            } else {
                // line 14
                echo "                <span class=\"icon\">";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "</span>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 17) == 0) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 17) > 0))) {
                // line 18
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
            } else {
                // line 21
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                // line 24
                echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 24) * 1000)), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
            }
            // line 28
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            ob_start(function () { return ''; });
            // line 31
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 33
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 41
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 41) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 45
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, true, 47)) {
                // line 48
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 50
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 54
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, true, 54) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 58
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, true, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 61
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 66
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "
        ";
            // line 68
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 68, $this->source), "")) : (""))]);
            echo "

    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 74
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 74) > 0)) ? ("label-status-error") : (""));
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 74) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 75
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, (("@Doctrine/Collector/" . (((($context["profiler_markup_version"] ?? null) < 3)) ? ("icon") : ("database"))) . ".svg"));
        echo "</span>
        <strong>Doctrine</strong>
        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 77)) {
            // line 78
            echo "            <span class=\"count\">
                <span>";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 82
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 86
        echo "    ";
        if (("explain" == ($context["page"] ?? null))) {
            // line 87
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 88
($context["token"] ?? null), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 90
($context["request"] ?? null), "query", [], "any", false, false, true, 90), "get", ["connection"], "method", false, false, true, 90), "query" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 91
($context["request"] ?? null), "query", [], "any", false, false, true, 91), "get", ["query"], "method", false, false, true, 91)]));
            // line 92
            echo "
    ";
        } else {
            // line 94
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_queries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 99
        echo "    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        ";
        // line 105
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 106
            echo "        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        ";
        }
        // line 115
        echo "    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 122
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 127
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 132
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 132) * 1000)), "html", null, true);
        echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 137
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
        </div>

        ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, true, 142)) {
            // line 143
            echo "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 145
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 149
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 153
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 158
        echo "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 161
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, true, 161))) ? ("disabled") : (""));
        echo "\">
            ";
        // line 162
        $context["group_queries"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, true, 162), "getBoolean", ["group"], "method", false, false, true, 162);
        // line 163
        echo "            <h3 class=\"tab-title\">
                ";
        // line 164
        if (($context["group_queries"] ?? null)) {
            // line 165
            echo "                    Grouped Statements
                ";
        } else {
            // line 167
            echo "                    Queries
                ";
        }
        // line 169
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 172
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, true, 172)) {
            // line 173
            echo "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 177
            echo "                    ";
            if (($context["group_queries"] ?? null)) {
                // line 178
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null)]), "html", null, true);
                echo "\">Show all queries</a></p>
                    ";
            } else {
                // line 180
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "group" => true]), "html", null, true);
                echo "\">Group similar statements</a></p>
                    ";
            }
            // line 182
            echo "
                    ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, true, 183));
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
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 184
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, true, 184)) > 1)) {
                    // line 185
                    echo "                            <h3>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["connection"], 185, $this->source), "html", null, true);
                    echo " <small>connection</small></h3>
                        ";
                }
                // line 187
                echo "
                        ";
                // line 188
                if (twig_test_empty($context["queries"])) {
                    // line 189
                    echo "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 193
                    echo "                            ";
                    if (($context["group_queries"] ?? null)) {
                        // line 194
                        echo "                                ";
                        $context["queries"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueries", [], "any", false, false, true, 194)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["connection"]] ?? null) : null);
                        // line 195
                        echo "                            ";
                    }
                    // line 196
                    echo "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 199
                    if (($context["group_queries"] ?? null)) {
                        // line 200
                        echo "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                        echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 201
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                        echo "')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 203
                        echo "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
                        echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 204
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                        echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 206
                    echo "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 209
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
                    echo "\">
                                ";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 211
                        echo "                                    ";
                        $context["i"] = ((($context["group_queries"] ?? null)) ? (twig_get_attribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, true, 211)) : ($context["i"]));
                        // line 212
                        echo "                                    <tr id=\"queryNo-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 212, $this->source), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 212), "loop", [], "any", false, false, true, 212), "index", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                        echo "\">
                                        ";
                        // line 213
                        if (($context["group_queries"] ?? null)) {
                            // line 214
                            echo "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 215
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, true, 215), 215, $this->source)), "html", null, true);
                            echo "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 216
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, true, 216) * 1000)), "html", null, true);
                            echo "&nbsp;ms<br />(";
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, true, 216), 216, $this->source)), "html", null, true);
                            echo "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 218
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
                            echo "</td>
                                        ";
                        } else {
                            // line 220
                            echo "                                            <td class=\"nowrap\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
                            echo "</td>
                                            <td class=\"nowrap\">";
                            // line 221
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, true, 221) * 1000)), "html", null, true);
                            echo "&nbsp;ms</td>
                                        ";
                        }
                        // line 223
                        echo "                                        <td>
                                            ";
                        // line 224
                        echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, true, 224), 224, $this->source));
                        echo "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 227
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, true, 227), 227, $this->source), 2);
                        echo "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 231
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 231, $this->source), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 231), "loop", [], "any", false, false, true, 231), "index", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 233
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, true, 233)) {
                            // line 234
                            echo "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 235
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 235, $this->source), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 235), "loop", [], "any", false, false, true, 235), "index", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
                            echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 237
                        echo "
                                                ";
                        // line 238
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, true, 238)) {
                            // line 239
                            echo "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 240
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 240, $this->source), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 240), "loop", [], "any", false, false, true, 240), "index", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
                            echo "\">Explain query</a>
                                                ";
                        }
                        // line 242
                        echo "
                                                ";
                        // line 243
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, true, 243)) {
                            // line 244
                            echo "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 245
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 245, $this->source), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 245), "loop", [], "any", false, false, true, 245), "index", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
                            echo "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 247
                        echo "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 249
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 249, $this->source), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 249), "loop", [], "any", false, false, true, 249), "index", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
                        echo "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 250
                        echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, true, 250), 250, $this->source), true);
                        echo "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 251
                        echo twig_escape_filter($this->env, $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, true, 251), 251, $this->source), false), "html_attr");
                        echo "\">Copy</button>
                                            </div>

                                            ";
                        // line 254
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, true, 254)) {
                            // line 255
                            echo "                                                <div id=\"original-query-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 255, $this->source), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 255), "loop", [], "any", false, false, true, 255), "index", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
                            echo "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 256
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters(($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, true, 256), 256, $this->source) . ";"), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, true, 256), 256, $this->source));
                            // line 257
                            echo "                                                    ";
                            echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql($this->sandbox->ensureToStringAllowed(($context["runnable_sql"] ?? null), 257, $this->source));
                            echo "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 258
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["runnable_sql"] ?? null), 258, $this->source), "html_attr");
                            echo "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 261
                        echo "
                                            ";
                        // line 262
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, true, 262)) {
                            // line 263
                            echo "                                                <div id=\"explain-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 263, $this->source), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 263), "loop", [], "any", false, false, true, 263), "index", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
                            echo "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 265
                        echo "
                                            ";
                        // line 266
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, true, 266)) {
                            // line 267
                            echo "                                                <div id=\"backtrace-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 267, $this->source), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, true, 267), "loop", [], "any", false, false, true, 267), "index", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
                            echo "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 276
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, true, 276));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                                // line 277
                                echo "                                                            <tr>
                                                                <td>";
                                // line 278
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
                                echo "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 281
                                $context["line_number"] = ((twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, true, 281)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, true, 281), 281, $this->source), 1)) : (1));
                                // line 282
                                echo "                                                                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, true, 282)) {
                                    // line 283
                                    echo "                                                                                    <a href=\"";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, true, 283), 283, $this->source), $this->sandbox->ensureToStringAllowed(($context["line_number"] ?? null), 283, $this->source)), "html", null, true);
                                    echo "\">
                                                                                ";
                                }
                                // line 285
                                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, true, 285)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, true, 285), 285, $this->source))) : ("")) . ((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, true, 285)) ? (((twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, true, 285)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, true, 285), 285, $this->source), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 286
                                echo "<span class=\"status-warning\">";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
                                echo "</span>
                                                                                ";
                                // line 287
                                if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, true, 287)) {
                                    // line 288
                                    echo "                                                                                    </a>
                                                                                ";
                                }
                                // line 290
                                echo "                                                                                (line ";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["line_number"] ?? null), 290, $this->source), "html", null, true);
                                echo ")
                                                                            </span>
                                                                </td>
                                                            </tr>
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 295
                            echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 299
                        echo "                                        </td>
                                    </tr>
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
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 302
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 305
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
            unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "                ";
        }
        // line 307
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 310
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, true, 310))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 313
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, true, 313)) {
            // line 314
            echo "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 318
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, true, 318)], 318, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 320
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 323
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, true, 323))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 327
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, true, 327)) {
            // line 328
            echo "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 332
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, true, 332)], 332, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 334
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 337
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, true, 337)) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 341
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, true, 341)) {
            // line 342
            echo "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 346
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, true, 346)) {
                // line 347
                echo "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 351
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 353
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, true, 353), "hits", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 358
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, true, 358), "misses", [], "any", false, false, true, 358), 358, $this->source), "html", null, true);
                echo "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 363
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, true, 363), "puts", [], "any", false, false, true, 363), 363, $this->source), "html", null, true);
                echo "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 368
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, true, 368), "hits", [], "any", false, false, true, 368)) {
                    // line 369
                    echo "                            <h3>Number of cache hits</h3>
                            ";
                    // line 370
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Hits", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, true, 370), "hits", [], "any", false, false, true, 370)], 370, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 372
                echo "
                        ";
                // line 373
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, true, 373), "misses", [], "any", false, false, true, 373)) {
                    // line 374
                    echo "                            <h3>Number of cache misses</h3>
                            ";
                    // line 375
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Misses", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, true, 375), "misses", [], "any", false, false, true, 375)], 375, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 377
                echo "
                        ";
                // line 378
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, true, 378), "puts", [], "any", false, false, true, 378)) {
                    // line 379
                    echo "                            <h3>Number of cache puts</h3>
                            ";
                    // line 380
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Puts", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, true, 380), "puts", [], "any", false, false, true, 380)], 380, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 382
                echo "                    ";
            }
            // line 383
            echo "                ";
        }
        // line 384
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 387
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, true, 387)) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 391
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, true, 391)) {
            // line 392
            echo "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 396
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, true, 396));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 397
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, true, 397)) > 1)) {
                    // line 398
                    echo "                            <h3>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["manager"], 398, $this->source), "html", null, true);
                    echo " <small>entity manager</small></h3>
                        ";
                }
                // line 400
                echo "
                        ";
                // line 401
                if (twig_test_empty($context["classes"])) {
                    // line 402
                    echo "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 406
                    echo "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 414
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 415
                        echo "                                    ";
                        $context["contains_errors"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, true, 415), $context["manager"], [], "array", true, true, true, 415) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, true, 415), $context["manager"], [], "array", false, true, true, 415), twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, true, 415), [], "array", true, true, true, 415));
                        // line 416
                        echo "                                    <tr class=\"";
                        echo ((($context["contains_errors"] ?? null)) ? ("status-error") : (""));
                        echo "\">
                                        <td>
                                <a href=\"";
                        // line 418
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, true, 418), 418, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, true, 418), 418, $this->source)), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                        echo "</a>
                            </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 421
                        if (($context["contains_errors"] ?? null)) {
                            // line 422
                            echo "                                                <ul>
                                                    ";
                            // line 423
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, false, true, 423)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["manager"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, true, 423)] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 424
                                echo "                                                        <li>";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["error"], 424, $this->source), "html", null, true);
                                echo "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 426
                            echo "                                                </ul>
                                            ";
                        } else {
                            // line 428
                            echo "                                                No errors.
                                            ";
                        }
                        // line 430
                        echo "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 433
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 436
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "                ";
        }
        // line 438
        echo "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                if (targetElement.getAttribute('data-sfurl') !== link.href) {
                    fetch(link.href, {
                        headers: {'X-Requested-With': 'XMLHttpRequest'}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute('data-sfurl', link.href)
                    }, function () {
                        targetElement.innerHTML = 'An error occurred while loading the query explanation.';
                    })
                }

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                button.classList.remove('hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 516
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 517
            echo "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 520
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label1"] ?? null), 520, $this->source), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 521
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label2"] ?? null), 521, $this->source), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 525
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 526
                echo "            <tr>
                <th scope=\"row\">";
                // line 527
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 527, $this->source), "html", null, true);
                echo "</th>
                <td>";
                // line 528
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 528, $this->source), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 531
            echo "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1256 => 531,  1247 => 528,  1243 => 527,  1240 => 526,  1236 => 525,  1229 => 521,  1225 => 520,  1220 => 517,  1202 => 516,  1119 => 438,  1116 => 437,  1110 => 436,  1105 => 433,  1097 => 430,  1093 => 428,  1089 => 426,  1080 => 424,  1076 => 423,  1073 => 422,  1071 => 421,  1063 => 418,  1057 => 416,  1054 => 415,  1050 => 414,  1040 => 406,  1034 => 402,  1032 => 401,  1029 => 400,  1023 => 398,  1020 => 397,  1015 => 396,  1009 => 392,  1007 => 391,  1000 => 387,  995 => 384,  992 => 383,  989 => 382,  984 => 380,  981 => 379,  979 => 378,  976 => 377,  971 => 375,  968 => 374,  966 => 373,  963 => 372,  958 => 370,  955 => 369,  953 => 368,  945 => 363,  937 => 358,  929 => 353,  925 => 351,  919 => 347,  916 => 346,  910 => 342,  908 => 341,  901 => 337,  896 => 334,  890 => 332,  884 => 328,  882 => 327,  875 => 323,  870 => 320,  864 => 318,  858 => 314,  856 => 313,  850 => 310,  845 => 307,  842 => 306,  828 => 305,  823 => 302,  807 => 299,  801 => 295,  781 => 290,  777 => 288,  775 => 287,  770 => 286,  768 => 285,  762 => 283,  759 => 282,  757 => 281,  751 => 278,  748 => 277,  731 => 276,  716 => 267,  714 => 266,  711 => 265,  703 => 263,  701 => 262,  698 => 261,  692 => 258,  687 => 257,  685 => 256,  678 => 255,  676 => 254,  670 => 251,  666 => 250,  660 => 249,  656 => 247,  649 => 245,  646 => 244,  644 => 243,  641 => 242,  632 => 240,  629 => 239,  627 => 238,  624 => 237,  617 => 235,  614 => 234,  612 => 233,  605 => 231,  598 => 227,  592 => 224,  589 => 223,  584 => 221,  579 => 220,  574 => 218,  567 => 216,  563 => 215,  560 => 214,  558 => 213,  551 => 212,  548 => 211,  531 => 210,  527 => 209,  522 => 206,  517 => 204,  512 => 203,  507 => 201,  502 => 200,  500 => 199,  495 => 196,  492 => 195,  489 => 194,  486 => 193,  480 => 189,  478 => 188,  475 => 187,  469 => 185,  466 => 184,  449 => 183,  446 => 182,  440 => 180,  434 => 178,  431 => 177,  425 => 173,  423 => 172,  418 => 169,  414 => 167,  410 => 165,  408 => 164,  405 => 163,  403 => 162,  399 => 161,  394 => 158,  386 => 153,  379 => 149,  372 => 145,  368 => 143,  366 => 142,  358 => 137,  350 => 132,  342 => 127,  334 => 122,  325 => 115,  314 => 106,  312 => 105,  304 => 99,  297 => 98,  286 => 94,  282 => 92,  280 => 91,  279 => 90,  278 => 88,  276 => 87,  273 => 86,  266 => 85,  258 => 82,  252 => 79,  249 => 78,  247 => 77,  242 => 75,  235 => 74,  228 => 73,  217 => 68,  214 => 67,  211 => 66,  204 => 61,  196 => 58,  187 => 54,  180 => 50,  176 => 48,  174 => 47,  167 => 45,  160 => 41,  153 => 37,  144 => 33,  140 => 31,  138 => 30,  135 => 29,  132 => 28,  125 => 24,  118 => 21,  111 => 18,  109 => 17,  106 => 16,  100 => 14,  94 => 12,  92 => 11,  89 => 10,  86 => 9,  84 => 8,  81 => 7,  78 => 6,  71 => 5,  64 => 1,  62 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Doctrine/Collector/db.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/doctrine/doctrine-bundle/Resources/views/Collector/db.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 3, "if" => 6, "set" => 8, "for" => 183, "macro" => 516);
        static $filters = array("escape" => 18, "format" => 24, "default" => 68, "length" => 184, "doctrine_prettify_sql" => 224, "doctrine_format_sql" => 250, "e" => 251, "doctrine_replace_query_parameters" => 256, "file_link" => 283);
        static $functions = array("include" => 12, "render" => 87, "controller" => 87, "path" => 178, "profiler_dump" => 227);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'set', 'for', 'macro'],
                ['escape', 'format', 'default', 'length', 'doctrine_prettify_sql', 'doctrine_format_sql', 'e', 'doctrine_replace_query_parameters', 'file_link'],
                ['include', 'render', 'controller', 'path', 'profiler_dump']
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
