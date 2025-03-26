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

/* @admin/Store/plugin_search.twig */
class __TwigTemplate_cc58dee26512e8a74de423134c41a9db extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search.twig"));

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
        $context["menus"] = ["store", "plugin", "plugin_owners_search"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_search.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.885"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.884"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 20
        echo "    <style type=\"text/css\">
        .border-bt {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }
        #plugin-list a img{
            max-height: 180px;
        }
        #plugin-list .info{
            min-height: 50%;
        }
        .plugin-ver li span{
            display: inline-block;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 39
        if ((twig_length_filter($this->env, ($context["Categories"] ?? null)) > 0)) {
            // line 40
            echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"row\">
                                <div class=\"col-12 p-4\">
                                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search", ["category_id" => $context["key"]]), "html", null, true);
                echo "\" class=\"px-3 text-dark\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["category"], 45, $this->source), "html", null, true);
                echo "</a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 52
        echo "
                <form method=\"post\" action=\"";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search");
        echo "\" class=\"plugin-search\" name=\"search\">
                    <div class=\"c-outsideBlock\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, true, 55), 55, $this->source), 'widget');
        echo "
                        <div class=\"c-outsideBlock__contents mb-4\">
                            <div class=\"row justify-content-start\">
                                <div class=\"col-3 ps-0\">
                                    <label class=\"col-form-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "label", [], "any", false, false, true, 59), 59, $this->source)), "html", null, true);
        echo "</label>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, true, 60), 60, $this->source), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "price_type", [], "any", false, false, true, 63), "vars", [], "any", false, false, true, 63), "label", [], "any", false, false, true, 63), 63, $this->source)), "html", null, true);
        echo "</label>
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "price_type", [], "any", false, false, true, 64), 64, $this->source), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "keyword", [], "any", false, false, true, 67), "vars", [], "any", false, false, true, 67), "label", [], "any", false, false, true, 67), 67, $this->source)), "html", null, true);
        echo "</label>
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "keyword", [], "any", false, false, true, 68), 68, $this->source), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"c-outsideBlock__contents mb-2 ps-0\">
                            <button class=\"btn btn-ec-conversion px-5 py-2\" type=\"submit\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_button"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-12 text-end\">
                            <div class=\"d-inline-block me-2\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sort", [], "any", false, false, true, 79), 79, $this->source), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                            <div class=\"d-inline-block\">
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "page_count", [], "any", false, false, true, 82), 82, $this->source), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                        </div>
                    </div>
                </form>

                <div id=\"plugin-list\" class=\"card rounded border-0 my-4\">
                    <div class=\"card-header\">
                        <h5>";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_results", ["%number%" => twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination"] ?? null), 90, $this->source)), "%total%" => ($context["total"] ?? null)]), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 93
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 94
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                                <div class=\"row border-bt pb-2 mb-3\">
                                    ";
                // line 96
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_search_panel.twig");
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                        ";
        }
        // line 100
        echo "                    </div>

                    ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 102) > 0)) {
            // line 103
            echo "                        <div class=\"row justify-content-md-center mb-4\">
                            ";
            // line 104
            $this->loadTemplate("@admin/pager.twig", "@admin/Store/plugin_search.twig", 104)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 104), "routes" => "admin_store_plugin_owners_search_page"]));
            // line 105
            echo "                        </div>
                    ";
        }
        // line 107
        echo "                </div>
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
        return "@admin/Store/plugin_search.twig";
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
        return array (  305 => 107,  301 => 105,  299 => 104,  296 => 103,  294 => 102,  290 => 100,  287 => 99,  270 => 96,  267 => 95,  249 => 94,  247 => 93,  241 => 90,  230 => 82,  224 => 79,  215 => 73,  207 => 68,  203 => 67,  197 => 64,  193 => 63,  187 => 60,  183 => 59,  176 => 55,  171 => 53,  168 => 52,  161 => 47,  150 => 45,  146 => 44,  140 => 40,  138 => 39,  133 => 36,  126 => 35,  105 => 20,  98 => 19,  85 => 17,  72 => 16,  64 => 12,  62 => 14,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_search.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Store/plugin_search.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 39, "for" => 44, "include" => 104);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 39);
        static $functions = array("url" => 45, "form_widget" => 55, "include" => 96);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans', 'length'],
                ['url', 'form_widget', 'include']
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
