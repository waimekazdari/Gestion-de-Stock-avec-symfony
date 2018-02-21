<?php

/* gestionStock/Category/form.html.twig */
class __TwigTemplate_2a3595adbe6eb90a78169188758975c2e533561b7589a2f4bf4181918bd764e1 extends Twig_Template
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
        $__internal_86770d4883737b98327bb0035397bbe5b780f5a7a8ff0e5e298f22db6cd9b6c7 = $this->env->getExtension("native_profiler");
        $__internal_86770d4883737b98327bb0035397bbe5b780f5a7a8ff0e5e298f22db6cd9b6c7->enter($__internal_86770d4883737b98327bb0035397bbe5b780f5a7a8ff0e5e298f22db6cd9b6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Category/form.html.twig"));

        // line 1
        echo "<legend>Information de a Catégory</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 4
        echo "

";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row', array("label" => "le code de la Catégorie", "attr" => array("class" => "form-control")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libele", array()), 'row', array("label" => "le nom de la Catégorie", "attr" => array("class" => "form-control")));
        echo "


";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_86770d4883737b98327bb0035397bbe5b780f5a7a8ff0e5e298f22db6cd9b6c7->leave($__internal_86770d4883737b98327bb0035397bbe5b780f5a7a8ff0e5e298f22db6cd9b6c7_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Category/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information de a Catégory</legend> */
/* */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* */
/* {{ form_row(form.code, { 'label': 'le code de la Catégorie','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.libele, { 'label': 'le nom de la Catégorie','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
