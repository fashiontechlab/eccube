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

/* Mail/contact_mail.html.twig */
class __TwigTemplate_a2e95d876c67c9a66fdcc6514770b301 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/contact_mail.html.twig"));

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

        // line 11
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">お問い合わせを受付いたしました。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            以下のお問い合わせを受付致しました。<br>
                            確認次第ご連絡いたしますので、少々お待ちください。<br>
                            <br>
                            <br>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">お名前</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name01", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name02", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">お名前(カナ)</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana01", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana02", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">住所</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\"><span><span class=\"col-auto\">〒</span></span>";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "postal_code", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pref", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr01", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr02", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">電話番号</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "phone_number", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">メールアドレス</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">お問い合わせ内容</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 57
        echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "contents", [], "any", false, false, true, 57), 57, $this->source), "html", null, true));
        echo "</dd>
                            </dl>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 72
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Mail/contact_mail.html.twig";
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
        return array (  164 => 73,  158 => 72,  151 => 70,  147 => 69,  132 => 57,  125 => 53,  118 => 49,  105 => 45,  96 => 41,  87 => 37,  62 => 17,  54 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/contact_mail.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Mail/contact_mail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17, "nl2br" => 57);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'nl2br'],
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
