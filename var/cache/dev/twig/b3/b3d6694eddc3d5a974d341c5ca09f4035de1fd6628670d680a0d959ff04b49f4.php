<?php

/* gestionStock/Entree/formAr_entree.html.twig */
class __TwigTemplate_c9831e9cdb99f7b8b9b70c2b83b4cabf3883b6f7223f0dbf3460c0f59058c030 extends Twig_Template
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
        $__internal_87cb64f5f3ee50118a81357c987c4b9f6c9feaab936aeeaaa171312a9a868fc4 = $this->env->getExtension("native_profiler");
        $__internal_87cb64f5f3ee50118a81357c987c4b9f6c9feaab936aeeaaa171312a9a868fc4->enter($__internal_87cb64f5f3ee50118a81357c987c4b9f6c9feaab936aeeaaa171312a9a868fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Entree/formAr_entree.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entrees"]) ? $context["entrees"] : $this->getContext($context, "entrees")));
        foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entree"], "article", array()), "libele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entree"], "article", array()), "ref", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["entree"], "quantite", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_87cb64f5f3ee50118a81357c987c4b9f6c9feaab936aeeaaa171312a9a868fc4->leave($__internal_87cb64f5f3ee50118a81357c987c4b9f6c9feaab936aeeaaa171312a9a868fc4_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Entree/formAr_entree.html.twig";
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
/* {% for entree in entrees %}*/
/*     <tr>*/
/*         <td>{{ entree.article.libele }}</td>*/
/*         <td>{{ entree.article.ref }}</td>*/
/*         <td>{{ entree.quantite }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
