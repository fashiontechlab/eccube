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

/* Coupon42/Form/Type/CouponDetailType.php */
class __TwigTemplate_7560ca5f9a2d64b3ffbb225dfb257eca extends Template
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

namespace Plugin\\Coupon42\\Form\\Type;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Form\\DataTransformer;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Class CouponDetailType.
 */
class CouponDetailType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    protected \$entityManager;

    /**
     * CouponDetailType constructor.
     *
     * @param EntityManagerInterface \$entityManager
     */
    public function __construct(EntityManagerInterface \$entityManager)
    {
        \$this->entityManager = \$entityManager;
    }

    /**
     * buildForm.
     *
     * @param FormBuilderInterface \$builder
     * @param array                \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add(
                \$builder->create('Product', HiddenType::class)
                    ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(\$this->entityManager, '\\Eccube\\Entity\\Product'))
            )
            ->add(
                \$builder->create('Category', HiddenType::class)
                    ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(\$this->entityManager, '\\Eccube\\Entity\\Category'))
            )
            ->add('id', HiddenType::class, [
                'label' => 'クーポン詳細ID',
                'required' => false,
            ])
            ->add('coupon_type', HiddenType::class, [
                'required' => false,
            ]);
    }

    /**
     * configureOptions.
     *
     * @param OptionsResolver \$resolver
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => 'Plugin\\Coupon42\\Entity\\CouponDetail',
        ]);
    }

    /**
     * getName.
     *
     *  @return string
     */
    public function getName()
    {
        return 'admin_plugin_coupon_detail';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Form/Type/CouponDetailType.php";
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
        return new Source("", "Coupon42/Form/Type/CouponDetailType.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Coupon42/Form/Type/CouponDetailType.php");
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
