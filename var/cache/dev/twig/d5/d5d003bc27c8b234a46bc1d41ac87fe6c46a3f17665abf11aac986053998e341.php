<?php

/* gestionStock/Sortie/formAr_sortie.html.twig */
class __TwigTemplate_1ae4ce4ffddc1cf672d40ef16d5447ab75f8d4662f9a331b854e991b8456980c extends Twig_Template
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
        $__internal_90bb9e95f66b29456c2d1d9ec9db5ef08e541d881a9dc0a34f5fc700229579eb = $this->env->getExtension("native_profiler");
        $__internal_90bb9e95f66b29456c2d1d9ec9db5ef08e541d881a9dc0a34f5fc700229579eb->enter($__internal_90bb9e95f66b29456c2d1d9ec9db5ef08e541d881a9dc0a34f5fc700229579eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Sortie/formAr_sortie.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorties"]) ? $context["sorties"] : $this->getContext($context, "sorties")));
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sortie"], "article", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sortie"], "article", array()), "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["sortie"], "quantite", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_90bb9e95f66b29456c2d1d9ec9db5ef08e541d881a9dc0a34f5fc700229579eb->leave($__internal_90bb9e95f66b29456c2d1d9ec9db5ef08e541d881a9dc0a34f5fc700229579eb_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Sortie/formAr_sortie.html.twig";
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
/* {% for sortie in sorties %}*/
/*     <tr>*/
/*         <td>{{ sortie.article.libele }}</td>*/
/*         <td>{{ sortie.article.ref }}</td>*/
/*         <td>{{ sortie.quantite }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
