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

/* Coupon42/Entity/CouponDetail.php */
class __TwigTemplate_bac8ae81da6cb95994f3df0ba64b014c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Entity/CouponDetail.php"));

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

namespace Plugin\\Coupon42\\Entity;

use Eccube\\Entity\\AbstractEntity;
use Eccube\\Entity\\Product;
use Eccube\\Entity\\Category;
use Doctrine\\ORM\\EntityNotFoundException;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * Coupon Detail
 *
 * @ORM\\Table(name=\"plg_coupon_detail\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\Coupon42\\Repository\\CouponDetailRepository\")
 */
class CouponDetail extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"coupon_detail_id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"coupon_type\", type=\"smallint\", nullable=true)
     */
    private \$coupon_type;

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
     * @var Coupon
     *
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\Coupon42\\Entity\\Coupon\", inversedBy=\"CouponDetails\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"coupon_id\", referencedColumnName=\"coupon_id\")
     * })
     */
    private \$Coupon;

    /**
     * @var \\Eccube\\Entity\\Product
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Product\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"product_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Product;

    /**
     * @var \\Eccube\\Entity\\Category
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Category\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"category_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Category;

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
     * Set id.
     *
     * @param int \$id
     *
     * @return CouponDetail
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Set coupon_type.
     *
     * @param int \$couponType
     *
     * @return CouponDetail
     */
    public function setCouponType(\$couponType)
    {
        \$this->coupon_type = \$couponType;

        return \$this;
    }

    /**
     * Get coupon_type.
     *
     * @return int
     */
    public function getCouponType()
    {
        return \$this->coupon_type;
    }

    /**
     * Set del_flg.
     *
     * @param bool \$visible
     *
     * @return CouponDetail
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
    public function isVisible()
    {
        return \$this->visible;
    }

    /**
     * Set create_date.
     *
     * @param \\DateTime \$createDate
     *
     * @return CouponDetail
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
     * @return CouponDetail
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
     * Set Coupon.
     *
     * @param Coupon \$coupon
     *
     * @return CouponDetail
     */
    public function setCoupon(Coupon \$coupon)
    {
        \$this->Coupon = \$coupon;

        return \$this;
    }

    /**
     * Get Coupon.
     *
     * @return Coupon
     */
    public function getCoupon()
    {
        return \$this->Coupon;
    }

    /**
     * Set Product.
     *
     * @param Product \$product
     *
     * @return CouponDetail
     */
    public function setProduct(Product \$product = null)
    {
        \$this->Product = \$product;

        return \$this;
    }

    /**
     * Get Product.
     *
     * @return Product
     */
    public function getProduct()
    {
        return \$this->Product;
    }

    /**
     * Set Category.
     *
     * @param Category \$category
     *
     * @return CouponDetail
     */
    public function setCategory(Category \$category = null)
    {
        \$this->Category = \$category;

        return \$this;
    }

    /**
     * Get Category.
     *
     * @return Category
     */
    public function getCategory()
    {
        return \$this->Category;
    }

    /**
     * 親カテゴリ名を含むカテゴリ名を取得する.
     *
     * @return string
     */
    public function getCategoryFullName()
    {
        try {
            if (is_null(\$this->Category)) {
                return null;
            }
            \$fulName = \$this->Category->getName();
            // 親カテゴリがない場合はカテゴリ名を返す.
            if (is_null(\$this->Category->getParent())) {
                return \$fulName;
            }
            // 親カテゴリ名を結合する
            \$ParentCategory = \$this->Category->getParent();
            while (!is_null(\$ParentCategory)) {
                \$fulName = \$ParentCategory->getName().'　＞　'.\$fulName;
                \$ParentCategory = \$ParentCategory->getParent();
            }

            return \$fulName;
        } catch (EntityNotFoundException \$e) {
            return null;
        }
    }

    /**
     * get product name.
     *
     * @return string
     */
    public function getProductName()
    {
        try {
            if (is_null(\$this->Product)) {
                return null;
            }
            \$fulName = \$this->Product->getName();

            return \$fulName;
        } catch (EntityNotFoundException \$e) {
            return null;
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
        return "Coupon42/Entity/CouponDetail.php";
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
        return new Source("", "Coupon42/Entity/CouponDetail.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Coupon42/Entity/CouponDetail.php");
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
