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

/* @WebProfiler/Collector/http_client.html.twig */
class __TwigTemplate_289856060f9566a16e859a515934e7a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/http_client.html.twig", 1);
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
        .sf-profiler-httpclient-requests thead th {
            vertical-align: top;
        }
        .sf-profiler-httpclient-requests .http-method {
            border: 1px solid var(--header-status-request-method-color);
            border-radius: 5px;
            color: var(--header-status-request-method-color);
            display: inline-block;
            font-weight: 500;
            line-height: 1;
            margin-right: 6px;
            padding: 2px 4px;
            text-align: center;
            white-space: nowrap;
        }
        .sf-profiler-httpclient-requests .status-response-status-code {
            background: var(--gray-600);
            border-radius: 4px;
            color: var(--white);
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 2px;
            padding: 1px 3px;
        }
        .sf-profiler-httpclient-requests .status-response-status-code.status-success { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-warning { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
        .sf-profiler-httpclient-requests .status-response-status-code.status-error { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 40
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 40)) {
            // line 41
            echo "        ";
            ob_start(function () { return ''; });
            // line 42
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/http-client.svg");
            echo "
            ";
            // line 43
            $context["status_color"] = "";
            // line 44
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        ";
            // line 47
            ob_start(function () { return ''; });
            // line 48
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status ";
            // line 54
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "errorCount", [], "any", false, false, true, 54) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "errorCount", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "
        ";
            // line 58
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 63
        echo "<span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 63) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">";
        // line 64
        echo twig_source($this->env, "@WebProfiler/Icon/http-client.svg");
        echo "</span>
    <strong>HTTP Client</strong>
    ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 66)) {
            // line 67
            echo "        <span class=\"count\">
            ";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 71
        echo "</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 75
        echo "    <h2>HTTP Client</h2>
    ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 76) == 0)) {
            // line 77
            echo "        <div class=\"empty empty-panel\">
            <p>No HTTP requests were made.</p>
        </div>
    ";
        } else {
            // line 81
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 87
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "errorCount", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clients", [], "any", false, false, true, 93));
            foreach ($context['_seq'] as $context["name"] => $context["client"]) {
                // line 94
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 94), 94, $this->source)) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 95
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 95, $this->source), "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 95), 95, $this->source)), "html", null, true);
                echo "</span></h3>
                    <div class=\"tab-content\">
                        ";
                // line 97
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 97)) == 0)) {
                    // line 98
                    echo "                            <div class=\"empty\">
                                <p>No requests were made with the \"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 99, $this->source), "html", null, true);
                    echo "\" service.</p>
                            </div>
                        ";
                } else {
                    // line 102
                    echo "                            <h4>Requests</h4>
                            ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 103));
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 104
                        echo "                                ";
                        $context["profiler_token"] = "";
                        // line 105
                        echo "                                ";
                        $context["profiler_link"] = "";
                        // line 106
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, true, true, 106), "response_headers", [], "any", true, true, true, 106)) {
                            // line 107
                            echo "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, true, 107), "response_headers", [], "any", false, false, true, 107));
                            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                                // line 108
                                echo "                                        ";
                                if (twig_matches("/^x-debug-token: .*\$/i", $context["header"])) {
                                    // line 109
                                    echo "                                            ";
                                    $context["profiler_token"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, true, 109), 109, $this->source), twig_length_filter($this->env, "x-debug-token: "));
                                    // line 110
                                    echo "                                        ";
                                }
                                // line 111
                                echo "                                        ";
                                if (twig_matches("/^x-debug-token-link: .*\$/i", $context["header"])) {
                                    // line 112
                                    echo "                                            ";
                                    $context["profiler_link"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, true, 112), 112, $this->source), twig_length_filter($this->env, "x-debug-token-link: "));
                                    // line 113
                                    echo "                                        ";
                                }
                                // line 114
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 115
                            echo "                                ";
                        }
                        // line 116
                        echo "                                <table class=\"sf-profiler-httpclient-requests\">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"http-method\">";
                        // line 120
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "method", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "</span>
                                        </th>
                                        <th class=\"full-width\">
                                            ";
                        // line 123
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "url", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                        echo "
                                        </th>
                                        ";
                        // line 125
                        if ((($context["profiler_token"] ?? null) && ($context["profiler_link"] ?? null))) {
                            // line 126
                            echo "                                            <th>
                                                Profile
                                            </th>
                                        ";
                        }
                        // line 130
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", true, true, true, 130) && twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, true, 130))) {
                            // line 131
                            echo "                                            <th>
                                                <button class=\"btn btn-sm hidden\" title=\"Copy as cURL\" data-clipboard-text=\"";
                            // line 132
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                            echo "\">Copy as cURL</button>
                                            </th>
                                        ";
                        }
                        // line 135
                        echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                        // line 138
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, true, 138))) {
                            // line 139
                            echo "                                        <tr>
                                            <th class=\"font-normal\">Request options</th>
                                            <td>";
                            // line 141
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, true, 141), 141, $this->source), 1);
                            echo "</td>
                                        </tr>
                                    ";
                        }
                        // line 144
                        echo "                                    <tr>
                                        <th class=\"font-normal\">Response</th>
                                        <td";
                        // line 146
                        if ((twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", true, true, true, 146) && twig_get_attribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, true, 146))) {
                            echo " colspan=\"2\"";
                        }
                        echo ">
                                            ";
                        // line 147
                        if ((twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 147) >= 500)) {
                            // line 148
                            echo "                                                ";
                            $context["responseStatus"] = "error";
                            // line 149
                            echo "                                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 149) >= 400)) {
                            // line 150
                            echo "                                                ";
                            $context["responseStatus"] = "warning";
                            // line 151
                            echo "                                            ";
                        } else {
                            // line 152
                            echo "                                                ";
                            $context["responseStatus"] = "success";
                            // line 153
                            echo "                                            ";
                        }
                        // line 154
                        echo "                                            <span class=\"font-normal status-response-status-code status-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["responseStatus"] ?? null), 154, $this->source), "html", null, true);
                        echo "\">
                                                ";
                        // line 155
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                        echo "
                                            </span>

                                            ";
                        // line 158
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, true, 158), 158, $this->source), 1);
                        echo "
                                        </td>
                                        ";
                        // line 160
                        if ((($context["profiler_token"] ?? null) && ($context["profiler_link"] ?? null))) {
                            // line 161
                            echo "                                            <td>
                                                <span><a href=\"";
                            // line 162
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profiler_link"] ?? null), 162, $this->source), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["profiler_token"] ?? null), 162, $this->source), "html", null, true);
                            echo "</a></span>
                                            </td>
                                        ";
                        }
                        // line 165
                        echo "                                    </tr>
                                    </tbody>
                                </table>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 169
                    echo "                        ";
                }
                // line 170
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "        ";
        }
        // line 174
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/http_client.html.twig";
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
        return array (  465 => 174,  462 => 173,  454 => 170,  451 => 169,  442 => 165,  434 => 162,  431 => 161,  429 => 160,  424 => 158,  418 => 155,  413 => 154,  410 => 153,  407 => 152,  404 => 151,  401 => 150,  398 => 149,  395 => 148,  393 => 147,  387 => 146,  383 => 144,  377 => 141,  373 => 139,  371 => 138,  366 => 135,  360 => 132,  357 => 131,  354 => 130,  348 => 126,  346 => 125,  341 => 123,  335 => 120,  329 => 116,  326 => 115,  320 => 114,  317 => 113,  314 => 112,  311 => 111,  308 => 110,  305 => 109,  302 => 108,  297 => 107,  294 => 106,  291 => 105,  288 => 104,  284 => 103,  281 => 102,  275 => 99,  272 => 98,  270 => 97,  263 => 95,  258 => 94,  254 => 93,  245 => 87,  238 => 83,  234 => 81,  228 => 77,  226 => 76,  223 => 75,  216 => 74,  208 => 71,  202 => 68,  199 => 67,  197 => 66,  192 => 64,  187 => 63,  180 => 62,  170 => 58,  167 => 57,  159 => 54,  152 => 50,  148 => 48,  146 => 47,  143 => 46,  137 => 44,  135 => 43,  130 => 42,  127 => 41,  124 => 40,  117 => 39,  76 => 4,  69 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/http_client.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/http_client.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "set" => 41, "for" => 93);
        static $filters = array("escape" => 44, "length" => 94, "slice" => 109);
        static $functions = array("source" => 42, "include" => 58, "profiler_dump" => 141);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length', 'slice'],
                ['source', 'include', 'profiler_dump']
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
