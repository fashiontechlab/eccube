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

/* SiteKit42/Resource/assets/lighthouse-logo.svg */
class __TwigTemplate_d5dbd9e61d6001a91ee71e18abcc7ca6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteKit42/Resource/assets/lighthouse-logo.svg"));

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
        echo "<svg width=\"128\" height=\"128\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <defs>
        <path d=\"M24.556 7.222h-3.51C19.558 3.012 15.549 0 10.833 0 4.853 0 0 4.853 0 10.833s4.853 10.834 10.833 10.834h13.723a7.225 7.225 0 0 0 7.222-7.223 7.225 7.225 0 0 0-7.222-7.222z\" id=\"a\"/>
        <linearGradient x1=\"49.994%\" y1=\".226%\" x2=\"49.994%\" y2=\"99.725%\" id=\"c\">
            <stop stop-color=\"#212121\" stop-opacity=\".04\" offset=\"0%\"/>
            <stop stop-color=\"#212121\" stop-opacity=\"0\" offset=\"66%\"/>
        </linearGradient>
        <path d=\"M13.722 0H0v14.444h13.722a7.225 7.225 0 0 0 7.222-7.222A7.225 7.225 0 0 0 13.722 0z\" id=\"d\"/>
        <radialGradient cx=\"10.128%\" cy=\"14.269%\" fx=\"10.128%\" fy=\"14.269%\" r=\"144.566%\" gradientTransform=\"matrix(.68182 0 0 1 .032 0)\" id=\"f\">
            <stop stop-color=\"#FFF\" stop-opacity=\".1\" offset=\"0%\"/>
            <stop stop-color=\"#FFF\" stop-opacity=\"0\" offset=\"100%\"/>
        </radialGradient>
        <linearGradient x1=\"36.626%\" y1=\"20.358%\" x2=\"64.01%\" y2=\"100.652%\" id=\"g\">
            <stop stop-color=\"#FFF\" stop-opacity=\".1\" offset=\"0%\"/>
            <stop stop-color=\"#FFF\" stop-opacity=\"0\" offset=\"100%\"/>
        </linearGradient>
        <linearGradient x1=\"68.935%\" y1=\"65.756%\" x2=\"31.065%\" y2=\"35.799%\" id=\"h\">
            <stop stop-color=\"#262626\" stop-opacity=\".1\" offset=\"0%\"/>
            <stop stop-color=\"#262626\" stop-opacity=\"0\" offset=\"100%\"/>
        </linearGradient>
        <linearGradient x1=\"62.531%\" y1=\"13.086%\" x2=\"24.779%\" y2=\"100.996%\" id=\"i\">
            <stop stop-color=\"#262626\" stop-opacity=\".1\" offset=\"0%\"/>
            <stop stop-color=\"#262626\" stop-opacity=\"0\" offset=\"100%\"/>
        </linearGradient>
        <linearGradient x1=\"0%\" y1=\"50%\" y2=\"50%\" id=\"j\">
            <stop stop-color=\"#262626\" stop-opacity=\".1\" offset=\"0%\"/>
            <stop stop-color=\"#262626\" stop-opacity=\"0\" offset=\"100%\"/>
        </linearGradient>
        <radialGradient cx=\"14.489%\" cy=\"14.584%\" fx=\"14.489%\" fy=\"14.584%\" r=\"99.973%\" id=\"k\">
            <stop stop-color=\"#FFF\" stop-opacity=\".1\" offset=\"0%\"/>
            <stop stop-color=\"#FFF\" stop-opacity=\"0\" offset=\"100%\"/>
        </radialGradient>
        <path d=\"M28.333 8.333h-4.05C22.567 3.475 17.942 0 12.5 0 5.6 0 0 5.6 0 12.5S5.6 25 12.5 25h15.833c4.6 0 8.334-3.733 8.334-8.333s-3.734-8.334-8.334-8.334z\" id=\"l\"/>
        <linearGradient x1=\"49.994%\" y1=\".226%\" x2=\"49.994%\" y2=\"99.725%\" id=\"n\">
            <stop stop-color=\"#212121\" stop-opacity=\".04\" offset=\"0%\"/>
            <stop stop-color=\"#212121\" stop-opacity=\"0\" offset=\"66%\"/>
        </linearGradient>
        <path d=\"M15.833 0H0v16.667h15.833c4.6 0 8.334-3.734 8.334-8.334S20.433 0 15.833 0z\" id=\"o\"/>
        <radialGradient cx=\"10.128%\" cy=\"14.269%\" fx=\"10.128%\" fy=\"14.269%\" r=\"144.566%\" gradientTransform=\"matrix(.68182 0 0 1 .032 0)\" id=\"q\">
            <stop stop-color=\"#FFF\" stop-opacity=\".1\" offset=\"0%\"/>
            <stop stop-color=\"#FFF\" stop-opacity=\"0\" offset=\"100%\"/>
        </radialGradient>
    </defs>
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h128v128H0z\"/>
        <g transform=\"translate(5.333 5.333)\">
            <circle fill=\"#0535C1\" fill-rule=\"nonzero\" cx=\"58.667\" cy=\"58.667\" r=\"58.667\"/>
            <path d=\"M71.333 26.667H106v34.667H71.333z\"/>
            <g transform=\"translate(72.778 33.889)\">
                <mask id=\"b\" fill=\"#fff\">
                    <use xlink:href=\"#a\"/>
                </mask>
                <g mask=\"url(#b)\">
                    <path d=\"M24.556 7.222h-3.51C19.558 3.012 15.549 0 10.833 0 4.853 0 0 4.853 0 10.833s4.853 10.834 10.833 10.834h13.723a7.225 7.225 0 0 0 7.222-7.223 7.225 7.225 0 0 0-7.222-7.222z\" fill=\"#EAEAEA\" fill-rule=\"nonzero\"/>
                    <path d=\"M31.778 14.531v-.087a7.225 7.225 0 0 0-7.222-7.222h-3.612v.18h3.612a7.224 7.224 0 0 1 7.222 7.13z\" fill-opacity=\".2\" fill=\"#FFF\" fill-rule=\"nonzero\"/>
                    <path fill=\"url(#c)\" fill-rule=\"nonzero\" d=\"M35.497 21.667H10.833l10.22-14.445z\"/>
                    <g transform=\"translate(10.833 7.222)\">
                        <mask id=\"e\" fill=\"#fff\">
                            <use xlink:href=\"#d\"/>
                        </mask>
                        <g mask=\"url(#e)\">
                            <g transform=\"translate(-2.167 -9.389)\">
                                <image opacity=\".1\" width=\"15.167\" height=\"23.111\" xlink:href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAgCAYAAAD9oDOIAAAABGdBTUEAALGN5fIAKQAAA7ZJREFUSA2dlttvEkEYxdnlWqhQoEWrlRq1xqQv+qLP9f82fdamvmhjVBJbSnrjUtoCheWy/s6ERagsBSc5+WZnvzl75sxtrcDfYg2rXvTeuMOKF7123+gR2Nvb26FOpxNrt9uheDxuq0ez2XSXlpa6VDuFQqFHHIB7yUVqQRhuNBpZy7LyrutmiBHaA7Zt93i+5vksEonUer1eA3J9ROS+JcgbK5VKJej8EpIdCD4Q3xHf0rbN+01icjAYhLvdbn9jY8Mpl8t9X0ZeiNReX1+PO46zBdEOz+/BK7AJngq0PyZmg8GgjVpnbW2tl06n+7VaTVb8Y4dRmsvlYpDmUfgGVVvEVZITQzwQIVBbkvcRIPJeLBZz8F2qJ4hFGmD4YUIaPENVnpgEIaAJU04MLAP5nQNpMED5FapbKJ7w2ChNJpPkWB6xhi1VmiwzkUSR6yNSn0HpCqNxQQXiy2q12qF9pNYordfrLh7ZTEaaxOckyMM4MEuLqKIPBPl4lCgMIL8ElVAo1Gi1WlpyhtiQ8mBlMhl1kH+anCdAdTMSolc85VIdIt8FN1KLDU3PBo9UvgZIULK8vWuBR6ooYptc2SPFXUgvwuFwrVKpGBtGpHNaAIcpxgpqEqENUsa602w2eyO1455pKG08LZN0QnIdaPeMJoD6eFFfrYg8/V7T5xF1KZ+YCJevSf45+DWME7NK23iR2jBkWn4P6ZtkwrSCrAmlh4eHUlYn4YSvl6m3gZ9SXmkarDCIKtJPH5pQqudFLQig1Cimb5QJM0pHEyVGlQVWgclHodan/C/2+/3SysrKzfjwleT+hwVaWtq6LxTxNXKX1BCTMO8qINXSaLX7UlgR51APTiVdYBXA4+qUakJeB63b29v+VNIFLND+b0J6DH5AekbsTCOlfa5VoKXWhagKcUHQlaO7zJfUs0DJdL4ADhgvOkMb4Ihd+BXyIy5NqZ7YpuMdzCrgZL+mUTvsCvLxLSvCFjgF38FPVFaHtrk6EPwKPK6DiiZRChzUyEMN+xaUeN4nfuJm+U2eVJsbYCYpyV04rkg+h+Caeoq6ZrsE9njeBV+Y8YtisTgaiZ+n9OFM4+YkyE/5egqxTnrN9B74iO97iUSixJUt5aN7SgvXt4ydsSkI10mUym/Ud0W4vLx8fHBwIEK1j8pMUrKs1dVVG3UxPNMxp4n5DPYhLE0jFPMsT/XejUajbf5MdFjo2giisMyQK36E6mTOP1VmFPPzxvsIHluQO/f9T81Dqu/dzZt1cAf+AMymEnybyIybAAAAAElFTkSuQmCC\"/>
                                <path d=\"M2.167 2.167l5.857 18.496C9.98 18.698 13 15.99 13 13 13 7.02 8.147 2.167 2.167 2.167z\" fill=\"#E1E1E1\" fill-rule=\"nonzero\"/>
                            </g>
                        </g>
                    </g>
                    <circle fill=\"#EEE\" fill-rule=\"nonzero\" cx=\"10.833\" cy=\"10.833\" r=\"10.833\"/>
                    <path d=\"M10.833.18c5.951 0 10.783 4.803 10.834 10.747v-.086c0-5.98-4.854-10.834-10.834-10.834C4.853.007 0 4.853 0 10.833v.087C.05 4.983 4.882.18 10.833.18z\" fill-opacity=\".2\" fill=\"#FFF\" fill-rule=\"nonzero\"/>
                    <path d=\"M24.556 21.486H10.833C4.883 21.486.051 16.683 0 10.74v.087c0 5.98 4.853 10.833 10.833 10.833h13.723a7.225 7.225 0 0 0 7.222-7.222v-.086a7.226 7.226 0 0 1-7.222 7.135z\" fill-opacity=\".1\" fill=\"#212121\" fill-rule=\"nonzero\"/>
                </g>
            </g>
            <path d=\"M24.556 7.222h-3.51C19.558 3.012 15.549 0 10.833 0 4.853 0 0 4.853 0 10.833s4.853 10.834 10.833 10.834h13.723a7.225 7.225 0 0 0 7.222-7.223 7.225 7.225 0 0 0-7.222-7.222z\" fill=\"url(#f)\" fill-rule=\"nonzero\" transform=\"translate(72.778 33.889)\"/>
            <path fill=\"#FFF176\" fill-rule=\"nonzero\" d=\"M42.667 24.667h30.667v26.667H42.667z\"/>
            <path fill=\"#FFF\" fill-rule=\"nonzero\" d=\"M39.333 65.333H76V102H39.333z\"/>
            <path d=\"M80 48.667h5.333v10.666H32V48.667h5.333V27.333L58.667 14 80 27.333v21.334zm-10.667 0V33.245L58.667 26.58 48 33.245v15.422h21.333z\" fill=\"#F4481E\" fill-rule=\"nonzero\"/>
            <path d=\"M29.631 109.656l9.036-60.99h40l9.035 60.99c-8.561 4.886-18.472 7.677-29.035 7.677-10.563 0-20.474-2.791-29.036-7.677zM70.61 67.067l-25.094 8.154-3.05 20.585L73.38 85.76l-2.77-18.694z\" fill=\"#F4481E\" fill-rule=\"nonzero\"/>
            <path d=\"M79.949 59.333l7.455 50.323c-8.561 4.886-18.472 7.677-29.035 7.677-10.563 0-20.474-2.791-29.036-7.677l7.456-50.323H32V48.667h5.333V27.333L58.667 14 80 27.333v21.334h5.333v10.666H79.95z\" fill=\"url(#g)\" fill-rule=\"nonzero\"/>
            <path fill=\"url(#h)\" fill-rule=\"nonzero\" d=\"M58.667 48.667H37.333V27.333L58.667 14z\"/>
            <path d=\"M58.667 117.333a58.62 58.62 0 0 1-29.036-7.677l6.685-50.323h22.35v58z\" fill=\"url(#i)\" fill-rule=\"nonzero\"/>
            <path fill=\"url(#j)\" fill-rule=\"nonzero\" transform=\"matrix(-1 0 0 1 90.667 0)\" d=\"M32 48.667h26.667v10.667H32z\"/>
            <circle fill=\"url(#k)\" fill-rule=\"nonzero\" cx=\"58.667\" cy=\"58.667\" r=\"58.667\"/>
            <path d=\"M12.667 38h40v40h-40z\"/>
            <g transform=\"translate(14.333 46.333)\">
                <mask id=\"m\" fill=\"#fff\">
                    <use xlink:href=\"#l\"/>
                </mask>
                <g mask=\"url(#m)\">
                    <path d=\"M28.333 8.333h-4.05C22.567 3.475 17.942 0 12.5 0 5.6 0 0 5.6 0 12.5S5.6 25 12.5 25h15.833c4.6 0 8.334-3.733 8.334-8.333s-3.734-8.334-8.334-8.334z\" fill=\"#FAFAFA\" fill-rule=\"nonzero\"/>
                    <path d=\"M36.667 16.767v-.1c0-4.6-3.734-8.334-8.334-8.334h-4.166v.209h4.166a8.335 8.335 0 0 1 8.334 8.225z\" fill-opacity=\".2\" fill=\"#FFF\" fill-rule=\"nonzero\"/>
                    <path fill=\"url(#n)\" fill-rule=\"nonzero\" d=\"M40.958 25H12.5L24.292 8.333z\"/>
                    <g transform=\"translate(12.5 8.333)\">
                        <mask id=\"p\" fill=\"#fff\">
                            <use xlink:href=\"#o\"/>
                        </mask>
                        <g mask=\"url(#p)\">
                            <g transform=\"translate(-2.5 -10.833)\">
                                <image opacity=\".1\" width=\"17.5\" height=\"26.667\" xlink:href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAgCAYAAAD9oDOIAAAABGdBTUEAALGN5fIAKQAAA7ZJREFUSA2dlttvEkEYxdnlWqhQoEWrlRq1xqQv+qLP9f82fdamvmhjVBJbSnrjUtoCheWy/s6ERagsBSc5+WZnvzl75sxtrcDfYg2rXvTeuMOKF7123+gR2Nvb26FOpxNrt9uheDxuq0ez2XSXlpa6VDuFQqFHHIB7yUVqQRhuNBpZy7LyrutmiBHaA7Zt93i+5vksEonUer1eA3J9ROS+JcgbK5VKJej8EpIdCD4Q3xHf0rbN+01icjAYhLvdbn9jY8Mpl8t9X0ZeiNReX1+PO46zBdEOz+/BK7AJngq0PyZmg8GgjVpnbW2tl06n+7VaTVb8Y4dRmsvlYpDmUfgGVVvEVZITQzwQIVBbkvcRIPJeLBZz8F2qJ4hFGmD4YUIaPENVnpgEIaAJU04MLAP5nQNpMED5FapbKJ7w2ChNJpPkWB6xhi1VmiwzkUSR6yNSn0HpCqNxQQXiy2q12qF9pNYordfrLh7ZTEaaxOckyMM4MEuLqKIPBPl4lCgMIL8ElVAo1Gi1WlpyhtiQ8mBlMhl1kH+anCdAdTMSolc85VIdIt8FN1KLDU3PBo9UvgZIULK8vWuBR6ooYptc2SPFXUgvwuFwrVKpGBtGpHNaAIcpxgpqEqENUsa602w2eyO1455pKG08LZN0QnIdaPeMJoD6eFFfrYg8/V7T5xF1KZ+YCJevSf45+DWME7NK23iR2jBkWn4P6ZtkwrSCrAmlh4eHUlYn4YSvl6m3gZ9SXmkarDCIKtJPH5pQqudFLQig1Cimb5QJM0pHEyVGlQVWgclHodan/C/2+/3SysrKzfjwleT+hwVaWtq6LxTxNXKX1BCTMO8qINXSaLX7UlgR51APTiVdYBXA4+qUakJeB63b29v+VNIFLND+b0J6DH5AekbsTCOlfa5VoKXWhagKcUHQlaO7zJfUs0DJdL4ADhgvOkMb4Ihd+BXyIy5NqZ7YpuMdzCrgZL+mUTvsCvLxLSvCFjgF38FPVFaHtrk6EPwKPK6DiiZRChzUyEMN+xaUeN4nfuJm+U2eVJsbYCYpyV04rkg+h+Caeoq6ZrsE9njeBV+Y8YtisTgaiZ+n9OFM4+YkyE/5egqxTnrN9B74iO97iUSixJUt5aN7SgvXt4ydsSkI10mUym/Ud0W4vLx8fHBwIEK1j8pMUrKs1dVVG3UxPNMxp4n5DPYhLE0jFPMsT/XejUajbf5MdFjo2giisMyQK36E6mTOP1VmFPPzxvsIHluQO/f9T81Dqu/dzZt1cAf+AMymEnybyIybAAAAAElFTkSuQmCC\"/>
                                <path d=\"M2.5 2.5l6.758 21.342C11.517 21.575 15 18.45 15 15 15 8.1 9.4 2.5 2.5 2.5z\" fill=\"#E1E1E1\" fill-rule=\"nonzero\"/>
                            </g>
                        </g>
                    </g>
                    <circle fill=\"#FFF\" fill-rule=\"nonzero\" cx=\"12.5\" cy=\"12.5\" r=\"12.5\"/>
                    <path d=\"M12.5.208c6.867 0 12.442 5.542 12.5 12.4v-.1c0-6.9-5.6-12.5-12.5-12.5S0 5.6 0 12.5v.1C.058 5.75 5.633.208 12.5.208z\" fill-opacity=\".2\" fill=\"#FFF\" fill-rule=\"nonzero\"/>
                    <path d=\"M28.333 24.792H12.5c-6.867 0-12.442-5.542-12.5-12.4v.1c0 6.9 5.6 12.5 12.5 12.5h15.833c4.6 0 8.334-3.734 8.334-8.334v-.1c-.059 4.559-3.767 8.234-8.334 8.234z\" fill-opacity=\".1\" fill=\"#212121\" fill-rule=\"nonzero\"/>
                </g>
            </g>
            <path d=\"M28.333 8.333h-4.05C22.567 3.475 17.942 0 12.5 0 5.6 0 0 5.6 0 12.5S5.6 25 12.5 25h15.833c4.6 0 8.334-3.733 8.334-8.333s-3.734-8.334-8.334-8.334z\" fill=\"url(#q)\" fill-rule=\"nonzero\" transform=\"translate(14.333 46.333)\"/>
            <g fill-rule=\"nonzero\" opacity=\".1\">
                <path d=\"M58.667.613c32.3 0 58.493 26.1 58.66 58.36 0-.1.006-.2.006-.306C117.333 26.267 91.067 0 58.667 0S0 26.267 0 58.667c0 .1.007.2.007.306.166-32.26 26.36-58.36 58.66-58.36z\" fill=\"#FFF\"/>
                <path d=\"M117.327 58.36c-.167 32.26-26.36 58.36-58.66 58.36S.173 90.62.007 58.36c0 .107-.007.207-.007.307 0 32.4 26.267 58.666 58.667 58.666 32.4 0 58.666-26.266 58.666-58.666 0-.1-.006-.2-.006-.307z\" fill=\"#263238\"/>
            </g>
            <circle fill=\"url(#k)\" fill-rule=\"nonzero\" cx=\"58.667\" cy=\"58.667\" r=\"58.667\"/>
        </g>
    </g>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "SiteKit42/Resource/assets/lighthouse-logo.svg";
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
        return new Source("", "SiteKit42/Resource/assets/lighthouse-logo.svg", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/SiteKit42/Resource/assets/lighthouse-logo.svg");
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
