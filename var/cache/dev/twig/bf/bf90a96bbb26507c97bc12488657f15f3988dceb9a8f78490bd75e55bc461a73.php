<?php

/* gestionStock/Article/show.html.twig */
class __TwigTemplate_ea3edf606c34cfb87cbd13ca58951d81ecdc58b9f776b3a3bf07e83297318e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Article/show.html.twig", 1);
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
        $__internal_248a6d652a2e0cfb79f265a2c8c6c15816c000c847bf2bd694c40e6306f09705 = $this->env->getExtension("native_profiler");
        $__internal_248a6d652a2e0cfb79f265a2c8c6c15816c000c847bf2bd694c40e6306f09705->enter($__internal_248a6d652a2e0cfb79f265a2c8c6c15816c000c847bf2bd694c40e6306f09705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248a6d652a2e0cfb79f265a2c8c6c15816c000c847bf2bd694c40e6306f09705->leave($__internal_248a6d652a2e0cfb79f265a2c8c6c15816c000c847bf2bd694c40e6306f09705_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff67b9c9ae544ef48da9d582442953eb15eec85e4d27563ec4dd32e3d80bf12d = $this->env->getExtension("native_profiler");
        $__internal_ff67b9c9ae544ef48da9d582442953eb15eec85e4d27563ec4dd32e3d80bf12d->enter($__internal_ff67b9c9ae544ef48da9d582442953eb15eec85e4d27563ec4dd32e3d80bf12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Article
";
        
        $__internal_ff67b9c9ae544ef48da9d582442953eb15eec85e4d27563ec4dd32e3d80bf12d->leave($__internal_ff67b9c9ae544ef48da9d582442953eb15eec85e4d27563ec4dd32e3d80bf12d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5f83ff3b802ff9dda7aaa5784d4df159dac44409faf7e0efefbce0a91b00535 = $this->env->getExtension("native_profiler");
        $__internal_b5f83ff3b802ff9dda7aaa5784d4df159dac44409faf7e0efefbce0a91b00535->enter($__internal_b5f83ff3b802ff9dda7aaa5784d4df159dac44409faf7e0efefbce0a91b00535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:220px; width:2000px;\">
<h3 ><span class=\"glyphicon glyphicon-share-alt\"></span> ";
        // line 18
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
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ref", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Code de l'Article :</strong>  ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Catégorie :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "libele", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Code de la Catégorie :</strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "code", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_b5f83ff3b802ff9dda7aaa5784d4df159dac44409faf7e0efefbce0a91b00535->leave($__internal_b5f83ff3b802ff9dda7aaa5784d4df159dac44409faf7e0efefbce0a91b00535_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1f92a54f0f0c7fc7ffa4160a5b0ed3078be356c722f167a40c21deabe5285ad = $this->env->getExtension("native_profiler");
        $__internal_c1f92a54f0f0c7fc7ffa4160a5b0ed3078be356c722f167a40c21deabe5285ad->enter($__internal_c1f92a54f0f0c7fc7ffa4160a5b0ed3078be356c722f167a40c21deabe5285ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });
    })(jQuery);
</script>
";
        
        $__internal_c1f92a54f0f0c7fc7ffa4160a5b0ed3078be356c722f167a40c21deabe5285ad->leave($__internal_c1f92a54f0f0c7fc7ffa4160a5b0ed3078be356c722f167a40c21deabe5285ad_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  120 => 40,  110 => 37,  106 => 36,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  73 => 18,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/*     <li><a href="{{ path('article_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
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
/* </div>*/
/* <form id="deleteForm" action="{{ path('article_delete', { 'id': entity.id }) }}" method="POST">*/
/*     {{ form_widget(delete_form) }}*/
/* </form> */
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*         $('#js-delete').on('click', function(){*/
/*             $('#deleteForm').submit();*/
/*             return false;*/
/*         });*/
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
