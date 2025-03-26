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

/* Api42/EventListener/AuthorizationRequestResolveListener.php */
class __TwigTemplate_ae4a9e6ccec4cadc146e77a232d3488f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/EventListener/AuthorizationRequestResolveListener.php"));

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

namespace Plugin\\Api42\\EventListener;

use Eccube\\Entity\\Master\\Authority;
use Eccube\\Entity\\Member;
use League\\OAuth2\\Server\\Exception\\OAuthServerException;
use Plugin\\Api42\\Form\\Type\\Admin\\OAuth2AuthorizationType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use League\\Bundle\\OAuth2ServerBundle\\Event\\AuthorizationRequestResolveEvent;
use League\\Bundle\\OAuth2ServerBundle\\OAuth2Events;
use Twig\\Environment as Twig;

final class AuthorizationRequestResolveListener implements EventSubscriberInterface
{
    /** @var Twig */
    protected \$twig;

    /** @var FormFactoryInterface */
    protected \$formFactory;

    /** @var RequestStack */
    protected \$requestStack;

    public function __construct(
        Twig \$twig,
        FormFactoryInterface \$formFactory,
        RequestStack \$requestStack
    ) {
        \$this->twig = \$twig;
        \$this->formFactory = \$formFactory;
        \$this->requestStack = \$requestStack;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            OAuth2Events::AUTHORIZATION_REQUEST_RESOLVE => 'onAuthorizationRequestResolve',
        ];
    }

    public function onAuthorizationRequestResolve(AuthorizationRequestResolveEvent \$event): void
    {
        \$user = \$event->getUser();
        \$request = \$this->requestStack->getMainRequest();

        // システム管理者以外は承認しない
        if (!\$user instanceof Member || \$user->getAuthority()->getId() !== Authority::ADMIN) {
            \$event->resolveAuthorization(AuthorizationRequestResolveEvent::AUTHORIZATION_DENIED);

            return;
        }

        if (!\$request->query->has('redirect_uri')) {
            // redirect_uri_mismatch を返すべきだが OAuthServerException ではサポートされていない
            // http://openid-foundation-japan.github.io/draft-ietf-oauth-v2.ja.html#auth-error-codes
            throw OAuthServerException::invalidRequest('redirect_uri');
        }

        if (!\$event->isAuthorizationApproved()) {
            \$builder = \$this->formFactory->createBuilder(OAuth2AuthorizationType::class);
            \$form = \$builder->getForm();

            \$form['client_id']->setData(\$event->getClient()->getIdentifier());
            \$form['client_secret']->setData(\$event->getClient()->getSecret());
            \$form['redirect_uri']->setData(\$event->getRedirectUri());
            \$form['state']->setData(\$event->getState());
            \$form['scope']->setData(join(' ', \$event->getScopes()));
            \$content = \$this->twig->render(
                '@Api42/admin/OAuth/authorization.twig',
                [
                    'scopes' => \$event->getScopes(),
                    'form' => \$form->createView(),
                ]
            );

            if ('POST' === \$request->getMethod()) {
                \$form->handleRequest(\$request);
                if (\$form->isSubmitted() && \$form->isValid()) {
                    if (\$form->get('approve')->isClicked()) {
                        \$event->resolveAuthorization(AuthorizationRequestResolveEvent::AUTHORIZATION_APPROVED);
                    }
                } else {
                    \$event->resolveAuthorization(AuthorizationRequestResolveEvent::AUTHORIZATION_DENIED);
                }
            } else {
                \$event->setResponse(new Response(\$content));
            }
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
        return "Api42/EventListener/AuthorizationRequestResolveListener.php";
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
        return new Source("", "Api42/EventListener/AuthorizationRequestResolveListener.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/EventListener/AuthorizationRequestResolveListener.php");
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
