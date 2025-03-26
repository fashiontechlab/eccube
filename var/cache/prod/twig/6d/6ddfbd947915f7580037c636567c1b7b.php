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

/* MailMagazine42/Tests/Web/Admin/MailMagazineTemplateControllerTest.php */
class __TwigTemplate_fe489e4c64827fcf4c321f253eb0977e extends Template
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

namespace Plugin\\MailMagazine42\\Tests\\Web\\Admin;

use Plugin\\MailMagazine42\\Entity\\MailMagazineTemplate;
use Plugin\\MailMagazine42\\Tests\\Web\\MailMagazineCommon;
use Eccube\\Repository\\MailTemplateRepository;
use Plugin\\MailMagazine42\\Repository\\MailMagazineTemplateRepository;

class MailMagazineTemplateControllerTest extends MailMagazineCommon
{
    /**
     * @var MailMagazineTemplate
     */
    protected \$mailMagaTemplateRepository;

    public function setUp(): void
    {
        parent::setUp();
        \$this->mailMagaTemplateRepository = \$this->entityManager->getRepository(MailMagazineTemplate::class);
    }

    protected function createFormData()
    {
        \$fake = \$this->getFaker();

        return [
            'subject' => \$fake->word,
            'body' => \$fake->word,
            'htmlBody' => \$fake->word,
            '_token' => 'dummy',
        ];
    }

    /**
     * Test routing.
     */
    public function testRoutingMailMagazineTemplate()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_template')
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testRegist()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_template_regist')
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testEdit()
    {
        \$MailTemplate = \$this->createMagazineTemplate();

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_edit', ['id' => \$MailTemplate->getId()])
        );

        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testEdit_IdIsNull()
    {
        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_edit', ['id' => null])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testEdit_IdIncorrect()
    {
        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_edit', ['id' => 9999999])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testEdit_NotPost()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_template_edit', ['id' => null])
        );
        \$this->assertEquals(404, \$this->client->getResponse()->getStatusCode());
    }

    public function testCommit_FormInvalid()
    {
        \$form = \$this->createFormData();
        unset(\$form['subject']);

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_commit'),
            ['mail_magazine_template_edit' => \$form]
        );
        \$this->assertTrue(true);
    }

    public function testCommitEdit_IdIncorrect()
    {
        \$form = \$this->createFormData();

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_commit', ['id' => 9999999]),
            ['mail_magazine_template_edit' => \$form]
        );
        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_mail_magazine_template')));
    }

    public function testCommitEdit_IdIsZero()
    {
        \$form = \$this->createFormData();

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_commit', ['id' => 0]),
            ['mail_magazine_template_edit' => \$form]
        );
        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_mail_magazine_template')));
    }

    public function testCommitRegist()
    {
        \$form = \$this->createFormData();

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_commit'),
            ['mail_magazine_template_edit' => \$form]
        );

        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_mail_magazine_template')));
        \$MailTemplate = \$this->mailMagaTemplateRepository->findOneBy(['subject' => \$form['subject']]);
        \$this->actual = \$MailTemplate->getBody();
        \$this->expected = \$form['body'];
        \$this->verify();
    }

    public function testCommitEdit()
    {
        \$MailTemplate = \$this->createMagazineTemplate();

        \$form = \$this->createFormData();

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_commit', ['id' => \$MailTemplate->getId()]),
            ['mail_magazine_template_edit' => \$form]
        );

        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_mail_magazine_template')));

        \$this->actual = \$MailTemplate->getSubject();
        \$this->expected = \$form['subject'];
        \$this->verify();
    }

    public function testPreview()
    {
        \$MailTemplate = \$this->createMagazineTemplate();

        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_template_preview', ['id' => \$MailTemplate->getId()])
        );

        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testPreview_IdIsNull()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_template_preview', ['id' => null])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testPreview_IdIncorrect()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine_template_preview', ['id' => 9999999])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testDelete()
    {
        \$MailTemplate = \$this->createMagazineTemplate();

        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_delete', ['id' => \$MailTemplate->getId()])
        );

        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_mail_magazine_template')));
    }

    public function testDelete_IdIsNull()
    {
        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_delete', ['id' => null])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testDelete_IdIncorrect()
    {
        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_delete', ['id' => 9999999])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }

    public function testDelete_IdIsZero()
    {
        \$this->client->request('POST',
            \$this->generateUrl('plugin_mail_magazine_template_delete', ['id' => 0])
        );

        \$this->assertTrue(\$this->client->getResponse()->isNotFound());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Tests/Web/Admin/MailMagazineTemplateControllerTest.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Tests/Web/Admin/MailMagazineTemplateControllerTest.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/MailMagazine42/Tests/Web/Admin/MailMagazineTemplateControllerTest.php");
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
