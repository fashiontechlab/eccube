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

/* SalesReport42/Tests/Web/SaleReportControllerTest.php */
class __TwigTemplate_fda0ead362db51412718341a68107867 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Tests/Web/SaleReportControllerTest.php"));

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

namespace Plugin\\SalesReport42\\Tests\\Web;

use Eccube\\Entity\\TaxRule;
use Eccube\\Repository\\TaxRuleRepository;

/**
 * Class SaleReportControllerTest.
 */
class SaleReportControllerTest extends SaleReportCommon
{
    /** @var TaxRuleRepository */
    protected \$taxRuleRepository;

    public function setUp(): void
    {
        parent::setUp();
        \$this->deleteAllRows(['dtb_order_item']);
        \$this->deleteAllRows(['dtb_shipping']);
        \$this->deleteAllRows(['dtb_order']);
        \$this->taxRuleRepository = \$this->entityManager->getRepository(TaxRule::class);
    }

    /**
     * test routing admin sale report.
     *
     *
     * @param string \$type
     * @param string \$expected
     * @dataProvider dataRoutingProvider
     */
    public function testRouting(\$type, \$expected)
    {
        \$crawler = \$this->client->request('GET', \$this->generateUrl('sales_report_admin'.\$type));
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
        \$this->assertStringContainsString(\$expected, \$crawler->html());
    }

    /**
     * test display today as default.
     *
     * @param string \$type
     * @dataProvider dataRoutingProvider
     */
    public function testDisplayTodayAsDefault(\$type)
    {
        \$current = new \\DateTime();
        \$crawler = \$this->client->request('GET', \$this->generateUrl('sales_report_admin'.\$type));
        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
        \$this->assertStringContainsString(\$current->format('Y-m-d'), \$crawler->html());
    }

    /**
     * data routing provider.
     *
     * @return array
     */
    public function dataRoutingProvider()
    {
        return [
            ['_term', '期間別集計'],
            ['_product', '商品別集計'],
            ['_age', '年代別集計'],
        ];
    }

    /**
     * test sale report all type.
     *
     * @param string \$type
     * @param string \$termType
     * @param array  \$unit
     * @param string \$expected
     * @dataProvider dataReportProvider
     */
    public function testSaleReportAll(\$type, \$termType, \$unit, \$expected)
    {
        \$this->createOrderByCustomer(5);

        \$current = new \\DateTime();
        \$arrSearch = [
            'term_type' => \$termType,
            '_token' => 'dummy',
        ];
        if (\$type == '' || \$type == '_term') {
            \$arrSearch['unit'] = \$unit;
        }

        if (\$termType == 'monthly') {
            \$arrSearch['monthly_year'] = \$current->format('Y');
            \$arrSearch['monthly_month'] = \$current->format('n');
        } else {
            \$arrSearch['term_start'] = \$current->modify('-15 days')->format('Y-m-d');
            \$arrSearch['term_end'] = \$current->modify('+15 days')->format('Y-m-d');
        }
        \$crawler = \$this->client->request('POST', \$this->generateUrl('sales_report_admin'.\$type), ['sales_report' => \$arrSearch]);
        \$this->assertStringContainsString(\$expected, \$crawler->html());

        // Test display csv download button
        \$this->assertStringContainsString('CSVダウンロード', \$crawler->html());
    }

    /**
     * test product report sort by order money.
     *
     * @param string \$type
     * @param string \$termType
     * @dataProvider dataProductReportProvider
     */
    public function testProductReportSortByOrderMoney(\$type, \$termType)
    {
        \$i = 0;
        \$j = 0;
        \$orderMoney = [];
        \$flag = false;
        \$this->createOrderByCustomer(5);
        \$current = new \\DateTime();
        \$arrSearch = [
            'term_type' => \$termType,
            '_token' => 'dummy',
        ];

        if (\$termType == 'monthly') {
            \$arrSearch['monthly_year'] = \$current->format('Y');
            \$arrSearch['monthly_month'] = \$current->format('n');
        } else {
            \$arrSearch['term_start'] = \$current->modify('-15 days')->format('Y-m-d');
            \$arrSearch['term_end'] = \$current->modify('+15 days')->format('Y-m-d');
        }
        \$crawler = \$this->client->request('POST', \$this->generateUrl('sales_report_admin'.\$type), ['sales_report' => \$arrSearch]);
        \$moneyElement = \$crawler->filter('tr .d-none');
        //get only total money. don't get product price
        foreach (\$moneyElement as \$domElement) {
            if (\$i % 2 != 0) {
                \$orderMoney[\$j] = \$domElement->nodeValue;
                ++\$j;
            }
            ++\$i;
        }
        //check array is order by desc or not
        for (\$i = 0; \$i < (sizeof(\$orderMoney) - 1); ++\$i) {
            if (\$orderMoney[\$i] >= \$orderMoney[\$i + 1]) {
                \$flag = true;
            } else {
                \$flag = false;
            }
        }
        \$this->assertTrue(\$flag);
    }

