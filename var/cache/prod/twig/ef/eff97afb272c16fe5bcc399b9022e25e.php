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

/* @admin/Store/plugin_handler.twig */
class __TwigTemplate_ff52025ba5766a4595c1ff3e5edbe526 extends Template
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
        $context["menus"] = ["store", "plugin", "plugin_handler"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_handler.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.828"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.829"), "html", null, true);
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "

    ";
        // line 22
        if ((twig_length_filter($this->env, ($context["handlersPerEvent"] ?? null)) > 0)) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["handlersPerEvent"] ?? null));
            foreach ($context['_seq'] as $context["event"] => $context["handlersPerType"]) {
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["handlersPerType"]);
                foreach ($context['_seq'] as $context["type"] => $context["handlers"]) {
                    // line 25
                    echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-arrow\">
                                ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["event"], 29, $this->source), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 29, $this->source), "html", null, true);
                    echo "
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"table_list\">
                                    <div class=\"table-responsive with-border\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.830"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.831"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.832"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.833"), "html", null, true);
                    echo "</th>
                                            </tr>
                                            </thead>
                                            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["handlers"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
                        // line 44
                        echo "                                                <tbody>
                                                    <tr>
                                                        <td class=\"member_id\">
                                                            ";
                        // line 47
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["handler"], "plugin", [], "any", false, false, true, 47), "name", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 50
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["handler"], "handler", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 53
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["handler"], "priority", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"icon_edit\">
                                                            <div class=\"dropdown\">
                                                                <a class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                    ";
                        // line 59
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 59))) {
                            // line 60
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_handler_up", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, true, 60)]), "html", null, true);
                            echo "\">上へ</a>
                                                                    ";
                        }
                        // line 62
                        echo "                                                                    ";
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 62))) {
                            // line 63
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_handler_down", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, true, 63)]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.835"), "html", null, true);
                            echo "</a>
                                                                    ";
                        }
                        // line 65
                        echo "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['handlers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['event'], $context['handlersPerType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header with-arrow\">
                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.836"), "html", null, true);
            echo "
                    </div><!-- /.box-header -->
                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.837"), "html", null, true);
            echo "</h3>
                    </div><!-- /.box-header -->
                </div>
            </div>
        </div>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Store/plugin_handler.twig";
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
        return array (  253 => 90,  247 => 87,  241 => 83,  238 => 82,  232 => 81,  217 => 71,  198 => 65,  190 => 63,  187 => 62,  181 => 60,  179 => 59,  170 => 53,  164 => 50,  158 => 47,  153 => 44,  136 => 43,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  105 => 29,  99 => 25,  94 => 24,  89 => 23,  87 => 22,  83 => 20,  79 => 19,  72 => 17,  65 => 16,  60 => 12,  58 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_handler.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Store/plugin_handler.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 22, "for" => 23);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 22);
        static $functions = array("url" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'length'],
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
