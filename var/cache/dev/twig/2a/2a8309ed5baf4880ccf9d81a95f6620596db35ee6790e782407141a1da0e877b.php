<?php

/* gestionStock/Article_User/ajaxliste.html.twig */
class __TwigTemplate_c8acb6460b1fe01f8fe26273b98c084a6af662a8892b2f57c470bdd3895ebcbb extends Twig_Template
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
        $__internal_9630a25665235c8a857924f458d525eb2dc04da4cde2c51411caeccfb65c778e = $this->env->getExtension("native_profiler");
        $__internal_9630a25665235c8a857924f458d525eb2dc04da4cde2c51411caeccfb65c778e->enter($__internal_9630a25665235c8a857924f458d525eb2dc04da4cde2c51411caeccfb65c778e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Article_User/ajaxliste.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
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
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/Article_User/ajaxliste.html.twig", 17)->display($context);
        // line 18
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_9630a25665235c8a857924f458d525eb2dc04da4cde2c51411caeccfb65c778e->leave($__internal_9630a25665235c8a857924f458d525eb2dc04da4cde2c51411caeccfb65c778e_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Article_User/ajaxliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  69 => 17,  66 => 16,  55 => 11,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
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
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('article_user_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
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
