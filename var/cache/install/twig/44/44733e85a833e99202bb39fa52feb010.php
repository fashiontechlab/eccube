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

/* MailMagazine42/Tests/Web/MailMagazineCommon.php */
class __TwigTemplate_93289c67f1026e9a29c88c760f6e3368 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Tests/Web/MailMagazineCommon.php"));

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

namespace Plugin\\MailMagazine42\\Tests\\Web;

use Eccube\\Common\\Constant;
use Eccube\\Entity\\MailHistory;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Master\\Sex;
use Eccube\\Tests\\Web\\Admin\\AbstractAdminWebTestCase;
use Plugin\\MailMagazine42\\Entity\\MailMagazineSendHistory;
use Plugin\\MailMagazine42\\Entity\\MailMagazineTemplate;
use Eccube\\Repository\\Master\\SexRepository;
use Eccube\\Repository\\MailHistoryRepository;

class MailMagazineCommon extends AbstractAdminWebTestCase
{
    /**
     * @var SexRepository
     */
    protected \$sexRepository;

    /**
     * @var MailHistoryRepository
     */
    protected \$mailHistoryRepository;

    public function setUp(): void
    {
        parent::setUp();
        \$this->sexRepository = \$this->entityManager->getRepository(Sex::class);
        \$this->mailHistoryRepository = \$this->entityManager->getRepository(MailHistory::class);
    }

    protected function createMagazineTemplate()
    {
        \$fake = \$this->getFaker();
        \$MailTemplate = new MailMagazineTemplate();

        \$MailTemplate
            ->setSubject(\$fake->word)
            ->setBody(\$fake->word)
            ->setHtmlBody(\$fake->word);
        \$this->entityManager->persist(\$MailTemplate);
        \$this->entityManager->flush();

        return \$MailTemplate;
    }

    protected function createMailMagazineCustomer()
    {
        \$fake = \$this->getFaker();
        \$current_date = new \\DateTime();

        \$Sex = \$this->sexRepository->find(1);

        \$Customer = \$this->createCustomer();
        \$Customer
            ->setSex(\$Sex)
            ->setBirth(\$current_date->modify('-20 years'))
            ->setPhoneNumber(\$fake->randomNumber(9))
            ->setCreateDate(\$current_date->modify('-20 days'))
            ->setUpdateDate(\$current_date->modify('-1 days'))
            ->setLastBuyDate(\$current_date->modify('-1 days'))
            ->setMailmagaFlg(Constant::ENABLED);

        \$this->entityManager->persist(\$Customer);
        \$this->entityManager->flush();

        return \$Customer;
    }

    protected function createSearchForm(\\Eccube\\Entity\\Customer \$MailCustomer, \$birth_month = null)
    {
        // create order
        \$Order = \$this->createOrder(\$MailCustomer);
        \$OrderStatus = \$this->entityManager->find(OrderStatus::class, OrderStatus::NEW);
        \$Order->setOrderStatus(\$OrderStatus);
        \$this->entityManager->flush();

        \$order_detail = \$Order->getItems();
        \$old_date = new \\DateTime('1980-01-01');

        return [
            '_token' => 'dummy',
            'multi' => \$MailCustomer->getId(),
            'pref' => \$MailCustomer->getPref()->getId(),
            'sex' => [\$MailCustomer->getSex()->getId()],
            'birth_start' => \$old_date->format('Y-m-d'),
            'birth_end' => \$MailCustomer->getBirth()->format('Y-m-d'),
            'phone_number' => \$MailCustomer->getPhoneNumber(),
            'buy_total_start' => 0,
            'buy_total_end' => \$MailCustomer->getBuyTotal(),
            'buy_times_start' => 0,
            'buy_times_end' => \$MailCustomer->getBuyTimes(),
            'create_date_start' => \$old_date->format('Y-m-d'),
            'create_date_end' => \$MailCustomer->getCreateDate()->format('Y-m-d'),
            'update_date_start' => \$old_date->format('Y-m-d'),
            'update_date_end' => \$MailCustomer->getUpdateDate()->format('Y-m-d'),
            'last_buy_start' => \$old_date->format('Y-m-d'),
            'last_buy_end' => \$MailCustomer->getLastBuyDate()->format('Y-m-d'),
            'customer_status' => [\$MailCustomer->getStatus()->getId()],
            'buy_product_name' => \$order_detail[0]->getProductName(),
            'birth_month' => \$birth_month,
        ];
    }

    protected function createSendHistoy(\\Eccube\\Entity\\Customer \$MailCustomer)
    {
        \$currentDatetime = new \\DateTime();
        \$MailTemplate = \$this->createMagazineTemplate();
        \$formData = \$this->createSearchForm(\$MailCustomer);
        \$formData['customer_status'] = \$MailCustomer->getStatus();
        \$formData['sex'] = \$MailCustomer->getSex();

        // -----------------------------
        // plg_send_history
        // -----------------------------
        \$SendHistory = new MailMagazineSendHistory();

        // data
        \$SendHistory->setBody(\$MailTemplate->getBody());
        \$SendHistory->setSubject(\$MailTemplate->getSubject());
        \$SendHistory->setSendCount(1);
        \$SendHistory->setCompleteCount(1);
        \$SendHistory->setErrorCount(0);

        \$SendHistory->setEndDate(null);
        \$SendHistory->setUpdateDate(null);

        \$SendHistory->setCreateDate(\$currentDatetime);
        \$SendHistory->setStartDate(\$currentDatetime);

        // serialize
        \$SendHistory->setSearchData(base64_encode(serialize(\$formData)));
        \$this->entityManager->persist(\$SendHistory);
        \$this->entityManager->flush();

        return \$SendHistory;
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
        return "MailMagazine42/Tests/Web/MailMagazineCommon.php";
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
        return new Source("", "MailMagazine42/Tests/Web/MailMagazineCommon.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/MailMagazine42/Tests/Web/MailMagazineCommon.php");
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
