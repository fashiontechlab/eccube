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

/* MailMagazine42/Entity/MailMagazineSendHistory.php */
class __TwigTemplate_95d83606a4da1fb2a7d5d29141c12e32 extends Template
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

namespace Plugin\\MailMagazine42\\Entity;

use Eccube\\Entity\\AbstractEntity;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Member;

/**
 * SendHistory
 * Plugin MailMagazine.
 *
 * @ORM\\Table(name=\"plg_mailmaga_send_history\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\MailMagazine42\\Repository\\MailMagazineSendHistoryRepository\")
 */
class MailMagazineSendHistory extends AbstractEntity
{
    /**
     * @ORM\\Column(name=\"send_id\", type=\"integer\", options={\"unsigned\": true})
     * @ORM\\Id()
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     *
     * @var int
     */
    private \$id;

    /**
     * @ORM\\Column(name=\"mail_method\", type=\"smallint\", nullable=true, options={\"unsigned\": false})
     *
     * @var int
     */
    private \$mail_method;

    /**
     * @ORM\\Column(name=\"subject\", type=\"string\", nullable=true, length=255)
     *
     * @var string
     */
    private \$subject;

    /**
     * @ORM\\Column(name=\"body\", type=\"text\", nullable=true)
     *
     * @var string
     */
    private \$body;

    /**
     * @ORM\\Column(name=\"html_body\", type=\"text\", nullable=true)
     *
     * @var string
     */
    private \$html_body;

    /**
     * @ORM\\Column(name=\"send_count\", type=\"integer\", nullable=true, options={\"unsigned\": true})
     *
     * @var int
     */
    private \$send_count;

    /**
     * @ORM\\Column(name=\"complete_count\", type=\"integer\", nullable=true, options={\"unsigned\": true, \"default\": 0})
     *
     * @var int
     */
    private \$complete_count;

    /**
     * @ORM\\Column(name=\"error_count\", type=\"integer\", nullable=true, options={\"unsigned\": true, \"default\": 0})
     *
     * @var int
     */
    private \$error_count;

    /**
     * @ORM\\Column(name=\"start_date\", type=\"datetimetz\", nullable=true)
     *
     * @var \\DateTime|null
     */
    private \$start_date;

    /**
     * @ORM\\Column(name=\"end_date\", type=\"datetimetz\", nullable=true)
     *
     * @var \\DateTime|null
     */
    private \$end_date;

    /**
     * @ORM\\Column(name=\"search_data\", type=\"text\", nullable=true)
     *
     * @var string
     */
    private \$search_data;

    /**
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     *
     * @var \\DateTime
     */
    private \$create_date;

    /**
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     *
     * @var \\DateTime
     */
    private \$update_date;

    /**
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Member\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"creator_id\", referencedColumnName=\"id\")
     * })
     *
     * @var \\Eccube\\Entity\\Member
     */
    private \$Creator;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set mail_method.
     *
     * @param int \$mailMethod
     *
     * @return MailMagazineSendHistory
     */
    public function setMailMethod(\$mailMethod)
    {
        \$this->mail_method = \$mailMethod;

        return \$this;
    }

    /**
     * Get mail_method.
     *
     * @return int
     */
    public function getMailMethod()
    {
        return \$this->mail_method;
    }

