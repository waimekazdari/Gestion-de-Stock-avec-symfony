<?php

/* gestionStock/Entree/show.html.twig */
class __TwigTemplate_61dc83de53978489993695b2f09ec0bf71bbc83bf076ae55cf9131236d4ccee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Entree/show.html.twig", 1);
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
        $__internal_0d2d81921288ab311f9c0e694d959cfd796a456e651868499686cbfec29c82b4 = $this->env->getExtension("native_profiler");
        $__internal_0d2d81921288ab311f9c0e694d959cfd796a456e651868499686cbfec29c82b4->enter($__internal_0d2d81921288ab311f9c0e694d959cfd796a456e651868499686cbfec29c82b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Entree/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2d81921288ab311f9c0e694d959cfd796a456e651868499686cbfec29c82b4->leave($__internal_0d2d81921288ab311f9c0e694d959cfd796a456e651868499686cbfec29c82b4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b025085c6c0f49c42ec3e5a6c2ac4589cef6238e453fd5fd47e80227669094b = $this->env->getExtension("native_profiler");
        $__internal_1b025085c6c0f49c42ec3e5a6c2ac4589cef6238e453fd5fd47e80227669094b->enter($__internal_1b025085c6c0f49c42ec3e5a6c2ac4589cef6238e453fd5fd47e80227669094b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Entree
";
        
        $__internal_1b025085c6c0f49c42ec3e5a6c2ac4589cef6238e453fd5fd47e80227669094b->leave($__internal_1b025085c6c0f49c42ec3e5a6c2ac4589cef6238e453fd5fd47e80227669094b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d85c7868f071b575b138f7e116cd611d5a5cf07bae62fa074f078710c90f21c = $this->env->getExtension("native_profiler");
        $__internal_5d85c7868f071b575b138f7e116cd611d5a5cf07bae62fa074f078710c90f21c->enter($__internal_5d85c7868f071b575b138f7e116cd611d5a5cf07bae62fa074f078710c90f21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entree_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<div style=\"margin-left:100px; margin-top:100px; width:2700px;\">

<div class=\"row\">
<div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Informations de l'Entree</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>La Référence de l'Entree :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ref", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>La date de l'Entree :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d/m/y"), "html", null, true);
        echo "</li>
          <br/>
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span>Les Articles</h4>
      </header>
      <ul class=\"list-group\">
      <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th>Nom Article</th>
                <th>Référence de l'Article</th>
                <th>Quantite</th>
            </tr>
            </thead>
            <tbody>
        ";
        // line 42
        $this->loadTemplate("gestionStock/Entree/formAr_entree.html.twig", "gestionStock/Entree/show.html.twig", 42)->display($context);
        // line 43
        echo "            </tbody>
      </table>
        </ul>
    </div>
</div>
</div>
</div>
<form id=\"deleteForm\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entree_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form> 
";
        
        $__internal_5d85c7868f071b575b138f7e116cd611d5a5cf07bae62fa074f078710c90f21c->leave($__internal_5d85c7868f071b575b138f7e116cd611d5a5cf07bae62fa074f078710c90f21c_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_454ca34e00be39db6bb844858d9df17f8799c6959f211f4d0d585d070b33087a = $this->env->getExtension("native_profiler");
        $__internal_454ca34e00be39db6bb844858d9df17f8799c6959f211f4d0d585d070b33087a->enter($__internal_454ca34e00be39db6bb844858d9df17f8799c6959f211f4d0d585d070b33087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
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
        
        $__internal_454ca34e00be39db6bb844858d9df17f8799c6959f211f4d0d585d070b33087a->leave($__internal_454ca34e00be39db6bb844858d9df17f8799c6959f211f4d0d585d070b33087a_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Entree/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 55,  128 => 54,  118 => 51,  114 => 50,  105 => 43,  103 => 42,  85 => 27,  81 => 26,  64 => 12,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Entree*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('entree_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <div style="margin-left:100px; margin-top:100px; width:2700px;">*/
/* */
/* <div class="row">*/
/* <div class="col-md-4">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span>Informations de l'Entree</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>La Référence de l'Entree :</strong> {{ entity.ref }}</li>*/
/*           <li class="list-group-item"><strong>La date de l'Entree :</strong> {{ entity.date|date("d/m/y")}}</li>*/
/*           <br/>*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span>Les Articles</h4>*/
/*       </header>*/
/*       <ul class="list-group">*/
/*       <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Nom Article</th>*/
/*                 <th>Référence de l'Article</th>*/
/*                 <th>Quantite</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*         {% include "gestionStock/Entree/formAr_entree.html.twig"%}*/
/*             </tbody>*/
/*       </table>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <form id="deleteForm" action="{{ path('entree_delete', { 'id': entity.id }) }}" method="POST">*/
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
