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

/* Mypage/login.twig */
class __TwigTemplate_f46796f5d08564938f34ba6ec8186535 extends Template
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
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/login.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off2Grid\">
            <div class=\"ec-off2Grid__cell\">
                <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
        echo "\">
                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 23), "flashBag", [], "any", false, false, true, 23), "has", ["eccube.login.target.path"], "method", false, false, true, 23)) {
            // line 24
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 24), "flashBag", [], "any", false, false, true, 24), "peek", ["eccube.login.target.path"], "method", false, false, true, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 25
                echo "                            <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["targetPath"], 25, $this->source), "html", null, true);
                echo "\" />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
        }
        // line 28
        echo "                    <div class=\"ec-login\">
                        <div class=\"ec-login__icon\">
                            <div class=\"ec-icon\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/user.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>
                        <div class=\"ec-login__input\">
                            <div class=\"ec-input\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_email", [], "any", false, false, true, 34), 34, $this->source), 'widget', ["attr" => ["style" => "ime-mode: disabled;", "placeholder" => "メールアドレス", "autofocus" => true]]);
        echo "
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_pass", [], "any", false, false, true, 35), 35, $this->source), 'widget', ["attr" => ["placeholder" => "パスワード"]]);
        echo "
                            </div>
                            ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_remember_me", [], "any", false, false, true, 37)) {
            // line 38
            echo "                            <div class=\"ec-checkbox\">
                                <label>
                                    ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 41
                echo "                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 43
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_memory", [], "any", false, false, true, 43), 43, $this->source), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次回から自動的にログインする")]);
                echo "
                                    ";
            }
            // line 45
            echo "                                </label>
                            </div>
                            ";
        }
        // line 48
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 48), "flashbag", [], "any", false, false, true, 48), "get", ["password_reset_complete"], "method", false, false, true, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["reset_complete"]) {
            // line 49
            echo "                                <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["reset_complete"], 49, $this->source)), "html", null, true);
            echo "</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reset_complete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            ";
        if (($context["error"] ?? null)) {
            // line 52
            echo "                                <p class=\"ec-errorMessage\">";
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, true, 52), 52, $this->source), "validators"), "html", null, true));
            echo "</p>
                            ";
        }
        // line 54
        echo "                        </div>
                        <div class=\"ec-grid2\">
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__actions\">
                                    <button type=\"submit\"
                                            class=\"ec-blockBtn--cancel\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__link\"><a class=\"ec-link\"
                                                               href=\"";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("forgot");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン情報をお忘れですか？"), "html", null, true);
        echo "</a>
                                </div>
                                <div class=\"ec-login__link\"><a class=\"ec-link\"
                                                               href=\"";
        // line 67
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                </form>
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
        return "Mypage/login.twig";
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
        return array (  200 => 72,  190 => 67,  182 => 64,  174 => 59,  167 => 54,  161 => 52,  158 => 51,  149 => 49,  144 => 48,  139 => 45,  133 => 43,  129 => 41,  127 => 40,  123 => 38,  121 => 37,  116 => 35,  112 => 34,  105 => 30,  101 => 28,  98 => 27,  89 => 25,  84 => 24,  82 => 23,  78 => 22,  71 => 18,  67 => 16,  63 => 15,  58 => 11,  56 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/login.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Mypage/login.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 23, "for" => 24);
        static $filters = array("escape" => 18, "trans" => 18, "nl2br" => 52);
        static $functions = array("url" => 22, "asset" => 30, "form_widget" => 34, "is_granted" => 40, "csrf_token" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'nl2br'],
                ['url', 'asset', 'form_widget', 'is_granted', 'csrf_token']
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
