<?php

/* gestionStock/admin/ajax_list.html.twig */
class __TwigTemplate_a1ac31f3a7d942dd1c2b06ca47948abb94449c21c6d1ae1bbbbd8632978dddeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5051d32eebc0061cf1f6a0b501cc00daa7e8878c8c17abe801aa7e23e03487 = $this->env->getExtension("native_profiler");
        $__internal_0a5051d32eebc0061cf1f6a0b501cc00daa7e8878c8c17abe801aa7e23e03487->enter($__internal_0a5051d32eebc0061cf1f6a0b501cc00daa7e8878c8c17abe801aa7e23e03487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/admin/ajax_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "  <tr>
    <td class=\"hidden-print\"><input type=\"checkbox\" name=\"entities[]\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"></td>
    <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "employe", array()), "nom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "employe", array()), "tel", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "employe", array()), "adresse", array()), "html", null, true);
            echo "</td>
    <td class=\"hidden-print\">
        <div class=\"text-center\">
            <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_show_user", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
            <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_edit_user", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
        </div>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/admin/ajax_list.html.twig", 17)->display($context);
        // line 18
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>
";
        
        $__internal_0a5051d32eebc0061cf1f6a0b501cc00daa7e8878c8c17abe801aa7e23e03487->leave($__internal_0a5051d32eebc0061cf1f6a0b501cc00daa7e8878c8c17abe801aa7e23e03487_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/admin/ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  69 => 17,  66 => 16,  55 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entities %}*/
/*   <tr>*/
/*     <td class="hidden-print"><input type="checkbox" name="entities[]" value="{{ entity.id }}"></td>*/
/*     <td>{{ entity.employe.nom }}</td>*/
/*     <td>{{ entity.employe.tel }}</td>*/
/*     <td>{{ entity.email }}</td>*/
/*     <td>{{ entity.employe.adresse}}</td>*/
/*     <td class="hidden-print">*/
/*         <div class="text-center">*/
/*             <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('ben_show_user', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*             <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('ben_edit_user', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
/*         </div>*/
/*     </td>*/
/*   </tr>*/
/* {% endfor %}*/
/* */
/* {% include "default/pagination.html.twig" %}*/
/* */
/* <script>   */
/* (function($) {*/
/* */
/*     /* tooltip *//* */
/*     $('a[data-toggle="tooltip"]').tooltip();*/
/* */
/* })(jQuery);*/
/* </script>*/
/* */
