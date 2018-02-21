<?php

/* gestionStock/Service/form.html.twig */
class __TwigTemplate_373b1b93caa6f80d7bcb53213bc186853119a1188651a6b2835d5fe72c2ee35d extends Twig_Template
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
        $__internal_7d88c14b6c9ca7c72bd500f3479e4d9f4d6c6f0f21e0e86bbfd4a6e8d8d84375 = $this->env->getExtension("native_profiler");
        $__internal_7d88c14b6c9ca7c72bd500f3479e4d9f4d6c6f0f21e0e86bbfd4a6e8d8d84375->enter($__internal_7d88c14b6c9ca7c72bd500f3479e4d9f4d6c6f0f21e0e86bbfd4a6e8d8d84375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Service/form.html.twig"));

        // line 1
        echo "<legend>Information de l'Article</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 4
        echo "

";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libele", array()), 'row', array("label" => "le nom du Service", "attr" => array("class" => "form-control")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'row', array("label" => "Département", "attr" => array("class" => "form-control")));
        echo "


";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_7d88c14b6c9ca7c72bd500f3479e4d9f4d6c6f0f21e0e86bbfd4a6e8d8d84375->leave($__internal_7d88c14b6c9ca7c72bd500f3479e4d9f4d6c6f0f21e0e86bbfd4a6e8d8d84375_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Service/form.html.twig";
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
/* <legend>Information de l'Article</legend> */
/* */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* */
/* {{ form_row(form.libele, { 'label': 'le nom du Service','attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.departement, { 'label': 'Département','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