    /**
     * Set subject.
     *
     * @param string \$subject
     *
     * @return MailMagazineSendHistory
     */
    public function setSubject(\$subject)
    {
        \$this->subject = \$subject;

        return \$this;
    }

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return \$this->subject;
    }

    /**
     * Set body.
     *
     * @param string \$body
     *
     * @return MailMagazineSendHistory
     */
    public function setBody(\$body)
    {
        \$this->body = \$body;

        return \$this;
    }

    /**
     * Get body.
     *
     * @return string
     */
    public function getBody()
    {
        return \$this->body;
    }

    /**
     * @return string
     */
    public function getHtmlBody()
    {
        return \$this->html_body;
    }

    /**
     * @param string \$html_body
     *
     * @return MailMagazineSendHistory
     */
    public function setHtmlBody(\$html_body)
    {
        \$this->html_body = \$html_body;

        return \$this;
    }

    /**
     * Set send_count.
     *
     * @param int \$sendCount
     *
     * @return MailMagazineSendHistory
     */
    public function setSendCount(\$sendCount)
    {
        \$this->send_count = \$sendCount;

        return \$this;
    }

    /**
     * Get send_count.
     *
     * @return int
     */
    public function getSendCount()
    {
        return \$this->send_count;
    }

    /**
     * Set complete_count.
     *
     * @param int \$completeCount
     *
     * @return MailMagazineSendHistory
     */
    public function setCompleteCount(\$completeCount)
    {
        \$this->complete_count = \$completeCount;

        return \$this;
    }

    /**
     * Get complete_count.
     *
     * @return int
     */
    public function getCompleteCount()
    {
        return \$this->complete_count;
    }

    /**
     * @return int
     */
    public function getErrorCount()
    {
        return \$this->error_count;
    }

    /**
     * @param int \$errorCount
     *
     * @return MailMagazineSendHistory
     */
    public function setErrorCount(\$errorCount)
    {
        \$this->error_count = \$errorCount;

        return \$this;
    }

    /**
     * Set start_date.
     *
     * @param \\DateTime \$startDate
     *
     * @return MailMagazineSendHistory
     */
    public function setStartDate(\$startDate)
    {
        \$this->start_date = \$startDate;

        return \$this;
    }

    /**
     * Get start_date.
     *
     * @return \\DateTime
     */
    public function getStartDate()
    {
        return \$this->start_date;
    }

    /**
     * Set end_date.
     *
     * @param \\DateTime \$endDate
     *
     * @return MailMagazineSendHistory
     */
    public function setEndDate(\$endDate)
    {
        \$this->end_date = \$endDate;

        return \$this;
    }

    /**
     * Get end_date.
     *
     * @return \\DateTime
     */
    public function getEndDate()
    {
        return \$this->end_date;
    }

    /**
     * Set search_data.
     *
     * @param string \$searchData
     *
     * @return MailMagazineSendHistory
     */
    public function setSearchData(\$searchData)
    {
        \$this->search_data = \$searchData;

        return \$this;
    }

    /**
     * Get search_data.
     *
     * @return string
     */
    public function getSearchData()
    {
        return \$this->search_data;
    }

    /**
     * Set create_date.
     *
     * @param \\DateTime \$createDate
     *
     * @return MailMagazineSendHistory
     */
    public function setCreateDate(\$createDate)
    {
        \$this->create_date = \$createDate;

        return \$this;
    }

    /**
     * Get create_date.
     *
     * @return \\DateTime
     */
    public function getCreateDate()
    {
        return \$this->create_date;
    }

    /**
     * Set update_date.
     *
     * @param \\DateTime \$updateDate
     *
     * @return MailMagazineSendHistory
     */
    public function setUpdateDate(\$updateDate)
    {
        \$this->update_date = \$updateDate;

        return \$this;
    }

    /**
     * Get update_date.
     *
     * @return \\DateTime
     */
    public function getUpdateDate()
    {
        return \$this->update_date;
    }

    /**
     * Set Creator.
     *
     * @param Member \$creator
     *
     * @return MailMagazineSendHistory
     */
    public function setCreator(Member \$creator = null)
    {
        \$this->Creator = \$creator;

        return \$this;
    }

    /**
     * Get Creator.
     *
     * @return \\Eccube\\Entity\\Member
     */
    public function getCreator()
    {
        return \$this->Creator;
    }

    /**
     * 配信エラーの有無にかかわらず、すべて送信したかどうかの判定.
     *
     * @return bool 配信完了した場合はtrue
     */
    public function isComplete()
    {
        return \$this->getCompleteCount() == \$this->getSendCount();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Entity/MailMagazineSendHistory.php";
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
        return new Source("", "MailMagazine42/Entity/MailMagazineSendHistory.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/MailMagazine42/Entity/MailMagazineSendHistory.php");
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
