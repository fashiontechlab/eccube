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

/* Coupon42/Controller/Admin/CouponSearchModelController.php */
class __TwigTemplate_28d55f27481ce598b2debe769b044552 extends Template
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

namespace Plugin\\Coupon42\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Category;
use Eccube\\Repository\\CategoryRepository;
use Eccube\\Repository\\ProductRepository;
use Knp\\Component\\Pager\\PaginatorInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

/**
 * Class CouponSearchModelController.
 */
class CouponSearchModelController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private \$categoryRepository;

    /**
     * @var ProductRepository
     */
    private \$productRepository;

    /**
     * CouponSearchModelController constructor.
     *
     * @param CategoryRepository \$categoryRepository
     * @param ProductRepository \$productRepository
     */
    public function __construct(CategoryRepository \$categoryRepository, ProductRepository \$productRepository)
    {
        \$this->categoryRepository = \$categoryRepository;
        \$this->productRepository = \$productRepository;
    }

    /**
     * search product modal.
     *
     * @param Request   \$request
     * @param int       \$page_no
     * @param PaginatorInterface \$paginator
     *
     * @return array
     * @Route(\"/%eccube_admin_route%/plugin/coupon/search/product\", name=\"plugin_coupon_search_product\")
     * @Route(\"/%eccube_admin_route%/plugin/coupon/search/product/page/{page_no}\", requirements={\"page_no\" = \"\\d+\"}, name=\"plugin_coupon_search_product_page\")
     * @Template(\"@Coupon42/admin/search_product.twig\")
     */
    public function searchProduct(Request \$request, PaginatorInterface \$paginator, \$page_no = null)
    {
        if (!\$request->isXmlHttpRequest()) {
            return null;
        }

        \$pageCount = \$this->eccubeConfig['eccube_default_page_count'];
        \$session = \$this->session;
        if ('POST' === \$request->getMethod()) {
            log_info('get search data with parameters ', ['id' => \$request->get('id'), 'category_id' => \$request->get('category_id')]);
            \$page_no = 1;
            \$searchData = [
                'id' => \$request->get('id'),
            ];
            if (\$categoryId = \$request->get('category_id')) {
                \$searchData['category_id'] = \$categoryId;
            }
            \$session->set('eccube.plugin.coupon.product.search', \$searchData);
            \$session->set('eccube.plugin.coupon.product.search.page_no', \$page_no);
        } else {
            \$searchData = (array) \$session->get('eccube.plugin.coupon.product.search');
            if (is_null(\$page_no)) {
                \$page_no = intval(\$session->get('eccube.plugin.coupon.product.search.page_no'));
            } else {
                \$session->set('eccube.plugin.coupon.product.search.page_no', \$page_no);
            }
        }

        if (!empty(\$searchData['category_id'])) {
            \$searchData['category_id'] = \$this->categoryRepository->find(\$searchData['category_id']);
        }

        \$qb = \$this->productRepository->getQueryBuilderBySearchDataForAdmin(\$searchData);
        // 除外するproduct_idを設定する
        \$existProductId = \$request->get('exist_product_id');
        if (strlen(\$existProductId > 0)) {
            \$qb->andWhere(\$qb->expr()->notin('p.id', ':existProductId'))
                ->setParameter('existProductId', explode(',', \$existProductId));
        }

        /** @var \\Knp\\Component\\Pager\\Pagination\\SlidingPagination \$pagination */
        \$pagination = \$paginator->paginate(
            \$qb,
            \$page_no,
            \$pageCount,
            ['wrap-queries' => true]
        );

        return [
            'pagination' => \$pagination,
        ];
    }

    /**
     * カテゴリ検索画面を表示する.
     *
     * @param Request     \$request
     *
     * @return array
     * @Route(\"/%eccube_admin_route%/plugin/coupon/search/category\", name=\"plugin_coupon_search_category\")
     * @Template(\"@Coupon42/admin/search_category.twig\")
     */
    public function searchCategory(Request \$request)
    {
        if (\$request->isXmlHttpRequest()) {
            \$categoryId = \$request->get('category_id');
            \$existCategoryId = \$request->get('exist_category_id');

            \$existCategoryIds = [0];
            if (strlen(\$existCategoryId > 0)) {
                \$existCategoryIds = explode(',', \$existCategoryId);
            }

            if (empty(\$categoryId)) {
                \$categoryId = 0;
            }

            \$Category = \$this->categoryRepository->find(\$categoryId);
            \$Categories = \$this->categoryRepository->getList(\$Category);

            if (empty(\$Categories)) {
                log_info('search category not found.');
            }

            // カテゴリーの一覧を作成する
            \$list = [];
            if (\$categoryId != 0 && !in_array(\$categoryId, \$existCategoryIds)) {
                \$name = \$Category->getName();
                \$list += [\$Category->getId() => \$name];
            }
            \$list += \$this->getCategoryList(\$Categories, \$existCategoryIds);

            return [
                'Categories' => \$list,
            ];
        }

        return [];
    }

    /**
     * カテゴリーの一覧を作成する.
     *
     * @param Category \$Categories
     * @param int      \$existCategoryIds
     *
     * @return array
     */
    protected function getCategoryList(\$Categories, \$existCategoryIds)
    {
        \$result = [];
        foreach (\$Categories as \$Category) {
            // 除外IDがない場合は配列に値を追加する
            if (count(\$existCategoryIds) == 0 || !in_array(\$Category->getId(), \$existCategoryIds)) {
                \$name = \$this->getCategoryFullName(\$Category);
                \$result += [\$Category->getId() => \$name];
            }
            // 子カテゴリがあれば更に一覧を作成する
            if (count((\$Category->getChildren())) > 0) {
                \$childResult = \$this->getCategoryList(\$Category->getChildren(), \$existCategoryIds);
                \$result += \$childResult;
            }
        }

        return \$result;
    }

    /**
     * 親カテゴリ名を含むカテゴリ名を取得する.
     *
     * @param Category \$Category
     *
     * @return string
     */
    protected function getCategoryFullName(Category \$Category)
    {
        if (is_null(\$Category)) {
            return '';
        }
        \$fulName = \$Category->getName();
        // 親カテゴリがない場合はカテゴリ名を返す.
        if (is_null(\$Category->getParent())) {
            return \$fulName;
        }
        // 親カテゴリ名を結合する
        \$ParentCategory = \$Category->getParent();
        while (!is_null(\$ParentCategory)) {
            \$fulName = \$ParentCategory->getName().'　＞　'.\$fulName;
            \$ParentCategory = \$ParentCategory->getParent();
        }

        return \$fulName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Controller/Admin/CouponSearchModelController.php";
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
        return new Source("", "Coupon42/Controller/Admin/CouponSearchModelController.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Coupon42/Controller/Admin/CouponSearchModelController.php");
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
