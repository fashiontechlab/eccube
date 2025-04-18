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

/* Api42/GraphQL/Type/Definition/DateTimeType.php */
class __TwigTemplate_0ee09cd2df714b8703d72d0cb6b0c072 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/GraphQL/Type/Definition/DateTimeType.php"));

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

namespace Plugin\\Api42\\GraphQL\\Type\\Definition;

use DateTime;
use DateTimeInterface;
use GraphQL\\Error\\InvariantViolation;
use GraphQL\\Language\\AST\\Node;
use GraphQL\\Language\\AST\\StringValueNode;
use GraphQL\\Type\\Definition\\ScalarType;
use GraphQL\\Utils\\Utils;
use Plugin\\Api42\\GraphQL\\Error\\InvalidArgumentException;

class DateTimeType extends ScalarType
{
    private static \$DateTimeType;

    /**
     * @var string
     */
    public \$name = 'DateTime';

    /**
     * @var string
     */
    public \$description = 'The `DateTime` scalar type represents time data, represented as an ISO-8601 encoded UTC date string.';

    /**
     * @param mixed \$value
     *
     * @return string
     */
    public function serialize(\$value)
    {
        if (!\$value instanceof DateTimeInterface) {
            throw new InvariantViolation('DateTime is not an instance of DateTimeInterface: '.Utils::printSafe(\$value));
        }

        return \$value->format(DateTime::ATOM);
    }

    /**
     * @param mixed \$value
     *
     * @return DateTime|false|null
     * @throws InvalidArgumentException
     */
    public function parseValue(\$value)
    {
        \$dateTime = DateTime::createFromFormat(DateTime::ATOM, \$value);
        if (\$dateTime) {
            return \$dateTime;
        } else {
            throw new InvalidArgumentException('DateTime parse error, please specify in \"Y-m-d\\TH:i:sP\".'.Utils::printSafe(\$value));
        }
    }

    /**
     * @param Node \$valueNode
     * @param array|null \$variables
     *
     * @return string|null
     */
    public function parseLiteral(\$valueNode, ?array \$variables = null)
    {
        if (\$valueNode instanceof StringValueNode) {
            return \$this->parseValue(\$valueNode->value);
        }

        return null;
    }

    /**
     * @api
     */
    public static function dateTime(): ScalarType
    {
        if (static::\$DateTimeType === null) {
            static::\$DateTimeType = new DateTimeType();
        }

        return static::\$DateTimeType;
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
        return "Api42/GraphQL/Type/Definition/DateTimeType.php";
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
        return new Source("", "Api42/GraphQL/Type/Definition/DateTimeType.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/GraphQL/Type/Definition/DateTimeType.php");
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
