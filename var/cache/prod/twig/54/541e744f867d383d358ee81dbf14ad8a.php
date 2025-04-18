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

/* Api42/Form/Type/Admin/ClientType.php */
class __TwigTemplate_5530d08050d6b3414817d309318216b6 extends Template
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

namespace Plugin\\Api42\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Exception;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use League\\Bundle\\OAuth2ServerBundle\\OAuth2Grants;

class ClientType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * ClientType constructor.
     *
     * @param EccubeConfig \$eccubeConfig
     */
    public function __construct(
        EccubeConfig \$eccubeConfig
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('identifier', TextType::class, [
                'mapped' => false,
                'data' => hash('md5', random_bytes(16)),
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length(['max' => 32]),
                    new Assert\\Regex(['pattern' => '/^[0-9a-zA-Z]+\$/']),
                ],
            ])
            ->add('secret', TextType::class, [
                'mapped' => false,
                'data' => hash('sha512', random_bytes(32)),
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length(['max' => 128]),
                    new Assert\\Regex(['pattern' => '/^[0-9a-zA-Z]+\$/']),
                ],
            ])
            ->add('scopes', ChoiceType::class, [
                'choices'  => [
                    'read' => 'read',
                    'write' => 'write',
                ],
                'expanded' => true,
                'multiple' => true,
                'mapped' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('redirect_uris', TextType::class, [
                'mapped' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_stext_len']]),
                    new Assert\\Url(),
                ],
            ])
            ->add('grants', ChoiceType::class, [
                'choices'  => [
                    'Authorization code' => OAuth2Grants::AUTHORIZATION_CODE,
                ],
                'expanded' => true,
                'multiple' => true,
                'data' => [OAuth2Grants::AUTHORIZATION_CODE],
                'mapped' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'api_admin_client';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Form/Type/Admin/ClientType.php";
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
        return new Source("", "Api42/Form/Type/Admin/ClientType.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/Form/Type/Admin/ClientType.php");
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
