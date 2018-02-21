<?php

/* gestionStock/myProfile/edit.html.twig */
class __TwigTemplate_70cf8e6ad860e0e66eeabd5ea32c087435e81c966d6ef10a43e8b87cec1de720 extends Twig_Template
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
        $__internal_32b2cd3d6c6bf40dfb42b93b9c14cffe1b6748eea67764d86c415d83194611be = $this->env->getExtension("native_profiler");
        $__internal_32b2cd3d6c6bf40dfb42b93b9c14cffe1b6748eea67764d86c415d83194611be->enter($__internal_32b2cd3d6c6bf40dfb42b93b9c14cffe1b6748eea67764d86c415d83194611be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/myProfile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b2cd3d6c6bf40dfb42b93b9c14cffe1b6748eea67764d86c415d83194611be->leave($__internal_32b2cd3d6c6bf40dfb42b93b9c14cffe1b6748eea67764d86c415d83194611be_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c38830e0bfcd2c3e58a64c01db1c7e19181fc8259e439044be1ab72a2cc2ab1f = $this->env->getExtension("native_profiler");
        $__internal_c38830e0bfcd2c3e58a64c01db1c7e19181fc8259e439044be1ab72a2cc2ab1f->enter($__internal_c38830e0bfcd2c3e58a64c01db1c7e19181fc8259e439044be1ab72a2cc2ab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c38830e0bfcd2c3e58a64c01db1c7e19181fc8259e439044be1ab72a2cc2ab1f->leave($__internal_c38830e0bfcd2c3e58a64c01db1c7e19181fc8259e439044be1ab72a2cc2ab1f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5005c179e0b877e13859d68dbe762601652195701fa03a1ec817502d166967f8 = $this->env->getExtension("native_profiler");
        $__internal_5005c179e0b877e13859d68dbe762601652195701fa03a1ec817502d166967f8->enter($__internal_5005c179e0b877e13859d68dbe762601652195701fa03a1ec817502d166967f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5005c179e0b877e13859d68dbe762601652195701fa03a1ec817502d166967f8->leave($__internal_5005c179e0b877e13859d68dbe762601652195701fa03a1ec817502d166967f8_prof);

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
