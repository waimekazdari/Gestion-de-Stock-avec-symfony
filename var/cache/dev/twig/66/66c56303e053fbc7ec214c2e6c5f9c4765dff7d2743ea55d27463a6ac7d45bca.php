<?php

/* base.html.twig */
class __TwigTemplate_475098fff5699f234dae4eee1e1a74237598e803b771b21c517f9a2b7681dc0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcef2d1b9004ee48791cad1e5dcdc4185e0949d8ee6914a4e86ba32c28687e8f = $this->env->getExtension("native_profiler");
        $__internal_dcef2d1b9004ee48791cad1e5dcdc4185e0949d8ee6914a4e86ba32c28687e8f->enter($__internal_dcef2d1b9004ee48791cad1e5dcdc4185e0949d8ee6914a4e86ba32c28687e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Gestion de stock</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
       ";
        // line 37
        echo " 
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ana");
        echo "\">Create</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-md-3\">
         <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\">Panel title</h3>
            </div>
            <div class=\"panel-body\">
              Panel content
            </div>
          </div> 
          </div>
            <div class=\"col-md-6\">
              ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        echo "  
            </div>
            <div class=\"col-md-3\">
              <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\">Panel title</h3>
            </div>
            <div class=\"panel-body\">
              Panel content
            </div>
          </div>  
            </div>
        </div>
 </div>
     
    </div><!-- /.container -->

 ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "  </body>
</html>
";
        
        $__internal_dcef2d1b9004ee48791cad1e5dcdc4185e0949d8ee6914a4e86ba32c28687e8f->leave($__internal_dcef2d1b9004ee48791cad1e5dcdc4185e0949d8ee6914a4e86ba32c28687e8f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_078051ce71c8af447fff85685c507ac38a589d3a36f98bead88a20ff8b29c555 = $this->env->getExtension("native_profiler");
        $__internal_078051ce71c8af447fff85685c507ac38a589d3a36f98bead88a20ff8b29c555->enter($__internal_078051ce71c8af447fff85685c507ac38a589d3a36f98bead88a20ff8b29c555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_078051ce71c8af447fff85685c507ac38a589d3a36f98bead88a20ff8b29c555->leave($__internal_078051ce71c8af447fff85685c507ac38a589d3a36f98bead88a20ff8b29c555_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa70da7d9fcdc16b43a62cde044ae70ca728d4020098c48a7875b1189ae3edf5 = $this->env->getExtension("native_profiler");
        $__internal_aa70da7d9fcdc16b43a62cde044ae70ca728d4020098c48a7875b1189ae3edf5->enter($__internal_aa70da7d9fcdc16b43a62cde044ae70ca728d4020098c48a7875b1189ae3edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aa70da7d9fcdc16b43a62cde044ae70ca728d4020098c48a7875b1189ae3edf5->leave($__internal_aa70da7d9fcdc16b43a62cde044ae70ca728d4020098c48a7875b1189ae3edf5_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0658b3afd469497b3288c2d8d2abbe5a1f2914bfd7ab18fbfd8c098307886d2 = $this->env->getExtension("native_profiler");
        $__internal_d0658b3afd469497b3288c2d8d2abbe5a1f2914bfd7ab18fbfd8c098307886d2->enter($__internal_d0658b3afd469497b3288c2d8d2abbe5a1f2914bfd7ab18fbfd8c098307886d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0658b3afd469497b3288c2d8d2abbe5a1f2914bfd7ab18fbfd8c098307886d2->leave($__internal_d0658b3afd469497b3288c2d8d2abbe5a1f2914bfd7ab18fbfd8c098307886d2_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6a12a196d95d24810815ad004dd395c3bd4a6b053e8157a98f4aaa72fb01f34 = $this->env->getExtension("native_profiler");
        $__internal_f6a12a196d95d24810815ad004dd395c3bd4a6b053e8157a98f4aaa72fb01f34->enter($__internal_f6a12a196d95d24810815ad004dd395c3bd4a6b053e8157a98f4aaa72fb01f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6a12a196d95d24810815ad004dd395c3bd4a6b053e8157a98f4aaa72fb01f34->leave($__internal_f6a12a196d95d24810815ad004dd395c3bd4a6b053e8157a98f4aaa72fb01f34_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 74,  154 => 57,  143 => 16,  131 => 12,  122 => 75,  120 => 74,  100 => 57,  78 => 38,  75 => 37,  51 => 17,  49 => 16,  45 => 15,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('Resources/public/css/bootstrap.min.css') }}">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <nav class="navbar navbar-inverse">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">Gestion de stock</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="#">Home</a></li>*/
/*        {# dans la path existe le name de l'action désiré#} */
/*             <li><a href="{{path('ana')}}">Create</a></li>*/
/*             <li><a href="#contact">Contact</a></li>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*         <div class="col-md-3">*/
/*          <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*               <h3 class="panel-title">Panel title</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*               Panel content*/
/*             </div>*/
/*           </div> */
/*           </div>*/
/*             <div class="col-md-6">*/
/*               {% block body %}{% endblock %}  */
/*             </div>*/
/*             <div class="col-md-3">*/
/*               <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*               <h3 class="panel-title">Panel title</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*               Panel content*/
/*             </div>*/
/*           </div>  */
/*             </div>*/
/*         </div>*/
/*  </div>*/
/*      */
/*     </div><!-- /.container -->*/
/* */
/*  {% block javascripts %}{% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
