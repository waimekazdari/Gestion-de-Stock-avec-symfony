<?php

/* gestionStock/Fournisseur/show.html.twig */
class __TwigTemplate_2a3668d32eeedd5ff12e4a99f42422b5f562c669ccbaeb1dc79713f5b2a06422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Fournisseur/show.html.twig", 1);
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
        $__internal_9ed1af6c2a4d050f6199174320ecbe68da399ec65ffc3d56fe84609047c7a322 = $this->env->getExtension("native_profiler");
        $__internal_9ed1af6c2a4d050f6199174320ecbe68da399ec65ffc3d56fe84609047c7a322->enter($__internal_9ed1af6c2a4d050f6199174320ecbe68da399ec65ffc3d56fe84609047c7a322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Fournisseur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed1af6c2a4d050f6199174320ecbe68da399ec65ffc3d56fe84609047c7a322->leave($__internal_9ed1af6c2a4d050f6199174320ecbe68da399ec65ffc3d56fe84609047c7a322_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b19906fea92e20ac6ac2ab4823d9c93453256815273651e64c7dc43a7a789186 = $this->env->getExtension("native_profiler");
        $__internal_b19906fea92e20ac6ac2ab4823d9c93453256815273651e64c7dc43a7a789186->enter($__internal_b19906fea92e20ac6ac2ab4823d9c93453256815273651e64c7dc43a7a789186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "show Fournisseur
";
        
        $__internal_b19906fea92e20ac6ac2ab4823d9c93453256815273651e64c7dc43a7a789186->leave($__internal_b19906fea92e20ac6ac2ab4823d9c93453256815273651e64c7dc43a7a789186_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_673a511ae9fb8b583fb6e1c34511ff4ec5d52a494ef854e4f13cf2d0a351bf49 = $this->env->getExtension("native_profiler");
        $__internal_673a511ae9fb8b583fb6e1c34511ff4ec5d52a494ef854e4f13cf2d0a351bf49->enter($__internal_673a511ae9fb8b583fb6e1c34511ff4ec5d52a494ef854e4f13cf2d0a351bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fournisseur_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:220px; width:2000px;\">
<h3 ><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</h3>

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Fournisseur</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>CIN du Fournisseur :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "CIN", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Ville du Fournisseur :</strong>  ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Pays fu Fournisseur :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Email du Founisseur :</strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Tél du Founisseur :</strong> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Adresse du Founisseur :</strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fournisseur_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_673a511ae9fb8b583fb6e1c34511ff4ec5d52a494ef854e4f13cf2d0a351bf49->leave($__internal_673a511ae9fb8b583fb6e1c34511ff4ec5d52a494ef854e4f13cf2d0a351bf49_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e610f08c5861f9ab6d2a8f0e9902f97f6e1d5d3c6c24ac56d632584b9a28e77 = $this->env->getExtension("native_profiler");
        $__internal_2e610f08c5861f9ab6d2a8f0e9902f97f6e1d5d3c6c24ac56d632584b9a28e77->enter($__internal_2e610f08c5861f9ab6d2a8f0e9902f97f6e1d5d3c6c24ac56d632584b9a28e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
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
        
        $__internal_2e610f08c5861f9ab6d2a8f0e9902f97f6e1d5d3c6c24ac56d632584b9a28e77->leave($__internal_2e610f08c5861f9ab6d2a8f0e9902f97f6e1d5d3c6c24ac56d632584b9a28e77_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Fournisseur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 43,  128 => 42,  118 => 39,  114 => 38,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  73 => 18,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* show Fournisseur*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('fournisseur_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:220px; width:2000px;">*/
/* <h3 ><span class="glyphicon glyphicon-user"></span> {{ entity.nom }}</h3>*/
/* */
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Fournisseur</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>CIN du Fournisseur :</strong> {{ entity.CIN }}</li>*/
/*           <li class="list-group-item"><strong>Ville du Fournisseur :</strong>  {{ entity.ville }} </li>*/
/*           <li class="list-group-item"><strong>Pays fu Fournisseur :</strong> {{ entity.pays }}</li>*/
/*           <li class="list-group-item"><strong>Email du Founisseur :</strong> {{ entity.email }}</li>*/
/*           <li class="list-group-item"><strong>Tél du Founisseur :</strong> {{ entity.tel}}</li>*/
/*           <li class="list-group-item"><strong>Adresse du Founisseur :</strong> {{ entity.adresse }}</li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('fournisseur_delete', { 'id': entity.id }) }}" method="POST">*/
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
