<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da8982b34302760b3234b40071bb62c762ef08db01f82a66ff1a99bee98b5217 extends Twig_Template
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
        $__internal_c2000075ad6c3834dd338f3f3f5b0689bde145167ba5a1f3889d9ec09e3a1ca3 = $this->env->getExtension("native_profiler");
        $__internal_c2000075ad6c3834dd338f3f3f5b0689bde145167ba5a1f3889d9ec09e3a1ca3->enter($__internal_c2000075ad6c3834dd338f3f3f5b0689bde145167ba5a1f3889d9ec09e3a1ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2000075ad6c3834dd338f3f3f5b0689bde145167ba5a1f3889d9ec09e3a1ca3->leave($__internal_c2000075ad6c3834dd338f3f3f5b0689bde145167ba5a1f3889d9ec09e3a1ca3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd987c5a71369d5e1c0ecf371df7661d0f71b2e55385e554b66540d371dc7af7 = $this->env->getExtension("native_profiler");
        $__internal_fd987c5a71369d5e1c0ecf371df7661d0f71b2e55385e554b66540d371dc7af7->enter($__internal_fd987c5a71369d5e1c0ecf371df7661d0f71b2e55385e554b66540d371dc7af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fd987c5a71369d5e1c0ecf371df7661d0f71b2e55385e554b66540d371dc7af7->leave($__internal_fd987c5a71369d5e1c0ecf371df7661d0f71b2e55385e554b66540d371dc7af7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d2feeea8e484d2fa7489eb37d9587395870aac5949918aef1b19aaf82396dfd = $this->env->getExtension("native_profiler");
        $__internal_4d2feeea8e484d2fa7489eb37d9587395870aac5949918aef1b19aaf82396dfd->enter($__internal_4d2feeea8e484d2fa7489eb37d9587395870aac5949918aef1b19aaf82396dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d2feeea8e484d2fa7489eb37d9587395870aac5949918aef1b19aaf82396dfd->leave($__internal_4d2feeea8e484d2fa7489eb37d9587395870aac5949918aef1b19aaf82396dfd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6607993c01803b49ab4fc8cda3dbfb3afa88f86513792bff55c735f211fd801f = $this->env->getExtension("native_profiler");
        $__internal_6607993c01803b49ab4fc8cda3dbfb3afa88f86513792bff55c735f211fd801f->enter($__internal_6607993c01803b49ab4fc8cda3dbfb3afa88f86513792bff55c735f211fd801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6607993c01803b49ab4fc8cda3dbfb3afa88f86513792bff55c735f211fd801f->leave($__internal_6607993c01803b49ab4fc8cda3dbfb3afa88f86513792bff55c735f211fd801f_prof);

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
