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

/* Api42/Tests/GraphQL/SchemaTest.php */
class __TwigTemplate_685d0afbd8f568d09013f2da72dd5815 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Tests/GraphQL/SchemaTest.php"));

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

namespace Plugin\\Api42\\Tests\\GraphQL;

use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Tests\\EccubeTestCase;
use GraphQL\\Error\\DebugFlag;
use GraphQL\\Executor\\ExecutionResult;
use GraphQL\\Server\\Helper;
use GraphQL\\Server\\OperationParams;
use GraphQL\\Server\\ServerConfig;
use Plugin\\Api42\\GraphQL\\Schema;

class SchemaTest extends EccubeTestCase
{
    public function testQueryProduct()
    {
        \$query = '{ product(id:2) { id } }';

        self::assertEquals([
            'data' => [
                'product' => [
                    'id' => '2',
                ],
            ],
        ], \$this->executeQuery(\$query));
    }

    public function testQueryProducts()
    {
        \$query = '{
          products (page: 1, limit: 2, create_datetime_start: \"2018-09-28T10:14:52+00:00\") {
            nodes {
              id
            }
          }
        }';

        self::assertEquals([
            'data' => [
                'products' => [
                    'nodes' => [
                        ['id' => '2'],
                        ['id' => '1']
                    ]
                ],
            ],
        ], \$this->executeQuery(\$query));
    }

    public function testQueryProducts_withVariables()
    {
        \$query = '
        query productsQuery(
          \$page: Int,
          \$limit: Int,
          \$create_datetime_start: DateTime
        ) {
          products (page: \$page, limit: \$limit, create_datetime_start: \$create_datetime_start) {
            nodes {
              id
            }
          }
        }';

        \$variables = [
            'page' => 1,
            'limit' => 2,
            'create_datetime_start' => '2018-09-28T10:14:52+00:00'
        ];

        \$result = \$this->executeQuery(\$query, json_encode(\$variables));

        self::assertEquals([
            'data' => [
                'products' => [
                    'nodes' => [
                        ['id' => '2'],
                        ['id' => '1']
                    ]
                ],
            ],
        ], \$result);
    }

    public function testQueryConnection_withEdges()
    {
        \$query = '{
            products {
                edges {
                    node {
                        id
                    }
                }
            }
        }';

        self::assertEquals([
            'data' => [
                'products' => [
                    'edges' => [
                        [
                            'node' => [
                                'id' => '2',
                            ],
                        ],
                        [
                            'node' => [
                                'id' => '1',
                            ],
                        ],
                    ],
                ],
            ],
        ], \$this->executeQuery(\$query));
    }

    public function testQueryConnection_withNodes()
    {
        \$query = '{
            products {
                nodes {
                    id
                }
            }
        }';

        self::assertEquals([
            'data' => [
                'products' => [
                    'nodes' => [
                        [
                            'id' => '2',
                        ],
                        [
                            'id' => '1',
                        ],
                    ],
                ],
            ],
        ], \$this->executeQuery(\$query));
    }

    public function testQueryPageInfo()
    {
        \$query = '{
            products {
                nodes {
                    id
                }
                totalCount
                pageInfo {
                    hasNextPage
                    hasPreviousPage
                }
            }
        }';

        self::assertEquals([
            'data' => [
                'products' => [
                    'nodes' => [
                        [
                            'id' => '2',
                        ],
                        [
                            'id' => '1',
                        ],
                    ],
                    'totalCount' => 2,
                    'pageInfo' => [
                        'hasNextPage' => false,
                        'hasPreviousPage' => false,
                    ],
                ],
            ],
        ], \$this->executeQuery(\$query));
    }

    public function testQueryPageInfo_firstPage()
    {
        \$query = '{
            products(page: 1, limit: 1) {
                nodes {
                    id
                }
                totalCount
                pageInfo {
                    hasNextPage
                    hasPreviousPage
                }
            }
        }';

        self::assertEquals([
            'data' => [
                'products' => [
                    'nodes' => [
                        [
                            'id' => '2',
                        ],
                    ],
                    'totalCount' => 2,
                    'pageInfo' => [
                        'hasNextPage' => true,
                        'hasPreviousPage' => false,
                    ],
                ],
            ],
        ], \$this->executeQuery(\$query));
    }

    public function testQueryPageInfo_LastPage()
    {
        \$query = '{
            products(page: 2, limit: 1) {
                nodes {
                    id
                }
                totalCount
                pageInfo {
                    hasNextPage
                    hasPreviousPage
                }
            }
        }';

        self::assertEquals([
            'data' => [
                'products' => [
                    'nodes' => [
                        [
                            'id' => '1',
                        ],
                    ],
                    'totalCount' => 2,
                    'pageInfo' => [
                        'hasNextPage' => false,
                        'hasPreviousPage' => true,
                    ],
                ],
            ],
        ], \$this->executeQuery(\$query));
    }

    /**
     * @dataProvider queryWithPaginationProvider
     */
    public function testQueryWithPagination(\$page, \$limit, \$expectedErrorMessage = null)
    {
        \$query = '{ products(page: '.\$page.', limit: '.\$limit.') { nodes { id } } }';

        \$result = \$this->executeQuery(\$query);

        if (\$expectedErrorMessage) {
            self::assertMatchesRegularExpression(\$expectedErrorMessage, \$result['errors'][0]['message']);
        } else {
            self::assertFalse(isset(\$result['errors']));
        }
    }

    public function queryWithPaginationProvider()
    {
        return [
            ['1', '1'],
            ['0', '1', '/page: 0より大きくなければなりません。;/'],
            ['1', '0', '/limit: 0より大きくなければなりません。;/'],
        ];
    }

    /**
     * @dataProvider queryWithDateTimeProvider
     */
    public function testQueryWithDateTime(\$dateTime, \$expectedErrorMessage = null)
    {
        \$query = '{ products(create_datetime_start: \"'.\$dateTime.'\") { nodes { id } } }';

        \$result = \$this->executeQuery(\$query);

        if (\$expectedErrorMessage) {
            self::assertMatchesRegularExpression(\$expectedErrorMessage, \$result['errors'][0]['message']);
        } else {
            self::assertFalse(isset(\$result['errors']));
        }
    }

    public function queryWithDateTimeProvider()
    {
        return [
            ['2020-07-30T12:57:08+09:00'],
            ['2020-07-30 12:57:08', '/DateTime parse error/'],
            ['2020-07-30T12:57:08', '/DateTime parse error/'],
            ['2020-07-30', '/DateTime parse error/'],
        ];
    }

    public function testMutationUpdateStock()
    {
        \$query = 'mutation UpdateProductStock(
            \$code: String!,
            \$stock: Int,
            \$stock_unlimited: Boolean!
        ){
            updateProductStock (
                code: \$code,
                stock: \$stock,
                stock_unlimited: \$stock_unlimited
            ) {
                code
                stock
                stock_unlimited
            }
        }';

        \$variables = [
            'code' => 'sand-01',
            'stock' => 10,
            'stock_unlimited' => false,
        ];

        self::assertEquals([
            'data' => [
                'updateProductStock' => \$variables,
            ],
        ], \$this->executeQuery(\$query, \$variables));
    }

    public function testMutationUpdateShipped()
    {
        // 出荷可能な受注を作成
        \$Customer = \$this->createCustomer();
        \$Order = \$this->createOrder(\$Customer);
        \$OrderStatus = \$this->entityManager->getRepository(OrderStatus::class)->find(OrderStatus::NEW);
        \$Order->setOrderStatus(\$OrderStatus);
        \$this->entityManager->flush();
        \$shippingId = \$Order->getShippings()[0]->getId();

        \$query = \"mutation {
            updateShipped (
                id: \${shippingId},
                shipping_date: \\\"2020-05-18T12:57:08+00:00\\\"
                shipping_delivery_name: \\\"テスト配送業者\\\"
                tracking_number: \\\"tracking_number0123\\\"
                note: \\\"Hello Notes!\\\"
            ) {
                id
                shipping_delivery_name
                shipping_date
                tracking_number
                note
            }
        }\";

        \$result = \$this->executeQuery(\$query);

        self::assertEquals([
            'data' => [
                'updateShipped' => [
                    \"id\" => \$shippingId,
                    \"shipping_delivery_name\" => \"テスト配送業者\",
                    \"shipping_date\" => \"2020-05-18T12:57:08+00:00\",
                    \"tracking_number\" => \"tracking_number0123\",
                    \"note\" => \"Hello Notes!\"
                ],
            ],
        ], \$result);
    }

    public function testMutationUpdateShipped_withVariables()
    {
        // 出荷可能な受注を作成
        \$Customer = \$this->createCustomer();
        \$Order = \$this->createOrder(\$Customer);
        \$OrderStatus = \$this->entityManager->getRepository(OrderStatus::class)->find(OrderStatus::NEW);
        \$Order->setOrderStatus(\$OrderStatus);
        \$this->entityManager->flush();
        \$shippingId = \$Order->getShippings()[0]->getId();

        \$query = 'mutation UpdateShipped (
            \$id: ID!,
            \$shipping_date: DateTime,
            \$shipping_delivery_name: String,
            \$tracking_number: String,
            \$note: String,
        ){
            updateShipped (
                id: \$id,
                shipping_date: \$shipping_date
                shipping_delivery_name: \$shipping_delivery_name
                tracking_number: \$tracking_number
                note: \$note
            ) {
                id
                shipping_delivery_name
                shipping_date
                tracking_number
                note
            }
        }';

        \$variables = [
            'id' => \$shippingId,
            'shipping_date' => '2020-05-18T12:57:08+00:00',
            'shipping_delivery_name' => 'テスト配送業者',
            'tracking_number' => 'tracking_number0123',
            'note' => 'Hello Notes!',
        ];

        self::assertEquals([
            'data' => [
                'updateShipped' => \$variables,
            ],
        ], \$this->executeQuery(\$query, \$variables));
    }

    private function executeQuery(\$query, \$variables = null, \$readonly = false)
    {
        \$op = OperationParams::create(['query' => \$query, 'variables' => \$variables], \$readonly);
        \$helper = new Helper();
        \$config = ServerConfig::create()->setSchema(self::getContainer()->get(Schema::class));
        \$result = \$helper->executeOperation(\$config, \$op);
        self::assertInstanceOf(ExecutionResult::class, \$result);

        return \$result->toArray(DebugFlag::INCLUDE_DEBUG_MESSAGE);
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
        return "Api42/Tests/GraphQL/SchemaTest.php";
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
        return new Source("", "Api42/Tests/GraphQL/SchemaTest.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Tests/GraphQL/SchemaTest.php");
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
