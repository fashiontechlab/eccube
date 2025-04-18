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

/* Securitychecker42/Service/Securitychecker42Service.php */
class __TwigTemplate_1ad5ea7987ed028eba6c31ceaa113fa1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Securitychecker42/Service/Securitychecker42Service.php"));

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

namespace Plugin\\Securitychecker42\\Service;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class Securitychecker42Service
{

    /** @var UrlGeneratorInterface */
    protected \$router;

    /** @var EccubeConfig */
    protected \$eccubeConfig;

    /** @var EntityManager */
    protected \$entityManager;

    const UNSAFE_IGNORE_COLUMNS = [
        'password',
        'salt',
        'secret_key',
        'reset_key',
        'pre_order_id',
        'currency_code',
        'delivery_time',
        'tracking_number'
    ];

    /**
     * @param UrlGeneratorInterface \$router
     * @param EccubeConfig \$eccubeConfig
     * @param EntityManagerInterface \$entityManager
     */
    public function __construct(
        UrlGeneratorInterface \$router,
        EccubeConfig \$eccubeConfig,
        EntityManagerInterface \$entityManager
    ) {
        \$this->router = \$router;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->entityManager = \$entityManager;
    }

    /**
     * @return string
     */
    public function getSiteUrl()
    {
        return \$this->router->generate('homepage', [], UrlGeneratorInterface::ABSOLUTE_URL);
    }

    /**
     * 指定したパスが外部から閲覧できるか確認します.
     *
     * @param string \$path
     *
     * @return array
     */
    public function searchResources(\$path)
    {
        \$target_path = [];

        \$var_same_hierarchy = realpath(\$this->eccubeConfig->get('kernel.project_dir').'/'.\$path);
        if (\$var_same_hierarchy !== false) {
            \$target_path[] = \$var_same_hierarchy;
        }

        \$results = [];
        foreach (\$target_path as \$target) {
            if (is_dir(\$target)) {
                \$files = \$this->getFiles(\$target);
            } else {
                \$files = [\$target];
            }

            foreach (\$files as \$file) {
                // Web経由でアクセス
                if ((\$urlpath = \$this->checkResources(\$file)) !== false) {
                    \$results[] = \$urlpath;
                    break;
                }
            }
        }

        return \$results;
    }

    /**
     * 指定したファイルが外部から閲覧できるか確認します.
     *
     * Docker コンテナや, Proxy など HTTP_HOST から接続できない環境では,
     * 環境変数 HTTP_SITEURLでの通信を試みます
     *
     * @param string \$file
     *
     * @return string|bool 閲覧できない場合 false, 閲覧できる場合 URLパス
     */
    public function checkResources(\$file)
    {
        \$root_urlpath = \$this->router->generate('homepage', [], UrlGeneratorInterface::ABSOLUTE_PATH);
        \$urlpath = str_replace(\$this->eccubeConfig->get('kernel.project_dir'), '', str_replace('\\\\', '/', \$file));

        \$root_url = rtrim(\$this->getSiteUrl(), '/');
        if (\$root_urlpath !== '/') {
            \$root_url = str_replace(\$root_urlpath, '', \$root_url);
        }
        \$result = \$this->evaluateUrl(\$root_url, \$urlpath);
        if (\$result !== false) {
            return \$result;
        }

        // 内部通信できなかった場合は, 環境変数 HTTP_SITEURL で通信を試みる
        \$root_url = env('HTTP_SITEURL');
        if (!empty(\$root_url)) {
            \$result = \$this->evaluateUrl(\$root_url, \$urlpath);
            if (\$result !== false) {
                return \$result;
            }
        }

        return false;
    }

    /**
     * プラグイン設定情報をパースし, 連想配列で返す.
     *
     * すべてのプラグインを探索し、 composer.json をパースする.
     * パースした情報を連想配列で返す.
     *
     * @return array
     */
    public function parsePluginConfigs()
    {
        \$finder = Finder::create()
            ->in(\$this->eccubeConfig['plugin_realdir'])
            ->directories()
            ->depth(0);
        \$finder->sortByName();

        \$pluginConfigs = [];
        foreach (\$finder as \$dir) {
            \$code = \$dir->getBaseName();
            if (!\$code) {
                //PHP5.3のgetBaseNameバグ対応
                if (PHP_VERSION_ID < 50400) {
                    \$code = \$dir->getFilename();
                }
            }
            \$file = \$dir->getRealPath().'/composer.json';
            if (file_exists(\$file)) {
                \$properties = json_decode(file_get_contents(\$file), true);
                \$pluginConfigs[] = [
                    'plugin_name' => \$properties['name'],
                    'plugin_version' => \$properties['version'],
                    'plugin_code' => \$properties['extra']['code'],
                ];
            } else {
                continue;
            }
        }

        return \$pluginConfigs;
    }

