<?php

/* default/hello.html.twig */
class __TwigTemplate_bf2077540061ffe7d16b09aae55c27eeef1ebfa59490224f4c7f78d53ede1452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/hello.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            '__internal_1825a3f77d4d181a2424778e00032a14e0d3b1d9cb3ed144ae069f8a138f265c' => array($this, 'block___internal_1825a3f77d4d181a2424778e00032a14e0d3b1d9cb3ed144ae069f8a138f265c'),
            '__internal_7671f0d05c3e557e660d8bcb1fcfa1829c0acca6180e30d12f5ebda8f25d99d5' => array($this, 'block___internal_7671f0d05c3e557e660d8bcb1fcfa1829c0acca6180e30d12f5ebda8f25d99d5'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62dfd5ecbecd968b6c048c9d7d65a2b32cc874e0d1aed7c383a908a0a4b955ef = $this->env->getExtension("native_profiler");
        $__internal_62dfd5ecbecd968b6c048c9d7d65a2b32cc874e0d1aed7c383a908a0a4b955ef->enter($__internal_62dfd5ecbecd968b6c048c9d7d65a2b32cc874e0d1aed7c383a908a0a4b955ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62dfd5ecbecd968b6c048c9d7d65a2b32cc874e0d1aed7c383a908a0a4b955ef->leave($__internal_62dfd5ecbecd968b6c048c9d7d65a2b32cc874e0d1aed7c383a908a0a4b955ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ca825b7c94f4258046e8c3f998aa0fa5ce6eed139b3b1bb960a7031f3b1b4ed = $this->env->getExtension("native_profiler");
        $__internal_5ca825b7c94f4258046e8c3f998aa0fa5ce6eed139b3b1bb960a7031f3b1b4ed->enter($__internal_5ca825b7c94f4258046e8c3f998aa0fa5ce6eed139b3b1bb960a7031f3b1b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Hi ! Welcome to Symfony!</h1>
";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_1825a3f77d4d181a2424778e00032a14e0d3b1d9cb3ed144ae069f8a138f265c", $context, $blocks)), "html", null, true);
        // line 20
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_7671f0d05c3e557e660d8bcb1fcfa1829c0acca6180e30d12f5ebda8f25d99d5", $context, $blocks)));
        // line 23
        echo "
";
        // line 25
        echo "<strong>Je vais être affiché en gras</strong>
";
        // line 27
        echo "
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "    * ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), twig_upper_filter($this->env, "z")));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 33
            echo "    * ";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "<ul>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["user"]);
            echo "</li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "        <li><em>no user found</em></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</ul>

";
        // line 43
        $context["forms"] = $this->loadTemplate("default/marcos.html", "default/hello.html.twig", 43);
        // line 44
        echo "
<dl>
    <dt>Username</dt>
    <dd>";
        // line 47
        echo $context["forms"]->getinput("username");
        echo "</dd>
    <dt>Password</dt>
    <dd>";
        // line 49
        echo $context["forms"]->getinput("password", null, "password");
        echo "</dd>
</dl>
<p>";
        // line 51
        echo $context["forms"]->gettextarea("comment");
        echo "</p>
";
        
        $__internal_5ca825b7c94f4258046e8c3f998aa0fa5ce6eed139b3b1bb960a7031f3b1b4ed->leave($__internal_5ca825b7c94f4258046e8c3f998aa0fa5ce6eed139b3b1bb960a7031f3b1b4ed_prof);

    }

    // line 5
    public function block___internal_1825a3f77d4d181a2424778e00032a14e0d3b1d9cb3ed144ae069f8a138f265c($context, array $blocks = array())
    {
        $__internal_dd0da14923e2e4f0f3eb7c865d785f94808dc50bd1d90baedcbb3bc47e504891 = $this->env->getExtension("native_profiler");
        $__internal_dd0da14923e2e4f0f3eb7c865d785f94808dc50bd1d90baedcbb3bc47e504891->enter($__internal_dd0da14923e2e4f0f3eb7c865d785f94808dc50bd1d90baedcbb3bc47e504891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_1825a3f77d4d181a2424778e00032a14e0d3b1d9cb3ed144ae069f8a138f265c"));

        // line 6
        echo "<div class=\"btn-group pull-right\" style=\"margin-top: 15px;\">              
  <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span> Selectioner une action</button>
  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\"\">
    <li><a href=\"\"><span class=\"glyphicon glyphicon-edit\"></span> modifier</a></li>
    <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
    <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
  </ul>
</div>
    je vais être écrit en majuscule
";
        
        $__internal_dd0da14923e2e4f0f3eb7c865d785f94808dc50bd1d90baedcbb3bc47e504891->leave($__internal_dd0da14923e2e4f0f3eb7c865d785f94808dc50bd1d90baedcbb3bc47e504891_prof);

    }

    // line 20
    public function block___internal_7671f0d05c3e557e660d8bcb1fcfa1829c0acca6180e30d12f5ebda8f25d99d5($context, array $blocks = array())
    {
        $__internal_a3a80edb22fe955e29013b730838add7d582eaa300b7a97d61dec7ddf7dee7db = $this->env->getExtension("native_profiler");
        $__internal_a3a80edb22fe955e29013b730838add7d582eaa300b7a97d61dec7ddf7dee7db->enter($__internal_a3a80edb22fe955e29013b730838add7d582eaa300b7a97d61dec7ddf7dee7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_7671f0d05c3e557e660d8bcb1fcfa1829c0acca6180e30d12f5ebda8f25d99d5"));

        // line 21
        echo "    je vais être écrit en majuscule <em>et échappé</em>
";
        
        $__internal_a3a80edb22fe955e29013b730838add7d582eaa300b7a97d61dec7ddf7dee7db->leave($__internal_a3a80edb22fe955e29013b730838add7d582eaa300b7a97d61dec7ddf7dee7db_prof);

    }

    public function getTemplateName()
    {
        return "default/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 21,  165 => 20,  146 => 6,  140 => 5,  131 => 51,  126 => 49,  121 => 47,  116 => 44,  114 => 43,  110 => 41,  103 => 39,  95 => 37,  90 => 36,  87 => 35,  78 => 33,  74 => 32,  71 => 31,  62 => 29,  58 => 28,  55 => 27,  52 => 25,  49 => 23,  47 => 20,  45 => 5,  42 => 4,  36 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/default/hello.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1>Hi ! Welcome to Symfony!</h1>*/
/* {% filter upper %}*/
/* <div class="btn-group pull-right" style="margin-top: 15px;">              */
/*   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span> Selectioner une action</button>*/
/*   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu" role="menu"">*/
/*     <li><a href=""><span class="glyphicon glyphicon-edit"></span> modifier</a></li>*/
/*     <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*     <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*   </ul>*/
/* </div>*/
/*     je vais être écrit en majuscule*/
/* {% endfilter %}*/
/* {# {% include "default/hello.html.twig" with {'name': 'kazdari'} %} #}*/
/* {% filter upper|escape %}*/
/*     je vais être écrit en majuscule <em>et échappé</em>*/
/* {% endfilter %}*/
/* */
/* {% autoescape false %}*/
/* <strong>Je vais être affiché en gras</strong>*/
/* {% endautoescape %}*/
/* */
/* {% for i in 0..10 %}*/
/*     * {{ i }}*/
/* {% endfor %}*/
/* */
/* {% for letter in 'a'|upper..'z'|upper %}*/
/*     * {{ letter }}*/
/* {% endfor %}*/
/* <ul>*/
/*     {% for user in 0..10 %}*/
/*         <li>{{user|e}}</li>*/
/*     {% else %}*/
/*         <li><em>no user found</em></li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% import 'default/marcos.html' as forms %}*/
/* */
/* <dl>*/
/*     <dt>Username</dt>*/
/*     <dd>{{ forms.input('username') }}</dd>*/
/*     <dt>Password</dt>*/
/*     <dd>{{ forms.input('password', none, 'password') }}</dd>*/
/* </dl>*/
/* <p>{{ forms.textarea('comment') }}</p>*/
/* {% endblock %}*/
/* */
/* {#  l'héritage */
/* Dans cet exemple, le template parent s'appelle base.html. Un petit point dans le template enfant. Dans le block head, il y a un {{ parent() }}. Cette fonction signifie que le bloc n'est pas nettoyé et le contenu du bloc head sera celui présent dans le template parent et le template enfant.*/
/* #}*/
/* {# */
/* {% extends "default/forme.html" %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* {% block head %}*/
/*   {{ parent() }}*/
/*   <style type="text/css">*/
/*     .important { color: #336699; }*/
/*   </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*   <h1>Index</h1>*/
/*   <p class="important">*/
/*     Welcome on my awesome homepage.*/
/*   </p>*/
/* {% endblock %}*/
/* #}*/
