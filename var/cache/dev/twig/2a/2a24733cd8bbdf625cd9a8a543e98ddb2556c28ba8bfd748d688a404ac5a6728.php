<?php

/* default/flashes.html.twig */
class __TwigTemplate_e247673d3f40c6edcd6168937d85ac8a58a390312351cad48c00fa3a59e5e4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_505ccb2b0cff57b35f8ada0ee37b4b80a88cf54c62f2d8f4a66ee4f496dc6fb0 = $this->env->getExtension("native_profiler");
        $__internal_505ccb2b0cff57b35f8ada0ee37b4b80a88cf54c62f2d8f4a66ee4f496dc6fb0->enter($__internal_505ccb2b0cff57b35f8ada0ee37b4b80a88cf54c62f2d8f4a66ee4f496dc6fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/flashes.html.twig"));

        // line 1
        echo "<section class=\"flashbag\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 4
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " fade in\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>info !</strong>  ";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), "FOSUserBundle"), "html", null, true);
                echo " 
            </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</section>";
        
        $__internal_505ccb2b0cff57b35f8ada0ee37b4b80a88cf54c62f2d8f4a66ee4f496dc6fb0->leave($__internal_505ccb2b0cff57b35f8ada0ee37b4b80a88cf54c62f2d8f4a66ee4f496dc6fb0_prof);

    }

    public function getTemplateName()
    {
        return "default/flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  39 => 6,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <section class="flashbag">*/
/* {% for type, flashMessages in app.session.flashbag.all() %}*/
/* {% for flashMessage in flashMessages %}*/
/*             <div class="alert alert-{{ type }} fade in">*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                 <strong>info !</strong>  {{ flashMessage|trans({}, 'FOSUserBundle') }} */
/*             </div>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </section>*/
