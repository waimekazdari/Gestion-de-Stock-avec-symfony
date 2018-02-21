<?php

/* gestionStock/Departement/ajaxliste.html.twig */
class __TwigTemplate_5d9f66eb5c244b63f01a7f0e35c9f46625f3d423c1f664512b7997bd72e4460f extends Twig_Template
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
        $__internal_0f32fbd32c9bfdfa4e5b4c5d7bffc25330a0488d0c0da3228cc39ce99ed32613 = $this->env->getExtension("native_profiler");
        $__internal_0f32fbd32c9bfdfa4e5b4c5d7bffc25330a0488d0c0da3228cc39ce99ed32613->enter($__internal_0f32fbd32c9bfdfa4e5b4c5d7bffc25330a0488d0c0da3228cc39ce99ed32613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Departement/ajaxliste.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "    <tr>
        <td class=\"hidden-print\"><input type=\"checkbox\" name=\"entities[]\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"></td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libele", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
            </div>
        </td> 
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/Departement/ajaxliste.html.twig", 14)->display($context);
        // line 15
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_0f32fbd32c9bfdfa4e5b4c5d7bffc25330a0488d0c0da3228cc39ce99ed32613->leave($__internal_0f32fbd32c9bfdfa4e5b4c5d7bffc25330a0488d0c0da3228cc39ce99ed32613_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Departement/ajaxliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  57 => 14,  54 => 13,  43 => 8,  39 => 7,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entities %}*/
/*     <tr>*/
/*         <td class="hidden-print"><input type="checkbox" name="entities[]" value="{{ entity.id }}"></td>*/
/*         <td>{{ entity.libele }}</td>*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('departement_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*                 <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('departement_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
/*             </div>*/
/*         </td> */
/*     </tr>*/
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
