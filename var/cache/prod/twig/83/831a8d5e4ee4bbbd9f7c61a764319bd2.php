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

/* Mypage/delivery.twig */
class __TwigTemplate_0c80b94b4e00c987b690a7356634256f extends Template
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
        $context["mypageno"] = "delivery";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/delivery.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先一覧"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 26)) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件のお届け先があります", ["%count%" => twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 27), 27, $this->source))]), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 29
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先は登録されていません。"), "html", null, true);
            echo "</p>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            ";
        // line 37
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 37)) < twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 37))) {
            // line 38
            echo "                                <a class=\"ec-inlineBtn\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規お届け先を追加する"), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 40
            echo "                                <span class=\"ec-errorMessage\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 40)]), "html", null, true);
            echo "</span>
                            ";
        }
        // line 42
        echo "                        </div>
                    </div>
                    ";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 44)) > 0)) {
            // line 45
            echo "                        <div class=\"ec-addressList\">
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 47
                echo "                                <div class=\"ec-addressList__item\">
                                    <a class=\"ec-addressList__remove\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 48)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                echo "\" alt=\"remove\">
                                        </div>
                                    </a>
                                    <div class=\"ec-addressList__address\">
                                        <div>";
                // line 54
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "</div>
                                        <div>";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "</div>
                                        <div>";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "</div>
                                    </div>
                                    <div class=\"ec-addressList__action\">
                                        <a class=\"ec-inlineBtn\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 59)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        </div>
                    ";
        }
        // line 65
        echo "                </div>
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
        return "Mypage/delivery.twig";
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
        return array (  192 => 65,  188 => 63,  176 => 59,  170 => 56,  161 => 55,  155 => 54,  148 => 50,  141 => 48,  138 => 47,  134 => 46,  131 => 45,  129 => 44,  125 => 42,  119 => 40,  111 => 38,  109 => 37,  101 => 31,  95 => 29,  89 => 27,  87 => 26,  81 => 23,  74 => 21,  69 => 18,  65 => 17,  60 => 11,  58 => 15,  56 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/delivery.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Mypage/delivery.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 26, "for" => 46);
        static $filters = array("escape" => 21, "trans" => 21, "length" => 26);
        static $functions = array("include" => 23, "url" => 38, "csrf_token_for_anchor" => 48, "asset" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'length'],
                ['include', 'url', 'csrf_token_for_anchor', 'asset']
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
