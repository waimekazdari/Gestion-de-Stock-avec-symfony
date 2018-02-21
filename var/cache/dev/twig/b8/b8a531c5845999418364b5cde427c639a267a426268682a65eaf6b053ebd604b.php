<?php

/* gestionStock/Fournisseur/new.html.twig */
class __TwigTemplate_7b3b7469e3357a23ad9763a62b01c9afde93b202334d622e05b3e92230faf801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Fournisseur/new.html.twig", 1);
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
        $__internal_7e0081d1f1aca2689273f5e12b1afdd4d1658779e304bab31537dece54406dc6 = $this->env->getExtension("native_profiler");
        $__internal_7e0081d1f1aca2689273f5e12b1afdd4d1658779e304bab31537dece54406dc6->enter($__internal_7e0081d1f1aca2689273f5e12b1afdd4d1658779e304bab31537dece54406dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Fournisseur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0081d1f1aca2689273f5e12b1afdd4d1658779e304bab31537dece54406dc6->leave($__internal_7e0081d1f1aca2689273f5e12b1afdd4d1658779e304bab31537dece54406dc6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_736f7983660becf7ba96b23479386338a360c9af56efd40c4a59da0c042c8005 = $this->env->getExtension("native_profiler");
        $__internal_736f7983660becf7ba96b23479386338a360c9af56efd40c4a59da0c042c8005->enter($__internal_736f7983660becf7ba96b23479386338a360c9af56efd40c4a59da0c042c8005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nouveau Fournisseur
";
        
        $__internal_736f7983660becf7ba96b23479386338a360c9af56efd40c4a59da0c042c8005->leave($__internal_736f7983660becf7ba96b23479386338a360c9af56efd40c4a59da0c042c8005_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_3ad3b9bc1ac045e4157f033f339d90f0e1ac4ad99b44c7daed741231a2f476d9 = $this->env->getExtension("native_profiler");
        $__internal_3ad3b9bc1ac045e4157f033f339d90f0e1ac4ad99b44c7daed741231a2f476d9->enter($__internal_3ad3b9bc1ac045e4157f033f339d90f0e1ac4ad99b44c7daed741231a2f476d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_3ad3b9bc1ac045e4157f033f339d90f0e1ac4ad99b44c7daed741231a2f476d9->leave($__internal_3ad3b9bc1ac045e4157f033f339d90f0e1ac4ad99b44c7daed741231a2f476d9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_719b4dabe3b43cb575e152783bdf1d74e40807a6996f1e125feeceee63db7742 = $this->env->getExtension("native_profiler");
        $__internal_719b4dabe3b43cb575e152783bdf1d74e40807a6996f1e125feeceee63db7742->enter($__internal_719b4dabe3b43cb575e152783bdf1d74e40807a6996f1e125feeceee63db7742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
    <h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'un nouveau Fournisseur </h3>

<form  style=\"margin-left:200px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fournisseur_create");
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>

    ";
        // line 15
        $this->loadTemplate("gestionStock/Fournisseur/form.html.twig", "gestionStock/Fournisseur/new.html.twig", 15)->display($context);
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
        
        $__internal_719b4dabe3b43cb575e152783bdf1d74e40807a6996f1e125feeceee63db7742->leave($__internal_719b4dabe3b43cb575e152783bdf1d74e40807a6996f1e125feeceee63db7742_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b301283b2bcd6d20edee79d247e3a56474edb91ee0e66062ce3f379e6bc4882 = $this->env->getExtension("native_profiler");
        $__internal_1b301283b2bcd6d20edee79d247e3a56474edb91ee0e66062ce3f379e6bc4882->enter($__internal_1b301283b2bcd6d20edee79d247e3a56474edb91ee0e66062ce3f379e6bc4882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1b301283b2bcd6d20edee79d247e3a56474edb91ee0e66062ce3f379e6bc4882->leave($__internal_1b301283b2bcd6d20edee79d247e3a56474edb91ee0e66062ce3f379e6bc4882_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Fournisseur/new.html.twig";
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
/* Nouveau Fournisseur*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('Resources/public/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/*     <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'un nouveau Fournisseur </h3>*/
/* */
/* <form  style="margin-left:200px;" action="{{ path('fournisseur_create') }}"  class="form-horizontal col-md-6" method="post"></br>*/
/* */
/*     {% include "gestionStock/Fournisseur/form.html.twig" %}*/
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
