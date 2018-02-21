<?php

/* gestionStock/Ligne/new.html.twig */
class __TwigTemplate_6192846da7784e257847347a69c860997e0698faffd315b5383c55e0f21f501c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ligne/new.html.twig", 1);
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
        $__internal_27f03eee1c79f66fe89d551d28e5e4713a79305d71831340cbf3d500c5743158 = $this->env->getExtension("native_profiler");
        $__internal_27f03eee1c79f66fe89d551d28e5e4713a79305d71831340cbf3d500c5743158->enter($__internal_27f03eee1c79f66fe89d551d28e5e4713a79305d71831340cbf3d500c5743158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ligne/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f03eee1c79f66fe89d551d28e5e4713a79305d71831340cbf3d500c5743158->leave($__internal_27f03eee1c79f66fe89d551d28e5e4713a79305d71831340cbf3d500c5743158_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e8e04570f8161b47aa7e6dc5fa83798c5c4eb09088db0afcdda089ab96b55f = $this->env->getExtension("native_profiler");
        $__internal_f2e8e04570f8161b47aa7e6dc5fa83798c5c4eb09088db0afcdda089ab96b55f->enter($__internal_f2e8e04570f8161b47aa7e6dc5fa83798c5c4eb09088db0afcdda089ab96b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nouveau Ligne
";
        
        $__internal_f2e8e04570f8161b47aa7e6dc5fa83798c5c4eb09088db0afcdda089ab96b55f->leave($__internal_f2e8e04570f8161b47aa7e6dc5fa83798c5c4eb09088db0afcdda089ab96b55f_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_23c1c7c6ed2f1e70c6a5bed012bc426541c5e214699047a6bc295b43870d5246 = $this->env->getExtension("native_profiler");
        $__internal_23c1c7c6ed2f1e70c6a5bed012bc426541c5e214699047a6bc295b43870d5246->enter($__internal_23c1c7c6ed2f1e70c6a5bed012bc426541c5e214699047a6bc295b43870d5246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_23c1c7c6ed2f1e70c6a5bed012bc426541c5e214699047a6bc295b43870d5246->leave($__internal_23c1c7c6ed2f1e70c6a5bed012bc426541c5e214699047a6bc295b43870d5246_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee0b4c0a6b96e9067f4b366c11505c6290072299603e00369f02436e630c8c76 = $this->env->getExtension("native_profiler");
        $__internal_ee0b4c0a6b96e9067f4b366c11505c6290072299603e00369f02436e630c8c76->enter($__internal_ee0b4c0a6b96e9067f4b366c11505c6290072299603e00369f02436e630c8c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
    <h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'un nouveau Ligne </h3>

<form  style=\"margin-left:200px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ligne_create");
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>

    ";
        // line 15
        $this->loadTemplate("gestionStock/Ligne/form.html.twig", "gestionStock/Ligne/new.html.twig", 15)->display($context);
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
        
        $__internal_ee0b4c0a6b96e9067f4b366c11505c6290072299603e00369f02436e630c8c76->leave($__internal_ee0b4c0a6b96e9067f4b366c11505c6290072299603e00369f02436e630c8c76_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_890ad2639fce1eaa90aff6731821cc39226fb8933c8e8ac96a00cff4c48b9d0c = $this->env->getExtension("native_profiler");
        $__internal_890ad2639fce1eaa90aff6731821cc39226fb8933c8e8ac96a00cff4c48b9d0c->enter($__internal_890ad2639fce1eaa90aff6731821cc39226fb8933c8e8ac96a00cff4c48b9d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_890ad2639fce1eaa90aff6731821cc39226fb8933c8e8ac96a00cff4c48b9d0c->leave($__internal_890ad2639fce1eaa90aff6731821cc39226fb8933c8e8ac96a00cff4c48b9d0c_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ligne/new.html.twig";
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
/* Nouveau Ligne*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('Resources/public/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/*     <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'un nouveau Ligne </h3>*/
/* */
/* <form  style="margin-left:200px;" action="{{ path('ligne_create') }}"  class="form-horizontal col-md-6" method="post"></br>*/
/* */
/*     {% include "gestionStock/Ligne/form.html.twig" %}*/
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
