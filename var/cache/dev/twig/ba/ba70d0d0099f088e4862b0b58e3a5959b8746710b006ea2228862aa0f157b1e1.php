<?php

/* gestionStock/Expression_besoin/formExpression.html.twig */
class __TwigTemplate_c01a38dc981b6108f91f678edfa169bd242b48cf6d9ed3fd64193313c6a069ec extends Twig_Template
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
        $__internal_6c19125269fc03df0cb9f6851eb221c86cbfed21b586e8700f5ce13f11cba255 = $this->env->getExtension("native_profiler");
        $__internal_6c19125269fc03df0cb9f6851eb221c86cbfed21b586e8700f5ce13f11cba255->enter($__internal_6c19125269fc03df0cb9f6851eb221c86cbfed21b586e8700f5ce13f11cba255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/formExpression.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ar_ebs"]) ? $context["ar_ebs"] : $this->getContext($context, "ar_ebs")));
        foreach ($context['_seq'] as $context["_key"] => $context["ex"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ex"], "article", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ex"], "article", array()), "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["ex"], "quantite", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6c19125269fc03df0cb9f6851eb221c86cbfed21b586e8700f5ce13f11cba255->leave($__internal_6c19125269fc03df0cb9f6851eb221c86cbfed21b586e8700f5ce13f11cba255_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/formExpression.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for ex in ar_ebs %}*/
/*     <tr>*/
/*         <td>{{ ex.article.libele }}</td>*/
/*         <td>{{ ex.article.ref }}</td>*/
/*         <td>{{ ex.quantite }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
