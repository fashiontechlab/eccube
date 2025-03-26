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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_7f58b1e3ce9f54544c693069b5d91528 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        .config-symfony-version-lts {
            border: 0;
            color: var(--color-muted);
            font-size: 21px;
            line-height: 33px;
        }
        .config-symfony-version-lts[title] {
            text-decoration: none;
        }
        .config-symfony-version-status-badge {
            background-color: var(--badge-background);
            border-radius: 4px;
            color: var(--badge-color);
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            margin: 10px 0 5px;
            padding: 3px 7px;
            white-space: nowrap;
        }
        .config-symfony-version-status-badge.status-success {
            background-color: var(--badge-success-background);
            color: var(--badge-success-color);
        }
        .config-symfony-version-status-badge.status-warning {
            background-color: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .config-symfony-version-status-badge.status-error {
            background-color: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .config-symfony-version-roadmap-link {
            display: inline-block;
            margin: 10px 5px 5px;
        }
        .config-symfony-eol {
            margin-top: 5px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 50
        echo "    ";
        if (("unknown" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, true, 50))) {
            // line 51
            echo "        ";
            $context["block_status"] = "";
            // line 52
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 53
            echo "    ";
        } elseif (("eol" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, true, 53))) {
            // line 54
            echo "        ";
            $context["block_status"] = "red";
            // line 55
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 56
            echo "    ";
        } elseif (("eom" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, true, 56))) {
            // line 57
            echo "        ";
            $context["block_status"] = "yellow";
            // line 58
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 59
            echo "    ";
        } elseif (("dev" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, true, 59))) {
            // line 60
            echo "        ";
            $context["block_status"] = "yellow";
            // line 61
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 62
            echo "    ";
        } else {
            // line 63
            echo "        ";
            $context["block_status"] = "";
            // line 64
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 65
            echo "    ";
        }
        // line 66
        echo "
    ";
        // line 67
        ob_start(function () { return ''; });
        // line 68
        echo "        <span class=\"sf-toolbar-label\">
            ";
        // line 69
        echo twig_source($this->env, "@WebProfiler/Icon/symfony.svg");
        echo "
        </span>
        <span class=\"sf-toolbar-value\">";
        // line 71
        ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", true, true, true, 71)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, true, 71), "html", null, true))) : (print ("n/a")));
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
    ";
        // line 74
        ob_start(function () { return ''; });
        // line 75
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 79
        if (($context["profiler_url"] ?? null)) {
            // line 80
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profiler_url"] ?? null), 80, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 82
            echo "                        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 84
        echo "                </span>
            </div>

            ";
        // line 87
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, true, 87))) {
            // line 88
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 90
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 93
        echo "
            ";
        // line 94
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, true, 94))) {
            // line 95
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, true, 97)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, true, 97)) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 100
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 105)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, true, 105), 105, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 105), 105, $this->source)), "html", null, true);
            echo "\"";
        }
        echo ">
                    ";
        // line 106
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 107
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, true, 113)) {
            // line 114
            echo "                    <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_xdebug");
            echo "\" title=\"View xdebug_info()\">
                ";
        }
        // line 116
        echo "                <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, true, 116)) ? ("green") : ("gray"));
        echo "\">Xdebug ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, true, 116)) ? ("✓") : ("✗"));
        echo "</span>
                ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, true, 117)) {
            // line 118
            echo "                    </a>
                ";
        }
        // line 120
        echo "                <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 120)) ? ("green") : ("gray"));
        echo "\">APCu ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 120)) ? ("✓") : ("✗"));
        echo "</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 121
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 121)) ? ("green") : ("red"));
        echo "\">OPcache ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 121)) ? ("✓") : ("✗"));
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 126
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, true, 131)) {
            // line 132
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/";
            // line 135
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "/index.html\" rel=\"help\">
                            Read Symfony ";
            // line 136
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo " Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 149
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        echo "
    ";
        // line 152
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . $this->sandbox->ensureToStringAllowed(($context["symfony_version_status"] ?? null), 152, $this->source)) . "\"")]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 156
        echo "    <span class=\"label label-status-";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, true, 156) == "eol")) ? ("red") : (((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, true, 156), ["eom", "dev"])) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 157
        echo twig_source($this->env, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 163
        echo "    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">
                ";
        // line 168
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
        echo "

                ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, true, 170)) {
            // line 171
            echo "                    <abbr class=\"config-symfony-version-lts\" title=\"This is a Long-Term Support version\">(LTS)</abbr>
                ";
        }
        // line 173
        echo "            </span>
            <span class=\"label\">Symfony version</span>
        </div>

        ";
        // line 177
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, true, 177))) {
            // line 178
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 179
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">Environment</span>
            </div>
        ";
        }
        // line 183
        echo "
        ";
        // line 184
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, true, 184))) {
            // line 185
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 186
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, true, 186)) ? ("enabled") : ("disabled"));
            echo "</span>
                <span class=\"label\">Debug</span>
            </div>
        ";
        }
        // line 190
        echo "    </div>

    ";
        // line 192
        $context["symfony_status"] = ["dev" => "In Development", "stable" => "Maintained", "eom" => "Security Fixes Only", "eol" => "Unmaintained"];
        // line 193
        echo "    ";
        $context["symfony_status_class"] = ["dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error"];
        // line 194
        echo "
    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">
                    <span class=\"config-symfony-version-status-badge status-";
        // line 199
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["symfony_status_class"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, true, 199)] ?? null) : null), 199, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["symfony_status"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, true, 199)] ?? null) : null), 199, $this->source)), "html", null, true);
        echo "</span>
                </span>
                <span class=\"label\">Your Symfony version status</span>
            </div>

            ";
        // line 204
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, true, 204)) {
            // line 205
            echo "                <div class=\"metric\">
                    <span class=\"value config-symfony-eol\">
                        ";
            // line 207
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeom", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
            echo "
                    </span>
                    <span class=\"label\">Bug fixes ";
            // line 209
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, true, 209), ["eom", "eol"])) ? ("ended on") : ("until"));
            echo "</span>
                </div>
            ";
        }
        // line 212
        echo "
            <div class=\"metric\">
                <span class=\"value config-symfony-eol\">
                    ";
        // line 215
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeol", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
        echo "
                </span>
                <span class=\"label\">
                    ";
        // line 218
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, true, 218)) ? ("Security fixes") : ("Bug fixes and security fixes"));
        echo "
                    ";
        // line 219
        echo ((("eol" == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, true, 219))) ? ("ended on") : ("until"));
        echo "</span>
            </div>
        </div>
    </div>

    <a class=\"config-symfony-version-roadmap-link\" href=\"https://symfony.com/releases/";
        // line 224
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyminorversion", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
        echo "\">View Symfony ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
        echo " release details</a>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 230
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 230)) {
            echo " <span class=\"unit\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            echo "</span>";
        }
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 235
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phparchitecture", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
        echo " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 240
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpintllocale", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 245
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phptimezone", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 253
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 253)) ? ("value-shows-no-color") : (""));
        echo "\">";
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 253)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                <span class=\"label\">OPcache</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 258
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 258)) ? ("value-shows-no-color") : (""));
        echo "\">";
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 258)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                <span class=\"label\">APCu</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 263
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, true, 263)) ? ("value-shows-no-color") : (""));
        echo "\">";
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, true, 263)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                <span class=\"label\">Xdebug</span>
            </div>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 270
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, true, 273)) {
            // line 274
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, true, 274), 274, $this->source)), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, true, 283))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 284
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 285
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 285, $this->source), "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 286
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, true, 286)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null), 286, $this->source));
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
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
        return array (  650 => 289,  641 => 286,  637 => 285,  634 => 284,  630 => 283,  617 => 274,  615 => 273,  609 => 270,  597 => 263,  587 => 258,  577 => 253,  566 => 245,  558 => 240,  550 => 235,  537 => 230,  526 => 224,  518 => 219,  514 => 218,  508 => 215,  503 => 212,  497 => 209,  492 => 207,  488 => 205,  486 => 204,  476 => 199,  469 => 194,  466 => 193,  464 => 192,  460 => 190,  453 => 186,  450 => 185,  448 => 184,  445 => 183,  438 => 179,  435 => 178,  433 => 177,  427 => 173,  423 => 171,  421 => 170,  416 => 168,  409 => 163,  402 => 162,  391 => 157,  386 => 156,  379 => 155,  370 => 152,  367 => 151,  363 => 149,  347 => 136,  343 => 135,  338 => 132,  336 => 131,  328 => 126,  318 => 121,  311 => 120,  307 => 118,  305 => 117,  298 => 116,  292 => 114,  290 => 113,  281 => 107,  277 => 106,  269 => 105,  262 => 100,  254 => 97,  250 => 95,  248 => 94,  245 => 93,  239 => 90,  235 => 88,  233 => 87,  228 => 84,  222 => 82,  214 => 80,  212 => 79,  206 => 75,  204 => 74,  201 => 73,  196 => 71,  191 => 69,  188 => 68,  186 => 67,  183 => 66,  180 => 65,  177 => 64,  174 => 63,  171 => 62,  168 => 61,  165 => 60,  162 => 59,  159 => 58,  156 => 57,  153 => 56,  150 => 55,  147 => 54,  144 => 53,  141 => 52,  138 => 51,  135 => 50,  128 => 49,  76 => 4,  69 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/config.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/config.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 50, "set" => 51, "for" => 283);
        static $filters = array("escape" => 71, "upper" => 199, "length" => 274, "sort" => 283, "keys" => 283);
        static $functions = array("source" => 69, "path" => 107, "include" => 152, "profiler_dump" => 286);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'upper', 'length', 'sort', 'keys'],
                ['source', 'path', 'include', 'profiler_dump']
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
