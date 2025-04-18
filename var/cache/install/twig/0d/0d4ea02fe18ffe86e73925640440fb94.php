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

/* @WebProfiler/Profiler/settings.html.twig */
class __TwigTemplate_2eeb812924340f395e430f883f8d01f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/settings.html.twig"));

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
        echo "<style>
:root {
    --settings-modal-shadow: 0 0 0 1px var(--gray-400), 5px 5px 20px 0 var(--gray-800);
    --settings-modal-header-background: var(--gray-200);
    --settings-modal-content-background: var(--gray-100);
    --settings-option-background: var(--page-background);
    --settings-option-border-color: var(--gray-300);
    --settings-option-color: var(--color-text);
    --settings-option-icon-color: var(--gray-400);
    --settings-option-active-border-color: #3b82f6;
    --settings-option-active-background: #eff6ff;
    --settings-option-active-color: var(--color-text);
    --settings-option-active-icon-color: var(--gray-400);
}
.theme-dark {
    --settings-modal-shadow: 0 0 0 1px var(--gray-600), 5px 5px 10px 0 var(--gray-900);
    --settings-modal-header-background: var(--gray-800);
    --settings-modal-content-background: var(--gray-700);
    --settings-option-background: transparent;
    --settings-option-border-color: var(--gray-500);
    --settings-option-color: var(--color-text);
    --settings-option-icon-color: var(--gray-300);
    --settings-option-active-border-color: #93c5fd;
    --settings-option-active-background: var(--gray-700);
    --settings-option-active-color: var(--color-text);
    --settings-option-active-icon-color: #93c5fd;
}

#open-settings {
    color: var(--color-muted);
    align-items: center;
    display: flex;
    margin: 10px 0 5px;
}
#open-settings .icon {
    margin-right: 4px;
}
#open-settings .icon, #open-settings svg {
    height: 18px;
    width: 18px;
}

.modal-wrap {
    -webkit-transition-duration: 0.3s;
    -webkit-transition-property: opacity, visibility;
    -webkit-transition-timing-function: ease-in-out;
    align-items: center;
    background: rgba(0, 0, 0, 0.70);
    display: flex;
    backdrop-filter: blur(2px);
    height: 100%;
    justify-content: center;
    left: 0;
    opacity: 0;
    overflow: auto;
    position: fixed;
    top: 0;
    transition-duration: 0.3s;
    transition-property: opacity, visibility;
    transition-timing-function: ease-in-out;
    visibility: hidden;
    width: 100%;
    z-index: 100000;
}
.modal-wrap.visible {
    opacity: 1;
    visibility: visible;
}
.modal-wrap .modal-container {
    border-radius: 6px;
    box-shadow: var(--settings-modal-shadow);
    color: var(--color-text);
    margin: 1em;
    max-width: 94%;
    width: 600px;
}

.modal-wrap .modal-header {
    align-items: center;
    background: var(--settings-modal-header-background);
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    display: flex;
    justify-content: space-between;
    padding: 15px 30px;
}
.modal-wrap .modal-header h3 {
    margin: 0;
}
.modal-wrap .modal-header .close-modal {
    background: transparent;
    border: 0;
    color: var(--color-muted);
    cursor: pointer;
    font-size: 28px;
    line-height: 1;
}

.modal-wrap .modal-header .close-modal:hover { opacity: 1; }

.modal-wrap .modal-content {
  background: var(--settings-modal-content-background);
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
  margin: 0;
  padding: 15px 30px;
  z-index: 100000;
}
.modal-content h4 {
    font-size: 18px;
    margin: 0 0 10px;
}
.modal-content .settings-group + h4 {
    margin-top: 30px;
}
.modal-content .settings-group {
    border: 1px solid var(--settings-option-border-color);
    border-radius: 4px;
    display: flex;
    margin-bottom: 15px;
}
.modal-content .settings-group label {
    cursor: pointer;
    display: flex;
    flex: 1;
    font-size: 16px;
    margin: 0;
}
.modal-content .settings-group label input {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
    opacity: 0;
}
.modal-content .settings-group:has(input:focus-visible) {
    outline: 2px dotted var(--settings-option-active-border-color);
    outline-offset: 2px;
}
.modal-content .settings-group label input:checked + p {
    box-shadow: inset 0 0 0 2px var(--settings-option-active-border-color);
    background-color: var(--settings-option-active-background);
    color: var(--settings-option-active-color);
}
.modal-content .settings-group label input:checked + p svg {
    color: var(--settings-option-active-icon-color);
}
.modal-content .settings-group label p {
    align-items: center;
    background: var(--settings-option-background);

    color: var(--settings-option-color);
    flex: 1;
    font-size: 14px;
    margin: 0;
    padding: 10px 15px;
    text-align: center;
}
.modal-content .settings-group label:first-child p {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.modal-content .settings-group label:last-child p {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.modal-content .settings-group label + label p {
    border-left: 1px solid var(--settings-option-border-color);
}
.modal-content label p span {
    display: block;
    font-size: 16px;
}
.modal-content label p abbr {
    border: 0;
    text-decoration: none;
}
.modal-content label svg {
    color: var(--settings-option-icon-color);
    height: 36px;
    width: 36px;
}

@media (max-width: 768px) {
    #open-settings {
        color: transparent;
    }
    #sidebar:hover #open-settings, #sidebar.expanded #open-settings {
        color: var(--color-muted);
    }
}
</style>

