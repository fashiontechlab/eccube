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

/* @admin/two_factor_auth.twig */
class __TwigTemplate_b1ac5133849c7e29b72a50cd6db4325c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/login_frame.twig";
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/login_frame.twig", "@admin/two_factor_auth.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    <div class=\"container\" style=\"margin-top: 150px;\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4\">
                <div class=\"text-center p-5 bg-white\">
                    ";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/alert.twig");
        echo "
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_two_factor_auth");
        echo "\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 23), 23, $this->source), 'widget');
        echo "
                        <p><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo2.png", "admin"), "html", null, true);
        echo "\" width=\"106\"></p>
                        <h5 class=\"mb-3\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.two_factor_auth_title"), "html", null, true);
        echo "</h5>

                        ";
        // line 27
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 28
            echo "                            <div class=\"text-danger mb-3 text-start small\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error"] ?? null), 28, $this->source), "html", null, true);
            echo "</div>
                        ";
        }
        // line 30
        echo "
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"mb-3 d-flex justify-content-center\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "device_token", [], "any", false, false, true, 34), 34, $this->source), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "admin.setting.system.two_factor_auth.device_token", "autofocus" => true]]);
        echo "
                                </div>
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "device_token", [], "any", false, false, true, 36), 36, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-12\">
                            \t<button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.two_factor_auth.auth"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class=\"col-12\">
                <p class=\"text-center mt-3\">
                    <small>Copyright &copy; 2000-";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " EC-CUBE CO.,LTD. All Rights Reserved.</small>
                </p>
            </div>
        </div>
    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/two_factor_auth.twig";
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
        return array (  132 => 48,  120 => 39,  114 => 36,  109 => 34,  103 => 30,  97 => 28,  95 => 27,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  67 => 16,  63 => 15,  58 => 11,  56 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/two_factor_auth.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/two_factor_auth.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "if" => 27);
        static $filters = array("escape" => 24, "trans" => 25, "date" => 48);
        static $functions = array("include" => 21, "path" => 22, "form_widget" => 23, "asset" => 24, "form_errors" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'if'],
                ['escape', 'trans', 'date'],
                ['include', 'path', 'form_widget', 'asset', 'form_errors']
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
