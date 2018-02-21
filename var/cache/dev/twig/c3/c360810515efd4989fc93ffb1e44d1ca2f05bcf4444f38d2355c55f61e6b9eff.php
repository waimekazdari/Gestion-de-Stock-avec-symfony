<?php

/* gestionStock/Departement/show.html.twig */
class __TwigTemplate_c635d4feb014a3040d5ead0602b37f9d602aac8e7646d2c808d14549947731fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Departement/show.html.twig", 1);
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
        $__internal_465bf1e6f18076224a3d4d39517e901f7ba38989cb37310fb3d0fd79156b1560 = $this->env->getExtension("native_profiler");
        $__internal_465bf1e6f18076224a3d4d39517e901f7ba38989cb37310fb3d0fd79156b1560->enter($__internal_465bf1e6f18076224a3d4d39517e901f7ba38989cb37310fb3d0fd79156b1560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Departement/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465bf1e6f18076224a3d4d39517e901f7ba38989cb37310fb3d0fd79156b1560->leave($__internal_465bf1e6f18076224a3d4d39517e901f7ba38989cb37310fb3d0fd79156b1560_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_09dea09354c41220ba5ab301c7c9f2ddb2b03e394c3560e143e97c0dc31372c4 = $this->env->getExtension("native_profiler");
        $__internal_09dea09354c41220ba5ab301c7c9f2ddb2b03e394c3560e143e97c0dc31372c4->enter($__internal_09dea09354c41220ba5ab301c7c9f2ddb2b03e394c3560e143e97c0dc31372c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Département
";
        
        $__internal_09dea09354c41220ba5ab301c7c9f2ddb2b03e394c3560e143e97c0dc31372c4->leave($__internal_09dea09354c41220ba5ab301c7c9f2ddb2b03e394c3560e143e97c0dc31372c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf77be901204df1fefae74337e9d9f4c9653dce6566353b894818c6bf7543dd4 = $this->env->getExtension("native_profiler");
        $__internal_bf77be901204df1fefae74337e9d9f4c9653dce6566353b894818c6bf7543dd4->enter($__internal_bf77be901204df1fefae74337e9d9f4c9653dce6566353b894818c6bf7543dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:220px; width:2000px;\">
<br/><br/>
<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Département</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Nom de la Catégorie :</strong>  ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libele", array()), "html", null, true);
        echo " </li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_bf77be901204df1fefae74337e9d9f4c9653dce6566353b894818c6bf7543dd4->leave($__internal_bf77be901204df1fefae74337e9d9f4c9653dce6566353b894818c6bf7543dd4_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f27eae15304f51e43b03f8b75948c273a1329d32634a4e3bd76d14da0d7f96c = $this->env->getExtension("native_profiler");
        $__internal_4f27eae15304f51e43b03f8b75948c273a1329d32634a4e3bd76d14da0d7f96c->enter($__internal_4f27eae15304f51e43b03f8b75948c273a1329d32634a4e3bd76d14da0d7f96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
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
        
        $__internal_4f27eae15304f51e43b03f8b75948c273a1329d32634a4e3bd76d14da0d7f96c->leave($__internal_4f27eae15304f51e43b03f8b75948c273a1329d32634a4e3bd76d14da0d7f96c_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Departement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  104 => 36,  94 => 33,  90 => 32,  81 => 26,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Département*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('departement_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:220px; width:2000px;">*/
/* <br/><br/>*/
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Département</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Nom de la Catégorie :</strong>  {{ entity.libele }} </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('departement_delete', { 'id': entity.id }) }}" method="POST">*/
/*     {{ form_widget(delete_form) }}*/
/* </form> */
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*         $('#js-delete').on('click', function(){*/
/*             $('#deleteForm').submit();*/
/*             return false;*/
/*         });*/
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
