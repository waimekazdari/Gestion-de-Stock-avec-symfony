<?php

/* gestionStock/Admin/edit.html.twig */
class __TwigTemplate_59a3d410bfa741d0e607d3c2fbf93785b11c15f8d2d9854940c9b90e4951be6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Admin/edit.html.twig", 1);
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
        $__internal_b35bd48eacdb7cd1b482cbe4e291a822538d1ac4d5407dab0d5a72e67b41f714 = $this->env->getExtension("native_profiler");
        $__internal_b35bd48eacdb7cd1b482cbe4e291a822538d1ac4d5407dab0d5a72e67b41f714->enter($__internal_b35bd48eacdb7cd1b482cbe4e291a822538d1ac4d5407dab0d5a72e67b41f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Admin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35bd48eacdb7cd1b482cbe4e291a822538d1ac4d5407dab0d5a72e67b41f714->leave($__internal_b35bd48eacdb7cd1b482cbe4e291a822538d1ac4d5407dab0d5a72e67b41f714_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4338c61d637eac0f0261f1885010e9d13f52cebd26a1c1020f341ee033193d9b = $this->env->getExtension("native_profiler");
        $__internal_4338c61d637eac0f0261f1885010e9d13f52cebd26a1c1020f341ee033193d9b->enter($__internal_4338c61d637eac0f0261f1885010e9d13f52cebd26a1c1020f341ee033193d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Mise à jour Employe
";
        
        $__internal_4338c61d637eac0f0261f1885010e9d13f52cebd26a1c1020f341ee033193d9b->leave($__internal_4338c61d637eac0f0261f1885010e9d13f52cebd26a1c1020f341ee033193d9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5008b844460ff7a9002819edcfa2e363c336c8a580cb9e5980faafd53fa3fca5 = $this->env->getExtension("native_profiler");
        $__internal_5008b844460ff7a9002819edcfa2e363c336c8a580cb9e5980faafd53fa3fca5->enter($__internal_5008b844460ff7a9002819edcfa2e363c336c8a580cb9e5980faafd53fa3fca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("gestionStock/Admin/form.html.twig", "gestionStock/Admin/edit.html.twig", 7)->display($context);
        // line 8
        echo "
<form id=\"deleteForm\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"\">
   <!-- ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo " -->
</form> 
</div>
";
        
        $__internal_5008b844460ff7a9002819edcfa2e363c336c8a580cb9e5980faafd53fa3fca5->leave($__internal_5008b844460ff7a9002819edcfa2e363c336c8a580cb9e5980faafd53fa3fca5_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e58a9d05cc91c6311f927886d44369f258c3a900eea6e89faa66915245f58a3 = $this->env->getExtension("native_profiler");
        $__internal_0e58a9d05cc91c6311f927886d44369f258c3a900eea6e89faa66915245f58a3->enter($__internal_0e58a9d05cc91c6311f927886d44369f258c3a900eea6e89faa66915245f58a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
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
        
        $__internal_0e58a9d05cc91c6311f927886d44369f258c3a900eea6e89faa66915245f58a3->leave($__internal_0e58a9d05cc91c6311f927886d44369f258c3a900eea6e89faa66915245f58a3_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Admin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  79 => 15,  68 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Mise à jour Employe*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     {% include "gestionStock/Admin/form.html.twig" %}*/
/* */
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
