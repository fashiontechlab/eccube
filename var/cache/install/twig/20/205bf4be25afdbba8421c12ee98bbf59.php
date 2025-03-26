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

/* SalesReport42/Form/Type/SalesReportType.php */
class __TwigTemplate_c40d80943bfd3958e32db891ad94d290 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Form/Type/SalesReportType.php"));

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

namespace Plugin\\SalesReport42\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * Class SalesReportType.
 */
class SalesReportType extends AbstractType
{
    /**
     * BuildForm Sale Report.
     *
     * @param FormBuilderInterface \$builder
     * @param array \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // 年月の配列定義. 今年±20年
        \$yearList = range(date('Y'), date('Y') - 20);
        // 1～12月
        \$monthList = range(1, 12);

        \$builder
            ->add('term_type', HiddenType::class, [
                'required' => false,
            ])
            ->add('monthly_year', ChoiceType::class, [
                'label' => 'sales_report.admin.label.monthly_year',
                'required' => true,
                'choices' => array_combine(\$yearList, \$yearList),
                'data' => date('Y'),
            ])
            ->add('monthly_month', ChoiceType::class, [
                'label' => 'sales_report.admin.label.monthly_month',
                'required' => true,
                'choices' => array_combine(\$monthList, \$monthList),
                'data' => date('n'),
            ])
            ->add('term_start', DateType::class, [
                'label' => 'sales_report.admin.label.term_start',
                'required' => true,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'data' => new \\DateTime('first day of this month'),
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-target' => '#'.\$this->getBlockPrefix().'_term_start',
                    'data-toggle' => 'datetimepicker',
                ],
            ])
            ->add('term_end', DateType::class, [
                'label' => 'sales_report.admin.label.term_end',
                'required' => true,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'data' => new \\DateTime(),
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-target' => '#'.\$this->getBlockPrefix().'_term_end',
                    'data-toggle' => 'datetimepicker',
                ],
            ])
            ->add('unit', ChoiceType::class, [
                'label' => 'sales_report.admin.label.unit',
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'choices' => array_flip([
                    'byDay' => 'sales_report.admin.label.byDay',
                    'byMonth' => 'sales_report.admin.label.byMonth',
                    'byWeekDay' => 'sales_report.admin.label.byWeekDay',
                    'byHour' => 'sales_report.admin.label.byHour',
                ]),
                'data' => 'byDay',
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
                \$form = \$event->getForm();
                \$data = \$form->getData();
                if (\$data['term_type'] === 'monthly') {
                    if (empty(\$data['monthly_year'])) {
                        \$form['monthly_year']->addError(
                            new FormError(trans('sales_report.admin.type.monthly.error'))
                        );
                    }
                    if (empty(\$data['monthly_month'])) {
                        \$form['monthly_month']->addError(
                            new FormError(trans('sales_report.admin.type.monthly.error'))
                        );
                    }
                } elseif (\$data['term_type'] === 'term' && (empty(\$data['term_start']) || empty(\$data['term_end']))) {
                    \$form['term_start']->addError(new FormError(trans('sales_report.admin.type.term_start.error')));
                }
            })
        ;
    }

    /**
     * get sale report form name.
     *
     * @return string
     */
    public function getName()
    {
        return 'sales_report';
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
        return "SalesReport42/Form/Type/SalesReportType.php";
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
        return new Source("", "SalesReport42/Form/Type/SalesReportType.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SalesReport42/Form/Type/SalesReportType.php");
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
