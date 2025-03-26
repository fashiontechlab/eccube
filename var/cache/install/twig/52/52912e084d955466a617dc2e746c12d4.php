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

/* Recommend42/Resource/template/admin/index.twig */
class __TwigTemplate_13bfb32d7f888d4557e01d7b061ba285 extends Template
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
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recommend42/Resource/template/admin/index.twig"));

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

        // line 15
        $context["menus"] = ["content", "plugin_recommend"];
        // line 13
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Recommend42/Resource/template/admin/index.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.title"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.subtitle"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 29
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(function () {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function () {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function (a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function () {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function () {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_rank_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function () {
                    \$(\".modal-backdrop\").remove();
                });
            };

            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function () {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            };
            // Drag and Drop
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function (e, ui) {
                    moveSortNo();
                }
            });
        })
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 79
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"normal\">";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.total_num", ["%number%" => ($context["total_item_count"] ?? null)]);
        echo "</span></div>
                    <div class=\"card-body p-0\">

                        ";
        // line 86
        if (($context["pagination"] ?? null)) {
            // line 87
            echo "                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-auto\"><strong>&nbsp;&nbsp;</strong></div>
                                        <div class=\"col-2\"><strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.col2"), "html", null, true);
            echo "</strong></div>
                                        <div class=\"col-2\"><strong>";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.col3"), "html", null, true);
            echo "</strong></div>
                                        <div class=\"col-auto\"><strong>";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.col4"), "html", null, true);
            echo "</strong></div>
                                        <div class=\"col\"><strong></strong></div>
                                    </div>
                                </li>
                                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
                // line 98
                echo "                                    <li class=\"list-group-item sortable-item\" data-sort-no=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "sort_no", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "\">
                                        <div class=\"row justify-content-around\">

                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-2\">
                                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 103)]), "html", null, true);
                echo "\" >
                                                    <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 104), "mainFileName", [], "any", false, false, true, 104), 104, $this->source)), "save_image"), "html", null, true);
                echo "\" style=\"max-width: 100px;\"/>
                                                </a>
                                            </div>
                                            <div class=\"col-2 d-flex align-items-center\">
                                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 108)]), "html", null, true);
                echo "\" >
                                                    ";
                // line 109
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 109), "name", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "
                                                    <br>
                                                    ";
                // line 111
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 111), "code_min", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "
                                                    ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 112), "code_min", [], "any", false, false, true, 112) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 112), "code_max", [], "any", false, false, true, 112))) {
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 112), "code_max", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                    echo "
                                                    ";
                }
                // line 114
                echo "                                                </a>
                                            </div>
                                            <div class=\"col-6 d-flex\">";
                // line 116
                echo twig_nl2br($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "comment", [], "any", false, false, true, 116), 116, $this->source)));
                echo "</div>

                                            <div class=\"col text-end\">
                                                <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 119)]), "html", null, true);
                echo "\"
                                                   class=\"btn btn-ec-actionIcon me-3 action-edit\"
                                                   data-bs-toggle=\"tooltip\"
                                                   data-bs-placement=\"top\"
                                                   title=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                echo "\"><i
                                                            class=\"fa fa-pencil fa-lg text-secondary\"></i></a>
                                                <a
                                                        class=\"btn btn-ec-actionIcon me-3\"
                                                        data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#confirmModal-";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "\"
                                                        data-bs-tooltip=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\"><i
                                                            class=\"fa fa-close fa-lg text-secondary\"></i></a>
                                            </div>

                                            <div class=\"modal fade\" id=\"confirmModal-";
                // line 135
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                 role=\"dialog\"
                                                 aria-labelledby=\"confirmModal-";
                // line 137
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title font-weight-bold\">
                                                                ";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.delete.confirm"), "html", null, true);
                echo "</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body text-start\">
                                                            <p class=\"text-start\">
                                                                ";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.delete.confirm"), "html", null, true);
                echo "</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                    data-bs-dismiss=\"modal\">";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
                echo "
                                                            </button>
                                                            <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 153)]), "html", null, true);
                echo "\" class=\"btn btn-ec-delete\" data-confirm=\"false\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                ";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
                echo "
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                            </ul>
                        ";
        }
        // line 166
        echo "                    </div><!-- /.box -->
                </div><!-- /.col -->

                <p>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.notice"), "html", null, true);
        echo "</p>
            </div>

            <div class=\"card rounded border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center\">
                        <a href=\"";
        // line 175
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_new");
        echo "\" class=\"btn btn-ec-regular pl-4 pr-4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.new"), "html", null, true);
        echo "</a>
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
        return "Recommend42/Resource/template/admin/index.twig";
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
        return array (  392 => 175,  383 => 169,  378 => 166,  374 => 164,  358 => 154,  352 => 153,  347 => 151,  340 => 147,  332 => 142,  324 => 137,  319 => 135,  312 => 131,  306 => 128,  298 => 123,  291 => 119,  285 => 116,  281 => 114,  274 => 112,  270 => 111,  265 => 109,  261 => 108,  254 => 104,  250 => 103,  239 => 98,  235 => 97,  228 => 93,  224 => 92,  220 => 91,  214 => 87,  212 => 86,  206 => 83,  200 => 79,  193 => 78,  162 => 53,  138 => 32,  134 => 31,  130 => 30,  125 => 29,  118 => 28,  106 => 21,  99 => 20,  86 => 18,  73 => 17,  65 => 13,  63 => 15,  41 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "Recommend42/Resource/template/admin/index.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Recommend42/Resource/template/admin/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 86, "for" => 97);
        static $filters = array("escape" => 17, "trans" => 17, "raw" => 83, "no_image_product" => 104, "nl2br" => 116, "purify" => 116);
        static $functions = array("asset" => 29, "url" => 53, "csrf_token_for_anchor" => 153);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'raw', 'no_image_product', 'nl2br', 'purify'],
                ['asset', 'url', 'csrf_token_for_anchor']
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
