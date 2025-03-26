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

/* Api42/phpunit.xml.dist */
class __TwigTemplate_7ad64d9de6d3cf9aaab439b20b96a66c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/phpunit.xml.dist"));

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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"http://schema.phpunit.de/6.5/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"Tests/bootstrap.php\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
        <env name=\"KERNEL_CLASS\" value=\"Eccube\\Kernel\" />
        <env name=\"APP_ENV\" value=\"test\" />
        <env name=\"APP_DEBUG\" value=\"1\" />
        <env name=\"SHELL_VERBOSITY\" value=\"-1\" />
        <env name=\"SYMFONY_DEPRECATIONS_HELPER\" value=\"weak\" />
        <env name=\"SYMFONY_PHPUNIT_VERSION\" value=\"9.5\" />
        <!-- define your env variables for the test env here -->
    </php>

    <!-- テストの場所 -->
    <testsuites>
        <testsuite name=\"Plugin Test Suite\">
            <directory>./Tests</directory>
        </testsuite>
    </testsuites>

    <!-- 出力するログファイル
    <logging>
        <log type=\"coverage-clover\" target=\"./reports/coverage.clover\"/>
    </logging>
    -->

    <!-- カバーレージのターゲット -->
    <filter>
        <whitelist processUncoveredFilesFromWhitelist=\"true\">
            <directory suffix=\".php\">./</directory>
            <exclude>
                <directory suffix=\".php\">./Tests</directory>
                <directory suffix=\".php\">./Resource</directory>
                <file>./PluginManager.php</file>
            </exclude>
        </whitelist>
    </filter>

    <listeners>
        <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
        <listener class=\"\\DAMA\\DoctrineTestBundle\\PHPUnit\\PHPUnitListener\" />
    </listeners>
</phpunit>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/phpunit.xml.dist";
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
        return new Source("", "Api42/phpunit.xml.dist", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/phpunit.xml.dist");
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
