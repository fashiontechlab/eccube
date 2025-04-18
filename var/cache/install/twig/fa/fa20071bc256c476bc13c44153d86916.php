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

/* Api42/docs/Gemfile.lock */
class __TwigTemplate_a58bacf3be3e87bb1b3e51620e6d50ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/docs/Gemfile.lock"));

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
        echo "GEM
  remote: https://rubygems.org/
  specs:
    activesupport (6.0.5.1)
      concurrent-ruby (~> 1.0, >= 1.0.2)
      i18n (>= 0.7, < 2)
      minitest (~> 5.1)
      tzinfo (~> 1.1)
      zeitwerk (~> 2.2, >= 2.2.2)
    addressable (2.8.0)
      public_suffix (>= 2.0.2, < 5.0)
    coffee-script (2.4.1)
      coffee-script-source
      execjs
    coffee-script-source (1.11.1)
    colorator (1.1.0)
    commonmarker (0.23.6)
    concurrent-ruby (1.1.10)
    dnsruby (1.61.9)
      simpleidn (~> 0.1)
    em-websocket (0.5.3)
      eventmachine (>= 0.12.9)
      http_parser.rb (~> 0)
    ethon (0.15.0)
      ffi (>= 1.15.0)
    eventmachine (1.2.7)
    execjs (2.8.1)
    faraday (2.4.0)
      faraday-net_http (~> 2.0)
      ruby2_keywords (>= 0.0.4)
    faraday-net_http (2.1.0)
    ffi (1.15.5)
    forwardable-extended (2.6.0)
    gemoji (3.0.1)
    github-pages (227)
      github-pages-health-check (= 1.17.9)
      jekyll (= 3.9.2)
      jekyll-avatar (= 0.7.0)
      jekyll-coffeescript (= 1.1.1)
      jekyll-commonmark-ghpages (= 0.2.0)
      jekyll-default-layout (= 0.1.4)
      jekyll-feed (= 0.15.1)
      jekyll-gist (= 1.5.0)
      jekyll-github-metadata (= 2.13.0)
      jekyll-include-cache (= 0.2.1)
      jekyll-mentions (= 1.6.0)
      jekyll-optional-front-matter (= 0.3.2)
      jekyll-paginate (= 1.1.0)
      jekyll-readme-index (= 0.3.0)
      jekyll-redirect-from (= 0.16.0)
      jekyll-relative-links (= 0.6.1)
      jekyll-remote-theme (= 0.4.3)
      jekyll-sass-converter (= 1.5.2)
      jekyll-seo-tag (= 2.8.0)
      jekyll-sitemap (= 1.4.0)
      jekyll-swiss (= 1.0.0)
      jekyll-theme-architect (= 0.2.0)
      jekyll-theme-cayman (= 0.2.0)
      jekyll-theme-dinky (= 0.2.0)
      jekyll-theme-hacker (= 0.2.0)
      jekyll-theme-leap-day (= 0.2.0)
      jekyll-theme-merlot (= 0.2.0)
      jekyll-theme-midnight (= 0.2.0)
      jekyll-theme-minimal (= 0.2.0)
      jekyll-theme-modernist (= 0.2.0)
      jekyll-theme-primer (= 0.6.0)
      jekyll-theme-slate (= 0.2.0)
      jekyll-theme-tactile (= 0.2.0)
      jekyll-theme-time-machine (= 0.2.0)
      jekyll-titles-from-headings (= 0.5.3)
      jemoji (= 0.12.0)
      kramdown (= 2.3.2)
      kramdown-parser-gfm (= 1.1.0)
      liquid (= 4.0.3)
      mercenary (~> 0.3)
      minima (= 2.5.1)
      nokogiri (>= 1.13.6, < 2.0)
      rouge (= 3.26.0)
      terminal-table (~> 1.4)
    github-pages-health-check (1.17.9)
      addressable (~> 2.3)
      dnsruby (~> 1.60)
      octokit (~> 4.0)
      public_suffix (>= 3.0, < 5.0)
      typhoeus (~> 1.3)
    html-pipeline (2.14.2)
      activesupport (>= 2)
      nokogiri (>= 1.4)
    http_parser.rb (0.8.0)
    i18n (0.9.5)
      concurrent-ruby (~> 1.0)
    jekyll (3.9.2)
      addressable (~> 2.4)
      colorator (~> 1.0)
      em-websocket (~> 0.5)
      i18n (~> 0.7)
      jekyll-sass-converter (~> 1.0)
      jekyll-watch (~> 2.0)
      kramdown (>= 1.17, < 3)
      liquid (~> 4.0)
      mercenary (~> 0.3.3)
      pathutil (~> 0.9)
      rouge (>= 1.7, < 4)
      safe_yaml (~> 1.0)
    jekyll-avatar (0.7.0)
      jekyll (>= 3.0, < 5.0)
    jekyll-coffeescript (1.1.1)
      coffee-script (~> 2.2)
      coffee-script-source (~> 1.11.1)
    jekyll-commonmark (1.4.0)
      commonmarker (~> 0.22)
    jekyll-commonmark-ghpages (0.2.0)
      commonmarker (~> 0.23.4)
      jekyll (~> 3.9.0)
      jekyll-commonmark (~> 1.4.0)
      rouge (>= 2.0, < 4.0)
    jekyll-default-layout (0.1.4)
      jekyll (~> 3.0)
    jekyll-feed (0.15.1)
      jekyll (>= 3.7, < 5.0)
    jekyll-gist (1.5.0)
      octokit (~> 4.2)
    jekyll-github-metadata (2.13.0)
      jekyll (>= 3.4, < 5.0)
      octokit (~> 4.0, != 4.4.0)
    jekyll-include-cache (0.2.1)
      jekyll (>= 3.7, < 5.0)
    jekyll-mentions (1.6.0)
      html-pipeline (~> 2.3)
      jekyll (>= 3.7, < 5.0)
    jekyll-optional-front-matter (0.3.2)
      jekyll (>= 3.0, < 5.0)
    jekyll-paginate (1.1.0)
    jekyll-readme-index (0.3.0)
      jekyll (>= 3.0, < 5.0)
    jekyll-redirect-from (0.16.0)
      jekyll (>= 3.3, < 5.0)
    jekyll-relative-links (0.6.1)
      jekyll (>= 3.3, < 5.0)
    jekyll-remote-theme (0.4.3)
      addressable (~> 2.0)
      jekyll (>= 3.5, < 5.0)
      jekyll-sass-converter (>= 1.0, <= 3.0.0, != 2.0.0)
      rubyzip (>= 1.3.0, < 3.0)
    jekyll-sass-converter (1.5.2)
      sass (~> 3.4)
    jekyll-seo-tag (2.8.0)
      jekyll (>= 3.8, < 5.0)
    jekyll-sitemap (1.4.0)
      jekyll (>= 3.7, < 5.0)
    jekyll-swiss (1.0.0)
    jekyll-theme-architect (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-cayman (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-dinky (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-hacker (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-leap-day (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-merlot (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-midnight (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-minimal (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-modernist (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-primer (0.6.0)
      jekyll (> 3.5, < 5.0)
      jekyll-github-metadata (~> 2.9)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-slate (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-tactile (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-theme-time-machine (0.2.0)
      jekyll (> 3.5, < 5.0)
      jekyll-seo-tag (~> 2.0)
    jekyll-titles-from-headings (0.5.3)
      jekyll (>= 3.3, < 5.0)
    jekyll-watch (2.2.1)
      listen (~> 3.0)
    jemoji (0.12.0)
      gemoji (~> 3.0)
      html-pipeline (~> 2.2)
      jekyll (>= 3.0, < 5.0)
    kramdown (2.3.2)
      rexml
    kramdown-parser-gfm (1.1.0)
      kramdown (~> 2.0)
    liquid (4.0.3)
    liquid-c (4.0.0)
      liquid (>= 3.0.0)
    listen (3.7.1)
      rb-fsevent (~> 0.10, >= 0.10.3)
      rb-inotify (~> 0.9, >= 0.9.10)
    mercenary (0.3.6)
    mini_portile2 (2.8.0)
    minima (2.5.1)
      jekyll (>= 3.5, < 5.0)
      jekyll-feed (~> 0.9)
      jekyll-seo-tag (~> 2.1)
    minimal-mistakes-jekyll (4.24.0)
      jekyll (>= 3.7, < 5.0)
      jekyll-feed (~> 0.1)
      jekyll-gist (~> 1.5)
      jekyll-include-cache (~> 0.1)
      jekyll-paginate (~> 1.1)
      jekyll-sitemap (~> 1.3)
    minitest (5.16.2)
    nokogiri (1.13.9)
      mini_portile2 (~> 2.8.0)
      racc (~> 1.4)
    octokit (4.25.1)
      faraday (>= 1, < 3)
      sawyer (~> 0.9)
    pathutil (0.16.2)
      forwardable-extended (~> 2.6)
    public_suffix (4.0.7)
    racc (1.6.0)
    rb-fsevent (0.11.1)
    rb-inotify (0.10.1)
      ffi (~> 1.0)
    rexml (3.2.5)
    rouge (3.26.0)
    ruby2_keywords (0.0.5)
    rubyzip (2.3.2)
    safe_yaml (1.0.5)
    sass (3.7.4)
      sass-listen (~> 4.0.0)
    sass-listen (4.0.0)
      rb-fsevent (~> 0.9, >= 0.9.4)
      rb-inotify (~> 0.9, >= 0.9.7)
    sawyer (0.9.2)
      addressable (>= 2.3.5)
      faraday (>= 0.17.3, < 3)
    simpleidn (0.2.1)
      unf (~> 0.1.4)
    terminal-table (1.8.0)
      unicode-display_width (~> 1.1, >= 1.1.1)
    thread_safe (0.3.6)
    typhoeus (1.4.0)
      ethon (>= 0.9.0)
    tzinfo (1.2.10)
      thread_safe (~> 0.1)
    unf (0.1.4)
      unf_ext
    unf_ext (0.0.8.2)
    unicode-display_width (1.8.0)
    zeitwerk (2.6.0)

PLATFORMS
  ruby

DEPENDENCIES
  github-pages (>= 224)
  jekyll-feed
  jekyll-gist
  jekyll-include-cache
  jekyll-paginate
  jekyll-seo-tag
  jekyll-sitemap
  liquid-c
  minimal-mistakes-jekyll

BUNDLED WITH
   2.1.4
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/Gemfile.lock";
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
        return new Source("", "Api42/docs/Gemfile.lock", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/docs/Gemfile.lock");
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
