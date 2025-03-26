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

/* Api42/Resource/template/admin/OAuth/edit.twig */
class __TwigTemplate_247078db010a4160a8c5e29b53544a93 extends Template
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
        $context["menus"] = ["setting", "api", "oauth"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Api42/Resource/template/admin/OAuth/edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.client_registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.management"), "html", null, true);
    }

    // line 20
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <form name=\"client_form\" role=\"form\" id=\"client_form\" method=\"post\" action=\"\" novalidate>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 22), 22, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.client_registration"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"clientInfo\">
                            <div class=\"card-body\">

                                ";
        // line 38
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.identifier_tooltip"), "html", null, true);
        echo "\">
                                            <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.identifier"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </label>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "identifier", [], "any", false, false, true, 51), 51, $this->source), 'widget');
        echo "
                                            </div>
                                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "identifier", [], "any", false, false, true, 53), 53, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 59
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.secret_tooltip"), "html", null, true);
        echo "\">
                                            <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.secret"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </label>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secret", [], "any", false, false, true, 72), 72, $this->source), 'widget');
        echo "
                                            </div>
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secret", [], "any", false, false, true, 74), 74, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 80
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.scope_tooltip"), "html", null, true);
        echo "\">
                                            <span>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.scope"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </label>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "scopes", [], "any", false, false, true, 93), 93, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                            </div>
                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "scopes", [], "any", false, false, true, 95), 95, $this->source), 'errors', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 101
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.redirect_uri_tooltip"), "html", null, true);
        echo "\">
                                            <span>";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.redirect_uri"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </label>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "redirect_uris", [], "any", false, false, true, 114), 114, $this->source), 'widget');
        echo "
                                            </div>
                                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "redirect_uris", [], "any", false, false, true, 116), 116, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 122
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.grant_type_tooltip"), "html", null, true);
        echo "\">
                                            <span>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.grant_type"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </label>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "grants", [], "any", false, false, true, 135), 135, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                            </div>
                                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "grants", [], "any", false, false, true, 137), 137, $this->source), 'errors', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\"
                               href=\"";
        // line 153
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_oauth");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.management"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">
                                    ";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Resource/template/admin/OAuth/edit.twig";
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
        return array (  321 => 163,  310 => 155,  305 => 153,  286 => 137,  281 => 135,  271 => 128,  265 => 125,  261 => 124,  257 => 122,  249 => 116,  244 => 114,  234 => 107,  228 => 104,  224 => 103,  220 => 101,  212 => 95,  207 => 93,  197 => 86,  191 => 83,  187 => 82,  183 => 80,  175 => 74,  170 => 72,  160 => 65,  154 => 62,  150 => 61,  146 => 59,  138 => 53,  133 => 51,  123 => 44,  117 => 41,  113 => 40,  109 => 38,  99 => 30,  88 => 22,  85 => 21,  81 => 20,  74 => 16,  67 => 15,  62 => 11,  60 => 18,  58 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/template/admin/OAuth/edit.twig", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/Resource/template/admin/OAuth/edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("form_widget" => 22, "form_errors" => 53, "url" => 153);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['form_widget', 'form_errors', 'url']
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
