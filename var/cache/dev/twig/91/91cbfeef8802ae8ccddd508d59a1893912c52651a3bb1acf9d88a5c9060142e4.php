<?php

/* gestionStock/Entree/ajaxliste.html.twig */
class __TwigTemplate_e4ce693944e3ce4a2debc1b4ab87245fe7bbfb6c4e1ae37071c28321024a7159 extends Twig_Template
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
        $__internal_bc323c01f361687cedb61e1b381cc47d6d295b81b7dfb7a15dfb6bcf4fce7632 = $this->env->getExtension("native_profiler");
        $__internal_bc323c01f361687cedb61e1b381cc47d6d295b81b7dfb7a15dfb6bcf4fce7632->enter($__internal_bc323c01f361687cedb61e1b381cc47d6d295b81b7dfb7a15dfb6bcf4fce7632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Entree/ajaxliste.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "d/m/y"), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entree_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entree_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/Entree/ajaxliste.html.twig", 15)->display($context);
        // line 16
        echo "
<script>   
(function(\$) {

    /* tooltip 
    \$('a[data-toggle=\"tooltip\"]').tooltip();*/

})(jQuery);
</script>";
        
        $__internal_bc323c01f361687cedb61e1b381cc47d6d295b81b7dfb7a15dfb6bcf4fce7632->leave($__internal_bc323c01f361687cedb61e1b381cc47d6d295b81b7dfb7a15dfb6bcf4fce7632_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Entree/ajaxliste.html.twig";
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
/*         <td>{{ entity.ref }}</td>*/
/*         <td>{{ entity.date|date("d/m/y") }}</td>*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('entree_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*                 <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('entree_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
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
/*     /* tooltip */
/*     $('a[data-toggle="tooltip"]').tooltip();*//* */
/* */
/* })(jQuery);*/
/* </script>*/
