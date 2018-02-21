<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1dd4e1956a5591cd36ce57dde187f9d91de5206d90d1bdd533a8fe6d254a1ea1 extends Twig_Template
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
        $__internal_f176c60a6166f62f12cbd0fd3d26efae71f9a8024cbdf5a9195a14d0baa57c4d = $this->env->getExtension("native_profiler");
        $__internal_f176c60a6166f62f12cbd0fd3d26efae71f9a8024cbdf5a9195a14d0baa57c4d->enter($__internal_f176c60a6166f62f12cbd0fd3d26efae71f9a8024cbdf5a9195a14d0baa57c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f176c60a6166f62f12cbd0fd3d26efae71f9a8024cbdf5a9195a14d0baa57c4d->leave($__internal_f176c60a6166f62f12cbd0fd3d26efae71f9a8024cbdf5a9195a14d0baa57c4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2578a4d061cda684060e858b9066822925b8804401f33f3c14567528af47a2a = $this->env->getExtension("native_profiler");
        $__internal_e2578a4d061cda684060e858b9066822925b8804401f33f3c14567528af47a2a->enter($__internal_e2578a4d061cda684060e858b9066822925b8804401f33f3c14567528af47a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2578a4d061cda684060e858b9066822925b8804401f33f3c14567528af47a2a->leave($__internal_e2578a4d061cda684060e858b9066822925b8804401f33f3c14567528af47a2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8bc540cff183bc794137796f2bed8548ddc0b0b73f56de70c98a75dc55ce108 = $this->env->getExtension("native_profiler");
        $__internal_a8bc540cff183bc794137796f2bed8548ddc0b0b73f56de70c98a75dc55ce108->enter($__internal_a8bc540cff183bc794137796f2bed8548ddc0b0b73f56de70c98a75dc55ce108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a8bc540cff183bc794137796f2bed8548ddc0b0b73f56de70c98a75dc55ce108->leave($__internal_a8bc540cff183bc794137796f2bed8548ddc0b0b73f56de70c98a75dc55ce108_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_886a665d560d93f2bba9637070f3f2fe72d3a3f1001d10d417cd597371eebe44 = $this->env->getExtension("native_profiler");
        $__internal_886a665d560d93f2bba9637070f3f2fe72d3a3f1001d10d417cd597371eebe44->enter($__internal_886a665d560d93f2bba9637070f3f2fe72d3a3f1001d10d417cd597371eebe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_886a665d560d93f2bba9637070f3f2fe72d3a3f1001d10d417cd597371eebe44->leave($__internal_886a665d560d93f2bba9637070f3f2fe72d3a3f1001d10d417cd597371eebe44_prof);

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
