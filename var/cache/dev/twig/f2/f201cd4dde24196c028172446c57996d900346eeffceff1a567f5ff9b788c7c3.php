<?php

/* gestionStock/Service/new.html.twig */
class __TwigTemplate_8efa7ed579241ce20d88086eee888dea6d2a845c1632f87db750c87d7695593e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Service/new.html.twig", 1);
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
        $__internal_579ef5ce3c24cb92c592aea82cad62d0b20c1491f7d40753b8450ae4dbc2ab51 = $this->env->getExtension("native_profiler");
        $__internal_579ef5ce3c24cb92c592aea82cad62d0b20c1491f7d40753b8450ae4dbc2ab51->enter($__internal_579ef5ce3c24cb92c592aea82cad62d0b20c1491f7d40753b8450ae4dbc2ab51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Service/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_579ef5ce3c24cb92c592aea82cad62d0b20c1491f7d40753b8450ae4dbc2ab51->leave($__internal_579ef5ce3c24cb92c592aea82cad62d0b20c1491f7d40753b8450ae4dbc2ab51_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_078431985a8672317cce3781736bd71e23e32cb271f900c9bbdf5b80fa01adc7 = $this->env->getExtension("native_profiler");
        $__internal_078431985a8672317cce3781736bd71e23e32cb271f900c9bbdf5b80fa01adc7->enter($__internal_078431985a8672317cce3781736bd71e23e32cb271f900c9bbdf5b80fa01adc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Nouveau Service
";
        
        $__internal_078431985a8672317cce3781736bd71e23e32cb271f900c9bbdf5b80fa01adc7->leave($__internal_078431985a8672317cce3781736bd71e23e32cb271f900c9bbdf5b80fa01adc7_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_804be1c43ae5a772d71ff3e248d2e4d083b01ed16020926a21fdd75658124820 = $this->env->getExtension("native_profiler");
        $__internal_804be1c43ae5a772d71ff3e248d2e4d083b01ed16020926a21fdd75658124820->enter($__internal_804be1c43ae5a772d71ff3e248d2e4d083b01ed16020926a21fdd75658124820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_804be1c43ae5a772d71ff3e248d2e4d083b01ed16020926a21fdd75658124820->leave($__internal_804be1c43ae5a772d71ff3e248d2e4d083b01ed16020926a21fdd75658124820_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_be047dccef6244e640a7a00893a676b8ee4abc3706aef213153654f5d9b81bfc = $this->env->getExtension("native_profiler");
        $__internal_be047dccef6244e640a7a00893a676b8ee4abc3706aef213153654f5d9b81bfc->enter($__internal_be047dccef6244e640a7a00893a676b8ee4abc3706aef213153654f5d9b81bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-12\"  style=\"margin-left:50px;\">
    <h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'un nouveau Service </h3>

<form  style=\"margin-left:200px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("service_create");
        echo "\"  class=\"form-horizontal col-md-6\" method=\"post\"></br>

    ";
        // line 15
        $this->loadTemplate("gestionStock/Service/form.html.twig", "gestionStock/Service/new.html.twig", 15)->display($context);
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
        
        $__internal_be047dccef6244e640a7a00893a676b8ee4abc3706aef213153654f5d9b81bfc->leave($__internal_be047dccef6244e640a7a00893a676b8ee4abc3706aef213153654f5d9b81bfc_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff99bb8603daf107d29f7f36e5d43286556ac03fb63b80f3d8271f02f9c5ebbc = $this->env->getExtension("native_profiler");
        $__internal_ff99bb8603daf107d29f7f36e5d43286556ac03fb63b80f3d8271f02f9c5ebbc->enter($__internal_ff99bb8603daf107d29f7f36e5d43286556ac03fb63b80f3d8271f02f9c5ebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ff99bb8603daf107d29f7f36e5d43286556ac03fb63b80f3d8271f02f9c5ebbc->leave($__internal_ff99bb8603daf107d29f7f36e5d43286556ac03fb63b80f3d8271f02f9c5ebbc_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Service/new.html.twig";
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
/* Nouveau Service*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('Resources/public/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12"  style="margin-left:50px;">*/
/*     <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'un nouveau Service </h3>*/
/* */
/* <form  style="margin-left:200px;" action="{{ path('service_create') }}"  class="form-horizontal col-md-6" method="post"></br>*/
/* */
/*     {% include "gestionStock/Service/form.html.twig" %}*/
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
