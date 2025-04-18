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

/* SiteKit42/Controller/Admin/ConfigController.php */
class __TwigTemplate_01b324328ca645cdec82e2a6032ee5c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteKit42/Controller/Admin/ConfigController.php"));

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

namespace Plugin\\SiteKit42\\Controller\\Admin;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Member;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Service\\SystemService;
use Eccube\\Util\\CacheUtil;
use Eccube\\Util\\StringUtil;
use Google_Service_SiteVerification;
use Google_Service_Webmasters;
use GuzzleHttp\\Client;
use Plugin\\SiteKit42\\Entity\\IdToken;
use Plugin\\SiteKit42\\Repository\\IdTokenRepository;
use Plugin\\SiteKit42\\Service\\Google_Site_Kit_Client;
use Plugin\\SiteKit42\\Service\\Google_Site_Kit_Proxy_Client;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Yaml\\Yaml;

class ConfigController extends AbstractController
{
    const SESSION_KEY_SITE_KIT_NONCE = 'session.sitekit.nonce';

    /**
     * @var BaseInfoRepository
     */
    protected \$baseInfoRepository;

    /**
     * @var IdTokenRepository
     */
    private \$idTokenRepository;
    /**
     * @var Google_Site_Kit_Proxy_Client
     */
    private \$siteKitClient;

    /**
     * ConfigController constructor.
     */
    public function __construct(BaseInfoRepository \$baseInfoRepository, IdTokenRepository \$idTokenRepository, Google_Site_Kit_Proxy_Client \$siteKitClient)
    {
        \$this->baseInfoRepository = \$baseInfoRepository;
        \$this->idTokenRepository = \$idTokenRepository;
        \$this->siteKitClient = \$siteKitClient;
    }

