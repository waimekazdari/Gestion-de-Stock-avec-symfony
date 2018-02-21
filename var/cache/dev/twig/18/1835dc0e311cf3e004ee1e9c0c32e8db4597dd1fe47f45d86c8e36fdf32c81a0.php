<?php

/* gestionStock/admin/show.html.twig */
class __TwigTemplate_274f043f83821ebac0e092df8a096f716a576e9771d3e24b4af7d574af2a7aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/admin/show.html.twig", 1);
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
        $__internal_0d5b2586cede4f2dd2808c8b9b37e871ef488488a65b77d9f99d995d5c3c4c07 = $this->env->getExtension("native_profiler");
        $__internal_0d5b2586cede4f2dd2808c8b9b37e871ef488488a65b77d9f99d995d5c3c4c07->enter($__internal_0d5b2586cede4f2dd2808c8b9b37e871ef488488a65b77d9f99d995d5c3c4c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/admin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5b2586cede4f2dd2808c8b9b37e871ef488488a65b77d9f99d995d5c3c4c07->leave($__internal_0d5b2586cede4f2dd2808c8b9b37e871ef488488a65b77d9f99d995d5c3c4c07_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffc7450305a7310a4df020927b95ca06358179208ef4a79d8f11ea1162a6fd45 = $this->env->getExtension("native_profiler");
        $__internal_ffc7450305a7310a4df020927b95ca06358179208ef4a79d8f11ea1162a6fd45->enter($__internal_ffc7450305a7310a4df020927b95ca06358179208ef4a79d8f11ea1162a6fd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Employe
";
        
        $__internal_ffc7450305a7310a4df020927b95ca06358179208ef4a79d8f11ea1162a6fd45->leave($__internal_ffc7450305a7310a4df020927b95ca06358179208ef4a79d8f11ea1162a6fd45_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c4f5ef60f2c07e0948741bfd2527c406fe76a20f184be6c5e9c5ead4f859a4 = $this->env->getExtension("native_profiler");
        $__internal_90c4f5ef60f2c07e0948741bfd2527c406fe76a20f184be6c5e9c5ead4f859a4->enter($__internal_90c4f5ef60f2c07e0948741bfd2527c406fe76a20f184be6c5e9c5ead4f859a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_edit_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
<h3><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "nom", array()), "html", null, true);
        echo "</h3>
</br>
<div class=\"row\">
\t<div class=\"col-md-12\">
    <div class=\"box\">
      <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Information générale</h4>
      </header>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>Email de l'Employe :</strong> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Nom de l'Employe :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "nom", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>CIN de l'Employe :</strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "cin", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Tele de l'Employe :</strong> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "tel", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Adresse de l'Employe :</strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "adresse", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Service de l'Employe :</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "service", array()), "libele", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Roles de l'Employe :</strong>";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["r"], "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</li>
        <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Information du compte </h4>
      </header>
       <li class=\"list-group-item\"><strong>Username de l'Employe :</strong>  ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo " </li>
       <li class=\"list-group-item\"><strong>Activation du compte :</strong> ";
        // line 39
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive", array()) == 1)) {
            echo " Active ";
        } else {
            echo " Désactivé ";
        }
        echo "</li>

        </br>

          <li class=\"list-group-item\"><strong>Ajouté le :</strong> ";
        // line 43
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created", array()), "d/m/Y"), "html", null, true);
        }
        echo "</li>
        </ul>
    </div>
\t</div>
\t
</div>

";
        
        $__internal_90c4f5ef60f2c07e0948741bfd2527c406fe76a20f184be6c5e9c5ead4f859a4->leave($__internal_90c4f5ef60f2c07e0948741bfd2527c406fe76a20f184be6c5e9c5ead4f859a4_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e0033901c47bff4b46dcdde0e4c7e0b550f4f6a6367dcbf0dc7e11c7871cf43 = $this->env->getExtension("native_profiler");
        $__internal_9e0033901c47bff4b46dcdde0e4c7e0b550f4f6a6367dcbf0dc7e11c7871cf43->enter($__internal_9e0033901c47bff4b46dcdde0e4c7e0b550f4f6a6367dcbf0dc7e11c7871cf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
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
        
        $__internal_9e0033901c47bff4b46dcdde0e4c7e0b550f4f6a6367dcbf0dc7e11c7871cf43->leave($__internal_9e0033901c47bff4b46dcdde0e4c7e0b550f4f6a6367dcbf0dc7e11c7871cf43_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  157 => 52,  140 => 43,  129 => 39,  125 => 38,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  73 => 19,  65 => 14,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Employe*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href="{{ path('ben_edit_user', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/* <h3><span class="glyphicon glyphicon-user"></span> {{ entity.employe.nom }}</h3>*/
/* </br>*/
/* <div class="row">*/
/* 	<div class="col-md-12">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Information générale</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Email de l'Employe :</strong> {{ entity.email }}</li>*/
/*           <li class="list-group-item"><strong>Nom de l'Employe :</strong> {{ entity.employe.nom }}</li>*/
/*           <li class="list-group-item"><strong>CIN de l'Employe :</strong> {{ entity.employe.cin }}</li>*/
/*           <li class="list-group-item"><strong>Tele de l'Employe :</strong> {{ entity.employe.tel }}</li>*/
/*           <li class="list-group-item"><strong>Adresse de l'Employe :</strong> {{ entity.employe.adresse }}</li>*/
/*           <li class="list-group-item"><strong>Service de l'Employe :</strong> {{ entity.service.libele }}</li>*/
/*           <li class="list-group-item"><strong>Roles de l'Employe :</strong>{% for r in entity.roles %} {{ r }} {% endfor%}</li>*/
/*         <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Information du compte </h4>*/
/*       </header>*/
/*        <li class="list-group-item"><strong>Username de l'Employe :</strong>  {{ entity.username }} </li>*/
/*        <li class="list-group-item"><strong>Activation du compte :</strong> {% if entity.isActive ==1 %} Active {% else%} Désactivé {% endif %}</li>*/
/* */
/*         </br>*/
/* */
/*           <li class="list-group-item"><strong>Ajouté le :</strong> {% if entity.created %}{{ entity.created|date('d/m/Y') }}{% endif %}</li>*/
/*         </ul>*/
/*     </div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* */
/* {% endblock body %}*/
/* */
/*  {% block javascripts %}*/
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
