<?php

/* gestionStock/category/ajaxliste.html.twig */
class __TwigTemplate_79eb371531a0ff399fb868f73a2368c87b89982c805f8923f943d29f20b8951e extends Twig_Template
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
        $__internal_beff2b0ea652c9b7d396dda35bad3da2ff48c5930fe42981de0a07c9c1e9f3c7 = $this->env->getExtension("native_profiler");
        $__internal_beff2b0ea652c9b7d396dda35bad3da2ff48c5930fe42981de0a07c9c1e9f3c7->enter($__internal_beff2b0ea652c9b7d396dda35bad3da2ff48c5930fe42981de0a07c9c1e9f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/category/ajaxliste.html.twig"));

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
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "code", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
            </div>
        </td> 
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/category/ajaxliste.html.twig", 15)->display($context);
        // line 16
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_beff2b0ea652c9b7d396dda35bad3da2ff48c5930fe42981de0a07c9c1e9f3c7->leave($__internal_beff2b0ea652c9b7d396dda35bad3da2ff48c5930fe42981de0a07c9c1e9f3c7_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/category/ajaxliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  61 => 15,  58 => 14,  47 => 9,  43 => 8,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entities %}*/
/*     <tr>*/
/*         <td class="hidden-print"><input type="checkbox" name="entities[]" value="{{ entity.id }}"></td>*/
/*         <td>{{ entity.libele }}</td>*/
/*         <td>{{ entity.code }}</td>*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('category_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*                 <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('category_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
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
