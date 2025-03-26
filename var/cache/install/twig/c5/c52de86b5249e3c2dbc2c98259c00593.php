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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_df0dd1eff70a93aafacd0f83c67d8bd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

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

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 4), "nb_errors", [], "any", false, false, true, 4) > 0) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 4), "forms", [], "any", false, false, true, 4)))) {
            // line 5
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 5), "nb_errors", [], "any", false, false, true, 5)) ? ("red") : (""));
            // line 6
            echo "        ";
            ob_start(function () { return ''; });
            // line 7
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 9
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 9), "nb_errors", [], "any", false, false, true, 9)) ?: (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 9), "forms", [], "any", false, false, true, 9), 9, $this->source)))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start(function () { return ''; });
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 16), "forms", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 20
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 20), "nb_errors", [], "any", false, false, true, 20) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 20), "nb_errors", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 29), "nb_errors", [], "any", false, false, true, 29)) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 29), "forms", [], "any", false, false, true, 29))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 32), "nb_errors", [], "any", false, false, true, 32) > 0)) {
            // line 33
            echo "            <span class=\"count\">
                <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 34), "nb_errors", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 37
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
        }
        .closed .toggle-icon, .closed.toggle-icon {
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
            display: inline-grid;
            place-content: center;
            background: none;
            border: none;
            transition: transform 200ms;
        }
        .tree .toggle-button.closed svg {
            transform: rotate(-90deg);
        }
        .tree .toggle-button svg {
            transform: rotate(0deg);
            width: 16px;
            height: 16px;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerFormPanel();
        });

        class SymfonyProfilerFormPanel {
            #activeTreeItem;
            #activeTreePanel;
            #storage;
            #storageKey = 'sf_toggle_data';
            #togglerStates = {};

            constructor() {
                this.#storage = sessionStorage;
                this.#initTrees();
                this.#initTogglerButtons();
            }

            #initTrees() {
                const treeItems = document.querySelectorAll('.tree .tree-inner');
                treeItems.forEach((treeItem) => {
                    var targetId = treeItem.getAttribute('data-tab-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Tab target \${targetId} does not exist`;
                    }

                    treeItem.addEventListener('click', (e) => {
                        this.#selectTreeItem(treeItem);

                        e.stopPropagation();
                        return false;
                    });

                    target.classList.add('hidden');
                });

                if (treeItems.length > 0) {
                    this.#selectTreeItem(treeItems[0]);
                }
            };

            #selectTreeItem(treeItem) {
                const treePanelId = treeItem.getAttribute('data-tab-target-id');
                const treePanel = document.getElementById(treePanelId);

                if (!treePanel) {
                    throw `The tree panel \${treePanelId} does not exist`;
                }

                if (this.#activeTreeItem) {
                    this.#activeTreeItem.classList.remove('active');
                }

                if (this.#activeTreePanel) {
                    this.#activeTreePanel.classList.add('hidden');
                }

                treeItem.classList.add('active');
                treePanel.classList.remove('hidden');

                this.#activeTreeItem = treeItem;
                this.#activeTreePanel = treePanel;
            }

            #initTogglerButtons() {
                this.#togglerStates = this.#getTogglerStates();
                if (!this.#isObject(this.#togglerStates)) {
                    this.#togglerStates = {};
                }

                const buttons = document.querySelectorAll('.toggle-button');
                buttons.forEach((button) => {
                    const targetId = button.getAttribute('data-toggle-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Toggle target \${targetId} does not exist`;
                    }

                    // correct the initial state of the button
                    if (target.classList.contains('hidden')) {
                        button.classList.add('closed');
                    }

                    button.addEventListener('click', (e) => {
                        this.#toggleToggler(button);

                        e.stopPropagation();
                        return false;
                    });

                    if (this.#togglerStates.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === this.#togglerStates[targetId]) {
                            this.#collapseToggler(button);
                        } else {
                            this.#expandToggler(button);
                        }
                    }
                });
            };

            #isTogglerCollapsed(button) {
                return button.classList.contains('closed');
            }

            #isTogglerExpanded(button) {
                return !this.#isTogglerCollapsed(button);
            }

            #expandToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (this.#isTogglerCollapsed(button)) {
                    button.classList.remove('closed');
                    target.classList.remove('hidden');

                    this.#togglerStates[targetId] = 1;
                    this.#saveTogglerStates();
                }
            }

            #collapseToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw `Toggle target \${targetId} does not exist`;
                }

                if (this.#isTogglerExpanded(button)) {
                    button.classList.add('closed');
                    target.classList.add('hidden');

                    this.#togglerStates[targetId] = 0;
                    this.#saveTogglerStates();
                }
            }

            #toggleToggler(button) {
                if (button.classList.contains('closed')) {
                    this.#expandToggler(button);
                } else {
                    this.#collapseToggler(button);
                }
            }

            #saveTogglerStates() {
                this.#storage.setItem(this.#storageKey, JSON.stringify(this.#togglerStates));
            }

            #getTogglerStates() {
                const data = this.#storage.getItem(this.#storageKey);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return {};
            }

            #isObject(variable) {
                return null !== variable && 'object' === typeof variable && !Array.isArray(variable);
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 378
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 379
        echo "    <h2>Forms</h2>

    ";
        // line 381
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 381), "forms", [], "any", false, false, true, 381))) {
            // line 382
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 384), "forms", [], "any", false, false, true, 384));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 385
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_entry", [$context["formName"], $context["formData"], true], 385, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 391), "forms", [], "any", false, false, true, 391));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 392
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_details", [$context["formName"], $context["formData"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 392), "forms_by_hash", [], "any", false, false, true, 392), twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 392)], 392, $context, $this->getSourceContext());
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "        </div>
    ";
        } else {
            // line 396
            echo "        <div class=\"empty empty-panel\">
            <p>No forms were submitted.</p>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 402
    public function macro_form_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 403
            echo "    ";
            $context["has_error"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, true, 403) && (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 403), 403, $this->source)) > 0));
            // line 404
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 405
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
            echo "-details\" title=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 405, $this->source), "(no name)")) : ("(no name)")), "html", null, true);
            echo "\">
            ";
            // line 406
            if (($context["has_error"] ?? null)) {
                // line 407
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 407), 407, $this->source)), "html", null, true);
                echo "</div>
            ";
            }
            // line 409
            echo "
            ";
            // line 410
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, true, 410))) {
                // line 411
                echo "                <button class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
                echo "-children\">
                    ";
                // line 412
                echo twig_source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                echo "
                </button>
            ";
            } else {
                // line 415
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 417
            echo "
            <span ";
            // line 418
            if ((($context["has_error"] ?? null) || ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, true, 418)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, true, 418), false)) : (false)))) {
                echo "class=\"has-error\"";
            }
            echo ">
                ";
            // line 419
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 419, $this->source), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            </span>
        </div>

        ";
            // line 423
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, true, 423))) {
                // line 424
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, true, 424), 424, $this->source), "html", null, true);
                echo "-children\" ";
                if (( !($context["is_root"] ?? null) &&  !((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, true, 424)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, true, 424), false)) : (false)))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 425
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, true, 425));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 426
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_form_tree_entry", [$context["childName"], $context["childData"], false], 426, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "            </ul>
        ";
            }
            // line 430
            echo "    </li>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 433
    public function macro_form_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 434
            echo "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (_twig_default_filter(($context["show"] ?? null), false)) : (false))) {
                echo " hidden";
            }
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, true, 434)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, true, 434), 434, $this->source), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>";
            // line 435
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 435, $this->source), "(no name)")) : ("(no name)")), "html", null, true);
            echo "</h2>
        ";
            // line 436
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, true, 436)) {
                // line 437
                echo "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 439
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", false, false, true, 439), 439, $this->source));
                echo "
            </div>
        ";
            }
            // line 442
            echo "
        ";
            // line 443
            $context["form_has_errors"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, true, 443) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 443)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 443)) : ([])));
            // line 444
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 445
            echo ((($context["form_has_errors"] ?? null)) ? ("active") : ("disabled"));
            echo "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 449
            echo twig_call_macro($macros["_self"], "macro_render_form_errors", [($context["data"] ?? null)], 449, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 453
            echo (( !($context["form_has_errors"] ?? null)) ? ("active") : (""));
            echo "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 457
            echo twig_call_macro($macros["_self"], "macro_render_form_default_data", [($context["data"] ?? null)], 457, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 461
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, true, 461) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, true, 461)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, true, 461)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 465
            echo twig_call_macro($macros["_self"], "macro_render_form_submitted_data", [($context["data"] ?? null)], 465, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 469
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, true, 469) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 469)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 469)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 473
            echo twig_call_macro($macros["_self"], "macro_render_form_passed_options", [($context["data"] ?? null)], 473, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 477
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, true, 477) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 477)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 477)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 481
            echo twig_call_macro($macros["_self"], "macro_render_form_resolved_options", [($context["data"] ?? null)], 481, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 485
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, true, 485) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 485)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 485)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 489
            echo twig_call_macro($macros["_self"], "macro_render_form_view_variables", [($context["data"] ?? null)], 489, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, true, 495));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 496
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_details", [$context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null)], 496, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 500
    public function macro_render_form_errors($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 501
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, true, 501) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 501)) > 0))) {
                // line 502
                echo "        <div class=\"errors\">
            <table id=\"";
                // line 503
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, true, 503), 503, $this->source), "html", null, true);
                echo "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 512
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 512));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 513
                    echo "                    <tr>
                        <td>";
                    // line 514
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 514), 514, $this->source), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 516
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, true, 516))) {
                        // line 517
                        echo "                                <em>This form.</em>
                            ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 518
($context["forms_by_hash"] ?? null), twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, true, 518), [], "array", true, true, true, 518)) {
                        // line 519
                        echo "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 521
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["forms_by_hash"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, true, 521)] ?? null) : null), "name", [], "any", false, false, true, 521), 521, $this->source), "html", null, true);
                        echo "
                            ";
                    }
                    // line 523
                    echo "                        </td>
                        <td>
                            ";
                    // line 525
                    if (twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, true, 525)) {
                        // line 526
                        echo "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 527
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, true, 527));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 528
                            echo "                                    ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["stacked"], 528, $this->source));
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stacked'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 530
                        echo "                            ";
                    } else {
                        // line 531
                        echo "                                <em>Unknown.</em>
                            ";
                    }
                    // line 533
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 536
                echo "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 540
                echo "        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 546
    public function macro_render_form_default_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 547
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, true, 547)) {
                // line 548
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 559
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, true, 559), "model", [], "any", true, true, true, 559)) {
                    // line 560
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, true, 560), "seek", ["model"], "method", false, false, true, 560), 560, $this->source));
                    echo "
                    ";
                } else {
                    // line 562
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 564
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 568
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, true, 568), "seek", ["norm"], "method", false, false, true, 568), 568, $this->source));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 573
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, true, 573), "view", [], "any", true, true, true, 573)) {
                    // line 574
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, true, 574), "seek", ["view"], "method", false, false, true, 574), 574, $this->source));
                    echo "
                    ";
                } else {
                    // line 576
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 578
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 583
                echo "        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 589
    public function macro_render_form_submitted_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 590
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, true, 590), "norm", [], "any", true, true, true, 590)) {
                // line 591
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 602
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, true, 602), "view", [], "any", true, true, true, 602)) {
                    // line 603
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, true, 603), "seek", ["view"], "method", false, false, true, 603), 603, $this->source));
                    echo "
                    ";
                } else {
                    // line 605
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 607
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 611
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, true, 611), "seek", ["norm"], "method", false, false, true, 611), 611, $this->source));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 616
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, true, 616), "model", [], "any", true, true, true, 616)) {
                    // line 617
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, true, 617), "seek", ["model"], "method", false, false, true, 617), 617, $this->source));
                    echo "
                    ";
                } else {
                    // line 619
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 621
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 626
                echo "        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 632
    public function macro_render_form_passed_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 633
            echo "    ";
            if ( !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, true, 633) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 633)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 633)) : ([])))) {
                // line 634
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 643
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 643));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 644
                    echo "                <tr>
                    <th>";
                    // line 645
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 645, $this->source), "html", null, true);
                    echo "</th>
                    <td>";
                    // line 646
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 646, $this->source));
                    echo "</td>
                    <td>
                        ";
                    // line 649
                    echo "                        ";
                    $context["option_value"] = ((twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, true, 649)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, true, 649), 649, $this->source), $this->sandbox->ensureToStringAllowed($context["value"], 649, $this->source))) : ($context["value"]));
                    // line 650
                    echo "                        ";
                    $context["resolved_option_value"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, true, 650), $context["option"], [], "array", false, true, true, 650), "value", [], "any", true, true, true, 650)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, true, 650), $context["option"], [], "array", false, true, true, 650), "value", [], "any", false, false, true, 650), 650, $this->source), $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 650)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["option"]] ?? null) : null), 650, $this->source))) : ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 650)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["option"]] ?? null) : null)));
                    // line 651
                    echo "                        ";
                    if ((($context["resolved_option_value"] ?? null) == ($context["option_value"] ?? null))) {
                        // line 652
                        echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 654
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 654), "seek", [$context["option"]], "method", false, false, true, 654), 654, $this->source));
                        echo "
                        ";
                    }
                    // line 656
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 659
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 662
                echo "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 668
    public function macro_render_form_resolved_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 669
            echo "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 677
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, true, 677) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 677)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 677)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 678
                echo "            <tr>
                <th scope=\"row\">";
                // line 679
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 679, $this->source), "html", null, true);
                echo "</th>
                <td>";
                // line 680
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 680, $this->source));
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 683
            echo "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 687
    public function macro_render_form_view_variables($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 688
            echo "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 696
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, true, 696) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 696)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 696)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 697
                echo "            <tr>
                <th scope=\"row\">";
                // line 698
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["variable"], 698, $this->source), "html", null, true);
                echo "</th>
                <td>";
                // line 699
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 699, $this->source));
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 702
            echo "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1411 => 702,  1402 => 699,  1398 => 698,  1395 => 697,  1391 => 696,  1381 => 688,  1365 => 687,  1351 => 683,  1342 => 680,  1338 => 679,  1335 => 678,  1331 => 677,  1321 => 669,  1305 => 668,  1289 => 662,  1284 => 659,  1276 => 656,  1270 => 654,  1266 => 652,  1263 => 651,  1260 => 650,  1257 => 649,  1252 => 646,  1248 => 645,  1245 => 644,  1241 => 643,  1230 => 634,  1227 => 633,  1211 => 632,  1195 => 626,  1188 => 621,  1184 => 619,  1178 => 617,  1176 => 616,  1168 => 611,  1162 => 607,  1158 => 605,  1152 => 603,  1150 => 602,  1137 => 591,  1134 => 590,  1118 => 589,  1102 => 583,  1095 => 578,  1091 => 576,  1085 => 574,  1083 => 573,  1075 => 568,  1069 => 564,  1065 => 562,  1059 => 560,  1057 => 559,  1044 => 548,  1041 => 547,  1025 => 546,  1009 => 540,  1003 => 536,  995 => 533,  991 => 531,  988 => 530,  979 => 528,  975 => 527,  972 => 526,  970 => 525,  966 => 523,  960 => 521,  956 => 519,  954 => 518,  951 => 517,  949 => 516,  944 => 514,  941 => 513,  937 => 512,  925 => 503,  922 => 502,  919 => 501,  903 => 500,  884 => 496,  880 => 495,  871 => 489,  864 => 485,  857 => 481,  850 => 477,  843 => 473,  836 => 469,  829 => 465,  822 => 461,  815 => 457,  808 => 453,  801 => 449,  794 => 445,  791 => 444,  789 => 443,  786 => 442,  780 => 439,  776 => 437,  774 => 436,  770 => 435,  757 => 434,  738 => 433,  725 => 430,  721 => 428,  712 => 426,  708 => 425,  699 => 424,  697 => 423,  690 => 419,  684 => 418,  681 => 417,  677 => 415,  671 => 412,  666 => 411,  664 => 410,  661 => 409,  655 => 407,  653 => 406,  647 => 405,  644 => 404,  641 => 403,  623 => 402,  612 => 396,  608 => 394,  591 => 392,  574 => 391,  568 => 387,  559 => 385,  555 => 384,  551 => 382,  549 => 381,  545 => 379,  538 => 378,  351 => 198,  344 => 197,  181 => 41,  174 => 40,  166 => 37,  160 => 34,  157 => 33,  155 => 32,  150 => 30,  143 => 29,  136 => 28,  126 => 24,  123 => 23,  115 => 20,  108 => 16,  104 => 14,  102 => 13,  99 => 12,  93 => 9,  87 => 7,  84 => 6,  81 => 5,  78 => 4,  71 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/form.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Collector/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "for" => 384, "macro" => 402);
        static $filters = array("length" => 4, "escape" => 9, "default" => 405);
        static $functions = array("source" => 7, "include" => 24, "profiler_dump" => 439);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'macro', 'import'],
                ['length', 'escape', 'default'],
                ['source', 'include', 'profiler_dump']
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
