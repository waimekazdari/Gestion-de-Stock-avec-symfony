<?php

/* gestionStock/MyProfile/edit.html.twig */
class __TwigTemplate_78356f77a2f84b9e5be74739b80fdd7bca86b9f737680853d8d3c4044dd603f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/MyProfile/edit.html.twig", 1);
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
        $__internal_6c0f3e8b09fd715fccf0a138a38be93a5ddeddd8ab10906b26d3949332656fe3 = $this->env->getExtension("native_profiler");
        $__internal_6c0f3e8b09fd715fccf0a138a38be93a5ddeddd8ab10906b26d3949332656fe3->enter($__internal_6c0f3e8b09fd715fccf0a138a38be93a5ddeddd8ab10906b26d3949332656fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/MyProfile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c0f3e8b09fd715fccf0a138a38be93a5ddeddd8ab10906b26d3949332656fe3->leave($__internal_6c0f3e8b09fd715fccf0a138a38be93a5ddeddd8ab10906b26d3949332656fe3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8efae2b770d1b20d0d925a08dd92506866c41e8fddbdb837ff245324428afa54 = $this->env->getExtension("native_profiler");
        $__internal_8efae2b770d1b20d0d925a08dd92506866c41e8fddbdb837ff245324428afa54->enter($__internal_8efae2b770d1b20d0d925a08dd92506866c41e8fddbdb837ff245324428afa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Mise à jour compte
";
        
        $__internal_8efae2b770d1b20d0d925a08dd92506866c41e8fddbdb837ff245324428afa54->leave($__internal_8efae2b770d1b20d0d925a08dd92506866c41e8fddbdb837ff245324428afa54_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a05b8feede14e6210e8967b7e73402a3f4b7189a9af883444ddc9d9147feb41d = $this->env->getExtension("native_profiler");
        $__internal_a05b8feede14e6210e8967b7e73402a3f4b7189a9af883444ddc9d9147feb41d->enter($__internal_a05b8feede14e6210e8967b7e73402a3f4b7189a9af883444ddc9d9147feb41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("gestionStock/MyProfile/form.html.twig", "gestionStock/MyProfile/edit.html.twig", 7)->display($context);
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
        
        $__internal_a05b8feede14e6210e8967b7e73402a3f4b7189a9af883444ddc9d9147feb41d->leave($__internal_a05b8feede14e6210e8967b7e73402a3f4b7189a9af883444ddc9d9147feb41d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3745737a879a3b3fc513a5a8d1405fc991c098a73746dccebb5b6822178bbfa8 = $this->env->getExtension("native_profiler");
        $__internal_3745737a879a3b3fc513a5a8d1405fc991c098a73746dccebb5b6822178bbfa8->enter($__internal_3745737a879a3b3fc513a5a8d1405fc991c098a73746dccebb5b6822178bbfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3745737a879a3b3fc513a5a8d1405fc991c098a73746dccebb5b6822178bbfa8->leave($__internal_3745737a879a3b3fc513a5a8d1405fc991c098a73746dccebb5b6822178bbfa8_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/MyProfile/edit.html.twig";
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
/* Mise à jour compte*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     {% include "gestionStock/MyProfile/form.html.twig" %}*/
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
