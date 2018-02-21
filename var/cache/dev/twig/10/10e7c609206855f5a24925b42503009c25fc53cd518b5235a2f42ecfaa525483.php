<?php

/* gestionStock/newCategory.html.twig */
class __TwigTemplate_fa3d16e85049ff5507a32ef9930c584310a5fc5a9cb39a81405a48be5e7c5ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gestionStock/newCategory.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e60f1b9602ba9817f4e591f4d9faec61e90f568802a45e2499b6720d257de6f7 = $this->env->getExtension("native_profiler");
        $__internal_e60f1b9602ba9817f4e591f4d9faec61e90f568802a45e2499b6720d257de6f7->enter($__internal_e60f1b9602ba9817f4e591f4d9faec61e90f568802a45e2499b6720d257de6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/newCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e60f1b9602ba9817f4e591f4d9faec61e90f568802a45e2499b6720d257de6f7->leave($__internal_e60f1b9602ba9817f4e591f4d9faec61e90f568802a45e2499b6720d257de6f7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_23905bfb08f5ea52df6b11b230a41b283d95141113c0c4ffe11d3f757da48d98 = $this->env->getExtension("native_profiler");
        $__internal_23905bfb08f5ea52df6b11b230a41b283d95141113c0c4ffe11d3f757da48d98->enter($__internal_23905bfb08f5ea52df6b11b230a41b283d95141113c0c4ffe11d3f757da48d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\"> Ajouter </button>
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_23905bfb08f5ea52df6b11b230a41b283d95141113c0c4ffe11d3f757da48d98->leave($__internal_23905bfb08f5ea52df6b11b230a41b283d95141113c0c4ffe11d3f757da48d98_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_667274bf7d7a0f1e3becdc07b925ede7a1893339d94bb5b09ae2ca9272dd1e0a = $this->env->getExtension("native_profiler");
        $__internal_667274bf7d7a0f1e3becdc07b925ede7a1893339d94bb5b09ae2ca9272dd1e0a->enter($__internal_667274bf7d7a0f1e3becdc07b925ede7a1893339d94bb5b09ae2ca9272dd1e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>window.jQuery || document.write('<script src=\"../../Resources/public/js/jquery.min.js\"><\\/script>')</script>

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/js/holder.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_667274bf7d7a0f1e3becdc07b925ede7a1893339d94bb5b09ae2ca9272dd1e0a->leave($__internal_667274bf7d7a0f1e3becdc07b925ede7a1893339d94bb5b09ae2ca9272dd1e0a_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/newCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  74 => 12,  67 => 9,  55 => 8,  51 => 7,  46 => 5,  43 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* {{ form_widget(form)}}*/
/* <button type="submit"> Ajouter </button>*/
/* {{ form_end(form)}}*/
/* {% block javascripts%}*/
/*  <script src="{{ asset('Resources/public/js/jquery.min.js') }}"></script>*/
/*     <script>window.jQuery || document.write('<script src="../../Resources/public/js/jquery.min.js"><\/script>')</script>*/
/* */
/*     <script src="{{ asset('Resources/public/js/bootstrap.min.js') }}"></script>*/
/* */
/*     <script src="{{ asset('Resources/public/js/holder.js') }}"></script>*/
/*  {% endblock%}*/
/* {% endblock %}*/
