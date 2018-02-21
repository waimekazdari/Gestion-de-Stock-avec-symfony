<?php

/* gestionStock/Ar_entree/new.html.twig */
class __TwigTemplate_0e86997574556838ed505e57681840a99b6b9f854f831c6cf9c84a75ffc28a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_entree/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        $__internal_6d842712107c759aa5f84a8f25ea205ebf1aa35bd4cef86769b418e4aa70df3f = $this->env->getExtension("native_profiler");
        $__internal_6d842712107c759aa5f84a8f25ea205ebf1aa35bd4cef86769b418e4aa70df3f->enter($__internal_6d842712107c759aa5f84a8f25ea205ebf1aa35bd4cef86769b418e4aa70df3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_entree/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d842712107c759aa5f84a8f25ea205ebf1aa35bd4cef86769b418e4aa70df3f->leave($__internal_6d842712107c759aa5f84a8f25ea205ebf1aa35bd4cef86769b418e4aa70df3f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbc181e313119942b6f09ceb59566b51df430f6b7123994a9d1bf10f4c7d15c3 = $this->env->getExtension("native_profiler");
        $__internal_dbc181e313119942b6f09ceb59566b51df430f6b7123994a9d1bf10f4c7d15c3->enter($__internal_dbc181e313119942b6f09ceb59566b51df430f6b7123994a9d1bf10f4c7d15c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nouvelle Entree Livraison
";
        
        $__internal_dbc181e313119942b6f09ceb59566b51df430f6b7123994a9d1bf10f4c7d15c3->leave($__internal_dbc181e313119942b6f09ceb59566b51df430f6b7123994a9d1bf10f4c7d15c3_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1d50ca88a38411b2e471c90377bd7b10158600483d9e31cbb9ba6a174a0d5240 = $this->env->getExtension("native_profiler");
        $__internal_1d50ca88a38411b2e471c90377bd7b10158600483d9e31cbb9ba6a174a0d5240->enter($__internal_1d50ca88a38411b2e471c90377bd7b10158600483d9e31cbb9ba6a174a0d5240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_1d50ca88a38411b2e471c90377bd7b10158600483d9e31cbb9ba6a174a0d5240->leave($__internal_1d50ca88a38411b2e471c90377bd7b10158600483d9e31cbb9ba6a174a0d5240_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_600a54dc605df08b281843b9953cc2b2b02e68deba8368b62445a3207322ad66 = $this->env->getExtension("native_profiler");
        $__internal_600a54dc605df08b281843b9953cc2b2b02e68deba8368b62445a3207322ad66->enter($__internal_600a54dc605df08b281843b9953cc2b2b02e68deba8368b62445a3207322ad66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
    <h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'un nouveau Ligne </h3>

<form  style=\"margin-left:200px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ar_entree_create");
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>

    ";
        // line 15
        $this->loadTemplate("gestionStock/Ar_entree/form.html.twig", "gestionStock/Ar_entree/new.html.twig", 15)->display($context);
        // line 16
        echo "<br>
    <div class=\"form-group\" style=\"margin-left:-100px;\">
      <div class=\"col-sm-offset-6 col-sm-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Ajouter</button>
      </div>
    </div>
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>
</div>
";
        
        $__internal_600a54dc605df08b281843b9953cc2b2b02e68deba8368b62445a3207322ad66->leave($__internal_600a54dc605df08b281843b9953cc2b2b02e68deba8368b62445a3207322ad66_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d43d003903682da4743b39669b00299f37722ad66717830d51e139cee53ac9c = $this->env->getExtension("native_profiler");
        $__internal_1d43d003903682da4743b39669b00299f37722ad66717830d51e139cee53ac9c->enter($__internal_1d43d003903682da4743b39669b00299f37722ad66717830d51e139cee53ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/js/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script> 
<script> 
    (function(\$) {

        \$('.has-datepicker').attr('data-date-format', 'YYYY-MM-DD').parent().datetimepicker({
          pickTime: false
        });

    })(jQuery);
</script>
";
        
        $__internal_1d43d003903682da4743b39669b00299f37722ad66717830d51e139cee53ac9c->leave($__internal_1d43d003903682da4743b39669b00299f37722ad66717830d51e139cee53ac9c_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_entree/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  119 => 29,  114 => 27,  108 => 26,  97 => 22,  89 => 16,  87 => 15,  82 => 13,  77 => 10,  71 => 9,  62 => 7,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Nouvelle Entree Livraison*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('Resources/public/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/*     <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'un nouveau Ligne </h3>*/
/* */
/* <form  style="margin-left:200px;" action="{{ path('ar_entree_create') }}"  class="form-horizontal col-md-6" method="post"></br>*/
/* */
/*     {% include "gestionStock/Ar_entree/form.html.twig" %}*/
/* <br>*/
/*     <div class="form-group" style="margin-left:-100px;">*/
/*       <div class="col-sm-offset-6 col-sm-6">*/
/*         <button type="submit" name="subvalider" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Ajouter</button>*/
/*       </div>*/
/*     </div>*/
/*     {{ form_end(form)}}*/
/* </form>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* */
/*     <script src="{{ asset('Resources/js/moment.js') }}"></script>*/
/*     <script src="{{ asset('Resources/js/bootstrap-datetimepicker.js') }}"></script> */
/* <script> */
/*     (function($) {*/
/* */
/*         $('.has-datepicker').attr('data-date-format', 'YYYY-MM-DD').parent().datetimepicker({*/
/*           pickTime: false*/
/*         });*/
/* */
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
