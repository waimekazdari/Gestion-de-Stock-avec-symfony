<?php

/* layout.html.twig */
class __TwigTemplate_8b3773325b40221cdbd72a8f687e646fd265441ea41d6aac68202df59d972970 extends Twig_Template
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
        $__internal_27d6a3c5a8da712cb006d33451fd9b7e82c116fca57be63efbd01cfb042eb475 = $this->env->getExtension("native_profiler");
        $__internal_27d6a3c5a8da712cb006d33451fd9b7e82c116fca57be63efbd01cfb042eb475->enter($__internal_27d6a3c5a8da712cb006d33451fd9b7e82c116fca57be63efbd01cfb042eb475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_css", array()), "html", null, true);
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
        
        $__internal_27d6a3c5a8da712cb006d33451fd9b7e82c116fca57be63efbd01cfb042eb475->leave($__internal_27d6a3c5a8da712cb006d33451fd9b7e82c116fca57be63efbd01cfb042eb475_prof);

    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
        $__internal_085c5f8a91f5d7fdaefb77b610b60fca54bd0e7860173a1c5845cec7bd9d325a = $this->env->getExtension("native_profiler");
        $__internal_085c5f8a91f5d7fdaefb77b610b60fca54bd0e7860173a1c5845cec7bd9d325a->enter($__internal_085c5f8a91f5d7fdaefb77b610b60fca54bd0e7860173a1c5845cec7bd9d325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_085c5f8a91f5d7fdaefb77b610b60fca54bd0e7860173a1c5845cec7bd9d325a->leave($__internal_085c5f8a91f5d7fdaefb77b610b60fca54bd0e7860173a1c5845cec7bd9d325a_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f3def07fb1f0abe5f016b69d439a291994843a792afa58fe67742a89286e1db5 = $this->env->getExtension("native_profiler");
        $__internal_f3def07fb1f0abe5f016b69d439a291994843a792afa58fe67742a89286e1db5->enter($__internal_f3def07fb1f0abe5f016b69d439a291994843a792afa58fe67742a89286e1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_f3def07fb1f0abe5f016b69d439a291994843a792afa58fe67742a89286e1db5->leave($__internal_f3def07fb1f0abe5f016b69d439a291994843a792afa58fe67742a89286e1db5_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2d8619eda97f623720d43b82195a55004f99f4b1b4f4e0496ef45bb9dd5aa11 = $this->env->getExtension("native_profiler");
        $__internal_c2d8619eda97f623720d43b82195a55004f99f4b1b4f4e0496ef45bb9dd5aa11->enter($__internal_c2d8619eda97f623720d43b82195a55004f99f4b1b4f4e0496ef45bb9dd5aa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        
        $__internal_c2d8619eda97f623720d43b82195a55004f99f4b1b4f4e0496ef45bb9dd5aa11->leave($__internal_c2d8619eda97f623720d43b82195a55004f99f4b1b4f4e0496ef45bb9dd5aa11_prof);

    }

    // line 30
    public function block_container($context, array $blocks = array())
    {
        $__internal_e569fba8bb1c50a937b4572e94f49e131ae1bf0dffbffe408316ae90c9be0e98 = $this->env->getExtension("native_profiler");
        $__internal_e569fba8bb1c50a937b4572e94f49e131ae1bf0dffbffe408316ae90c9be0e98->enter($__internal_e569fba8bb1c50a937b4572e94f49e131ae1bf0dffbffe408316ae90c9be0e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_logo", array())), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-small\" /> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        echo "</span></div>

                 <div class=\"dropdown pull-right user-profile\">
                  <a href=\"#\" id=\"drop3\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img class=\"img-small\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "path", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employe", array()), "nom", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                  
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"navbar-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "path", array())), "html", null, true);
        echo "\" alt=\"Alternate Text\" class=\"img-responsive\" />
                                        <div class=\"clearfix\"></div>
                                        <p></p>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                        <p class=\"text-muted small\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                                        <div class=\"divider\"></div>
                                        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myprofile_edit", array("name" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employe", array()), "nom", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">Afficher mon profil</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"navbar-footer\">
                                <div class=\"navbar-footer-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("password_edit");
        echo "\" class=\"btn btn-default btn-sm\">Compte</a>
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
        
        $__internal_e569fba8bb1c50a937b4572e94f49e131ae1bf0dffbffe408316ae90c9be0e98->leave($__internal_e569fba8bb1c50a937b4572e94f49e131ae1bf0dffbffe408316ae90c9be0e98_prof);

    }

    // line 79
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ef057847bc65b19a40f1fa0236bfd5b0f648403c8139a3c4577537a7430a2c87 = $this->env->getExtension("native_profiler");
        $__internal_ef057847bc65b19a40f1fa0236bfd5b0f648403c8139a3c4577537a7430a2c87->enter($__internal_ef057847bc65b19a40f1fa0236bfd5b0f648403c8139a3c4577537a7430a2c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " ";
        
        $__internal_ef057847bc65b19a40f1fa0236bfd5b0f648403c8139a3c4577537a7430a2c87->leave($__internal_ef057847bc65b19a40f1fa0236bfd5b0f648403c8139a3c4577537a7430a2c87_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_57025073cef0c844717348077f6993bec8edf116c00e26dd84208bcba244a2c1 = $this->env->getExtension("native_profiler");
        $__internal_57025073cef0c844717348077f6993bec8edf116c00e26dd84208bcba244a2c1->enter($__internal_57025073cef0c844717348077f6993bec8edf116c00e26dd84208bcba244a2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57025073cef0c844717348077f6993bec8edf116c00e26dd84208bcba244a2c1->leave($__internal_57025073cef0c844717348077f6993bec8edf116c00e26dd84208bcba244a2c1_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d07bf046f9bbc1fafc6c2b370ace3a056c58adfef80be26db0b80267cc3c6b0 = $this->env->getExtension("native_profiler");
        $__internal_2d07bf046f9bbc1fafc6c2b370ace3a056c58adfef80be26db0b80267cc3c6b0->enter($__internal_2d07bf046f9bbc1fafc6c2b370ace3a056c58adfef80be26db0b80267cc3c6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2d07bf046f9bbc1fafc6c2b370ace3a056c58adfef80be26db0b80267cc3c6b0->leave($__internal_2d07bf046f9bbc1fafc6c2b370ace3a056c58adfef80be26db0b80267cc3c6b0_prof);

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
        return array (  289 => 89,  285 => 88,  281 => 87,  277 => 86,  272 => 85,  266 => 84,  255 => 80,  243 => 79,  235 => 91,  233 => 84,  228 => 81,  225 => 80,  222 => 79,  220 => 78,  206 => 67,  200 => 64,  189 => 56,  184 => 54,  180 => 53,  172 => 48,  158 => 41,  149 => 37,  143 => 34,  140 => 33,  138 => 32,  135 => 31,  129 => 30,  117 => 21,  108 => 19,  104 => 18,  100 => 17,  95 => 16,  89 => 15,  78 => 14,  70 => 93,  68 => 30,  58 => 23,  54 => 22,  49 => 21,  46 => 15,  44 => 14,  29 => 1,);
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
/*                   <img class="img-small" src="{{ asset( app.user.image.path)}}" alt="{{ app.user.username }}">{{ app.user.employe.nom }} <span class="glyphicon glyphicon-chevron-down"></span></a>*/
/*                   */
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <div class="navbar-content">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-5">*/
/*                                         <img src="{{ asset( app.user.image.path)}}" alt="Alternate Text" class="img-responsive" />*/
/*                                         <div class="clearfix"></div>*/
/*                                         <p></p>*/
/*                                     </div>*/
/*                                     <div class="col-md-7">*/
/*                                         <span>{{ app.user.username }}</span>*/
/*                                         <p class="text-muted small">{{ app.user.email }}</p>*/
/*                                         <div class="divider"></div>*/
/*                                         <a href="{{ path('myprofile_edit', { 'name': app.user.employe.nom}) }}" class="btn btn-primary btn-sm">Afficher mon profil</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="navbar-footer">*/
/*                                 <div class="navbar-footer-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-6">*/
/*                                             <a href="{{ path('password_edit') }}" class="btn btn-default btn-sm">Compte</a>*/
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
