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

/* complete.twig */
class __TwigTemplate_507b295584d55fc13776209e66b30f7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'script' => [$this, 'block_script'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "complete.twig"));

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
        $context["current"] = 6;
        // line 11
        $this->parent = $this->loadTemplate("frame.twig", "complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 16
        echo "    <script>
     \$(function() {
         var is_sqlite = ";
        // line 18
        if (($context["is_sqlite"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
         var plugin_content = \$('#plugins').children().remove();

         var modal = \$('#PluginProgressModal');
         var bootstrapModal = new bootstrap.Modal(modal.get(0));
         bootstrapModal.show();
         var progress = \$('div.progress', modal).show();
         var progress_message = \$('#progress_message');
         modal.find('.modal-footer').hide();
         progress_message.text('システム要件をチェックしています。しばらくお待ちください...');

         \$.ajaxSetup({
             'headers': {
                 'ECCUBE-CSRF-TOKEN': '";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 31, $this->source), "html", null, true);
        echo "'
             }
         });

         \$.ajax({
             url: '";
        // line 36
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("install_plugin_check_api");
        echo "',
             type: 'put'
         }).always(function () {
             progress_message.text('プラグインを読み込んでいます。しばらくお待ちください...');
             \$.get({ url: '";
        // line 40
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("install_plugins");
        echo "' },
                   function (data) {
                       \$('#plugins').children().remove();
                       if (data.length === 0) {
                           \$('#plugins_switch').hide();
                           return;
                       }
                       data.forEach(function (plugin) {
                           var pluginCode = encodeURIComponent(plugin.code);
                           var content = \$(plugin_content).clone();
                           var url = '";
        // line 50
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("install_plugin_enable", ["code" => "__code__"]);
        echo "';
                           content.find('.c-toggleSwitch').data('url', url.replace(/__code__/, pluginCode));
                           content.find('.plugin_name').text(plugin.name);
                           content.find('input[type=checkbox]').attr('id', pluginCode);
                           content.find('label').attr('for', pluginCode);
                           if (plugin.enabled) {
                               content.find('input[type=checkbox]')
                                      .prop('checked', true);
                               content.find('.c-toggleSwitch__label > span').text('有効');
                           } else {
                               content.find('input[type=checkbox]')
                                      .prop('checked', false);
                               content.find('.c-toggleSwitch__label > span').text('無効');
                           }
                           if (is_sqlite && ['Api42', 'SiteKit42'].includes(plugin.code)) {
                               content.find('.c-toggleSwitch').text('SQLite3 には対応していません');
                           }
                           content.appendTo('#plugins');
                       });
                   }
             ).then(function () {
                 \$('#plugins_switch').find('.c-toggleSwitch').each(function () {
                     var \$toggleSwitch = \$(this);
                     \$toggleSwitch.find('input[type=checkbox]').on('change', function () {
                         var \$checkbox = \$(this);
                         var status = \$checkbox.prop('checked');
                         \$toggleSwitch.find('.c-toggleSwitch__label > span').text(status ? '有効' : '無効');
                         var statusText = \$toggleSwitch.find('.c-toggleSwitch__label > span').text();
                         bootstrapModal.show();
                         progress.show();
                         modal.find('.modal-footer').hide();
                         progress_message.text('プラグインを' + statusText + '化しています...');
                         \$.ajax(
                             {
                                 url: \$toggleSwitch.data('url'),
                                 type: 'put'
                             }
                         ).done(function(data, textStatus, jqXHR) {
                             progress.hide();
                             bootstrapModal.hide();
                         }).fail(function(jqXHR, textStatus, errorThrown) {
                             modal.find('.modal-footer').show();
                             \$checkbox.prop('checked', !status);
                             \$toggleSwitch.find('.c-toggleSwitch__label > span').text(!status ? '有効' : '無効');
                             bootstrapModal.hide();
                             console.log(jqXHR);
                             console.log(textStatus);
                             console.log(errorThrown);
                             if (jqXHR.status == 404) {
                                 progress_message.text('一定時間経過したため' + statusText + '化ができません。管理画面にログインし、オーナーズストア→プラグイン→プラグイン一覧から再度お試しください。');
                             } else {
                                 progress_message.text(statusText + '化に失敗しました。');
                             }
                         });
                     });
                 });
             }).always(function () {
                 // モーダルをクローズ
                 progress.hide();
                 bootstrapModal.hide();

                 // 管理画面へのボタンを有効化
                 \$('#go_to_admin_page')
                     .removeClass('disabled')
                     .removeAttr('tabindex')
                     .attr('href', \"";
        // line 115
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("install_plugin_redirect");
        echo "\")
             });
         });
     });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 123
        echo "<div id=\"main\" class=\"step7\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"page-header\">
                    <h1>";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("インストールが完了しました！"), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"column\" id=\"plugins_switch\">
                    <h2>以下のプラグインは有効化してすぐにご利用可能です</h2>
                    <p><small>あとから管理画面→オーナーズストア→プラグイン一覧より有効化も可能です</small></p>
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <tbody id=\"plugins\">
                                <tr>
                                    <td class=\"text-left pl-3 plugin_name\">__name__</td>
                                    <td class=\"align-middle plugin_status\">
                                        <div class=\"c-toggleSwitch\" data-url=\"__url__\">
                                            <div class=\"c-toggleSwitch__btn\">
                                                <input type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                                <label for=\"flexSwitchCheckDefault\"></label>
                                            </div>
                                            <div class=\"c-toggleSwitch__label\">
                                                <span class=\"text-dark\">有効</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"column\">
                    <h2>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("管理画面にアクセスしてみましょう"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("先ほど登録したログインID・パスワードで、管理画面にログインすることができます。デザインの編集や商品を登録してみましょう！"), "html", null, true);
        echo "</p>
                    <div class=\"btn_area\">
                        <a id=\"go_to_admin_page\" tabindex=\"-1\" class=\"btn btn-primary btn-block btn-lg disabled\">";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("管理画面を表示"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"PluginProgressModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"PluginProgressModal\" aria-hidden=\"true\"
     data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\" id=\"progress_message\"></h5>
            </div>
            <div class=\"modal-body text-left\">
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-default\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("閉じる"), "html", null, true);
        echo "</button>
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
        return "complete.twig";
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
        return array (  288 => 180,  263 => 158,  258 => 156,  254 => 155,  224 => 128,  217 => 123,  210 => 122,  197 => 115,  129 => 50,  116 => 40,  109 => 36,  101 => 31,  81 => 18,  77 => 16,  70 => 15,  62 => 11,  60 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "complete.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/install/complete.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 18);
        static $filters = array("escape" => 31, "trans" => 128);
        static $functions = array("url" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
