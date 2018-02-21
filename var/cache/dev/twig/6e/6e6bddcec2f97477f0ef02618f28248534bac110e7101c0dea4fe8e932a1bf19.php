<?php

/* gestionStock/Entree/edit.html.twig */
class __TwigTemplate_a733b91e4b13be595093f3b38ac27fe8923231a6ed014941e6bdb7d79a4c2386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Entree/edit.html.twig", 1);
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
        $__internal_9736f96334e12a82658f01b52c708b3c269039f0be7f2bb481ea473bbba81a07 = $this->env->getExtension("native_profiler");
        $__internal_9736f96334e12a82658f01b52c708b3c269039f0be7f2bb481ea473bbba81a07->enter($__internal_9736f96334e12a82658f01b52c708b3c269039f0be7f2bb481ea473bbba81a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Entree/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9736f96334e12a82658f01b52c708b3c269039f0be7f2bb481ea473bbba81a07->leave($__internal_9736f96334e12a82658f01b52c708b3c269039f0be7f2bb481ea473bbba81a07_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_19b7aee75a6be821247e3311a0c5a276128de268c7d0d9bb21a9c56b8a2d9557 = $this->env->getExtension("native_profiler");
        $__internal_19b7aee75a6be821247e3311a0c5a276128de268c7d0d9bb21a9c56b8a2d9557->enter($__internal_19b7aee75a6be821247e3311a0c5a276128de268c7d0d9bb21a9c56b8a2d9557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier Entree
";
        
        $__internal_19b7aee75a6be821247e3311a0c5a276128de268c7d0d9bb21a9c56b8a2d9557->leave($__internal_19b7aee75a6be821247e3311a0c5a276128de268c7d0d9bb21a9c56b8a2d9557_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_103ca813f9ce92867f383c80e3f6176b5fb58ead2677448a042001582e964f5b = $this->env->getExtension("native_profiler");
        $__internal_103ca813f9ce92867f383c80e3f6176b5fb58ead2677448a042001582e964f5b->enter($__internal_103ca813f9ce92867f383c80e3f6176b5fb58ead2677448a042001582e964f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'une Entree </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entree_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Entree/form.html.twig", "gestionStock/Entree/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entree_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_103ca813f9ce92867f383c80e3f6176b5fb58ead2677448a042001582e964f5b->leave($__internal_103ca813f9ce92867f383c80e3f6176b5fb58ead2677448a042001582e964f5b_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fbbcb45c074d1a83c61fb823b83b0c01a95612f7168d26e88222908b1da2121 = $this->env->getExtension("native_profiler");
        $__internal_2fbbcb45c074d1a83c61fb823b83b0c01a95612f7168d26e88222908b1da2121->enter($__internal_2fbbcb45c074d1a83c61fb823b83b0c01a95612f7168d26e88222908b1da2121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2fbbcb45c074d1a83c61fb823b83b0c01a95612f7168d26e88222908b1da2121->leave($__internal_2fbbcb45c074d1a83c61fb823b83b0c01a95612f7168d26e88222908b1da2121_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Entree/edit.html.twig";
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
/* Modifier Entree*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'une Entree </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('entree_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Entree/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('entree_delete',{'id': entity.id}) }}" method="post" class="">*/
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
