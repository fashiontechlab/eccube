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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_5615d5f7131b65a0d0911e08f1058beb extends Template
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
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $macros["_self"] = $this->macros["_self"] = $this;
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/migrations.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 4), "unavailable_migrations_count", [], "any", true, true, true, 4)) {
            // line 5
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 5), "unavailable_migrations_count", [], "any", false, false, true, 5);
            // line 6
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 6), "new_migrations", [], "any", false, false, true, 6), 6, $this->source));
            // line 7
            echo "        ";
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 8
                echo "            ";
                $context["executed_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 8), "executed_migrations", [], "any", false, false, true, 8), 8, $this->source));
                // line 9
                echo "            ";
                $context["available_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 9), "available_migrations_count", [], "any", false, false, true, 9);
                // line 10
                echo "            ";
                $context["status_color"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("yellow") : (""));
                // line 11
                echo "            ";
                $context["status_color"] = (((($context["new_migrations"] ?? null) > 0)) ? ("red") : (($context["status_color"] ?? null)));
                // line 12
                echo "
            ";
                // line 13
                ob_start(function () { return ''; });
                // line 14
                echo "                ";
                if ((($context["profiler_markup_version"] ?? null) < 3)) {
                    // line 15
                    echo "                    ";
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                    echo "
                ";
                } else {
                    // line 17
                    echo "                    ";
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                    echo "
                ";
                }
                // line 19
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 20
                echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                echo "</span>
            ";
                $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 22
                echo "
            ";
                // line 23
                ob_start(function () { return ''; });
                // line 24
                echo "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Current Migration</b>
                        <span>";
                // line 27
                (((($context["executed_migrations"] ?? null) > 0)) ? (print (twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 27), "executed_migrations", [], "any", false, false, true, 27)), "version", [], "any", false, false, true, 27), "\\")), "html", null, true))) : (print ("n/a")));
                echo "</span>
                    </div>
                </div>

                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <span class=\"sf-toolbar-header\">
                            <b>Database Migrations</b>
                        </span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Executed</b>
                        <span class=\"sf-toolbar-status\">";
                // line 39
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["executed_migrations"] ?? null), 39, $this->source), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Unavailable</b>
                        <span class=\"sf-toolbar-status ";
                // line 43
                echo (((($context["unavailable_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["unavailable_migrations"] ?? null), 43, $this->source), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Available</b>
                        <span class=\"sf-toolbar-status\">";
                // line 47
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["available_migrations"] ?? null), 47, $this->source), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>New</b>
                        <span class=\"sf-toolbar-status ";
                // line 51
                echo (((($context["new_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-red") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_migrations"] ?? null), 51, $this->source), "html", null, true);
                echo "</span>
                    </div>
                </div>
            ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 55
                echo "
            ";
                // line 56
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
                echo "
        ";
            }
            // line 58
            echo "    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 62
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 62), "unavailable_migrations_count", [], "any", true, true, true, 62)) {
            // line 63
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 63), "unavailable_migrations_count", [], "any", false, false, true, 63);
            // line 64
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 64), "new_migrations", [], "any", false, false, true, 64), 64, $this->source));
            // line 65
            echo "        ";
            $context["label"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("label-status-warning") : (""));
            // line 66
            echo "        ";
            $context["label"] = (((($context["new_migrations"] ?? null) > 0)) ? ("label-status-error") : (($context["label"] ?? null)));
            // line 67
            echo "        <span class=\"label ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 67, $this->source), "html", null, true);
            echo "\">
            <span class=\"icon\">
                ";
            // line 69
            if ((($context["profiler_markup_version"] ?? null) < 3)) {
                // line 70
                echo "                    ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                echo "
                ";
            } else {
                // line 72
                echo "                    ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                echo "
                ";
            }
            // line 74
            echo "            </span>

            <strong>Migrations</strong>
            ";
            // line 77
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 78
                echo "                <span class=\"count\">
                    <span>";
                // line 79
                echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 82
            echo "        </span>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 87
        echo "    ";
        $context["num_executed_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 87), "executed_migrations", [], "any", false, false, true, 87), 87, $this->source));
        // line 88
        echo "    ";
        $context["num_unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 88), "unavailable_migrations_count", [], "any", false, false, true, 88);
        // line 89
        echo "    ";
        $context["num_available_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 89), "available_migrations_count", [], "any", false, false, true, 89);
        // line 90
        echo "    ";
        $context["num_new_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 90), "new_migrations", [], "any", false, false, true, 90), 90, $this->source));
        // line 91
        echo "
    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_executed_migrations"] ?? null), 95, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed</span>
        </div>

        ";
        // line 99
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 100
            echo "            <div class=\"metric-group\">
        ";
        }
        // line 102
        echo "
        <div class=\"metric\">
            <span class=\"value\">";
        // line 104
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_unavailable_migrations"] ?? null), 104, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 108
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_available_migrations"] ?? null), 108, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 112
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_new_migrations"] ?? null), 112, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">New</span>
        </div>

        ";
        // line 116
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 117
            echo "            </div> ";
            // line 118
            echo "        ";
        }
        // line 119
        echo "    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Migrations
                <span class=\"badge ";
        // line 125
        echo (((($context["num_new_migrations"] ?? null) > 0)) ? ("status-error") : ((((($context["num_unavailable_migrations"] ?? null) > 0)) ? ("status-warning") : (""))));
        echo "\">
                    ";
        // line 126
        echo twig_escape_filter($this->env, (((($context["num_new_migrations"] ?? null) > 0)) ? (($context["num_new_migrations"] ?? null)) : ((((($context["num_unavailable_migrations"] ?? null) > 0)) ? (($context["num_unavailable_migrations"] ?? null)) : (($context["num_executed_migrations"] ?? null))))), "html", null, true);
        echo "
                </span>
            </h3>

            <div class=\"tab-content\">
                ";
        // line 131
        echo twig_call_macro($macros["_self"], "macro_render_migration_details", [($context["collector"] ?? null), ($context["profiler_markup_version"] ?? null)], 131, $context, $this->getSourceContext());
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Configuration</h3>

            <div class=\"tab-content\">
                ";
        // line 139
        echo twig_call_macro($macros["_self"], "macro_render_configuration_details", [($context["collector"] ?? null), ($context["profiler_markup_version"] ?? null)], 139, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 145
    public function macro_render_migration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration_details"));

            // line 146
            echo "    <table>
        <thead>
        <tr>
            <th class=\"colored font-normal\">Version</th>
            <th class=\"colored font-normal\">Description</th>
            <th class=\"colored font-normal\">Status</th>
            <th class=\"colored font-normal\">Executed at</th>
            <th class=\"colored font-normal text-right\">Execution time</th>
        </tr>
        </thead>
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 156), "new_migrations", [], "any", false, false, true, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 157
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 160), "executed_migrations", [], "any", false, false, true, 160)));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 161
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_render_migration", [$context["migration"]], 161, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 166
    public function macro_render_configuration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_configuration_details"));

            // line 167
            echo "    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
            // line 175
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 175), "storage", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "</td>
        </tr>
        ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 177), "table", [], "any", true, true, true, 177)) {
                // line 178
                echo "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
                // line 180
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 180), "table", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            // line 183
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 183), "column", [], "any", true, true, true, 183)) {
                // line 184
                echo "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
                // line 186
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 186), "column", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            // line 189
            echo "    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Database</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
            // line 199
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 199), "driver", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
            // line 203
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 203), "name", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            echo "</td>
        </tr>
    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
        </tr>
        </thead>
        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 213), "namespaces", [], "any", false, false, true, 213));
            foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
                // line 214
                echo "            <tr>
                <td class=\"font-normal\">";
                // line 215
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["namespace"], 215, $this->source), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 216
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["directory"], 216, $this->source), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 222
    public function macro_render_migration($__migration__ = null, $__profiler_markup_version__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "profiler_markup_version" => $__profiler_markup_version__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration"));

            // line 223
            echo "    <tr>
        <td class=\"font-normal\">
            ";
            // line 225
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, true, 225)) {
                // line 226
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, true, 226), 226, $this->source), 1), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 228
                echo "                ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 230
            echo "        </td>
        <td class=\"font-normal\">";
            // line 231
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "description", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
            echo "</td>
        <td class=\"font-normal align-right\">
            ";
            // line 233
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "is_new", [], "any", false, false, true, 233)) {
                // line 234
                echo "                <span class=\"";
                echo (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-error") : ("label status-error"));
                echo "\">NOT EXECUTED</span>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 235
($context["migration"] ?? null), "is_unavailable", [], "any", false, false, true, 235)) {
                // line 236
                echo "                <span class=\"";
                echo (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-warning") : ("label status-warning"));
                echo "\">UNAVAILABLE</span>
            ";
            } else {
                // line 238
                echo "                <span class=\"";
                echo (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-success") : ("label status-success"));
                echo "\">EXECUTED</span>
            ";
            }
            // line 240
            echo "        </td>
        <td class=\"font-normal\">";
            // line 241
            ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, true, 241)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, true, 241), "M j, Y H:i"), "html", null, true))) : (print ("n/a")));
            echo "</td>
        <td class=\"font-normal text-right\">
            ";
            // line 243
            if ((null === twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, true, 243))) {
                // line 244
                echo "                n/a
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 245
($context["migration"] ?? null), "execution_time", [], "any", false, false, true, 245) < 1)) {
                // line 246
                echo "                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, true, 246) * 1000), 0), "html", null, true);
                echo " ms
            ";
            } else {
                // line 248
                echo "                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, true, 248), 248, $this->source), 2), "html", null, true);
                echo " seconds
            ";
            }
            // line 250
            echo "        </td>
    </tr>
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
        return "@DoctrineMigrations/Collector/migrations.html.twig";
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
        return array (  667 => 250,  661 => 248,  655 => 246,  653 => 245,  650 => 244,  648 => 243,  643 => 241,  640 => 240,  634 => 238,  628 => 236,  626 => 235,  621 => 234,  619 => 233,  614 => 231,  611 => 230,  605 => 228,  595 => 226,  593 => 225,  589 => 223,  572 => 222,  559 => 219,  550 => 216,  546 => 215,  543 => 214,  539 => 213,  526 => 203,  519 => 199,  507 => 189,  501 => 186,  497 => 184,  494 => 183,  488 => 180,  484 => 178,  482 => 177,  477 => 175,  467 => 167,  451 => 166,  438 => 163,  429 => 161,  425 => 160,  422 => 159,  413 => 157,  409 => 156,  397 => 146,  381 => 145,  369 => 139,  358 => 131,  350 => 126,  346 => 125,  338 => 119,  335 => 118,  333 => 117,  331 => 116,  324 => 112,  317 => 108,  310 => 104,  306 => 102,  302 => 100,  300 => 99,  293 => 95,  287 => 91,  284 => 90,  281 => 89,  278 => 88,  275 => 87,  268 => 86,  259 => 82,  253 => 79,  250 => 78,  248 => 77,  243 => 74,  237 => 72,  231 => 70,  229 => 69,  223 => 67,  220 => 66,  217 => 65,  214 => 64,  211 => 63,  208 => 62,  201 => 61,  193 => 58,  188 => 56,  185 => 55,  176 => 51,  169 => 47,  160 => 43,  153 => 39,  138 => 27,  133 => 24,  131 => 23,  128 => 22,  123 => 20,  120 => 19,  114 => 17,  108 => 15,  105 => 14,  103 => 13,  100 => 12,  97 => 11,  94 => 10,  91 => 9,  88 => 8,  85 => 7,  82 => 6,  79 => 5,  76 => 4,  69 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/migrations.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/doctrine/doctrine-migrations-bundle/Resources/views/Collector/migrations.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "macro" => 145, "for" => 156);
        static $filters = array("length" => 6, "escape" => 20, "last" => 27, "split" => 27, "reverse" => 160, "file_link" => 226, "date" => 241, "number_format" => 246);
        static $functions = array("include" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'macro', 'for', 'import'],
                ['length', 'escape', 'last', 'split', 'reverse', 'file_link', 'date', 'number_format'],
                ['include']
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
