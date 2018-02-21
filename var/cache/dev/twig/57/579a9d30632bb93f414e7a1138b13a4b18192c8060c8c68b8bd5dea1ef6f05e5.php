<?php

/* gestionStock/Departement/edit.html.twig */
class __TwigTemplate_b3288752f0bd647fa5c305cf8a567049e9d4d2f698099a93e631e47ce72ffa0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Departement/edit.html.twig", 1);
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
        $__internal_59bc2e8bb3f3ee6db8359ee24239cd8bb38f7ca7aa951dbb461f6bf352b8ca86 = $this->env->getExtension("native_profiler");
        $__internal_59bc2e8bb3f3ee6db8359ee24239cd8bb38f7ca7aa951dbb461f6bf352b8ca86->enter($__internal_59bc2e8bb3f3ee6db8359ee24239cd8bb38f7ca7aa951dbb461f6bf352b8ca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Departement/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59bc2e8bb3f3ee6db8359ee24239cd8bb38f7ca7aa951dbb461f6bf352b8ca86->leave($__internal_59bc2e8bb3f3ee6db8359ee24239cd8bb38f7ca7aa951dbb461f6bf352b8ca86_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b62868339f0c65db04544e879d118d9af0aee7913c4c912fe281b711b0dc4337 = $this->env->getExtension("native_profiler");
        $__internal_b62868339f0c65db04544e879d118d9af0aee7913c4c912fe281b711b0dc4337->enter($__internal_b62868339f0c65db04544e879d118d9af0aee7913c4c912fe281b711b0dc4337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Département
";
        
        $__internal_b62868339f0c65db04544e879d118d9af0aee7913c4c912fe281b711b0dc4337->leave($__internal_b62868339f0c65db04544e879d118d9af0aee7913c4c912fe281b711b0dc4337_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f14144bff96264f490fc7c18cbcc19707f4970c9e99041fbc274de4b7ddc14d9 = $this->env->getExtension("native_profiler");
        $__internal_f14144bff96264f490fc7c18cbcc19707f4970c9e99041fbc274de4b7ddc14d9->enter($__internal_f14144bff96264f490fc7c18cbcc19707f4970c9e99041fbc274de4b7ddc14d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'un Département </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Departement/form.html.twig", "gestionStock/Departement/edit.html.twig", 9)->display($context);
        // line 10
        echo "    </br>
    <div class=\"form-group\" style=\"margin-left:-300px;\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_f14144bff96264f490fc7c18cbcc19707f4970c9e99041fbc274de4b7ddc14d9->leave($__internal_f14144bff96264f490fc7c18cbcc19707f4970c9e99041fbc274de4b7ddc14d9_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de6840e5c53f49ca149ad53fbb6b752c10b541b081de6862cef84806f278f7a5 = $this->env->getExtension("native_profiler");
        $__internal_de6840e5c53f49ca149ad53fbb6b752c10b541b081de6862cef84806f278f7a5->enter($__internal_de6840e5c53f49ca149ad53fbb6b752c10b541b081de6862cef84806f278f7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_de6840e5c53f49ca149ad53fbb6b752c10b541b081de6862cef84806f278f7a5->leave($__internal_de6840e5c53f49ca149ad53fbb6b752c10b541b081de6862cef84806f278f7a5_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Departement/edit.html.twig";
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
/* Modifier Département*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'un Département </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('departement_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Departement/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('departement_delete',{'id': entity.id}) }}" method="post" class="">*/
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
