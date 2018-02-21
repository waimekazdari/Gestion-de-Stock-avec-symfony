<?php

/* gestionStock/MyProfile/changePassword.html.twig */
class __TwigTemplate_07b77c52de9c11dca318a7889b89ad50288bdd88f0b18ef7c95823f97ed94e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/MyProfile/changePassword.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37a579e6296b1fb953b41954703a257da312290d57ee6e09ea8367e0f953d01b = $this->env->getExtension("native_profiler");
        $__internal_37a579e6296b1fb953b41954703a257da312290d57ee6e09ea8367e0f953d01b->enter($__internal_37a579e6296b1fb953b41954703a257da312290d57ee6e09ea8367e0f953d01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/MyProfile/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37a579e6296b1fb953b41954703a257da312290d57ee6e09ea8367e0f953d01b->leave($__internal_37a579e6296b1fb953b41954703a257da312290d57ee6e09ea8367e0f953d01b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c5cd9b5de0bf0b87d17d64a52af3b5fca56a699d427a841686eaabf2a4e6ba5 = $this->env->getExtension("native_profiler");
        $__internal_3c5cd9b5de0bf0b87d17d64a52af3b5fca56a699d427a841686eaabf2a4e6ba5->enter($__internal_3c5cd9b5de0bf0b87d17d64a52af3b5fca56a699d427a841686eaabf2a4e6ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Mise à jour Compte
";
        
        $__internal_3c5cd9b5de0bf0b87d17d64a52af3b5fca56a699d427a841686eaabf2a4e6ba5->leave($__internal_3c5cd9b5de0bf0b87d17d64a52af3b5fca56a699d427a841686eaabf2a4e6ba5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_115dc09e39dff1ede46be3e1535948d4b7cc3d512c0c33ab770942edde56bc91 = $this->env->getExtension("native_profiler");
        $__internal_115dc09e39dff1ede46be3e1535948d4b7cc3d512c0c33ab770942edde56bc91->enter($__internal_115dc09e39dff1ede46be3e1535948d4b7cc3d512c0c33ab770942edde56bc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<form class=\"form-horizontal\" method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("password_update");
        echo "\" style =\"margin-left:30px;\" >
<br/><br/>
    <fieldset>
        <legend><span class=\"glyphicon glyphicon-lock\"></span> Changer votre mot de passe</legend>
        <br/>
        
        <div style = \"width:500px; margin-left:300px;\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 </br>
    <div class=\"form-group\" style=\"margin-left:-200px;\">
        <div class=\"col-md-offset-6 col-md-6\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Mettre à jour</button>
        </div>
    </div>
    </fieldset>
</form>
";
        
        $__internal_115dc09e39dff1ede46be3e1535948d4b7cc3d512c0c33ab770942edde56bc91->leave($__internal_115dc09e39dff1ede46be3e1535948d4b7cc3d512c0c33ab770942edde56bc91_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_965238ec2e617da02bd65a57e410e6de80741985f7d5e5c186367e8dc15bf357 = $this->env->getExtension("native_profiler");
        $__internal_965238ec2e617da02bd65a57e410e6de80741985f7d5e5c186367e8dc15bf357->enter($__internal_965238ec2e617da02bd65a57e410e6de80741985f7d5e5c186367e8dc15bf357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
    })(jQuery);
</script>
";
        
        $__internal_965238ec2e617da02bd65a57e410e6de80741985f7d5e5c186367e8dc15bf357->leave($__internal_965238ec2e617da02bd65a57e410e6de80741985f7d5e5c186367e8dc15bf357_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/MyProfile/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  93 => 27,  76 => 16,  71 => 14,  67 => 13,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Mise à jour Compte*/
/* {% endblock %}*/
/* {% block body %}*/
/* <form class="form-horizontal" method="POST" action="{{ path('password_update') }}" style ="margin-left:30px;" >*/
/* <br/><br/>*/
/*     <fieldset>*/
/*         <legend><span class="glyphicon glyphicon-lock"></span> Changer votre mot de passe</legend>*/
/*         <br/>*/
/*         */
/*         <div style = "width:500px; margin-left:300px;">*/
/*         {{ form_row(form.plainPassword.first,{'attr':{'class':'form-control'}}) }}*/
/*         {{ form_row(form.plainPassword.second,{'attr':{'class':'form-control'}}) }}*/
/*         </div>*/
/*         {{ form_rest(form) }}*/
/*  </br>*/
/*     <div class="form-group" style="margin-left:-200px;">*/
/*         <div class="col-md-offset-6 col-md-6">*/
/*             <button type="submit" name="subvalider" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>*/
/*         </div>*/
/*     </div>*/
/*     </fieldset>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/*            */
