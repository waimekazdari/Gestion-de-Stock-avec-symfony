<?php

/* gestionStock/Livraison/form.html.twig */
class __TwigTemplate_d76602c8c84ed28f7f6661785f85e579e9d37d7c55d026cb20ad0903730051dd extends Twig_Template
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
        $__internal_4c9c4e3f70f140450036e79c81d861370157e8d3ee05d486706fe2ed94e93de8 = $this->env->getExtension("native_profiler");
        $__internal_4c9c4e3f70f140450036e79c81d861370157e8d3ee05d486706fe2ed94e93de8->enter($__internal_4c9c4e3f70f140450036e79c81d861370157e8d3ee05d486706fe2ed94e93de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Livraison/form.html.twig"));

        // line 1
        echo "<legend>Information de la Livraison</legend> 

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "refMarche", array()), 'row', array("label" => "La Référence de la Livraison", "attr" => array("class" => "form-control")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("label" => "La Date de la Livraison", "attr" => array("class" => "form-control")));
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fournisseur", array()), 'row', array("label" => "Fournisseur", "attr" => array("class" => "form-control")));
        echo "

";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_4c9c4e3f70f140450036e79c81d861370157e8d3ee05d486706fe2ed94e93de8->leave($__internal_4c9c4e3f70f140450036e79c81d861370157e8d3ee05d486706fe2ed94e93de8_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Livraison/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information de la Livraison</legend> */
/* */
/* {{ form_row(form.refMarche, { 'label': 'La Référence de la Livraison','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.date, { 'label': 'La Date de la Livraison','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.fournisseur, { 'label': 'Fournisseur','attr':{'class':'form-control'}}) }}*/
/* */
/* {{ form_rest(form) }} */
