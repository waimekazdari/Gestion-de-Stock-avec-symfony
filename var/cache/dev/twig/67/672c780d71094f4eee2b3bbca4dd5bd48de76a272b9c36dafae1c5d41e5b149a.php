<?php

/* gestionStock/Fournisseur/form.html.twig */
class __TwigTemplate_bba65efcb9eaea111091ffbe4f8f75f4afa00130b905f1a0b6cc2f733a8626b9 extends Twig_Template
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
        $__internal_a418126dd642c1c9ff3cb4cae134705a9d489f4fae8106c961b42ef899a61bf2 = $this->env->getExtension("native_profiler");
        $__internal_a418126dd642c1c9ff3cb4cae134705a9d489f4fae8106c961b42ef899a61bf2->enter($__internal_a418126dd642c1c9ff3cb4cae134705a9d489f4fae8106c961b42ef899a61bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Fournisseur/form.html.twig"));

        // line 1
        echo "<legend>Information du Fournisseur</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 4
        echo "

";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row', array("label" => "le Nom du Fournisseur", "attr" => array("class" => "form-control")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CIN", array()), 'row', array("label" => "le CIN du Fournisseur", "attr" => array("class" => "form-control")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'row', array("label" => "la ville du Fournisseur", "attr" => array("class" => "form-control")));
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'row', array("label" => "le pays du Fournisseur", "attr" => array("class" => "form-control")));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("label" => "Email du Fournisseur", "attr" => array("class" => "form-control")));
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'row', array("label" => "Tél du Fournisseur", "attr" => array("class" => "form-control")));
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row', array("label" => "L'Adresse du Fournisseur", "attr" => array("class" => "form-control")));
        echo "


";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_a418126dd642c1c9ff3cb4cae134705a9d489f4fae8106c961b42ef899a61bf2->leave($__internal_a418126dd642c1c9ff3cb4cae134705a9d489f4fae8106c961b42ef899a61bf2_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Fournisseur/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information du Fournisseur</legend> */
/* */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* */
/* {{ form_row(form.nom, { 'label': 'le Nom du Fournisseur','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.CIN, { 'label': 'le CIN du Fournisseur','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.ville, { 'label': 'la ville du Fournisseur','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.pays, { 'label': 'le pays du Fournisseur','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.email, { 'label': 'Email du Fournisseur','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.tel, { 'label': 'Tél du Fournisseur','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.adresse, { 'label': 'L\'Adresse du Fournisseur','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
