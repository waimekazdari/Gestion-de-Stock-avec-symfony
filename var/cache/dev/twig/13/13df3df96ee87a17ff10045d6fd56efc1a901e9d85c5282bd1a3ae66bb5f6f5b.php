<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_61cc48a67deb9bf8d88c28cdb5a8556caec1578a979496539eb05c2333859932 extends Twig_Template
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
        $__internal_e1487c696abaec943dfe764b43c525af601ed1515062e0a84213f9e436ac9414 = $this->env->getExtension("native_profiler");
        $__internal_e1487c696abaec943dfe764b43c525af601ed1515062e0a84213f9e436ac9414->enter($__internal_e1487c696abaec943dfe764b43c525af601ed1515062e0a84213f9e436ac9414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1487c696abaec943dfe764b43c525af601ed1515062e0a84213f9e436ac9414->leave($__internal_e1487c696abaec943dfe764b43c525af601ed1515062e0a84213f9e436ac9414_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b478128037f75ca235d0518d2946267b709b5d4e969e327f2e0f7e9dde1bec27 = $this->env->getExtension("native_profiler");
        $__internal_b478128037f75ca235d0518d2946267b709b5d4e969e327f2e0f7e9dde1bec27->enter($__internal_b478128037f75ca235d0518d2946267b709b5d4e969e327f2e0f7e9dde1bec27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b478128037f75ca235d0518d2946267b709b5d4e969e327f2e0f7e9dde1bec27->leave($__internal_b478128037f75ca235d0518d2946267b709b5d4e969e327f2e0f7e9dde1bec27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c6886a105796e6dbfb9f22f0e12f80e401d83f61c7e965bf3a7be58afed5fd7 = $this->env->getExtension("native_profiler");
        $__internal_6c6886a105796e6dbfb9f22f0e12f80e401d83f61c7e965bf3a7be58afed5fd7->enter($__internal_6c6886a105796e6dbfb9f22f0e12f80e401d83f61c7e965bf3a7be58afed5fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c6886a105796e6dbfb9f22f0e12f80e401d83f61c7e965bf3a7be58afed5fd7->leave($__internal_6c6886a105796e6dbfb9f22f0e12f80e401d83f61c7e965bf3a7be58afed5fd7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3548cf2ba528447657afb545cc9d2aa0e8ee3f5264af8f41be4da13d6e94586b = $this->env->getExtension("native_profiler");
        $__internal_3548cf2ba528447657afb545cc9d2aa0e8ee3f5264af8f41be4da13d6e94586b->enter($__internal_3548cf2ba528447657afb545cc9d2aa0e8ee3f5264af8f41be4da13d6e94586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3548cf2ba528447657afb545cc9d2aa0e8ee3f5264af8f41be4da13d6e94586b->leave($__internal_3548cf2ba528447657afb545cc9d2aa0e8ee3f5264af8f41be4da13d6e94586b_prof);

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
