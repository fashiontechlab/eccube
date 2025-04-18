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

/* Api42/Resource/config/services.yaml */
class __TwigTemplate_74205e30e691215f7f58e46cce5f61c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Resource/config/services.yaml"));

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
        echo "security:
  enable_authenticator_manager: true
parameters:
    env(ECCUBE_OAUTH2_AUTHORIZATION_SERVER_PRIVATE_KEY): '%kernel.project_dir%/app/PluginData/Api42/oauth/private.key'
    env(ECCUBE_OAUTH2_RESOURCE_SERVER_PUBLIC_KEY): '%kernel.project_dir%/app/PluginData/Api42/oauth/public.key'
    env(ECCUBE_OAUTH2_ENCRYPTION_KEY): '<change.me>'

league_oauth2_server:
    role_prefix: ROLE_OAUTH2_

    authorization_server:
        private_key: '%env(ECCUBE_OAUTH2_AUTHORIZATION_SERVER_PRIVATE_KEY)%'
        private_key_passphrase: null
        encryption_key: '%env(ECCUBE_OAUTH2_ENCRYPTION_KEY)%'

      # Whether to enable the client credentials grant
        enable_client_credentials_grant: false

      # Whether to enable the password grant
        enable_password_grant: false

      # Whether to enable the refresh token grant
        enable_refresh_token_grant: true

      # Whether to enable the authorization code grant
        enable_auth_code_grant: true

      # Whether to enable the implicit grant
        enable_implicit_grant: false

    resource_server:
        public_key: '%env(ECCUBE_OAUTH2_RESOURCE_SERVER_PUBLIC_KEY)%'

    scopes:
        available: ['read', 'write']
        default: ['read']

    persistence:
        doctrine: null

