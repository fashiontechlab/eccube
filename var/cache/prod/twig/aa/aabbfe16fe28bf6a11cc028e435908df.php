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

/* Api42/docs/_config.yml */
class __TwigTemplate_a8b6a4e5e38ffc4a3d980455c2214e4c extends Template
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
        echo "# Welcome to Jekyll!
#
# This config file is meant for settings that affect your entire site, values
# which you are expected to set up once and rarely need to edit after that.
# For technical reasons, this file is *NOT* reloaded automatically when you use
# `jekyll serve`. If you change this file, please restart the server process.

# Theme Settings
#
# Review documentation to determine if you should use `theme` or `remote_theme`
# https://mmistakes.github.io/minimal-mistakes/docs/quick-start-guide/#installing-the-theme

# theme                  : \"minimal-mistakes-jekyll\"
remote_theme             : \"mmistakes/minimal-mistakes@4.20.1\"
minimal_mistakes_skin    : \"default\" # \"air\", \"aqua\", \"contrast\", \"dark\", \"dirt\", \"neon\", \"mint\", \"plum\", \"sunrise\"

# Site Settings
locale                   : \"ja-JP\"
title                    : \"EC-CUBE4 Web API プラグイン\"
title_separator          : \"-\"
subtitle                 : \"開発ドキュメント\"
name                     : \"EC-CUBE\"
description              : \"EC-CUBE4 Web API プラグイン 開発ドキュメント\"
url                      : # the base hostname & protocol for your site e.g. \"https://mmistakes.github.io\"
baseurl                  : # the subpath of your site, e.g. \"/blog\"
repository               : \"EC-CUBE/eccube-api4\"
teaser                   : # path of fallback teaser image, e.g. \"/assets/images/500x300.png\"
logo                     : # path of logo image to display in the masthead, e.g. \"/assets/images/88x88.png\"
masthead_title           : # overrides the website title displayed in the masthead, use \" \" for no title
# breadcrumbs            : false # true, false (default)
words_per_minute         : 200
comments:
  provider               : # false (default), \"disqus\", \"discourse\", \"facebook\", \"staticman\", \"staticman_v2\", \"utterances\", \"custom\"
  disqus:
    shortname            : # https://help.disqus.com/customer/portal/articles/466208-what-s-a-shortname-
  discourse:
    server               : # https://meta.discourse.org/t/embedding-discourse-comments-via-javascript/31963 , e.g.: meta.discourse.org
  facebook:
    # https://developers.facebook.com/docs/plugins/comments
    appid                :
    num_posts            : # 5 (default)
    colorscheme          : # \"light\" (default), \"dark\"
  utterances:
    theme                : # \"github-light\" (default), \"github-dark\"
    issue_term           : # \"pathname\" (default)
  staticman:
    branch               : # \"master\"
    endpoint             : # \"https://{your Staticman v3 API}/v3/entry/github/\"
reCaptcha:
  siteKey                :
  secret                 :
atom_feed:
  path                   : # blank (default) uses feed.xml
search                   : # true, false (default)
search_full_content      : # true, false (default)
search_provider          : # lunr (default), algolia, google
algolia:
  application_id         : # YOUR_APPLICATION_ID
  index_name             : # YOUR_INDEX_NAME
  search_only_api_key    : # YOUR_SEARCH_ONLY_API_KEY
  powered_by             : # true (default), false
google:
  search_engine_id       : # YOUR_SEARCH_ENGINE_ID
  instant_search         : # false (default), true
# SEO Related
google_site_verification :
bing_site_verification   :
yandex_site_verification :
naver_site_verification  :

# Social Sharing
twitter:
  username               :
facebook:
  username               :
  app_id                 :
  publisher              :
og_image                 : # Open Graph/Twitter default site image
# For specifying social profiles
# - https://developers.google.com/structured-data/customize/social-profiles
social:
  type                   : # Person or Organization (defaults to Person)
  name                   : # If the user or organization name differs from the site's name
  links: # An array of links to social media profiles

# Analytics
analytics:
  provider               : false # false (default), \"google\", \"google-universal\", \"google-gtag\", \"custom\"
  google:
    tracking_id          :
    anonymize_ip         : # true, false (default)


