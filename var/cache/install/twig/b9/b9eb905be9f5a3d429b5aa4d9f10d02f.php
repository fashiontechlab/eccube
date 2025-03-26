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

/* Recommend42/Form/Type/RecommendProductType.php */
class __TwigTemplate_c573babf1c8ee19872c6e1a205e68436 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recommend42/Form/Type/RecommendProductType.php"));

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

namespace Plugin\\Recommend42\\Form\\Type;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Form\\FormEvents;
use Eccube\\Form\\DataTransformer;

/**
 * Class RecommendProductType.
 */
class RecommendProductType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * RecommendProductType constructor.
     *
     * @param EccubeConfig \$eccubeConfig
     * @param EntityManagerInterface \$entityManager
     */
    public function __construct(EccubeConfig \$eccubeConfig, EntityManagerInterface \$entityManager)
    {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->entityManager = \$entityManager;
    }

    /**
     * Build config type form.
     *
     * @param FormBuilderInterface \$builder
     * @param array                \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('id', TextType::class, [
                'label' => 'plugin_recommend.admin.edit.product',
                'required' => false,
                'attr' => ['readonly' => 'readonly'],
            ])
            ->add('comment', TextareaType::class, [
                'label' => 'plugin_recommend.admin.edit.comment',
                'required' => true,
                'trim' => true,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['plugin_recommend.text_area_len'],
                    ]),
                ],
                'attr' => [
                    'maxlength' => \$this->eccubeConfig['plugin_recommend.text_area_len'],
                    'placeholder' => 'plugin_recommend.admin.type.comment.placeholder',
                ],
            ]);

        \$builder->add(
            \$builder
                ->create('Product', HiddenType::class)
                ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(\$this->entityManager, '\\Eccube\\Entity\\Product'))
        );

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            \$form = \$event->getForm();
            \$data = \$form->getData();
            // Check product
            \$Product = \$data['Product'];
            if (empty(\$Product)) {
                \$form['comment']->addError(new FormError(trans('plugin_recommend.admin.type.product.not_found')));

                return;
            }
        });
    }

    /**
     *  {@inheritdoc}
     *
     * @param OptionsResolver \$resolver
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => 'Plugin\\Recommend42\\Entity\\RecommendProduct',
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_recommend';
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
        return "Recommend42/Form/Type/RecommendProductType.php";
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
        return new Source("", "Recommend42/Form/Type/RecommendProductType.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Recommend42/Form/Type/RecommendProductType.php");
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
