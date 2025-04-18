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

/* Recommend42/Tests/Web/RecommendAdminControllerTest.php */
class __TwigTemplate_e54eaa7d0e1c5dc7479e67ebe9eb513d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recommend42/Tests/Web/RecommendAdminControllerTest.php"));

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

namespace Plugin\\Recommend42\\Tests\\Web;

use Eccube\\Common\\Constant;
use Eccube\\Entity\\Master\\ProductStatus;
use Eccube\\Entity\\Product;
use Eccube\\Repository\\Master\\ProductStatusRepository;
use Eccube\\Repository\\ProductRepository;
use Eccube\\Tests\\Web\\Admin\\AbstractAdminWebTestCase;
use Plugin\\Recommend42\\Entity\\RecommendProduct;
use Plugin\\Recommend42\\Repository\\RecommendProductRepository;


/**
 * Class RecommendAdminControllerTest.
 */
class RecommendAdminControllerTest extends AbstractAdminWebTestCase
{
    protected \$Recommend1;
    protected \$Recommend2;
    /**
     * @var ProductRepository
     */
    protected \$productRepo;

    /**
     * @var RecommendProductRepository
     */
    private \$recommendProductRepository;

    /**
     * please ensure have 1 or more order in database before testing.
     */
    public function setUp(): void
    {
        parent::setUp();
        \$this->deleteAllRows(['plg_recommend_product']);

        \$this->productRepo = \$this->entityManager->getRepository(Product::class);
        \$this->recommendProductRepository = \$this->entityManager->getRepository(RecommendProduct::class);

        // recommend for product 1 with rank 1
        \$this->Recommend1 = \$this->initRecommendData(1, 1);
        // recommend for product 2 with rank 2
        \$this->Recommend2 = \$this->initRecommendData(2, 2);
    }

    /**
     * testRecommendList
     * none recommend.
     */
    public function testRecommendListEmpty()
    {
        \$this->deleteAllRows(['plg_recommend_product']);
        \$crawler = \$this->client->request('GET', \$this->generateUrl('plugin_recommend_list'));
        \$this->assertStringContainsString('0 件', \$crawler->html());
    }

    /**
     * testRecommendList
     * none recommend.
     */
    public function testRecommendList()
    {
        \$this->deleteAllRows(['plg_recommend_product']);
        for (\$i = 1; \$i < 12; ++\$i) {
            \$Product = \$this->createProduct();
            \$this->initRecommendData(\$Product->getId(), \$i);
        }

        \$crawler = \$this->client->request('GET', \$this->generateUrl('plugin_recommend_list'));
        \$this->assertStringContainsString('11 件', \$crawler->html());
    }

    /**
     * testRecommendCreate.
     */
    public function testRecommendCreate()
    {
        \$crawler = \$this->client->request('GET', \$this->generateUrl('plugin_recommend_new'));
        \$this->assertStringContainsString('おすすめ商品管理', \$crawler->html());
    }

