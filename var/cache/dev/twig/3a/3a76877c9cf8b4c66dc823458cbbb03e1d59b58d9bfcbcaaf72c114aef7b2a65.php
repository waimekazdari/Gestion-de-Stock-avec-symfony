<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fcbb8ceadd97a926346272194620115d3f6b2c56123e6a7045a5b34f72568868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0373612eb682ea35eba63d0162a8897bfdded11f068e032e710aa891c40b3e56 = $this->env->getExtension("native_profiler");
        $__internal_0373612eb682ea35eba63d0162a8897bfdded11f068e032e710aa891c40b3e56->enter($__internal_0373612eb682ea35eba63d0162a8897bfdded11f068e032e710aa891c40b3e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0373612eb682ea35eba63d0162a8897bfdded11f068e032e710aa891c40b3e56->leave($__internal_0373612eb682ea35eba63d0162a8897bfdded11f068e032e710aa891c40b3e56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b81d0b56187c8479500d3d549f40beb8bcfb1fb96a395ea3661ae44cc520c74 = $this->env->getExtension("native_profiler");
        $__internal_9b81d0b56187c8479500d3d549f40beb8bcfb1fb96a395ea3661ae44cc520c74->enter($__internal_9b81d0b56187c8479500d3d549f40beb8bcfb1fb96a395ea3661ae44cc520c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b81d0b56187c8479500d3d549f40beb8bcfb1fb96a395ea3661ae44cc520c74->leave($__internal_9b81d0b56187c8479500d3d549f40beb8bcfb1fb96a395ea3661ae44cc520c74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4170efee31b9e0ea405d088b0e35f9b2c704f32ea2f374d8e0dd94f94b30677 = $this->env->getExtension("native_profiler");
        $__internal_e4170efee31b9e0ea405d088b0e35f9b2c704f32ea2f374d8e0dd94f94b30677->enter($__internal_e4170efee31b9e0ea405d088b0e35f9b2c704f32ea2f374d8e0dd94f94b30677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4170efee31b9e0ea405d088b0e35f9b2c704f32ea2f374d8e0dd94f94b30677->leave($__internal_e4170efee31b9e0ea405d088b0e35f9b2c704f32ea2f374d8e0dd94f94b30677_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36df08da19d9c8982c6f9e4be7562d84cebe15df5ed1c6e3cbb5883c3de494a8 = $this->env->getExtension("native_profiler");
        $__internal_36df08da19d9c8982c6f9e4be7562d84cebe15df5ed1c6e3cbb5883c3de494a8->enter($__internal_36df08da19d9c8982c6f9e4be7562d84cebe15df5ed1c6e3cbb5883c3de494a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36df08da19d9c8982c6f9e4be7562d84cebe15df5ed1c6e3cbb5883c3de494a8->leave($__internal_36df08da19d9c8982c6f9e4be7562d84cebe15df5ed1c6e3cbb5883c3de494a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
