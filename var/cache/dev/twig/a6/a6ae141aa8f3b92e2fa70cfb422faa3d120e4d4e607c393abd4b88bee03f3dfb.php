<?php

/* gestionStock/Ligne/ajaxliste.html.twig */
class __TwigTemplate_202cc470b199f81db44e0c8ff47e0074c21ada6cb699918c075755491bfa8dfa extends Twig_Template
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
        $__internal_7c1db5b322c6fc01e2972c3a75bd793db4520bab3e02323b9fd88e4d81b304eb = $this->env->getExtension("native_profiler");
        $__internal_7c1db5b322c6fc01e2972c3a75bd793db4520bab3e02323b9fd88e4d81b304eb->enter($__internal_7c1db5b322c6fc01e2972c3a75bd793db4520bab3e02323b9fd88e4d81b304eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ligne/ajaxliste.html.twig"));

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
        <td><a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraison_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "livraison", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "livraison", array()), "refMarche", array()), "html", null, true);
            echo "</a></td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "article", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "article", array()), "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantite", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ligne_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ligne_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/Ligne/ajaxliste.html.twig", 17)->display($context);
        // line 18
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_7c1db5b322c6fc01e2972c3a75bd793db4520bab3e02323b9fd88e4d81b304eb->leave($__internal_7c1db5b322c6fc01e2972c3a75bd793db4520bab3e02323b9fd88e4d81b304eb_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ligne/ajaxliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  71 => 17,  68 => 16,  57 => 11,  53 => 10,  47 => 7,  43 => 6,  39 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entities %}*/
/*     <tr>*/
/*         <td class="hidden-print"><input type="checkbox" name="entities[]" value="{{ entity.id }}"></td>*/
/*         <td><a href="{{ path('livraison_show', { 'id': entity.livraison.id }) }}">{{ entity.livraison.refMarche }}</a></td>*/
/*         <td>{{ entity.article.libele }}</td>*/
/*         <td>{{ entity.article.ref }}</td>*/
/*         <td>{{ entity.quantite }}</td>*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('ligne_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*                 <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('ligne_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
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
