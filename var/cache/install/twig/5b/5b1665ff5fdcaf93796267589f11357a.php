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

/* Shopping/complete.twig */
class __TwigTemplate_af64c864854bc2ccaa6d334817dd8cc7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/complete.twig"));

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
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文完了"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 25
        $context["step"] = 1;
        // line 26
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 27, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 28
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 32
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 33
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 34, $this->source), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 35
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 40
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 41, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 42
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 47, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 48
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item  is-complete\">
                <div class=\"ec-progress__number\">";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 53, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 54
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

<div class=\"ec-cartCompleteRole\">
    <div class=\"ec-reportHeading\">
        <h2>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文ありがとうございました"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"ec-off3Grid ec-text-ac\">
        <div class=\"ec-off3Grid__cell\">
            <p class=\"ec-reportDescription\">
                ";
        // line 69
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま、ご注文の確認メールをお送りさせていただきました。
万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがお問い合わせくださいますようお願いいたします。
"), "html", null, true));
        // line 71
        echo "
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 72)) {
            // line 73
            echo "                    <br /><br /><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</strong>
                ";
        }
        // line 75
        echo "            </p>
            ";
        // line 76
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", [], "any", false, false, true, 76))) {
            // line 77
            echo "                ";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", [], "any", false, false, true, 77), 77, $this->source));
            echo "
            ";
        }
        // line 79
        echo "        </div>
    </div>
    <div class=\"ec-off4Grid\">
        ";
        // line 82
        if (($context["hasNextCart"] ?? null)) {
            // line 83
            echo "            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("購入を続ける"), "html", null, true);
            echo "</a></div>
        ";
        } else {
            // line 85
            echo "            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
            echo "</a></div>
        ";
        }
        // line 87
        echo "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Shopping/complete.twig";
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
        return array (  231 => 87,  223 => 85,  215 => 83,  213 => 82,  208 => 79,  202 => 77,  200 => 76,  197 => 75,  189 => 73,  187 => 72,  184 => 71,  180 => 69,  172 => 64,  160 => 55,  157 => 54,  154 => 53,  147 => 49,  144 => 48,  141 => 47,  134 => 43,  131 => 42,  128 => 41,  125 => 40,  118 => 36,  115 => 35,  112 => 34,  109 => 33,  107 => 32,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  90 => 25,  80 => 18,  76 => 16,  69 => 15,  61 => 11,  59 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/complete.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Shopping/complete.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 32);
        static $filters = array("escape" => 18, "trans" => 18, "nl2br" => 71, "purify" => 77, "raw" => 77);
        static $functions = array("is_granted" => 32, "url" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'nl2br', 'purify', 'raw'],
                ['is_granted', 'url']
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
