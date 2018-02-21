<?php

/* gestionStock/Category/show.html.twig */
class __TwigTemplate_da85e324f80cc15efbc78a716a7a9237af00222a0ad5c5cfc513ff0682526a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Category/show.html.twig", 1);
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
        $__internal_fd8492675fdba1f607733a73cc6953d994dbc1e49067c54f3984cb1f56ff58d9 = $this->env->getExtension("native_profiler");
        $__internal_fd8492675fdba1f607733a73cc6953d994dbc1e49067c54f3984cb1f56ff58d9->enter($__internal_fd8492675fdba1f607733a73cc6953d994dbc1e49067c54f3984cb1f56ff58d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd8492675fdba1f607733a73cc6953d994dbc1e49067c54f3984cb1f56ff58d9->leave($__internal_fd8492675fdba1f607733a73cc6953d994dbc1e49067c54f3984cb1f56ff58d9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fa10cde9a62c91265fcc2cf60ebaae866760d769ff3e98abd642dfabfed5581 = $this->env->getExtension("native_profiler");
        $__internal_2fa10cde9a62c91265fcc2cf60ebaae866760d769ff3e98abd642dfabfed5581->enter($__internal_2fa10cde9a62c91265fcc2cf60ebaae866760d769ff3e98abd642dfabfed5581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Category
";
        
        $__internal_2fa10cde9a62c91265fcc2cf60ebaae866760d769ff3e98abd642dfabfed5581->leave($__internal_2fa10cde9a62c91265fcc2cf60ebaae866760d769ff3e98abd642dfabfed5581_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcc0f6a335f9f90ccc5ca5218b5095dc31d99962a1e450b318b8d68c21ddb3ad = $this->env->getExtension("native_profiler");
        $__internal_fcc0f6a335f9f90ccc5ca5218b5095dc31d99962a1e450b318b8d68c21ddb3ad->enter($__internal_fcc0f6a335f9f90ccc5ca5218b5095dc31d99962a1e450b318b8d68c21ddb3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:220px; width:2000px;\">
<h3 ><span class=\"glyphicon glyphicon-share-alt\"></span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libele", array()), "html", null, true);
        echo "</h3>

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Category</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Code de la Catégorie :</strong>  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code", array()), "html", null, true);
        echo " </li>
          <li class=\"list-group-item\"><strong>Catégorie :</strong> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libele", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_fcc0f6a335f9f90ccc5ca5218b5095dc31d99962a1e450b318b8d68c21ddb3ad->leave($__internal_fcc0f6a335f9f90ccc5ca5218b5095dc31d99962a1e450b318b8d68c21ddb3ad_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_466622b08405adcb8b8b153647e6496b5449d5dbeaf95fdb504d6bba73151d5e = $this->env->getExtension("native_profiler");
        $__internal_466622b08405adcb8b8b153647e6496b5449d5dbeaf95fdb504d6bba73151d5e->enter($__internal_466622b08405adcb8b8b153647e6496b5449d5dbeaf95fdb504d6bba73151d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
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
        
        $__internal_466622b08405adcb8b8b153647e6496b5449d5dbeaf95fdb504d6bba73151d5e->leave($__internal_466622b08405adcb8b8b153647e6496b5449d5dbeaf95fdb504d6bba73151d5e_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  112 => 38,  102 => 35,  98 => 34,  89 => 28,  85 => 27,  73 => 18,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Category*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('category_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:220px; width:2000px;">*/
/* <h3 ><span class="glyphicon glyphicon-share-alt"></span> {{ entity.libele }}</h3>*/
/* */
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Category</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Code de la Catégorie :</strong>  {{ entity.code }} </li>*/
/*           <li class="list-group-item"><strong>Catégorie :</strong> {{ entity.libele }}</li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('category_delete', { 'id': entity.id }) }}" method="POST">*/
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
