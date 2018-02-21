<?php

/* gestionStock/admin/list.csv.twig */
class __TwigTemplate_f1c45cf41286ecbc1e703677fe10a049147f95da25f293b9dde3e4dd091e5be1 extends Twig_Template
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
        $__internal_136c9cc2b018947d87bb686738d796cdf41bd084a32376ee5ed1501d0b8f00aa = $this->env->getExtension("native_profiler");
        $__internal_136c9cc2b018947d87bb686738d796cdf41bd084a32376ee5ed1501d0b8f00aa->enter($__internal_136c9cc2b018947d87bb686738d796cdf41bd084a32376ee5ed1501d0b8f00aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/admin/list.csv.twig"));

        // line 1
        echo "id, username, email, prenom, nom, role, date d'inscription, dernière connexion
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "roles", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "created", array()), "Y-m-d"), "html", null, true);
            echo "
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo " ";
        
        $__internal_136c9cc2b018947d87bb686738d796cdf41bd084a32376ee5ed1501d0b8f00aa->leave($__internal_136c9cc2b018947d87bb686738d796cdf41bd084a32376ee5ed1501d0b8f00aa_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/admin/list.csv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* id, username, email, prenom, nom, role, date d'inscription, dernière connexion*/
/* {% for entity in entities %}*/
/* {{ entity.id }}, {{ entity.username }}, {{ entity.email }},{{ entity.roles }}, {{ entity.created|date('Y-m-d') }}*/
/*  {% endfor %} */
