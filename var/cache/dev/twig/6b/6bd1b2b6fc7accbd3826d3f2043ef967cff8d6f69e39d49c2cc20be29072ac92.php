<?php

/* gestionStock/Ligne/show.html.twig */
class __TwigTemplate_ebd8912655d1895656b092be52fa8fdd47e9517b3b43328a8608631063bf753b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ligne/show.html.twig", 1);
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
        $__internal_1a08cfb40146891cfd5e2c3dfc8b001ff9fa2b4e4e4e10f7143c249cce8fdee7 = $this->env->getExtension("native_profiler");
        $__internal_1a08cfb40146891cfd5e2c3dfc8b001ff9fa2b4e4e4e10f7143c249cce8fdee7->enter($__internal_1a08cfb40146891cfd5e2c3dfc8b001ff9fa2b4e4e4e10f7143c249cce8fdee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ligne/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a08cfb40146891cfd5e2c3dfc8b001ff9fa2b4e4e4e10f7143c249cce8fdee7->leave($__internal_1a08cfb40146891cfd5e2c3dfc8b001ff9fa2b4e4e4e10f7143c249cce8fdee7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b00e7cdcfc1ad26248c0acb6698ad8ad8656a575f8746e3b17495d892b123f2 = $this->env->getExtension("native_profiler");
        $__internal_1b00e7cdcfc1ad26248c0acb6698ad8ad8656a575f8746e3b17495d892b123f2->enter($__internal_1b00e7cdcfc1ad26248c0acb6698ad8ad8656a575f8746e3b17495d892b123f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Ligne
";
        
        $__internal_1b00e7cdcfc1ad26248c0acb6698ad8ad8656a575f8746e3b17495d892b123f2->leave($__internal_1b00e7cdcfc1ad26248c0acb6698ad8ad8656a575f8746e3b17495d892b123f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca445ac6767b429af3d516bd9a8c7bd92b0c278cd84473bdae4a8dd960a69e7 = $this->env->getExtension("native_profiler");
        $__internal_9ca445ac6767b429af3d516bd9a8c7bd92b0c278cd84473bdae4a8dd960a69e7->enter($__internal_9ca445ac6767b429af3d516bd9a8c7bd92b0c278cd84473bdae4a8dd960a69e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ligne_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:220px; margin-top:100px; width:2000px;\">

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Ligne</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Référence de la Livraison :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "livraison", array()), "refMarche", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Référence de l'Article :</strong>  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "article", array()), "ref", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Quantite :</strong> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>prix :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>prix :</strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duree", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>prix :</strong> ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateGarantie", array())), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ligne_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_9ca445ac6767b429af3d516bd9a8c7bd92b0c278cd84473bdae4a8dd960a69e7->leave($__internal_9ca445ac6767b429af3d516bd9a8c7bd92b0c278cd84473bdae4a8dd960a69e7_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06826159a613557522daabafa5ec8e8d2f65e4fbb5f95d0c0f895955b4471615 = $this->env->getExtension("native_profiler");
        $__internal_06826159a613557522daabafa5ec8e8d2f65e4fbb5f95d0c0f895955b4471615->enter($__internal_06826159a613557522daabafa5ec8e8d2f65e4fbb5f95d0c0f895955b4471615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
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
        
        $__internal_06826159a613557522daabafa5ec8e8d2f65e4fbb5f95d0c0f895955b4471615->leave($__internal_06826159a613557522daabafa5ec8e8d2f65e4fbb5f95d0c0f895955b4471615_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ligne/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  124 => 41,  114 => 38,  110 => 37,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Ligne*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('ligne_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:220px; margin-top:100px; width:2000px;">*/
/* */
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Ligne</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Référence de la Livraison :</strong> {{ entity.livraison.refMarche }}</li>*/
/*           <li class="list-group-item"><strong>Référence de l'Article :</strong>  {{ entity.article.ref }} </li>*/
/*           <li class="list-group-item"><strong>Quantite :</strong> {{ entity.quantite }}</li>*/
/*           <li class="list-group-item"><strong>prix :</strong> {{ entity.prix }}</li>*/
/*           <li class="list-group-item"><strong>prix :</strong> {{ entity.duree }}</li>*/
/*           <li class="list-group-item"><strong>prix :</strong> {{ entity.dateGarantie|date }}</li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('ligne_delete', { 'id': entity.id }) }}" method="POST">*/
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
