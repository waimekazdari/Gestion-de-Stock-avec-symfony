<?php

/* gestionStock/Config/index.html.twig */
class __TwigTemplate_9446db3557c9436047be54bc3f3a7626fec28289818c8056a601afe8ec91c04f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Config/index.html.twig", 1);
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
        $__internal_b911df5cca59a7efa28c00b77329baf63b243bbab69f2d9885542f2b0cf5c775 = $this->env->getExtension("native_profiler");
        $__internal_b911df5cca59a7efa28c00b77329baf63b243bbab69f2d9885542f2b0cf5c775->enter($__internal_b911df5cca59a7efa28c00b77329baf63b243bbab69f2d9885542f2b0cf5c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Config/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b911df5cca59a7efa28c00b77329baf63b243bbab69f2d9885542f2b0cf5c775->leave($__internal_b911df5cca59a7efa28c00b77329baf63b243bbab69f2d9885542f2b0cf5c775_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_595090f34adacec0955822a0cfc0c3a4a9e3811d0caa736113066985d6437453 = $this->env->getExtension("native_profiler");
        $__internal_595090f34adacec0955822a0cfc0c3a4a9e3811d0caa736113066985d6437453->enter($__internal_595090f34adacec0955822a0cfc0c3a4a9e3811d0caa736113066985d6437453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "configuration de la siteWeb
";
        
        $__internal_595090f34adacec0955822a0cfc0c3a4a9e3811d0caa736113066985d6437453->leave($__internal_595090f34adacec0955822a0cfc0c3a4a9e3811d0caa736113066985d6437453_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed30482c667b4e1b031f861ef106752f986d4de968eb85a3e50c3efe8511a559 = $this->env->getExtension("native_profiler");
        $__internal_ed30482c667b4e1b031f861ef106752f986d4de968eb85a3e50c3efe8511a559->enter($__internal_ed30482c667b4e1b031f861ef106752f986d4de968eb85a3e50c3efe8511a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-cog\"></span> Préférences</h3>
<form class=\"form-horizontal\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("config_update");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">        
    <div class=\"tabbable\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-cog\"></span> Général</a></li>
          <li><a href=\"#tab2\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-wrench\"></span> Paramètres</a></li>
        </ul> <!-- /tabs -->

    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Logo</label>
          <div class=\"col-md-4\">
            <img class=\"myavatar col-md-4\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_logo", array())), "html", null, true);
        echo "\">
          </div>
        </div> 
        <div class=\"image\" style=\"margin-left:235px;\">             
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["imgform"]) ? $context["imgform"] : $this->getContext($context, "imgform")), "file", array()), 'row', array("label" => " "));
        echo "
        </div><br/>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Nom de l'application</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_name]\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_name", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Description</label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"config[app_description]\" placeholder=\"ajouter une description...\" class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_description", array()), "html", null, true);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Adresse</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_address]\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_address", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Code Postal</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_cp]\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_cp", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Ville</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_city]\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_city", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Tél </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_tel]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_tel", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">GSM </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_gsm]\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_gsm", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
      </div><!-- /tab1 -->
        <div class=\"tab-pane\" id=\"tab2\">
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Lignes / Page </label>
          <div class=\"col-md-4\">
            <select name=\"config[rows_per_page]\">
                  <option ";
        // line 73
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "10")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"10\">10</option>
                  <option ";
        // line 74
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "50")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"50\">50</option>
                  <option ";
        // line 75
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "100")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"100\">100</option>
                  <option ";
        // line 76
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "200")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"200\">200</option>
              </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Style CSS </label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"config[app_css]\" placeholder=\"ajouter une description...\" class=\"form-control\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_css", array()), "html", null, true);
        echo "</textarea>
          </div>
        </div>
        </div><!-- /tab2 -->
    </div> <!-- /tab-content -->
   </div>
       <div class=\"form-group\">
         <div class=\"col-md-offset-4 col-md-4\">
           <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-check-inverted\"></span> Mettre à jour</button>
         </div>
       </div>
</form>
   
