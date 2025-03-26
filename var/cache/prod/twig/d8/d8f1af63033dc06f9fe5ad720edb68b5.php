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

/* Recommend42/Controller/RecommendSearchModelController.php */
class __TwigTemplate_b14c8609992247392a9e029d7bd0d71f extends Template
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

namespace Plugin\\Recommend42\\Controller;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Eccube\\Controller\\AbstractController;
use Eccube\\Repository\\CategoryRepository;
use Eccube\\Repository\\ProductRepository;
use Knp\\Component\\Pager\\PaginatorInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;


/**
 * Class RecommendSearchModelController.
 */
class RecommendSearchModelController extends AbstractController
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
     * RecommendSearchModelController constructor.
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
     * 商品検索画面を表示する.
     *
     * @param Request     \$request
     * @param int         \$page_no
     *
     * @return array
     * @Route(\"/%eccube_admin_route%/plugin/recommend/search/product\", name=\"plugin_recommend_search_product\")
     * @Route(\"/%eccube_admin_route%/plugin/recommend/search/product/page/{page_no}\", requirements={\"page_no\" = \"\\d+\"}, name=\"plugin_recommend_search_product_page\")
     * @Template(\"@Recommend42/admin/search_product.twig\")
     */
    public function searchProduct(Request \$request, PaginatorInterface \$paginator, \$page_no = null)
    {
        if (!\$request->isXmlHttpRequest()) {
            return [];
        }

        log_debug('Search product start.');

        \$pageCount = \$this->eccubeConfig['eccube_default_page_count'];
        \$session = \$this->session;
        if ('POST' === \$request->getMethod()) {
            \$page_no = 1;
            \$searchData = [
                'name' => trim(\$request->get('id')),
            ];

            if (\$categoryId = \$request->get('category_id')) {
                \$searchData['category_id'] = \$categoryId;
            }

            \$session->set('eccube.plugin.recommend.product.search', \$searchData);
            \$session->set('eccube.plugin.recommend.product.search.page_no', \$page_no);
        } else {
            \$searchData = (array) \$session->get('eccube.plugin.recommend.product.search');
            if (is_null(\$page_no)) {
                \$page_no = intval(\$session->get('eccube.plugin.recommend.product.search.page_no'));
            } else {
                \$session->set('eccube.plugin.recommend.product.search.page_no', \$page_no);
            }
        }

        //set parameter
        \$searchData['id'] = \$searchData['name'];

        if (!empty(\$searchData['category_id'])) {
            \$searchData['category_id'] = \$this->categoryRepository->find(\$searchData['category_id']);
        }

        \$qb = \$this->productRepository->getQueryBuilderBySearchDataForAdmin(\$searchData);

        /** @var \\Knp\\Component\\Pager\\Pagination\\SlidingPagination \$pagination */
        \$pagination = \$paginator->paginate(
            \$qb,
            \$page_no,
            \$pageCount,
            ['wrap-queries' => true]
        );

        /** @var ArrayCollection */
        \$arrProduct = \$pagination->getItems();

        log_debug('Search product finish.');
        if (count(\$arrProduct) == 0) {
            log_debug('Search product not found.');
        }

        return [
            'pagination' => \$pagination,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Recommend42/Controller/RecommendSearchModelController.php";
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
        return new Source("", "Recommend42/Controller/RecommendSearchModelController.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Recommend42/Controller/RecommendSearchModelController.php");
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