# Site Author
author:
  name             : \"Your Name\"
  avatar           : # path of avatar image, e.g. \"/assets/images/bio-photo.jpg\"
  bio              : \"I am an **amazing** person.\"
  location         : \"Somewhere\"
  email            :
  links:
    - label: \"Email\"
      icon: \"fas fa-fw fa-envelope-square\"
      # url: \"mailto:your.name@email.com\"
    - label: \"Website\"
      icon: \"fas fa-fw fa-link\"
      # url: \"https://your-website.com\"
    - label: \"Twitter\"
      icon: \"fab fa-fw fa-twitter-square\"
      # url: \"https://twitter.com/\"
    - label: \"Facebook\"
      icon: \"fab fa-fw fa-facebook-square\"
      # url: \"https://facebook.com/\"
    - label: \"GitHub\"
      icon: \"fab fa-fw fa-github\"
      # url: \"https://github.com/\"
    - label: \"Instagram\"
      icon: \"fab fa-fw fa-instagram\"
      # url: \"https://instagram.com/\"

# Site Footer
footer:
  links:
    - label: \"Twitter\"
      icon: \"fab fa-fw fa-twitter-square\"
      # url:
    - label: \"Facebook\"
      icon: \"fab fa-fw fa-facebook-square\"
      # url:
    - label: \"GitHub\"
      icon: \"fab fa-fw fa-github\"
      # url:
    - label: \"GitLab\"
      icon: \"fab fa-fw fa-gitlab\"
      # url:
    - label: \"Bitbucket\"
      icon: \"fab fa-fw fa-bitbucket\"
      # url:
    - label: \"Instagram\"
      icon: \"fab fa-fw fa-instagram\"
      # url:


# Reading Files
include:
  - .htaccess
  - _pages
exclude:
  - \"*.sublime-project\"
  - \"*.sublime-workspace\"
  - vendor
  - .asset-cache
  - .bundle
  - .jekyll-assets-cache
  - .sass-cache
  - assets/js/plugins
  - assets/js/_main.js
  - assets/js/vendor
  - Capfile
  - CHANGELOG
  - config
  - Gemfile
  - Gruntfile.js
  - gulpfile.js
  - LICENSE
  - log
  - node_modules
  - package.json
  - package-lock.json
  - Rakefile
  - README
  - tmp
  - /docs # ignore Minimal Mistakes /docs
  - /test # ignore Minimal Mistakes /test
keep_files:
  - .git
  - .svn
encoding: \"utf-8\"
markdown_ext: \"markdown,mkdown,mkdn,mkd,md\"


# Conversion
markdown: kramdown
highlighter: rouge
lsi: false
excerpt_separator: \"\\n\\n\"
incremental: false


# Markdown Processing
kramdown:
  input: GFM
  hard_wrap: false
  auto_ids: true
  footnote_nr: 1
  entity_output: as_char
  toc_levels: 1..6
  smart_quotes: lsquo,rsquo,ldquo,rdquo
  enable_coderay: false


# Sass/SCSS
sass:
  sass_dir: _sass
  style: compressed # https://sass-lang.com/documentation/file.SASS_REFERENCE.html#output_style


# Outputting
permalink: /:categories/:title/
paginate: 5 # amount of posts to show
paginate_path: /page:num/
timezone: # https://en.wikipedia.org/wiki/List_of_tz_database_time_zones


# Plugins (previously gems:)
plugins:
  - jekyll-paginate
  - jekyll-sitemap
  - jekyll-gist
  - jekyll-feed
  - jekyll-include-cache

# mimic GitHub Pages with --safe
whitelist:
  - jekyll-paginate
  - jekyll-sitemap
  - jekyll-gist
  - jekyll-feed
  - jekyll-include-cache


# Archives
#  Type
#  - GitHub Pages compatible archive pages built with Liquid ~> type: liquid (default)
#  - Jekyll Archives plugin archive pages ~> type: jekyll-archives
#  Path (examples)
#  - Archive page should exist at path when using Liquid method or you can
#    expect broken links (especially with breadcrumbs enabled)
#  - <base_path>/tags/my-awesome-tag/index.html ~> path: /tags/
#  - <base_path>/categories/my-awesome-category/index.html ~> path: /categories/
#  - <base_path>/my-awesome-category/index.html ~> path: /
category_archive:
  type: liquid
  path: /categories/
tag_archive:
  type: liquid
  path: /tags/
# https://github.com/jekyll/jekyll-archives
# jekyll-archives:
#   enabled:
#     - categories
#     - tags
#   layouts:
#     category: archive-taxonomy
#     tag: archive-taxonomy
#   permalinks:
#     category: /categories/:name/
#     tag: /tags/:name/


# HTML Compression
# - https://jch.penibelst.de/
compress_html:
  clippings: all
  ignore:
    envs: development

# Defaults
defaults:
  # _pages
  - scope:
      path: \"\"
      type: pages
    values:
      layout: single
      author_profile: false
      read_time: true
      comments: false
      share: false
      related: false
      toc: true
      toc_sticky: true

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/_config.yml";
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
        return new Source("", "Api42/docs/_config.yml", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/docs/_config.yml");
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
