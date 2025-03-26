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

/* SalesReport42/Tests/Web/SaleReportCommon.php */
class __TwigTemplate_43a2c883a855f2cde1283e62f929884f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Tests/Web/SaleReportCommon.php"));

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

use Eccube\\Entity\\Customer;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\TaxRule;
use Eccube\\Repository\\CustomerRepository;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Tests\\Web\\Admin\\AbstractAdminWebTestCase;

/**
 * Class SaleReportCommon.
 */
class SaleReportCommon extends AbstractAdminWebTestCase
{
    /** @var CustomerRepository */
    protected \$customerRepository;

    /** @var OrderStatusRepository */
    protected \$orderStatusRepository;

    /**
     * Set up function.
     */
    public function setUp(): void
    {
        parent::setUp();
        \$this->customerRepository = \$this->entityManager->getRepository(Customer::class);
        \$this->orderStatusRepository = \$this->entityManager->getRepository(OrderStatus::class);
    }

    /**
     * createCustomerByNumber.
     *
     * @param int \$number
     *
     * @return array
     */
    public function createCustomerByNumber(\$number = 5)
    {
        \$arrCustomer = [];
        \$current = new \\DateTime();
        for (\$i = 0; \$i < \$number; ++\$i) {
            \$email = 'customer0'.\$i.'@mail.com';
            \$age = rand(10, 50);
            \$age = \$current->modify(\"-\$age years\");
            \$Customer = \$this->createCustomer(\$email);
            \$arrCustomer[] = \$Customer->getId();
            \$Customer->setBirth(\$age);
            \$this->entityManager->persist(\$Customer);
            \$this->entityManager->flush();
        }

        return \$arrCustomer;
    }

    /**
     * createOrderByCustomer.
     *
     * @param int \$number
     *
     * @return array \$arrOrder
     */
    public function createOrderByCustomer(\$number = 5)
    {
        \$arrCustomer = \$this->createCustomerByNumber(\$number);
        \$current = new \\DateTime();
        \$arrOrder = [];
        for (\$i = 0; \$i < count(\$arrCustomer); ++\$i) {
            \$Customer = \$this->customerRepository->find(\$arrCustomer[\$i]);
            \$Order = \$this->createOrder(\$Customer);
            \$Order->setOrderStatus(\$this->orderStatusRepository->find(OrderStatus::NEW));
            \$Order->setOrderDate(\$current);
            \$arrOrder[] = \$Order;
            \$this->entityManager->persist(\$Order);
            \$this->entityManager->flush();
        }

        return \$arrOrder;
    }

    /**
     * @param Order[] \$Orders
     * @param TaxRule \$TaxRule
     */
    public function changeOrderDetail(\$Orders, \$TaxRule)
    {
        /** @var Order \$Order */
        foreach (\$Orders as \$Order) {
            \$totalTax = 0;
            \$total = 0;
            foreach (\$Order->getOrderItems() as \$orderItem) {
                /** @var OrderItem \$orderItem */
                if (\$orderItem->isProduct()) {
                    \$TaxRate = \$TaxRule->getTaxRate() / 100;
                    \$tax = 500 * \$TaxRate;
                    \$orderItem->setPrice(500);
                    \$orderItem->setQuantity(1);
                    \$orderItem->setTax(\$tax);
                    \$this->entityManager->persist(\$orderItem);
                    \$this->entityManager->flush();
                    \$totalTax += \$tax;
                    \$total += 500 + \$tax;
                }
            }

            \$Order->setSubtotal(\$total);
            \$Order->setTotal(\$total);
            \$Order->setTax(\$totalTax);
            \$this->entityManager->persist(\$Order);
            \$this->entityManager->flush();
        }
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
        return "SalesReport42/Tests/Web/SaleReportCommon.php";
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
        return new Source("", "SalesReport42/Tests/Web/SaleReportCommon.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SalesReport42/Tests/Web/SaleReportCommon.php");
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
