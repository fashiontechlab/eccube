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

/* @admin/Setting/System/member.twig */
class __TwigTemplate_6d556310053d666adf83dda9eb847851 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/System/member.twig"));

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

        // line 13
        $context["menus"] = ["setting", "system", "member"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/member.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member_management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script>
        \$('.action-down, .action-up').on('click', function(e) {
            var self = \$(this),
                current = \$(this).parents('tr');
            \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
            \$.ajax({
                url: self.attr('href'),
                method: self.data('method'),
            }).done(function() {
                if (self.hasClass('action-down')) {
                    current.next().after(current);
                } else {
                    current.prev().before(current);
                }
            }).always(function() {
                \$('.modal-backdrop').remove();
                \$('.action-up, .action-down').removeClass('disabled');
                \$('.action-up').first().addClass('disabled');
                \$('.action-down').last().addClass('disabled');
            });

            return false;
        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 48
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"ex-member-new\" class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 52
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
                            <table class=\"table table-sm\">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.name"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.department"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.authority"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.work"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.two_factor_auth_enabled"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Members"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Member"]) {
            // line 80
            echo "                                    <tr id=\"ex-member-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "\">
                                        <td class=\"align-middle text-center ps-3\">
                                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Member"], "name", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Member"], "department", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 88
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Member"], "Authority", [], "any", false, false, true, 88), "name", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Member"], "Work", [], "any", false, false, true, 91), "name", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, $context["Member"], "two_factor_auth_enabled", [], "any", false, false, true, 94)) {
                // line 95
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                echo "
                                                <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 96
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Member"], "two_factor_auth_key", [], "any", false, false, true, 96)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.two_factor_auth_completed")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.two_factor_auth_incompleted"))), "html", null, true);
                // line 98
                echo "\">
                                                    <i class=\"fa fa-check fa-lg ";
                // line 99
                echo ((twig_get_attribute($this->env, $this->source, $context["Member"], "two_factor_auth_key", [], "any", false, false, true, 99)) ? ("text-success") : ("text-danger"));
                echo "\"
                                                       aria-hidden=\"true\"></i>
                                                </span>
                                            ";
            } else {
                // line 103
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                echo "
                                            ";
            }
            // line 105
            echo "                                        </td>
                                        <td class=\"align-middle pe-3\">
                                            <div class=\"text-end\">
                                                <div class=\"px-1 d-inline-block\">
                                                    <a class=\"btn btn-ec-actionIcon action-edit\"
                                                       href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 110)]), "html", null, true);
            echo "\"
                                                       data-bs-toggle=\"tooltip\"
                                                       data-bs-placement=\"top\"
                                                       title=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"px-1 d-inline-block\">
                                                    <a class=\"btn btn-ec-actionIcon action-up ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 118)) {
                echo " disabled ";
            }
            echo "\"
                                                       href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_up", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 119)]), "html", null, true);
            echo "\"
                                                       data-bs-toggle=\"tooltip\"
                                                       data-method=\"put\"
                                                       data-bs-placement=\"top\"
                                                       title=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-arrow-up fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"px-1 d-inline-block\">
                                                    <a class=\"btn btn-ec-actionIcon action-down ";
            // line 128
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 128)) {
                echo " disabled ";
            }
            echo "\"
                                                       href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_down", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 129)]), "html", null, true);
            echo "\"
                                                       data-bs-toggle=\"tooltip\"
                                                       data-method=\"put\"
                                                       data-bs-placement=\"top\"
                                                       title=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-arrow-down fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"px-1 d-inline-block\">
                                                    ";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 138) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, true, 138), "id", [], "any", false, false, true, 138))) {
                // line 139
                echo "                                                        <a class=\"btn btn-ec-actionIcon action-delete me-2 disabled\"
                                                            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                            title=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    ";
            } else {
                // line 145
                echo "                                                        <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                             title=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <a class=\"btn btn-ec-actionIcon action-delete\"
                                                               data-bs-toggle=\"modal\"
                                                               data-bs-target=\"#member_delete_";
                // line 149
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"member_delete_";
                // line 153
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"member_delete_";
                // line 155
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">
                                                                            ";
                // line 160
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.delete__confirm_title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"btn-close\" type=\"button\"
                                                                                data-bs-dismiss=\"modal\"
                                                                                aria-label=\"Close\">
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">
                                                                            ";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.member.delete__confirm_message"), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                        </button>
                                                                        <a class=\"btn btn-ec-delete\"
                                                                           href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_member_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Member"], "id", [], "any", false, false, true, 174)]), "html", null, true);
                echo "\"
                                                                                ";
                // line 175
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                           data-method=\"delete\" data-confirm=\"false\">
                                                                            ";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 184
            echo "                                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Setting/System/member.twig";
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
        return array (  435 => 189,  417 => 184,  407 => 177,  402 => 175,  398 => 174,  392 => 171,  386 => 168,  375 => 160,  367 => 155,  362 => 153,  355 => 149,  349 => 146,  346 => 145,  339 => 141,  335 => 139,  333 => 138,  325 => 133,  318 => 129,  312 => 128,  304 => 123,  297 => 119,  291 => 118,  283 => 113,  277 => 110,  270 => 105,  264 => 103,  257 => 99,  254 => 98,  252 => 96,  247 => 95,  245 => 94,  239 => 91,  233 => 88,  227 => 85,  221 => 82,  215 => 80,  198 => 79,  189 => 73,  183 => 70,  177 => 67,  171 => 64,  165 => 61,  151 => 52,  145 => 48,  138 => 47,  107 => 21,  100 => 20,  87 => 16,  74 => 15,  66 => 11,  64 => 18,  62 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/member.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Setting/System/member.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 79, "if" => 94);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 52, "csrf_token_for_anchor" => 175);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans'],
                ['url', 'csrf_token_for_anchor']
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
