<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14405303310870d79147aeca477e1fca42d4efc28fae610f8607b603dccba51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39ee67651fdff9ce37592569512fe5d5ea9a7e7b61b2c9da322590717c90bc19 = $this->env->getExtension("native_profiler");
        $__internal_39ee67651fdff9ce37592569512fe5d5ea9a7e7b61b2c9da322590717c90bc19->enter($__internal_39ee67651fdff9ce37592569512fe5d5ea9a7e7b61b2c9da322590717c90bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ee67651fdff9ce37592569512fe5d5ea9a7e7b61b2c9da322590717c90bc19->leave($__internal_39ee67651fdff9ce37592569512fe5d5ea9a7e7b61b2c9da322590717c90bc19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22146917e984f5bf0a20af6089a19a754f134340387c4bdb93131e9d9fb89105 = $this->env->getExtension("native_profiler");
        $__internal_22146917e984f5bf0a20af6089a19a754f134340387c4bdb93131e9d9fb89105->enter($__internal_22146917e984f5bf0a20af6089a19a754f134340387c4bdb93131e9d9fb89105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_22146917e984f5bf0a20af6089a19a754f134340387c4bdb93131e9d9fb89105->leave($__internal_22146917e984f5bf0a20af6089a19a754f134340387c4bdb93131e9d9fb89105_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_630ffbefff5d546b4af2f8a008d7e8019e126435c97bd6943891e795d71be86c = $this->env->getExtension("native_profiler");
        $__internal_630ffbefff5d546b4af2f8a008d7e8019e126435c97bd6943891e795d71be86c->enter($__internal_630ffbefff5d546b4af2f8a008d7e8019e126435c97bd6943891e795d71be86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_630ffbefff5d546b4af2f8a008d7e8019e126435c97bd6943891e795d71be86c->leave($__internal_630ffbefff5d546b4af2f8a008d7e8019e126435c97bd6943891e795d71be86c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2706bfcdc93961abdfc0cd43933b135757f300e8472d55646daf46adb3a4b7 = $this->env->getExtension("native_profiler");
        $__internal_0d2706bfcdc93961abdfc0cd43933b135757f300e8472d55646daf46adb3a4b7->enter($__internal_0d2706bfcdc93961abdfc0cd43933b135757f300e8472d55646daf46adb3a4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d2706bfcdc93961abdfc0cd43933b135757f300e8472d55646daf46adb3a4b7->leave($__internal_0d2706bfcdc93961abdfc0cd43933b135757f300e8472d55646daf46adb3a4b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
