<?php

/* gestionStock/Ar_entree/form.html.twig */
class __TwigTemplate_63b6cf9211b96c301eb688684775dc007858ea6ac153bf47a6a6e866334b9582 extends Twig_Template
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
        $__internal_fa5a729d63dabce6da14efd28393450dbc3682b30956f0d564e8197e3b2f5034 = $this->env->getExtension("native_profiler");
        $__internal_fa5a729d63dabce6da14efd28393450dbc3682b30956f0d564e8197e3b2f5034->enter($__internal_fa5a729d63dabce6da14efd28393450dbc3682b30956f0d564e8197e3b2f5034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_entree/form.html.twig"));

        // line 1
        echo "<legend>Information de l'Article</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entree", array()), 'row', array("label" => "La Référence de l'Entrée de la Ligne", "attr" => array("class" => "form-control")));
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
        
        $__internal_fa5a729d63dabce6da14efd28393450dbc3682b30956f0d564e8197e3b2f5034->leave($__internal_fa5a729d63dabce6da14efd28393450dbc3682b30956f0d564e8197e3b2f5034_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_entree/form.html.twig";
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
/* {{ form_row(form.entree, { 'label': 'La Référence de l\'Entrée de la Ligne','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.article, { 'label': 'La Référence de l\'Article de la Ligne','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.quantite, { 'label': 'La Quantite de l\'Article','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