    /**
     * チェック結果を共有します.
     *
     * @param string \$results
     *
     * @return string|false
     */
    public function sendResults(\$results)
    {
        // TODO GuzzleHttp の方が良いかも
        \$base64 = rtrim(strtr(base64_encode(\$results), '+/', '-_'), '=');
        \$query = http_build_query(
            [
                'check_result' => \$base64,
            ]
        );
        \$header = [
            'Content-Type: application/x-www-form-urlencoded',
            'Content-Length: '.strlen(\$query),
        ];
        \$context = stream_context_create(
            [
                'http' => [
                    'method' => 'POST',
                    'timeout' => 10,
                    'header' => implode(\"\\r\\n\", \$header),
                    'content' => \$query,
                ],
            ]
        );

        return file_get_contents(\$this->eccubeConfig->get('securitychecker42_receiver'), false, \$context);
    }

    /**
     * @param string \$root_url
     * @param string \$urlpath
     *
     * @return string|bool
     */
    private function evaluateUrl(\$root_url, \$urlpath)
    {
        try {
            \$contents = file_get_contents(\$root_url.\$urlpath, false, \$this->getStreamContext());
            if (\$contents !== false) {
                return \$urlpath;
            }
        } catch (\\Exception \$e) {
            return false;
        }

        return false;
    }

    /**
     * @param string \$dir
     *
     * @return array
     */
    public function getFiles(\$dir)
    {
        // Finder は遅いため RecursiveDirectoryIterator を使用する
        \$iter = new \\RegexIterator(
            new \\RecursiveIteratorIterator(
                new \\RecursiveDirectoryIterator(
                    \$dir, \\FilesystemIterator::SKIP_DOTS
                )
            ), '/^(?!.*\\.php\$).*\$/i', \\RecursiveRegexIterator::MATCH
        );
        \$files = [];
        foreach (\$iter as \$fileInfo) {
            if (\$fileInfo->isFile()) {
                \$files[] = \$fileInfo->getRealpath();
            }
        }

        return \$files;
    }

    /**
     * @return resource|null
     */
    private function getStreamContext()
    {
        if (getenv('USE_SELFSIGNED_SSL_CERTIFICATE')) {
            return stream_context_create(
                [
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ]
            );
        } else {
            return null;
        }
    }

    public function getQueryBuilderForUnsafeData(\$entityClass)
    {
        \$classMetadata = \$this->entityManager->getClassMetadata(\$entityClass);
        \$columns = array_reduce(\$classMetadata->fieldMappings, function(\$textColumns, \$fieldMapping) {
            \$fieldName = \$fieldMapping['fieldName'];
            \$fieldType = \$fieldMapping['type'];
            // 文字列が入力されるカラムを対象にする
            if (!in_array(\$fieldName, self::UNSAFE_IGNORE_COLUMNS)
                && in_array(\$fieldType, ['string', 'text'])) {
                \$textColumns[] = \$fieldMapping['fieldName'];
            }
            return \$textColumns;
        }, []);

        \$qb = \$this->entityManager->createQueryBuilder()->from(\$entityClass, 'e');
        \$qb->addSelect('e.id');

        foreach (\$columns as \$col) {
            \$qb->addSelect('e.'.\$col);
            \$qb->orWhere('e.'.\$col.' like \\'%<%\\'')->orWhere('e.'.\$col.' like \\'%>%\\'');
        }

        return \$qb;
    }

    /**
     * 完全一致かどうか確認
     */
    public function isExactMatchTrustedHost(\$trustedHostPattern, \$host)
    {
        if (preg_match(\$trustedHostPattern, \$host, \$matches)) {
            // awww.example.com
            if (preg_match(\$trustedHostPattern, 'a'.\$host, \$matches)) {
                return false;
            }
            // www.example.coma
            if (preg_match(\$trustedHostPattern, \$host.'a', \$matches)) {
                return false;
            }
            // wwwaexampleacom
            if (strpos(\$host, '.') !== false && preg_match(\$trustedHostPattern, str_replace('.', 'a', \$host), \$matches)) {
                return false;
            }

            return true;
        }

        return false;
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
        return "Securitychecker42/Service/Securitychecker42Service.php";
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
        return new Source("", "Securitychecker42/Service/Securitychecker42Service.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Securitychecker42/Service/Securitychecker42Service.php");
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
