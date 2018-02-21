<?php

/* gestionStock/Livraison/formLigne.html.twig */
class __TwigTemplate_e74e1f803271934d8f0da9762c2813ab770a390f0f3d3d044aacbbece22c9bec extends Twig_Template
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
        $__internal_485c0af64f4e10356c68998b2c7a2d5fe36247985a9c2a70bd13f46d281fd33d = $this->env->getExtension("native_profiler");
        $__internal_485c0af64f4e10356c68998b2c7a2d5fe36247985a9c2a70bd13f46d281fd33d->enter($__internal_485c0af64f4e10356c68998b2c7a2d5fe36247985a9c2a70bd13f46d281fd33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Livraison/formLigne.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "article", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "article", array()), "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "prix", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "duree", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligne"], "dateGarantie", array()), "d/m/y"), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_485c0af64f4e10356c68998b2c7a2d5fe36247985a9c2a70bd13f46d281fd33d->leave($__internal_485c0af64f4e10356c68998b2c7a2d5fe36247985a9c2a70bd13f46d281fd33d_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Livraison/formLigne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for ligne in lignes %}*/
/*     <tr>*/
/*         <td>{{ ligne.article.libele }}</td>*/
/*         <td>{{ ligne.article.ref }}</td>*/
/*         <td>{{ ligne.quantite }}</td>*/
/*         <td>{{ ligne.prix }}</td>*/
/*         <td>{{ ligne.duree }}</td>*/
/*         <td>{{ ligne.dateGarantie|date("d/m/y") }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
