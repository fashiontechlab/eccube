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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_a876d73d6db356b26fbe9910fbb319c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        .empty-query-post-files {
            display: flex;
            justify-content: space-between;
        }
        .empty-query-post-files > div {
            flex: 1;
        }
        .empty-query-post-files > div + div {
            margin-left: 30px;
        }
        .empty-query-post-files h3 {
            margin-top: 0;
        }
        .empty-query-post-files .empty {
            margin-bottom: 0;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 27
        echo "    ";
        ob_start(function () { return ''; });
        // line 28
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, true, 28)], 28, $context, $this->getSourceContext());
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 31)) {
            // line 32
            echo "        ";
            ob_start(function () { return ''; });
            // line 33
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 33), "controller", [], "any", false, false, true, 33), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 33), "route", [], "any", false, false, true, 33), ((("GET" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 33), "method", [], "any", false, false, true, 33))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 33), "method", [], "any", false, false, true, 33)) : (""))], 33, $context, $this->getSourceContext());
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 37)) {
            // line 38
            echo "        ";
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 38)], "method", false, false, true, 38);
            // line 39
            echo "        ";
            ob_start(function () { return ''; });
            // line 40
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_set_handler", [((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", ["request"], "method", false, false, true, 40), "controller", [], "any", false, false, true, 40)) : ("n/a"))], 40, $context, $this->getSourceContext());
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 44) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 44) >= 300)) ? ("yellow") : ("green"))));
        // line 45
        echo "
    ";
        // line 46
        ob_start(function () { return ''; });
        // line 47
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_status_code_color"] ?? null), 47, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</span>
        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, true, 48)) {
            // line 49
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 49)) {
                echo "<span class=\"sf-toolbar-request-icon\">";
                echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
                echo "</span>";
            }
            // line 50
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 50)) {
                echo "<span class=\"sf-toolbar-request-icon\">";
                echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
                echo "</span>";
            }
            // line 51
            echo "            <span class=\"sf-toolbar-label\">";
            ((("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 51))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 51), "html", null, true))) : (print ("")));
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</span>
        ";
        }
        // line 54
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
    ";
        // line 56
        ob_start(function () { return ''; });
        // line 57
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 63
        if (("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 63))) {
            // line 64
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 69
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 72
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_handler"] ?? null), 72, $this->source), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 77
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, true, 77)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, true, 77), 77, $this->source), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 82
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, true, 82))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, true, 87)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 91
        if (array_key_exists("redirect_handler", $context)) {
            // line 92
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 95
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 95), "status_code", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 99
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["redirect_handler"] ?? null), 99, $this->source), "html", null, true);
            echo "
                        (<a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 100), "token", [], "any", false, false, true, 100)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 100), "token", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 105
        echo "
        ";
        // line 106
        if (array_key_exists("forward_handler", $context)) {
            // line 107
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["forward_handler"] ?? null), 111, $this->source), "html", null, true);
            echo "
                        (<a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 112)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 117
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "
    ";
        // line 119
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 123
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 124
        echo twig_source($this->env, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 130
        echo "    ";
        $context["controller_name"] = twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, true, 130)], 130, $context, $this->getSourceContext());
        // line 131
        echo "    <h2>
        ";
        // line 132
        ((twig_in_filter("n/a", ($context["controller_name"] ?? null))) ? (print ("Request / Response")) : (print (twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true))));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                ";
        // line 140
        $context["has_no_query_post_or_files"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, true, 140), "all", [], "any", false, false, true, 140)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, true, 140), "all", [], "any", false, false, true, 140))) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, true, 140)));
        // line 141
        echo "                ";
        if (($context["has_no_query_post_or_files"] ?? null)) {
            // line 142
            echo "                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                ";
        } else {
            // line 157
            echo "                    <h3>GET Parameters</h3>

                    ";
            // line 159
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, true, 159), "all", [], "any", false, false, true, 159))) {
                // line 160
                echo "                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    ";
            } else {
                // line 164
                echo "                        ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, true, 164), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 166
            echo "
                    <h3>POST Parameters</h3>

                    ";
            // line 169
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, true, 169), "all", [], "any", false, false, true, 169))) {
                // line 170
                echo "                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    ";
            } else {
                // line 174
                echo "                        ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, true, 174), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 176
            echo "
                    <h4>Uploaded Files</h4>

                    ";
            // line 179
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, true, 179))) {
                // line 180
                echo "                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    ";
            } else {
                // line 184
                echo "                        ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, true, 184), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 186
            echo "                ";
        }
        // line 187
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 190
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, true, 190), "all", [], "any", false, false, true, 190))) {
            // line 191
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 195
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, true, 195)], false);
            echo "
                ";
        }
        // line 197
        echo "
                <h3>Request Headers</h3>
                ";
        // line 199
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestheaders", [], "any", false, false, true, 199), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, true, 203) == false)) {
            // line 204
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 207
($context["collector"] ?? null), "content", [], "any", false, false, true, 207)) {
            // line 208
            echo "                    <div class=\"sf-tabs\">
                        ";
            // line 209
            $context["prettyJson"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isJsonRequest", [], "any", false, false, true, 209)) ? (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "prettyJson", [], "any", false, false, true, 209)) : (null));
            // line 210
            echo "                        ";
            if ( !(null === ($context["prettyJson"] ?? null))) {
                // line 211
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 215
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["prettyJson"] ?? null), 215, $this->source), "html", null, true);
                echo "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 220
            echo "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 225
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
            echo "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 231
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 235
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 244
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responseheaders", [], "any", false, false, true, 244), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 248
        echo (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, true, 248), "all", [], "any", false, false, true, 248)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, true, 248), "all", [], "any", false, false, true, 248)))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 254
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, true, 254), "all", [], "any", false, false, true, 254))) {
            // line 255
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 259
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, true, 259)], false);
            echo "
                ";
        }
        // line 261
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 264
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, true, 264), "all", [], "any", false, false, true, 264))) {
            // line 265
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 269
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, true, 269)], true);
            echo "
                ";
        }
        // line 271
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 274
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, true, 274))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session";
        // line 275
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, true, 275))) {
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, true, 275), 275, $this->source)), "html", null, true);
            echo "</span>";
        }
        echo "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 280
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, true, 280))) {
            // line 281
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 285
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, true, 285)], false);
            echo "
                ";
        }
        // line 287
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 290
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, true, 290))) {
            // line 291
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 295
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, true, 295), "labels" => ["Attribute", "Value"]], false);
            echo "
                ";
        }
        // line 297
        echo "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 302
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, true, 302), 302, $this->source)), "html", null, true);
        echo "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 307
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, true, 307)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 312
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, true, 312))) {
            // line 313
            echo "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 317
            echo "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, true, 325));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 326
                echo "                            <tr>
                                <td class=\"font-normal\">";
                // line 328
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, true, 328), 328, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, true, 328), 328, $this->source));
                // line 329
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 329, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                    echo "\">";
                }
                // line 330
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
                // line 331
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
                // line 332
                echo "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 333
                $context["usage_id"] = ("session-usage-trace-" . $this->sandbox->ensureToStringAllowed($context["key"], 333, $this->source));
                // line 334
                echo "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["usage_id"] ?? null), 334, $this->source), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 336
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["usage_id"] ?? null), 336, $this->source), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 337
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, true, 337), 337, $this->source), 2);
                echo "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['usage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 342
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 345
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 348
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, true, 348))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 354
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, true, 354))) {
            // line 355
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 359
            echo "                    ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, true, 359)], false);
            echo "
                ";
        }
        // line 361
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 369
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, true, 369)], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 372
        $context["requestserver"] = [];
        // line 373
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestserver", [], "any", false, false, true, 373), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, true, 373), "keys", [], "any", false, false, true, 373)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 374
            echo "                    ";
            $context["requestserver"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["requestserver"] ?? null), 374, $this->source), [$context["key"] => $context["value"]]);
            // line 375
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        echo "                ";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        echo "
            </div>
        </div>

        ";
        // line 380
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 380)) {
            // line 381
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 386
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 386), "token", [], "any", false, false, true, 386)]), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 387
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 387), "token", [], "any", false, false, true, 387), 387, $this->source), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 390
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 390), "getcollector", ["request"], "method", false, false, true, 390), "requestattributes", [], "any", false, false, true, 390)], false);
            echo "
            </div>
        </div>
        ";
        }
        // line 394
        echo "
        ";
        // line 395
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 395))) {
            // line 396
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 397
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 397), 397, $this->source)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 400));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 401
                echo "                    <h3>
                        ";
                // line 402
                echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, true, 402), "controller", [], "any", false, false, true, 402)], 402, $context, $this->getSourceContext());
                echo "
                        <small>(token = <a href=\"";
                // line 403
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 403)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 403), 403, $this->source), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 406
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, true, 406), "requestattributes", [], "any", false, false, true, 406)], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            echo "            </div>
        </div>
        ";
        }
        // line 411
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 414
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 415
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, true, 415)) {
                // line 416
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? null), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 416, $this->source), "html", null, true);
                    echo "</span>";
                }
                // line 417
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, true, 417), 417, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, true, 417), 417, $this->source));
                // line 418
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 418, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                    echo "\">";
                }
                // line 420
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), false)) : (false))) {
                    // line 421
                    echo "@";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 421, $this->source), "html", null, true);
                } else {
                    // line 423
                    echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, true, 423), 423, $this->source), "html", null, true))), "html", null, true);
                    // line 424
                    ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, true, 424)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, true, 424)), "html", null, true))) : (print ("")));
                }
                // line 427
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 429
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 429, $this->source), $this->sandbox->ensureToStringAllowed(($context["controller"] ?? null), 429, $this->source))) : (($context["controller"] ?? null))), "html", null, true);
                echo "</span>";
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
        return "@WebProfiler/Collector/request.html.twig";
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
        return array (  978 => 429,  971 => 427,  968 => 424,  966 => 423,  962 => 421,  960 => 420,  948 => 418,  946 => 417,  940 => 416,  937 => 415,  919 => 414,  911 => 411,  906 => 408,  898 => 406,  890 => 403,  886 => 402,  883 => 401,  879 => 400,  873 => 397,  870 => 396,  868 => 395,  865 => 394,  858 => 390,  852 => 387,  848 => 386,  841 => 381,  839 => 380,  831 => 376,  825 => 375,  822 => 374,  817 => 373,  815 => 372,  809 => 369,  799 => 361,  793 => 359,  787 => 355,  785 => 354,  776 => 348,  771 => 345,  766 => 342,  755 => 337,  751 => 336,  745 => 334,  743 => 333,  740 => 332,  734 => 331,  731 => 330,  719 => 329,  717 => 328,  714 => 326,  710 => 325,  700 => 317,  694 => 313,  692 => 312,  684 => 307,  676 => 302,  669 => 297,  663 => 295,  657 => 291,  655 => 290,  650 => 287,  644 => 285,  638 => 281,  636 => 280,  624 => 275,  620 => 274,  615 => 271,  609 => 269,  603 => 265,  601 => 264,  596 => 261,  590 => 259,  584 => 255,  582 => 254,  573 => 248,  566 => 244,  555 => 235,  549 => 231,  540 => 225,  533 => 220,  525 => 215,  519 => 211,  516 => 210,  514 => 209,  511 => 208,  509 => 207,  504 => 204,  502 => 203,  495 => 199,  491 => 197,  485 => 195,  479 => 191,  477 => 190,  472 => 187,  469 => 186,  463 => 184,  457 => 180,  455 => 179,  450 => 176,  444 => 174,  438 => 170,  436 => 169,  431 => 166,  425 => 164,  419 => 160,  417 => 159,  413 => 157,  396 => 142,  393 => 141,  391 => 140,  380 => 132,  377 => 131,  374 => 130,  367 => 129,  356 => 124,  353 => 123,  346 => 122,  337 => 119,  334 => 118,  331 => 117,  321 => 112,  317 => 111,  311 => 107,  309 => 106,  306 => 105,  296 => 100,  292 => 99,  285 => 95,  280 => 92,  278 => 91,  267 => 87,  255 => 82,  247 => 77,  239 => 72,  234 => 69,  229 => 66,  225 => 64,  223 => 63,  215 => 60,  210 => 57,  208 => 56,  205 => 55,  202 => 54,  197 => 52,  192 => 51,  185 => 50,  178 => 49,  176 => 48,  169 => 47,  167 => 46,  164 => 45,  162 => 44,  159 => 43,  156 => 42,  150 => 40,  147 => 39,  144 => 38,  142 => 37,  139 => 36,  136 => 35,  130 => 33,  127 => 32,  125 => 31,  122 => 30,  116 => 28,  113 => 27,  106 => 26,  77 => 4,  70 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/request.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 31, "for" => 325, "macro" => 414);
        static $filters = array("escape" => 47, "default" => 77, "length" => 82, "file_link" => 328, "filter" => 373, "merge" => 374, "striptags" => 423, "abbr_class" => 423);
        static $functions = array("source" => 49, "path" => 100, "include" => 119, "profiler_dump" => 337);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'macro', 'import'],
                ['escape', 'default', 'length', 'file_link', 'filter', 'merge', 'striptags', 'abbr_class'],
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
