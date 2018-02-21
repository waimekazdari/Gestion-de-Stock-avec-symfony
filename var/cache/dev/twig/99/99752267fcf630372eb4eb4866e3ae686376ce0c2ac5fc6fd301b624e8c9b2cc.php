<?php

/* gestionStock/security/login.html.twig */
class __TwigTemplate_45d3c95df93771324567bd578e509a1d4570dc7cd3e85fd6a70ad01eb345e19e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/security/login.html.twig", 1);
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
        $__internal_12acbdd8ed7c1b196f3762758e3441a8e55dcc786ab34e29a92c25266131a472 = $this->env->getExtension("native_profiler");
        $__internal_12acbdd8ed7c1b196f3762758e3441a8e55dcc786ab34e29a92c25266131a472->enter($__internal_12acbdd8ed7c1b196f3762758e3441a8e55dcc786ab34e29a92c25266131a472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12acbdd8ed7c1b196f3762758e3441a8e55dcc786ab34e29a92c25266131a472->leave($__internal_12acbdd8ed7c1b196f3762758e3441a8e55dcc786ab34e29a92c25266131a472_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b56fbf4e2461bc852106dbbee98dcae9017413927cb0f80fed58d51cf53aa71 = $this->env->getExtension("native_profiler");
        $__internal_8b56fbf4e2461bc852106dbbee98dcae9017413927cb0f80fed58d51cf53aa71->enter($__internal_8b56fbf4e2461bc852106dbbee98dcae9017413927cb0f80fed58d51cf53aa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Login
";
        
        $__internal_8b56fbf4e2461bc852106dbbee98dcae9017413927cb0f80fed58d51cf53aa71->leave($__internal_8b56fbf4e2461bc852106dbbee98dcae9017413927cb0f80fed58d51cf53aa71_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea3f505a3c17cfe6ee238cb3b6317cffc4a46047f86ba8dee7b87de4a3e3a363 = $this->env->getExtension("native_profiler");
        $__internal_ea3f505a3c17cfe6ee238cb3b6317cffc4a46047f86ba8dee7b87de4a3e3a363->enter($__internal_ea3f505a3c17cfe6ee238cb3b6317cffc4a46047f86ba8dee7b87de4a3e3a363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_ea3f505a3c17cfe6ee238cb3b6317cffc4a46047f86ba8dee7b87de4a3e3a363->leave($__internal_ea3f505a3c17cfe6ee238cb3b6317cffc4a46047f86ba8dee7b87de4a3e3a363_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_591673490e0e3d9e4efa0bc8adc0fd4ade553e5583c35cd1e1a89d60f2ec2c22 = $this->env->getExtension("native_profiler");
        $__internal_591673490e0e3d9e4efa0bc8adc0fd4ade553e5583c35cd1e1a89d60f2ec2c22->enter($__internal_591673490e0e3d9e4efa0bc8adc0fd4ade553e5583c35cd1e1a89d60f2ec2c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "<body class=\"sign-in-bg\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-md-offset-4\">

";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "            <div class=\"sign-in-head text-center\">
                <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"account-wall\">
                <img class=\"profile-img\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/uploads/img/anonymous.png"), "html", null, true);
        echo "\"
                    alt=\"\">
<form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\" class=\"form-signin\">
<input type=\"text\" class=\"form-control\" placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required><br/>
<input type=\"password\" class=\"form-control\" placeholder=\"Password\" id=\"password\" name=\"_password\" required/>
";
        // line 30
        echo "<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Se Connecter</button>
<label class=\"checkbox pull-left\" style=\"margin-left:54px\">
<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked  />
<label for=\"remember_me\">Garder ma session active</label>
</label>
<span class=\"clearfix\"></span>
</form>
</div>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" class=\"text-center new-account\">Créer un nouveau Compte </a>
        </div>
\t\t\t</div>
   \t\t </div>
\t</div>
</div>
";
        
        $__internal_591673490e0e3d9e4efa0bc8adc0fd4ade553e5583c35cd1e1a89d60f2ec2c22->leave($__internal_591673490e0e3d9e4efa0bc8adc0fd4ade553e5583c35cd1e1a89d60f2ec2c22_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  106 => 30,  101 => 23,  97 => 22,  92 => 20,  86 => 17,  83 => 16,  77 => 13,  75 => 12,  68 => 7,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Login*/
/* {% endblock %}*/
/* {% block body %}*/
/* {% block container %}*/
/* <body class="sign-in-bg">*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-md-4 col-md-offset-4">*/
/* */
/* {% if error %}*/
/* <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* {# <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1> #}*/
/*             <div class="sign-in-head text-center">*/
/*                 <h1>{{ app_config.app_name }}</h1>*/
/*             </div>*/
/*             <div class="account-wall">*/
/*                 <img class="profile-img" src="{{ asset("Resources/public/uploads/img/anonymous.png") }}"*/
/*                     alt="">*/
/* <form action="{{ path('login') }}" method="post" class="form-signin">*/
/* <input type="text" class="form-control" placeholder="Username" id="username" name="_username" value="{{ last_username }}" required><br/>*/
/* <input type="password" class="form-control" placeholder="Password" id="password" name="_password" required/>*/
/* {#*/
/* If you want to control the URL the user*/
/* is redirected to on success (more details below)*/
/* <input type="hidden" name="_target_path" value="/account" />*/
/* #}*/
/* <button class="btn btn-lg btn-primary btn-block" type="submit">Se Connecter</button>*/
/* <label class="checkbox pull-left" style="margin-left:54px">*/
/* <input type="checkbox" id="remember_me" name="_remember_me" checked  />*/
/* <label for="remember_me">Garder ma session active</label>*/
/* </label>*/
/* <span class="clearfix"></span>*/
/* </form>*/
/* </div>*/
/*             <a href="{{path('register')}}" class="text-center new-account">Créer un nouveau Compte </a>*/
/*         </div>*/
/* 			</div>*/
/*    		 </div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