";
        
        $__internal_ed30482c667b4e1b031f861ef106752f986d4de968eb85a3e50c3efe8511a559->leave($__internal_ed30482c667b4e1b031f861ef106752f986d4de968eb85a3e50c3efe8511a559_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9125542a8f78ea561fd28d5a9cc0133a3c07f324f2529f887a46a251a1c08dc0 = $this->env->getExtension("native_profiler");
        $__internal_9125542a8f78ea561fd28d5a9cc0133a3c07f324f2529f887a46a251a1c08dc0->enter($__internal_9125542a8f78ea561fd28d5a9cc0133a3c07f324f2529f887a46a251a1c08dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

        \$('.form-group').find('.col-md-6').removeClass('col-md-6').addClass('col-md-4');
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});
    })(jQuery);
</script>
";
        
        $__internal_9125542a8f78ea561fd28d5a9cc0133a3c07f324f2529f887a46a251a1c08dc0->leave($__internal_9125542a8f78ea561fd28d5a9cc0133a3c07f324f2529f887a46a251a1c08dc0_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Config/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 98,  206 => 97,  185 => 83,  173 => 76,  167 => 75,  161 => 74,  155 => 73,  143 => 64,  134 => 58,  125 => 52,  116 => 46,  107 => 40,  98 => 34,  89 => 28,  81 => 23,  74 => 19,  59 => 7,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* configuration de la siteWeb*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-cog"></span> Préférences</h3>*/
/* <form class="form-horizontal" action="{{ path('config_update')}}" method="POST" enctype="multipart/form-data">        */
/*     <div class="tabbable">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span> Général</a></li>*/
/*           <li><a href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-wrench"></span> Paramètres</a></li>*/
/*         </ul> <!-- /tabs -->*/
/* */
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab1">*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Logo</label>*/
/*           <div class="col-md-4">*/
/*             <img class="myavatar col-md-4" src="{{ asset( app_config.app_logo )}}">*/
/*           </div>*/
/*         </div> */
/*         <div class="image" style="margin-left:235px;">             */
/*         {{ form_row(imgform.file, { 'label': ' '}) }}*/
/*         </div><br/>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Nom de l'application</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="config[app_name]" value="{{app_config.app_name}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Description</label>*/
/*           <div class="col-md-4">*/
/*             <textarea rows="3" name="config[app_description]" placeholder="ajouter une description..." class="form-control">{{app_config.app_description}}</textarea>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Adresse</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="config[app_address]" value="{{app_config.app_address}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Code Postal</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="config[app_cp]" value="{{app_config.app_cp}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Ville</label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="config[app_city]" value="{{app_config.app_city}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Tél </label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="config[app_tel]" value="{{app_config.app_tel}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">GSM </label>*/
/*           <div class="col-md-4">*/
/*             <input type="text" name="config[app_gsm]" value="{{app_config.app_gsm}}" class="form-control">*/
/*           </div>*/
/*         </div>*/
/*       </div><!-- /tab1 -->*/
/*         <div class="tab-pane" id="tab2">*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Lignes / Page </label>*/
/*           <div class="col-md-4">*/
/*             <select name="config[rows_per_page]">*/
/*                   <option {% if app_config.rows_per_page =="10" %}selected="selected"{% endif %} value="10">10</option>*/
/*                   <option {% if app_config.rows_per_page =="50" %}selected="selected"{% endif %} value="50">50</option>*/
/*                   <option {% if app_config.rows_per_page =="100" %}selected="selected"{% endif %} value="100">100</option>*/
/*                   <option {% if app_config.rows_per_page =="200" %}selected="selected"{% endif %} value="200">200</option>*/
/*               </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="" class="col-md-4 control-label">Style CSS </label>*/
/*           <div class="col-md-4">*/
/*             <textarea rows="3" name="config[app_css]" placeholder="ajouter une description..." class="form-control">{{app_config.app_css}}</textarea>*/
/*           </div>*/
/*         </div>*/
/*         </div><!-- /tab2 -->*/
/*     </div> <!-- /tab-content -->*/
/*    </div>*/
/*        <div class="form-group">*/
/*          <div class="col-md-offset-4 col-md-4">*/
/*            <button type="submit" name="subvalider" class="btn btn-primary btn-embossed"><span class="fui-check-inverted"></span> Mettre à jour</button>*/
/*          </div>*/
/*        </div>*/
/* </form>*/
/*    */
/* {% endblock body %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*         $('.form-group').find('.col-md-6').removeClass('col-md-6').addClass('col-md-4');*/
/*         $('select').removeClass('form-control').select2({minimumResultsForSearch: -1});*/
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
