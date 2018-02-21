<?php

/* gestionStock/Sortie/form.html.twig */
class __TwigTemplate_7417d8eff32346da947f6cb934e19d1aa0b2d3593855938913d17ef480c31505 extends Twig_Template
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
        $__internal_1d9429c07769dffc79410f194436fa9033103c990e4885369490713558cfaf00 = $this->env->getExtension("native_profiler");
        $__internal_1d9429c07769dffc79410f194436fa9033103c990e4885369490713558cfaf00->enter($__internal_1d9429c07769dffc79410f194436fa9033103c990e4885369490713558cfaf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Sortie/form.html.twig"));

        // line 1
        echo "<legend>Information de La Sortie</legend> 

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IdSortie", array()), 'row', array("label" => "La Référence de la Sortie", "attr" => array("class" => "form-control")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("label" => "La Date de la Sortie", "attr" => array("class" => "form-control")));
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), 'row', array("label" => "Employe", "attr" => array("class" => "form-control")));
        echo "

";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_1d9429c07769dffc79410f194436fa9033103c990e4885369490713558cfaf00->leave($__internal_1d9429c07769dffc79410f194436fa9033103c990e4885369490713558cfaf00_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Sortie/form.html.twig";
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
/* <legend>Information de La Sortie</legend> */
/* */
/* {{ form_row(form.IdSortie, { 'label': 'La Référence de la Sortie','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.date, { 'label': 'La Date de la Sortie','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.employe, { 'label': 'Employe','attr':{'class':'form-control'}}) }}*/
/* */
/* {{ form_rest(form) }} */
