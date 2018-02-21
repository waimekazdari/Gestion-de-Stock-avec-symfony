<?php

/* gestionStock/myProfile/edit.html.twig */
class __TwigTemplate_3dd4b669f158431a263b64f17ffa484cfeb62bf352f20ec822098129c1f63f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/myProfile/edit.html.twig", 1);
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
        $__internal_7a3f1fd4da08ba71e475c48fcffb9da3ca29262bac78fcf7bbf09cf0a65aeb3d = $this->env->getExtension("native_profiler");
        $__internal_7a3f1fd4da08ba71e475c48fcffb9da3ca29262bac78fcf7bbf09cf0a65aeb3d->enter($__internal_7a3f1fd4da08ba71e475c48fcffb9da3ca29262bac78fcf7bbf09cf0a65aeb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/myProfile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3f1fd4da08ba71e475c48fcffb9da3ca29262bac78fcf7bbf09cf0a65aeb3d->leave($__internal_7a3f1fd4da08ba71e475c48fcffb9da3ca29262bac78fcf7bbf09cf0a65aeb3d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_134d5d85958e274ceb43788460d8aa9ecc77f5861a4a4b0360d4e7d288cb22d9 = $this->env->getExtension("native_profiler");
        $__internal_134d5d85958e274ceb43788460d8aa9ecc77f5861a4a4b0360d4e7d288cb22d9->enter($__internal_134d5d85958e274ceb43788460d8aa9ecc77f5861a4a4b0360d4e7d288cb22d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_134d5d85958e274ceb43788460d8aa9ecc77f5861a4a4b0360d4e7d288cb22d9->leave($__internal_134d5d85958e274ceb43788460d8aa9ecc77f5861a4a4b0360d4e7d288cb22d9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ce6e5ccbfa3f6cb70d04dd35ad4bc557fabd128ef8f8fa49da79cd9615678d7 = $this->env->getExtension("native_profiler");
        $__internal_3ce6e5ccbfa3f6cb70d04dd35ad4bc557fabd128ef8f8fa49da79cd9615678d7->enter($__internal_3ce6e5ccbfa3f6cb70d04dd35ad4bc557fabd128ef8f8fa49da79cd9615678d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h3><span class=\" glyphicon glyphicon-user\"></span> Mon Profile</h3>
<form class=\"form-horizontal col-md-8\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_profile_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" >

  <div class=\"form-group\">
    <label for=\"\" class=\"col-md-6 control-label\">Photo</label>
    <div class=\"col-md-6\">
      <img class=\"myavatar col-md-4\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "avatar", array())), "html", null, true);
        echo "\">
    </div>
  </div>
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'row', array("label" => " "));
        echo "
  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "nom", array()), 'row', array("label" => "Nom Complet"));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "CIN", array()), 'row', array("label" => "CIN"));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "tel", array()), 'row', array("label" => "Tél"));
        echo "
  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employe", array()), "adresse", array()), 'row', array("label" => "Adresse"));
        echo "

  ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-offset-6 col-md-6\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"fui-new\"></span> Mettre à jours</button>
      </div>
    </div>
</form>

";
        
        $__internal_3ce6e5ccbfa3f6cb70d04dd35ad4bc557fabd128ef8f8fa49da79cd9615678d7->leave($__internal_3ce6e5ccbfa3f6cb70d04dd35ad4bc557fabd128ef8f8fa49da79cd9615678d7_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/myProfile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  69 => 14,  61 => 9,  57 => 7,  51 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <h3><span class=" glyphicon glyphicon-user"></span> Mon Profile</h3>*/
/* <form class="form-horizontal col-md-8" action="{{ path('ben_profile_update', { 'id': entity.id }) }}" method="post" >*/
/* */
/*   <div class="form-group">*/
/*     <label for="" class="col-md-6 control-label">Photo</label>*/
/*     <div class="col-md-6">*/
/*       <img class="myavatar col-md-4" src="{{ asset( entity.avatar)}}">*/
/*     </div>*/
/*   </div>*/
/*   {{ form_row(form.image.file, { 'label': ' '}) }}*/
/*   {{ form_row(form.employe.nom, { 'label': 'Nom Complet'}) }}*/
/*   {{ form_row(form.employe.CIN, { 'label': 'CIN'}) }}*/
/*   {{ form_row(form.employe.tel, { 'label': 'Tél'}) }}*/
/*   {{ form_row(form.employe.adresse, { 'label': 'Adresse'}) }}*/
/* */
/*   {{ form_rest(form) }}*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-offset-6 col-md-6">*/
/*         <button type="submit" name="subvalider" class="btn btn-primary"><span class="fui-new"></span> Mettre à jours</button>*/
/*       </div>*/
/*     </div>*/
/* </form>*/
/* */
/* {% endblock %}*/
