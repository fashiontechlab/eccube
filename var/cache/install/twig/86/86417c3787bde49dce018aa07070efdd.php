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

/* RelatedProduct42/Tests/Web/RelatedProductAdminControllerTest.php */
class __TwigTemplate_f30b0f29846b7451f1f47cae9a8e0af3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "RelatedProduct42/Tests/Web/RelatedProductAdminControllerTest.php"));

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

namespace Plugin\\RelatedProduct\\Tests\\Web;

use Eccube\\Tests\\Web\\Admin\\AbstractAdminWebTestCase;
use Plugin\\RelatedProduct42\\Entity\\RelatedProduct;
use Eccube\\Repository\\ProductRepository;
use Plugin\\RelatedProduct42\\Repository\\RelatedProductRepository;
use Eccube\\Entity\\Master\\ProductStatus;
use Eccube\\Repository\\Master\\ProductStatusRepository;
use Eccube\\Common\\Constant;
use Eccube\\Entity\\Product;
use Eccube\\Entity\\ProductCategory;

/**
 * Class RelatedProductAdminControllerTest.
 */
class RelatedProductAdminControllerTest extends AbstractAdminWebTestCase
{
    /**
     * @var ProductRepository
     */
    protected \$productRepository;

    /**
     * @var RelatedProductRepository
     */
    protected \$relatedProductRepository;

    /**
     * @var ProductStatusRepository
     */
    protected \$productStatusRepository;

    /**
     * @var Product
     */
    protected \$Product;

    /**
     * @var ProductCategory
     */
    protected \$Category;

    /**
     * call parent setUp.
     */
    public function setUp(): void
    {
        parent::setUp();
        \$this->deleteAllRows(['plg_related_product']);

        \$this->productRepository = \$this->entityManager->getRepository(Product::class);
        \$this->relatedProductRepository = \$this->entityManager->getRepository(RelatedProduct::class);
        \$this->productStatusRepository = \$this->entityManager->getRepository(ProductStatus::class);

        \$this->Product = \$this->createProduct('ディナーフォーク');
        \$this->Category = \$this->Product->getProductCategories()->current();
    }

    /**
     * test route product edit page.
     */
    public function testRoutingAdminProductRegistration()
    {
        \$crawler = \$this->client->request('GET', \$this->generateUrl('admin_product_product_new'));

        \$this->assertStringContainsString('関連商品', \$crawler->html());
    }

    /**
     * test create related product.
     */
    public function testCreateRelatedProduct()
    {
        \$faker = \$this->getFaker();
        \$content = \$faker->word;
        \$childProductId = 1;
        \$formData = \$this->createFormData(\$content, \$childProductId);

        \$this->client->request(
            'POST',
            \$this->generateUrl('admin_product_product_new'),
            ['admin_product' => \$formData]
        );
        \$ChildProduct = \$this->productRepository->find(\$childProductId);
        \$RelatedProduct = \$this->relatedProductRepository->findOneBy([
            'content' => \$content,
            'ChildProduct' => \$ChildProduct,
        ]);

        \$this->expected = \$childProductId;
        \$this->actual = \$RelatedProduct->getChildProduct()->getId();
        \$this->verify();
    }

    /**
     * test update related product.
     */
    public function testUpdateRelatedProduct()
    {
        \$this->initRelatedProduct(2);
        \$formData = \$this->createFormData();
        \$content = \$formData['RelatedProducts'][0]['content'];
        \$childProductId = \$formData['RelatedProducts'][0]['ChildProduct'];

        \$this->client->request(
            'POST',
            \$this->generateUrl('admin_product_product_edit', ['id' => 2]),
            ['admin_product' => \$formData]
        );

        \$ChildProduct = \$this->productRepository->find(\$childProductId);
        \$RelatedProduct = \$this->relatedProductRepository->findOneBy([
            'content' => \$content,
            'ChildProduct' => \$ChildProduct,
        ]);

        \$this->expected = \$content;
        \$this->actual = \$RelatedProduct->getContent();
        \$this->verify();
    }

    /**
     * test create related product with no child product.
     */
    public function testCreateRelatedProductNoChildProduct()
    {
        \$faker = \$this->getFaker();
        \$content = \$faker->word;
        \$childProductId = null;
        \$formData = \$this->createFormData(\$content, \$childProductId);

        \$this->client->request(
            'POST',
            \$this->generateUrl('admin_product_product_new'),
            ['admin_product' => \$formData]
        );

        \$RelatedProduct = \$this->relatedProductRepository->findOneBy(['content' => \$content]);

        \$this->assertNull(\$RelatedProduct);
    }

    /**
     * test create related product with no content.
     */
    public function testCreateRelatedProductNoContent()
    {
        \$content = null;
        \$childProductId = 1;
        \$formData = \$this->createFormData(\$content, \$childProductId);

        \$this->client->request(
            'POST',
            \$this->generateUrl('admin_product_product_new'),
            ['admin_product' => \$formData]
        );

        \$ChildProduct = \$this->productRepository->find(\$childProductId);
        \$RelatedProduct = \$this->relatedProductRepository->findOneBy(['ChildProduct' => \$ChildProduct]);

        \$this->expected = \$childProductId;
        \$this->actual = \$RelatedProduct->getChildProduct()->getId();
        \$this->verify();
    }

    /**
     * test create related product with content over 4000 character.
     */
    public function testCreateRelatedProductNoMaxLengthContent()
    {
        \$faker = \$this->getFaker();
        \$content = \$faker->text(9999);
        \$childProductId = 1;
        \$formData = \$this->createFormData(\$content, \$childProductId);

        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_product_product_new'),
            ['admin_product' => \$formData]
        );

