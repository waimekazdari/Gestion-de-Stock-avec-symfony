<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3e9f49813622b148055c51590dfd34164d420eb1967f3eb70605eca070ecb020 extends Twig_Template
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
        $__internal_ddcfa5ad8b2fe6341679b0263a66b020bf66bc1fbbc0cb196b054d880b0b8f81 = $this->env->getExtension("native_profiler");
        $__internal_ddcfa5ad8b2fe6341679b0263a66b020bf66bc1fbbc0cb196b054d880b0b8f81->enter($__internal_ddcfa5ad8b2fe6341679b0263a66b020bf66bc1fbbc0cb196b054d880b0b8f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ddcfa5ad8b2fe6341679b0263a66b020bf66bc1fbbc0cb196b054d880b0b8f81->leave($__internal_ddcfa5ad8b2fe6341679b0263a66b020bf66bc1fbbc0cb196b054d880b0b8f81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
