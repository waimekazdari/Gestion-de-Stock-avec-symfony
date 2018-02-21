<?php

/* gestionStock/Article/form.html.twig */
class __TwigTemplate_a224cd3a15b13a1d7fbe68e9cc95a552b839e823a161cf40140d75f8d8c3c7aa extends Twig_Template
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
        $__internal_f68fe89d50b7d0a2fef364313f26560f875c6ab05622ad000b4b444c885cf836 = $this->env->getExtension("native_profiler");
        $__internal_f68fe89d50b7d0a2fef364313f26560f875c6ab05622ad000b4b444c885cf836->enter($__internal_f68fe89d50b7d0a2fef364313f26560f875c6ab05622ad000b4b444c885cf836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Article/form.html.twig"));

        // line 1
        echo "<legend>Information de l'Article</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 4
        echo "

";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ref", array()), 'row', array("label" => "la Référence de l'Article", "attr" => array("class" => "form-control")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row', array("label" => "le code de l'Article", "attr" => array("class" => "form-control")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libele", array()), 'row', array("label" => "le nom de l'Article", "attr" => array("class" => "form-control")));
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row', array("label" => "Catégory", "attr" => array("class" => "form-control")));
        echo "


";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_f68fe89d50b7d0a2fef364313f26560f875c6ab05622ad000b4b444c885cf836->leave($__internal_f68fe89d50b7d0a2fef364313f26560f875c6ab05622ad000b4b444c885cf836_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Article/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information de l'Article</legend> */
/* */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* */
/* {{ form_row(form.ref, { 'label': 'la Référence de l\'Article','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.code, { 'label': 'le code de l\'Article','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.libele, { 'label': 'le nom de l\'Article','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.category, { 'label': 'Catégory','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
