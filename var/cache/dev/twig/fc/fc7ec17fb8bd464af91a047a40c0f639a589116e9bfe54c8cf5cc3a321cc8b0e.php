<?php

/* gestionStock/Expression_besoin/form.html.twig */
class __TwigTemplate_f5560c14616ec139c8400216ba4e4de02b797599bed5dd5625eab7ab6b1915b6 extends Twig_Template
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
        $__internal_24590f0ae74dee16c12ecc7ac6bca77383845c21b77d97d0cbb6567620e922c5 = $this->env->getExtension("native_profiler");
        $__internal_24590f0ae74dee16c12ecc7ac6bca77383845c21b77d97d0cbb6567620e922c5->enter($__internal_24590f0ae74dee16c12ecc7ac6bca77383845c21b77d97d0cbb6567620e922c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/form.html.twig"));

        // line 1
        echo "<legend>Information du Besoin </legend> 
\t\t
\t<div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Nom de l'employe  :</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"exp[employe]\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "nom", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
    </div>
    <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Accord  :</label>
          <div class=\"col-md-4\">
            <input type=\"checkbox\" name=\"exp[accord]\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "accord", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
    </div>

";
        
        $__internal_24590f0ae74dee16c12ecc7ac6bca77383845c21b77d97d0cbb6567620e922c5->leave($__internal_24590f0ae74dee16c12ecc7ac6bca77383845c21b77d97d0cbb6567620e922c5_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  29 => 6,  22 => 1,);
    }
}
/* <legend>Information du Besoin </legend> */
/* 		*/
/* 	<div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Nom de l'employe  :</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="exp[employe]" value="{{entity.employe.nom}}" class="form-control">*/
/*           </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Accord  :</label>*/
/*           <div class="col-md-4">*/
/*             <input type="checkbox" name="exp[accord]" value="{{entity.accord}}" class="form-control">*/
/*           </div>*/
/*     </div>*/
/* */
/* {#*/
/* {{ form_row(form.employe, { 'label': 'Employe','attr':{'class':'form-control'}}) }}*/
/* <br/>*/
/* {{ form_row(form.accord, { 'label': 'Accord','attr':{'class':'form-control'}}) }}*/
/* */
/* {{ form_rest(form) }} */
/* #}*/