<a href=\"#\" id=\"open-settings\">
    <span class=\"icon\">";
        // line 194
        echo twig_source($this->env, "@WebProfiler/Icon/settings.svg");
        echo "</span>
    Profiler settings
</a>

<div class=\"modal-wrap\" id=\"profiler-settings\">
    <div class=\"modal-container\">
        <div class=\"modal-header\">
            <h3>Configuration Settings</h3>
            <button aria-label=\"Close\" class=\"close-modal\">&times;</button>
        </div>

        <div class=\"modal-content\">
            <h4>Theme</h4>

            <div class=\"settings-group\">
                <label for=\"settings-theme-auto\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"auto\" id=\"settings-theme-auto\">
                    <p>
                        ";
        // line 212
        echo twig_source($this->env, "@WebProfiler/Icon/settings-theme-system.svg");
        echo "
                        <span>System / OS</span>
                    </p>
                </label>

                <label for=\"settings-theme-light\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"light\" id=\"settings-theme-light\">
                    <p>
                        ";
        // line 220
        echo twig_source($this->env, "@WebProfiler/Icon/settings-theme-light.svg");
        echo "
                        <span>Light</span>
                    </p>
                </label>

                <label for=\"settings-theme-dark\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"dark\" id=\"settings-theme-dark\">
                    <p>
                        ";
        // line 228
        echo twig_source($this->env, "@WebProfiler/Icon/settings-theme-dark.svg");
        echo "
                        <span>Dark</span>
                    </p>
                </label>
            </div>

            <h4>Page Width</h4>

            <div class=\"settings-group\">
                <label for=\"settings-width-normal\">
                    <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"normal\" id=\"settings-width-normal\">
                    <p>
                        ";
        // line 240
        echo twig_source($this->env, "@WebProfiler/Icon/settings-width-fixed.svg");
        echo "
                        <span>Fixed width</span>
                    </p>
                </label>

                <label for=\"settings-width-full\">
                    <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"full\" id=\"settings-width-full\">
                    <p>
                        ";
        // line 248
        echo twig_source($this->env, "@WebProfiler/Icon/settings-width-fitted.svg");
        echo "
                        <span>Fit to window</span>
                    </p>
                </label>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    const configOptions = document.querySelectorAll('.config-option');
    [...configOptions].forEach(option => {
        option.addEventListener('change', function (event) {
            const optionName = option.name;
            const optionValue = option.value;
            const settingName = 'symfony/profiler/' + optionName;
            const settingValue = optionName + '-' + optionValue;

            localStorage.setItem(settingName, settingValue);

            document.body.classList.forEach((cssClass) => {
                if (cssClass.startsWith(optionName)) {
                    document.body.classList.remove(cssClass);
                }
            });

            const resolvedSettingValue = 'theme-auto' === settingValue
                ? (matchMedia('(prefers-color-scheme: dark)').matches ? 'theme-dark' : 'theme-light')
                : settingValue;
            document.body.classList.add(resolvedSettingValue);

            if (resolvedSettingValue.startsWith('theme-')) {
                document.body.style.colorScheme = resolvedSettingValue.endsWith('-light') ? 'light' : 'dark';
            }
        });
    });

    const openModalButton = document.getElementById('open-settings');
    const modalWindow = document.getElementById('profiler-settings');
    const closeModalButton = document.getElementsByClassName('close-modal')[0];
    const modalWrapper = document.getElementsByClassName('modal-wrap')[0];
    const closeModal = () => {
        modalWindow.classList.remove('visible');
        setTimeout(() => openModalButton.focus(), 30);
    };

    openModalButton.addEventListener('click', function(event) {
        document.getElementById('settings-' + (localStorage.getItem('symfony/profiler/theme') || 'theme-auto')).checked = 'checked';
        document.getElementById('settings-' + (localStorage.getItem('symfony/profiler/width') || 'width-normal')).checked = 'checked';

        modalWindow.classList.toggle('visible');
        setTimeout(() => closeModalButton.focus(), 30);
        event.preventDefault();
    });

    closeModalButton.addEventListener('click', closeModal);
    modalWrapper.addEventListener('click', function(event) {
        if (event.target == event.currentTarget) {
            closeModal();
        }
    });
    modalWrapper.addEventListener('keydown', function(event) {
        if (event.key === 'Esc' || event.key === 'Escape') {
            closeModal();
        }
    });
})();
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/settings.html.twig";
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
        return array (  318 => 248,  307 => 240,  292 => 228,  281 => 220,  270 => 212,  249 => 194,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/settings.html.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/settings.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("source" => 194);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['source']
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
