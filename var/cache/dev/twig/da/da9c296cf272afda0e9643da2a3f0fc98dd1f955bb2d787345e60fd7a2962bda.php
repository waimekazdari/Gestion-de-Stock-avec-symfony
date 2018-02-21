<?php

/* gestionStock/Accueil.html.twig */
class __TwigTemplate_7eb8ee18ed818d2b5168f9197ecdb74bfd14f53c2e6905c62e67314db40f1609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4998f57b46845f928205ea255b0590b6e3e08488fb38b698b946d2b0de6718c = $this->env->getExtension("native_profiler");
        $__internal_f4998f57b46845f928205ea255b0590b6e3e08488fb38b698b946d2b0de6718c->enter($__internal_f4998f57b46845f928205ea255b0590b6e3e08488fb38b698b946d2b0de6718c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4998f57b46845f928205ea255b0590b6e3e08488fb38b698b946d2b0de6718c->leave($__internal_f4998f57b46845f928205ea255b0590b6e3e08488fb38b698b946d2b0de6718c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_17e64d78e2d2d410a035cb998129fce7cbbd7cb11aa348f69ba6336b738ed715 = $this->env->getExtension("native_profiler");
        $__internal_17e64d78e2d2d410a035cb998129fce7cbbd7cb11aa348f69ba6336b738ed715->enter($__internal_17e64d78e2d2d410a035cb998129fce7cbbd7cb11aa348f69ba6336b738ed715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Liste des Articles
";
        
        $__internal_17e64d78e2d2d410a035cb998129fce7cbbd7cb11aa348f69ba6336b738ed715->leave($__internal_17e64d78e2d2d410a035cb998129fce7cbbd7cb11aa348f69ba6336b738ed715_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30946b2fb553f90f8c3b3ed54476e8a8cb8cf227d1ba4590b5c5dfa264a1945 = $this->env->getExtension("native_profiler");
        $__internal_c30946b2fb553f90f8c3b3ed54476e8a8cb8cf227d1ba4590b5c5dfa264a1945->enter($__internal_c30946b2fb553f90f8c3b3ed54476e8a8cb8cf227d1ba4590b5c5dfa264a1945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div>
<center><H1 style =\"color:#043F71;font-family: 'Open Sans';\"> Gestion de Stock </H1></center>
<center><h3 style =\"color:#043F71\"> Ministère de la pêche Maritime </h3></center>
</div>
<center>
<div style = \"width: 800px;\" id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
          <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/3.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/5.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/6.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/7.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/8.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Resources/public/images/9.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
          </div>
        </div>
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
</div>
</center>
";
        
        $__internal_c30946b2fb553f90f8c3b3ed54476e8a8cb8cf227d1ba4590b5c5dfa264a1945->leave($__internal_c30946b2fb553f90f8c3b3ed54476e8a8cb8cf227d1ba4590b5c5dfa264a1945_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e202011e8c5aa6f3e8fb1027874ed57329de3e6aa70d07443d1b6fe4ac23cc12 = $this->env->getExtension("native_profiler");
        $__internal_e202011e8c5aa6f3e8fb1027874ed57329de3e6aa70d07443d1b6fe4ac23cc12->enter($__internal_e202011e8c5aa6f3e8fb1027874ed57329de3e6aa70d07443d1b6fe4ac23cc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

        
        });
    })(jQuery);
</script>
";
        
        $__internal_e202011e8c5aa6f3e8fb1027874ed57329de3e6aa70d07443d1b6fe4ac23cc12->leave($__internal_e202011e8c5aa6f3e8fb1027874ed57329de3e6aa70d07443d1b6fe4ac23cc12_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  134 => 54,  113 => 40,  107 => 37,  101 => 34,  95 => 31,  89 => 28,  83 => 25,  77 => 22,  71 => 19,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Liste des Articles*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div>*/
/* <center><H1 style ="color:#043F71;font-family: 'Open Sans';"> Gestion de Stock </H1></center>*/
/* <center><h3 style ="color:#043F71"> Ministère de la pêche Maritime </h3></center>*/
/* </div>*/
/* <center>*/
/* <div style = "width: 800px;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*         <ol class="carousel-indicators">*/
/*           <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*           <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*           <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*         </ol>*/
/*         <div class="carousel-inner" role="listbox">*/
/*           <div class="item active">*/
/*             <img src="{{ asset('Resources/public/images/1.jpg')}}" alt="First slide">*/
/*           </div>*/
/*           <div class="item">*/
/*             <img src="{{ asset('Resources/public/images/2.jpg')}}" alt="Second slide">*/
/*           </div>*/
/*           <div class="item">*/
/*             <img src="{{ asset('Resources/public/images/3.png')}}" alt="Third slide">*/
/*           </div>*/
/*           <div class="item">*/
/*             <img src="{{ asset('Resources/public/images/5.png')}}" alt="Third slide">*/
/*           </div>*/
/*           <div class="item">*/
/*             <img src="{{ asset('Resources/public/images/6.png')}}" alt="Third slide">*/
/*           </div>*/
/*           <div class="item">*/
/*             <img src="{{ asset('Resources/public/images/7.jpg')}}" alt="Third slide">*/
/*           </div>*/
/*           <div class="item">*/
/*             <img src="{{ asset('Resources/public/images/8.jpg')}}" alt="Third slide">*/
/*           </div>*/
/*           <div class="item">*/
/*             <img src="{{ asset('Resources/public/images/9.png')}}" alt="Third slide">*/
/*           </div>*/
/*         </div>*/
/*         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*           <span class="sr-only">Previous</span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*           <span class="sr-only">Next</span>*/
/*         </a>*/
/* </div>*/
/* </center>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*         */
/*         });*/
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
