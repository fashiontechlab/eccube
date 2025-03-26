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

/* Api42/Resource/template/admin/WebHook/index.twig */
class __TwigTemplate_e3c76d9cd054327c4fc1dc6746dd74ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Resource/template/admin/WebHook/index.twig"));

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
        $context["menus"] = ["setting", "api", "webhook"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Api42/Resource/template/admin/WebHook/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            ";
        // line 22
        if (($context["webhooks"] ?? null)) {
            // line 23
            echo "            <div id=\"create-webhook\" class=\"d-block mb-3\">
                <a class=\"btn btn-ec-regular\" href=\"";
            // line 24
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_webhook_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration__new"), "html", null, true);
            echo "</a>
            </div>
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-body p-0\">
                    <table class=\"table table-sm\" style=\"table-layout:fixed;\">
                        <thead>
                        <tr class=\"d-flex\">
                            <th class=\"border-top-0 pt-2 pb-2 w-50 text-center\">
                                ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.payload_url"), "html", null, true);
            echo "
                            </th>
                            <th class=\"border-top-0 pt-2 pb-2 w-25 text-center\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.enabled"), "html", null, true);
            echo "
                            </th>
                            <th class=\"border-top-0 pt-2 pb-2 w-25 text-center\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["webhooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["webhook"]) {
                // line 42
                echo "                            <tr id=\"webhook-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["webhook"], "id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" class=\"d-flex\">
                                <td class=\"align-middle text-start ps-3 pt-3 w-50\">
                                    ";
                // line 44
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["webhook"], "payloadUrl", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "
                                </td>
                                <td class=\"align-middle text-center ps-3 pt-3 w-25\">
                                    ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["webhook"], "enabled", [], "any", false, false, true, 47)) {
                    // line 48
                    echo "                                        <span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                    echo "</span>
                                    ";
                } else {
                    // line 50
                    echo "                                        <span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 52
                echo "                                </td>
                                <td class=\"align-middle w-25\">
                                    <div class=\"text-end\">
                                        <div class=\"d-inline-block\">
                                            <div class=\"d-inline-block mr-2\" data-tooltip=\"true\"
                                                 data-placement=\"top\" title=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                echo "\">
                                                <a class=\"btn btn-ec-actionIcon\"
                                                   href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_webhook_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["webhook"], "id", [], "any", false, false, true, 59)]), "html", null, true);
                echo "\"
                                                   data-toggle=\"tooltip\" data-placement=\"top\"
                                                   title=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"px-1 d-inline-block\">
                                            <div class=\"d-inline-block mr-2\" data-tooltip=\"true\"
                                                 data-placement=\"top\" title=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                <a class=\"btn btn-ec-actionIcon action-delete\" data-bs-toggle=\"modal\"
                                                   data-bs-target=\"#webhook_delete_";
                // line 70
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["webhook"], "id", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                </a>
                                            </div>
                                            <div class=\"modal fade\" id=\"webhook_delete_";
                // line 74
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["webhook"], "id", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                 role=\"dialog\" aria-labelledby=\"webhook_delete_";
                // line 75
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["webhook"], "id", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title fw-bold\">
                                                                ";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.delete__confirm_title"), "html", null, true);
                echo "
                                                            </h5>
                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body text-start\">
                                                            <p class=\"text-start\">";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.delete__confirm_message"), "html", null, true);
                echo "</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                ";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                            </button>
                                                            <a class=\"btn btn-ec-delete\" href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_webhook_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["webhook"], "id", [], "any", false, false, true, 93)]), "html", null, true);
                echo "\"
                                                                    ";
                // line 94
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">
                                                                ";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webhook'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        } else {
            // line 111
            echo "                <div class=\"c-contentsArea__cols\">
                    <div class=\"c-contentsArea__primaryCol\">
                        <div class=\"c-primaryCol\">
                            <div class=\"card rounded border-0\">
                                <div class=\"card-body p-4\">
                                    <div class=\"text-center text-muted mb-4 h5\">";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.search_no_result_message"), "html", null, true);
            echo "</div>
                                    <div class=\"text-center text-muted mb-4 h5\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 118
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_webhook_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration__new"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 126
        echo "        </div>
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
        return "Api42/Resource/template/admin/WebHook/index.twig";
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
        return array (  302 => 126,  289 => 118,  284 => 116,  277 => 111,  270 => 106,  253 => 95,  249 => 94,  245 => 93,  240 => 91,  233 => 87,  223 => 80,  215 => 75,  211 => 74,  204 => 70,  199 => 68,  189 => 61,  184 => 59,  179 => 57,  172 => 52,  166 => 50,  160 => 48,  158 => 47,  152 => 44,  146 => 42,  142 => 41,  133 => 35,  127 => 32,  114 => 24,  111 => 23,  109 => 22,  104 => 19,  97 => 18,  84 => 16,  71 => 15,  63 => 11,  61 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/template/admin/WebHook/index.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Resource/template/admin/WebHook/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 22, "for" => 41);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 24, "csrf_token_for_anchor" => 94);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
