<?php

/* gestionStock/Ar_sortie/form.html.twig */
class __TwigTemplate_84788904020db4a6082628ea7d5829e6503d885fce78205173b1ac21e9532f4e extends Twig_Template
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
        $__internal_92ef890a9efc7f6502d782a5e53e4a762bc4f791e28ce7970ef698466315f117 = $this->env->getExtension("native_profiler");
        $__internal_92ef890a9efc7f6502d782a5e53e4a762bc4f791e28ce7970ef698466315f117->enter($__internal_92ef890a9efc7f6502d782a5e53e4a762bc4f791e28ce7970ef698466315f117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_sortie/form.html.twig"));

        // line 1
        echo "<legend>Information de l'Article</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sortie", array()), 'row', array("label" => "Identifiant de la Sortie", "attr" => array("class" => "form-control")));
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "article", array()), 'row', array("label" => "La Référence de l'Article de la Ligne", "attr" => array("class" => "form-control")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'row', array("label" => "La Quantite de l'Article", "attr" => array("class" => "form-control")));
        echo "


";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_92ef890a9efc7f6502d782a5e53e4a762bc4f791e28ce7970ef698466315f117->leave($__internal_92ef890a9efc7f6502d782a5e53e4a762bc4f791e28ce7970ef698466315f117_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_sortie/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  39 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information de l'Article</legend> */
/* */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}*/
/* */
/* {{ form_row(form.sortie, { 'label': 'Identifiant de la Sortie','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.article, { 'label': 'La Référence de l\'Article de la Ligne','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.quantite, { 'label': 'La Quantite de l\'Article','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
