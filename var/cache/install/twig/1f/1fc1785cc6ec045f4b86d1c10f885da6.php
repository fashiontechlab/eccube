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

/* Api42/Resource/template/admin/OAuth/authorization.twig */
class __TwigTemplate_1c51bce40ac3714e6b24f2bc6853c152 extends Template
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
        // line 1
        return "@admin/login_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Resource/template/admin/OAuth/authorization.twig"));

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

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@admin/login_frame.twig", "Api42/Resource/template/admin/OAuth/authorization.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <div class=\"container\" style=\"margin-top: 150px;\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-6 offset-lg-3\">
                <div class=\"text-center p-5 bg-white\">
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 12), 12, $this->source), 'widget');
        echo "
                        <p class=\"text-start\">";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.allow__confirm_message", ["%shop_name%" => (((("<a href=\"" . $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("homepage")) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 13), 13, $this->source)) . "</a>")]);
        echo "</p>
                        <p class=\"text-start\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.allow__confirm_description"), "html", null, true);
        echo "</p>
                        <ul>
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scopes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
            // line 17
            echo "                        <li class=\"text-start\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("api.admin.oauth.scope." . $this->sandbox->ensureToStringAllowed($context["scope"], 17, $this->source)) . ".description"), ["%shop_name%" => (((("<a href=\"" . $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("homepage")) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 17), 17, $this->source)) . "</a>")]);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                        </ul>

                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_id", [], "any", false, false, true, 21), 21, $this->source), 'row');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_secret", [], "any", false, false, true, 22), 22, $this->source), 'row');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "redirect_uri", [], "any", false, false, true, 23), 23, $this->source), 'row');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "response_type", [], "any", false, false, true, 24), 24, $this->source), 'row');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", false, false, true, 25), 25, $this->source), 'row');
        echo "
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", false, false, true, 26), 26, $this->source), 'row');
        echo "

                        <div class=\"col-auto\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "approve", [], "any", false, false, true, 29), 29, $this->source), 'widget', ["label" => "api.admin.oauth.allow"]);
        echo "
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "deny", [], "any", false, false, true, 30), 30, $this->source), 'widget', ["label" => "api.admin.oauth.deny", "attr" => ["class" => "btn btn-light"]]);
        echo "
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-12\">
                <p class=\"text-center mt-3\">
                    <small>Copyright &copy; 2000-";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " EC-CUBE CO.,LTD. All Rights Reserved.</small>
                </p>
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
        return "Api42/Resource/template/admin/OAuth/authorization.twig";
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
        return array (  154 => 37,  144 => 30,  140 => 29,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 19,  101 => 17,  97 => 16,  92 => 14,  88 => 13,  84 => 12,  76 => 6,  69 => 5,  61 => 1,  59 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/template/admin/OAuth/authorization.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Resource/template/admin/OAuth/authorization.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 3, "for" => 16);
        static $filters = array("raw" => 13, "trans" => 13, "escape" => 14, "date" => 37);
        static $functions = array("form_widget" => 12, "path" => 13, "form_row" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'for'],
                ['raw', 'trans', 'escape', 'date'],
                ['form_widget', 'path', 'form_row']
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
