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

/* RelatedProduct42/Form/Extension/Admin/RelatedCollectionExtension.php */
class __TwigTemplate_0e53ee60bab5baf95db6ce6b1c44b390 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "RelatedProduct42/Form/Extension/Admin/RelatedCollectionExtension.php"));

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

namespace Plugin\\RelatedProduct42\\Form\\Extension\\Admin;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Product;
use Eccube\\Form\\Type\\Admin\\ProductType;
use Plugin\\RelatedProduct42\\Entity\\RelatedProduct;
use Plugin\\RelatedProduct42\\Form\\Type\\Admin\\RelatedProductType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * Class RelatedCollectionExtension.
 */
class RelatedCollectionExtension extends AbstractTypeExtension
{
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    public function __construct(EccubeConfig \$eccubeConfig, EntityManagerInterface \$entityManager)
    {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->entityManager = \$entityManager;
    }

    /**
     * RelatedCollectionExtension.
     *
     * @param FormBuilderInterface \$builder
     * @param array \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('RelatedProducts', CollectionType::class, [
                'label' => 'related_product.block.title',
                'entry_type' => RelatedProductType::class,
            ]);

        \$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) {
            /** @var Product \$Product */
            \$Product = \$event->getData();
            \$max = \$this->eccubeConfig['related_product.max_item_count'];
            \$RelatedProducts = \$Product->getRelatedProducts();

            for (\$i = 0; \$i < \$max; \$i++) {
                if (!isset(\$RelatedProducts[\$i])) {
                    \$RelatedProduct = new RelatedProduct();
                    \$RelatedProduct->setProduct(\$Product);
                    \$Product->addRelatedProduct(\$RelatedProduct);
                }
            }
            \$form = \$event->getForm();
            \$form['RelatedProducts']->setData(\$Product->getRelatedProducts());
        });

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            /** @var Product \$Product */
            \$Product = \$event->getData();
            \$RelatedProducts = \$Product->getRelatedProducts();
            foreach (\$RelatedProducts as \$RelatedProduct) {
                if (null === \$RelatedProduct->getChildProduct()) {
                    \$Product->removeRelatedProduct(\$RelatedProduct);
                    \$this->entityManager->remove(\$RelatedProduct);
                }
            }
        });
    }

    /**
     * product admin form name.
     *
     * @return string
     */
    public function getExtendedType()
    {
        return ProductType::class;
    }

    /**
     * product admin form name.
     *
     * @return string[]
     */
    public static function getExtendedTypes(): iterable
    {
        yield ProductType::class;
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
        return "RelatedProduct42/Form/Extension/Admin/RelatedCollectionExtension.php";
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
        return new Source("", "RelatedProduct42/Form/Extension/Admin/RelatedCollectionExtension.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/RelatedProduct42/Form/Extension/Admin/RelatedCollectionExtension.php");
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
