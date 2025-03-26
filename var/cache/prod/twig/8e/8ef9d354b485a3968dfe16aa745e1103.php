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

/* ProductReview42/ProductReviewEvent.php */
class __TwigTemplate_ae1d01a24be1b320d8e1aef4fc934104 extends Template
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

namespace Plugin\\ProductReview42;

use Eccube\\Entity\\Product;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\Master\\ProductStatusRepository;
use Plugin\\ProductReview42\\Entity\\ProductReviewStatus;
use Plugin\\ProductReview42\\Repository\\ProductReviewConfigRepository;
use Plugin\\ProductReview42\\Repository\\ProductReviewRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ProductReviewEvent implements EventSubscriberInterface
{
    /**
     * @var ProductReviewConfigRepository
     */
    protected \$productReviewConfigRepository;
    
    /**
     * @var ProductStatusRepository
     */
    protected \$productStatusRepository;

    /**
     * @var ProductReviewRepository
     */
    protected \$productReviewRepository;

    /**
     * ProductReview constructor.
     *
     * @param ProductReviewConfigRepository \$productReviewConfigRepository
     * @param ProductStatusRepository \$productStatusRepository
     * @param ProductReviewRepository \$productReviewRepository
     */
    public function __construct(
        ProductReviewConfigRepository \$productReviewConfigRepository,
        ProductStatusRepository \$productStatusRepository,
        ProductReviewRepository \$productReviewRepository
    ) {
        \$this->productReviewConfigRepository = \$productReviewConfigRepository;
        \$this->productStatusRepository = \$productStatusRepository;
        \$this->productReviewRepository = \$productReviewRepository;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Product/detail.twig' => 'detail',
        ];
    }

    /**
     * @param TemplateEvent \$event
     */
    public function detail(TemplateEvent \$event)
    {
        \$event->addSnippet('ProductReview42/Resource/template/default/review.twig');

        \$Config = \$this->productReviewConfigRepository->get();

        /** @var Product \$Product */
        \$Product = \$event->getParameter('Product');

        \$ProductReviews = \$this->productReviewRepository->findBy(['Status' => ProductReviewStatus::SHOW, 'Product' => \$Product], ['id' => 'DESC'], \$Config->getReviewMax());

        \$rate = \$this->productReviewRepository->getAvgAll(\$Product);
        \$avg = round(\$rate['recommend_avg']);
        \$count = intval(\$rate['review_count']);

        \$parameters = \$event->getParameters();
        \$parameters['ProductReviews'] = \$ProductReviews;
        \$parameters['ProductReviewAvg'] = \$avg;
        \$parameters['ProductReviewCount'] = \$count;
        \$event->setParameters(\$parameters);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ProductReview42/ProductReviewEvent.php";
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
        return new Source("", "ProductReview42/ProductReviewEvent.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/ProductReview42/ProductReviewEvent.php");
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
