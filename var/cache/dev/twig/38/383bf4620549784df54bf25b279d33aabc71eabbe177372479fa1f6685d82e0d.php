<?php

/* layout.html.twig */
class __TwigTemplate_9c6d5cea3107366f9902e63c76c6703e87592f214f3522e997c3403881423493 extends Twig_Template
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
        $__internal_3757920a1cfc667f8cdde2202d1c04e76af89fe04a7918161e581e28546e75e9 = $this->env->getExtension("native_profiler");
        $__internal_3757920a1cfc667f8cdde2202d1c04e76af89fe04a7918161e581e28546e75e9->enter($__internal_3757920a1cfc667f8cdde2202d1c04e76af89fe04a7918161e581e28546e75e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_3757920a1cfc667f8cdde2202d1c04e76af89fe04a7918161e581e28546e75e9->leave($__internal_3757920a1cfc667f8cdde2202d1c04e76af89fe04a7918161e581e28546e75e9_prof);

    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
        $__internal_9706fe26a8a310876a64cdca2a6498ec3c9ec653bf577b4975f630e9976ef601 = $this->env->getExtension("native_profiler");
        $__internal_9706fe26a8a310876a64cdca2a6498ec3c9ec653bf577b4975f630e9976ef601->enter($__internal_9706fe26a8a310876a64cdca2a6498ec3c9ec653bf577b4975f630e9976ef601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_9706fe26a8a310876a64cdca2a6498ec3c9ec653bf577b4975f630e9976ef601->leave($__internal_9706fe26a8a310876a64cdca2a6498ec3c9ec653bf577b4975f630e9976ef601_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5d6d83b2053dd39c4329af2149bed51ea8fa4ac26edba208d61e9ead4a104f0e = $this->env->getExtension("native_profiler");
        $__internal_5d6d83b2053dd39c4329af2149bed51ea8fa4ac26edba208d61e9ead4a104f0e->enter($__internal_5d6d83b2053dd39c4329af2149bed51ea8fa4ac26edba208d61e9ead4a104f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_5d6d83b2053dd39c4329af2149bed51ea8fa4ac26edba208d61e9ead4a104f0e->leave($__internal_5d6d83b2053dd39c4329af2149bed51ea8fa4ac26edba208d61e9ead4a104f0e_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ff438f5695c1435b4b776bfc04112b684b8a8149bb03ee18ead2739a50370e6 = $this->env->getExtension("native_profiler");
        $__internal_1ff438f5695c1435b4b776bfc04112b684b8a8149bb03ee18ead2739a50370e6->enter($__internal_1ff438f5695c1435b4b776bfc04112b684b8a8149bb03ee18ead2739a50370e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        
        $__internal_1ff438f5695c1435b4b776bfc04112b684b8a8149bb03ee18ead2739a50370e6->leave($__internal_1ff438f5695c1435b4b776bfc04112b684b8a8149bb03ee18ead2739a50370e6_prof);

    }

    // line 30
    public function block_container($context, array $blocks = array())
    {
        $__internal_72f222043ba8dd3e96bb5a814abbf26c02252daf9fabc37540e90d1dfcc1a0f4 = $this->env->getExtension("native_profiler");
        $__internal_72f222043ba8dd3e96bb5a814abbf26c02252daf9fabc37540e90d1dfcc1a0f4->enter($__internal_72f222043ba8dd3e96bb5a814abbf26c02252daf9fabc37540e90d1dfcc1a0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                                            <a href=\"\" class=\"btn btn-default btn-sm pull-right\">Déconnexion</a>
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
        
        $__internal_72f222043ba8dd3e96bb5a814abbf26c02252daf9fabc37540e90d1dfcc1a0f4->leave($__internal_72f222043ba8dd3e96bb5a814abbf26c02252daf9fabc37540e90d1dfcc1a0f4_prof);

    }

    // line 79
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8b21e2e08dc0609040368ef53dc38842ce27c7b5137e1f3b2746cb514bcc5039 = $this->env->getExtension("native_profiler");
        $__internal_8b21e2e08dc0609040368ef53dc38842ce27c7b5137e1f3b2746cb514bcc5039->enter($__internal_8b21e2e08dc0609040368ef53dc38842ce27c7b5137e1f3b2746cb514bcc5039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " ";
        
        $__internal_8b21e2e08dc0609040368ef53dc38842ce27c7b5137e1f3b2746cb514bcc5039->leave($__internal_8b21e2e08dc0609040368ef53dc38842ce27c7b5137e1f3b2746cb514bcc5039_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a88a96ed59edd532b88fd7bf548e4c69dc4eb633f1decb75c0e34ba9a3397c = $this->env->getExtension("native_profiler");
        $__internal_a2a88a96ed59edd532b88fd7bf548e4c69dc4eb633f1decb75c0e34ba9a3397c->enter($__internal_a2a88a96ed59edd532b88fd7bf548e4c69dc4eb633f1decb75c0e34ba9a3397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2a88a96ed59edd532b88fd7bf548e4c69dc4eb633f1decb75c0e34ba9a3397c->leave($__internal_a2a88a96ed59edd532b88fd7bf548e4c69dc4eb633f1decb75c0e34ba9a3397c_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a7510458e9a65bc5cce6390061d661b04ebf84b5ebc746371d97161193dd3c5 = $this->env->getExtension("native_profiler");
        $__internal_2a7510458e9a65bc5cce6390061d661b04ebf84b5ebc746371d97161193dd3c5->enter($__internal_2a7510458e9a65bc5cce6390061d661b04ebf84b5ebc746371d97161193dd3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2a7510458e9a65bc5cce6390061d661b04ebf84b5ebc746371d97161193dd3c5->leave($__internal_2a7510458e9a65bc5cce6390061d661b04ebf84b5ebc746371d97161193dd3c5_prof);

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
        return array (  267 => 89,  263 => 88,  259 => 87,  255 => 86,  250 => 85,  244 => 84,  233 => 80,  221 => 79,  213 => 91,  211 => 84,  206 => 81,  203 => 80,  200 => 79,  198 => 78,  158 => 41,  149 => 37,  143 => 34,  140 => 33,  138 => 32,  135 => 31,  129 => 30,  117 => 21,  108 => 19,  104 => 18,  100 => 17,  95 => 16,  89 => 15,  78 => 14,  70 => 93,  68 => 30,  58 => 23,  54 => 22,  49 => 21,  46 => 15,  44 => 14,  29 => 1,);
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
/*                                             <a href="" class="btn btn-default btn-sm pull-right">Déconnexion</a>*/
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
