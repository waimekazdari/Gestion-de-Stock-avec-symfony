<?php

/* gestionStock/Expression_besoin/edit.html.twig */
class __TwigTemplate_047c441cfd736215791ead9ee913ced1c212717ee6e7c4de2a26a72a694939cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Expression_besoin/edit.html.twig", 1);
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
        $__internal_b37280aafd55dec637a3755edadbe61c0ebdbde71011df0ce718d2636184d119 = $this->env->getExtension("native_profiler");
        $__internal_b37280aafd55dec637a3755edadbe61c0ebdbde71011df0ce718d2636184d119->enter($__internal_b37280aafd55dec637a3755edadbe61c0ebdbde71011df0ce718d2636184d119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37280aafd55dec637a3755edadbe61c0ebdbde71011df0ce718d2636184d119->leave($__internal_b37280aafd55dec637a3755edadbe61c0ebdbde71011df0ce718d2636184d119_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7e6693ade8c0420043a1910f3d46cb5ae95af978e61ed5d49df45a486ed913f = $this->env->getExtension("native_profiler");
        $__internal_a7e6693ade8c0420043a1910f3d46cb5ae95af978e61ed5d49df45a486ed913f->enter($__internal_a7e6693ade8c0420043a1910f3d46cb5ae95af978e61ed5d49df45a486ed913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier 
";
        
        $__internal_a7e6693ade8c0420043a1910f3d46cb5ae95af978e61ed5d49df45a486ed913f->leave($__internal_a7e6693ade8c0420043a1910f3d46cb5ae95af978e61ed5d49df45a486ed913f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56057a0f92ba998f4adac7a8953e9b17799919186f3acce70a20ba1abf68c3af = $this->env->getExtension("native_profiler");
        $__internal_56057a0f92ba998f4adac7a8953e9b17799919186f3acce70a20ba1abf68c3af->enter($__internal_56057a0f92ba998f4adac7a8953e9b17799919186f3acce70a20ba1abf68c3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'une Livraison </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expression_besoin_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Expression_besoin/form.html.twig", "gestionStock/Expression_besoin/edit.html.twig", 9)->display($context);
        // line 10
        echo "    </br>
    <div class=\"form-group\" style=\"margin-left:-300px;\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type='submit' class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span> Mettre à jour</button>
        <a href=\"#\" id=\"js-delete\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a>
      </div>
    </div>
</form>
<form id=\"deleteForm\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expression_besoin_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_56057a0f92ba998f4adac7a8953e9b17799919186f3acce70a20ba1abf68c3af->leave($__internal_56057a0f92ba998f4adac7a8953e9b17799919186f3acce70a20ba1abf68c3af_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9161fb5e12090c4d1cfadbfd7d45de7a6169b84654cc40b3ad2e04473c434ae0 = $this->env->getExtension("native_profiler");
        $__internal_9161fb5e12090c4d1cfadbfd7d45de7a6169b84654cc40b3ad2e04473c434ae0->enter($__internal_9161fb5e12090c4d1cfadbfd7d45de7a6169b84654cc40b3ad2e04473c434ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
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
        
        $__internal_9161fb5e12090c4d1cfadbfd7d45de7a6169b84654cc40b3ad2e04473c434ae0->leave($__internal_9161fb5e12090c4d1cfadbfd7d45de7a6169b84654cc40b3ad2e04473c434ae0_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  91 => 24,  80 => 19,  76 => 18,  66 => 10,  64 => 9,  60 => 8,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Modifier */
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'une Livraison </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('expression_besoin_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Expression_besoin/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('expression_besoin_delete',{'id': entity.id}) }}" method="post" class="">*/
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
