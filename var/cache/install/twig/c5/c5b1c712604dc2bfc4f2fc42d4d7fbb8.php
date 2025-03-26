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

/* step2.twig */
class __TwigTemplate_9de45ec87daf2293342ec068796c6b26 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "step2.twig"));

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
        $context["current"] = 2;
        // line 11
        $this->parent = $this->loadTemplate("frame.twig", "step2.twig", 11);
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
        echo "    <div id=\"main\" class=\"step2\">
        <div class=\"main_inner\">
            <div class=\"main_content\">
                <div class=\"page-header\">
                    <h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("権限チェック"), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <textarea class=\"form-control disp_area\" name=\"disp_area\">
";
        // line 26
        if ((twig_length_filter($this->env, ($context["noWritePermissions"] ?? null)) == 0)) {
            // line 27
            echo "&gt;&gt;○：";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("アクセス権限は正常です"), "html", null, true);
            echo "
";
        } else {
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("以下のファイルまたはディレクトリに書き込み権限を付与してください。"), "html", null, true);
            echo "
";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["noWritePermissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["noWritePermission"]) {
                // line 31
                echo "&gt;&gt;☓：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["noWritePermission"], 31, $this->source), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noWritePermission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 34
        echo "                            </textarea>
                            <ul class=\"btn_area\">
                                <li class=\"d-grid gap-2\">
                                    ";
        // line 37
        if ((twig_length_filter($this->env, ($context["noWritePermissions"] ?? null)) > 0)) {
            // line 38
            echo "                                        <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("install_step2");
            echo "\" class=\"btn btn-primary btn-block btn-lg\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("更新する"), "html", null, true);
            echo "</a>
                                    ";
        } else {
            // line 40
            echo "                                        <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("install_step3");
            echo "\" class=\"btn btn-primary btn-block btn-lg\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ進む"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 42
        echo "                                </li>
                                <li class=\"d-grid gap-2\"><a href=\"";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("install_step1");
        echo "\" class=\"btn btn-link btn-block btn-lg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("前へ戻る"), "html", null, true);
        echo "</a></li>
                            </ul>
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
        return "step2.twig";
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
        return array (  143 => 43,  140 => 42,  132 => 40,  124 => 38,  122 => 37,  117 => 34,  107 => 31,  103 => 30,  99 => 29,  93 => 27,  91 => 26,  82 => 20,  76 => 16,  69 => 15,  61 => 11,  59 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "step2.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/install/step2.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 26, "for" => 30);
        static $filters = array("escape" => 20, "trans" => 20, "length" => 26);
        static $functions = array("path" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'length'],
                ['path']
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
