<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_7e4662fbde17980fad864ced020cc74eb8077b66edaf7c69cc7e0ce33774f97c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_888ff5c8a0acb80f27a4267ed4baa771e46133931c40524f054f1732385c6b7b = $this->env->getExtension("native_profiler");
        $__internal_888ff5c8a0acb80f27a4267ed4baa771e46133931c40524f054f1732385c6b7b->enter($__internal_888ff5c8a0acb80f27a4267ed4baa771e46133931c40524f054f1732385c6b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_888ff5c8a0acb80f27a4267ed4baa771e46133931c40524f054f1732385c6b7b->leave($__internal_888ff5c8a0acb80f27a4267ed4baa771e46133931c40524f054f1732385c6b7b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_98189f03b2a1dcf5e8d015fb29f217339d827c367edb44ed83d2c261a0a01a88 = $this->env->getExtension("native_profiler");
        $__internal_98189f03b2a1dcf5e8d015fb29f217339d827c367edb44ed83d2c261a0a01a88->enter($__internal_98189f03b2a1dcf5e8d015fb29f217339d827c367edb44ed83d2c261a0a01a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_98189f03b2a1dcf5e8d015fb29f217339d827c367edb44ed83d2c261a0a01a88->leave($__internal_98189f03b2a1dcf5e8d015fb29f217339d827c367edb44ed83d2c261a0a01a88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
