<?php

/* gestionStock/Ar_entree/edit.html.twig */
class __TwigTemplate_384341bedf280e9e1001fff19d6d88b3909b4d5b25817b11f07655e0103be46d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_entree/edit.html.twig", 1);
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
        $__internal_b731ce2754bbc6a44473a24ab9a4f1d1df7dc7c0812406bb8d2ec5aaa23f9bd6 = $this->env->getExtension("native_profiler");
        $__internal_b731ce2754bbc6a44473a24ab9a4f1d1df7dc7c0812406bb8d2ec5aaa23f9bd6->enter($__internal_b731ce2754bbc6a44473a24ab9a4f1d1df7dc7c0812406bb8d2ec5aaa23f9bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_entree/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b731ce2754bbc6a44473a24ab9a4f1d1df7dc7c0812406bb8d2ec5aaa23f9bd6->leave($__internal_b731ce2754bbc6a44473a24ab9a4f1d1df7dc7c0812406bb8d2ec5aaa23f9bd6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e5028b4cbba7dad934f870deb8ae659696332bc19e4798f1e953f701a829645 = $this->env->getExtension("native_profiler");
        $__internal_8e5028b4cbba7dad934f870deb8ae659696332bc19e4798f1e953f701a829645->enter($__internal_8e5028b4cbba7dad934f870deb8ae659696332bc19e4798f1e953f701a829645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier entree article
";
        
        $__internal_8e5028b4cbba7dad934f870deb8ae659696332bc19e4798f1e953f701a829645->leave($__internal_8e5028b4cbba7dad934f870deb8ae659696332bc19e4798f1e953f701a829645_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25bc14d115c26aad0a258ebafc38277b79904831ef9dbc45f73adab3304ad42c = $this->env->getExtension("native_profiler");
        $__internal_25bc14d115c26aad0a258ebafc38277b79904831ef9dbc45f73adab3304ad42c->enter($__internal_25bc14d115c26aad0a258ebafc38277b79904831ef9dbc45f73adab3304ad42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification d'Entree d'une livraison </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_entree_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Ar_entree/form.html.twig", "gestionStock/Ar_entree/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_entree_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_25bc14d115c26aad0a258ebafc38277b79904831ef9dbc45f73adab3304ad42c->leave($__internal_25bc14d115c26aad0a258ebafc38277b79904831ef9dbc45f73adab3304ad42c_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2b2113771ebea5489828dda2d896655438fcc7a4225390993c462dda9a256a3 = $this->env->getExtension("native_profiler");
        $__internal_a2b2113771ebea5489828dda2d896655438fcc7a4225390993c462dda9a256a3->enter($__internal_a2b2113771ebea5489828dda2d896655438fcc7a4225390993c462dda9a256a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a2b2113771ebea5489828dda2d896655438fcc7a4225390993c462dda9a256a3->leave($__internal_a2b2113771ebea5489828dda2d896655438fcc7a4225390993c462dda9a256a3_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_entree/edit.html.twig";
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
/* Modifier entree article*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification d'Entree d'une livraison </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('ar_entree_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Ar_entree/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('ar_entree_delete',{'id': entity.id}) }}" method="post" class="">*/
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
