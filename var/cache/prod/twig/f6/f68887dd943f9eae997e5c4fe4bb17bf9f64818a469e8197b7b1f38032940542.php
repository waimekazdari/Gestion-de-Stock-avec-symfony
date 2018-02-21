<?php

/* layout.html.twig */
class __TwigTemplate_ad20386d1aa4989bc611c0f9b301a433a1fc27a61533b1a963d5f5f469db0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
         ===================================================================
        ||          designed & developed by KAZDARI Wiame         ||
         ===================================================================
-->
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"application-name\" content=\"Gestion de Stock\"/>
    <meta name=\"author\" content=\"KAZDARI.WIAM@GMAIL.COM\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    ";
        // line 14
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 21
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon.png"), "html", null, true);
        echo "\" />
    <style>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_css", array()), "html", null, true);
        echo "</style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
    <![endif]-->
</head>

";
        // line 30
        $this->displayBlock('container', $context, $blocks);
        // line 93
        echo "</html>
";
    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 16
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_name", array()), "html", null, true);
    }

    // line 30
    public function block_container($context, array $blocks = array())
    {
        // line 31
        echo "<body class=\"theme1\">
    ";
        // line 32
        $this->loadTemplate("default/menu.html.twig", "layout.html.twig", 32)->display($context);
        // line 33
        echo "
    <div class=\"visible-print col-md-12 text-left\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/header.png"), "html", null, true);
        echo "\" alt=\"logo\" /></div>
    <section class=\"wrap\">
        <header id=\"adminbar\">
            <div id=\"logo\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_logo", array())), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-small\" /> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_name", array()), "html", null, true);
        echo "</span></div>

                 <div class=\"dropdown pull-right user-profile\">
                  <a href=\"#\" id=\"drop3\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img class=\"img-small\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/4.png"), "html", null, true);
        echo "\" alt=\"\">
                  
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"navbar-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <img src=\"\" alt=\"Alternate Text\" class=\"img-responsive\" />
                                        <div class=\"clearfix\"></div>
                                        <p></p>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <span></span>
                                        <p class=\"text-muted small\"></p>
                                        <div class=\"divider\"></div>
                                        <a href=\"\" class=\"btn btn-primary btn-sm\">Afficher mon profil</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"navbar-footer\">
                                <div class=\"navbar-footer-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <a href=\"\" class=\"btn btn-default btn-sm\">Compte</a>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"btn btn-default btn-sm pull-right\">Déconnexion</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </header>

        <div class=\"container\">
            ";
        // line 78
        $this->loadTemplate("default/flashes.html.twig", "layout.html.twig", 78)->display($context);
        // line 79
        echo "            ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 80
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "        </div>
    </section>

    ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "</body>
";
    }

    // line 79
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " ";
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/application.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 89,  221 => 88,  217 => 87,  213 => 86,  208 => 85,  205 => 84,  200 => 80,  194 => 79,  189 => 91,  187 => 84,  182 => 81,  179 => 80,  176 => 79,  174 => 78,  160 => 67,  131 => 41,  122 => 37,  116 => 34,  113 => 33,  111 => 32,  108 => 31,  105 => 30,  99 => 21,  93 => 19,  89 => 18,  85 => 17,  80 => 16,  77 => 15,  72 => 14,  67 => 93,  65 => 30,  55 => 23,  51 => 22,  46 => 21,  43 => 15,  41 => 14,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--*/
/*          ===================================================================*/
/*         ||          designed & developed by KAZDARI Wiame         ||*/
/*          ===================================================================*/
/* -->*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="application-name" content="Gestion de Stock"/>*/
/*     <meta name="author" content="KAZDARI.WIAM@GMAIL.COM">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/*     {% block meta %}{% endblock %}*/
/*     {% block stylesheet %}*/
/*         <link href="{{ asset('Resources/public/css/bootstrap.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('Resources/public/css/layout.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('Resources/public/css/main.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('Resources/public/css/select2.css') }}" rel="stylesheet">*/
/*     {% endblock %}*/
/*     <title>{% block title %}{{ app_config.app_name }}{% endblock %}</title>*/
/*     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icon.png') }}" />*/
/*     <style>{{ app_config.app_css }}</style>*/
/*     <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="js/html5shiv.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* {% block container %}*/
/* <body class="theme1">*/
/*     {% include "default/menu.html.twig" %}*/
/* */
/*     <div class="visible-print col-md-12 text-left"><img src="{{asset('Resources/public/images/header.png')}}" alt="logo" /></div>*/
/*     <section class="wrap">*/
/*         <header id="adminbar">*/
/*             <div id="logo"><img src="{{ asset( app_config.app_logo )}}" alt="logo" class="img-small" /> <span>{{ app_config.app_name }}</span></div>*/
/* */
/*                  <div class="dropdown pull-right user-profile">*/
/*                   <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <img class="img-small" src="{{asset('Resources/public/images/4.png')}}" alt="">*/
/*                   */
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <div class="navbar-content">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-5">*/
/*                                         <img src="" alt="Alternate Text" class="img-responsive" />*/
/*                                         <div class="clearfix"></div>*/
/*                                         <p></p>*/
/*                                     </div>*/
/*                                     <div class="col-md-7">*/
/*                                         <span></span>*/
/*                                         <p class="text-muted small"></p>*/
/*                                         <div class="divider"></div>*/
/*                                         <a href="" class="btn btn-primary btn-sm">Afficher mon profil</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="navbar-footer">*/
/*                                 <div class="navbar-footer-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-6">*/
/*                                             <a href="" class="btn btn-default btn-sm">Compte</a>*/
/*                                         </div>*/
/*                                         <div class="col-md-6">*/
/*                                             <a href="{{ path('logout') }}" class="btn btn-default btn-sm pull-right">Déconnexion</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*         </header>*/
/* */
/*         <div class="container">*/
/*             {% include "default/flashes.html.twig" %}*/
/*             {% block breadcrumb %} {% endblock %}*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </section>*/
/* */
/*     {% block javascripts %}*/
/*     <script src="{{ asset('Resources/public/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('Resources/public/js/bootstrap.min.js') }}"></script> */
/*     <script src="{{ asset('Resources/public/js/jquery.cookie.js') }}"></script>*/
/*     <script src="{{ asset('Resources/public/js/select2.min.js') }}"></script>*/
/*     <script src="{{ asset('Resources/public/js/application.js') }}"></script>*/
/*     {% endblock javascripts %}*/
/* </body>*/
/* {% endblock container %}*/
/* </html>*/
/* */
