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

/* MailMagazine42/Tests/Web/Admin/MailMagazineControllerTest.php */
class __TwigTemplate_9a307df1fd589ac49f0be7a89860b6a4 extends Template
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

use Plugin\\MailMagazine42\\Tests\\Web\\MailMagazineCommon;

class MailMagazineControllerTest extends MailMagazineCommon
{
    /**
     * Test routing.
     */
    public function testRoutingMailMagazine()
    {
        \$this->client->request('GET',
            \$this->generateUrl('plugin_mail_magazine')
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testMailMagazineSearchWithBirthmonthLowOctorber()
    {
        \$MaiCustomer = \$this->createMailMagazineCustomer();
        //test search with birth month < 10
        \$MaiCustomer->setBirth(new \\DateTime('2016-09-19 23:59:59'));
        \$this->entityManager->persist(\$MaiCustomer);
        \$this->entityManager->flush();
        \$birth_month = \$MaiCustomer->getBirth()->format('n');
        \$searchForm = \$this->createSearchForm(\$MaiCustomer, \$birth_month);
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine'),
            ['mail_magazine' => \$searchForm]
        );
        \$this->assertStringContainsString('検索結果：1件が該当しました', \$crawler->filter('.c-outsideBlock__contents.mb-5 > span')->text());
    }

    public function testMailMagazineSearchWithBirthmonthHightOctorber()
    {
        \$MaiCustomer = \$this->createMailMagazineCustomer();
        //test search with birth month > 10
        \$MaiCustomer->setBirth(new \\DateTime('2016-11-19 23:59:59'));
        \$this->entityManager->persist(\$MaiCustomer);
        \$this->entityManager->flush();
        //because 誕生月 select box value start from 0. We need minus 1
        \$birth_month = \$MaiCustomer->getBirth()->format('n');
        \$searchForm = \$this->createSearchForm(\$MaiCustomer, \$birth_month);
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine'),
            ['mail_magazine' => \$searchForm]
        );
        \$this->assertStringContainsString('検索結果：1件が該当しました', \$crawler->filter('.c-outsideBlock__contents.mb-5 > span')->text());
    }

    public function testMailMagazineSearchWithBirthmonthNull()
    {
        \$MaiCustomer = \$this->createMailMagazineCustomer();
        \$searchForm = \$this->createSearchForm(\$MaiCustomer);
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine'),
            ['mail_magazine' => \$searchForm]
        );
        \$this->assertStringContainsString('検索結果：1件が該当しました', \$crawler->filter('.c-outsideBlock__contents.mb-5 > span')->text());
    }

    public function testSelect()
    {
        \$MailTemplate = \$this->createMagazineTemplate();

        \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine_select', ['id' => \$MailTemplate->getId()]),
            ['mail_magazine' => [
                'template' => \$MailTemplate->getId(),
                'subject' => \$MailTemplate->getSubject(),
                'body' => \$MailTemplate->getBody(),
                '_token' => 'dummy',
            ]]
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testSelect_NotPost()
    {
        \$MailTemplate = \$this->createMagazineTemplate();
        \$this->client->request(
            'GET',
            \$this->generateUrl('plugin_mail_magazine_select', ['id' => \$MailTemplate->getId()]),
            ['mail_magazine' => [
                'template' => \$MailTemplate->getId(),
                'subject' => \$MailTemplate->getSubject(),
                'body' => \$MailTemplate->getBody(),
                '_token' => 'dummy',
            ]]
        );
        \$this->assertEquals(405, \$this->client->getResponse()->getStatusCode());
    }

    public function testConfirm_InValid()
    {
        \$MailTemplate = \$this->createMagazineTemplate();

        \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine_select', ['id' => \$MailTemplate->getId()]),
            ['mail_magazine' => [
                'template' => \$MailTemplate->getId(),
                'subject' => \$MailTemplate->getSubject(),
                'body' => \$MailTemplate->getBody(),
                'mode' => 'confirm',
                '_token' => 'dummy',
            ]]
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testConfirm()
    {
        \$MailTemplate = \$this->createMagazineTemplate();

        \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine_select', ['id' => \$MailTemplate->getId()]),
            ['mail_magazine' => [
                'id' => \$MailTemplate->getId(),
                'template' => \$MailTemplate->getId(),
                'subject' => \$MailTemplate->getSubject(),
                'body' => \$MailTemplate->getBody(),
                'mode' => 'confirm',
                '_token' => 'dummy',
            ]]
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testPrepare()
    {
//        \$this->initializeMailCatcher();
        \$MailTemplate = \$this->createMagazineTemplate();
        \$MaiCustomer = \$this->createMailMagazineCustomer();
        \$searchForm = \$this->createSearchForm(\$MaiCustomer);
        \$searchForm['template'] = \$MailTemplate->getId();
        \$searchForm['subject'] = \$MailTemplate->getSubject();
        \$searchForm['body'] = \$MailTemplate->getBody();

        \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine_prepare', ['id' => \$MailTemplate->getId()]),
            ['mail_magazine' => \$searchForm]
        );

        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_mail_magazine_history')));

//        \$Messages = \$this->getMailCatcherMessages();
//        \$Message = \$this->getMailCatcherMessage(\$Messages[0]->id);
//
//        \$this->expected = \$searchForm['subject'];
//        \$this->actual = \$Message->subject;
//        \$this->verify();
//        \$this->cleanUpMailCatcherMessages();
    }

    public function testPagination()
    {
        for (\$i = 0; \$i < 30; ++\$i) {
            \$this->createMailMagazineCustomer();
        }
        \$searchForm = [
            '_token' => 'dummy',
            'sex' => ['1'],
            'multi' => '',
            'customer_status' => [],
            'birth_month' => '',
            'birth_start' => '',
            'birth_end' => '',
            'pref' => '',
            'phone_number' => '',
            'create_date_start' => '',
            'create_date_end' => '',
            'update_date_start' => '',
            'update_date_end' => '',
            'buy_total_start' => '',
            'buy_total_end' => '',
            'buy_times_start' => '',
            'buy_times_end' => '',
            'buy_product_name' => '',
            'last_buy_start' => '',
            'last_buy_end' => '',
        ];
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_mail_magazine'),
            ['mail_magazine' => \$searchForm]
        );

        \$pageNumber = \$crawler->filter('.c-outsideBlock__contents.mb-5 > span')->html();
        \$this->assertMatchesRegularExpression('/件/', \$pageNumber);

        //pagination
        \$crawler = \$this->client->request(
            'GET',
            \$this->generateUrl('plugin_mail_magazine_page', ['page_no' => '2'])
        );

        //check result
        \$pageNumber = \$crawler->filter('.c-outsideBlock__contents.mb-5 > span')->html();
        \$this->assertMatchesRegularExpression('/件/', \$pageNumber);

        //check search condition
        \$sexCheckbox = \$crawler->filter('#mail_magazine_sex_1:checked')->count();
        \$this->assertEquals(1, \$sexCheckbox);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Tests/Web/Admin/MailMagazineControllerTest.php";
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
        return new Source("", "MailMagazine42/Tests/Web/Admin/MailMagazineControllerTest.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/MailMagazine42/Tests/Web/Admin/MailMagazineControllerTest.php");
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
