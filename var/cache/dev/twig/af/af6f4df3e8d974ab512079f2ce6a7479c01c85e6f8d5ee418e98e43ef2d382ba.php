<?php

/* gestionStock/Departement/form.html.twig */
class __TwigTemplate_d4923258d2036c5441f06f38d1d889b6fcf1d26d6d346fa0e7092325aef18cb9 extends Twig_Template
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
        $__internal_1b586049adb223baf1bad8e24472bfff991da0fc34cb7ca6d4e72316e05cb6a9 = $this->env->getExtension("native_profiler");
        $__internal_1b586049adb223baf1bad8e24472bfff991da0fc34cb7ca6d4e72316e05cb6a9->enter($__internal_1b586049adb223baf1bad8e24472bfff991da0fc34cb7ca6d4e72316e05cb6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Departement/form.html.twig"));

        // line 1
        echo "<legend>Information de la Département</legend> 

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libele", array()), 'row', array("label" => "le nom de la Département", "attr" => array("class" => "form-control")));
        echo "


";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " ";
        
        $__internal_1b586049adb223baf1bad8e24472bfff991da0fc34cb7ca6d4e72316e05cb6a9->leave($__internal_1b586049adb223baf1bad8e24472bfff991da0fc34cb7ca6d4e72316e05cb6a9_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Departement/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <legend>Information de la Département</legend> */
/* */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* {{ form_row(form.libele, { 'label': 'le nom de la Département','attr':{'class':'form-control'}}) }}*/
/* */
/* */
/* {{ form_rest(form) }} */
