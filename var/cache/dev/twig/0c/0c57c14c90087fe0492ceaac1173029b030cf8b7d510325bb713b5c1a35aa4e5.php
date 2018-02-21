<?php

/* gestionStock/article/ajaxliste.html.twig */
class __TwigTemplate_36647fafd61b1b24395ffae095418588f8286e0cd7efed98a8c7f00938962359 extends Twig_Template
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
        $__internal_416257548050f07ac247427f8dd11a443318c4fec170c9a11bb3ff2267ad04fa = $this->env->getExtension("native_profiler");
        $__internal_416257548050f07ac247427f8dd11a443318c4fec170c9a11bb3ff2267ad04fa->enter($__internal_416257548050f07ac247427f8dd11a443318c4fec170c9a11bb3ff2267ad04fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/article/ajaxliste.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "code", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "category", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "category", array()), "code", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
            </div>
        </td> 
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/article/ajaxliste.html.twig", 18)->display($context);
        // line 19
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_416257548050f07ac247427f8dd11a443318c4fec170c9a11bb3ff2267ad04fa->leave($__internal_416257548050f07ac247427f8dd11a443318c4fec170c9a11bb3ff2267ad04fa_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/article/ajaxliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  73 => 18,  70 => 17,  59 => 12,  55 => 11,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entities %}*/
/*     <tr>*/
/*         <td class="hidden-print"><input type="checkbox" name="entities[]" value="{{ entity.id }}"></td>*/
/*         <td>{{ entity.libele }}</td>*/
/*         <td>{{ entity.ref }}</td>*/
/*         <td>{{ entity.code }}</td>*/
/*         <td>{{ entity.category.libele }}</td>*/
/*         <td>{{ entity.category.code }}</td>*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('article_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*                 <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('article_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
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
