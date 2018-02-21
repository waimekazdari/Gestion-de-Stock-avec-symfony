<?php

/* gestionStock/Expression_besoin/ajaxliste.html.twig */
class __TwigTemplate_8f72b94cb40732d64d9929f48c803cc5fe04ff7a2740afede57ea35e04cf6a2a extends Twig_Template
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
        $__internal_609801809c4d615f30ccd4977c05e7889e6d929e4bba28ab44fba9963246e749 = $this->env->getExtension("native_profiler");
        $__internal_609801809c4d615f30ccd4977c05e7889e6d929e4bba28ab44fba9963246e749->enter($__internal_609801809c4d615f30ccd4977c05e7889e6d929e4bba28ab44fba9963246e749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/ajaxliste.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expression_besoin_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/Expression_besoin/ajaxliste.html.twig", 19)->display($context);
        // line 20
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_609801809c4d615f30ccd4977c05e7889e6d929e4bba28ab44fba9963246e749->leave($__internal_609801809c4d615f30ccd4977c05e7889e6d929e4bba28ab44fba9963246e749_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/ajaxliste.html.twig";
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
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('expression_besoin_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
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