    /**
     * testRecommendNew.
     */
    public function testRecommendNewEmpty()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_new'),
            ['recommend_product' => [
                '_token' => 'dummy',
                'comment' => '',
                'Product' => '',
            ],
            ]
        );

        \$this->assertStringContainsString('入力されていません。', \$crawler->filter('.card-body')->html());
        \$this->assertStringContainsString('商品を追加してください。', \$crawler->filter('.card-body')->html());
    }

    /**
     * testRecommendNew.
     */
    public function testRecommendNewProduct()
    {
        \$productId = 1;
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_new'),
            ['recommend_product' => [
                '_token' => 'dummy',
                'comment' => '',
                'Product' => \$productId,
            ],
            ]
        );

        \$this->assertStringContainsString('入力されていません。', \$crawler->filter('.card-body')->html());
    }

    /**
     * testRecommendNew.
     */
    public function testRecommendNewComment()
    {
        \$fake = \$this->getFaker();
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_new'),
            ['recommend_product' => [
                '_token' => 'dummy',
                'comment' => \$fake->word,
                'Product' => '',
            ],
            ]
        );

        \$this->assertStringContainsString('商品を追加してください。', \$crawler->filter('.card-body')->html());
    }

    /**
     * testRecommendNewComment4002.
     */
    public function testRecommendNewCommentOver()
    {
        \$fake = \$this->getFaker();
        \$productId = 1;
        \$editMessage = \$fake->text(99999);
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_new'),
            ['recommend_product' => [
                '_token' => 'dummy',
                'comment' => \$editMessage,
                'Product' => \$productId,
            ],
            ]
        );

        \$this->assertStringContainsString('値が長すぎます。4000文字以内でなければなりません。', \$crawler->filter('.card-body')->html());
    }

    /**
     * testRecommendNew.
     */
    public function testRecommendNew()
    {
        \$this->deleteAllRows(['plg_recommend_product']);
        \$fake = \$this->getFaker();
        \$productId = 1;
        \$editMessage = \$fake->word;
        \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_new'),
            ['recommend_product' => [
                '_token' => 'dummy',
                'comment' => \$editMessage,
                'Product' => \$productId,
            ],
            ]
        );

        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_recommend_list')));
        \$ProductNew = \$this->getRecommend(\$productId);

        \$this->expected = \$editMessage;
        \$this->actual = \$ProductNew->getComment();
        \$this->verify();
    }

    /**
     * RecommendSearchModelController.
     */
    public function testAjaxSearchPublicProduct()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_search_product', ['id' => '', 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString('彩のジェラートCUBE', \$productList);
    }

    /**
     * RecommendSearchModelController.
     */
    public function testAjaxSearchUnpublicProduct()
    {
        /** @var Product \$Product */
        \$Product = \$this->productRepo->findOneBy(['name' => '彩のジェラートCUBE']);
        \$Product->setStatus(\$this->entityManager->getRepository(ProductStatus::class)->find(ProductStatus::DISPLAY_HIDE));
        \$this->entityManager->persist(\$Product);
        \$this->entityManager->flush(\$Product);

        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_search_product', ['id' => '彩のジェラートCUBE', 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString('彩のジェラートCUBE', \$productList);
    }

    /**
     * RecommendSearchModelController.
     */
    public function testAjaxSearchProductValueCode()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_search_product', ['id' => '\tcube-01', 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString('彩のジェラートCUBE', \$productList);
    }

    /**
     * RecommendSearchModelController.
     */
    public function testAjaxSearchProductValueId()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_search_product', ['id' => 1, 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString('彩のジェラートCUBE', \$productList);
    }

    /**
     * RecommendSearchModelController.
     */
    public function testAjaxSearchProductCategory()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_search_product', ['id' => '', 'category_id' => 3, '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString('彩のジェラートCUBE', \$productList);
    }

    /**
     * testRecommendEditShow.
     */
    public function testRecommendEditShow()
    {
        \$recommendId = \$this->Recommend2->getId();

        \$crawler = \$this->client->request('GET', \$this->generateUrl('plugin_recommend_edit', ['id' => \$recommendId]));

        \$this->assertStringContainsString(\$this->Recommend2->getProduct()->getName(), \$crawler->html());
    }

    /**
     * testRecommendEdit.
     */
    public function testRecommendEdit()
    {
        \$fake = \$this->getFaker();
        \$productId = 2;
        \$recommendId = \$this->Recommend2->getId();
        \$editMessage = \$fake->word;

        \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_edit', ['id' => \$recommendId]),
            [
                'recommend_product' => [
                    '_token' => 'dummy',
                    'comment' => \$editMessage,
                    'id' => \$recommendId,
                    'Product' => \$productId,
                ],
            ]
        );
        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_recommend_list')));
        \$ProductNew = \$this->getRecommend(\$productId);

        \$this->expected = \$editMessage;
        \$this->actual = \$ProductNew->getComment();
        \$this->verify();
    }

    /**
     * testRecommendEditExit
     * change from product 2 to product 1.
     */
    public function testRecommendEditExist()
    {
        \$fake = \$this->getFaker();
        \$productId = 1;
        //recommend of product 2
        \$recommendId = \$this->Recommend2->getId();
        \$editMessage = \$fake->word;

        \$this->client->request(
            'POST',
            \$this->generateUrl('plugin_recommend_edit', ['id' => \$recommendId]),
            [
                'recommend_product' => [
                    '_token' => 'dummy',
                    'comment' => \$editMessage,
                    'id' => \$recommendId,
                    'Product' => \$productId,
                ],
            ]
        );
        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_recommend_list')));
    }

    /**
     * testRecommendDelete.
     */
    public function testRecommendDelete()
    {
        \$recommendId = \$this->Recommend1->getId();
        \$this->client->request(
            'DELETE',
            \$this->generateUrl('plugin_recommend_delete', ['id' => \$recommendId])
        );
        \$this->assertTrue(\$this->client->getResponse()->isRedirect(\$this->generateUrl('plugin_recommend_list')));
        \$ProductNew = \$this->recommendProductRepository->find(\$recommendId);

        \$this->expected = Constant::DISABLED;
        \$this->actual = \$ProductNew->getVisible();
        \$this->verify();
    }

    /**
     * @param \$productId
     *
     * @return mixed
     */
    private function getRecommend(\$productId)
    {
        \$Product = \$this->productRepo->find(\$productId);

        return \$this->recommendProductRepository->findOneBy(['Product' => \$Product]);
    }

    /**
     * @param \$productId
     * @param \$rank
     *
     * @return \\Plugin\\Recommend42\\Entity\\RecommendProduct
     */
    private function initRecommendData(\$productId, \$rank)
    {
        \$dateTime = new \\DateTime();
        \$fake = \$this->getFaker();

        \$Recommend = new \\Plugin\\Recommend42\\Entity\\RecommendProduct();
        \$Recommend->setComment(\$fake->word);
        \$Recommend->setProduct(\$this->productRepo->find(\$productId));
        \$Recommend->setSortno(\$rank);
        \$Recommend->setVisible(true);
        \$Recommend->setCreateDate(\$dateTime);
        \$Recommend->setUpdateDate(\$dateTime);
        \$this->entityManager->persist(\$Recommend);
        \$this->entityManager->flush();

        return \$Recommend;
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
        return "Recommend42/Tests/Web/RecommendAdminControllerTest.php";
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
        return new Source("", "Recommend42/Tests/Web/RecommendAdminControllerTest.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Recommend42/Tests/Web/RecommendAdminControllerTest.php");
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
