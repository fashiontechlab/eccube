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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_129ec73703167842920220f53cd5c401 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
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
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23737373' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll('.mailer-email-summary-table-row');

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener('click', () => {
                        emailRows.forEach((row) => row.classList.remove('active'));
                        emailRow.classList.add('active');

                        document.querySelectorAll('.mailer-email-details').forEach((emailDetails) => emailDetails.style.display = 'none');
                        document.querySelector(emailRow.getAttribute('data-target')).style.display = 'block';
                    });
                });
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 191
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 192
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 192);
        // line 193
        echo "
    ";
        // line 194
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 194))) {
            // line 195
            echo "        ";
            ob_start(function () { return ''; });
            // line 196
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/mailer.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 197
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 197), 197, $this->source)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 199
            echo "
        ";
            // line 200
            ob_start(function () { return ''; });
            // line 201
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 203
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, true, 203), 203, $this->source), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, true, 203); })), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 207
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, true, 207), 207, $this->source), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, true, 207); })), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 210
            echo "
        ";
            // line 211
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 215
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 216
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 216);
        // line 217
        echo "
    <span class=\"label ";
        // line 218
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 218))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 219
        echo twig_source($this->env, "@WebProfiler/Icon/mailer.svg");
        echo "</span>

        <strong>Emails</strong>
        ";
        // line 222
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 222)) > 0)) {
            // line 223
            echo "            <span class=\"count\">
                <span>";
            // line 224
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 224), 224, $this->source)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 227
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 230
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 231
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 231);
        // line 232
        echo "    <h2>Emails</h2>

    ";
        // line 234
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, true, 234))) {
            // line 235
            echo "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 239
            echo "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 242
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, true, 242), 242, $this->source), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, true, 242); })), "html", null, true);
            echo "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 247
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, true, 247), 247, $this->source), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, true, 247); })), "html", null, true);
            echo "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 253
        echo "
    ";
        // line 254
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, true, 254)) > 1)) {
            // line 255
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, true, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 256
                echo "            <h2><code>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["transport"], 256, $this->source), "html", null, true);
                echo "</code> transport</h2>
            ";
                // line 257
                echo twig_call_macro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), $context["transport"]], 257, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, true, 259))) {
            // line 260
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, true, 260), 260, $this->source)), true], 260, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 262
        echo "
    ";
        // line 301
        echo "
    ";
        // line 443
        echo "
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 263
    public function macro_render_transport_details($__collector__ = null, $__transport__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 264
            echo "        <div class=\"card\">
            ";
            // line 265
            $context["num_emails"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 265), "events", [($context["transport"] ?? null)], "method", false, false, true, 265), 265, $this->source));
            // line 266
            echo "            ";
            if ((($context["num_emails"] ?? null) > 1)) {
                // line 267
                echo "                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 278
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 278), "events", [($context["transport"] ?? null)], "method", false, false, true, 278));
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
                    // line 279
                    echo "                                <tr class=\"mailer-email-summary-table-row ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 279)) ? ("active") : (""));
                    echo "\" data-target=\"#email-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
                    echo "\">
                                    <td>";
                    // line 280
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 281
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, true, 281), "getSubject", [], "method", true, true, true, 281) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, true, 281), "getSubject", [], "method", false, false, true, 281)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, true, 281), "getSubject", [], "method", false, false, true, 281), "html", null, true))) : (print ("(No subject)")));
                    echo "</td>
                                    <td>";
                    // line 282
                    echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, true, 282), "getTo", [], "method", false, false, true, 282), 282, $this->source), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, true, 282); }), ", "), "(empty)"), "html", null, true);
                    echo "</td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 283
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
                    echo "\">View email details</button></td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "                        </tbody>
                    </table>
                </div>

                ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 290), "events", [($context["transport"] ?? null)], "method", false, false, true, 290));
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
                    // line 291
                    echo "                    <div class=\"mailer-email-details ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 291)) ? ("active") : (""));
                    echo "\" id=\"email-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
                    echo "\">
                        ";
                    // line 292
                    echo twig_call_macro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, true, 292), twig_get_attribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, true, 292), ($context["show_transport_name"] ?? null)], 292, $context, $this->getSourceContext());
                    echo "
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
                // line 295
                echo "            ";
            } else {
                // line 296
                echo "                ";
                $context["event"] = twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 296), "events", [($context["transport"] ?? null)], "method", false, false, true, 296), 296, $this->source));
                // line 297
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "message", [], "any", false, false, true, 297), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isQueued", [], "any", false, false, true, 297), ($context["show_transport_name"] ?? null)], 297, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 299
            echo "        </div>
    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 302
    public function macro_render_email_details($__collector__ = null, $__transport__ = null, $__message__ = null, $__message_is_queued__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "message" => $__message__,
            "message_is_queued" => $__message_is_queued__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 303
            echo "        ";
            if (($context["show_transport_name"] ?? null)) {
                // line 304
                echo "            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-";
                // line 305
                echo ((($context["message_is_queued"] ?? null)) ? ("warning") : ("success"));
                echo "\">";
                echo ((($context["message_is_queued"] ?? null)) ? ("Queued") : ("Sent"));
                echo "</span>
                &bull;
                <strong>Transport:</strong> <code>";
                // line 307
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["transport"] ?? null), 307, $this->source), "html", null, true);
                echo "</code>
            </p>
        ";
            }
            // line 310
            echo "
        ";
            // line 311
            if ( !twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, true, 311)) {
                // line 312
                echo "            ";
                // line 313
                echo "            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, true, 313)], "method", false, false, true, 313), 313, $this->source), "html", null, true);
                echo "\" download=\"email.eml\">
                ";
                // line 314
                echo twig_source($this->env, "@WebProfiler/Icon/download.svg");
                echo "
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 318
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, true, 318), 318, $this->source), "html", null, true);
                echo "</pre>
        ";
            } else {
                // line 320
                echo "            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                ";
                // line 326
                (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, true, 326) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, true, 326)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, true, 326), "html", null, true))) : (print ("(No subject)")));
                echo "
                            </p>
                            <div class=\"mailer-message-headers\">
                                <p><strong>From:</strong> ";
                // line 329
                echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getFrom", [], "method", false, false, true, 329), 329, $this->source), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, true, 329); }), ", "), "(empty)"), "html", null, true);
                echo "</p>
                                <p><strong>To:</strong> ";
                // line 330
                echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getTo", [], "method", false, false, true, 330), 330, $this->source), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, true, 330); }), ", "), "(empty)"), "html", null, true);
                echo "</p>
                                ";
                // line 331
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, true, 331), "all", [], "any", false, false, true, 331), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !twig_in_filter(twig_lower_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, true, 331) &&  !(null === twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, true, 331)))) ? (twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, true, 331)) : (""))), ["subject", "from", "to"]); }));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 332
                    echo "                                    <p class=\"mailer-message-header-secondary\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                    echo "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 334
                echo "                            </div>
                        </div>

                        ";
                // line 337
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, true, 337)) {
                    // line 338
                    echo "                            <div class=\"card-block\">
                                ";
                    // line 339
                    $context["num_of_attachments"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, true, 339), 339, $this->source));
                    // line 340
                    echo "                                ";
                    $context["total_attachments_size_in_bytes"] = twig_array_reduce($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, true, 340), 340, $this->source), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return (($context["total_size"] ?? null) + twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attachment"] ?? null), "body", [], "any", false, false, true, 340), 340, $this->source))); }, 0);
                    // line 341
                    echo "                                <p class=\"mailer-message-attachments-title\">
                                    ";
                    // line 342
                    echo twig_source($this->env, "@WebProfiler/Icon/attachment.svg");
                    echo "
                                    Attachments <span>(";
                    // line 343
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_of_attachments"] ?? null), 343, $this->source), "html", null, true);
                    echo " file";
                    echo (((($context["num_of_attachments"] ?? null) > 1)) ? ("s") : (""));
                    echo " / ";
                    echo twig_call_macro($macros["_self"], "macro_render_file_size_humanized", [($context["total_attachments_size_in_bytes"] ?? null)], 343, $context, $this->getSourceContext());
                    echo ")</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    ";
                    // line 347
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, true, 347));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 348
                        echo "                                        <li>
                                            ";
                        // line 349
                        echo twig_source($this->env, "@WebProfiler/Icon/file.svg");
                        echo "

                                            ";
                        // line 351
                        if (((twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, true, 351)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, true, 351))) : (""))) {
                            // line 352
                            echo "                                                ";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                            echo "
                                            ";
                        } else {
                            // line 354
                            echo "                                                <em>(no filename)</em>
                                            ";
                        }
                        // line 356
                        echo "
                                            (";
                        // line 357
                        echo twig_call_macro($macros["_self"], "macro_render_file_size_humanized", [twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, true, 357), 357, $this->source))], 357, $context, $this->getSourceContext());
                        echo ")

                                            <a href=\"data:";
                        // line 359
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, true, 359)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, true, 359), 359, $this->source), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [twig_get_attribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, true, 359)], "method", false, false, true, 359), 359, $this->source), "html", null, true);
                        echo "\" download=\"";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, true, 359)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, true, 359), 359, $this->source), "attachment")) : ("attachment")), "html", null, true);
                        echo "\">Download</a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 362
                    echo "                                </ul>
                            </div>
                        ";
                }
                // line 365
                echo "
                        <div class=\"card-block\">
                            ";
                // line 367
                $context["textBody"] = twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "any", false, false, true, 367);
                // line 368
                echo "                            ";
                $context["htmlBody"] = twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", false, false, true, 368);
                // line 369
                echo "                            <div class=\"sf-tabs sf-tabs-sm\">
                                <div class=\"tab ";
                // line 370
                echo (( !($context["textBody"] ?? null)) ? ("disabled") : (""));
                echo " ";
                echo ((($context["textBody"] ?? null)) ? ("active") : (""));
                echo "\">
                                    <h3 class=\"tab-title\">Text content</h3>
                                    <div class=\"tab-content\">
                                        ";
                // line 373
                if (($context["textBody"] ?? null)) {
                    // line 374
                    echo "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                    // line 375
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, true, 375)) {
                        // line 376
                        echo twig_escape_filter($this->env, twig_convert_encoding($this->sandbox->ensureToStringAllowed(($context["textBody"] ?? null), 376, $this->source), "UTF-8", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, true, 376), 376, $this->source)), "html", null, true);
                    } else {
                        // line 378
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["textBody"] ?? null), 378, $this->source), "html", null, true);
                    }
                    // line 380
                    echo "</pre>
                                        ";
                } else {
                    // line 382
                    echo "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The text body is empty.</p>
                                            </div>
                                        ";
                }
                // line 386
                echo "                                    </div>
                                </div>

                                ";
                // line 389
                if (($context["htmlBody"] ?? null)) {
                    // line 390
                    echo "                                    <div class=\"tab\">
                                        <h3 class=\"tab-title\">HTML preview</h3>
                                        <div class=\"tab-content\">
                                            <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,";
                    // line 393
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [($context["htmlBody"] ?? null)], "method", false, false, true, 393), 393, $this->source), "html", null, true);
                    echo "\" style=\"height: 80vh;width: 100%;\"></iframe>
                                            </pre>
                                        </div>
                                    </div>
                                ";
                }
                // line 398
                echo "
                                <div class=\"tab ";
                // line 399
                echo (( !($context["htmlBody"] ?? null)) ? ("disabled") : (""));
                echo " ";
                echo ((( !($context["textBody"] ?? null) && ($context["htmlBody"] ?? null))) ? ("active") : (""));
                echo "\">
                                    <h3 class=\"tab-title\">HTML content</h3>
                                    <div class=\"tab-content\">
                                        ";
                // line 402
                if (($context["htmlBody"] ?? null)) {
                    // line 403
                    echo "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                    // line 404
                    if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, true, 404)) {
                        // line 405
                        echo twig_escape_filter($this->env, twig_convert_encoding($this->sandbox->ensureToStringAllowed(($context["htmlBody"] ?? null), 405, $this->source), "UTF-8", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, true, 405), 405, $this->source)), "html", null, true);
                    } else {
                        // line 407
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["htmlBody"] ?? null), 407, $this->source), "html", null, true);
                    }
                    // line 409
                    echo "</pre>
                                        ";
                } else {
                    // line 411
                    echo "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The HTML body is empty.</p>
                                            </div>
                                        ";
                }
                // line 415
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 425
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "method", false, false, true, 425), "asDebugString", [], "method", false, false, true, 425), 425, $this->source), "html", null, true);
                echo "</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                // line 432
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, true, 432)], "method", false, false, true, 432), 432, $this->source), "html", null, true);
                echo "\" download=\"email.eml\">
                            ";
                // line 433
                echo twig_source($this->env, "@WebProfiler/Icon/download.svg");
                echo "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 437
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, true, 437), 437, $this->source), "html", null, true);
                echo "</pre>
                    </div>
                </div>
            </div>
        ";
            }
            // line 442
            echo "    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 444
    public function macro_render_file_size_humanized($__bytes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 445
            if ((($context["bytes"] ?? null) < 1000)) {
                // line 446
                echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(($context["bytes"] ?? null), 446, $this->source) . " bytes"), "html", null, true);
            } elseif ((            // line 447
($context["bytes"] ?? null) < (1000 ** 2))) {
                // line 448
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 450
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / (1000 ** 2)), 2) . " MB"), "html", null, true);
            }
            
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
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  998 => 450,  995 => 448,  993 => 447,  991 => 446,  989 => 445,  973 => 444,  961 => 442,  953 => 437,  946 => 433,  942 => 432,  932 => 425,  920 => 415,  914 => 411,  910 => 409,  907 => 407,  904 => 405,  902 => 404,  900 => 403,  898 => 402,  890 => 399,  887 => 398,  879 => 393,  874 => 390,  872 => 389,  867 => 386,  861 => 382,  857 => 380,  854 => 378,  851 => 376,  849 => 375,  847 => 374,  845 => 373,  837 => 370,  834 => 369,  831 => 368,  829 => 367,  825 => 365,  820 => 362,  807 => 359,  802 => 357,  799 => 356,  795 => 354,  789 => 352,  787 => 351,  782 => 349,  779 => 348,  775 => 347,  764 => 343,  760 => 342,  757 => 341,  754 => 340,  752 => 339,  749 => 338,  747 => 337,  742 => 334,  733 => 332,  729 => 331,  725 => 330,  721 => 329,  715 => 326,  707 => 320,  702 => 318,  695 => 314,  690 => 313,  688 => 312,  686 => 311,  683 => 310,  677 => 307,  670 => 305,  667 => 304,  664 => 303,  644 => 302,  631 => 299,  625 => 297,  622 => 296,  619 => 295,  602 => 292,  595 => 291,  578 => 290,  572 => 286,  555 => 283,  551 => 282,  547 => 281,  543 => 280,  536 => 279,  519 => 278,  506 => 267,  503 => 266,  501 => 265,  498 => 264,  480 => 263,  472 => 443,  469 => 301,  466 => 262,  460 => 260,  457 => 259,  449 => 257,  444 => 256,  439 => 255,  437 => 254,  434 => 253,  425 => 247,  417 => 242,  412 => 239,  406 => 235,  404 => 234,  400 => 232,  397 => 231,  390 => 230,  382 => 227,  376 => 224,  373 => 223,  371 => 222,  365 => 219,  361 => 218,  358 => 217,  355 => 216,  348 => 215,  338 => 211,  335 => 210,  329 => 207,  322 => 203,  318 => 201,  316 => 200,  313 => 199,  308 => 197,  303 => 196,  300 => 195,  298 => 194,  295 => 193,  292 => 192,  285 => 191,  249 => 162,  242 => 161,  78 => 4,  71 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/mailer.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/mailer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 192, "if" => 194, "for" => 255, "macro" => 263);
        static $filters = array("length" => 194, "escape" => 197, "filter" => 203, "first" => 260, "default" => 282, "join" => 282, "map" => 282, "lower" => 331, "reduce" => 340, "convert_encoding" => 376, "number_format" => 448);
        static $functions = array("source" => 196, "include" => 211);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'macro', 'import'],
                ['length', 'escape', 'filter', 'first', 'default', 'join', 'map', 'lower', 'reduce', 'convert_encoding', 'number_format'],
                ['source', 'include']
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
