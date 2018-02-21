<?php

/* gestionStock/registration/register.html.twig */
class __TwigTemplate_9fe10475c14e49e15c013f402e587239ec17f6a51597d91a7196bf131f800cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/registration/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab33278364ab687d4cb46fcd47f0f6ead8f06002801a470e462a0451d6a5f566 = $this->env->getExtension("native_profiler");
        $__internal_ab33278364ab687d4cb46fcd47f0f6ead8f06002801a470e462a0451d6a5f566->enter($__internal_ab33278364ab687d4cb46fcd47f0f6ead8f06002801a470e462a0451d6a5f566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab33278364ab687d4cb46fcd47f0f6ead8f06002801a470e462a0451d6a5f566->leave($__internal_ab33278364ab687d4cb46fcd47f0f6ead8f06002801a470e462a0451d6a5f566_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bcc2e36b645beec2eed5678a818d561c261fa197d7e982de98f441ed44e1557 = $this->env->getExtension("native_profiler");
        $__internal_9bcc2e36b645beec2eed5678a818d561c261fa197d7e982de98f441ed44e1557->enter($__internal_9bcc2e36b645beec2eed5678a818d561c261fa197d7e982de98f441ed44e1557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Inscription
";
        
        $__internal_9bcc2e36b645beec2eed5678a818d561c261fa197d7e982de98f441ed44e1557->leave($__internal_9bcc2e36b645beec2eed5678a818d561c261fa197d7e982de98f441ed44e1557_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde50e55fb2ef09627e99a567e61e5284fc3faa4bd9e6310e430485a48047907 = $this->env->getExtension("native_profiler");
        $__internal_cde50e55fb2ef09627e99a567e61e5284fc3faa4bd9e6310e430485a48047907->enter($__internal_cde50e55fb2ef09627e99a567e61e5284fc3faa4bd9e6310e430485a48047907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        // line 7
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\">Register!</button>
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<!--
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
<button type=\"submit\">Register!</button>
";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " -->
";
        
        $__internal_cde50e55fb2ef09627e99a567e61e5284fc3faa4bd9e6310e430485a48047907->leave($__internal_cde50e55fb2ef09627e99a567e61e5284fc3faa4bd9e6310e430485a48047907_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  65 => 10,  60 => 8,  57 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Inscription*/
/* {% endblock %}*/
/* {% block body %}*/
/* {{ form_start(form,{'attr':{'novalidate':'novalidate'}})*/
/* }}*/
/* {{form_widget(form)}}*/
/* <button type="submit">Register!</button>*/
/* {{ form_end(form) }}*/
/* */
/* <!--*/
/* {{ form_row(form.username) }}*/
/* {{ form_row(form.email) }}*/
/* {{ form_row(form.plainPassword.first) }}*/
/* {{ form_row(form.plainPassword.second) }}*/
/* <button type="submit">Register!</button>*/
/* {{ form_end(form) }} -->*/
/* {% endblock %}*/
