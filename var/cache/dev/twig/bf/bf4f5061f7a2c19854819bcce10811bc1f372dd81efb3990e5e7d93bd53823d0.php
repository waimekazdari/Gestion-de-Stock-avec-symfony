<?php

/* gestionStock/Category/new.html.twig */
class __TwigTemplate_9d51b3e5aa80b9eb5417b0f18451af5ef4a3413bb3c50bee3d7aec3db0b97fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Category/new.html.twig", 1);
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
        $__internal_9b380377f5a81ae42a09100b5dfdf971e51886dbfae6ad448146712c7cbb4b96 = $this->env->getExtension("native_profiler");
        $__internal_9b380377f5a81ae42a09100b5dfdf971e51886dbfae6ad448146712c7cbb4b96->enter($__internal_9b380377f5a81ae42a09100b5dfdf971e51886dbfae6ad448146712c7cbb4b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b380377f5a81ae42a09100b5dfdf971e51886dbfae6ad448146712c7cbb4b96->leave($__internal_9b380377f5a81ae42a09100b5dfdf971e51886dbfae6ad448146712c7cbb4b96_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f235c653aaa248919de00f8da6f4392b0fb11a2132a63e082c770150f9c681d = $this->env->getExtension("native_profiler");
        $__internal_9f235c653aaa248919de00f8da6f4392b0fb11a2132a63e082c770150f9c681d->enter($__internal_9f235c653aaa248919de00f8da6f4392b0fb11a2132a63e082c770150f9c681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nouvelle Catégorie
";
        
        $__internal_9f235c653aaa248919de00f8da6f4392b0fb11a2132a63e082c770150f9c681d->leave($__internal_9f235c653aaa248919de00f8da6f4392b0fb11a2132a63e082c770150f9c681d_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_304ba45d08fe9a218ae6948193c1267a564792dbad50183a34c3c7409e34dde2 = $this->env->getExtension("native_profiler");
        $__internal_304ba45d08fe9a218ae6948193c1267a564792dbad50183a34c3c7409e34dde2->enter($__internal_304ba45d08fe9a218ae6948193c1267a564792dbad50183a34c3c7409e34dde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_304ba45d08fe9a218ae6948193c1267a564792dbad50183a34c3c7409e34dde2->leave($__internal_304ba45d08fe9a218ae6948193c1267a564792dbad50183a34c3c7409e34dde2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6fdd0c5933176f8f445a44045e411e3d42ae03b39c512c02902ae300be14c8 = $this->env->getExtension("native_profiler");
        $__internal_fe6fdd0c5933176f8f445a44045e411e3d42ae03b39c512c02902ae300be14c8->enter($__internal_fe6fdd0c5933176f8f445a44045e411e3d42ae03b39c512c02902ae300be14c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
    <h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'une nouvelle Catégorie </h3>

<form  style=\"margin-left:200px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("category_create");
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>

    ";
        // line 15
        $this->loadTemplate("gestionStock/Category/form.html.twig", "gestionStock/Category/new.html.twig", 15)->display($context);
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
        
        $__internal_fe6fdd0c5933176f8f445a44045e411e3d42ae03b39c512c02902ae300be14c8->leave($__internal_fe6fdd0c5933176f8f445a44045e411e3d42ae03b39c512c02902ae300be14c8_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7356698fde52d22b252983c7060cea3737fc2cc70c91f18de0ec1701268e8b8 = $this->env->getExtension("native_profiler");
        $__internal_d7356698fde52d22b252983c7060cea3737fc2cc70c91f18de0ec1701268e8b8->enter($__internal_d7356698fde52d22b252983c7060cea3737fc2cc70c91f18de0ec1701268e8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d7356698fde52d22b252983c7060cea3737fc2cc70c91f18de0ec1701268e8b8->leave($__internal_d7356698fde52d22b252983c7060cea3737fc2cc70c91f18de0ec1701268e8b8_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Category/new.html.twig";
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
/* Nouvelle Catégorie*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('Resources/public/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/*     <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'une nouvelle Catégorie </h3>*/
/* */
/* <form  style="margin-left:200px;" action="{{ path('category_create') }}"  class="form-horizontal col-md-6" method="post"></br>*/
/* */
/*     {% include "gestionStock/Category/form.html.twig" %}*/
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
