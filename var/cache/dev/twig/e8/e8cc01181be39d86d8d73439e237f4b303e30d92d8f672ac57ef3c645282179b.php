<?php

/* gestionStock/Service/show.html.twig */
class __TwigTemplate_596f98078af99c09a01686eaecac6fdecfaae9d34f41cb548d6b128ea02b6c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Service/show.html.twig", 1);
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
        $__internal_37403e3b90162744eaca4a40e3041350bb7c8b5d4826da30beb5bdc65af9487d = $this->env->getExtension("native_profiler");
        $__internal_37403e3b90162744eaca4a40e3041350bb7c8b5d4826da30beb5bdc65af9487d->enter($__internal_37403e3b90162744eaca4a40e3041350bb7c8b5d4826da30beb5bdc65af9487d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Service/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37403e3b90162744eaca4a40e3041350bb7c8b5d4826da30beb5bdc65af9487d->leave($__internal_37403e3b90162744eaca4a40e3041350bb7c8b5d4826da30beb5bdc65af9487d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a82fcd34fc570d2ebcbbb2b290d67340d41f3083a7f1388487abf5cbc7011547 = $this->env->getExtension("native_profiler");
        $__internal_a82fcd34fc570d2ebcbbb2b290d67340d41f3083a7f1388487abf5cbc7011547->enter($__internal_a82fcd34fc570d2ebcbbb2b290d67340d41f3083a7f1388487abf5cbc7011547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Service
";
        
        $__internal_a82fcd34fc570d2ebcbbb2b290d67340d41f3083a7f1388487abf5cbc7011547->leave($__internal_a82fcd34fc570d2ebcbbb2b290d67340d41f3083a7f1388487abf5cbc7011547_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d5bd15ddb4e7d69756430788d0eb6c55811cbbf56f5d662abaf4a01dbd00329 = $this->env->getExtension("native_profiler");
        $__internal_0d5bd15ddb4e7d69756430788d0eb6c55811cbbf56f5d662abaf4a01dbd00329->enter($__internal_0d5bd15ddb4e7d69756430788d0eb6c55811cbbf56f5d662abaf4a01dbd00329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:220px; width:2000px;\">
<br/><br/>
<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Service</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom du Service :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libele", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Catégorie :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "departement", array()), "libele", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_0d5bd15ddb4e7d69756430788d0eb6c55811cbbf56f5d662abaf4a01dbd00329->leave($__internal_0d5bd15ddb4e7d69756430788d0eb6c55811cbbf56f5d662abaf4a01dbd00329_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e67ceca27e4fba840919c15ccd6743e63b7028885b529a1d9213f75fad874d2 = $this->env->getExtension("native_profiler");
        $__internal_1e67ceca27e4fba840919c15ccd6743e63b7028885b529a1d9213f75fad874d2->enter($__internal_1e67ceca27e4fba840919c15ccd6743e63b7028885b529a1d9213f75fad874d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
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
        
        $__internal_1e67ceca27e4fba840919c15ccd6743e63b7028885b529a1d9213f75fad874d2->leave($__internal_1e67ceca27e4fba840919c15ccd6743e63b7028885b529a1d9213f75fad874d2_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Service/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  108 => 37,  98 => 34,  94 => 33,  85 => 27,  81 => 26,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Service*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('service_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:220px; width:2000px;">*/
/* <br/><br/>*/
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Service</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Nom du Service :</strong> {{ entity.libele }}</li>*/
/*           <li class="list-group-item"><strong>Catégorie :</strong> {{ entity.departement.libele }}</li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('service_delete', { 'id': entity.id }) }}" method="POST">*/
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
