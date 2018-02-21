<?php

/* gestionStock/Livraison/show.html.twig */
class __TwigTemplate_6774e1191e25adec999b47c275ea1f95f74db5e58caaea5b683001fe31d931c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Livraison/show.html.twig", 1);
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
        $__internal_60d713d8cb31a5075124e6778ef7580f2038711f6e6d512d47c98f67a0481357 = $this->env->getExtension("native_profiler");
        $__internal_60d713d8cb31a5075124e6778ef7580f2038711f6e6d512d47c98f67a0481357->enter($__internal_60d713d8cb31a5075124e6778ef7580f2038711f6e6d512d47c98f67a0481357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Livraison/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d713d8cb31a5075124e6778ef7580f2038711f6e6d512d47c98f67a0481357->leave($__internal_60d713d8cb31a5075124e6778ef7580f2038711f6e6d512d47c98f67a0481357_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca45de8dac89a45c52c6ca38c849b29181c91611f45a4f9f9c9f8fb5c851f68 = $this->env->getExtension("native_profiler");
        $__internal_bca45de8dac89a45c52c6ca38c849b29181c91611f45a4f9f9c9f8fb5c851f68->enter($__internal_bca45de8dac89a45c52c6ca38c849b29181c91611f45a4f9f9c9f8fb5c851f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Livraison
";
        
        $__internal_bca45de8dac89a45c52c6ca38c849b29181c91611f45a4f9f9c9f8fb5c851f68->leave($__internal_bca45de8dac89a45c52c6ca38c849b29181c91611f45a4f9f9c9f8fb5c851f68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_406001b1ea73a31394143139c8aa099c1aeb60cd74bd60654f546a910979695c = $this->env->getExtension("native_profiler");
        $__internal_406001b1ea73a31394143139c8aa099c1aeb60cd74bd60654f546a910979695c->enter($__internal_406001b1ea73a31394143139c8aa099c1aeb60cd74bd60654f546a910979695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraison_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:100px; margin-top:100px; width:2700px;\">

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Informations de la Livraison</h4>
      </header>
        <ul class=\"list-group\">
         <li class=\"list-group-item\"><strong>Référence de la Livraison :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "refMarche", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Fournisseur de la Livraison :</strong>  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fournisseur", array()), "nom", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>La date de la Livraison :</strong> ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d/m/y"), "html", null, true);
        echo "</li>
          <br/>
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Informations sur La ligne de la Livraison</h4>
      </header>
      <ul class=\"list-group\">
      <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th>Nom Article</th>
                <th>Référence Article</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Duree</th>
                <th>Date garantie</th>
            </tr>
            </thead>
            <tbody>
        ";
        // line 46
        $this->loadTemplate("gestionStock/Livraison/formLigne.html.twig", "gestionStock/Livraison/show.html.twig", 46)->display($context);
        // line 47
        echo "            </tbody>
      </table>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraison_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_406001b1ea73a31394143139c8aa099c1aeb60cd74bd60654f546a910979695c->leave($__internal_406001b1ea73a31394143139c8aa099c1aeb60cd74bd60654f546a910979695c_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9d081fd09f1482cba8b6a5c845b57fa16357add63cc57602e3e868060c28181 = $this->env->getExtension("native_profiler");
        $__internal_a9d081fd09f1482cba8b6a5c845b57fa16357add63cc57602e3e868060c28181->enter($__internal_a9d081fd09f1482cba8b6a5c845b57fa16357add63cc57602e3e868060c28181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
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
        
        $__internal_a9d081fd09f1482cba8b6a5c845b57fa16357add63cc57602e3e868060c28181->leave($__internal_a9d081fd09f1482cba8b6a5c845b57fa16357add63cc57602e3e868060c28181_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Livraison/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 59,  135 => 58,  125 => 55,  121 => 54,  112 => 47,  110 => 46,  89 => 28,  85 => 27,  81 => 26,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Livraison*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('livraison_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:100px; margin-top:100px; width:2700px;">*/
/* */
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span>Informations de la Livraison</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*          <li class="list-group-item"><strong>Référence de la Livraison :</strong> {{ entity.refMarche }}</li>*/
/*           <li class="list-group-item"><strong>Fournisseur de la Livraison :</strong>  {{ entity.fournisseur.nom }} </li>*/
/*           <li class="list-group-item"><strong>La date de la Livraison :</strong> {{ entity.date|date("d/m/y") }}</li>*/
/*           <br/>*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span>Informations sur La ligne de la Livraison</h4>*/
/*       </header>*/
/*       <ul class="list-group">*/
/*       <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Nom Article</th>*/
/*                 <th>Référence Article</th>*/
/*                 <th>Quantite</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Duree</th>*/
/*                 <th>Date garantie</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*         {% include "gestionStock/Livraison/formLigne.html.twig"%}*/
/*             </tbody>*/
/*       </table>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('livraison_delete', { 'id': entity.id }) }}" method="POST">*/
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
