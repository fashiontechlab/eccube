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

/* Coupon42/Form/Type/CouponType.php */
class __TwigTemplate_deb6930d5b554b3f787bfe07d6c4d7cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Form/Type/CouponType.php"));

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

use Carbon\\Carbon;
use Eccube\\Form\\Type\\PriceType;
use Plugin\\Coupon42\\Entity\\Coupon;
use Plugin\\Coupon42\\Repository\\CouponRepository;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * Class CouponType.
 */
class CouponType extends AbstractType
{
    /**
     * @var CouponRepository
     */
    private \$couponRepository;

    /**
     * @var ValidatorInterface
     */
    private \$validator;

    /**
     * @var ContainerBagInterface
     */
    private \$container;

    /**
     * CouponType constructor.
     *
     * @param CouponRepository \$couponRepository
     * @param ValidatorInterface \$validator
     * @param ContainerBagInterface \$container
     */
    public function __construct(CouponRepository \$couponRepository, ValidatorInterface \$validator, ContainerBagInterface \$container)
    {
        \$this->couponRepository = \$couponRepository;
        \$this->validator = \$validator;
        \$this->container = \$container;
    }

    /**
     * buildForm.
     *
     * @param FormBuilderInterface \$builder
     * @param array                \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$currency = \$this->container->get('currency');
        \$builder
            ->add('coupon_cd', TextType::class, [
                'label' => 'plugin_coupon.admin.label.coupon_cd',
                'required' => true,
                'trim' => true,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Regex(['pattern' => '/^[a-zA-Z0-9]+\$/i']),
                ],
            ])
            ->add('coupon_name', TextType::class, [
                'label' => 'plugin_coupon.admin.label.coupon_name',
                'required' => true,
                'trim' => true,
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('coupon_type', ChoiceType::class, [
                'choices' => array_flip([
                    Coupon::PRODUCT => 'plugin_coupon.admin.coupon_type.product',
                    Coupon::CATEGORY => 'plugin_coupon.admin.coupon_type.category',
                    Coupon::ALL => 'plugin_coupon.admin.coupon_type.all',
                ]),
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => 'plugin_coupon.admin.label.coupon_type',
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('coupon_member', ChoiceType::class, [
                'choices' => array_flip([
                    1 => 'plugin_coupon.admin.coupon_member.yes',
                    0 => 'plugin_coupon.admin.coupon_member.no',
                ]),
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => 'plugin_coupon.admin.label.coupon_member',
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('discount_type', ChoiceType::class, [
                'choices' => array_flip([
                    Coupon::DISCOUNT_PRICE => 'plugin_coupon.admin.label.discount_type.price',
                    Coupon::DISCOUNT_RATE => 'plugin_coupon.admin.label.discount_type.rate',
                ]),
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'label' => 'plugin_coupon.admin.label.discount_type',
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('coupon_lower_limit', PriceType::class, [
                'label' => 'plugin_coupon.admin.label.coupon_lower_limit',
                'required' => false,
                'currency' => \$currency,
                'constraints' => [
                    new Assert\\Range([
                        'min' => 0,
                    ]),
                ],
            ])
            ->add('discount_price', PriceType::class, [
                'label' => 'plugin_coupon.admin.label.discount_price',
                'required' => false,
                'currency' => \$currency,
                'constraints' => [
                    new Assert\\Range([
                        'min' => 0,
                    ]),
                ],
            ])
            ->add('discount_rate', IntegerType::class, [
                'label' => 'plugin_coupon.admin.label.discount_rate',
                'required' => false,
                'constraints' => [
                    new Assert\\Range([
                        'min' => 1,
                        'max' => 100,
                    ]),
                ],
            ])
            // 有効期間(FROM)
            ->add('available_from_date', DateType::class, [
                'label' => 'plugin_coupon.admin.label.available_from_date',
                'required' => true,
                'input' => 'datetime',
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            // 有効期間(TO)
            ->add('available_to_date', DateType::class, [
                'label' => 'plugin_coupon.admin.label.available_to_date',
                'required' => true,
                'input' => 'datetime',
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('coupon_release', IntegerType::class, [
                'label' => 'plugin_coupon.admin.label.coupon_release',
                'required' => true,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Range([
                        'min' => 1,
                        'max' => 1000000,
                    ]),
                ],
            ])
            ->add('coupon_use_time', HiddenType::class, [])
            ->add('CouponDetails', CollectionType::class, [
                'entry_type' => CouponDetailType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
                \$form = \$event->getForm();
                \$data = \$form->getData();
                if (count(\$data['CouponDetails']) == 0 && \$data['coupon_type'] != Coupon::ALL) {
                    \$form['coupon_type']->addError(new FormError(trans('plugin_coupon.admin.coupontype')));
                }

                if (\$data['discount_type'] == Coupon::DISCOUNT_PRICE) {
                    // 値引き額
                    /** @var ConstraintViolationList \$errors */
                    \$errors = \$this->validator->validate(\$data['discount_price'], [
                        new Assert\\NotBlank(),
                    ]);
                    if (\$errors->count() > 0) {
                        foreach (\$errors as \$error) {
                            \$form['discount_price']->addError(new FormError(\$error->getMessage()));
                        }
                    }
                } elseif (\$data['discount_type'] == Coupon::DISCOUNT_RATE) {
                    // 値引率
                    /** @var ConstraintViolationList \$errors */
                    \$errors = \$this->validator->validate(\$data['discount_rate'], [
                        new Assert\\NotBlank(),
                    ]);
                    if (\$errors->count() > 0) {
                        foreach (\$errors as \$error) {
                            \$form['discount_rate']->addError(new FormError(\$error->getMessage()));
                        }
                    }
                }

                if (!empty(\$data['available_from_date']) && !empty(\$data['available_to_date'])) {
                    \$fromDate = Carbon::instance(\$data['available_from_date']);
                    \$toDate = Carbon::instance(\$data['available_to_date']);
                    if (\$fromDate->gt(\$toDate)) {
                        \$form['available_from_date']->addError(new FormError(trans('plugin_coupon.admin.avaiabledate')));
                    }
                }
            });
    }

    /**
     * configureOptions
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => 'Plugin\\Coupon42\\Entity\\Coupon',
        ]);
    }

    /**
     * getName.
     *
     * @return string
     */
    public function getName()
    {
        return 'admin_plugin_coupon';
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
        return "Coupon42/Form/Type/CouponType.php";
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
        return new Source("", "Coupon42/Form/Type/CouponType.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Coupon42/Form/Type/CouponType.php");
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
