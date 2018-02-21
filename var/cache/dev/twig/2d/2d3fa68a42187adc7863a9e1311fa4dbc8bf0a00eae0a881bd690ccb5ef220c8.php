<?php

/* gestionStock/Ar_entree/show.html.twig */
class __TwigTemplate_256b8291afd31be030d8cda23ba5498e27b6236b258ddd3f921cd77d3a501784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_entree/show.html.twig", 1);
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
        $__internal_6a95db98a01344eb5d3ba7a8434c570179a755a9533defd6a6b442438289aa19 = $this->env->getExtension("native_profiler");
        $__internal_6a95db98a01344eb5d3ba7a8434c570179a755a9533defd6a6b442438289aa19->enter($__internal_6a95db98a01344eb5d3ba7a8434c570179a755a9533defd6a6b442438289aa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_entree/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a95db98a01344eb5d3ba7a8434c570179a755a9533defd6a6b442438289aa19->leave($__internal_6a95db98a01344eb5d3ba7a8434c570179a755a9533defd6a6b442438289aa19_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_efd3b53d844904c5a38fd9729bd26ff374b0b07f21b6bed1b0511dd947be0f69 = $this->env->getExtension("native_profiler");
        $__internal_efd3b53d844904c5a38fd9729bd26ff374b0b07f21b6bed1b0511dd947be0f69->enter($__internal_efd3b53d844904c5a38fd9729bd26ff374b0b07f21b6bed1b0511dd947be0f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Entree Livraison
";
        
        $__internal_efd3b53d844904c5a38fd9729bd26ff374b0b07f21b6bed1b0511dd947be0f69->leave($__internal_efd3b53d844904c5a38fd9729bd26ff374b0b07f21b6bed1b0511dd947be0f69_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_715ca613ab8a484d6eb80bd1bbb41395a5dffc5d696206a75cd8d9e1714b5481 = $this->env->getExtension("native_profiler");
        $__internal_715ca613ab8a484d6eb80bd1bbb41395a5dffc5d696206a75cd8d9e1714b5481->enter($__internal_715ca613ab8a484d6eb80bd1bbb41395a5dffc5d696206a75cd8d9e1714b5481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
          <h4><span class=\"glyphicon glyphicon-file\"></span> Entree </h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Référence de l'Article :</strong>  ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "article", array()), "ref", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Nom de l'Article :</strong>  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "article", array()), "libele", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Référence de l'Entree :</strong>  ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "entree", array()), "ref", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Quantite :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>La Date de l'Entree :</strong>  ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "entree", array()), "date", array())), "html", null, true);
        echo " </li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_entree_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_715ca613ab8a484d6eb80bd1bbb41395a5dffc5d696206a75cd8d9e1714b5481->leave($__internal_715ca613ab8a484d6eb80bd1bbb41395a5dffc5d696206a75cd8d9e1714b5481_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b5b70a23d368d6eb94bbbac6f0c8750a07a6ee5205739313b8a0bbe03fd4a7b = $this->env->getExtension("native_profiler");
        $__internal_9b5b70a23d368d6eb94bbbac6f0c8750a07a6ee5205739313b8a0bbe03fd4a7b->enter($__internal_9b5b70a23d368d6eb94bbbac6f0c8750a07a6ee5205739313b8a0bbe03fd4a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9b5b70a23d368d6eb94bbbac6f0c8750a07a6ee5205739313b8a0bbe03fd4a7b->leave($__internal_9b5b70a23d368d6eb94bbbac6f0c8750a07a6ee5205739313b8a0bbe03fd4a7b_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_entree/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  120 => 40,  110 => 37,  106 => 36,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Entree Livraison*/
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
/*           <h4><span class="glyphicon glyphicon-file"></span> Entree </h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Référence de l'Article :</strong>  {{ entity.article.ref }} </li>*/
/*           <li class="list-group-item"><strong>Nom de l'Article :</strong>  {{ entity.article.libele }} </li>*/
/*           <li class="list-group-item"><strong>Référence de l'Entree :</strong>  {{ entity.entree.ref }} </li>*/
/*           <li class="list-group-item"><strong>Quantite :</strong> {{ entity.quantite }}</li>*/
/*           <li class="list-group-item"><strong>La Date de l'Entree :</strong>  {{ entity.entree.date|date }} </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('ar_entree_delete', { 'id': entity.id }) }}" method="POST">*/
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
