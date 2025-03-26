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

/* Recommend42/Service/RecommendService.php */
class __TwigTemplate_433bac2f2deb0ebe60b734916e9a6cba extends Template
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

namespace Plugin\\Recommend42\\Service;

use Plugin\\Recommend42\\Entity\\RecommendProduct;
use Plugin\\Recommend42\\Repository\\RecommendProductRepository;

/**
 * Class RecommendService.
 */
class RecommendService
{
    /**
     * @var RecommendProductRepository
     */
    private \$recommendProductRepository;

    /**
     * RecommendService constructor.
     *
     * @param RecommendProductRepository \$recommendProductRepository
     */
    public function __construct(RecommendProductRepository \$recommendProductRepository)
    {
        \$this->recommendProductRepository = \$recommendProductRepository;
    }

    /**
     * おすすめ商品情報を新規登録する
     *
     * @param \$data
     *
     * @return bool
     *
     * @throws \\Exception
     */
    public function createRecommend(\$data)
    {
        // おすすめ商品詳細情報を生成する
        \$Recommend = \$this->newRecommend(\$data);

        return \$this->recommendProductRepository->saveRecommend(\$Recommend);
    }

    /**
     * おすすめ商品情報を更新する
     *
     * @param \$data
     *
     * @return bool
     *
     * @throws \\Exception
     */
    public function updateRecommend(\$data)
    {
        // おすすめ商品情報を取得する
        \$Recommend = \$this->recommendProductRepository->find(\$data['id']);
        if (!\$Recommend) {
            return false;
        }

        // おすすめ商品情報を書き換える
        \$Recommend->setComment(\$data['comment']);
        \$Recommend->setProduct(\$data['Product']);

        // おすすめ商品情報を更新する
        return \$this->recommendProductRepository->saveRecommend(\$Recommend);
    }

    /**
     * おすすめ商品情報を生成する
     *
     * @param \$data
     *
     * @return RecommendProduct
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    protected function newRecommend(\$data)
    {
        \$rank = \$this->recommendProductRepository->getMaxRank();

        \$Recommend = new RecommendProduct();
        \$Recommend->setComment(\$data['comment']);
        \$Recommend->setProduct(\$data['Product']);
        \$Recommend->setSortno((\$rank ? \$rank : 0) + 1);
        \$Recommend->setVisible(true);

        return \$Recommend;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Recommend42/Service/RecommendService.php";
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
        return new Source("", "Recommend42/Service/RecommendService.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Recommend42/Service/RecommendService.php");
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
