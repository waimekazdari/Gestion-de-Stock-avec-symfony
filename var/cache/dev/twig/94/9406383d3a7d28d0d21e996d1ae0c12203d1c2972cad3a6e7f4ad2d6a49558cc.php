<?php

/* gestionStock/Registration/register.html.twig */
class __TwigTemplate_18578b9c875270ad0747a145f174798f5efcd97eed4673f6395e00f976160b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Registration/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_921dd37a7477ac25363dfeef3b4d2d5d40b96e48cd2ea857d6a3d03d5106427f = $this->env->getExtension("native_profiler");
        $__internal_921dd37a7477ac25363dfeef3b4d2d5d40b96e48cd2ea857d6a3d03d5106427f->enter($__internal_921dd37a7477ac25363dfeef3b4d2d5d40b96e48cd2ea857d6a3d03d5106427f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921dd37a7477ac25363dfeef3b4d2d5d40b96e48cd2ea857d6a3d03d5106427f->leave($__internal_921dd37a7477ac25363dfeef3b4d2d5d40b96e48cd2ea857d6a3d03d5106427f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a3e66c80dc4fc49c23e6f1c909f2ef9a8e9b0e9cf16369673c899d77332674e = $this->env->getExtension("native_profiler");
        $__internal_2a3e66c80dc4fc49c23e6f1c909f2ef9a8e9b0e9cf16369673c899d77332674e->enter($__internal_2a3e66c80dc4fc49c23e6f1c909f2ef9a8e9b0e9cf16369673c899d77332674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Inscription
";
        
        $__internal_2a3e66c80dc4fc49c23e6f1c909f2ef9a8e9b0e9cf16369673c899d77332674e->leave($__internal_2a3e66c80dc4fc49c23e6f1c909f2ef9a8e9b0e9cf16369673c899d77332674e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f29b4a2c5e3f529f7a619930dd3200237ad85b70e17451cb046f6077fdfecfd3 = $this->env->getExtension("native_profiler");
        $__internal_f29b4a2c5e3f529f7a619930dd3200237ad85b70e17451cb046f6077fdfecfd3->enter($__internal_f29b4a2c5e3f529f7a619930dd3200237ad85b70e17451cb046f6077fdfecfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_f29b4a2c5e3f529f7a619930dd3200237ad85b70e17451cb046f6077fdfecfd3->leave($__internal_f29b4a2c5e3f529f7a619930dd3200237ad85b70e17451cb046f6077fdfecfd3_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_42e4150d6153864bfb6dd74c8419a84f9c6fd84af9df98c4d0d70a55c214698c = $this->env->getExtension("native_profiler");
        $__internal_42e4150d6153864bfb6dd74c8419a84f9c6fd84af9df98c4d0d70a55c214698c->enter($__internal_42e4150d6153864bfb6dd74c8419a84f9c6fd84af9df98c4d0d70a55c214698c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "<body class=\"sign-in-bg\">
<div class=\"container\">
<br/>
<h2><b><span class=\"glyphicon glyphicon-user block\" style=\"margin-left:240px;\"></span> Inscription </b></h2>
<br/>
<div style=\"width:900px; margin :30px ;margin-left:240px;background-color:#dfe2f5;padding:20px; padding-left:50px;padding-right:50px;\">
<legend>Information d'Utilisateur</legend> 
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 15
        echo "
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "nom", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "CIN", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "tel", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "adresse", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

<br><center><button class=\"btn btn-success\" type=\"submit\">Registrer!</button></center>
";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
";
        
        $__internal_42e4150d6153864bfb6dd74c8419a84f9c6fd84af9df98c4d0d70a55c214698c->leave($__internal_42e4150d6153864bfb6dd74c8419a84f9c6fd84af9df98c4d0d70a55c214698c_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 29,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  79 => 15,  77 => 14,  68 => 7,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Inscription*/
/* {% endblock %}*/
/* {% block body %}*/
/* {% block container %}*/
/* <body class="sign-in-bg">*/
/* <div class="container">*/
/* <br/>*/
/* <h2><b><span class="glyphicon glyphicon-user block" style="margin-left:240px;"></span> Inscription </b></h2>*/
/* <br/>*/
/* <div style="width:900px; margin :30px ;margin-left:240px;background-color:#dfe2f5;padding:20px; padding-left:50px;padding-right:50px;">*/
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
/* <br><center><button class="btn btn-success" type="submit">Registrer!</button></center>*/
/* {{ form_end(form) }}*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