    /**
     * test product delete for all pattern.
     *
     * @param string \$type
     * @param string \$termType
     * @param array  \$unit
     * @param string \$expected
     * @dataProvider dataReportProvider
     */
    public function testProductDelete(\$type, \$termType, \$unit, \$expected)
    {
        \$this->createOrderByCustomer(5);

        \$current = new \\DateTime();
        \$arrSearch = [
            'term_type' => \$termType,
            '_token' => 'dummy',
        ];

        if (\$type == '' || \$type == '_term') {
            \$arrSearch['unit'] = \$unit;
        }

        if (\$termType == 'monthly') {
            \$arrSearch['monthly_year'] = \$current->format('Y');
            \$arrSearch['monthly_month'] = \$current->format('n');
        } else {
            \$arrSearch['term_start'] = \$current->modify('-15 days')->format('Y-m-d');
            \$arrSearch['term_end'] = \$current->modify('+15 days')->format('Y-m-d');
        }
        \$crawler = \$this->client->request('POST', \$this->generateUrl('sales_report_admin'.\$type), ['sales_report' => \$arrSearch]);
        \$this->assertStringContainsString(\$expected, \$crawler->html());
    }

    /**
     * test change order detail.
     *
     * @param string \$type
     * @param string \$termType
     * @dataProvider dataProductReportProvider
     */
    public function testChangeOrderDetail(\$type, \$termType)
    {
        \$i = 0;
        \$orderMoney = 0;
        \$current = new \\DateTime();
        \$arrOrder = \$this->createOrderByCustomer(5);
        \$TaxRule = \$this->taxRuleRepository->getByRule();
        \$this->changeOrderDetail(\$arrOrder, \$TaxRule);
        \$arrSearch = [
            'term_type' => \$termType,
            '_token' => 'dummy',
        ];

        if (\$termType == 'monthly') {
            \$arrSearch['monthly_year'] = \$current->format('Y');
            \$arrSearch['monthly_month'] = \$current->format('n');
        } else {
            \$arrSearch['term_start'] = \$current->modify('-15 days')->format('Y-m-d');
            \$arrSearch['term_end'] = \$current->modify('+15 days')->format('Y-m-d');
        }
        \$crawler = \$this->client->request('POST', \$this->generateUrl('sales_report_admin'.\$type), ['sales_report' => \$arrSearch]);
        \$moneyElement = \$crawler->filter('tr .d-none');
        //get only total money. don't get product price
        foreach (\$moneyElement as \$domElement) {
            \$orderMoney += \$domElement->nodeValue;
            ++\$i;
        }

        \$tax = \$TaxRule->getTaxRate() / 100;
        \$this->expected = 500 * 5 * (1 + \$tax);
        \$this->actual = \$orderMoney;
        \$this->verify();
    }

    /**
     * data report provider.
     *
     * @return array
     */
    public function dataReportProvider()
    {
        return [
            ['_term', 'monthly', 'byDay', '購入平均'],
            ['_term', 'monthly', 'byMonth', '購入平均'],
            ['_term', 'monthly', 'byWeekDay', '購入平均'],
            ['_term', 'monthly', 'byHour', '購入平均'],
            ['_term', 'term', 'byDay', '購入平均'],
            ['_term', 'term', 'byMonth', '購入平均'],
            ['_term', 'term', 'byWeekDay', '購入平均'],
            ['_term', 'term', 'byHour', '購入平均'],
            ['_product', 'monthly', null, '商品名'],
            ['_product', 'term', null, '商品名'],
            ['_age', 'monthly', null, '購入平均'],
            ['_age', 'term', null, '購入平均'],
        ];
    }

    /**
     * product report data provider.
     *
     * @return array
     */
    public function dataProductReportProvider()
    {
        return [
            ['_product', 'monthly'],
            ['_product', 'term'],
        ];
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
        return "SalesReport42/Tests/Web/SaleReportControllerTest.php";
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
        return new Source("", "SalesReport42/Tests/Web/SaleReportControllerTest.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SalesReport42/Tests/Web/SaleReportControllerTest.php");
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
