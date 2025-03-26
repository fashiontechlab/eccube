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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_aa3927e2a4d5afe0f476d5e2267c7903 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #collector-content .decision-log .voter_result td {
            border-top-width: 1px;
            border-bottom-width: 0;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details td {
            border-top-width: 0;
            border-bottom-width: 1px;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details table {
            border: 0;
            margin: 0;
            box-shadow: unset;
        }

        #collector-content .decision-log .voter_details table td {
            border: 0;
            padding: 0 0 8px 0;
        }

        #collector-content .authenticators .badge {
            color: var(--white);
            display: inline-block;
            text-align: center;
        }
        #collector-content .authenticators .badge.badge-resolved {
            background-color: var(--green-500);
        }
        #collector-content .authenticators .badge.badge-not_resolved {
            background-color: var(--yellow-500);
        }

        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-check\"] {
            color: var(--green-500);
        }
        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-x\"] {
            color: var(--red-500);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 54
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 54)) {
            // line 55
            echo "        ";
            ob_start(function () { return ''; });
            // line 56
            echo "            ";
            echo twig_source($this->env, "@Security/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 57
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, true, 57)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, true, 57), 57, $this->source), "n/a")) : ("n/a")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
        ";
            // line 60
            ob_start(function () { return ''; });
            // line 61
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, true, 61)) {
                // line 62
                echo "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                // line 65
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonatorUser", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "</span>
                    </div>
                </div>
            ";
            }
            // line 69
            echo "
            <div class=\"sf-toolbar-info-group\">
                ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, true, 71)) {
                // line 72
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 72)) {
                    // line 73
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                    // line 75
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 80
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, true, 80)) ? ("green") : ("yellow"));
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, true, 80)) ? ("Yes") : ("No"));
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                    // line 86
                    $context["remainingRoles"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, true, 86), 86, $this->source), 1);
                    // line 87
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, true, 87), 87, $this->source)), "html", null, true);
                    echo "
                                ";
                    // line 88
                    if ( !twig_test_empty(($context["remainingRoles"] ?? null))) {
                        // line 89
                        echo "                                    +
                                    <abbr title=\"";
                        // line 90
                        echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["remainingRoles"] ?? null), 90, $this->source), ", "), "html", null, true);
                        echo "\">
                                        ";
                        // line 91
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainingRoles"] ?? null), 91, $this->source)), "html", null, true);
                        echo " more
                                    </abbr>
                                ";
                    }
                    // line 94
                    echo "                            </span>
                        </div>

                        ";
                    // line 97
                    if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, true, 97)) {
                        // line 98
                        echo "                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    ";
                        // line 101
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, true, 101))) {
                            // line 102
                            echo "                                        none
                                    ";
                        } else {
                            // line 104
                            echo "                                        ";
                            $context["remainingRoles"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, true, 104), 104, $this->source), 1);
                            // line 105
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, true, 105), 105, $this->source)), "html", null, true);
                            echo "
                                        ";
                            // line 106
                            if ( !twig_test_empty(($context["remainingRoles"] ?? null))) {
                                // line 107
                                echo "                                            +
                                            <abbr title=\"";
                                // line 108
                                echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["remainingRoles"] ?? null), 108, $this->source), ", "), "html", null, true);
                                echo "\">
                                                ";
                                // line 109
                                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainingRoles"] ?? null), 109, $this->source)), "html", null, true);
                                echo " more
                                            </abbr>
                                        ";
                            }
                            // line 112
                            echo "                                    ";
                        }
                        // line 113
                        echo "                                </span>
                            </div>
                        ";
                    }
                    // line 116
                    echo "
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                    // line 119
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", [], "any", false, false, true, 119), 119, $this->source), "html", null, true));
                    echo "</span>
                        </div>
                    ";
                } else {
                    // line 122
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                }
                // line 127
                echo "
                    ";
                // line 128
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 128)) {
                    // line 129
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                    // line 131
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 131), "name", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                    echo "</span>
                        </div>
                    ";
                }
                // line 134
                echo "
                    ";
                // line 135
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 135) && twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, true, 135))) {
                    // line 136
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                    echo "\">Logout</a>
                                ";
                    // line 140
                    if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, true, 140) && twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, true, 140))) {
                        // line 141
                        echo "                                    | <a href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                        echo "\">Exit impersonation</a>
                                ";
                    }
                    // line 143
                    echo "                            </span>
                        </div>
                    ";
                }
                // line 146
                echo "                ";
            } else {
                // line 147
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
            }
            // line 151
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        ";
            // line 154
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 159
        echo "    <span class=\"label ";
        echo ((( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 159) ||  !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 159))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 160
        echo twig_source($this->env, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 165
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 166
        echo "    <h2>Security</h2>
    ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, true, 167)) {
            // line 168
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 169
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 169))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 173)) {
                // line 174
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 176
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
                echo "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 181
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, true, 181)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        ";
                // line 197
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, true, 197))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, true, 197), 197, $this->source), 1)));
                echo "

                                        ";
                // line 199
                if (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, true, 199) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, true, 199)))) {
                    // line 200
                    echo "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 202
                echo "                                    </td>
                                </tr>

                                ";
                // line 205
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, true, 205)) {
                    // line 206
                    echo "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 208
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, true, 208))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, true, 208), 208, $this->source), 1)));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 211
                echo "
                                ";
                // line 212
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 212)) {
                    // line 213
                    echo "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 215
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 215), 215, $this->source));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 218
                echo "                            </tbody>
                        </table>
                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 220
