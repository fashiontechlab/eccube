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

/* Api42/Tests/Web/Admin/LoginControllerTest.php */
class __TwigTemplate_c56ed32e5874eb20ac299a065bf3c3bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Tests/Web/Admin/LoginControllerTest.php"));

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
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Api42\\Tests\\Web\\Admin;

use Eccube\\Tests\\Web\\AbstractWebTestCase;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class LoginControllerTest extends AbstractWebTestCase
{
    public function testRoutingAdminLogin()
    {
        \$this->client->request('GET', \$this->generateUrl('admin_login'));

        // ログイン
        \$this->assertEquals(
            200,
            \$this->client->getResponse()->getStatusCode()
        );
    }

    public function testRoutingAdminLoginCheck()
    {
        // see https://stackoverflow.com/a/38661340/4956633
        \$this->client->request(
            'POST', \$this->generateUrl('admin_login'),
            [
                'login_id' => 'admin',
                'password' => 'password',
                '_csrf_token' => 'dummy',
            ]
        );

        \$this->assertNotNull(self::getContainer()->get('security.token_storage')->getToken(), 'ログインしているかどうか');
    }

    public function testRoutingAdminLogin_ログインしていない場合はログイン画面を表示()
    {
        \$this->client->request('GET', \$this->generateUrl('admin_homepage'));

        // ログイン
        self::assertTrue(\$this->client->getResponse()->isRedirect(
            \$this->generateUrl('admin_login', [], UrlGeneratorInterface::ABSOLUTE_URL)));
    }

    public function testRoutingAdminOauth2Authorize_ログインしていない場合はログイン画面を表示()
    {
        \$this->client->request('GET', \$this->generateUrl('oauth2_authorize'));

        // ログイン
        self::assertTrue(\$this->client->getResponse()->isRedirect(
            \$this->generateUrl('admin_login', [], UrlGeneratorInterface::ABSOLUTE_URL)));
    }

    public function testRoutingOauth2Authorize_ログインしていない場合はログイン画面を表示()
    {
        \$this->client->request('GET', \$this->generateUrl('oauth2_authorize'));

        // ログイン
        self::assertTrue(\$this->client->getResponse()->isRedirect(
            \$this->generateUrl('admin_login', [], UrlGeneratorInterface::ABSOLUTE_URL)));
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Tests/Web/Admin/LoginControllerTest.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Tests/Web/Admin/LoginControllerTest.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Tests/Web/Admin/LoginControllerTest.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
