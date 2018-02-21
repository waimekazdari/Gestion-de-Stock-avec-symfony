<?php

/* gestionStock/Fournisseur/edit.html.twig */
class __TwigTemplate_f4adb203739859c7522f7a414dcc78247a412114d53ddd9829e3c4d7c3c2952e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Fournisseur/edit.html.twig", 1);
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
        $__internal_1168c11905a6b228042c7cc4697f0eb2d5a17701e06096cb33ac978d2f8152af = $this->env->getExtension("native_profiler");
        $__internal_1168c11905a6b228042c7cc4697f0eb2d5a17701e06096cb33ac978d2f8152af->enter($__internal_1168c11905a6b228042c7cc4697f0eb2d5a17701e06096cb33ac978d2f8152af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Fournisseur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1168c11905a6b228042c7cc4697f0eb2d5a17701e06096cb33ac978d2f8152af->leave($__internal_1168c11905a6b228042c7cc4697f0eb2d5a17701e06096cb33ac978d2f8152af_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8e791dc6c5e22530f2d31de4d0df56389dce725bd43ae03e4ca629710db0257 = $this->env->getExtension("native_profiler");
        $__internal_e8e791dc6c5e22530f2d31de4d0df56389dce725bd43ae03e4ca629710db0257->enter($__internal_e8e791dc6c5e22530f2d31de4d0df56389dce725bd43ae03e4ca629710db0257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Fournisseur
";
        
        $__internal_e8e791dc6c5e22530f2d31de4d0df56389dce725bd43ae03e4ca629710db0257->leave($__internal_e8e791dc6c5e22530f2d31de4d0df56389dce725bd43ae03e4ca629710db0257_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_68eaec9be128e573876c3ed99022cc2429b7eea4091cb94f4840f8cdd6bcbf49 = $this->env->getExtension("native_profiler");
        $__internal_68eaec9be128e573876c3ed99022cc2429b7eea4091cb94f4840f8cdd6bcbf49->enter($__internal_68eaec9be128e573876c3ed99022cc2429b7eea4091cb94f4840f8cdd6bcbf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-user\"></span> Modification d'un Fournisseur </h3>
<form  style=\"margin-left:200px\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fournisseur_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Fournisseur/form.html.twig", "gestionStock/Fournisseur/edit.html.twig", 9)->display($context);
        // line 10
        echo "</br>
    <div class=\"form-group\" style =\"margin-left:-300px;\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fournisseur_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_68eaec9be128e573876c3ed99022cc2429b7eea4091cb94f4840f8cdd6bcbf49->leave($__internal_68eaec9be128e573876c3ed99022cc2429b7eea4091cb94f4840f8cdd6bcbf49_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd19e4a231616e2b2bf4ae5aaeecd702dc1eb28e9a5751e89276a652f06fef42 = $this->env->getExtension("native_profiler");
        $__internal_dd19e4a231616e2b2bf4ae5aaeecd702dc1eb28e9a5751e89276a652f06fef42->enter($__internal_dd19e4a231616e2b2bf4ae5aaeecd702dc1eb28e9a5751e89276a652f06fef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dd19e4a231616e2b2bf4ae5aaeecd702dc1eb28e9a5751e89276a652f06fef42->leave($__internal_dd19e4a231616e2b2bf4ae5aaeecd702dc1eb28e9a5751e89276a652f06fef42_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Fournisseur/edit.html.twig";
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
/* Modifier Fournisseur*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-user"></span> Modification d'un Fournisseur </h3>*/
/* <form  style="margin-left:200px" action="{{ path('fournisseur_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Fournisseur/form.html.twig" %}*/
/* </br>*/
/*     <div class="form-group" style ="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('fournisseur_delete',{'id': entity.id}) }}" method="post" class="">*/
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
