<?php

/* gestionStock/Service/ajaxliste.html.twig */
class __TwigTemplate_a85d930b0f95b06e4c3e82025a8f6cc1aad6f569fd6cc307bd089f4aadaf1fe0 extends Twig_Template
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
        $__internal_711ddcc3e5737e3dad82a7974696079c48612f1b4fc09cc6cc1af87b0482b6fd = $this->env->getExtension("native_profiler");
        $__internal_711ddcc3e5737e3dad82a7974696079c48612f1b4fc09cc6cc1af87b0482b6fd->enter($__internal_711ddcc3e5737e3dad82a7974696079c48612f1b4fc09cc6cc1af87b0482b6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Service/ajaxliste.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "departement", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/Service/ajaxliste.html.twig", 15)->display($context);
        // line 16
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_711ddcc3e5737e3dad82a7974696079c48612f1b4fc09cc6cc1af87b0482b6fd->leave($__internal_711ddcc3e5737e3dad82a7974696079c48612f1b4fc09cc6cc1af87b0482b6fd_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Service/ajaxliste.html.twig";
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
/*         <td>{{ entity.departement.libele }}</td>*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('service_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*                 <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('service_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
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
