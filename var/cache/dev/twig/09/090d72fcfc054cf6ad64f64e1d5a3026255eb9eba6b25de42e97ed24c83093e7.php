<?php

/* gestionStock/Article_User/show.html.twig */
class __TwigTemplate_58ee2ddb22c6e44eed0482ae7b067b8c23720304f7ca2228da663711dae9c0de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Article_User/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_693528858e5c5980b2a7e19b87a274038a1c00c8d9119968e359768669de901f = $this->env->getExtension("native_profiler");
        $__internal_693528858e5c5980b2a7e19b87a274038a1c00c8d9119968e359768669de901f->enter($__internal_693528858e5c5980b2a7e19b87a274038a1c00c8d9119968e359768669de901f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Article_User/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693528858e5c5980b2a7e19b87a274038a1c00c8d9119968e359768669de901f->leave($__internal_693528858e5c5980b2a7e19b87a274038a1c00c8d9119968e359768669de901f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_51d302a10fdf5ec92f89abf9c65e798c812ef4a7ef6bf007601bd2bb89292f2d = $this->env->getExtension("native_profiler");
        $__internal_51d302a10fdf5ec92f89abf9c65e798c812ef4a7ef6bf007601bd2bb89292f2d->enter($__internal_51d302a10fdf5ec92f89abf9c65e798c812ef4a7ef6bf007601bd2bb89292f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Article
";
        
        $__internal_51d302a10fdf5ec92f89abf9c65e798c812ef4a7ef6bf007601bd2bb89292f2d->leave($__internal_51d302a10fdf5ec92f89abf9c65e798c812ef4a7ef6bf007601bd2bb89292f2d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cf0803ea5fc7e6f2473cc69e4f356f417bbc26d91957d8be8bb940fd0a558d8 = $this->env->getExtension("native_profiler");
        $__internal_1cf0803ea5fc7e6f2473cc69e4f356f417bbc26d91957d8be8bb940fd0a558d8->enter($__internal_1cf0803ea5fc7e6f2473cc69e4f356f417bbc26d91957d8be8bb940fd0a558d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:220px; width:2000px;\">
<h3 ><span class=\"glyphicon glyphicon-share-alt\"></span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libele", array()), "html", null, true);
        echo "</h3>

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Article</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Référence de l'Article :</strong> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ref", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Code de l'Article :</strong>  ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Catégorie :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "libele", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Code de la Catégorie :</strong> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "code", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
</div>
</div> 
";
        
        $__internal_1cf0803ea5fc7e6f2473cc69e4f356f417bbc26d91957d8be8bb940fd0a558d8->leave($__internal_1cf0803ea5fc7e6f2473cc69e4f356f417bbc26d91957d8be8bb940fd0a558d8_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_701cb18aed76aa34f620df40a72a8894b029d04bbad1c86c7cb9ea96f31b6539 = $this->env->getExtension("native_profiler");
        $__internal_701cb18aed76aa34f620df40a72a8894b029d04bbad1c86c7cb9ea96f31b6539->enter($__internal_701cb18aed76aa34f620df40a72a8894b029d04bbad1c86c7cb9ea96f31b6539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

        
        });
    })(jQuery);
</script>
";
        
        $__internal_701cb18aed76aa34f620df40a72a8894b029d04bbad1c86c7cb9ea96f31b6539->leave($__internal_701cb18aed76aa34f620df40a72a8894b029d04bbad1c86c7cb9ea96f31b6539_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Article_User/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  106 => 35,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  68 => 16,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Article*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:220px; width:2000px;">*/
/* <h3 ><span class="glyphicon glyphicon-share-alt"></span> {{ entity.libele }}</h3>*/
/* */
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Article</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Référence de l'Article :</strong> {{ entity.ref }}</li>*/
/*           <li class="list-group-item"><strong>Code de l'Article :</strong>  {{ entity.code }} </li>*/
/*           <li class="list-group-item"><strong>Catégorie :</strong> {{ entity.category.libele }}</li>*/
/*           <li class="list-group-item"><strong>Code de la Catégorie :</strong> {{ entity.category.code }}</li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div> */
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*         */
/*         });*/
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
