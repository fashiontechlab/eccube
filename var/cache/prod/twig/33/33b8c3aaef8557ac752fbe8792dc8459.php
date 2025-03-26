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

/* MailMagazine42/Resource/template/entry_add_mailmaga.twig */
class __TwigTemplate_6f7727b00201c94c40bd647783525577 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            '_entry_mailmaga_flg_row' => [$this, 'block__entry_mailmaga_flg_row'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return "Form/form_div_layout.twig";
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

        $this->parent = $this->loadTemplate("Form/form_div_layout.twig", "MailMagazine42/Resource/template/entry_add_mailmaga.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block__entry_mailmaga_flg_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<dl>
        <dt>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 27, $this->source), 'label');
        // line 28
        echo "</dt>
        <dd>
            <div class=\"ec-radio";
        // line 30
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 30, $this->source))) ? (" error") : (""));
        echo "\">
                ";
        // line 31
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 31), "get", ["mode"], "method", false, false, true, 31) == "confirm") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, true, 31), "vars", [], "any", false, false, true, 31), "valid", [], "any", false, false, true, 31))) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 32), "choices", [], "any", false, false, true, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 33
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, true, 33) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 33), "data", [], "any", false, false, true, 33))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
                }
                // line 36
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 37, $this->source), 'widget', ["type" => "hidden"]);
        } else {
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 39, $this->source), 'widget');
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 40, $this->source), 'errors');
        }
        // line 42
        echo "            </div>
        </dd>
    </dl>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/entry_add_mailmaga.twig";
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
        return array (  104 => 42,  101 => 40,  99 => 39,  96 => 37,  90 => 36,  87 => 34,  84 => 33,  79 => 32,  77 => 31,  73 => 30,  69 => 28,  67 => 27,  64 => 25,  60 => 24,  37 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/entry_add_mailmaga.twig", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/MailMagazine42/Resource/template/entry_add_mailmaga.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31, "for" => 32);
        static $filters = array("escape" => 34, "trans" => 34);
        static $functions = array("form_label" => 27, "has_errors" => 30, "form_widget" => 37, "form_errors" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trans'],
                ['form_label', 'has_errors', 'form_widget', 'form_errors']
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