($context["collector"] ?? null), "enabled", [], "any", false, false, true, 220)) {
                // line 221
                echo "                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    ";
            }
            // line 225
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 228
            echo ((( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 228) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 228), "security_enabled", [], "any", false, false, true, 228)))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 231
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 231)) {
                // line 232
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 234
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 234), "name", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
                echo "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 238
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 238), "security_enabled", [], "any", false, false, true, 238)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 242
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 242), "stateless", [], "any", false, false, true, 242)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        ";
                // line 247
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 247), "security_enabled", [], "any", false, false, true, 247)) {
                    // line 248
                    echo "                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>";
                    // line 259
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 259), "provider", [], "any", false, false, true, 259)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 259), "provider", [], "any", false, false, true, 259), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 263
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 263), "context", [], "any", false, false, true, 263)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 263), "context", [], "any", false, false, true, 263), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 267
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 267), "entry_point", [], "any", false, false, true, 267)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 267), "entry_point", [], "any", false, false, true, 267), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 271
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 271), "user_checker", [], "any", false, false, true, 271)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 271), "user_checker", [], "any", false, false, true, 271), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 275
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 275), "access_denied_handler", [], "any", false, false, true, 275)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 275), "access_denied_handler", [], "any", false, false, true, 275), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 279
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 279), "access_denied_url", [], "any", false, false, true, 279)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 279), "access_denied_url", [], "any", false, false, true, 279), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>";
                    // line 283
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 283), "authenticators", [], "any", false, false, true, 283))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, true, 283), "authenticators", [], "any", false, false, true, 283), 283, $this->source), 1)));
                    echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                }
                // line 288
                echo "                    ";
            }
            // line 289
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 292
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, true, 292)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, true, 292), 292, $this->source), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 295
            if (twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, true, 295)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, true, 295), [])) : ([])))) {
                // line 296
                echo "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 300
                echo "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 309
                $context["previous_event"] = twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, true, 309), 309, $this->source));
                // line 310
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, true, 310));
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
                foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                    // line 311
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 311) || ($context["listener"] != ($context["previous_event"] ?? null)))) {
                        // line 312
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 312)) {
                            // line 313
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 315
                        echo "                                    <tbody>
                                    ";
                        // line 316
                        $context["previous_event"] = $context["listener"];
                        // line 317
                        echo "                                ";
                    }
                    // line 318
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 320
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, true, 320), 320, $this->source));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 321
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, true, 321) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 322
                    echo ((twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, true, 322)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, true, 322), 322, $this->source))) : ("(none)"));
                    echo "</td>
                                </tr>

                                ";
                    // line 325
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 325)) {
                        // line 326
                        echo "                                    </tbody>
                                ";
                    }
                    // line 328
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "                        </table>
                    ";
            }
            // line 331
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 334
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, true, 334)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, true, 334), 334, $this->source), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 337
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, true, 337)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, true, 337), [])) : ([])))) {
                // line 338
                echo "                        <table class=\"authenticators\">
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Authenticated</th>
                                <th>Duration</th>
                                <th>Passport</th>
                                <th>Badges</th>
                            </tr>
                            </thead>

                            ";
                // line 350
                $context["previous_event"] = twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, true, 350), 350, $this->source));
                // line 351
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, true, 351));
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
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 352
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 352) || ($context["authenticator"] != ($context["previous_event"] ?? null)))) {
                        // line 353
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 353)) {
                            // line 354
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 356
                        echo "
                                    <tbody>
                                    ";
                        // line 358
                        $context["previous_event"] = $context["authenticator"];
                        // line 359
                        echo "                                ";
                    }
                    // line 360
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 362
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, true, 362), 362, $this->source));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 363
                    echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, true, 363)) ? ("yes") : ("no"))) . ".svg"));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 364
                    echo (( !(null === twig_get_attribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, true, 364))) ? (twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, true, 364)) ? ("yes") : ("no"))) . ".svg"))) : (""));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 365
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, true, 365) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 366
                    echo ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, true, 366)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, true, 366), 366, $this->source))) : ("(none)"));
                    echo "</td>
                                    <td class=\"font-normal\">
                                        ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", true, true, true, 368) &&  !(null === twig_get_attribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, true, 368)))) ? (twig_get_attribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, true, 368)) : ([])));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                        // line 369
                        echo "                                            <span class=\"badge badge-";
                        echo ((twig_get_attribute($this->env, $this->source, $context["badge"], "resolved", [], "any", false, false, true, 369)) ? ("resolved") : ("not_resolved"));
                        echo "\">
                                            ";
                        // line 370
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["badge"], "stub", [], "any", false, false, true, 370), 370, $this->source), "html", null, true));
                        echo "
                                            </span>
                                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 373
                        echo "                                            (none)
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 375
                    echo "                                    </td>
                                </tr>

                                ";
                    // line 378
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 378)) {
                        // line 379
                        echo "                                    </tbody>
                                ";
                    }
                    // line 381
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 382
                echo "                        </table>
                    ";
            } else {
                // line 384
                echo "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 388
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 391
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, true, 391)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, true, 391), 391, $this->source), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 394
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, true, 394)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, true, 394), [])) : ([])))) {
                // line 395
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 397
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, true, 397)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, true, 397), 397, $this->source), "unknown")) : ("unknown")), "html", null, true);
                echo "</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 411
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, true, 411));
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
                foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                    // line 412
                    echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 413
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">";
                    // line 414
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["voter"], 414, $this->source));
                    echo "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 417
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 420
            echo "                    ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, true, 420)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, true, 420), [])) : ([])))) {
                // line 421
                echo "                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 439
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, true, 439));
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
                foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                    // line 440
                    echo "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 441
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 441), 441, $this->source), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 443
                    echo ((twig_get_attribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, true, 443)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 446
                    echo "
                                        </td>
                                        <td>
                                            ";
                    // line 449
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 449)) == 1)) {
                        // line 450
                        echo "                                                ";
                        $context["attribute"] = twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 450), 450, $this->source));
                        // line 451
                        echo "                                                ";
                        if (twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, true, 451)) {
                            // line 452
                            echo "                                                    Expression: <pre><code>";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", false, false, true, 452), 452, $this->source), "html", null, true);
                            echo "</code></pre>
                                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 453
($context["attribute"] ?? null), "type", [], "any", false, false, true, 453) == "string")) {
                            // line 454
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["attribute"] ?? null), 454, $this->source), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 456
                            echo "                                                     ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(($context["attribute"] ?? null), 456, $this->source));
                            echo "
                                                ";
                        }
                        // line 458
                        echo "                                            ";
                    } else {
                        // line 459
                        echo "                                                ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 459), 459, $this->source));
                        echo "
                                            ";
                    }
                    // line 461
                    echo "                                        </td>
                                        <td>";
                    // line 462
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, true, 462), 462, $this->source));
                    echo "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 467
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, true, 467))) {
                        // line 468
                        echo "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 468), 468, $this->source));
                        // line 469
                        echo "                                            <div id=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["voter_details_id"] ?? null), 469, $this->source), "html", null, true);
                        echo "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 472
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, true, 472));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 473
                            echo "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 474
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = $context["voter_detail"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["class"] ?? null) : null), 474, $this->source));
                            echo "</td>
                                                            ";
                            // line 475
                            if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, true, 475) == "unanimous")) {
                                // line 476
                                echo "                                                            <td class=\"font-normal text-small\">attribute ";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = (($__internal_compile_2 = $context["voter_detail"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["attributes"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 476, $this->source), "html", null, true);
                                echo "</td>
                                                            ";
                            }
                            // line 478
                            echo "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 479
                            if (((($__internal_compile_3 = $context["voter_detail"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 480
                                echo "                                                                    ACCESS GRANTED
                                                                ";
                            } elseif (((($__internal_compile_4 =                             // line 481
$context["voter_detail"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 482
                                echo "                                                                    ACCESS ABSTAIN
                                                                ";
                            } elseif (((($__internal_compile_5 =                             // line 483
$context["voter_detail"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 484
                                echo "                                                                    ACCESS DENIED
                                                                ";
                            } else {
                                // line 486
                                echo "                                                                    unknown (";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = $context["voter_detail"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["vote"] ?? null) : null), 486, $this->source), "html", null, true);
                                echo ")
                                                                ";
                            }
                            // line 488
                            echo "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 491
                        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 494
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["voter_details_id"] ?? null), 494, $this->source), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 496
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 499
                echo "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 503
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
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
        return array (  1155 => 503,  1149 => 499,  1133 => 496,  1128 => 494,  1123 => 491,  1115 => 488,  1109 => 486,  1105 => 484,  1103 => 483,  1100 => 482,  1098 => 481,  1095 => 480,  1093 => 479,  1090 => 478,  1084 => 476,  1082 => 475,  1078 => 474,  1075 => 473,  1071 => 472,  1064 => 469,  1061 => 468,  1059 => 467,  1051 => 462,  1048 => 461,  1042 => 459,  1039 => 458,  1033 => 456,  1027 => 454,  1025 => 453,  1020 => 452,  1017 => 451,  1014 => 450,  1012 => 449,  1007 => 446,  1005 => 443,  1000 => 441,  997 => 440,  980 => 439,  960 => 421,  957 => 420,  952 => 417,  935 => 414,  931 => 413,  928 => 412,  911 => 411,  894 => 397,  890 => 395,  888 => 394,  882 => 391,  877 => 388,  871 => 384,  867 => 382,  853 => 381,  849 => 379,  847 => 378,  842 => 375,  835 => 373,  827 => 370,  822 => 369,  817 => 368,  812 => 366,  808 => 365,  804 => 364,  800 => 363,  796 => 362,  792 => 360,  789 => 359,  787 => 358,  783 => 356,  779 => 354,  776 => 353,  773 => 352,  755 => 351,  753 => 350,  739 => 338,  737 => 337,  731 => 334,  726 => 331,  722 => 329,  708 => 328,  704 => 326,  702 => 325,  696 => 322,  692 => 321,  688 => 320,  684 => 318,  681 => 317,  679 => 316,  676 => 315,  672 => 313,  669 => 312,  666 => 311,  648 => 310,  646 => 309,  635 => 300,  629 => 296,  627 => 295,  621 => 292,  616 => 289,  613 => 288,  605 => 283,  598 => 279,  591 => 275,  584 => 271,  577 => 267,  570 => 263,  563 => 259,  550 => 248,  548 => 247,  540 => 242,  533 => 238,  526 => 234,  522 => 232,  520 => 231,  514 => 228,  509 => 225,  503 => 221,  501 => 220,  497 => 218,  491 => 215,  487 => 213,  485 => 212,  482 => 211,  476 => 208,  472 => 206,  470 => 205,  465 => 202,  461 => 200,  459 => 199,  454 => 197,  435 => 181,  427 => 176,  423 => 174,  421 => 173,  414 => 169,  411 => 168,  409 => 167,  406 => 166,  399 => 165,  388 => 160,  383 => 159,  376 => 158,  366 => 154,  363 => 153,  359 => 151,  353 => 147,  350 => 146,  345 => 143,  339 => 141,  337 => 140,  333 => 139,  328 => 136,  326 => 135,  323 => 134,  317 => 131,  313 => 129,  311 => 128,  308 => 127,  301 => 122,  295 => 119,  290 => 116,  285 => 113,  282 => 112,  276 => 109,  272 => 108,  269 => 107,  267 => 106,  262 => 105,  259 => 104,  255 => 102,  253 => 101,  248 => 98,  246 => 97,  241 => 94,  235 => 91,  231 => 90,  228 => 89,  226 => 88,  221 => 87,  219 => 86,  208 => 80,  200 => 75,  196 => 73,  193 => 72,  191 => 71,  187 => 69,  180 => 65,  175 => 62,  172 => 61,  170 => 60,  167 => 59,  162 => 57,  157 => 56,  154 => 55,  151 => 54,  144 => 53,  90 => 6,  83 => 5,  70 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Security/Collector/security.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 54, "set" => 55, "for" => 310);
        static $filters = array("escape" => 57, "default" => 57, "slice" => 86, "first" => 87, "join" => 90, "length" => 91, "abbr_class" => 119, "format" => 321);
        static $functions = array("source" => 56, "include" => 154, "profiler_dump" => 197, "constant" => 479);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'default', 'slice', 'first', 'join', 'length', 'abbr_class', 'format'],
                ['source', 'include', 'profiler_dump', 'constant']
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
