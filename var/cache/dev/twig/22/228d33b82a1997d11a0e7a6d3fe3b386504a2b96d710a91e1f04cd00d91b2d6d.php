<?php

/* gestionStock/MesExpression_besoin/ajaxliste.html.twig */
class __TwigTemplate_e90e633a53d478e77b85902c8a35924d5f8d4fb7994f5a8bc07e8566aae3a018 extends Twig_Template
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
        $__internal_be036ce34987e0bbb456cd04349d698e408b92e204e097cdbdf2d396c16c79c9 = $this->env->getExtension("native_profiler");
        $__internal_be036ce34987e0bbb456cd04349d698e408b92e204e097cdbdf2d396c16c79c9->enter($__internal_be036ce34987e0bbb456cd04349d698e408b92e204e097cdbdf2d396c16c79c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/MesExpression_besoin/ajaxliste.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "employe", array()), "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEmission", array()), "d/m/y"), "html", null, true);
            echo "</td>
        ";
            // line 6
            if (($this->getAttribute($context["entity"], "accord", array()) == 0)) {
                // line 7
                echo "        <td>Non</td>
        ";
            } else {
                // line 9
                echo "        <td>Oui</td>
        ";
            }
            // line 11
            echo "        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mesExpression_besoin_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
            </div>
        </td> 
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/MesExpression_besoin/ajaxliste.html.twig", 19)->display($context);
        // line 20
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_be036ce34987e0bbb456cd04349d698e408b92e204e097cdbdf2d396c16c79c9->leave($__internal_be036ce34987e0bbb456cd04349d698e408b92e204e097cdbdf2d396c16c79c9_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/MesExpression_besoin/ajaxliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  69 => 19,  66 => 18,  55 => 13,  51 => 11,  47 => 9,  43 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entities %}*/
/*     <tr>*/
/*         <td class="hidden-print"><input type="checkbox" name="entities[]" value="{{ entity.id }}"></td>*/
/*         <td>{{ entity.employe.nom }}</td>*/
/*         <td>{{ entity.dateEmission|date("d/m/y") }}</td>*/
/*         {% if entity.accord == 0  %}*/
/*         <td>Non</td>*/
/*         {% else %}*/
/*         <td>Oui</td>*/
/*         {% endif%}*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('mesExpression_besoin_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
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
