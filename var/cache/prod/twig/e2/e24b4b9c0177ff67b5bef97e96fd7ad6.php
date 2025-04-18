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

/* Recommend42/Entity/RecommendProduct.php */
class __TwigTemplate_ecddd6516d82e07a1c3379b5e7dc1bda extends Template
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

namespace Plugin\\Recommend42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;
use Eccube\\Entity\\Product;

/**
 * RecommendProduct
 *
 * @ORM\\Table(name=\"plg_recommend_product\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\Recommend42\\Repository\\RecommendProductRepository\")
 */
class RecommendProduct extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"recommend_id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"comment\", type=\"text\", nullable=true)
     */
    private \$comment;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\", nullable=true)
     */
    private \$sort_no;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"visible\", type=\"boolean\", options={\"default\":true})
     */
    private \$visible;

    /**
     * @var \\DateTime
     *
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @var \\DateTime
     *
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    /**
     * @var \\Eccube\\Entity\\Product
     *
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Product\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"product_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Product;

    /**
     * Get recommend product id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set recommend product id.
     *
     * @param int \$id
     *
     * @return \$this
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Get commend.
     *
     * @return string
     */
    public function getComment()
    {
        return \$this->comment;
    }

    /**
     * Set comment.
     *
     * @param string \$comment
     *
     * @return \$this
     */
    public function setComment(\$comment)
    {
        \$this->comment = \$comment;

        return \$this;
    }

    /**
     * Get rank.
     *
     * @return int
     */
    public function getSortno()
    {
        return \$this->sort_no;
    }

    /**
     * Set rank.
     *
     * @param int \$sort_no
     *
     * @return \$this
     */
    public function setSortno(\$sort_no)
    {
        \$this->sort_no = \$sort_no;

        return \$this;
    }

    /**
     * Set visible.
     *
     * @param bool \$visible
     *
     * @return \$this
     */
    public function setVisible(\$visible)
    {
        \$this->visible = \$visible;

        return \$this;
    }

    /**
     * Get del_flg.
     *
     * @return bool
     */
    public function getVisible()
    {
        return \$this->visible;
    }

    /**
     * Set create_date.
     *
     * @param \\DateTime \$createDate
     *
     * @return \$this
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
     * @return \$this
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
     * Set Product.
     *
     * @param \\Eccube\\Entity\\Product \$Product
     *
     * @return \$this
     */
    public function setProduct(Product \$Product)
    {
        \$this->Product = \$Product;

        return \$this;
    }

    /**
     * Get Product.
     *
     * @return \\Eccube\\Entity\\Product|null
     */
    public function getProduct()
    {
        return \$this->Product;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Recommend42/Entity/RecommendProduct.php";
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
        return new Source("", "Recommend42/Entity/RecommendProduct.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Recommend42/Entity/RecommendProduct.php");
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
