<?php

/* gestionStock/MesExpression_besoin/formAr_eb.html.twig */
class __TwigTemplate_53bf8606d16417ce725ec61ef22eaf2b558cc1ce3de0e6658ddd9767f18bbdc8 extends Twig_Template
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
        $__internal_770c66649efe2b4d6eede549e10bb09bb47ae415ebff318984451ecb610810d9 = $this->env->getExtension("native_profiler");
        $__internal_770c66649efe2b4d6eede549e10bb09bb47ae415ebff318984451ecb610810d9->enter($__internal_770c66649efe2b4d6eede549e10bb09bb47ae415ebff318984451ecb610810d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/MesExpression_besoin/formAr_eb.html.twig"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "article", array()), 'row', array("label" => "Référence de l Article", "attr" => array("class" => "form-control")));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'row', array("label" => "Quantité", "attr" => array("class" => "form-control")));
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        
        $__internal_770c66649efe2b4d6eede549e10bb09bb47ae415ebff318984451ecb610810d9->leave($__internal_770c66649efe2b4d6eede549e10bb09bb47ae415ebff318984451ecb610810d9_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/MesExpression_besoin/formAr_eb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ form_row(form.article, { 'label': 'Référence de l Article','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.quantite, { 'label': 'Quantité','attr':{'class':'form-control'}}) }}*/
/* {{ form_rest(form) }}*/
