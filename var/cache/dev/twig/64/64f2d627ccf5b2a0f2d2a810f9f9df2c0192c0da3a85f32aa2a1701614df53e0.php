<?php

/* gestionStock/Ar_sortie/edit.html.twig */
class __TwigTemplate_3dbc811e054f6c310dfc6c756bdfd386cda8c8bb70a3eb6a2a8595f262e10562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_sortie/edit.html.twig", 1);
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
        $__internal_de597eaf1ca5989ba749e631a4321b42c20c645dbd22671299255e0f0db33383 = $this->env->getExtension("native_profiler");
        $__internal_de597eaf1ca5989ba749e631a4321b42c20c645dbd22671299255e0f0db33383->enter($__internal_de597eaf1ca5989ba749e631a4321b42c20c645dbd22671299255e0f0db33383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_sortie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de597eaf1ca5989ba749e631a4321b42c20c645dbd22671299255e0f0db33383->leave($__internal_de597eaf1ca5989ba749e631a4321b42c20c645dbd22671299255e0f0db33383_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_31ec5ae623432629e521a3c996e2d8438efd4ad49ac8e5ff64bd8aa5e01359a9 = $this->env->getExtension("native_profiler");
        $__internal_31ec5ae623432629e521a3c996e2d8438efd4ad49ac8e5ff64bd8aa5e01359a9->enter($__internal_31ec5ae623432629e521a3c996e2d8438efd4ad49ac8e5ff64bd8aa5e01359a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modifier sortie article
";
        
        $__internal_31ec5ae623432629e521a3c996e2d8438efd4ad49ac8e5ff64bd8aa5e01359a9->leave($__internal_31ec5ae623432629e521a3c996e2d8438efd4ad49ac8e5ff64bd8aa5e01359a9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7e29fb17311c3a27272ee6ca246f23ada3eb07fa4ac87671abfd8c2d0f3e817 = $this->env->getExtension("native_profiler");
        $__internal_d7e29fb17311c3a27272ee6ca246f23ada3eb07fa4ac87671abfd8c2d0f3e817->enter($__internal_d7e29fb17311c3a27272ee6ca246f23ada3eb07fa4ac87671abfd8c2d0f3e817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
<h3><span class=\"glyphicon glyphicon-pencil\"></span> Modification de Sortie d'un Article </h3>
<form  style=\"margin-left:200px;\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_sortie_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>
    ";
        // line 9
        $this->loadTemplate("gestionStock/Ar_sortie/form.html.twig", "gestionStock/Ar_sortie/edit.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_sortie_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_d7e29fb17311c3a27272ee6ca246f23ada3eb07fa4ac87671abfd8c2d0f3e817->leave($__internal_d7e29fb17311c3a27272ee6ca246f23ada3eb07fa4ac87671abfd8c2d0f3e817_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8285056527b1048ade7baf760e480e2fd65c2f594fae7b4c4dce74f4dc75d21e = $this->env->getExtension("native_profiler");
        $__internal_8285056527b1048ade7baf760e480e2fd65c2f594fae7b4c4dce74f4dc75d21e->enter($__internal_8285056527b1048ade7baf760e480e2fd65c2f594fae7b4c4dce74f4dc75d21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8285056527b1048ade7baf760e480e2fd65c2f594fae7b4c4dce74f4dc75d21e->leave($__internal_8285056527b1048ade7baf760e480e2fd65c2f594fae7b4c4dce74f4dc75d21e_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_sortie/edit.html.twig";
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
/* Modifier sortie article*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/* <h3><span class="glyphicon glyphicon-pencil"></span> Modification de Sortie d'un Article </h3>*/
/* <form  style="margin-left:200px;" action="{{ path('ar_sortie_update', { 'id': entity.id }) }}"  class="form-horizontal col-md-6" method="post"></br>*/
/*     {% include "gestionStock/Ar_sortie/form.html.twig" %}*/
/*     </br>*/
/*     <div class="form-group" style="margin-left:-300px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type='submit' class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         <a href="#" id="js-delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* <form id="deleteForm" action="{{ path('ar_sortie_delete',{'id': entity.id}) }}" method="post" class="">*/
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
