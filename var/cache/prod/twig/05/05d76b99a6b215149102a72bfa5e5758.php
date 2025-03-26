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

/* Api42/Tests/Service/WebHookServiceTest.php */
class __TwigTemplate_251f8f26c6cb88fc4879401e956ae94e extends Template
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

namespace Plugin\\Api42\\Tests\\Service;

use Eccube\\Tests\\EccubeTestCase;
use Nyholm\\Psr7\\Request;
use Plugin\\Api42\\Entity\\WebHook;
use Plugin\\Api42\\Service\\WebHookService;
use ReflectionClass;
use ReflectionException;

class WebHookServiceTest extends EccubeTestCase
{
    /** @var WebHookService */
    private ?WebHookService \$service;

    public function setUp(): void
    {
        parent::setUp();

        \$this->service = self::getContainer()->get(WebHookService::class);
    }

    public function testCreateRequest_withSecret()
    {
        \$WebHook = new WebHook();
        \$WebHook->setPayloadUrl('http://localhost/hook');
        \$WebHook->setSecret('secret');
        \$WebHook->setEnabled(true);

        \$payload = '[{\"entity\":\"product\",\"id\":2,\"action\":\"updated\"}]';

        \$request = \$this->invokeCreateRequest(\$payload, \$WebHook);

        self::assertEquals(
            hash_hmac('sha256', \$payload, 'secret'),
            \$request->getHeader('X-ECCUBE-Signature')[0]
        );
    }

    public function testCreateRequest_withoutSecret()
    {
        \$WebHook = new WebHook();
        \$WebHook->setPayloadUrl('http://localhost/hook');
        \$WebHook->setEnabled(true);

        \$payload = '[{\"entity\":\"product\",\"id\":2,\"action\":\"updated\"}]';

        \$request = \$this->invokeCreateRequest(\$payload, \$WebHook);

        self::assertFalse(\$request->hasHeader('X-ECCUBE-Signature'));
    }

    /**
     * @param \$payload
     *
     * @param WebHook \$WebHook
     * @return Request
     *
     * @throws ReflectionException
     */
    private function invokeCreateRequest(\$payload, WebHook \$WebHook)
    {
        \$rc = new ReflectionClass(\$this->service);
        \$method = \$rc->getMethod('createRequest');
        \$method->setAccessible(true);

        return \$method->invokeArgs(\$this->service, [\$payload, \$WebHook]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Tests/Service/WebHookServiceTest.php";
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
        return new Source("", "Api42/Tests/Service/WebHookServiceTest.php", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/Tests/Service/WebHookServiceTest.php");
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
