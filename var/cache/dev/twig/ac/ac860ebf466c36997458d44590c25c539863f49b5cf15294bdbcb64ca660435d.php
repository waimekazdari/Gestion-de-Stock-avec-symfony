<?php

/* gestionStock/Admin/new.html.twig */
class __TwigTemplate_b908e5d38a2a105535f702dd2a40d3b08237a86743d17bc2d6c6f40611592161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Admin/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_810f0505d6ab7146a133cf22dcd9a61a81ba03a3ba8d3774eb97f587a141b993 = $this->env->getExtension("native_profiler");
        $__internal_810f0505d6ab7146a133cf22dcd9a61a81ba03a3ba8d3774eb97f587a141b993->enter($__internal_810f0505d6ab7146a133cf22dcd9a61a81ba03a3ba8d3774eb97f587a141b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Admin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_810f0505d6ab7146a133cf22dcd9a61a81ba03a3ba8d3774eb97f587a141b993->leave($__internal_810f0505d6ab7146a133cf22dcd9a61a81ba03a3ba8d3774eb97f587a141b993_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6de6b9b3f4c190a86febb4fa31a8d98cc1801dcfae5992bad5e96e1ab4300adb = $this->env->getExtension("native_profiler");
        $__internal_6de6b9b3f4c190a86febb4fa31a8d98cc1801dcfae5992bad5e96e1ab4300adb->enter($__internal_6de6b9b3f4c190a86febb4fa31a8d98cc1801dcfae5992bad5e96e1ab4300adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Ajout Employe
";
        
        $__internal_6de6b9b3f4c190a86febb4fa31a8d98cc1801dcfae5992bad5e96e1ab4300adb->leave($__internal_6de6b9b3f4c190a86febb4fa31a8d98cc1801dcfae5992bad5e96e1ab4300adb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_601b243829aa71896d1f9d2b2784fc08bcf0ce9e8ec27d141e6cfe1223c66a47 = $this->env->getExtension("native_profiler");
        $__internal_601b243829aa71896d1f9d2b2784fc08bcf0ce9e8ec27d141e6cfe1223c66a47->enter($__internal_601b243829aa71896d1f9d2b2784fc08bcf0ce9e8ec27d141e6cfe1223c66a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><b><span class=\"glyphicon glyphicon-user block\"></span> Inscription </b></h3>
<div style=\"width:600px; margin-left:300px;padding:30px;\">
<legend>Information d'Utilisateur</legend> 
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 10
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "nom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "CIN", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "tel", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "adresse", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

<br><center><button class=\"btn btn-success\" type=\"submit\">Register!</button></center>
";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_601b243829aa71896d1f9d2b2784fc08bcf0ce9e8ec27d141e6cfe1223c66a47->leave($__internal_601b243829aa71896d1f9d2b2784fc08bcf0ce9e8ec27d141e6cfe1223c66a47_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Admin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  62 => 10,  60 => 9,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Ajout Employe*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><b><span class="glyphicon glyphicon-user block"></span> Inscription </b></h3>*/
/* <div style="width:600px; margin-left:300px;padding:30px;">*/
/* <legend>Information d'Utilisateur</legend> */
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* {{form_row(form.email,{'attr':{'class':'form-control'}})}}*/
/* {{form_row(form.username,{'attr':{'class':'form-control'}})}}*/
/* {{ form_row(form.plainPassword.first,{'attr':{'class':'form-control'}}) }}*/
/* {{ form_row(form.plainPassword.second,{'attr':{'class':'form-control'}}) }}*/
/* */
/* {{form_row(form.image.file,{'attr':{'class':'form-control'}})}}*/
/* {{form_row(form.employe.nom,{'attr':{'class':'form-control'}})}}*/
/* {{form_row(form.employe.CIN,{'attr':{'class':'form-control'}})}}*/
/* {{form_row(form.employe.tel,{'attr':{'class':'form-control'}})}}*/
/* {{form_row(form.employe.adresse,{'attr':{'class':'form-control'}})}}*/
/* {{form_row(form.service,{'attr':{'class':'form-control'}})}}*/
/* */
/* <br><center><button class="btn btn-success" type="submit">Register!</button></center>*/
/* {{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