    /**
     * @Route(\"/%eccube_admin_route%/site_kit/config\", name=\"site_kit42_admin_config\")
     * @Template(\"@SiteKit42/admin/config.twig\")
     */
    public function index(Request \$request)
    {
        \$nonce = StringUtil::quickRandom();
        \$this->session->set(self::SESSION_KEY_SITE_KIT_NONCE, \$nonce);

        \$params = http_build_query([
            'name' => \$this->baseInfoRepository->get()->getShopName(),
            'url' => \$this->generateUrl('homepage', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'redirect_uri' => \$this->generateUrl(
                'site_kit_callback',
                [],
                UrlGeneratorInterface::ABSOLUTE_URL),
            'action_uri' => \$this->generateUrl(
                'site_kit_action_callback',
                [],
                UrlGeneratorInterface::ABSOLUTE_URL),
            'return_uri' => \$this->generateUrl(
                'site_kit42_admin_config',
                [],
                UrlGeneratorInterface::ABSOLUTE_URL),
            'analytics_redirect_uri' => \$this->generateUrl(
                'site_kit_analytics_callback',
                [],
                UrlGeneratorInterface::ABSOLUTE_URL),
            'application_name' => Google_Site_Kit_Client::CLIENT_NAME,
            'nonce' => \$nonce,
            'supports' => 'credentials_retrieval file_verification',
            'scope' => implode(' ', ['profile',
                Google_Service_SiteVerification::SITEVERIFICATION,
                Google_Service_Webmasters::WEBMASTERS,
            ]),
            'hl' => 'ja',
        ]);
        \$oauthUrl = 'https://sitekit.withgoogle.com/site-management/setup/?'.\$params;

        /* @var Member \$Member */
        return [
            'oauth_url' => \$oauthUrl,
            'user_info' => \$this->getUserInfo(),
        ];
    }

    /**
     * @Route(\"/%eccube_admin_route%/cube_kit/analytics_callback\", name=\"site_kit_analytics_callback\")
     */
    public function analyticsCallback()
    {
    }

    public function siteVerification()
    {
        \$file = \$this->eccubeConfig['plugin_data_realdir'].'/SiteKit42/google-site-verification.txt';
        if (file_exists(\$file)) {
            \$verificationToken = file_get_contents(\$file);
            return new Response(\$verificationToken);
        }

        throw new NotFoundHttpException();
    }

    /**
     * @Route(\"/%eccube_admin_route%/cube_kit/action_callback\", name=\"site_kit_action_callback\", methods={\"GET\"})
     * @Route(\"/cube_kit/action_callback\", methods={\"GET\"})
     */
    public function actionCallback(Request \$request, CacheUtil \$cacheUtil, SystemService \$systemService, RouterInterface \$router)
    {
        \$nonce = \$this->session->get(self::SESSION_KEY_SITE_KIT_NONCE);
        if (\$nonce !== \$request->get('nonce')) {
            throw new BadRequestHttpException();
        }

        if (\$request->get('googlesitekit_verification_token')) {
            if (\$request->get('googlesitekit_verification_token_type') == 'FILE') {
                \$token = \$request->get('googlesitekit_verification_token');
                \$filesystem = new Filesystem();
                \$filesystem->dumpFile(
                    \$this->eccubeConfig['plugin_data_realdir'].'/SiteKit42/google-site-verification.txt',
                    'google-site-verification: '.\$token
                );

                \$systemService->switchMaintenance(true);

                // ルーティング生成
                \$yaml = Yaml::dump([
                    'site_kit_google_site_verification' => [
                        'path' => '/'.\$token,
                        'controller' => 'Plugin\\SiteKit42\\Controller\\Admin\\ConfigController::siteVerification',
                    ]
                ]);
                \$filesystem->dumpFile(
                    \$this->eccubeConfig['plugin_data_realdir'].'/SiteKit42/routes.yaml',
                    \$yaml);

                \$cacheUtil->clearCache();

                // sitekit.withgoogle.comへリダイレクトするため、画面描画後のメンテナンス解除ができない。
                // 従来のEventでのメンテナンス解除を行う
                \$systemService->disableMaintenance();
            }

            \$params = http_build_query([
                'application_name' => 'ec-cube/google-site-kit/0.1.0',
                'nonce' => \$nonce,
                'supports' => 'credentials_retrieval file_verification',
                'code' => \$request->get('googlesitekit_code'),
                'site_code' => \$request->get('googlesitekit_site_code'),
                'verify' => 'true',
                'verification_method' => 'FILE',
                'hl' => 'ja',
            ]);

            return \$this->redirect('https://sitekit.withgoogle.com/site-management/setup/?'.\$params);
        }

        \$client = new Client();
        \$response = \$client->post('https://sitekit.withgoogle.com/o/oauth2/site/', [
            'form_params' => [
                'code' => \$request->get('googlesitekit_code'),
                'site_code' => \$request->get('googlesitekit_site_code')
            ]
        ]);

        if (\$response->getStatusCode() == 200) {
            \$payload = json_decode(\$response->getBody()->getContents(), true);

            \$BaseInfo = \$this->baseInfoRepository->get();
            \$BaseInfo->setSiteKitSiteId(\$payload['site_id']);
            \$BaseInfo->setSiteKitSiteSecret(\$payload['site_secret']);
            \$this->entityManager->persist(\$BaseInfo);
            \$this->entityManager->flush(\$BaseInfo);

            \$params = http_build_query([
                'application_name' => 'ec-cube/google-site-kit/0.1.0',
                'nonce' => \$nonce,
                'supports' => 'credentials_retrieval file_verification',
                'code' => \$request->get('googlesitekit_code'),
                'site_id' => \$payload['site_id'],
            ]);
            return \$this->redirect('https://sitekit.withgoogle.com/site-management/setup/?'.\$params);
        }
    }

    /**
     * @Route(\"/%eccube_admin_route%/cube_kit/callback\", name=\"site_kit_callback\")
     * @Template(\"@SiteKit42/admin/config.twig\")
     *
     * @param Request \$request
     *
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function callback(Request \$request)
    {
        \$code = \$request->query->get('code');
        if (isset(\$code)) {
            \$baseInfo = \$this->baseInfoRepository->get();
            \$this->siteKitClient->setClientId(\$baseInfo->getSiteKitSiteId());
            \$this->siteKitClient->setClientSecret(\$baseInfo->getSiteKitSiteSecret());
            \$this->siteKitClient->setHttpClient(\$this->createDefaultHttpClient());
            \$this->siteKitClient->setRedirectUri(\$this->generateUrl('site_kit_callback', [], UrlGeneratorInterface::ABSOLUTE_URL));
            \$token = \$this->siteKitClient->fetchAccessTokenWithAuthCode(\$code);
            // store in the session also
            \$this->session->set('site_kit_id_token', \$token);
            \$this->siteKitClient->setAccessToken(\$token);

            \$IdToken = \$this->idTokenRepository->findByMember(\$this->getUser()) ?: new IdToken();
            \$IdToken->setMember(\$this->getUser());
            \$IdToken->setIdToken(json_encode(\$token));
            \$this->entityManager->persist(\$IdToken);
            \$this->entityManager->flush(\$IdToken);

            // redirect back to the example
            return \$this->redirectToRoute('site_kit_dashboard');
        }
    }

    /**
     * @return Client
     */
    protected function createDefaultHttpClient()
    {
        \$options = ['exceptions' => false];
        \$options['base_uri'] = 'https://www.googleapis.com';
        \$options['headers'] = ['User-Agent' => 'ec-cube/google-site-kit/0.1.0'];

        return new Client(\$options);
    }

    private function getUserInfo()
    {
        /* @var Member \$Member */
        \$Member = \$this->getUser();
        if (\$Member->getIdToken()) {
            \$client = \$this->siteKitClient->authorize();
            \$response = \$client->request('GET', 'https://www.googleapis.com/oauth2/v1/userinfo');
            return json_decode(\$response->getBody()->getContents(), true);
        }
        return null;
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
        return "SiteKit42/Controller/Admin/ConfigController.php";
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
        return new Source("", "SiteKit42/Controller/Admin/ConfigController.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SiteKit42/Controller/Admin/ConfigController.php");
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
