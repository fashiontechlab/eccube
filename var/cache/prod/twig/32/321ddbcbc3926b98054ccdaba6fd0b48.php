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

/* @admin/Content/news_edit.twig */
class __TwigTemplate_55e7e6a60f5811b2ed056dd1db6dd57f extends Template
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
        // line 11
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

        // line 13
        $context["menus"] = ["content", "news"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/news_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news_management"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 23), 23, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.news_registration"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#newsForm\"
                                                                 aria-expanded=\"true\" aria-controls=\"newsForm\"><i class=\"fa fa-lg fa-angle-up\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"ec-cardCollapse collapse show\" id=\"newsForm\" style=\"\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.publish_date"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                        </span>
                                    </div>

                                    <div class=\"col mb-2\">
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publish_date", [], "any", false, false, true, 48), 48, $this->source), 'widget');
        echo "
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publish_date", [], "any", false, false, true, 49), 49, $this->source), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.title"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 61), 61, $this->source), 'widget');
        echo "
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 62), 62, $this->source), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.news.url"), "html", null, true);
        echo "\">
                                            <span>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, true, 73), 73, $this->source), 'widget');
        echo "
                                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, true, 74), 74, $this->source), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">&nbsp;</div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "link_method", [], "any", false, false, true, 81), 81, $this->source), 'widget');
        echo "
                                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "link_method", [], "any", false, false, true, 82), 82, $this->source), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.news.body"), "html", null, true);
        echo "\">
                                            <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.body"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 93), 93, $this->source), 'widget');
        echo "
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 94), 94, $this->source), 'errors');
        echo "
                                    </div>
                                </div>

                                ";
        // line 99
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 99), "eccube_form_options", [], "any", false, false, true, 99), "auto_render", [], "any", false, false, true, 99); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 100
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 100), "eccube_form_options", [], "any", false, false, true, 100), "form_theme", [], "any", false, false, true, 100)) {
                // line 101
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 101), "eccube_form_options", [], "any", false, false, true, 101), "form_theme", [], "any", false, false, true, 101)], true);
                // line 102
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 102, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 104
                echo "                                        <div class=\"row mb-2\">
                                            <div class=\"col-3\">
                                                <span>";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 106), "label", [], "any", false, false, true, 106), 106, $this->source)), "html", null, true);
                echo "</span>
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 109
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 109, $this->source), 'widget');
                echo "
                                                ";
                // line 110
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 110, $this->source), 'errors');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            // line 114
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"c-conversionArea\">
                    <div class=\"c-conversionArea__container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"c-conversionArea__leftBlockItem\">
                                    <a class=\"c-baseLink\" href=\"";
        // line 125
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news");
        echo "\">
                                        <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                        <span>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news_management"), "html", null, true);
        echo "</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\">
                                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 133), 133, $this->source), 'widget');
        echo "
                                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, true, 134), 134, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-auto\">
                                        <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Content/news_edit.twig";
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
        return array (  303 => 137,  297 => 134,  293 => 133,  284 => 127,  279 => 125,  267 => 115,  261 => 114,  254 => 110,  250 => 109,  244 => 106,  240 => 104,  234 => 102,  231 => 101,  228 => 100,  223 => 99,  216 => 94,  212 => 93,  205 => 89,  201 => 88,  192 => 82,  188 => 81,  178 => 74,  174 => 73,  167 => 69,  163 => 68,  154 => 62,  150 => 61,  143 => 57,  138 => 55,  129 => 49,  125 => 48,  117 => 43,  112 => 41,  99 => 31,  88 => 23,  85 => 22,  81 => 21,  74 => 17,  67 => 16,  62 => 11,  60 => 19,  58 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/news_edit.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Content/news_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 19, "for" => 99, "if" => 100);
        static $filters = array("escape" => 16, "trans" => 16, "filter" => 99);
        static $functions = array("form_widget" => 23, "form_errors" => 49, "form_row" => 102, "url" => 125);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'filter'],
                ['form_widget', 'form_errors', 'form_row', 'url']
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
