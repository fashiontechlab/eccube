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

/* Shopping/shipping.twig */
class __TwigTemplate_cbc3194f557af77c3d4b33d5beada057 extends Template
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
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping.twig"));

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

        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の指定"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-registerRole\">
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-addressRole\">
                    ";
        // line 24
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 24)) < twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 24))) {
            // line 25
            echo "                        <div class=\"ec-addressRole__actions\"><a class=\"ec-inlineBtn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_edit", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規お届け先を追加する"), "html", null, true);
            echo "</a></div>
                    ";
        } else {
            // line 27
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                    <div class=\"ec-alert-warning__text\">
                                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 32)]), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 38
        echo "                    ";
        if ($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 38))) {
            // line 39
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                    <div class=\"ec-alert-warning__text\">
                                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先を指定してください"), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 50
        echo "                </div>

                <form method=\"post\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
        echo "\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 53), 53, $this->source), 'widget');
        echo "
                    <div class=\"ec-addressList\">
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 55), "vars", [], "any", false, false, true, 55), "choices", [], "any", false, false, true, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 56
            echo "                            ";
            $context["Address"] = twig_get_attribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, true, 56);
            // line 57
            echo "                        <div class=\"ec-addressList__item\">
                            <div class=\"ec-addressList__remove\">
                                ";
            // line 59
            $context["checked"] = ((Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59))) ? ("checked=\"checked\"") : (""));
            // line 60
            echo "                                <input type=\"radio\" id=\"address";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, true, 60), "vars", [], "any", false, false, true, 60), "full_name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["checked"] ?? null), 60, $this->source), "html", null, true);
            echo " />
                            </div>
                            <div class=\"ec-addressList__address\">
                                <div>";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "name01", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "name02", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "</div>
                                <div>〒";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "postal_code", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "Pref", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "addr01", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "addr02", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</div>
                                <div>";
            // line 65
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Address"] ?? null), "phone_number", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </div>

                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("選択したお届け先に送る"), "html", null, true);
        echo "</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 75
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>

                </form>
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
        return "Shopping/shipping.twig";
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
        return array (  213 => 75,  209 => 74,  202 => 69,  192 => 65,  184 => 64,  178 => 63,  165 => 60,  163 => 59,  159 => 57,  156 => 56,  152 => 55,  147 => 53,  143 => 52,  139 => 50,  130 => 44,  125 => 42,  120 => 39,  117 => 38,  108 => 32,  103 => 30,  98 => 27,  90 => 25,  88 => 24,  77 => 16,  73 => 14,  66 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/shipping.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Shopping/shipping.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "for" => 55, "set" => 56);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 24);
        static $functions = array("url" => 25, "asset" => 30, "has_errors" => 38, "form_widget" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'trans', 'length'],
                ['url', 'asset', 'has_errors', 'form_widget']
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
