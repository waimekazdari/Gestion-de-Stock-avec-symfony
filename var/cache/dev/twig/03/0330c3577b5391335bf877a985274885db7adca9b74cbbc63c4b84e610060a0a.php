<?php

/* gestionStock/Article/edit.html.twig */
class __TwigTemplate_b7582c3ed81af2f5b359430d6d9dd59451cc15190352770e4dc5334e1f0f86d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Article/edit.html.twig", 1);
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
        $__internal_437e7daf597203a6e97e47319bf41c2e1e00fe2b94da03e2246ad212a551f70d = $this->env->getExtension("native_profiler");
        $__internal_437e7daf597203a6e97e47319bf41c2e1e00fe2b94da03e2246ad212a551f70d->enter($__internal_437e7daf597203a6e97e47319bf41c2e1e00fe2b94da03e2246ad212a551f70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437e7daf597203a6e97e47319bf41c2e1e00fe2b94da03e2246ad212a551f70d->leave($__internal_437e7daf597203a6e97e47319bf41c2e1e00fe2b94da03e2246ad212a551f70d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5abc0df82e670ebc30e342458d835a7c6f582064d20a41c4051a4fd0160e7f3f = $this->env->getExtension("native_profiler");
        $__internal_5abc0df82e670ebc30e342458d835a7c6f582064d20a41c4051a4fd0160e7f3f->enter($__internal_5abc0df82e670ebc30e342458d835a7c6f582064d20a41c4051a4fd0160e7f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Article
";
        
        $__internal_5abc0df82e670ebc30e342458d835a7c6f582064d20a41c4051a4fd0160e7f3f->leave($__internal_5abc0df82e670ebc30e342458d835a7c6f582064d20a41c4051a4fd0160e7f3f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aca392cebbd6eafbf3a0db3f320a5540a9e31d7d98e05fec0c40d1664ad679b = $this->env->getExtension("native_profiler");
        $__internal_4aca392cebbd6eafbf3a0db3f320a5540a9e31d7d98e05fec0c40d1664ad679b->enter($__internal_4aca392cebbd6eafbf3a0db3f320a5540a9e31d7d98e05fec0c40d1664ad679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'un Article </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Article/form.html.twig", "gestionStock/Article/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_4aca392cebbd6eafbf3a0db3f320a5540a9e31d7d98e05fec0c40d1664ad679b->leave($__internal_4aca392cebbd6eafbf3a0db3f320a5540a9e31d7d98e05fec0c40d1664ad679b_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33c341f2c027b86c994ec845494930333eac51b5ff38977805ca4190dc00277c = $this->env->getExtension("native_profiler");
        $__internal_33c341f2c027b86c994ec845494930333eac51b5ff38977805ca4190dc00277c->enter($__internal_33c341f2c027b86c994ec845494930333eac51b5ff38977805ca4190dc00277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_33c341f2c027b86c994ec845494930333eac51b5ff38977805ca4190dc00277c->leave($__internal_33c341f2c027b86c994ec845494930333eac51b5ff38977805ca4190dc00277c_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Article/edit.html.twig";
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
/* Modifier Article*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'un Article </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('article_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Article/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('article_delete',{'id': entity.id}) }}" method="post" class="">*/
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
