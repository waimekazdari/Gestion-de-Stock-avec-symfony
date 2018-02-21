<?php

/* gestionStock/Livraison/edit.html.twig */
class __TwigTemplate_57f1109e81dcf4ec0dd85d0beea3a0d6a59485f4a52babe5674b5a18caca2d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Livraison/edit.html.twig", 1);
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
        $__internal_cb207a358f904dcce5e2fec71ab943c8702f63c7aaf33a2289256ca59683c550 = $this->env->getExtension("native_profiler");
        $__internal_cb207a358f904dcce5e2fec71ab943c8702f63c7aaf33a2289256ca59683c550->enter($__internal_cb207a358f904dcce5e2fec71ab943c8702f63c7aaf33a2289256ca59683c550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Livraison/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb207a358f904dcce5e2fec71ab943c8702f63c7aaf33a2289256ca59683c550->leave($__internal_cb207a358f904dcce5e2fec71ab943c8702f63c7aaf33a2289256ca59683c550_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_26c49c3adb2a79d59dc5c32e382994650fe53c0e1b0e45065f5b96ccdc84ec34 = $this->env->getExtension("native_profiler");
        $__internal_26c49c3adb2a79d59dc5c32e382994650fe53c0e1b0e45065f5b96ccdc84ec34->enter($__internal_26c49c3adb2a79d59dc5c32e382994650fe53c0e1b0e45065f5b96ccdc84ec34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Livraison
";
        
        $__internal_26c49c3adb2a79d59dc5c32e382994650fe53c0e1b0e45065f5b96ccdc84ec34->leave($__internal_26c49c3adb2a79d59dc5c32e382994650fe53c0e1b0e45065f5b96ccdc84ec34_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_663b25fc8e53a5c43a916faa868574c3783b0eb2046ee199dcff4286880a993c = $this->env->getExtension("native_profiler");
        $__internal_663b25fc8e53a5c43a916faa868574c3783b0eb2046ee199dcff4286880a993c->enter($__internal_663b25fc8e53a5c43a916faa868574c3783b0eb2046ee199dcff4286880a993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'une Livraison </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraison_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Livraison/form.html.twig", "gestionStock/Livraison/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraison_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_663b25fc8e53a5c43a916faa868574c3783b0eb2046ee199dcff4286880a993c->leave($__internal_663b25fc8e53a5c43a916faa868574c3783b0eb2046ee199dcff4286880a993c_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_680005540c91bcc23757b0c4dd83fea8b8553561c9289a2c885da2fa17ba9f86 = $this->env->getExtension("native_profiler");
        $__internal_680005540c91bcc23757b0c4dd83fea8b8553561c9289a2c885da2fa17ba9f86->enter($__internal_680005540c91bcc23757b0c4dd83fea8b8553561c9289a2c885da2fa17ba9f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_680005540c91bcc23757b0c4dd83fea8b8553561c9289a2c885da2fa17ba9f86->leave($__internal_680005540c91bcc23757b0c4dd83fea8b8553561c9289a2c885da2fa17ba9f86_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Livraison/edit.html.twig";
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
/* Modifier Livraison*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'une Livraison </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('livraison_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Livraison/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('livraison_delete',{'id': entity.id}) }}" method="post" class="">*/
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
