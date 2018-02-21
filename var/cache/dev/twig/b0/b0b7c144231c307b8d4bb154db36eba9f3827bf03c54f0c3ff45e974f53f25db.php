<?php

/* layout.html.twig */
class __TwigTemplate_8e0e4aa60f59b509389c9c74ea3e833edec928ec2943d3719b5a6bf77ffeea91 extends Twig_Template
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
        $__internal_d2811e72741ad4ec087651792688bcc422ac819463fa83b7ec5fa87aae2703a5 = $this->env->getExtension("native_profiler");
        $__internal_d2811e72741ad4ec087651792688bcc422ac819463fa83b7ec5fa87aae2703a5->enter($__internal_d2811e72741ad4ec087651792688bcc422ac819463fa83b7ec5fa87aae2703a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_d2811e72741ad4ec087651792688bcc422ac819463fa83b7ec5fa87aae2703a5->leave($__internal_d2811e72741ad4ec087651792688bcc422ac819463fa83b7ec5fa87aae2703a5_prof);

    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
        $__internal_bbf2e5b8954a2c1d92ca462937574c5321b4250df6fe015d1a0084c45bc9dc9a = $this->env->getExtension("native_profiler");
        $__internal_bbf2e5b8954a2c1d92ca462937574c5321b4250df6fe015d1a0084c45bc9dc9a->enter($__internal_bbf2e5b8954a2c1d92ca462937574c5321b4250df6fe015d1a0084c45bc9dc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_bbf2e5b8954a2c1d92ca462937574c5321b4250df6fe015d1a0084c45bc9dc9a->leave($__internal_bbf2e5b8954a2c1d92ca462937574c5321b4250df6fe015d1a0084c45bc9dc9a_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4038b9c0dddcb769ae899255cbd9935ae471021d128d5526240404b9c39a8dc0 = $this->env->getExtension("native_profiler");
        $__internal_4038b9c0dddcb769ae899255cbd9935ae471021d128d5526240404b9c39a8dc0->enter($__internal_4038b9c0dddcb769ae899255cbd9935ae471021d128d5526240404b9c39a8dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_4038b9c0dddcb769ae899255cbd9935ae471021d128d5526240404b9c39a8dc0->leave($__internal_4038b9c0dddcb769ae899255cbd9935ae471021d128d5526240404b9c39a8dc0_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_83289809d1227e986ff4f4df0a1f206c329338907c6a901bb5d1f604d6a4335c = $this->env->getExtension("native_profiler");
        $__internal_83289809d1227e986ff4f4df0a1f206c329338907c6a901bb5d1f604d6a4335c->enter($__internal_83289809d1227e986ff4f4df0a1f206c329338907c6a901bb5d1f604d6a4335c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        
        $__internal_83289809d1227e986ff4f4df0a1f206c329338907c6a901bb5d1f604d6a4335c->leave($__internal_83289809d1227e986ff4f4df0a1f206c329338907c6a901bb5d1f604d6a4335c_prof);

    }

    // line 30
    public function block_container($context, array $blocks = array())
    {
        $__internal_1ad955d4a2376568d3e3897645dd989e203ec1e0185c5d67058aa05286f024ad = $this->env->getExtension("native_profiler");
        $__internal_1ad955d4a2376568d3e3897645dd989e203ec1e0185c5d67058aa05286f024ad->enter($__internal_1ad955d4a2376568d3e3897645dd989e203ec1e0185c5d67058aa05286f024ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                                        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_profile_edit", array("name" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employe", array()), "nom", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">Afficher mon profil</a>
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
        
        $__internal_1ad955d4a2376568d3e3897645dd989e203ec1e0185c5d67058aa05286f024ad->leave($__internal_1ad955d4a2376568d3e3897645dd989e203ec1e0185c5d67058aa05286f024ad_prof);

    }

    // line 79
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cbbfa973b0aae1c6f74e672218c16cbf13bc6d242a4e28083d86447cabead7ab = $this->env->getExtension("native_profiler");
        $__internal_cbbfa973b0aae1c6f74e672218c16cbf13bc6d242a4e28083d86447cabead7ab->enter($__internal_cbbfa973b0aae1c6f74e672218c16cbf13bc6d242a4e28083d86447cabead7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " ";
        
        $__internal_cbbfa973b0aae1c6f74e672218c16cbf13bc6d242a4e28083d86447cabead7ab->leave($__internal_cbbfa973b0aae1c6f74e672218c16cbf13bc6d242a4e28083d86447cabead7ab_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9848584502fbbfa23a3ea3e8cdd3222aefecf9d38f07941b7ec7f3df15a67cd = $this->env->getExtension("native_profiler");
        $__internal_e9848584502fbbfa23a3ea3e8cdd3222aefecf9d38f07941b7ec7f3df15a67cd->enter($__internal_e9848584502fbbfa23a3ea3e8cdd3222aefecf9d38f07941b7ec7f3df15a67cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9848584502fbbfa23a3ea3e8cdd3222aefecf9d38f07941b7ec7f3df15a67cd->leave($__internal_e9848584502fbbfa23a3ea3e8cdd3222aefecf9d38f07941b7ec7f3df15a67cd_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61ef49ff1656a15db565cba04f519d81721e26efc8a9b09d1bf4567ca63a5ec3 = $this->env->getExtension("native_profiler");
        $__internal_61ef49ff1656a15db565cba04f519d81721e26efc8a9b09d1bf4567ca63a5ec3->enter($__internal_61ef49ff1656a15db565cba04f519d81721e26efc8a9b09d1bf4567ca63a5ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_61ef49ff1656a15db565cba04f519d81721e26efc8a9b09d1bf4567ca63a5ec3->leave($__internal_61ef49ff1656a15db565cba04f519d81721e26efc8a9b09d1bf4567ca63a5ec3_prof);

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
        return array (  273 => 89,  269 => 88,  265 => 87,  261 => 86,  256 => 85,  250 => 84,  239 => 80,  227 => 79,  219 => 91,  217 => 84,  212 => 81,  209 => 80,  206 => 79,  204 => 78,  190 => 67,  176 => 56,  158 => 41,  149 => 37,  143 => 34,  140 => 33,  138 => 32,  135 => 31,  129 => 30,  117 => 21,  108 => 19,  104 => 18,  100 => 17,  95 => 16,  89 => 15,  78 => 14,  70 => 93,  68 => 30,  58 => 23,  54 => 22,  49 => 21,  46 => 15,  44 => 14,  29 => 1,);
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
/*                   <img class="img-small" src="{{ asset( app.user.image.path)}}" alt="">*/
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
/*                                         <a href="{{ path('ben_profile_edit', { 'name': app.user.employe.nom}) }}" class="btn btn-primary btn-sm">Afficher mon profil</a>*/
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
