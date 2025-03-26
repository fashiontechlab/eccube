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

/* ProductReview42/Form/Type/Admin/ProductReviewType.php */
class __TwigTemplate_2bd387f887066e468021cdd5b5969bb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Form/Type/Admin/ProductReviewType.php"));

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

namespace Plugin\\ProductReview42\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Form\\Type\\Master\\SexType;
use Plugin\\ProductReview42\\Entity\\ProductReviewStatus;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * Class ProductReviewType.
 * [商品レビュー]-[レビュー管理]用Form.
 */
class ProductReviewType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * ProductReviewType constructor.
     *
     * @param EccubeConfig \$eccubeConfig
     */
    public function __construct(EccubeConfig \$eccubeConfig)
    {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * Build form.
     *
     * @param FormBuilderInterface \$builder
     * @param array \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$config = \$this->eccubeConfig;
        \$builder
            ->add('Status', EntityType::class, [
                'class' => ProductReviewStatus::class,
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('reviewer_name', TextType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length(['max' => \$config['eccube_stext_len']]),
                ],
                'attr' => [
                    'maxlength' => \$config['eccube_stext_len'],
                ],
            ])
            ->add('reviewer_url', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Url(),
                    new Assert\\Length(['max' => \$config['eccube_url_len']]),
                ],
                'attr' => [
                    'maxlength' => \$config['eccube_url_len'],
                ],
            ])
            ->add('sex', SexType::class, [
                'required' => false,
            ])
            ->add('recommend_level', ChoiceType::class, [
                'choices' => array_flip([
                    '5' => '★★★★★',
                    '4' => '★★★★',
                    '3' => '★★★',
                    '2' => '★★',
                    '1' => '★',
                ]),
                'expanded' => false,
                'multiple' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('title', TextType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length(['max' => 50]),
                ],
                'attr' => [
                    'maxlength' => \$config['eccube_stext_len'],
                ],
            ])
            ->add('comment', TextareaType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length(['max' => \$config['eccube_ltext_len']]),
                ],
                'attr' => [
                    'maxlength' => \$config['eccube_ltext_len'],
                ],
            ]);
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
        return "ProductReview42/Form/Type/Admin/ProductReviewType.php";
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
        return new Source("", "ProductReview42/Form/Type/Admin/ProductReviewType.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/ProductReview42/Form/Type/Admin/ProductReviewType.php");
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
