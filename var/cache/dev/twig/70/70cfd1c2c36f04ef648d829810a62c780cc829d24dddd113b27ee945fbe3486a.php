<?php

/* gestionStock/Config/new.html.twig */
class __TwigTemplate_72dc5313763d9c9e86ebb3a0cf96a56c3d600fb017ea91e3bac16aab7f5068d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Config/new.html.twig", 1);
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
        $__internal_4c5d5e03c985d854c1eb122da0c994ce84d09bee94582cdeca0425fc6e7580b5 = $this->env->getExtension("native_profiler");
        $__internal_4c5d5e03c985d854c1eb122da0c994ce84d09bee94582cdeca0425fc6e7580b5->enter($__internal_4c5d5e03c985d854c1eb122da0c994ce84d09bee94582cdeca0425fc6e7580b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Config/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c5d5e03c985d854c1eb122da0c994ce84d09bee94582cdeca0425fc6e7580b5->leave($__internal_4c5d5e03c985d854c1eb122da0c994ce84d09bee94582cdeca0425fc6e7580b5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7957fab46d4edd771282f098c74ffb09131553ffcac7ef513ae02197864aab1 = $this->env->getExtension("native_profiler");
        $__internal_f7957fab46d4edd771282f098c74ffb09131553ffcac7ef513ae02197864aab1->enter($__internal_f7957fab46d4edd771282f098c74ffb09131553ffcac7ef513ae02197864aab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Tableau de bord | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f7957fab46d4edd771282f098c74ffb09131553ffcac7ef513ae02197864aab1->leave($__internal_f7957fab46d4edd771282f098c74ffb09131553ffcac7ef513ae02197864aab1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04952f7bbe441686f53067c24ab487b340ea7c19fcf979b0ffbca906008404a8 = $this->env->getExtension("native_profiler");
        $__internal_04952f7bbe441686f53067c24ab487b340ea7c19fcf979b0ffbca906008404a8->enter($__internal_04952f7bbe441686f53067c24ab487b340ea7c19fcf979b0ffbca906008404a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1><span class=\"fui-gear\"></span> Préférences - creation</h1>

<form class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("config_create");
        echo "\" method=\"post\" }}>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("config");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
   
";
        
        $__internal_04952f7bbe441686f53067c24ab487b340ea7c19fcf979b0ffbca906008404a8->leave($__internal_04952f7bbe441686f53067c24ab487b340ea7c19fcf979b0ffbca906008404a8_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Config/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  65 => 9,  61 => 8,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Tableau de bord | {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h1><span class="fui-gear"></span> Préférences - creation</h1>*/
/* */
/* <form class="form-horizontal" action="{{ path('config_create') }}" method="post" }}>*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <button type="submit">Create</button>*/
/*     </p>*/
/* </form>*/
/* */
/* <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('config') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/*    */
/* {% endblock body %}*/
/* */
