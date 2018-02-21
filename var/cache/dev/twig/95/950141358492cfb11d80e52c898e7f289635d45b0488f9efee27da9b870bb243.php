<?php

/* gestionStock/Ar_entree/ajaxliste.html.twig */
class __TwigTemplate_6803eadfb8bc733f2ded6d0a8f4a208250162feba980458376a69d1eda0e2dd9 extends Twig_Template
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
        $__internal_0e8fc7a0d23ba59085522b37ebe62b778a347745ee9fe9af045798be9289c406 = $this->env->getExtension("native_profiler");
        $__internal_0e8fc7a0d23ba59085522b37ebe62b778a347745ee9fe9af045798be9289c406->enter($__internal_0e8fc7a0d23ba59085522b37ebe62b778a347745ee9fe9af045798be9289c406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_entree/ajaxliste.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entree_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "entree", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "entree", array()), "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "entree", array()), "date", array()), "d/m/y"), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "article", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "article", array()), "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantite", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-print\">
            <div class=\"text-center\">
                <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_entree_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ar_entree_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        $this->loadTemplate("default/pagination.html.twig", "gestionStock/Ar_entree/ajaxliste.html.twig", 18)->display($context);
        // line 19
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('a[data-toggle=\"tooltip\"]').tooltip();

})(jQuery);
</script>";
        
        $__internal_0e8fc7a0d23ba59085522b37ebe62b778a347745ee9fe9af045798be9289c406->leave($__internal_0e8fc7a0d23ba59085522b37ebe62b778a347745ee9fe9af045798be9289c406_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_entree/ajaxliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  75 => 18,  72 => 17,  61 => 12,  57 => 11,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entities %}*/
/*     <tr>*/
/*         <td class="hidden-print"><input type="checkbox" name="entities[]" value="{{ entity.id }}"></td>*/
/*         <td><a href="{{ path('entree_show', { 'id': entity.entree.id }) }}">{{ entity.entree.ref }}</td>*/
/*         <td>{{ entity.entree.date|date("d/m/y") }}</td>*/
/*         <td>{{ entity.article.libele }}</td>*/
/*         <td>{{ entity.article.ref }}</td>*/
/*         <td>{{ entity.quantite }}</td>*/
/*         <td class="hidden-print">*/
/*             <div class="text-center">*/
/*                 <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="afficher" href="{{ path('ar_entree_show', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-search"></span></a>*/
/*                 <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="modifier" href="{{ path('ar_entree_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
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
