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

/* ProductReview42/Tests/Web/ReviewControllerTest.php */
class __TwigTemplate_0cfee844c661afa57553fefb0938fc4a extends Template
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

use Eccube\\Entity\\Master\\Sex;
use Eccube\\Entity\\Product;
use Eccube\\Repository\\Master\\ProductStatusRepository;
use Eccube\\Repository\\Master\\SexRepository;
use Eccube\\Repository\\ProductRepository;
use Eccube\\Tests\\Web\\AbstractWebTestCase;
use Faker\\Generator;
use Plugin\\ProductReview42\\Entity\\ProductReview;
use Plugin\\ProductReview42\\Entity\\ProductReviewStatus;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;


/**
 * Class ReviewControllerTest front.
 */
class ReviewControllerTest extends AbstractWebTestCase
{
    /**
     * @var Generator
     */
    protected \$faker;

    /**
     * @var ProductRepository
     */
    protected \$productRepo;

    /**
     * @var SexRepository
     */
    protected \$sexMasterRepo;

    /**
     * @var ProductStatusRepository
     */
    protected \$productStatusRepo;

    /**
     * Setup method.
     */
    public function setUp(): void
    {
        parent::setUp();
        \$this->faker = \$this->getFaker();
        \$this->deleteAllRows(['plg_product_review']);

        \$this->productRepo = \$this->entityManager->getRepository(Product::class);
        \$this->sexMasterRepo = \$this->entityManager->getRepository(Sex::class);
        \$this->productReviewRepo = \$this->entityManager->getRepository(ProductReview::class);
    }

    /**
     * Add product review.
     */
    public function testProductReviewAddConfirmComplete()
    {
        \$productId = 1;
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('product_review_index', ['id' => \$productId]),
            [
                'product_review' => [
                    'comment' => \$this->faker->text(2999),
                    'title' => \$this->faker->word,
                    'sex' => 1,
                    'recommend_level' => \$this->faker->numberBetween(1, 5),
                    'reviewer_url' => \$this->faker->url,
                    'reviewer_name' => \$this->faker->word,
                    '_token' => 'dummy',
                ],
                'mode' => 'confirm',
            ]
        );
        \$this->assertStringContainsString('投稿する', \$crawler->html());

        // Complete
        \$form = \$crawler->selectButton('投稿する')->form();
        \$this->client->submit(\$form);

        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('product_review_complete', ['id' => \$productId])));

        // Verify back to product detail link.
        /**
         * @var Crawler
         */
        \$crawler = \$this->client->followRedirect();
        \$link = \$crawler->selectLink('商品ページへ戻る')->link();

        \$this->actual = \$link->getUri();

        \$this->expected = \$this->generateUrl('product_detail', ['id' => \$productId], UrlGeneratorInterface::ABSOLUTE_URL);
        \$this->verify();
    }

    /**
     * Back test.
     */
    public function testProductReviewAddConfirmBack()
    {
        \$productId = 1;
        \$inputForm = [
            'comment' => \$this->faker->text(2999),
            'title' => \$this->faker->word,
            'sex' => 1,
            'recommend_level' => \$this->faker->numberBetween(1, 5),
            'reviewer_url' => \$this->faker->url,
            'reviewer_name' => \$this->faker->word,
            '_token' => 'dummy',
        ];
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('product_review_index', ['id' => \$productId]),
            ['product_review' => \$inputForm,
                'mode' => 'confirm',
            ]
        );
        \$this->assertStringContainsString('投稿する', \$crawler->html());

        // Back click
        \$form = \$crawler->selectButton('戻る')->form();
        \$crawlerConfirm = \$this->client->submit(\$form);
        \$html = \$crawlerConfirm->html();
        \$this->assertStringContainsString('確認ページへ', \$html);

        // Verify data
        \$this->assertStringContainsString(\$inputForm['comment'], \$html);
    }

//    /**
//     * review list.
//     */
    /*public function testProductReview()
    {
        \$productId = 1;
        \$ProductReview = \$this->createProductReviewData(\$productId);
        \$crawler = \$this->client->request(
            'GET',
            \$this->generateUrl('product_detail', ['id' => \$productId])
        );

        \$codeStatus = \$this->client->getResponse()->getStatusCode();

        // review area
        \$this->assertStringContainsString('id=\"product_review_area\"', \$crawler->html());

        // review content
        \$reviewArea = \$crawler->filter('#product_review_area');
        \$this->assertStringContainsString(\$ProductReview->getComment(), \$reviewArea->html());

        // review total
        \$totalNum = \$reviewArea->filter('.heading02')->html();
        \$this->assertStringContainsString('1', \$totalNum);
    }*/

    /**
     * review list.
     */
    public function testProductReviewMaxNumber()
    {
        \$max = 31;
        \$Product = \$this->createProduct();
        \$productId = \$Product->getId();
        \$this->createProductReviewByNumber(\$max, \$productId);
        \$crawler = \$this->client->request(
            'GET',
            \$this->generateUrl('product_detail', ['id' => \$productId])
        );

        // review area
        \$this->assertStringContainsString('id=\"product_review_area\"', \$crawler->html());

        // review content
        \$reviewArea = \$crawler->filter('#product_review_area');

        // review total
        \$totalHtml = \$reviewArea->filter('.ec-rectHeading')->html();
        \$this->assertStringContainsString((string) \$max, \$totalHtml);
    }

    /**
     * @param \$number
     * @param int \$productId
     */
    private function createProductReviewByNumber(\$number, \$productId = 1)
    {
        \$Product = \$this->productRepo->find(\$productId);
        if (!\$Product) {
            \$Product = \$this->createProduct();
        }

        for (\$i = 0; \$i < \$number; ++\$i) {
            \$this->createProductReviewData(\$Product);
        }
    }

    /**
     * Create data.
     *
     * @param int|Product \$product
     *
     * @return ProductReview
     */
    private function createProductReviewData(\$product = 1)
    {
        if (\$product instanceof Product) {
            \$Product = \$product;
        } else {
            \$Product = \$this->productRepo->find(\$product);
        }

        \$Display = \$this->entityManager->find(ProductReviewStatus::class, ProductReviewStatus::SHOW);
        \$Sex = \$this->sexMasterRepo->find(1);
        \$Customer = \$this->createCustomer();

        \$Review = new ProductReview();
        \$Review->setComment(\$this->faker->word);
        \$Review->setTitle(\$this->faker->word);
        \$Review->setProduct(\$Product);
        \$Review->setRecommendLevel(\$this->faker->numberBetween(1, 5));
        \$Review->setReviewerName(\$this->faker->word);
        \$Review->setReviewerUrl(\$this->faker->url);
        \$Review->setStatus(\$Display);
        \$Review->setSex(\$Sex);
        \$Review->setCustomer(\$Customer);

        \$this->entityManager->persist(\$Review);
        \$this->entityManager->flush(\$Review);

        return \$Review;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ProductReview42/Tests/Web/ReviewControllerTest.php";
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
        return new Source("", "ProductReview42/Tests/Web/ReviewControllerTest.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/ProductReview42/Tests/Web/ReviewControllerTest.php");
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
