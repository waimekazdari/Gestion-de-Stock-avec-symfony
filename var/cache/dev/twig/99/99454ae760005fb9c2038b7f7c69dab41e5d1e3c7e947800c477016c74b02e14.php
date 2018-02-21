<?php

/* gestionStock/Ar_sortie/new.html.twig */
class __TwigTemplate_49c04b533cc1649e960b3d72f7c4b4ed06756d7b598ea379a6ea363065366340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_sortie/new.html.twig", 1);
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
        $__internal_a39a7035aae87d3346376db16432c818e3d8f6fbb945ebedb9094544f82871f2 = $this->env->getExtension("native_profiler");
        $__internal_a39a7035aae87d3346376db16432c818e3d8f6fbb945ebedb9094544f82871f2->enter($__internal_a39a7035aae87d3346376db16432c818e3d8f6fbb945ebedb9094544f82871f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_sortie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39a7035aae87d3346376db16432c818e3d8f6fbb945ebedb9094544f82871f2->leave($__internal_a39a7035aae87d3346376db16432c818e3d8f6fbb945ebedb9094544f82871f2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_520ebffc2db904d4ededc22985c8233545f0b90db2ed0eeb92958708663c31b7 = $this->env->getExtension("native_profiler");
        $__internal_520ebffc2db904d4ededc22985c8233545f0b90db2ed0eeb92958708663c31b7->enter($__internal_520ebffc2db904d4ededc22985c8233545f0b90db2ed0eeb92958708663c31b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nouvelle Sortie Article
";
        
        $__internal_520ebffc2db904d4ededc22985c8233545f0b90db2ed0eeb92958708663c31b7->leave($__internal_520ebffc2db904d4ededc22985c8233545f0b90db2ed0eeb92958708663c31b7_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b6ad8b033934d7cfdd1de99255f9a5a5b0b4fd3e499ba1586815308b1475617c = $this->env->getExtension("native_profiler");
        $__internal_b6ad8b033934d7cfdd1de99255f9a5a5b0b4fd3e499ba1586815308b1475617c->enter($__internal_b6ad8b033934d7cfdd1de99255f9a5a5b0b4fd3e499ba1586815308b1475617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_b6ad8b033934d7cfdd1de99255f9a5a5b0b4fd3e499ba1586815308b1475617c->leave($__internal_b6ad8b033934d7cfdd1de99255f9a5a5b0b4fd3e499ba1586815308b1475617c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec466f62aedf3199ad51d40ab4f3baa5b516489e9953e397156849059f89b1d3 = $this->env->getExtension("native_profiler");
        $__internal_ec466f62aedf3199ad51d40ab4f3baa5b516489e9953e397156849059f89b1d3->enter($__internal_ec466f62aedf3199ad51d40ab4f3baa5b516489e9953e397156849059f89b1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
    <h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'une nouvelle Sortie d'Article </h3>

<form  style=\"margin-left:200px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ar_sortie_create");
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>

    ";
        // line 15
        $this->loadTemplate("gestionStock/Ar_sortie/form.html.twig", "gestionStock/Ar_sortie/new.html.twig", 15)->display($context);
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
        
        $__internal_ec466f62aedf3199ad51d40ab4f3baa5b516489e9953e397156849059f89b1d3->leave($__internal_ec466f62aedf3199ad51d40ab4f3baa5b516489e9953e397156849059f89b1d3_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44e353627068d8df80cb7e10b59912dfdbbd2808767a365f859826d01c5980ae = $this->env->getExtension("native_profiler");
        $__internal_44e353627068d8df80cb7e10b59912dfdbbd2808767a365f859826d01c5980ae->enter($__internal_44e353627068d8df80cb7e10b59912dfdbbd2808767a365f859826d01c5980ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_44e353627068d8df80cb7e10b59912dfdbbd2808767a365f859826d01c5980ae->leave($__internal_44e353627068d8df80cb7e10b59912dfdbbd2808767a365f859826d01c5980ae_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_sortie/new.html.twig";
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
/* Nouvelle Sortie Article*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('Resources/public/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/*     <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'une nouvelle Sortie d'Article </h3>*/
/* */
/* <form  style="margin-left:200px;" action="{{ path('ar_sortie_create') }}"  class="form-horizontal col-md-6" method="post"></br>*/
/* */
/*     {% include "gestionStock/Ar_sortie/form.html.twig" %}*/
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
