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

/* MailMagazine42/Resource/template/admin/template_select.twig */
class __TwigTemplate_26976c9c95d44ff2847baa5b7e5b5a39 extends Template
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
        // line 15
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/template_select.twig"));

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

        // line 17
        $context["menus"] = ["mailmagazine", "mailmagazine"];
        // line 22
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 15
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/template_select.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.index.title"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.title"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 25
        echo "    <script>
        \$(function(){
            \$(\"#mail_magazine_template\").on(\"change\", function(){
                var id = \$(this).val()
                if (id) {
                    action= '";
        // line 30
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_select");
        echo "/' + id;
                } else {
                    action= '";
        // line 32
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_select");
        echo "';
                }

                \$('#mode').val('select');

                document.form1.action = action;
                document.form1.submit();
            });
        });

        function changeAction(action) {
            document.form1.action = action;
            document.form1.submit();
        }

    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 51
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 52), 52, $this->source), 'widget');
        echo "
        <input id=\"mode\" type=\"hidden\" name=\"mode\" value=\"confirm\">
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">
                                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.card_title"), "html", null, true);
        echo "
                                </span>
                            </div>
                            <div class=\"col-4 text-end\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body mb-lg-5\">
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <span>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 71), "vars", [], "any", false, false, true, 71), "label", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col mb-2\">
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 74), 74, $this->source), 'widget');
        echo "
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 75), 75, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, true, 80), "vars", [], "any", false, false, true, 80), "label", [], "any", false, false, true, 80), 80, $this->source)), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col mb-2\">
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, true, 83), 83, $this->source), 'widget');
        echo "
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, true, 84), 84, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", [], "any", false, false, true, 89), "vars", [], "any", false, false, true, 89), "label", [], "any", false, false, true, 89), 89, $this->source)), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col mb-2\">
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", [], "any", false, false, true, 92), 92, $this->source), 'widget', ["attr" => ["rows" => 20]]);
        echo "
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", [], "any", false, false, true, 93), 93, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <span>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "htmlBody", [], "any", false, false, true, 98), "vars", [], "any", false, false, true, 98), "label", [], "any", false, false, true, 98), 98, $this->source)), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col mb-2\">
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "htmlBody", [], "any", false, false, true, 101), 101, $this->source), 'widget', ["attr" => ["rows" => 20]]);
        echo "
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "htmlBody", [], "any", false, false, true, 102), 102, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div style=\"display: none\">
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 106, $this->source), 'rest');
        echo "
                        </div>
                        <span class=\"help-block\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.note_name"), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 118
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine");
        echo "\" onclick=\"changeAction('";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine");
        echo "'); return false;\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.btn_back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">
                                    ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.btn_confirm"), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/admin/template_select.twig";
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
        return array (  284 => 127,  273 => 119,  267 => 118,  254 => 108,  249 => 106,  242 => 102,  238 => 101,  232 => 98,  224 => 93,  220 => 92,  214 => 89,  206 => 84,  202 => 83,  196 => 80,  188 => 75,  184 => 74,  178 => 71,  165 => 61,  153 => 52,  150 => 51,  143 => 50,  119 => 32,  114 => 30,  107 => 25,  100 => 24,  87 => 20,  74 => 19,  66 => 15,  64 => 22,  62 => 17,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/template_select.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/MailMagazine42/Resource/template/admin/template_select.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "form_theme" => 22);
        static $filters = array("escape" => 19, "trans" => 19);
        static $functions = array("url" => 30, "form_widget" => 52, "form_errors" => 75, "form_rest" => 106);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'form_errors', 'form_rest']
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
