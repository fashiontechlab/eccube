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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_7e6268f24a5e679d269fa3f86aafbf6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        :root {
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #555;
        }
        .theme-dark {
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #ccc;
        }

        .log-filters {
            display: flex;
            flex-wrap: wrap;
        }
        .log-filters .log-filter {
            flex-shrink: 0;
            margin-right: 15px;
            position: relative;
        }
        .log-filters .log-filter summary {
            align-items: center;
            background: var(--button-background);
            border-radius: 6px;
            border: 1px solid var(--button-border-color);
            box-shadow: var(--button-box-shadow);
            color: var(--button-color);
            cursor: pointer;
            display: flex;
            font-size: 13px;
            font-weight: 500;
            padding: 4px 8px;
            white-space: nowrap;
        }
        .log-filters .log-filter summary:active {
            box-shadow: none;
            transform: translateY(1px);
        }
        .log-filters .log-filter summary .icon {
            height: 18px;
            width: 18px;
            margin: 0 7px 0 0;
        }
        .log-filters .log-filter summary svg {
            height: 18px;
            width: 18px;
            opacity: 0.7;
        }
        .log-filters .log-filter summary svg {
            stroke-width: 2;
        }
        .log-filters .log-filter summary .filter-active-num {
            color: var(--log-filter-active-num-color);
            font-weight: bold;
            padding: 0 1px;
        }
        .log-filter .tab-navigation {
            position: relative;
        }
        .log-filter .tab-navigation input[type=\"radio\"] {
            position: absolute;
            pointer-events: none;
            opacity: 0;
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            background-color: var(--tab-active-background);
            border-radius: 6px;
            box-shadow: inset 0 0 0 1.5px var(--tab-active-border-color);
            color: var(--tab-active-color);
            position: relative;
            z-index: 1;
        }
        .theme-dark .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            box-shadow: inset 0 0 0 1px var(--tab-border-color);
        }
        .tab-navigation input[type=\"radio\"]:focus-visible + .tab-control {
            outline: 1px solid var(--color-link);
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control + input[type=\"radio\"] + .tab-control:before{
            width: 0;
        }

        .log-filters .log-filter .log-filter-content {
            background: var(--base-0);
            border: 1px solid var(--table-border-color);
            border-radius: 6px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 15px;
            position: absolute;
            left: 0;
            top: 32px;
            max-width: 400px;
            min-width: 200px;
            z-index: 9999;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option {
            align-items: center;
            display: flex;
        }
        .log-filter .filter-select-all-or-none {
            margin-bottom: 10px;
        }
        .log-filter .filter-select-all-or-none button + button {
            margin-left: 15px;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option + .log-filter-option {
            margin: 7px 0 0;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option label {
            cursor: pointer;
            flex: 1;
            padding-left: 10px;
        }

        table.logs {
            border-bottom-width: 0;
            border-collapse: collapse;
        }
        table.logs tr + tr td {
            border-width: 1px 0 0;
        }
        table.logs .metadata {
            display: block;
            font-size: 12px;
        }
        .theme-dark tr.status-error td,
        .theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

        table.logs .log-timestamp {
            color: var(--log-timestamp-color);
        }
        table.logs .log-metadata {
            margin: 8px 0 0;
        }
        table.logs .log-metadata > span {
            display: inline-block;
        }
        table.logs .log-metadata > span + span {
            margin-left: 10px;
        }
        table.logs .log-metadata .log-channel {
            color: var(--base-1);
            font-size: 13px;
            font-weight: bold;
        }
        table.logs .log-metadata .badge {
            background: var(--badge-light-background);
            color: var(--badge-light-color);
        }
        table.logs .log-metadata .log-num-occurrences {
            color: var(--color-muted);
            font-size: 13px;
        }
        table.logs .log-metadata .context {
            background: var(--code-block-background);
            border-radius: 4px;
            padding: 5px;
        }
        table.logs .log-metadata .context + .context {
            margin-top: 10px;
        }
        .log-type-badge {
            background: var(--badge-light-background);
            box-shadow: none;
            color: var(--badge-light-color);
            display: inline-block;
            font-family: var(--font-family-system);
            margin-top: 5px;
        }
        .log-type-badge.badge-deprecation,
        .log-type-badge.badge-warning {
            background: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .log-type-badge.badge-error {
            background: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .log-type-badge.badge-silenced {
            background: #EDE9FE;
            color: #6D28D9;
        }
        .theme-dark .log-type-badge.badge-silenced {
            background: #5B21B6;
            color: #EDE9FE;
        }

        tr.log-status-warning > td:first-child,
        tr.log-status-error > td:first-child,
        tr.log-status-silenced > td:first-child {
            position: relative;
        }
        tr.log-status-warning > td:first-child:before,
        tr.log-status-error > td:first-child:before,
        tr.log-status-silenced > td:first-child:before {
            background: transparent;
            border-radius: 0;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
        }
        tr.log-status-warning > td:first-child:before {
            background: var(--yellow-400);
        }
        tr.log-status-error > td:first-child:before {
            background: var(--red-400);
        }
        tr.log-status-silenced > td:first-child:before {
            background: #a78bfa;
        }

        .container-compilation-logs {
            background: var(--table-background);
            border: 1px solid var(--base-2);
            border-radius: 6px;
            margin-top: 30px;
            padding: 15px;
        }
        .container-compilation-logs summary {
            cursor: pointer;
        }
        .container-compilation-logs summary h4 {
            margin: 0 0 5px;
        }
        .container-compilation-logs summary p {
            margin: 0;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 238
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
        echo "    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerLoggerPanel();
        });

        class SymfonyProfilerLoggerPanel {
            constructor() {
                this.#initializeLogsTable();
            }

            #initializeLogsTable() {
                this.#updateLogsTable();

                document.querySelectorAll('.log-filter input').forEach((input) => {
                    input.addEventListener('change', () => { this.#updateLogsTable(); });
                });

                document.querySelectorAll('.filter-select-all-or-none button').forEach((link) => {
                    link.addEventListener('click', () => {
                        const selectAll = link.classList.contains('select-all');
                        link.closest('.log-filter-content').querySelectorAll('input').forEach((input) => {
                            input.checked = selectAll;
                        });

                        this.#updateLogsTable();
                    });
                });

                document.body.addEventListener('click', (event) => {
                    document.querySelectorAll('details.log-filter').forEach((filterElement) => {
                        if (!filterElement.contains(event.target) && filterElement.open) {
                            filterElement.open = false;
                        }
                    });
                });
            }

            #updateLogsTable() {
                const logs = document.querySelector('table.logs');
                if (null === logs) {
                    return;
                }

                const selectedType = document.querySelector('#log-filter-type input:checked').value;
                const priorities = document.querySelectorAll('#log-filter-priority input');
                const allPriorities = Array.from(priorities).map((input) => input.value);
                const selectedPriorities = Array.from(priorities).filter((input) => input.checked).map((input) => input.value);
                const channels = document.querySelectorAll('#log-filter-channel input');
                const selectedChannels = Array.from(channels).filter((input) => input.checked).map((input) => input.value);

                /* hide rows that don't match the current filters */
                let numVisibleRows = 0;
                logs.querySelectorAll('tbody tr').forEach((row) => {
                    if ('all' !== selectedType && selectedType !== row.getAttribute('data-type')) {
                        row.style.display = 'none';
                        return;
                    }

                    const priority = row.getAttribute('data-priority');
                    if (false === selectedPriorities.includes(priority) && true === allPriorities.includes(priority)) {
                        row.style.display = 'none';
                        return;
                    }

                    if ('' !== row.getAttribute('data-channel') && false === selectedChannels.includes(row.getAttribute('data-channel'))) {
                        row.style.display = 'none';
                        return;
                    }

                    row.style.display = 'table-row';
                    numVisibleRows++;
                });

                document.querySelector('table.logs').style.display = 0 === numVisibleRows ? 'none' : 'table';
                document.querySelector('.no-logs-message').style.display = 0 === numVisibleRows ? 'block' : 'none';

                /* update the selected totals of all filters */
                document.querySelector('#log-filter-priority .filter-active-num').innerText = (priorities.length === selectedPriorities.length) ? 'All' : selectedPriorities.length;
                document.querySelector('#log-filter-channel .filter-active-num').innerText = (channels.length === selectedChannels.length) ? 'All' : selectedChannels.length;
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 323
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 324
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 324) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 324)) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 324))) {
            // line 325
            echo "        ";
            ob_start(function () { return ''; });
            // line 326
            echo "            ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 326)) ? ("red") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 326)) ? ("yellow") : ("none"))));
            // line 327
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 328
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 328)) ?: ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 328) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 328)))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 330
            echo "
        ";
            // line 331
            ob_start(function () { return ''; });
            // line 332
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 334
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 334)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, true, 334)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 334), 334, $this->source), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 339
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 339)) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", true, true, true, 339)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 339), 339, $this->source), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 344
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 344)) ? ("none") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, true, 344)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 344), 344, $this->source), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 347
            echo "
        ";
            // line 348
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 352
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 353
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 353)) ? ("error") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 353)) ? ("warning") : ("none"))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logs", [], "any", false, false, true, 353))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 354
        echo twig_source($this->env, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 356
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 356) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 356)) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 356))) {
            // line 357
            echo "            <span class=\"count\">
                <span>";
            // line 358
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 358)) ?: ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 358) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, true, 358)))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 361
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 364
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 365
        echo "    <h2>Log Messages</h2>

    ";
        // line 367
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, true, 367))) {
            // line 368
            echo "        <div class=\"empty empty-panel\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 372
            echo "        ";
            $context["has_error_logs"] = (twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, true, 372), 372, $this->source), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("error" == ($context["type"] ?? null)); })) > 0);
            // line 373
            echo "        ";
            $context["has_deprecation_logs"] = (twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, true, 373), 373, $this->source), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("deprecation" == ($context["type"] ?? null)); })) > 0);
            // line 374
            echo "
        ";
            // line 375
            $context["filters"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "filters", [], "any", false, false, true, 375);
            // line 376
            echo "        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <div class=\"tab-navigation\">
                    ";
            // line 379
            $context["initially_active_tab"] = ((($context["has_error_logs"] ?? null)) ? ("error") : (((($context["has_deprecation_logs"] ?? null)) ? ("deprecation") : ("all"))));
            // line 380
            echo "                    <input type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\" ";
            echo ((("all" == ($context["initially_active_tab"] ?? null))) ? ("checked") : (""));
            echo ">
                    <label for=\"filter-log-type-all\" class=\"tab-control\">
                        All messages
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\" ";
            // line 385
            echo ((("error" == ($context["initially_active_tab"] ?? null))) ? ("checked") : (""));
            echo ">
                    <label for=\"filter-log-type-error\" class=\"tab-control\">
                        Errors
                        <span class=\"badge status-";
            // line 388
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 388)) ? ("error") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, true, 388)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, true, 388), 388, $this->source), 0)) : (0)), "html", null, true);
            echo "</span>
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\" ";
            // line 391
            echo ((("deprecation" == ($context["initially_active_tab"] ?? null))) ? ("checked") : (""));
            echo ">
                    <label for=\"filter-log-type-deprecation\" class=\"tab-control\">
                        Deprecations
                        <span class=\"badge status-";
            // line 394
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 394)) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, true, 394)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, true, 394), 394, $this->source), 0)) : (0)), "html", null, true);
            echo "</span>
                    </label>
                </div>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 401
            echo twig_source($this->env, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Level (<span class=\"filter-active-num\">";
            // line 402
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, true, 402), 402, $this->source)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, true, 411));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 412
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 413
                echo ((("debug" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-level-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 413, $this->source), "html", null, true);
                echo "\" name=\"filter-log-level-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 413, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 413, $this->source), "html", null, true);
                echo "\">
                            <label for=\"filter-log-level-";
                // line 414
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 414, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["label"], 414, $this->source), "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 422
            echo twig_source($this->env, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Channel (<span class=\"filter-active-num\">";
            // line 423
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, true, 423), 423, $this->source)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 432
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, true, 432));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 433
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 434
                echo ((("event" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 434, $this->source), "html", null, true);
                echo "\" name=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 434, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 434, $this->source), "html", null, true);
                echo "\">
                            <label for=\"filter-log-channel-";
                // line 435
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 435, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 435, $this->source)), "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            echo "                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col style=\"width: 140px\">
                <col>
            </colgroup>

            <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, true, 456));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 457
                echo "                    ";
                $context["css_class"] = ((("error" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 457))) ? ("error") : (((((twig_get_attribute($this->env, $this->source,                 // line 458
$context["log"], "priorityName", [], "any", false, false, true, 458) == "WARNING") || ("deprecation" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 458)))) ? ("warning") : (((("silenced" == twig_get_attribute($this->env, $this->source,                 // line 459
$context["log"], "type", [], "any", false, false, true, 459))) ? ("silenced") : (""))))));
                // line 461
                echo "                    <tr class=\"log-status-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_class"] ?? null), 461, $this->source), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                echo "\" data-priority=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                echo "\" data-channel=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                echo "\" style=\"";
                echo (((("event" == twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, true, 461)) || ("DEBUG" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 461)))) ? ("display: none") : (""));
                echo "\">
                        <td class=\"log-timestamp\">
                            <time class=\"newline\" title=\"";
                // line 463
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, true, 463), 463, $this->source), "r"), "html", null, true);
                echo "\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, true, 463), 463, $this->source), twig_constant("DateTimeInterface::RFC3339_EXTENDED")), "html", null, true);
                echo "\" data-convert-to-user-timezone data-render-as-time data-render-with-millisecond-precision>
                                ";
                // line 464
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, true, 464), 464, $this->source), "H:i:s.v"), "html", null, true);
                echo "
                            </time>

                            ";
                // line 467
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 467), ["error", "deprecation", "silenced"]) || ("WARNING" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 467)))) {
                    // line 468
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_class"] ?? null), 468, $this->source), "html", null, true);
                    echo "\">
                                    ";
                    // line 469
                    if ((("error" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 469)) || ("WARNING" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 469)))) {
                        // line 470
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 470), 470, $this->source)), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 472
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 472), 472, $this->source)), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 474
                    echo "                                </span>
                            ";
                } else {
                    // line 476
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_class"] ?? null), 476, $this->source), "html", null, true);
                    echo "\">
                                    ";
                    // line 477
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 477), 477, $this->source)), "html", null, true);
                    echo "
                                </span>
                            ";
                }
                // line 480
                echo "                        </td>

                        <td class=\"font-normal\">
                            ";
                // line 483
                echo twig_call_macro($macros["_self"], "macro_render_log_message", ["debug", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 483), $context["log"]], 483, $context, $this->getSourceContext());
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>
    ";
        }
        // line 494
        echo "
    ";
        // line 495
        $context["compilerLogTotal"] = twig_array_reduce($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, true, 495), 495, $this->source), function ($__total__, $__logs__) use ($context, $macros) { $context["total"] = $__total__; $context["logs"] = $__logs__; return (($context["total"] ?? null) + twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["logs"] ?? null), 495, $this->source))); }, 0);
        // line 496
        echo "    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">(";
        // line 498
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["compilerLogTotal"] ?? null), 498, $this->source), "html", null, true);
        echo ")</span></h4>
            <span class=\"text-muted\">Log messages generated during the compilation of the service container.</span>
        </summary>

        ";
        // line 502
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, true, 502))) {
            // line 503
            echo "            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        ";
        } else {
            // line 507
            echo "            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, true, 516));
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
            foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                // line 517
                echo "                    <tr>
                        <td class=\"font-normal text-right\">";
                // line 518
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($context["logs"], 518, $this->source)), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 520
                $context["context_id"] = ("context-compiler-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 520), 520, $this->source));
                // line 521
                echo "
                            <button type=\"button\" class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                // line 522
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_id"] ?? null), 522, $this->source), "html", null, true);
                echo "\" data-toggle-alt-content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["class"], 522, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["class"], 522, $this->source), "html", null, true);
                echo "</button>

                            <div id=\"";
                // line 524
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_id"] ?? null), 524, $this->source), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    ";
                // line 526
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["logs"]);
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 527
                    echo "                                        <li>";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, true, 527), 527, $this->source));
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 529
                echo "                                </ul>
                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 534
            echo "                </tbody>
            </table>
        ";
        }
        // line 537
        echo "    </details>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 540
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 541
            echo "    ";
            $context["has_context"] = (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", true, true, true, 541) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, true, 541)));
            // line 542
            echo "    ";
            $context["has_trace"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, true, true, 542), "exception", [], "any", false, true, true, 542), "trace", [], "any", true, true, true, 542);
            // line 543
            echo "
    ";
            // line 544
            if ( !($context["has_context"] ?? null)) {
                // line 545
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, true, 545), 545, $this->source));
                echo "
    ";
            } else {
                // line 547
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, true, 547), 547, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, true, 547), 547, $this->source));
                echo "
    ";
            }
            // line 549
            echo "
    <div class=\"log-metadata\">
        ";
            // line 551
            if (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, true, 551)) {
                // line 552
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, true, 552), 552, $this->source), "html", null, true);
                echo "</span>
        ";
            }
            // line 554
            echo "
        ";
            // line 555
            if ((twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", true, true, true, 555) && (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, true, 555) > 1))) {
                // line 556
                echo "            <span class=\"log-num-occurrences\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, true, 556), 556, $this->source), "html", null, true);
                echo " times</span>
        ";
            }
            // line 558
            echo "
        ";
            // line 559
            if (($context["has_context"] ?? null)) {
                // line 560
                echo "            ";
                $context["context_id"] = ((("context-" . $this->sandbox->ensureToStringAllowed(($context["category"] ?? null), 560, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(($context["log_index"] ?? null), 560, $this->source));
                // line 561
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_id"] ?? null), 561, $this->source), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</button></span>
        ";
            }
            // line 563
            echo "
        ";
            // line 564
            if (($context["has_trace"] ?? null)) {
                // line 565
                echo "            ";
                $context["trace_id"] = ((("trace-" . $this->sandbox->ensureToStringAllowed(($context["category"] ?? null), 565, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed(($context["log_index"] ?? null), 565, $this->source));
                // line 566
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["trace_id"] ?? null), 566, $this->source), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</button></span>
        ";
            }
            // line 568
            echo "
        ";
            // line 569
            if (($context["has_context"] ?? null)) {
                // line 570
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_id"] ?? null), 570, $this->source), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 571
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, true, 571), 571, $this->source), 1);
                echo "
            </div>
        ";
            }
            // line 574
            echo "
        ";
            // line 575
            if (($context["has_trace"] ?? null)) {
                // line 576
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["trace_id"] ?? null), 576, $this->source), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 577
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, true, 577), "exception", [], "any", false, false, true, 577), "trace", [], "any", false, false, true, 577), 577, $this->source), 1);
                echo "
            </div>
        ";
            }
            // line 580
            echo "    </div>
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
        return "@WebProfiler/Collector/logger.html.twig";
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
        return array (  1085 => 580,  1079 => 577,  1074 => 576,  1072 => 575,  1069 => 574,  1063 => 571,  1058 => 570,  1056 => 569,  1053 => 568,  1047 => 566,  1044 => 565,  1042 => 564,  1039 => 563,  1033 => 561,  1030 => 560,  1028 => 559,  1025 => 558,  1019 => 556,  1017 => 555,  1014 => 554,  1008 => 552,  1006 => 551,  1002 => 549,  996 => 547,  990 => 545,  988 => 544,  985 => 543,  982 => 542,  979 => 541,  961 => 540,  953 => 537,  948 => 534,  930 => 529,  921 => 527,  917 => 526,  912 => 524,  903 => 522,  900 => 521,  898 => 520,  893 => 518,  890 => 517,  873 => 516,  862 => 507,  856 => 503,  854 => 502,  847 => 498,  843 => 496,  841 => 495,  838 => 494,  829 => 487,  811 => 483,  806 => 480,  800 => 477,  795 => 476,  791 => 474,  785 => 472,  779 => 470,  777 => 469,  772 => 468,  770 => 467,  764 => 464,  758 => 463,  744 => 461,  742 => 459,  741 => 458,  739 => 457,  722 => 456,  702 => 438,  691 => 435,  681 => 434,  678 => 433,  674 => 432,  662 => 423,  658 => 422,  651 => 417,  640 => 414,  630 => 413,  627 => 412,  623 => 411,  611 => 402,  607 => 401,  595 => 394,  589 => 391,  581 => 388,  575 => 385,  566 => 380,  564 => 379,  559 => 376,  557 => 375,  554 => 374,  551 => 373,  548 => 372,  542 => 368,  540 => 367,  536 => 365,  529 => 364,  521 => 361,  515 => 358,  512 => 357,  510 => 356,  505 => 354,  498 => 353,  491 => 352,  481 => 348,  478 => 347,  470 => 344,  460 => 339,  450 => 334,  446 => 332,  444 => 331,  441 => 330,  436 => 328,  431 => 327,  428 => 326,  425 => 325,  422 => 324,  415 => 323,  326 => 239,  319 => 238,  78 => 4,  71 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/logger.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/logger.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 324, "set" => 325, "for" => 411, "macro" => 540);
        static $filters = array("escape" => 328, "default" => 334, "length" => 372, "filter" => 372, "column" => 372, "title" => 435, "date" => 463, "lower" => 470, "reduce" => 495);
        static $functions = array("source" => 327, "include" => 348, "constant" => 463, "profiler_dump_log" => 527, "profiler_dump" => 571);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'macro', 'import'],
                ['escape', 'default', 'length', 'filter', 'column', 'title', 'date', 'lower', 'reduce'],
                ['source', 'include', 'constant', 'profiler_dump_log', 'profiler_dump']
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
