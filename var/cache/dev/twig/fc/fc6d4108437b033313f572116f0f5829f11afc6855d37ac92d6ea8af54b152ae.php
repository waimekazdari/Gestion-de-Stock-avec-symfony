<?php

/* gestionStock/Admin/edit.html.twig */
class __TwigTemplate_014e25aa35e41989e98400d15e6e9c5d301132a5b59f756b290074663e7b5f45 extends Twig_Template
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
        $__internal_35846dd98e20c0cf662dfe2e5d82e03705da5984f5d624014f59b425a8ab8260 = $this->env->getExtension("native_profiler");
        $__internal_35846dd98e20c0cf662dfe2e5d82e03705da5984f5d624014f59b425a8ab8260->enter($__internal_35846dd98e20c0cf662dfe2e5d82e03705da5984f5d624014f59b425a8ab8260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Admin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35846dd98e20c0cf662dfe2e5d82e03705da5984f5d624014f59b425a8ab8260->leave($__internal_35846dd98e20c0cf662dfe2e5d82e03705da5984f5d624014f59b425a8ab8260_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_562fd20ecb2e41488915eed1f5e583893ef11deaea7a43fb900d4c608b17d25a = $this->env->getExtension("native_profiler");
        $__internal_562fd20ecb2e41488915eed1f5e583893ef11deaea7a43fb900d4c608b17d25a->enter($__internal_562fd20ecb2e41488915eed1f5e583893ef11deaea7a43fb900d4c608b17d25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Mise à jour Employe
";
        
        $__internal_562fd20ecb2e41488915eed1f5e583893ef11deaea7a43fb900d4c608b17d25a->leave($__internal_562fd20ecb2e41488915eed1f5e583893ef11deaea7a43fb900d4c608b17d25a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5e1059e0c3ef26b133deef8c24147cb51607080e4d8db50f4a4f9701e607dcc = $this->env->getExtension("native_profiler");
        $__internal_e5e1059e0c3ef26b133deef8c24147cb51607080e4d8db50f4a4f9701e607dcc->enter($__internal_e5e1059e0c3ef26b133deef8c24147cb51607080e4d8db50f4a4f9701e607dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5e1059e0c3ef26b133deef8c24147cb51607080e4d8db50f4a4f9701e607dcc->leave($__internal_e5e1059e0c3ef26b133deef8c24147cb51607080e4d8db50f4a4f9701e607dcc_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a9c71076ff3b770482e20d45232b82fdc709f4942a6a00d8270581cd6ed3b60 = $this->env->getExtension("native_profiler");
        $__internal_7a9c71076ff3b770482e20d45232b82fdc709f4942a6a00d8270581cd6ed3b60->enter($__internal_7a9c71076ff3b770482e20d45232b82fdc709f4942a6a00d8270581cd6ed3b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7a9c71076ff3b770482e20d45232b82fdc709f4942a6a00d8270581cd6ed3b60->leave($__internal_7a9c71076ff3b770482e20d45232b82fdc709f4942a6a00d8270581cd6ed3b60_prof);

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
