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

/* Recommend42/PluginManager.php */
class __TwigTemplate_5773b7305e0e1b800c2368d19435e4be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recommend42/PluginManager.php"));

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

namespace Plugin\\Recommend42;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Application;
use Eccube\\Entity\\Block;
use Eccube\\Entity\\BlockPosition;
use Eccube\\Entity\\Layout;
use Eccube\\Entity\\Master\\DeviceType;
use Eccube\\Plugin\\AbstractPluginManager;
use Eccube\\Repository\\BlockPositionRepository;
use Eccube\\Repository\\BlockRepository;
use Eccube\\Repository\\LayoutRepository;
use Eccube\\Repository\\Master\\DeviceTypeRepository;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Filesystem\\Filesystem;

/**
 * Class PluginManager.
 */
class PluginManager extends AbstractPluginManager
{
    /**
     * @var string コピー元ブロックファイル
     */
    private \$originBlock;

    /**
     * @var string ブロック名
     */
    private \$blockName = 'おすすめ商品';

    /**
     * @var string ブロックファイル名
     */
    private \$blockFileName = 'recommend_product_block';

    /**
     * PluginManager constructor.
     */
    public function __construct()
    {
        // コピー元ブロックファイル
        \$this->originBlock = __DIR__.'/Resource/template/Block/'.\$this->blockFileName.'.twig';
    }

    /**
     * @param null \$meta
     * @param Application|null \$app
     * @param ContainerInterface \$container
     *
     * @throws \\Exception
     */
    public function uninstall(array \$meta, ContainerInterface \$container)
    {
        // ブロックの削除
        \$this->removeDataBlock(\$container);
        \$this->removeBlock(\$container);
    }

    /**
     * @param array|null \$meta
     * @param ContainerInterface \$container
     *
     * @throws \\Exception
     */
    public function enable(array \$meta = null, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        \$this->copyBlock(\$container);
        \$Block = \$entityManager->getRepository(Block::class)->findOneBy(['file_name' => \$this->blockFileName]);
        if (is_null(\$Block)) {
            // pagelayoutの作成
            \$this->createDataBlock(\$container);
        }
    }

    /**
     * @param array|null \$meta
     * @param ContainerInterface \$container
     */
    public function disable(array \$meta = null, ContainerInterface \$container)
    {
        \$this->removeDataBlock(\$container);
    }

    /**
     * @param array|null \$meta
     * @param ContainerInterface \$container
     */
    public function update(array \$meta = null, ContainerInterface \$container)
    {
        \$this->copyBlock(\$container);
    }

    /**
     * ブロックを登録.
     *
     * @param ContainerInterface \$container
     *
     * @throws \\Exception
     */
    private function createDataBlock(ContainerInterface \$container)
    {
        \$em = \$container->get('doctrine')->getManager();
        \$DeviceType = \$em->getRepository(DeviceType::class)->find(DeviceType::DEVICE_TYPE_PC);

        try {
            /** @var Block \$Block */
            \$Block = \$em->getRepository(Block::class)->newBlock(\$DeviceType);

            // Blockの登録
            \$Block->setName(\$this->blockName)
                ->setFileName(\$this->blockFileName)
                ->setUseController(false)
                ->setDeletable(false);
            \$em->persist(\$Block);
            \$em->flush(\$Block);

            // check exists block position
            \$blockPos = \$em->getRepository(BlockPosition::class)->findOneBy(['Block' => \$Block]);
            if (\$blockPos) {
                return;
            }

            // BlockPositionの登録
            \$blockPos = \$em->getRepository(BlockPosition::class)->findOneBy(
                ['section' => Layout::TARGET_ID_MAIN_BOTTOM, 'layout_id' => Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE],
                ['block_row' => 'DESC']
            );

            \$BlockPosition = new BlockPosition();

            // ブロックの順序を変更
            \$BlockPosition->setBlockRow(1);
            if (\$blockPos) {
                \$blockRow = \$blockPos->getBlockRow() + 1;
                \$BlockPosition->setBlockRow(\$blockRow);
            }

            \$LayoutDefault = \$em->getRepository(Layout::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);

            \$BlockPosition->setLayout(\$LayoutDefault)
                ->setLayoutId(\$LayoutDefault->getId())
                ->setSection(Layout::TARGET_ID_MAIN_BOTTOM)
                ->setBlock(\$Block)
                ->setBlockId(\$Block->getId());

            \$em->persist(\$BlockPosition);
            \$em->flush(\$BlockPosition);
        } catch (\\Exception \$e) {
            throw \$e;
        }
    }

    /**
     * ブロックを削除.
     *
     * @param ContainerInterface \$container
     *
     * @throws \\Exception
     */
    private function removeDataBlock(ContainerInterface \$container)
    {
        \$em = \$container->get('doctrine')->getManager();
        // Blockの取得(file_nameはアプリケーションの仕組み上必ずユニーク)
        /** @var \\Eccube\\Entity\\Block \$Block */
        \$Block = \$em->getRepository(Block::class)->findOneBy(['file_name' => \$this->blockFileName]);

        if (!\$Block) {
            return;
        }

        try {
            // BlockPositionの削除
            \$blockPositions = \$Block->getBlockPositions();
            /** @var \\Eccube\\Entity\\BlockPosition \$BlockPosition */
            foreach (\$blockPositions as \$BlockPosition) {
                \$Block->removeBlockPosition(\$BlockPosition);
                \$em->remove(\$BlockPosition);
            }

            // Blockの削除
            \$em->remove(\$Block);
            \$em->flush();
        } catch (\\Exception \$e) {
            throw \$e;
        }
    }

    /**
     * Copy block template.
     *
     * @param ContainerInterface \$container
     */
    private function copyBlock(ContainerInterface \$container)
    {
        \$templateDir = \$container->get(EccubeConfig::class)->get('eccube_theme_front_dir');
        // ファイルコピー
        \$file = new Filesystem();

        if (!\$file->exists(\$templateDir.'/Block/'.\$this->blockFileName.'.twig')) {
            // ブロックファイルをコピー
            \$file->copy(\$this->originBlock, \$templateDir.'/Block/'.\$this->blockFileName.'.twig');
        }
    }

    /**
     * Remove block template.
     *
     * @param ContainerInterface \$container
     */
    private function removeBlock(ContainerInterface \$container)
    {
        \$templateDir = \$container->get(EccubeConfig::class)->get('eccube_theme_front_dir');
        \$file = new Filesystem();
        \$file->remove(\$templateDir.'/Block/'.\$this->blockFileName.'.twig');
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
        return "Recommend42/PluginManager.php";
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
        return new Source("", "Recommend42/PluginManager.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Recommend42/PluginManager.php");
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
