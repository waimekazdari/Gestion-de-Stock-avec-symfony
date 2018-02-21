<?php

/* gestionStock/Entree/form.html.twig */
class __TwigTemplate_d24b00bab825c18782f8b304b124edab257ed82ef9a58c21581b5c32cad5f66d extends Twig_Template
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
        $__internal_97a82244410cf3f415f9929cb9170bae1c5be16e90b087c6e8fd7126249c9b6e = $this->env->getExtension("native_profiler");
        $__internal_97a82244410cf3f415f9929cb9170bae1c5be16e90b087c6e8fd7126249c9b6e->enter($__internal_97a82244410cf3f415f9929cb9170bae1c5be16e90b087c6e8fd7126249c9b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Entree/form.html.twig"));

        // line 1
        echo "<legend>Information de L'Entree</legend> 

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ref", array()), 'row', array("label" => "La Référence de l'Entree", "attr" => array("class" => "form-control")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("label" => "La Date de l'Entree", "attr" => array("class" => "form-control")));
        echo "

";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_97a82244410cf3f415f9929cb9170bae1c5be16e90b087c6e8fd7126249c9b6e->leave($__internal_97a82244410cf3f415f9929cb9170bae1c5be16e90b087c6e8fd7126249c9b6e_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Entree/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information de L'Entree</legend> */
/* */
/* {{ form_row(form.ref, { 'label': 'La Référence de l\'Entree','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.date, { 'label': 'La Date de l\'Entree','attr':{'class':'form-control'}}) }}*/
/* */
/* {{ form_rest(form) }} */
