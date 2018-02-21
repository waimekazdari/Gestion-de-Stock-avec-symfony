<?php

/* gestionStock/Admin/form.html.twig */
class __TwigTemplate_74e6983ea37ab9a4711ed568e0d9cec48ce341d8f873ac95a8f17a32229558f7 extends Twig_Template
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
        $__internal_7951212b6c92dc1e0a2d22598c388279fe07a120bc2aecee1e0f6aed1967aa8f = $this->env->getExtension("native_profiler");
        $__internal_7951212b6c92dc1e0a2d22598c388279fe07a120bc2aecee1e0f6aed1967aa8f->enter($__internal_7951212b6c92dc1e0a2d22598c388279fe07a120bc2aecee1e0f6aed1967aa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Admin/form.html.twig"));

        // line 1
        echo "<h3><span class=\"glyphicon glyphicon-user\"></span> Mise à jour d'un Employe</h3>
<form class=\"form-horizontal\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_update_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">        
    <div class=\"tabbable\">

    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Photo</label>
          <div class=\"col-md-4\">
            <img class=\"myavatar col-md-4\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "path", array())), "html", null, true);
        echo "\">
          </div>
        </div>  
        <div class=\"form-group\" style=\"margin-left:236px\">            
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["imgform"]) ? $context["imgform"] : $this->getContext($context, "imgform")), "file", array()), 'row', array("label" => " "));
        echo "
        </div><br/>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Nom de l'employe</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"emp[emp_name]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "nom", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">CIN de l'employe</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"emp[emp_cin]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "cin", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">num tele de l'employe</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"emp[emp_tel]\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "tel", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Adresse de l'employe</label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"emp[emp_adresse]\" placeholder=\"ajouter une adresse...\" class=\"form-control\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "adresse", array()), "html", null, true);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">username</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"emp[emp_username]\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Email</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"emp[emp_email]\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
      </div><!-- /tab1 -->
    </div> <!-- /tab-content -->
   </div>
       <div class=\"form-group\">
         <div class=\"col-md-offset-4 col-md-4\">
           <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-check-inverted\"></span> Mettre à jour</button>
         </div>
       </div>
</form>
";
        
        $__internal_7951212b6c92dc1e0a2d22598c388279fe07a120bc2aecee1e0f6aed1967aa8f->leave($__internal_7951212b6c92dc1e0a2d22598c388279fe07a120bc2aecee1e0f6aed1967aa8f_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Admin/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 49,  87 => 43,  78 => 37,  69 => 31,  60 => 25,  51 => 19,  43 => 14,  36 => 10,  25 => 2,  22 => 1,);
    }
}
/* <h3><span class="glyphicon glyphicon-user"></span> Mise à jour d'un Employe</h3>*/
/* <form class="form-horizontal" action="{{ path('ben_update_user',{ 'id': entity.id }) }}" method="POST" enctype="multipart/form-data">        */
/*     <div class="tabbable">*/
/* */
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab1">*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Photo</label>*/
/*           <div class="col-md-4">*/
/*             <img class="myavatar col-md-4" src="{{ asset( entity.image.path )}}">*/
/*           </div>*/
/*         </div>  */
/*         <div class="form-group" style="margin-left:236px">            */
/*         {{ form_row(imgform.file, { 'label': ' '}) }}*/
/*         </div><br/>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Nom de l'employe</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="emp[emp_name]" value="{{entity.employe.nom}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">CIN de l'employe</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="emp[emp_cin]" value="{{entity.employe.cin}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">num tele de l'employe</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="emp[emp_tel]" value="{{entity.employe.tel}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Adresse de l'employe</label>*/
/*           <div class="col-md-4">*/
/*             <textarea rows="3" name="emp[emp_adresse]" placeholder="ajouter une adresse..." class="form-control">{{entity.employe.adresse}}</textarea>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">username</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="emp[emp_username]" value="{{entity.username}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Email</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="emp[emp_email]" value="{{entity.email}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*       </div><!-- /tab1 -->*/
/*     </div> <!-- /tab-content -->*/
/*    </div>*/
/*        <div class="form-group">*/
/*          <div class="col-md-offset-4 col-md-4">*/
/*            <button type="submit" name="subvalider" class="btn btn-primary btn-embossed"><span class="fui-check-inverted"></span> Mettre à jour</button>*/
/*          </div>*/
/*        </div>*/
/* </form>*/
/* */
