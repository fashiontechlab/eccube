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

/* step1.twig */
class __TwigTemplate_d8311d66af7842daa45781c55d06f5bb extends Template
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
        return "frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "step1.twig"));

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
        $context["current"] = 1;
        // line 11
        $this->parent = $this->loadTemplate("frame.twig", "step1.twig", 11);
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
        echo "    <div id=\"main\" class=\"step1\">
        <div class=\"main_inner\">
            <div class=\"main_content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                          ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 22), "flashBag", [], "any", false, false, true, 22), "has", ["eccube.install.danger"], "method", false, false, true, 22)) {
            // line 23
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 23), "flashBag", [], "any", false, false, true, 23), "get", ["eccube.install.danger"], "method", false, false, true, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                          <div class=\"row\">
                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                              <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 26, $this->source)), "html", null, true);
                echo " <a href=\"https://doc4.ec-cube.net/quickstart/requirement\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("システム要件をご確認ください"), "html", null, true);
                echo "</a>
                              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                          ";
        }
        // line 32
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 32), "flashBag", [], "any", false, false, true, 32), "has", ["eccube.install.warning"], "method", false, false, true, 32)) {
            // line 33
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 33), "flashBag", [], "any", false, false, true, 33), "get", ["eccube.install.warning"], "method", false, false, true, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                echo "                          <div class=\"row\">
                            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                              <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 36, $this->source)), "html", null, true);
                echo "
                              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                          ";
        }
        // line 42
        echo "                            ";
        // line 43
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 43), "flashBag", [], "any", false, false, true, 43), "has", ["eccube.install.info"], "method", false, false, true, 43)) {
            // line 44
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 44), "flashBag", [], "any", false, false, true, 44), "get", ["eccube.install.info"], "method", false, false, true, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                echo "                                    <div class=\"row\">
                                        <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
                                            <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["message"], 47, $this->source)), "html", null, true);
                echo "
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            ";
        }
        // line 53
        echo "                            <div class=\"page-header\">
                                <h1>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ようこそ"), "html", null, true);
        echo "</h1>
                            </div>
                            <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 56
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("install_step1");
        echo "\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 57), 57, $this->source), 'widget');
        echo "
                                <div class=\"intro\">
                                    <svg class=\"cb cb-inbox\"> <use xlink:href=\"#cb-inbox\" /></svg>
                                    ";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<p>EC-CUBEのインストールを開始します。</p><p>あらかじめ、使用するデータベースの情報（DB名など）をご準備ください。</p>");
        echo "
                                </div>
                                <div class=\"note_box\">
                                    <p>
                                        ";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("EC-CUBEのシステム向上・デバッグのため、サイト情報の提供にご協力おねがいいたします。<br>目的以外で利用することはございません。<br><span class=\"small\">（サイト情報：お店のURL、PHPバージョン、DBバージョン）</span>");
        echo "
                                    </p>
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "agree", [], "any", false, false, true, 66), 66, $this->source), 'widget', ["label" => "送信を承諾する", "label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                </div>
                                <ul class=\"btn_area\">
                                    <li class=\"d-grid gap-2\"><button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ進む"), "html", null, true);
        echo "</button></li>
                                </ul>
                            </form>
                        </div><!-- /.col -->
                    </div>
                </div>
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
        return "step1.twig";
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
        return array (  201 => 69,  195 => 66,  190 => 64,  183 => 60,  177 => 57,  173 => 56,  168 => 54,  165 => 53,  162 => 52,  151 => 47,  147 => 45,  142 => 44,  139 => 43,  137 => 42,  134 => 41,  123 => 36,  119 => 34,  114 => 33,  111 => 32,  108 => 31,  95 => 26,  91 => 24,  86 => 23,  84 => 22,  76 => 16,  69 => 15,  61 => 11,  59 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "step1.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/install/step1.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 22, "for" => 23);
        static $filters = array("escape" => 26, "trans" => 26, "raw" => 60);
        static $functions = array("path" => 56, "form_widget" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'raw'],
                ['path', 'form_widget']
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
