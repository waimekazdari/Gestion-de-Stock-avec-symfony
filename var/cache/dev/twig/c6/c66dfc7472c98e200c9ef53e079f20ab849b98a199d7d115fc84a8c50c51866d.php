<?php

/* gestionStock/Sortie/edit.html.twig */
class __TwigTemplate_b5808f7227d195a130e042c0e841abeb3bb1c07400ca765f0e98af902e35b08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Sortie/edit.html.twig", 1);
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
        $__internal_30b6cf958ec3e2c453dcf18272d5d1d4fbcde381b6a93b8443ed1c8852b9efe7 = $this->env->getExtension("native_profiler");
        $__internal_30b6cf958ec3e2c453dcf18272d5d1d4fbcde381b6a93b8443ed1c8852b9efe7->enter($__internal_30b6cf958ec3e2c453dcf18272d5d1d4fbcde381b6a93b8443ed1c8852b9efe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Sortie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b6cf958ec3e2c453dcf18272d5d1d4fbcde381b6a93b8443ed1c8852b9efe7->leave($__internal_30b6cf958ec3e2c453dcf18272d5d1d4fbcde381b6a93b8443ed1c8852b9efe7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_194ef25bb19f978ecb234dcc49f0eb43b8e6a3c0ab216a9bc1b21dfb67291815 = $this->env->getExtension("native_profiler");
        $__internal_194ef25bb19f978ecb234dcc49f0eb43b8e6a3c0ab216a9bc1b21dfb67291815->enter($__internal_194ef25bb19f978ecb234dcc49f0eb43b8e6a3c0ab216a9bc1b21dfb67291815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Sortie
";
        
        $__internal_194ef25bb19f978ecb234dcc49f0eb43b8e6a3c0ab216a9bc1b21dfb67291815->leave($__internal_194ef25bb19f978ecb234dcc49f0eb43b8e6a3c0ab216a9bc1b21dfb67291815_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30994c904036add1a5e58c36c662a6a7d4c5a55473750ce6019be50668cf32c = $this->env->getExtension("native_profiler");
        $__internal_c30994c904036add1a5e58c36c662a6a7d4c5a55473750ce6019be50668cf32c->enter($__internal_c30994c904036add1a5e58c36c662a6a7d4c5a55473750ce6019be50668cf32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'une Sortie </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sortie_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Sortie/form.html.twig", "gestionStock/Sortie/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sortie_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_c30994c904036add1a5e58c36c662a6a7d4c5a55473750ce6019be50668cf32c->leave($__internal_c30994c904036add1a5e58c36c662a6a7d4c5a55473750ce6019be50668cf32c_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32dec7303d6e7cb9d7933c5f208b6afd1421e79319776974ee83a1d0eae30c73 = $this->env->getExtension("native_profiler");
        $__internal_32dec7303d6e7cb9d7933c5f208b6afd1421e79319776974ee83a1d0eae30c73->enter($__internal_32dec7303d6e7cb9d7933c5f208b6afd1421e79319776974ee83a1d0eae30c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_32dec7303d6e7cb9d7933c5f208b6afd1421e79319776974ee83a1d0eae30c73->leave($__internal_32dec7303d6e7cb9d7933c5f208b6afd1421e79319776974ee83a1d0eae30c73_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Sortie/edit.html.twig";
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
/* Modifier Sortie*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'une Sortie </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('sortie_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Sortie/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('sortie_delete',{'id': entity.id}) }}" method="post" class="">*/
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
