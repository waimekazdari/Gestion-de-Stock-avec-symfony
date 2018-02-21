<?php

/* base.html.twig */
class __TwigTemplate_d36ead4b242d95cca2566d0c642f3a21233f38548322be8bcf3b40ddab9ca346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82e490e2ec7665210ac3bbafa8e64ed92270aa99955c0f109b35d2f32d606b54 = $this->env->getExtension("native_profiler");
        $__internal_82e490e2ec7665210ac3bbafa8e64ed92270aa99955c0f109b35d2f32d606b54->enter($__internal_82e490e2ec7665210ac3bbafa8e64ed92270aa99955c0f109b35d2f32d606b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_82e490e2ec7665210ac3bbafa8e64ed92270aa99955c0f109b35d2f32d606b54->leave($__internal_82e490e2ec7665210ac3bbafa8e64ed92270aa99955c0f109b35d2f32d606b54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d524f83c19814e35380745190064dcdc44bb9bae5fbd7384c094616b2c614bb = $this->env->getExtension("native_profiler");
        $__internal_9d524f83c19814e35380745190064dcdc44bb9bae5fbd7384c094616b2c614bb->enter($__internal_9d524f83c19814e35380745190064dcdc44bb9bae5fbd7384c094616b2c614bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9d524f83c19814e35380745190064dcdc44bb9bae5fbd7384c094616b2c614bb->leave($__internal_9d524f83c19814e35380745190064dcdc44bb9bae5fbd7384c094616b2c614bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_400b258754297ea3678230f6da19845edcdea45bcb97ad2d8893ba8226c74c31 = $this->env->getExtension("native_profiler");
        $__internal_400b258754297ea3678230f6da19845edcdea45bcb97ad2d8893ba8226c74c31->enter($__internal_400b258754297ea3678230f6da19845edcdea45bcb97ad2d8893ba8226c74c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_400b258754297ea3678230f6da19845edcdea45bcb97ad2d8893ba8226c74c31->leave($__internal_400b258754297ea3678230f6da19845edcdea45bcb97ad2d8893ba8226c74c31_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bc2337ac667fb2e83924555fc95bbc1157ce52049f5d7b1585b4fd5c0b3ac3f = $this->env->getExtension("native_profiler");
        $__internal_8bc2337ac667fb2e83924555fc95bbc1157ce52049f5d7b1585b4fd5c0b3ac3f->enter($__internal_8bc2337ac667fb2e83924555fc95bbc1157ce52049f5d7b1585b4fd5c0b3ac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8bc2337ac667fb2e83924555fc95bbc1157ce52049f5d7b1585b4fd5c0b3ac3f->leave($__internal_8bc2337ac667fb2e83924555fc95bbc1157ce52049f5d7b1585b4fd5c0b3ac3f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e904faa20466231d496034b61a4c6639141f63dfe645cf84d7150a41b7a0b668 = $this->env->getExtension("native_profiler");
        $__internal_e904faa20466231d496034b61a4c6639141f63dfe645cf84d7150a41b7a0b668->enter($__internal_e904faa20466231d496034b61a4c6639141f63dfe645cf84d7150a41b7a0b668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e904faa20466231d496034b61a4c6639141f63dfe645cf84d7150a41b7a0b668->leave($__internal_e904faa20466231d496034b61a4c6639141f63dfe645cf84d7150a41b7a0b668_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
