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

/* @admin/Setting/System/two_factor_auth_edit.twig */
class __TwigTemplate_a66eaf2c0c8bced04d1c4cd4af179d79 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $context["menus"] = ["setting", "system", "member"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/two_factor_auth_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.two_factor_auth_title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<script>
\$(function () {
    \$(\"#qrcode\").qrcode({
        size: 200,
        fill: '#000',
        text: 'otpauth://totp/";
        // line 26
        echo twig_escape_filter($this->env, twig_urlencode_filter("EC-CUBE:"), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter(" - "), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Member"] ?? null), "name", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
        echo "?secret=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["auth_key"] ?? null), 26, $this->source), "html", null, true);
        echo "&issuer=";
        echo twig_escape_filter($this->env, twig_urlencode_filter("EC-CUBE"), "html", null, true);
        echo "',
        radius: 0,
        quiet: 0,
        mode: 0, // 0: normal , 1: label strip , 2: label box , 3: image strip , 4: image box
        mSize: 0.1,
        mPosX: 0.5,
        mPosY: 0.5,
        label: 'no label',
        fontname: 'sans',
        fontcolor: '#000',
        image: null
    });
});
</script>
";
    }

    // line 42
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "<style>
#qrcode canvas { width: 150px; }
</style>
";
    }

    // line 48
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    <form name=\"two_factor_auth_form\" role=\"form\" id=\"two_factor_auth_form\" method=\"post\" action=\"\" novalidate>
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 50), 50, $this->source), 'widget');
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "auth_key", [], "any", false, false, true, 51), 51, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.two_factor_auth_title"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#memberInfo\" aria-expanded=\"false\" aria-controls=\"memberInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"memberInfo\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.two_factor_auth.qr"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
\t                                    <div id=\"qrcode\"></div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.two_factor_auth.qr_code"), "html", null, true);
        echo "\">
                                            <span>";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "device_token", [], "any", false, false, true, 79), "vars", [], "any", false, false, true, 79), "label", [], "any", false, false, true, 79), 79, $this->source)), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <span class=\"badge bg-primary ms-1\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "device_token", [], "any", false, false, true, 87), 87, $this->source), 'widget');
        echo "
                                            </div>
                                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "device_token", [], "any", false, false, true, 89), 89, $this->source), 'errors');
        echo "
                                            ";
        // line 90
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 91
            echo "                                                <div class=\"text-danger mb-3 text-start small\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["error"] ?? null), 91, $this->source), "html", null, true);
            echo "</div>
                                            ";
        }
        // line 93
        echo "                                        </div>
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
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
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
        return "@admin/Setting/System/two_factor_auth_edit.twig";
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
        return array (  235 => 113,  213 => 93,  207 => 91,  205 => 90,  201 => 89,  196 => 87,  187 => 81,  182 => 79,  178 => 78,  167 => 70,  152 => 58,  142 => 51,  138 => 50,  135 => 49,  131 => 48,  124 => 43,  120 => 42,  94 => 26,  87 => 21,  83 => 20,  76 => 16,  69 => 15,  64 => 11,  62 => 18,  60 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/two_factor_auth_edit.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Setting/System/two_factor_auth_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 90);
        static $filters = array("escape" => 15, "trans" => 15, "url_encode" => 26);
        static $functions = array("form_widget" => 50, "form_errors" => 89);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans', 'url_encode'],
                ['form_widget', 'form_errors']
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
