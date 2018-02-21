<?php

/* gestionStock/Category/edit.html.twig */
class __TwigTemplate_a79153a6084e93aed4d260d7ce53546f438f12b9bef819c64e79c944f1d74687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Category/edit.html.twig", 1);
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
        $__internal_4e0093683d479d57252383b36def64ddad675f8dc27a7de8d88675dca029cf86 = $this->env->getExtension("native_profiler");
        $__internal_4e0093683d479d57252383b36def64ddad675f8dc27a7de8d88675dca029cf86->enter($__internal_4e0093683d479d57252383b36def64ddad675f8dc27a7de8d88675dca029cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0093683d479d57252383b36def64ddad675f8dc27a7de8d88675dca029cf86->leave($__internal_4e0093683d479d57252383b36def64ddad675f8dc27a7de8d88675dca029cf86_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_af888f44b576ac3c1fa402f24731d33a741ff87d97d46ac7df37475dbca3f18f = $this->env->getExtension("native_profiler");
        $__internal_af888f44b576ac3c1fa402f24731d33a741ff87d97d46ac7df37475dbca3f18f->enter($__internal_af888f44b576ac3c1fa402f24731d33a741ff87d97d46ac7df37475dbca3f18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Catégorie
";
        
        $__internal_af888f44b576ac3c1fa402f24731d33a741ff87d97d46ac7df37475dbca3f18f->leave($__internal_af888f44b576ac3c1fa402f24731d33a741ff87d97d46ac7df37475dbca3f18f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bd3572428e82e7e73e58c5d3e3999b05ea6250424b0a51c39a548427737a305 = $this->env->getExtension("native_profiler");
        $__internal_2bd3572428e82e7e73e58c5d3e3999b05ea6250424b0a51c39a548427737a305->enter($__internal_2bd3572428e82e7e73e58c5d3e3999b05ea6250424b0a51c39a548427737a305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'une Catégorie </h3>
<form  style=\"margin-left:200px\"; action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Category/form.html.twig", "gestionStock/Category/edit.html.twig", 9)->display($context);
        // line 10
        echo "</br>
    <div class=\"form-group\" style =\"margin-left:-300px\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type='submit' class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span> Mettre à jour</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a>
      </div>
    </div>
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>
<form id=\"deleteForm\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_2bd3572428e82e7e73e58c5d3e3999b05ea6250424b0a51c39a548427737a305->leave($__internal_2bd3572428e82e7e73e58c5d3e3999b05ea6250424b0a51c39a548427737a305_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_329f88f4b69cd2eba95236c601181ebbf430717803839c5017942c5bf8bcd429 = $this->env->getExtension("native_profiler");
        $__internal_329f88f4b69cd2eba95236c601181ebbf430717803839c5017942c5bf8bcd429->enter($__internal_329f88f4b69cd2eba95236c601181ebbf430717803839c5017942c5bf8bcd429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
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
        
        $__internal_329f88f4b69cd2eba95236c601181ebbf430717803839c5017942c5bf8bcd429->leave($__internal_329f88f4b69cd2eba95236c601181ebbf430717803839c5017942c5bf8bcd429_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  95 => 25,  84 => 20,  80 => 19,  75 => 17,  66 => 10,  64 => 9,  60 => 8,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Modifier Catégorie*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'une Catégorie </h3>*/
/* <form  style="margin-left:200px"; action="{{ path('category_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Category/form.html.twig" %}*/
/* </br>*/
/*     <div class="form-group" style ="margin-left:-300px">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('category_delete',{'id': entity.id}) }}" method="post" class="">*/
/*    <!-- {{ form_widget(delete_form) }} -->*/
/* </form> */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/*         */
/*         $('#js-delete').on('click', function(){*/
/*             $('#deleteForm').submit();*/
/*             return false;*/
/*         });*/
/* */
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
