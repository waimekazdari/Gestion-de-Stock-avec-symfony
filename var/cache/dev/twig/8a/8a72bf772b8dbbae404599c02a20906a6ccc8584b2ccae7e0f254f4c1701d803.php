<?php

/* gestionStock/Ar_sortie/show.html.twig */
class __TwigTemplate_4cb3e1af78b194f5ab9a4597785f62bbd86443045a97f69ca8e5c471afba868d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_sortie/show.html.twig", 1);
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
        $__internal_35a4e9c5a5da45452986bfbe28f234637b7320a72334ab051f0abaa939a77728 = $this->env->getExtension("native_profiler");
        $__internal_35a4e9c5a5da45452986bfbe28f234637b7320a72334ab051f0abaa939a77728->enter($__internal_35a4e9c5a5da45452986bfbe28f234637b7320a72334ab051f0abaa939a77728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_sortie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35a4e9c5a5da45452986bfbe28f234637b7320a72334ab051f0abaa939a77728->leave($__internal_35a4e9c5a5da45452986bfbe28f234637b7320a72334ab051f0abaa939a77728_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f710ea105aec5175acf50caa2a430d11f965abdb318d86df032ede215221fd = $this->env->getExtension("native_profiler");
        $__internal_93f710ea105aec5175acf50caa2a430d11f965abdb318d86df032ede215221fd->enter($__internal_93f710ea105aec5175acf50caa2a430d11f965abdb318d86df032ede215221fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Sortie Article
";
        
        $__internal_93f710ea105aec5175acf50caa2a430d11f965abdb318d86df032ede215221fd->leave($__internal_93f710ea105aec5175acf50caa2a430d11f965abdb318d86df032ede215221fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_609a8b977b5e7ee4d740b9ae89bb9a4bea4d6013769bff41e637aadfa53ce789 = $this->env->getExtension("native_profiler");
        $__internal_609a8b977b5e7ee4d740b9ae89bb9a4bea4d6013769bff41e637aadfa53ce789->enter($__internal_609a8b977b5e7ee4d740b9ae89bb9a4bea4d6013769bff41e637aadfa53ce789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_sortie_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
          <h4><span class=\"glyphicon glyphicon-file\"></span> Sortie d'Article </h4>
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
          <li class=\"list-group-item\"><strong>Identifiant de la Sortie :</strong>  ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sortie", array()), "IdSortie", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Quantite :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>La Date de la Sortie  :</strong>  ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sortie", array()), "date", array())), "html", null, true);
        echo " </li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_sortie_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_609a8b977b5e7ee4d740b9ae89bb9a4bea4d6013769bff41e637aadfa53ce789->leave($__internal_609a8b977b5e7ee4d740b9ae89bb9a4bea4d6013769bff41e637aadfa53ce789_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f67cb3b95954bb9ff8ff40c8cd3e368fd10a813298cf8d90a0c8b4c1a05cf45a = $this->env->getExtension("native_profiler");
        $__internal_f67cb3b95954bb9ff8ff40c8cd3e368fd10a813298cf8d90a0c8b4c1a05cf45a->enter($__internal_f67cb3b95954bb9ff8ff40c8cd3e368fd10a813298cf8d90a0c8b4c1a05cf45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f67cb3b95954bb9ff8ff40c8cd3e368fd10a813298cf8d90a0c8b4c1a05cf45a->leave($__internal_f67cb3b95954bb9ff8ff40c8cd3e368fd10a813298cf8d90a0c8b4c1a05cf45a_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_sortie/show.html.twig";
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
/* Show Sortie Article*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('ar_sortie_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
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
/*           <h4><span class="glyphicon glyphicon-file"></span> Sortie d'Article </h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Référence de l'Article :</strong>  {{ entity.article.ref }} </li>*/
/*           <li class="list-group-item"><strong>Nom de l'Article :</strong>  {{ entity.article.libele }} </li>*/
/*           <li class="list-group-item"><strong>Identifiant de la Sortie :</strong>  {{ entity.sortie.IdSortie }} </li>*/
/*           <li class="list-group-item"><strong>Quantite :</strong> {{ entity.quantite }}</li>*/
/*           <li class="list-group-item"><strong>La Date de la Sortie  :</strong>  {{ entity.sortie.date|date }} </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('ar_sortie_delete', { 'id': entity.id }) }}" method="POST">*/
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
