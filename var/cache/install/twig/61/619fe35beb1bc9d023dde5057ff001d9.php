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

/* Api42/Resource/locale/messages.en.yaml */
class __TwigTemplate_9b51cfa526c4bea3d491298429d19134 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Resource/locale/messages.en.yaml"));

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
        echo "api:

  #------------------------------------------------------------------------------------
  # Settings : API
  #------------------------------------------------------------------------------------

  admin:
    management: API
    oauth:
      endpoint: Endpoint
      authorization_endpoint: Authorization endpoint
      token_endpoint: Token endpoint
      api_endpoint: API endpoint
      management: OAuth
      identifier: Client ID
      identifier_tooltip: Up to 32 alphanumeric characters
      secret: Client Secret
      secret_tooltip: Up to 128 alphanumeric characters
      scope: Scope
      scope_tooltip: GraphQL Query requires read, Mutation requires write/write Scope
      scope.read.description: 'Read %shop_name% data'
      scope.write.description: 'Write %shop_name% data'
      redirect_uri: Redirect URI
      redirect_uri_tooltip: You can enter multiple URIs separated by commas
      grant_type: Grant Type
      grant_type_tooltip: Supports only authorization code grant
      client_registration: Client Registration
      delete__confirm_title: Delete a Client
      delete__confirm_message: Are you sure to delete this Client?
      clear_expired_tokens: Clears all expired access and/or refresh tokens
      copy: Copy
      copied: Copied
      allow__confirm_message: 'Do you want to allow access this app to %shop_name%?'
      allow__confirm_description: 'Allow this app to:'
      allow: Allow
      deny: Deny
    webhook:
      management:  WebHook
      registration: WebHook Registration
      payload_url: Payload URL
      secret: Secret
      secret.tooltip: The payload is signed by HMAC-SHA256 with the entered value as a key in the X-ECCUBE-Signature header.
      enabled: Enable / Disable
      search_no_result_message: No WebHooks.
      delete__confirm_title: Delete a WebHook
      delete__confirm_message: Are you sure to delete this WebHook?
    graphiql:
      name: GraphiQL

  #------------------------------------------------------------------------------------
  # API
  #------------------------------------------------------------------------------------

  search_form_query:
    args:
      description:
        page: Page number
        limit: Limit number per page
  update_product_stock:
    args:
      description:
        product_code: SKU
        stock: Stock (If the stock_unlimited is set to false, please set the value more than 0.)
        stock_unlimited: 'Stock unlimited (Specify false: Limited or true: Unlimited)'
  update_shipped:
    args:
      description:
        id: Shipping ID
        shipping_date: Shipping Date (Specify like Y-m-d\\TH:i:sP. Execution date if not specified.)
        shipping_delivery_name: Delivery Company Name
        tracking_number: Tracking No.
        note: Notes
        is_send_mail: Shipment completion email send flag (specify true when sending)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Resource/locale/messages.en.yaml";
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
        return new Source("", "Api42/Resource/locale/messages.en.yaml", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Resource/locale/messages.en.yaml");
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
