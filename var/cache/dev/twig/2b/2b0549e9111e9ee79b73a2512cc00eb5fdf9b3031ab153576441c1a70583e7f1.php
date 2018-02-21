<?php

/* gestionStock/Expression_besoin/formAr_eb.html.twig */
class __TwigTemplate_261ebf1bcd89431ad96f461744a985aa4539f03ff90a75e84d51d9f180fcede2 extends Twig_Template
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
        $__internal_7c2bf03b3a3159b7774311419440716908132f122e1ff3435d0b516e6ed37aa7 = $this->env->getExtension("native_profiler");
        $__internal_7c2bf03b3a3159b7774311419440716908132f122e1ff3435d0b516e6ed37aa7->enter($__internal_7c2bf03b3a3159b7774311419440716908132f122e1ff3435d0b516e6ed37aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/formAr_eb.html.twig"));

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
        
        $__internal_7c2bf03b3a3159b7774311419440716908132f122e1ff3435d0b516e6ed37aa7->leave($__internal_7c2bf03b3a3159b7774311419440716908132f122e1ff3435d0b516e6ed37aa7_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/formAr_eb.html.twig";
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
