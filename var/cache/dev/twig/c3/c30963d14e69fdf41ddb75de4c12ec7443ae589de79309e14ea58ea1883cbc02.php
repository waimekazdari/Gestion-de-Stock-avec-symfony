<?php

/* gestionStock/Article/new.html.twig */
class __TwigTemplate_cfcab241f25fff58e1451370947e2231375f2a9c65e260d891c79433e254ef09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Article/new.html.twig", 1);
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
        $__internal_6e680cb623a9e1949ebb6c30de0c8317425d1edc28b5b7d273ef5bb13e2b4cac = $this->env->getExtension("native_profiler");
        $__internal_6e680cb623a9e1949ebb6c30de0c8317425d1edc28b5b7d273ef5bb13e2b4cac->enter($__internal_6e680cb623a9e1949ebb6c30de0c8317425d1edc28b5b7d273ef5bb13e2b4cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e680cb623a9e1949ebb6c30de0c8317425d1edc28b5b7d273ef5bb13e2b4cac->leave($__internal_6e680cb623a9e1949ebb6c30de0c8317425d1edc28b5b7d273ef5bb13e2b4cac_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eed6642c8a24dbe042d41a6be46ee5b946fa98f706235569253846acd9bd01a9 = $this->env->getExtension("native_profiler");
        $__internal_eed6642c8a24dbe042d41a6be46ee5b946fa98f706235569253846acd9bd01a9->enter($__internal_eed6642c8a24dbe042d41a6be46ee5b946fa98f706235569253846acd9bd01a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nouveau Article
";
        
        $__internal_eed6642c8a24dbe042d41a6be46ee5b946fa98f706235569253846acd9bd01a9->leave($__internal_eed6642c8a24dbe042d41a6be46ee5b946fa98f706235569253846acd9bd01a9_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c237d4b436d41a2e430d7551556d952ae2aa6ea8eba3f4051216c410da0af8b5 = $this->env->getExtension("native_profiler");
        $__internal_c237d4b436d41a2e430d7551556d952ae2aa6ea8eba3f4051216c410da0af8b5->enter($__internal_c237d4b436d41a2e430d7551556d952ae2aa6ea8eba3f4051216c410da0af8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_c237d4b436d41a2e430d7551556d952ae2aa6ea8eba3f4051216c410da0af8b5->leave($__internal_c237d4b436d41a2e430d7551556d952ae2aa6ea8eba3f4051216c410da0af8b5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_408a4c9afc08ee640731361a19fa8caa8d0658a871c8fb7c9293e5e72677cdc8 = $this->env->getExtension("native_profiler");
        $__internal_408a4c9afc08ee640731361a19fa8caa8d0658a871c8fb7c9293e5e72677cdc8->enter($__internal_408a4c9afc08ee640731361a19fa8caa8d0658a871c8fb7c9293e5e72677cdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
    <h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'un nouveau Article </h3>

<form  style=\"margin-left:200px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("article_create");
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>

    ";
        // line 15
        $this->loadTemplate("gestionStock/Article/form.html.twig", "gestionStock/Article/new.html.twig", 15)->display($context);
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
        
        $__internal_408a4c9afc08ee640731361a19fa8caa8d0658a871c8fb7c9293e5e72677cdc8->leave($__internal_408a4c9afc08ee640731361a19fa8caa8d0658a871c8fb7c9293e5e72677cdc8_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e86ac717b2e8a2c0675a6fa7883b8b7ab3407976148abb54f01ba97d6fe248d = $this->env->getExtension("native_profiler");
        $__internal_3e86ac717b2e8a2c0675a6fa7883b8b7ab3407976148abb54f01ba97d6fe248d->enter($__internal_3e86ac717b2e8a2c0675a6fa7883b8b7ab3407976148abb54f01ba97d6fe248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3e86ac717b2e8a2c0675a6fa7883b8b7ab3407976148abb54f01ba97d6fe248d->leave($__internal_3e86ac717b2e8a2c0675a6fa7883b8b7ab3407976148abb54f01ba97d6fe248d_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Article/new.html.twig";
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
/* Nouveau Article*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('Resources/public/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/*     <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'un nouveau Article </h3>*/
/* */
/* <form  style="margin-left:200px;" action="{{ path('article_create') }}"  class="form-horizontal col-md-6" method="post"></br>*/
/* */
/*     {% include "gestionStock/Article/form.html.twig" %}*/
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
