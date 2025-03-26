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

/* @admin/Store/plugin.twig */
class __TwigTemplate_30790d513d621149dda147df2dc3f7f8 extends Template
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
            'sheetsheet' => [$this, 'block_sheetsheet'],
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
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.809"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.810"), "html", null, true);
    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <script>
        function changeActionSubmit(action, form_name) {
            document.forms[form_name].action = action;
            document.forms[form_name].submit();
            return false;
        }
    </script>
";
    }

    // line 29
    public function block_sheetsheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <style type=\"text/css\">
        table a.plugin-image:hover {
            text-underline: none;
        }
    </style>
";
    }

    // line 37
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <a href=\"";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search");
        echo "\"
                           class=\"btn btn-ec-regular me-2 float-end\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.811"), "html", null, true);
        echo "</a>
                        <h5 class=\"box-title mb-3\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.812"), "html", null, true);
        echo "</h5>
                    </div>
                    ";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_table_official.twig", ["Plugins" => ($context["officialPlugins"] ?? null)]);
        echo "

                </div>

                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <a href=\"";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install");
        echo "\"
                           class=\"btn btn-ec-regular me-2 float-end\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.813"), "html", null, true);
        echo "</a>
                        <h5 class=\"box-title mb-3\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.814"), "html", null, true);
        echo "</h5>
                    </div>
                    ";
        // line 57
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_table.twig", ["Plugins" => ($context["unofficialPlugins"] ?? null)]);
        echo "
                </div>
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
        return "@admin/Store/plugin.twig";
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
        return array (  155 => 57,  150 => 55,  146 => 54,  142 => 53,  133 => 47,  128 => 45,  124 => 44,  120 => 43,  113 => 38,  109 => 37,  100 => 30,  96 => 29,  85 => 20,  81 => 19,  74 => 17,  67 => 16,  62 => 12,  60 => 14,  41 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Store/plugin.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14);
        static $filters = array("escape" => 16, "trans" => 16);
        static $functions = array("url" => 43, "include" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'trans'],
                ['url', 'include']
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
