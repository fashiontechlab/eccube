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

/* Api42/Entity/WebHook.php */
class __TwigTemplate_643a02e9a1ffc0253cc3d15071343555 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Entity/WebHook.php"));

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

namespace Plugin\\Api42\\Entity;

use DateTime;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * Class WebHook
 *
 * @ORM\\Table(name=\"plg_api_webhook\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\Api42\\Repository\\WebHookRepository\")
 */
class WebHook
{
    /**
     * @var integer ID
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var string Payload URL
     *
     * @ORM\\Column(name=\"payload_url\", type=\"string\", length=1024)
     */
    private \$payloadUrl;

    /**
     * @var string Secret
     *
     * @ORM\\Column(name=\"secret\", type=\"string\", length=1024, nullable=true)
     */
    private \$secret;

    /**
     * @var boolean Whether this WebHook is enabled.
     *
     * @ORM\\Column(name=\"enabled\", type=\"boolean\")
     */
    private \$enabled = false;

    /**
     * @var DateTime
     *
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$createDate;

    /**
     * @var DateTime
     *
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$updateDate;

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param int \$id
     */
    public function setId(\$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return string
     */
    public function getPayloadUrl()
    {
        return \$this->payloadUrl;
    }

    /**
     * @param string \$payloadUrl
     */
    public function setPayloadUrl(\$payloadUrl)
    {
        \$this->payloadUrl = \$payloadUrl;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return \$this->secret;
    }

    /**
     * @param string \$secret
     */
    public function setSecret(\$secret)
    {
        \$this->secret = \$secret;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return \$this->enabled;
    }

    /**
     * @param bool \$enabled
     */
    public function setEnabled(\$enabled)
    {
        \$this->enabled = \$enabled;
    }

    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return \$this->createDate;
    }

    /**
     * @param DateTime \$createDate
     */
    public function setCreateDate(DateTime \$createDate)
    {
        \$this->createDate = \$createDate;
    }

    /**
     * @return DateTime
     */
    public function getUpdateDate()
    {
        return \$this->updateDate;
    }

    /**
     * @param DateTime \$updateDate
     */
    public function setUpdateDate(DateTime \$updateDate)
    {
        \$this->updateDate = \$updateDate;
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
        return "Api42/Entity/WebHook.php";
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
        return new Source("", "Api42/Entity/WebHook.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Entity/WebHook.php");
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