        \$this->assertStringContainsString('値が長すぎます。4000文字以内でなければなりません。', \$crawler->html());
    }

    /**
     * test related product maximum 5 items.
     */
    public function testRelatedProductMaximum5()
    {
        for (\$i = 1; \$i < 6; ++\$i) {
            \$this->initRelatedProduct(2);
        }
        \$this->client->request(
            'GET',
            \$this->generateUrl('admin_product_product_edit', ['id' => 2])
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    /**
     * test related product over maximum 5 items.
     */
    public function testRelatedProductOverMaximum5()
    {
        for (\$i = 1; \$i < 10; ++\$i) {
            \$this->initRelatedProduct(2);
        }
        \$this->client->request(
            'GET',
            \$this->generateUrl('admin_product_product_edit', ['id' => 2])
        );
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    /**
     * search with none condition.
     */
    public function testAjaxSearchProductEmpty()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_related_product_search', ['id' => '', 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString(\$this->Product->getName(), \$productList);
    }

    /**
     *  test display public product.
     */
    public function testAjaxSearchPublicProduct()
    {
        \$ProductStatus = \$this->productStatusRepository->find(ProductStatus::DISPLAY_SHOW);
        \$Product = \$this->productRepository->findOneBy(['name' => \$this->Product->getName()]);
        \$Product->setStatus(\$ProductStatus);
        \$this->entityManager->persist(\$Product);
        \$this->entityManager->flush();

        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_related_product_search', ['id' => '', 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString(\$this->Product->getName(), \$productList);
    }

    /**
     * test display unpublic product.
     */
    public function testAjaxSearchUnpublicProduct()
    {
        \$ProductStatus = \$this->productStatusRepository->find(ProductStatus::DISPLAY_HIDE);
        \$Product = \$this->productRepository->findOneBy(['name' => \$this->Product->getName()]);
        \$Product->setStatus(\$ProductStatus);
        \$this->entityManager->persist(\$Product);
        \$this->entityManager->flush();

        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_related_product_search', ['id' => '', 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString(\$this->Product->getName(), \$productList);
    }

    /**
     * search product name.
     */
    public function testAjaxSearchProductName()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_related_product_search', ['id' => \$this->Product->getName(), 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString(\$this->Product->getName(), \$productList);
    }

    /**
     * search by product code.
     */
    public function testAjaxSearchProductValueCode()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_related_product_search', ['id' => \$this->Product->getId(), 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString(\$this->Product->getName(), \$productList);
    }

    /**
     * search by product id.
     */
    public function testAjaxSearchProductValueId()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_related_product_search', ['id' => \$this->Product->getId(), 'category_id' => '', '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString(\$this->Product->getName(), \$productList);
    }

    /**
     * search by category.
     */
    public function testAjaxSearchProductCategory()
    {
        \$crawler = \$this->client->request(
            'POST',
            \$this->generateUrl('admin_related_product_search', ['id' => '', 'category_id' => \$this->Category->getCategoryId(), '_token' => 'dummy']),
            [],
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        \$productList = \$crawler->html();
        \$this->assertStringContainsString(\$this->Product->getName(), \$productList);
    }

    /**
     * create form data for save related product.
     *
     * @param string \$content
     * @param int \$childId
     *
     * @return array
     */
    public function createFormData(\$content = null, \$childId = 1)
    {
        \$faker = \$this->getFaker();

        \$price01 = \$faker->randomNumber(5);
        if (mt_rand(0, 1)) {
            \$price01 = number_format(\$price01);
        }

        \$price02 = \$faker->randomNumber(5);
        if (mt_rand(0, 1)) {
            \$price02 = number_format(\$price02);
        }

        \$form = [
            'class' => [
                'sale_type' => 1,
                'price01' => \$price01,
                'price02' => \$price02,
                'stock' => \$faker->randomNumber(3),
                'stock_unlimited' => 0,
                'code' => \$faker->word,
                'sale_limit' => null,
                'delivery_duration' => '',
            ],
            'name' => \$faker->word,
            'product_image' => [],
            'description_detail' => \$faker->realText,
            'description_list' => \$faker->paragraph,
            'Category' => [1],
            'Tag' => [1],
            'search_word' => \$faker->word,
            'free_area' => \$faker->realText,
            'Status' => 1,
            'note' => \$faker->realText,
            'tags' => [],
            'images' => [],
            'add_images' => [],
            'delete_images' => [],
            'RelatedProducts' => [
                0 => ['ChildProduct' => \$childId, 'content' => \$content],
            ],
            Constant::TOKEN_NAME => 'dummy',
        ];

        return \$form;
    }

    /**
     * insert related product in DB.
     *
     * @param \$id
     *
     * @return RelatedProduct
     */
    private function initRelatedProduct(\$id)
    {
        \$fake = \$this->getFaker();
        \$Product = \$this->productRepository->find(\$id);
        \$RelatedProduct = new RelatedProduct();
        \$RelatedProduct->setContent(\$fake->word);
        \$RelatedProduct->setProduct(\$Product);
        \$RelatedProduct->setChildProduct(\$Product);
        \$this->entityManager->persist(\$RelatedProduct);
        \$this->entityManager->flush();

        return \$RelatedProduct;
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
        return "RelatedProduct42/Tests/Web/RelatedProductAdminControllerTest.php";
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
        return new Source("", "RelatedProduct42/Tests/Web/RelatedProductAdminControllerTest.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/RelatedProduct42/Tests/Web/RelatedProductAdminControllerTest.php");
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
