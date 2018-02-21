<?php

/* gestionStock/Expression_besoin/show.html.twig */
class __TwigTemplate_4a23a2138501bc7f47a854b29a6dd5b37044bb890ed133f0588e388ec4a616ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Expression_besoin/show.html.twig", 1);
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
        $__internal_cb3231fa2e51cf97124ab3d7f7c0301249b2083b9f8a49d499d08f99c070b609 = $this->env->getExtension("native_profiler");
        $__internal_cb3231fa2e51cf97124ab3d7f7c0301249b2083b9f8a49d499d08f99c070b609->enter($__internal_cb3231fa2e51cf97124ab3d7f7c0301249b2083b9f8a49d499d08f99c070b609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3231fa2e51cf97124ab3d7f7c0301249b2083b9f8a49d499d08f99c070b609->leave($__internal_cb3231fa2e51cf97124ab3d7f7c0301249b2083b9f8a49d499d08f99c070b609_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c651de7207e50ddc8dbf17c472f0c057dfe25fa7ae5ab7dd8039cba8438ebf65 = $this->env->getExtension("native_profiler");
        $__internal_c651de7207e50ddc8dbf17c472f0c057dfe25fa7ae5ab7dd8039cba8438ebf65->enter($__internal_c651de7207e50ddc8dbf17c472f0c057dfe25fa7ae5ab7dd8039cba8438ebf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Besoins
";
        
        $__internal_c651de7207e50ddc8dbf17c472f0c057dfe25fa7ae5ab7dd8039cba8438ebf65->leave($__internal_c651de7207e50ddc8dbf17c472f0c057dfe25fa7ae5ab7dd8039cba8438ebf65_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1dcbbd0cb549f9efb76657edb2de81928cc156b867e9058c0b712eeeb7bf881 = $this->env->getExtension("native_profiler");
        $__internal_d1dcbbd0cb549f9efb76657edb2de81928cc156b867e9058c0b712eeeb7bf881->enter($__internal_d1dcbbd0cb549f9efb76657edb2de81928cc156b867e9058c0b712eeeb7bf881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:100px; margin-top:100px; width:2700px;\">

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Informations du Besoin </h4>
      </header>
        <ul class=\"list-group\">
         <li class=\"list-group-item\"><strong>Nom de l'Employe :</strong> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "nom", array()), "html", null, true);
        echo "</li>
         <li class=\"list-group-item\"><strong>La date d'Emission :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEmission", array()), "d/m/y"), "html", null, true);
        echo "</li>
         <li class=\"list-group-item\"><strong>Accord :</strong>";
        // line 27
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "accord", array()) == 0)) {
            echo " Non ";
        } else {
            echo " Oui ";
        }
        echo "</li>
          <br/>
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Informations sur Les Articles du Besoin</h4>
      </header>
      <ul class=\"list-group\">
      <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th>Nom Article</th>
                <th>Référence Article</th>
                <th>Quantite</th>
            </tr>
            </thead>
            <tbody>
        ";
        // line 42
        $this->loadTemplate("gestionStock/Expression_besoin/formExpression.html.twig", "gestionStock/Expression_besoin/show.html.twig", 42)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expression_besoin_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_d1dcbbd0cb549f9efb76657edb2de81928cc156b867e9058c0b712eeeb7bf881->leave($__internal_d1dcbbd0cb549f9efb76657edb2de81928cc156b867e9058c0b712eeeb7bf881_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a796b92ee50b15dc95056d01df47226f91bf9f4856e21981f34762a081e7083 = $this->env->getExtension("native_profiler");
        $__internal_7a796b92ee50b15dc95056d01df47226f91bf9f4856e21981f34762a081e7083->enter($__internal_7a796b92ee50b15dc95056d01df47226f91bf9f4856e21981f34762a081e7083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7a796b92ee50b15dc95056d01df47226f91bf9f4856e21981f34762a081e7083->leave($__internal_7a796b92ee50b15dc95056d01df47226f91bf9f4856e21981f34762a081e7083_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 55,  132 => 54,  122 => 51,  118 => 50,  109 => 43,  107 => 42,  85 => 27,  81 => 26,  77 => 25,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Besoins*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
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
/*           <h4><span class="glyphicon glyphicon-file"></span>Informations du Besoin </h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*          <li class="list-group-item"><strong>Nom de l'Employe :</strong> {{ entity.employe.nom }}</li>*/
/*          <li class="list-group-item"><strong>La date d'Emission :</strong> {{ entity.dateEmission|date("d/m/y") }}</li>*/
/*          <li class="list-group-item"><strong>Accord :</strong>{% if entity.accord == 0 %} Non {% else %} Oui {% endif%}</li>*/
/*           <br/>*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span>Informations sur Les Articles du Besoin</h4>*/
/*       </header>*/
/*       <ul class="list-group">*/
/*       <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Nom Article</th>*/
/*                 <th>Référence Article</th>*/
/*                 <th>Quantite</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*         {% include "gestionStock/Expression_besoin/formExpression.html.twig"%}*/
/*             </tbody>*/
/*       </table>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('expression_besoin_delete', { 'id': entity.id }) }}" method="POST">*/
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
