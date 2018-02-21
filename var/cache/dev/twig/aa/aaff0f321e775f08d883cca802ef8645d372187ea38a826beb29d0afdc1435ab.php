<?php

/* gestionStock/Service/edit.html.twig */
class __TwigTemplate_c0435beb1eb5adbf1fce282ea8447a867a97132460e8238ae586e819fdb1a660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Service/edit.html.twig", 1);
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
        $__internal_2b557f51b47fac1f58526e8c60fc5b8f265b4c34f94d9ea575db2b5ee2aa2002 = $this->env->getExtension("native_profiler");
        $__internal_2b557f51b47fac1f58526e8c60fc5b8f265b4c34f94d9ea575db2b5ee2aa2002->enter($__internal_2b557f51b47fac1f58526e8c60fc5b8f265b4c34f94d9ea575db2b5ee2aa2002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Service/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b557f51b47fac1f58526e8c60fc5b8f265b4c34f94d9ea575db2b5ee2aa2002->leave($__internal_2b557f51b47fac1f58526e8c60fc5b8f265b4c34f94d9ea575db2b5ee2aa2002_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d07263e8e10ed08d313f4fa9e982a709f68cb57f53e8a65c77731369d97c7429 = $this->env->getExtension("native_profiler");
        $__internal_d07263e8e10ed08d313f4fa9e982a709f68cb57f53e8a65c77731369d97c7429->enter($__internal_d07263e8e10ed08d313f4fa9e982a709f68cb57f53e8a65c77731369d97c7429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Service
";
        
        $__internal_d07263e8e10ed08d313f4fa9e982a709f68cb57f53e8a65c77731369d97c7429->leave($__internal_d07263e8e10ed08d313f4fa9e982a709f68cb57f53e8a65c77731369d97c7429_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b02682c55f3196ae7d72d059907e7275801dd26b6d83a855abc3e5dbc9e82e = $this->env->getExtension("native_profiler");
        $__internal_50b02682c55f3196ae7d72d059907e7275801dd26b6d83a855abc3e5dbc9e82e->enter($__internal_50b02682c55f3196ae7d72d059907e7275801dd26b6d83a855abc3e5dbc9e82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'un Service </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Service/form.html.twig", "gestionStock/Service/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_50b02682c55f3196ae7d72d059907e7275801dd26b6d83a855abc3e5dbc9e82e->leave($__internal_50b02682c55f3196ae7d72d059907e7275801dd26b6d83a855abc3e5dbc9e82e_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_723b9aae2369387f1a55c22da96890965e3f973ff54b0fc5a400255eda54ee41 = $this->env->getExtension("native_profiler");
        $__internal_723b9aae2369387f1a55c22da96890965e3f973ff54b0fc5a400255eda54ee41->enter($__internal_723b9aae2369387f1a55c22da96890965e3f973ff54b0fc5a400255eda54ee41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_723b9aae2369387f1a55c22da96890965e3f973ff54b0fc5a400255eda54ee41->leave($__internal_723b9aae2369387f1a55c22da96890965e3f973ff54b0fc5a400255eda54ee41_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Service/edit.html.twig";
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
/* Modifier Service*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'un Service </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('service_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Service/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('service_delete',{'id': entity.id}) }}" method="post" class="">*/
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
