<?php

/* gestionStock/Sortie/show.html.twig */
class __TwigTemplate_4d94651e944f3506f6e1fcede4303527009d150e2afc8ce2717bce3aafcd1ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Sortie/show.html.twig", 1);
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
        $__internal_a9d5520f9af799775bd3a462e021f46777aa4216e6f1c746950cb4786bdf1903 = $this->env->getExtension("native_profiler");
        $__internal_a9d5520f9af799775bd3a462e021f46777aa4216e6f1c746950cb4786bdf1903->enter($__internal_a9d5520f9af799775bd3a462e021f46777aa4216e6f1c746950cb4786bdf1903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Sortie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d5520f9af799775bd3a462e021f46777aa4216e6f1c746950cb4786bdf1903->leave($__internal_a9d5520f9af799775bd3a462e021f46777aa4216e6f1c746950cb4786bdf1903_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdcb118d06f47dd67d27bdacb03f908a2a1d6e38b565370f099f80021b60cf24 = $this->env->getExtension("native_profiler");
        $__internal_cdcb118d06f47dd67d27bdacb03f908a2a1d6e38b565370f099f80021b60cf24->enter($__internal_cdcb118d06f47dd67d27bdacb03f908a2a1d6e38b565370f099f80021b60cf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Sortie
";
        
        $__internal_cdcb118d06f47dd67d27bdacb03f908a2a1d6e38b565370f099f80021b60cf24->leave($__internal_cdcb118d06f47dd67d27bdacb03f908a2a1d6e38b565370f099f80021b60cf24_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d971271f4b19bf2157cf36de055fc18ed8806b1138f436de1dc8e0bf198766c = $this->env->getExtension("native_profiler");
        $__internal_5d971271f4b19bf2157cf36de055fc18ed8806b1138f436de1dc8e0bf198766c->enter($__internal_5d971271f4b19bf2157cf36de055fc18ed8806b1138f436de1dc8e0bf198766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sortie_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
          <h4><span class=\"glyphicon glyphicon-file\"></span>Informations de la Sortie</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>La Référence de la Sortie :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "IdSortie", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>La date de la Sortie :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d/m/y"), "html", null, true);
        echo "</li>
          <br/>
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Les Articles</h4>
      </header>
      <ul class=\"list-group\">
      <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th>Nom Article</th>
                <th>Référence de l'Article</th>
                <th>Quantite</th>
            </tr>
            </thead>
            <tbody>
        ";
        // line 42
        $this->loadTemplate("gestionStock/Sortie/formAr_sortie.html.twig", "gestionStock/Sortie/show.html.twig", 42)->display($context);
        // line 43
        echo "            </tbody>
      </table>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sortie_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_5d971271f4b19bf2157cf36de055fc18ed8806b1138f436de1dc8e0bf198766c->leave($__internal_5d971271f4b19bf2157cf36de055fc18ed8806b1138f436de1dc8e0bf198766c_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa564e8a5d4dd4cee27c3f0d2d894be77865b8c8bd80eaa86a9e3ebab31386eb = $this->env->getExtension("native_profiler");
        $__internal_aa564e8a5d4dd4cee27c3f0d2d894be77865b8c8bd80eaa86a9e3ebab31386eb->enter($__internal_aa564e8a5d4dd4cee27c3f0d2d894be77865b8c8bd80eaa86a9e3ebab31386eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
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
        
        $__internal_aa564e8a5d4dd4cee27c3f0d2d894be77865b8c8bd80eaa86a9e3ebab31386eb->leave($__internal_aa564e8a5d4dd4cee27c3f0d2d894be77865b8c8bd80eaa86a9e3ebab31386eb_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Sortie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 55,  128 => 54,  118 => 51,  114 => 50,  105 => 43,  103 => 42,  85 => 27,  81 => 26,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Sortie*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('sortie_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
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
/*           <h4><span class="glyphicon glyphicon-file"></span>Informations de la Sortie</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>La Référence de la Sortie :</strong> {{ entity.IdSortie }}</li>*/
/*           <li class="list-group-item"><strong>La date de la Sortie :</strong> {{ entity.date|date("d/m/y")}}</li>*/
/*           <br/>*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span>Les Articles</h4>*/
/*       </header>*/
/*       <ul class="list-group">*/
/*       <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Nom Article</th>*/
/*                 <th>Référence de l'Article</th>*/
/*                 <th>Quantite</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*         {% include "gestionStock/Sortie/formAr_sortie.html.twig"%}*/
/*             </tbody>*/
/*       </table>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('sortie_delete', { 'id': entity.id }) }}" method="POST">*/
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
