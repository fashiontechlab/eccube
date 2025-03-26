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

/* @admin/Setting/System/system.twig */
class __TwigTemplate_857633908e9b31b3b8931b9ac0a658ce extends Template
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
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 12
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

        // line 14
        $context["menus"] = ["setting", "system", "system_index"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/system.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.system_info"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\" >
                            <div class=\"col-8\" id=\"server_info_box__header\">
                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.system_info"), "html", null, true);
        echo "\">
                                    <span class=\"card-title \">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.system_info"), "html", null, true);
        echo "</span>
                                    <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <a data-bs-toggle=\"collapse\" href=\"#systemInfo\"
                                   aria-expanded=\"false\" aria-controls=\"systemInfo\">
                                    <i class=\"fa fa-angle-up fa-lg\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse show ec-cardCollapse\" id=\"systemInfo\" >
                        <div class=\"card-body\" id=\"server_info_box__body_inner\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["info"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 43
            echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\" id=\"server_info_box__value--";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "\">
                                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 61
        if (($context["phpinfo_enabled"] ?? null)) {
            // line 62
            echo "            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\" id=\"php_info_box__header\" >
                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.system.php_info"), "html", null, true);
            echo "\">
                                    <span class=\"card-title\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.system.php_info"), "html", null, true);
            echo "</span>
                                    <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"php_info_box__frame\">
                        <iframe name=\"php_info\" src=\"";
            // line 75
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_system_phpinfo");
            echo "\" height=\"500\" frameborder=\"0\" style=\"width: 100%;\"></iframe>
                    </div>

                </div>
            </div>
            ";
        }
        // line 81
        echo "
        </div>
    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Setting/System/system.twig";
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
        return array (  204 => 81,  195 => 75,  185 => 68,  181 => 67,  174 => 62,  172 => 61,  165 => 56,  145 => 50,  141 => 49,  134 => 45,  130 => 43,  113 => 42,  96 => 28,  92 => 27,  83 => 20,  79 => 19,  72 => 17,  65 => 16,  60 => 12,  58 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/system.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Setting/System/system.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "for" => 42, "if" => 61);
        static $filters = array("escape" => 16, "trans" => 16);
        static $functions = array("url" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans'],
                ['url']
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
