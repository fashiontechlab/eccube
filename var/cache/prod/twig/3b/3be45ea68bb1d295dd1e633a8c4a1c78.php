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

/* sitemap.xml.twig */
class __TwigTemplate_6bbbbff328ee647ab4f1ed472573d7b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
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

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\">
";
        // line 4
        if (array_key_exists("DefaultPages", $context)) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["DefaultPages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["DefaultPage"]) {
                // line 6
                echo "  ";
                if (((twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "url", [], "any", false, false, true, 6) != "product_detail") && (twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "url", [], "any", false, false, true, 6) != "product_list"))) {
                    // line 7
                    echo "  <url>
    <loc>";
                    // line 8
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "url", [], "any", false, false, true, 8), 8, $this->source));
                    echo "</loc>
    <lastmod>";
                    // line 9
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["DefaultPage"], "update_date", [], "any", false, false, true, 9), 9, $this->source), "", "c"), "html", null, true);
                    echo "</lastmod>
    <changefreq>daily</changefreq>
  </url>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['DefaultPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 15
        if (array_key_exists("UserPages", $context)) {
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["UserPages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["UserPage"]) {
                // line 17
                echo "  <url>
    <loc>";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("user_data", ["route" => twig_get_attribute($this->env, $this->source, $context["UserPage"], "url", [], "any", false, false, true, 18)]), "html", null, true);
                echo "</loc>
    <lastmod>";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["UserPage"], "update_date", [], "any", false, false, true, 19), 19, $this->source), "", "c"), "html", null, true);
                echo "</lastmod>
    <changefreq>daily</changefreq>
  </url>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UserPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        if (array_key_exists("Categories", $context)) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 27
                echo "  <url>
    <loc>";
                // line 28
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</loc>
    <lastmod>";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "update_date", [], "any", false, false, true, 29), 29, $this->source), "", "c"), "html", null, true);
                echo "</lastmod>
    <changefreq>daily</changefreq>
  </url>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 35
        if (array_key_exists("Products", $context)) {
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 37
                echo "  <url>
    <loc>";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 38)]), "html", null, true);
                echo "</loc>
    <lastmod>";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "update_date", [], "any", false, false, true, 39), 39, $this->source), "", "c"), "html", null, true);
                echo "</lastmod>
    <changefreq>daily</changefreq>
    ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Product"], "ProductImage", [], "any", false, false, true, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                    // line 42
                    echo "    <image:image>
      <image:loc>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["ProductImage"], 43, $this->source), "save_image")), "html", null, true);
                    echo "</image:loc>
    </image:image>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "  </url>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 49
        echo "</urlset>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sitemap.xml.twig";
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
        return array (  175 => 49,  167 => 46,  158 => 43,  155 => 42,  151 => 41,  146 => 39,  142 => 38,  139 => 37,  135 => 36,  133 => 35,  122 => 29,  116 => 28,  113 => 27,  109 => 26,  107 => 25,  96 => 19,  92 => 18,  89 => 17,  85 => 16,  83 => 15,  71 => 9,  67 => 8,  64 => 7,  61 => 6,  57 => 5,  55 => 4,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sitemap.xml.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/sitemap.xml.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "for" => 5);
        static $filters = array("escape" => 9, "date_format" => 9);
        static $functions = array("url" => 8, "absolute_url" => 43, "asset" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date_format'],
                ['url', 'absolute_url', 'asset']
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
