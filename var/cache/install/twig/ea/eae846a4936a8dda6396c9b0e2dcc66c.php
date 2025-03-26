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

/* Mypage/favorite.twig */
class __TwigTemplate_de83a83b759a58ee8e7443448ad2fd16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/favorite.twig"));

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
        $context["mypageno"] = "favorite";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/favorite.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り一覧"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/favorite.twig", 23)->display($context);
        // line 24
        echo "        </div>

        <div class=\"ec-mypageRole\">
            <div class=\"ec-favoriteRole\">
                ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 28) > 0)) {
            // line 29
            echo "                    <div class=\"ec-favoriteRole__header\">
                        <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件のお気に入りがあります", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 30)]), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-favoriteRole__detail\">
                        <ul class=\"ec-favoriteRole__itemList\">
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["FavoriteProduct"]) {
                // line 35
                echo "                                ";
                $context["Product"] = twig_get_attribute($this->env, $this->source, $context["FavoriteProduct"], "Product", [], "any", false, false, true, 35);
                // line 36
                echo "                                <li class=\"ec-favoriteRole__item\">
                                    <a class=\"ec-closeBtn--circle\"
                                       href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 38)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                       data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-white.svg"), "html", null, true);
                echo "\" alt=\"close\">
                                        </div>
                                    </a>
                                    <a class=\"ec-favoriteRole__itemThumb\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 44)]), "html", null, true);
                echo "\">
                                        <p class=\"ec-favoriteRole__item-image\">
                                            <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "main_list_image", [], "any", false, false, true, 46), 46, $this->source)), "save_image"), "html", null, true);
                echo "\">
                                        </p>
                                    </a>
                                    <p class=\"ec-favoriteRole__itemTitle\">";
                // line 49
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "</p>
                                    <p class=\"ec-favoriteRole__itemPrice\">
                                        ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [], "any", false, false, true, 51) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_max", [], "any", false, false, true, 51))) {
                    // line 52
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 54
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [], "any", false, false, true, 54), 54, $this->source)), "html", null, true);
                    echo "～";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_max", [], "any", false, false, true, 54), 54, $this->source)), "html", null, true);
                    echo "
                                        ";
                }
                // line 56
                echo "                                    </p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FavoriteProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </ul>
                    </div>
                    <div class=\"ec-pagerRole\">
                        ";
            // line 62
            $this->loadTemplate("pager.twig", "Mypage/favorite.twig", 62)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 62)]));
            // line 63
            echo "                    </div>
                ";
        } else {
            // line 65
            echo "                    <div class=\"ec-favoriteRole__header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りは登録されていません。"), "html", null, true);
            echo "</div>
                ";
        }
        // line 67
        echo "            </div>
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
        return "Mypage/favorite.twig";
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
        return array (  192 => 67,  186 => 65,  182 => 63,  180 => 62,  175 => 59,  167 => 56,  159 => 54,  153 => 52,  151 => 51,  146 => 49,  140 => 46,  135 => 44,  129 => 41,  121 => 38,  117 => 36,  114 => 35,  110 => 34,  103 => 30,  100 => 29,  98 => 28,  92 => 24,  90 => 23,  83 => 21,  78 => 18,  71 => 17,  63 => 11,  61 => 15,  59 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/favorite.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Mypage/favorite.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 23, "if" => 28, "for" => 34);
        static $filters = array("escape" => 21, "trans" => 21, "no_image_product" => 46, "price" => 52);
        static $functions = array("url" => 38, "csrf_token_for_anchor" => 38, "asset" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price'],
                ['url', 'csrf_token_for_anchor', 'asset']
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
