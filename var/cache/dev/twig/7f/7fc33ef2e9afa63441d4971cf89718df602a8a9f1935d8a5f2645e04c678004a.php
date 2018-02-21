<?php

/* gestionStock/Ligne/edit.html.twig */
class __TwigTemplate_9875a96de45852a01df1632625feb1f910b55fa0e21ec5b65f257e034dbe3de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ligne/edit.html.twig", 1);
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
        $__internal_aaf93edf3e66db509b38473b9cbd1859a2f1cc3b27cfefb27b841276a493f2e8 = $this->env->getExtension("native_profiler");
        $__internal_aaf93edf3e66db509b38473b9cbd1859a2f1cc3b27cfefb27b841276a493f2e8->enter($__internal_aaf93edf3e66db509b38473b9cbd1859a2f1cc3b27cfefb27b841276a493f2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ligne/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf93edf3e66db509b38473b9cbd1859a2f1cc3b27cfefb27b841276a493f2e8->leave($__internal_aaf93edf3e66db509b38473b9cbd1859a2f1cc3b27cfefb27b841276a493f2e8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_986edd002fe0fe30e81f1946e68c5d8f723c58fc85d41305c459b942b488a77e = $this->env->getExtension("native_profiler");
        $__internal_986edd002fe0fe30e81f1946e68c5d8f723c58fc85d41305c459b942b488a77e->enter($__internal_986edd002fe0fe30e81f1946e68c5d8f723c58fc85d41305c459b942b488a77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Ligne
";
        
        $__internal_986edd002fe0fe30e81f1946e68c5d8f723c58fc85d41305c459b942b488a77e->leave($__internal_986edd002fe0fe30e81f1946e68c5d8f723c58fc85d41305c459b942b488a77e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05395229ec271c0fc14bf2ece57f4ee8f74dfccef054bb71342d946bc415e64c = $this->env->getExtension("native_profiler");
        $__internal_05395229ec271c0fc14bf2ece57f4ee8f74dfccef054bb71342d946bc415e64c->enter($__internal_05395229ec271c0fc14bf2ece57f4ee8f74dfccef054bb71342d946bc415e64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification du Ligne d'une Livraison </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ligne_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Ligne/form.html.twig", "gestionStock/Ligne/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ligne_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_05395229ec271c0fc14bf2ece57f4ee8f74dfccef054bb71342d946bc415e64c->leave($__internal_05395229ec271c0fc14bf2ece57f4ee8f74dfccef054bb71342d946bc415e64c_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6470698ad52976841b0b1cd279f75e21f8f2977bdc73bda55508a8a3d86332d5 = $this->env->getExtension("native_profiler");
        $__internal_6470698ad52976841b0b1cd279f75e21f8f2977bdc73bda55508a8a3d86332d5->enter($__internal_6470698ad52976841b0b1cd279f75e21f8f2977bdc73bda55508a8a3d86332d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6470698ad52976841b0b1cd279f75e21f8f2977bdc73bda55508a8a3d86332d5->leave($__internal_6470698ad52976841b0b1cd279f75e21f8f2977bdc73bda55508a8a3d86332d5_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ligne/edit.html.twig";
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
/* Modifier Ligne*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification du Ligne d'une Livraison </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('ligne_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Ligne/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('ligne_delete',{'id': entity.id}) }}" method="post" class="">*/
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
