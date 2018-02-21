<?php

/* gestionStock/MyProfile/show.html.twig */
class __TwigTemplate_00ed2c15520681f797a5af8b77d2864ea07c6c529cf752522863fee7074bb8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/MyProfile/show.html.twig", 1);
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
        $__internal_af08bbc46e055111899280540b9006d0575bc0b219249da07de4ae40c6698aae = $this->env->getExtension("native_profiler");
        $__internal_af08bbc46e055111899280540b9006d0575bc0b219249da07de4ae40c6698aae->enter($__internal_af08bbc46e055111899280540b9006d0575bc0b219249da07de4ae40c6698aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/MyProfile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af08bbc46e055111899280540b9006d0575bc0b219249da07de4ae40c6698aae->leave($__internal_af08bbc46e055111899280540b9006d0575bc0b219249da07de4ae40c6698aae_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4ee82a0d3e34f323c7e071605f96fdd68162cd2d8960d75e23ea8b35638ca5f = $this->env->getExtension("native_profiler");
        $__internal_c4ee82a0d3e34f323c7e071605f96fdd68162cd2d8960d75e23ea8b35638ca5f->enter($__internal_c4ee82a0d3e34f323c7e071605f96fdd68162cd2d8960d75e23ea8b35638ca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Show Employe
";
        
        $__internal_c4ee82a0d3e34f323c7e071605f96fdd68162cd2d8960d75e23ea8b35638ca5f->leave($__internal_c4ee82a0d3e34f323c7e071605f96fdd68162cd2d8960d75e23ea8b35638ca5f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b1bb129988c6552bd9af159a1e4d05195b18e6a8b19c0211536dad306772d2 = $this->env->getExtension("native_profiler");
        $__internal_25b1bb129988c6552bd9af159a1e4d05195b18e6a8b19c0211536dad306772d2->enter($__internal_25b1bb129988c6552bd9af159a1e4d05195b18e6a8b19c0211536dad306772d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h3><span class=\"glyphicon glyphicon-user\"></span> ";
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
          <li class=\"list-group-item\"><strong>Email  :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Nom Complet :</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "nom", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>CIN  :</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "cin", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Télé  :</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "tel", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Adresse :</strong> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "adresse", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>Service  :</strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "service", array()), "libele", array()), "html", null, true);
        echo "</li>
        <header>
          <h4><span class=\"glyphicon glyphicon-file\"></span> Information du compte </h4>
      </header>
       <li class=\"list-group-item\"><strong>Username :</strong>  ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo " </li>
       <li class=\"list-group-item\"><strong>Dérniere Activité :</strong>  ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastActivity", array()), "d/m/Y"), "html", null, true);
        echo " </li>

        </br>

          <li class=\"list-group-item\"><strong>Ajouté le :</strong> ";
        // line 30
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
        
        $__internal_25b1bb129988c6552bd9af159a1e4d05195b18e6a8b19c0211536dad306772d2->leave($__internal_25b1bb129988c6552bd9af159a1e4d05195b18e6a8b19c0211536dad306772d2_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2094780b4590cbef0a9102d2bc3283f6bb553675b83443ffb5b5453d5cfebf1b = $this->env->getExtension("native_profiler");
        $__internal_2094780b4590cbef0a9102d2bc3283f6bb553675b83443ffb5b5453d5cfebf1b->enter($__internal_2094780b4590cbef0a9102d2bc3283f6bb553675b83443ffb5b5453d5cfebf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
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
        
        $__internal_2094780b4590cbef0a9102d2bc3283f6bb553675b83443ffb5b5453d5cfebf1b->leave($__internal_2094780b4590cbef0a9102d2bc3283f6bb553675b83443ffb5b5453d5cfebf1b_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/MyProfile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  124 => 39,  107 => 30,  100 => 26,  96 => 25,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Show Employe*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-user"></span> {{ entity.employe.nom }}</h3>*/
/* </br>*/
/* <div class="row">*/
/* 	<div class="col-md-12">*/
/*     <div class="box">*/
/*       <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Information générale</h4>*/
/*       </header>*/
/*         <ul class="list-group">*/
/*           <li class="list-group-item"><strong>Email  :</strong> {{ entity.email }}</li>*/
/*           <li class="list-group-item"><strong>Nom Complet :</strong> {{ entity.employe.nom }}</li>*/
/*           <li class="list-group-item"><strong>CIN  :</strong> {{ entity.employe.cin }}</li>*/
/*           <li class="list-group-item"><strong>Télé  :</strong> {{ entity.employe.tel }}</li>*/
/*           <li class="list-group-item"><strong>Adresse :</strong> {{ entity.employe.adresse }}</li>*/
/*           <li class="list-group-item"><strong>Service  :</strong> {{ entity.service.libele }}</li>*/
/*         <header>*/
/*           <h4><span class="glyphicon glyphicon-file"></span> Information du compte </h4>*/
/*       </header>*/
/*        <li class="list-group-item"><strong>Username :</strong>  {{ entity.username }} </li>*/
/*        <li class="list-group-item"><strong>Dérniere Activité :</strong>  {{ entity.lastActivity|date('d/m/Y') }} </li>*/
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
