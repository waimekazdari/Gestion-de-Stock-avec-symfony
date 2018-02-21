<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6628a87b42e8f7f4dc1a18fab11c26115fe2885d7b0286b38534307d7661f1e9 extends Twig_Template
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
        $__internal_f1fc33f85ce4fb2ff75a874925bf7e722bf91bbabe056317e2b553e13ac002fd = $this->env->getExtension("native_profiler");
        $__internal_f1fc33f85ce4fb2ff75a874925bf7e722bf91bbabe056317e2b553e13ac002fd->enter($__internal_f1fc33f85ce4fb2ff75a874925bf7e722bf91bbabe056317e2b553e13ac002fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fc33f85ce4fb2ff75a874925bf7e722bf91bbabe056317e2b553e13ac002fd->leave($__internal_f1fc33f85ce4fb2ff75a874925bf7e722bf91bbabe056317e2b553e13ac002fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b71adb51f30af67eb951cb17ea2276908252a5870a91538c55f80189d263e85f = $this->env->getExtension("native_profiler");
        $__internal_b71adb51f30af67eb951cb17ea2276908252a5870a91538c55f80189d263e85f->enter($__internal_b71adb51f30af67eb951cb17ea2276908252a5870a91538c55f80189d263e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b71adb51f30af67eb951cb17ea2276908252a5870a91538c55f80189d263e85f->leave($__internal_b71adb51f30af67eb951cb17ea2276908252a5870a91538c55f80189d263e85f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_237206edcf4a72eb4e25a4895ee3bf43ef460655d5bc241721205a0ca57c62b1 = $this->env->getExtension("native_profiler");
        $__internal_237206edcf4a72eb4e25a4895ee3bf43ef460655d5bc241721205a0ca57c62b1->enter($__internal_237206edcf4a72eb4e25a4895ee3bf43ef460655d5bc241721205a0ca57c62b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_237206edcf4a72eb4e25a4895ee3bf43ef460655d5bc241721205a0ca57c62b1->leave($__internal_237206edcf4a72eb4e25a4895ee3bf43ef460655d5bc241721205a0ca57c62b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97593faa34a5fad019032cbbdb5667baf74dd42c43414b73ef05071144850343 = $this->env->getExtension("native_profiler");
        $__internal_97593faa34a5fad019032cbbdb5667baf74dd42c43414b73ef05071144850343->enter($__internal_97593faa34a5fad019032cbbdb5667baf74dd42c43414b73ef05071144850343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_97593faa34a5fad019032cbbdb5667baf74dd42c43414b73ef05071144850343->leave($__internal_97593faa34a5fad019032cbbdb5667baf74dd42c43414b73ef05071144850343_prof);

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
