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

/* SiteKit42/Entity/IdToken.php */
class __TwigTemplate_83ebc8ad9f99db2261b9daae19e893a4 extends Template
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

namespace Plugin\\SiteKit42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Member;

/**
 * Class IdToken
 *
 * @ORM\\Table(name=\"plg_site_kit_id_token\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\SiteKit42\\Repository\\IdTokenRepository\")
 */
class IdToken
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var Member
     *
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Member\", inversedBy=\"IdToken\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"member_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Member;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"id_token\", type=\"text\")
     */
    private \$id_token;

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
    public function setId(int \$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return Member
     */
    public function getMember()
    {
        return \$this->Member;
    }

    /**
     * @param Member \$Member
     */
    public function setMember(Member \$Member)
    {
        \$this->Member = \$Member;
    }

    /**
     * @return string
     */
    public function getIdToken()
    {
        return \$this->id_token;
    }

    /**
     * @param string \$id_token
     */
    public function setIdToken(string \$id_token)
    {
        \$this->id_token = \$id_token;
    }


}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "SiteKit42/Entity/IdToken.php";
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
        return new Source("", "SiteKit42/Entity/IdToken.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/SiteKit42/Entity/IdToken.php");
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
