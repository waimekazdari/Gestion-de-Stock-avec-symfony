<?php

/* gestionStock/MesExpression_besoin/show.html.twig */
class __TwigTemplate_4611e3f70ce4dfde9e53743a0d3ac9c93acd5a92e01a9abc42b6bf04ed8307a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/MesExpression_besoin/show.html.twig", 1);
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
        $__internal_a02a8a467c83d41073f9d46a558eaaa37502269677d4285d9e387afc3dafc7d2 = $this->env->getExtension("native_profiler");
        $__internal_a02a8a467c83d41073f9d46a558eaaa37502269677d4285d9e387afc3dafc7d2->enter($__internal_a02a8a467c83d41073f9d46a558eaaa37502269677d4285d9e387afc3dafc7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/MesExpression_besoin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a02a8a467c83d41073f9d46a558eaaa37502269677d4285d9e387afc3dafc7d2->leave($__internal_a02a8a467c83d41073f9d46a558eaaa37502269677d4285d9e387afc3dafc7d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d143368349c224879d16425a84540b1806325e68eb952eb71da077006663a7ff = $this->env->getExtension("native_profiler");
        $__internal_d143368349c224879d16425a84540b1806325e68eb952eb71da077006663a7ff->enter($__internal_d143368349c224879d16425a84540b1806325e68eb952eb71da077006663a7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Besoins
";
        
        $__internal_d143368349c224879d16425a84540b1806325e68eb952eb71da077006663a7ff->leave($__internal_d143368349c224879d16425a84540b1806325e68eb952eb71da077006663a7ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32dbc198dee8e7688302caa0f8f92870e1ab6d33353d9a00f5d4a6c61bf8942b = $this->env->getExtension("native_profiler");
        $__internal_32dbc198dee8e7688302caa0f8f92870e1ab6d33353d9a00f5d4a6c61bf8942b->enter($__internal_32dbc198dee8e7688302caa0f8f92870e1ab6d33353d9a00f5d4a6c61bf8942b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<div style=\"margin-left:100px; margin-top:100px; width:2700px;\">

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Informations du Besoin </h4>
      </header>
        <ul class=\"list-group\">
         <li class=\"list-group-item\"><strong>Nom de l'Employe :</strong> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "nom", array()), "html", null, true);
        echo "</li>
         <li class=\"list-group-item\"><strong>La date d'Emission :</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEmission", array()), "d/m/y"), "html", null, true);
        echo "</li>
         <li class=\"list-group-item\"><strong>Accord :</strong>";
        // line 26
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
        // line 41
        $this->loadTemplate("gestionStock/MesExpression_besoin/formExpression.html.twig", "gestionStock/MesExpression_besoin/show.html.twig", 41)->display($context);
        // line 42
        echo "            </tbody>
      </table>
        </ul>
    </div>
</div>
</div>
</div>
";
        
        $__internal_32dbc198dee8e7688302caa0f8f92870e1ab6d33353d9a00f5d4a6c61bf8942b->leave($__internal_32dbc198dee8e7688302caa0f8f92870e1ab6d33353d9a00f5d4a6c61bf8942b_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f2136cbf4000c685c487086877f37ff86f877edf741bd63a296a4eac365caa5 = $this->env->getExtension("native_profiler");
        $__internal_4f2136cbf4000c685c487086877f37ff86f877edf741bd63a296a4eac365caa5->enter($__internal_4f2136cbf4000c685c487086877f37ff86f877edf741bd63a296a4eac365caa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

            })(jQuery);
</script>
";
        
        $__internal_4f2136cbf4000c685c487086877f37ff86f877edf741bd63a296a4eac365caa5->leave($__internal_4f2136cbf4000c685c487086877f37ff86f877edf741bd63a296a4eac365caa5_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/MesExpression_besoin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  122 => 50,  108 => 42,  106 => 41,  84 => 26,  80 => 25,  76 => 24,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/*         {% include "gestionStock/MesExpression_besoin/formExpression.html.twig"%}*/
/*             </tbody>*/
/*       </table>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*             })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
