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

/* Coupon42/Controller/CouponShoppingController.php */
class __TwigTemplate_6af4a9e83983186084b8b4af06fe6ee6 extends Template
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

namespace Plugin\\Coupon42\\Controller;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Customer;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\DeliveryTimeRepository;
use Eccube\\Service\\CartService;
use Eccube\\Service\\OrderHelper;
use Plugin\\Coupon42\\Entity\\Coupon;
use Plugin\\Coupon42\\Form\\Type\\CouponUseType;
use Plugin\\Coupon42\\Repository\\CouponOrderRepository;
use Plugin\\Coupon42\\Repository\\CouponRepository;
use Plugin\\Coupon42\\Service\\CouponService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class CouponShoppingController extends AbstractController
{
    /**
     * @var DeliveryTimeRepository
     */
    private \$deliveryTimeRepository;

    /**
     * @var CartService
     */
    private \$cartService;

    /**
     * @var OrderHelper
     */
    private \$orderHelper;

    /**
     * @var CouponService
     */
    private \$couponService;

    /**
     * @var CouponRepository
     */
    private \$couponRepository;

    /**
     * @var CouponOrderRepository
     */
    private \$couponOrderRepository;

    /**
     * CouponShoppingController constructor.
     *
     * @param DeliveryTimeRepository \$deliveryTimeRepository
     * @param CartService \$cartService
     * @param CouponService \$couponService
     * @param CouponRepository \$couponRepository
     * @param CouponOrderRepository \$couponOrderRepository
     */
    public function __construct(DeliveryTimeRepository \$deliveryTimeRepository, CartService \$cartService, OrderHelper \$orderHelper, CouponService \$couponService, CouponRepository \$couponRepository, CouponOrderRepository \$couponOrderRepository)
    {
        \$this->deliveryTimeRepository = \$deliveryTimeRepository;
        \$this->cartService = \$cartService;
        \$this->orderHelper = \$orderHelper;
        \$this->couponService = \$couponService;
        \$this->couponRepository = \$couponRepository;
        \$this->couponOrderRepository = \$couponOrderRepository;
    }

    /**
     * クーポン入力、登録画面.
     *
     * @param Request     \$request
     *
     * @return array|RedirectResponse
     * @Route(\"/plugin/coupon/shopping/shopping_coupon\", name=\"plugin_coupon_shopping\")
     * @Template(\"Coupon42/Resource/template/default/shopping_coupon.twig\")
     *
     * @see https://github.com/EC-CUBE/coupon-plugin/issues/128
     */
    public function shoppingCoupon(Request \$request)
    {
        \$preOrderId = \$this->cartService->getPreOrderId();
        /** @var Order \$Order */
        \$Order = \$this->orderHelper->getPurchaseProcessingOrder(\$preOrderId);

        if (!\$Order) {
            \$this->addError('front.shopping.order_error');

            return \$this->redirectToRoute('shopping_error');
        }
        \$form = \$this->formFactory->createBuilder(CouponUseType::class)->getForm();
        // クーポンコードを取得する
        \$CouponOrder = \$this->couponOrderRepository->getCouponOrder(\$Order->getPreOrderId());
        \$couponCd = null;
        if (\$CouponOrder) {
            \$couponCd = \$CouponOrder->getCouponCd();
        }

        \$form->get('coupon_cd')->setData(\$couponCd);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            // サービスの取得
            /** @var CouponService \$service */
            \$service = \$this->couponService;
            \$formCouponCd = \$form->get('coupon_cd')->getData();
            \$formCouponCancel = \$form->get('coupon_use')->getData();
            // ---------------------------------
            // クーポンコード入力項目追加
            // ----------------------------------
            if (\$formCouponCancel == 0) {
                // クーポンを利用しない
                \$this->couponService->removeCouponOrder(\$Order);
                return \$this->redirectToRoute('shopping');
            } else {
                // クーポンを利用する
                \$discount = 0;
                \$error = false;
                // クーポン情報を取得
                /* @var \$Coupon Coupon */
                \$Coupon = \$this->couponRepository->findActiveCoupon(\$formCouponCd);
                if (!\$Coupon) {
                    \$form->get('coupon_cd')->addError(new FormError(trans('plugin_coupon.front.shopping.notexists')));
                    \$error = true;
                }

                if (\$this->isGranted('ROLE_USER')) {
                    \$Customer = \$this->getUser();
                } else {
                    \$Customer = \$this->orderHelper->getNonMember();
                    if (\$Coupon) {
                        if (\$Coupon->getCouponMember()) {
                            \$form->get('coupon_cd')->addError(new FormError(trans('plugin_coupon.front.shopping.member')));
                            \$error = true;
                        }
                    }
                }

                \$couponUsedOrNot = \$this->couponService->checkCouponUsedOrNot(\$formCouponCd, \$Customer);
                if (\$Coupon && \$couponUsedOrNot) {
                    // 既に存在している
                    \$form->get('coupon_cd')->addError(new FormError(trans('plugin_coupon.front.shopping.sameuser')));
                    \$error = true;
                }

                // ----------------------------------
                // 値引き項目追加 / 合計金額上書き
                // ----------------------------------
                if (!\$error && \$Coupon) {
                    \$couponProducts = \$service->existsCouponProduct(\$Coupon, \$Order);
                    \$discount = \$service->recalcOrder(\$Coupon, \$couponProducts);

                    // クーポン情報を登録
                    \$service->saveCouponOrder(\$Order, \$Coupon, \$formCouponCd, \$Customer, \$discount);

                    return \$this->redirectToRoute('shopping');
                } else {
                    // エラーが発生した場合、前回設定されているクーポンがあればその金額を再設定する
                    if (\$couponCd && \$Coupon) {
                        // クーポン情報を取得
                        \$Coupon = \$this->couponRepository->findActiveCoupon(\$couponCd);
                        if (\$Coupon) {
                            \$couponProducts = \$service->existsCouponProduct(\$Coupon, \$Order);
                            // 値引き額を取得
                            \$discount = \$service->recalcOrder(\$Coupon, \$couponProducts);
                            // クーポン情報を登録
                            \$service->saveCouponOrder(\$Order, \$Coupon, \$couponCd, \$Customer, \$discount);
                        }
                    }
                }
            }
        }

        return [
            'form' => \$form->createView(),
            'Order' => \$Order,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Controller/CouponShoppingController.php";
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
        return new Source("", "Coupon42/Controller/CouponShoppingController.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Coupon42/Controller/CouponShoppingController.php");
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
