<?php

/* gestionStock/Ligne/form.html.twig */
class __TwigTemplate_54ee9a9db6dcab75c3481fe997575afe3f16873452b3d885e166ae502bbaab3e extends Twig_Template
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
        $__internal_75757e2c44b91f1fa25474569efcc38368063332bf9cd23e494f265e575458e2 = $this->env->getExtension("native_profiler");
        $__internal_75757e2c44b91f1fa25474569efcc38368063332bf9cd23e494f265e575458e2->enter($__internal_75757e2c44b91f1fa25474569efcc38368063332bf9cd23e494f265e575458e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ligne/form.html.twig"));

        // line 1
        echo "<legend>Information de l'Article</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 4
        echo "

";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "livraison", array()), 'row', array("label" => "La Référence du marché de la Livraison", "attr" => array("class" => "form-control")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "article", array()), 'row', array("label" => "La Référence de l'Article de la Ligne", "attr" => array("class" => "form-control")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'row', array("label" => "La Quantite de l'Article", "attr" => array("class" => "form-control")));
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'row', array("label" => "prix de l'Article", "attr" => array("class" => "form-control")));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'row', array("label" => "La duree de la garantie", "attr" => array("class" => "form-control")));
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGarantie", array()), 'row', array("label" => "La délai de la garantie", "attr" => array("class" => "form-control")));
        echo "


";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_75757e2c44b91f1fa25474569efcc38368063332bf9cd23e494f265e575458e2->leave($__internal_75757e2c44b91f1fa25474569efcc38368063332bf9cd23e494f265e575458e2_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ligne/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information de l'Article</legend> */
/* */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* */
/* {{ form_row(form.livraison, { 'label': 'La Référence du marché de la Livraison','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.article, { 'label': 'La Référence de l\'Article de la Ligne','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.quantite, { 'label': 'La Quantite de l\'Article','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.prix, { 'label': 'prix de l\'Article','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.duree, { 'label': 'La duree de la garantie','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.dateGarantie, { 'label': 'La délai de la garantie','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
