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

/* ProductReview42/Tests/Web/ProductReviewConfigControllerTest.php */
class __TwigTemplate_17f1cd7891dc13917808a17624c6ad44 extends Template
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

namespace Plugin\\ProductReview42\\Tests\\Web;

use Eccube\\Tests\\Web\\Admin\\AbstractAdminWebTestCase;
use Faker\\Generator;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\HttpKernel\\Client;

/**
 * Class ProductReviewConfigControllerTest.
 */
class ProductReviewConfigControllerTest extends AbstractAdminWebTestCase
{
    /**
     * @var Generator
     */
    protected \$faker;

    /**
     * Setup method.
     */
    public function setUp(): void
    {
        parent::setUp();
        \$this->faker = \$this->getFaker();
    }

    /**
     * Config routing.
     */
    public function testRouting()
    {
        /**
         * @var Client
         */
        \$client = \$this->client;
        /**
         * @var Crawler
         */
        \$crawler = \$this->client->request('GET', \$this->generateUrl('product_review42_admin_config'));

        \$this->assertTrue(\$client->getResponse()->isSuccessful());

        \$min = \$this->eccubeConfig['product_review_display_count_min'];
        \$max = \$this->eccubeConfig['product_review_display_count_max'];
        \$this->assertStringContainsString('レビューの表示件数('.\$min.'〜'.\$max.')', \$crawler->html());
    }

    /**
     * Config submit.
     */
    public function testMin()
    {
        \$min = \$this->eccubeConfig['product_review_display_count_min'];
        /**
         * @var Client
         */
        \$client = \$this->client;
        /**
         * @var Crawler
         */
        \$crawler = \$this->client->request('GET', \$this->generateUrl('product_review42_admin_config'));

        \$this->assertTrue(\$client->getResponse()->isSuccessful());

        \$form = \$crawler->selectButton('登録')->form();

        \$form['product_review_config[review_max]'] = \$this->faker->numberBetween(-10, \$min - 1);
        \$crawler = \$client->submit(\$form);

        \$this->assertStringContainsString(\$min.'以上', \$crawler->html());
    }

    /**
     * Config submit.
     */
    public function testMax()
    {
        \$max = \$this->eccubeConfig['product_review_display_count_max'];
        /**
         * @var Client
         */
        \$client = \$this->client;
        /**
         * @var Crawler
         */
        \$crawler = \$this->client->request('GET', \$this->generateUrl('product_review42_admin_config'));

        \$this->assertTrue(\$client->getResponse()->isSuccessful());

        \$form = \$crawler->selectButton('登録')->form();

        \$form['product_review_config[review_max]'] = \$this->faker->numberBetween(\$max + 1, 100);
        \$crawler = \$client->submit(\$form);

        \$this->assertStringContainsString(\$max.'以下でなければなりません。', \$crawler->html());
    }

    /**
     * Config submit.
     */
    public function testSuccess()
    {
        \$min = \$this->eccubeConfig['product_review_display_count_min'];
        \$max = \$this->eccubeConfig['product_review_display_count_max'];
        /**
         * @var Client
         */
        \$client = \$this->client;
        /**
         * @var Crawler
         */
        \$crawler = \$this->client->request('GET', \$this->generateUrl('product_review42_admin_config'));

        \$this->assertTrue(\$client->getResponse()->isSuccessful());

        \$form = \$crawler->selectButton('登録')->form();

        \$form['product_review_config[review_max]'] = \$this->faker->numberBetween(\$min, \$max);
        \$crawler = \$client->submit(\$form);

        \$this->assertTrue(\$client->getResponse()->isRedirection(\$this->generateUrl('product_review42_admin_config')));

        \$crawler = \$client->followRedirect();
        \$this->assertStringContainsString('登録しました。', \$crawler->html());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ProductReview42/Tests/Web/ProductReviewConfigControllerTest.php";
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
        return new Source("", "ProductReview42/Tests/Web/ProductReviewConfigControllerTest.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/ProductReview42/Tests/Web/ProductReviewConfigControllerTest.php");
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
