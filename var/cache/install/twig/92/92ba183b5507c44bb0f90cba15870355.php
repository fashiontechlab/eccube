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

/* MailMagazine42/Form/Extension/CustomerMailMagazineTypeExtension.php */
class __TwigTemplate_2b5319e57f80efdb5bfad66e0188472c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Form/Extension/CustomerMailMagazineTypeExtension.php"));

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

namespace Plugin\\MailMagazine42\\Form\\Extension;

use Eccube\\Entity\\Customer;
use Eccube\\Common\\Constant;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Eccube\\Form\\Type\\Admin\\CustomerType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;

class CustomerMailMagazineTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$mailmagaFlg = null;

        /** @var Customer \$Customer */
        \$Customer = \$builder->getData();
        if (\$Customer instanceof Customer && \$Customer->getId()) {
            \$mailmagaFlg = \$Customer->getMailmagaFlg();
        }

        \$options = [
            'label' => 'admin.mailmagazine.customer.label_mailmagazine',
            'choices' => [
                'admin.mailmagazine.customer.label_mailmagazine_yes' => Constant::ENABLED,
                'admin.mailmagazine.customer.label_mailmagazine_no' => Constant::DISABLED,
            ],
            'expanded' => true,
            'multiple' => false,
            'required' => true,
            'constraints' => [
                new Assert\\NotBlank(),
            ],
            'mapped' => true,
            'eccube_form_options' => [
                'auto_render' => true,
                'form_theme' => '@MailMagazine42/admin/mailmagazine.twig',
            ],
        ];

        if (!is_null(\$mailmagaFlg)) {
            \$options['data'] = \$mailmagaFlg;
        }

        \$builder->add('mailmaga_flg', ChoiceType::class, \$options);
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getExtendedType()
    {
        return CustomerType::class;
    }

    /**
     * {@inheritdoc}
     *
     * @return string[]
     */
    public static function getExtendedTypes(): iterable
    {
        yield CustomerType::class;
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
        return "MailMagazine42/Form/Extension/CustomerMailMagazineTypeExtension.php";
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
        return new Source("", "MailMagazine42/Form/Extension/CustomerMailMagazineTypeExtension.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/MailMagazine42/Form/Extension/CustomerMailMagazineTypeExtension.php");
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