services:
    Plugin\\Api42\\EventListener\\UserResolveListener:
        arguments:
            - '@Eccube\\Security\\Core\\User\\MemberProvider'
            - '@Symfony\\Component\\PasswordHasher\\Hasher\\UserPasswordHasherInterface'
        tags:
            - { name: kernel.event_listener, event: league.oauth2_server.event.user_resolve, method: onUserResolve }

    Plugin\\Api42\\GraphQL\\Types:
        class: Plugin\\Api42\\GraphQL\\Types
        arguments: [\"@doctrine.orm.entity_manager\"]
        lazy: true


    # Register nyholm/psr7 services for autowiring with PSR-17 (HTTP factories)
    Psr\\Http\\Message\\RequestFactoryInterface: '@nyholm.psr7.psr17_factory'
    Psr\\Http\\Message\\ResponseFactoryInterface: '@nyholm.psr7.psr17_factory'
    Psr\\Http\\Message\\ServerRequestFactoryInterface: '@nyholm.psr7.psr17_factory'
    Psr\\Http\\Message\\StreamFactoryInterface: '@nyholm.psr7.psr17_factory'
    Psr\\Http\\Message\\UploadedFileFactoryInterface: '@nyholm.psr7.psr17_factory'
    Psr\\Http\\Message\\UriFactoryInterface: '@nyholm.psr7.psr17_factory'

    # Register nyholm/psr7 services for autowiring with HTTPlug factories
    Http\\Message\\MessageFactory: '@nyholm.psr7.httplug_factory'
    Http\\Message\\RequestFactory: '@nyholm.psr7.httplug_factory'
    Http\\Message\\ResponseFactory: '@nyholm.psr7.httplug_factory'
    Http\\Message\\StreamFactory: '@nyholm.psr7.httplug_factory'
    Http\\Message\\UriFactory: '@nyholm.psr7.httplug_factory'

    nyholm.psr7.psr17_factory:
        class: Nyholm\\Psr7\\Factory\\Psr17Factory

    nyholm.psr7.httplug_factory:
        class: Nyholm\\Psr7\\Factory\\HttplugFactory

    core.api.allow_list:
        class: ArrayObject
        tags: ['eccube.api.allow_list']
        arguments:
            - #
                Eccube\\Entity\\AuthorityRole: ['id', 'deny_url', 'create_date', 'update_date', 'Authority', 'Creator']
                Eccube\\Entity\\BaseInfo: ['id', 'company_name', 'company_kana', 'postal_code', 'addr01', 'addr02', 'phone_number', 'business_hour', 'email01', 'email02', 'email03', 'email04', 'shop_name', 'shop_kana', 'shop_name_eng', 'update_date', 'good_traded', 'message', 'delivery_free_amount', 'delivery_free_quantity', 'option_mypage_order_status_display', 'option_nostock_hidden', 'option_favorite_product', 'option_product_delivery_fee', 'option_product_tax_rule', 'option_customer_activate', 'option_remember_me', 'php_path', 'option_point', 'basic_point_rate', 'point_conversion_rate', 'Country', 'Pref']
                Eccube\\Entity\\Block: ['id', 'name', 'file_name', 'use_controller', 'deletable', 'create_date', 'update_date', 'BlockPositions', 'DeviceType']
                Eccube\\Entity\\BlockPosition: ['section', 'block_id', 'layout_id', 'block_row', 'Block', 'Layout']
                Eccube\\Entity\\Cart: ['id', 'cart_key', 'pre_order_id', 'total_price', 'delivery_fee_total', 'sort_no', 'create_date', 'update_date', 'add_point', 'use_point', 'Customer', 'CartItems']
                Eccube\\Entity\\CartItem: ['id', 'price', 'quantity', 'point_rate', 'ProductClass', 'Cart']
                Eccube\\Entity\\Category: ['id', 'name', 'hierarchy', 'sort_no', 'create_date', 'update_date', 'ProductCategories', 'Children', 'Parent', 'Creator']
                Eccube\\Entity\\ClassCategory: ['id', 'backend_name', 'name', 'sort_no', 'visible', 'create_date', 'update_date', 'ClassName', 'Creator']
                Eccube\\Entity\\ClassName: ['id', 'backend_name', 'name', 'sort_no', 'create_date', 'update_date', 'ClassCategories', 'Creator']
                Eccube\\Entity\\Csv: ['id', 'entity_name', 'field_name', 'reference_field_name', 'disp_name', 'sort_no', 'enabled', 'create_date', 'update_date', 'CsvType', 'Creator']
                Eccube\\Entity\\Customer: ['id', 'name01', 'name02', 'kana01', 'kana02', 'company_name', 'postal_code', 'addr01', 'addr02', 'email', 'phone_number', 'birth', 'first_buy_date', 'last_buy_date', 'buy_times', 'buy_total', 'note', 'reset_expire', 'point', 'create_date', 'update_date', 'CustomerFavoriteProducts', 'CustomerAddresses', 'Orders', 'Status', 'Sex', 'Job', 'Country', 'Pref']
                Eccube\\Entity\\CustomerAddress: ['id', 'name01', 'name02', 'kana01', 'kana02', 'company_name', 'postal_code', 'addr01', 'addr02', 'phone_number', 'create_date', 'update_date', 'Customer', 'Country', 'Pref']
                Eccube\\Entity\\CustomerFavoriteProduct: ['id', 'create_date', 'update_date', 'Customer', 'Product']
                Eccube\\Entity\\Delivery: ['id', 'name', 'service_name', 'description', 'confirm_url', 'sort_no', 'visible', 'create_date', 'update_date', 'PaymentOptions', 'DeliveryFees', 'DeliveryTimes', 'Creator', 'SaleType']
                Eccube\\Entity\\DeliveryDuration: ['id', 'name', 'duration', 'sort_no']
                Eccube\\Entity\\DeliveryFee: ['id', 'fee', 'Delivery', 'Pref']
                Eccube\\Entity\\DeliveryTime: ['id', 'delivery_time', 'sort_no', 'visible', 'create_date', 'update_date', 'Delivery']
                Eccube\\Entity\\Layout: ['id', 'name', 'create_date', 'update_date', 'BlockPositions', 'PageLayouts', 'DeviceType']
                Eccube\\Entity\\MailHistory: ['id', 'send_date', 'mail_subject', 'mail_body', 'mail_html_body', 'Order', 'Creator']
                Eccube\\Entity\\MailTemplate: ['id', 'name', 'file_name', 'mail_subject', 'create_date', 'update_date', 'Creator']
                Eccube\\Entity\\Member: ['id', 'name', 'department', 'login_id', 'sort_no', 'create_date', 'update_date', 'login_date', 'Work', 'Authority', 'Creator']
                Eccube\\Entity\\News: ['id', 'publish_date', 'title', 'description', 'url', 'link_method', 'create_date', 'update_date', 'visible', 'Creator']
                Eccube\\Entity\\Order: ['id', 'pre_order_id', 'order_no', 'message', 'name01', 'name02', 'kana01', 'kana02', 'company_name', 'email', 'phone_number', 'postal_code', 'addr01', 'addr02', 'birth', 'subtotal', 'discount', 'delivery_fee_total', 'charge', 'tax', 'total', 'payment_total', 'payment_method', 'note', 'create_date', 'update_date', 'order_date', 'payment_date', 'currency_code', 'complete_message', 'complete_mail_message', 'add_point', 'use_point', 'OrderItems', 'Shippings', 'MailHistories', 'Customer', 'Country', 'Pref', 'Sex', 'Job', 'Payment', 'DeviceType', 'CustomerOrderStatus', 'OrderStatusColor', 'OrderStatus']
                Eccube\\Entity\\OrderItem: ['id', 'product_name', 'product_code', 'class_name1', 'class_name2', 'class_category_name1', 'class_category_name2', 'price', 'quantity', 'tax', 'tax_rate', 'tax_adjust', 'tax_rule_id', 'currency_code', 'processor_name', 'point_rate', 'Order', 'Product', 'ProductClass', 'Shipping', 'RoundingType', 'TaxType', 'TaxDisplayType', 'OrderItemType']
                Eccube\\Entity\\OrderPdf: ['member_id', 'title', 'message1', 'message2', 'message3', 'note1', 'note2', 'note3', 'create_date', 'update_date', 'visible']
                Eccube\\Entity\\Page: ['id', 'name', 'url', 'file_name', 'edit_type', 'author', 'description', 'keyword', 'create_date', 'update_date', 'meta_robots', 'meta_tags', 'PageLayouts', 'MasterPage']
                Eccube\\Entity\\PageLayout: ['page_id', 'layout_id', 'sort_no', 'Page', 'Layout']
                Eccube\\Entity\\Payment: ['id', 'method', 'charge', 'rule_max', 'sort_no', 'fixed', 'payment_image', 'rule_min', 'method_class', 'visible', 'create_date', 'update_date', 'PaymentOptions', 'Creator']
                Eccube\\Entity\\PaymentOption: ['delivery_id', 'payment_id', 'Delivery', 'Payment']
                Eccube\\Entity\\Plugin: ['id', 'name', 'code', 'enabled', 'version', 'source', 'initialized', 'create_date', 'update_date']
                Eccube\\Entity\\Product: ['id', 'name', 'note', 'description_list', 'description_detail', 'search_word', 'free_area', 'create_date', 'update_date', 'ProductCategories', 'ProductClasses', 'ProductImage', 'ProductTag', 'CustomerFavoriteProducts', 'Creator', 'Status']
                Eccube\\Entity\\ProductCategory: ['product_id', 'category_id', 'Product', 'Category']
                Eccube\\Entity\\ProductClass: ['id', 'code', 'stock', 'stock_unlimited', 'sale_limit', 'price01', 'price02', 'delivery_fee', 'visible', 'create_date', 'update_date', 'currency_code', 'point_rate', 'ProductStock', 'TaxRule', 'Product', 'SaleType', 'ClassCategory1', 'ClassCategory2', 'DeliveryDuration', 'Creator']
                Eccube\\Entity\\ProductImage: ['id', 'file_name', 'sort_no', 'create_date', 'Product', 'Creator']
                Eccube\\Entity\\ProductStock: ['id', 'stock', 'create_date', 'update_date', 'ProductClass', 'Creator']
                Eccube\\Entity\\ProductTag: ['id', 'create_date', 'Product', 'Tag', 'Creator']
                Eccube\\Entity\\Shipping: ['id', 'name01', 'name02', 'kana01', 'kana02', 'company_name', 'phone_number', 'postal_code', 'addr01', 'addr02', 'shipping_delivery_name', 'time_id', 'shipping_delivery_time', 'shipping_delivery_date', 'shipping_date', 'tracking_number', 'note', 'sort_no', 'create_date', 'update_date', 'mail_send_date', 'Order', 'OrderItems', 'Country', 'Pref', 'Delivery', 'Creator']
                Eccube\\Entity\\Tag: ['id', 'name', 'sort_no', 'ProductTag']
                Eccube\\Entity\\TaxRule: ['id', 'tax_rate', 'tax_adjust', 'apply_date', 'create_date', 'update_date', 'ProductClass', 'Creator', 'Country', 'Pref', 'Product', 'RoundingType']
                Eccube\\Entity\\Template: ['id', 'code', 'name', 'create_date', 'update_date', 'DeviceType']
                Eccube\\Entity\\Master\\Authority: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\Country: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\CsvType: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\CustomerOrderStatus: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\CustomerStatus: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\DeviceType: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\Job: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\OrderItemType: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\OrderStatus: ['display_order_count', 'id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\OrderStatusColor: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\PageMax: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\Pref: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\ProductListMax: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\ProductListOrderBy: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\ProductStatus: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\RoundingType: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\SaleType: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\Sex: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\TaxDisplayType: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\TaxType: ['id', 'name', 'sort_no']
                Eccube\\Entity\\Master\\Work: ['id', 'name', 'sort_no']

    api.queries:
        class: ArrayObject

    api.mutations:
        class: ArrayObject

    Plugin\\Api42\\GraphQL\\Schema:
        arguments:
            - '@Plugin\\Api42\\GraphQL\\Types'
            - '@api.queries'
            - '@api.mutations'
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Resource/config/services.yaml";
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
        return new Source("", "Api42/Resource/config/services.yaml", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Resource/config/services.yaml");
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
