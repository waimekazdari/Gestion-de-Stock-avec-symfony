<?php

/* gestionStock/Config/index.html.twig */
class __TwigTemplate_ac11dc9f7fd45b89b2a539c08beed3222b70128b809ca7bbba29c32e29c0fe59 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "configuration de la siteWeb
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_logo", array())), "html", null, true);
        echo "\">
          </div>
        </div>              
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["imgform"]) ? $context["imgform"] : null), "file", array()), 'row', array("label" => " "));
        echo "
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Nom de l'application</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_name]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_name", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Description</label>
          <div class=\"col-md-4\">
            <textarea rows=\"3\" name=\"config[app_description]\" placeholder=\"ajouter une description...\" class=\"form-control\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_description", array()), "html", null, true);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Adresse</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_address]\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_address", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Code Postal</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_cp]\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_cp", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Ville</label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_city]\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_city", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">Tél </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_tel]\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_tel", array()), "html", null, true);
        echo "\" class=\"form-control\">
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"\" class=\"col-md-4 control-label\">GSM </label>
          <div class=\"col-md-4\">
            <input type=\"text\" name=\"config[app_gsm]\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_gsm", array()), "html", null, true);
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
        // line 71
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "rows_per_page", array()) == "10")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"10\">10</option>
                  <option ";
        // line 72
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "rows_per_page", array()) == "50")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"50\">50</option>
                  <option ";
        // line 73
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "rows_per_page", array()) == "100")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"100\">100</option>
                  <option ";
        // line 74
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "rows_per_page", array()) == "200")) {
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
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : null), "app_css", array()), "html", null, true);
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
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        // line 96
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

        \$('.form-group').find('.col-md-6').removeClass('col-md-6').addClass('col-md-4');
        \$('select').removeClass('form-control').select2({minimumResultsForSearch: -1});
    })(jQuery);
</script>
";
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
        return array (  189 => 96,  186 => 95,  168 => 81,  156 => 74,  150 => 73,  144 => 72,  138 => 71,  126 => 62,  117 => 56,  108 => 50,  99 => 44,  90 => 38,  81 => 32,  72 => 26,  65 => 22,  59 => 19,  44 => 7,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
/*         </div>              */
/*         {{ form_row(imgform.file, { 'label': ' '}) }}*/
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
