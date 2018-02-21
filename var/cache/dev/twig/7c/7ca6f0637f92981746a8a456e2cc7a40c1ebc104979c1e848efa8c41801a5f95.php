<?php

/* gestionStock/MesExpression_besoin/new.html.twig */
class __TwigTemplate_69a025fac97d649faff29bd154eddfd6106ba5d950d9fcdac88ca328c8ff8404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/MesExpression_besoin/new.html.twig", 1);
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
        $__internal_08be1e5a77897b94337aeaeb048bfe3ad6eb3beb4ed825fd9536aee42346e832 = $this->env->getExtension("native_profiler");
        $__internal_08be1e5a77897b94337aeaeb048bfe3ad6eb3beb4ed825fd9536aee42346e832->enter($__internal_08be1e5a77897b94337aeaeb048bfe3ad6eb3beb4ed825fd9536aee42346e832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/MesExpression_besoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08be1e5a77897b94337aeaeb048bfe3ad6eb3beb4ed825fd9536aee42346e832->leave($__internal_08be1e5a77897b94337aeaeb048bfe3ad6eb3beb4ed825fd9536aee42346e832_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5be7e6141d7fd9c938cc2945041e16811f3676f60c3e772e34fc526660ff99ef = $this->env->getExtension("native_profiler");
        $__internal_5be7e6141d7fd9c938cc2945041e16811f3676f60c3e772e34fc526660ff99ef->enter($__internal_5be7e6141d7fd9c938cc2945041e16811f3676f60c3e772e34fc526660ff99ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Ajout d'un Besoin
";
        
        $__internal_5be7e6141d7fd9c938cc2945041e16811f3676f60c3e772e34fc526660ff99ef->leave($__internal_5be7e6141d7fd9c938cc2945041e16811f3676f60c3e772e34fc526660ff99ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74657eca04689cc533a28259cde59dc8f9d3f7c1478299988b7cc797f6a546a4 = $this->env->getExtension("native_profiler");
        $__internal_74657eca04689cc533a28259cde59dc8f9d3f7c1478299988b7cc797f6a546a4->enter($__internal_74657eca04689cc533a28259cde59dc8f9d3f7c1478299988b7cc797f6a546a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-plus\"></span> Exprimer un nouveau Besoin </h3>

<form style=\"margin-left:200px;width:800px;\" id=\"multipleArticle\" class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("mesExpression_besoin_create");
        echo "\" method=\"post\" >
<div class=\"well relative\">
        <span class=\"label label-warning\">Article N° 1</span>
    ";
        // line 11
        $this->loadTemplate("gestionStock/MesExpression_besoin/formAr_eb.html.twig", "gestionStock/MesExpression_besoin/new.html.twig", 11)->display($context);
        // line 12
        echo "</div>
    </br>
<div class =\"js-before\">
    <div class=\"form-group\">
      <div class=\"col-md-offset-4 col-md-4\">
        <button class=\"btn btn-success\" id=\"articleplus\"><span class=\"glyphicon glyphicon-plus\"></span> ajouter un Article</button>
        <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-check\"></span> Valider</button>
      </div>
    </div>
</div>
</form>

";
        
        $__internal_74657eca04689cc533a28259cde59dc8f9d3f7c1478299988b7cc797f6a546a4->leave($__internal_74657eca04689cc533a28259cde59dc8f9d3f7c1478299988b7cc797f6a546a4_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c99599be761588a36be8ff4dfc8fe6dcc1c2d8c45d75b5918dccbdf33534d594 = $this->env->getExtension("native_profiler");
        $__internal_c99599be761588a36be8ff4dfc8fe6dcc1c2d8c45d75b5918dccbdf33534d594->enter($__internal_c99599be761588a36be8ff4dfc8fe6dcc1c2d8c45d75b5918dccbdf33534d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        var Article_number=2,
        form = \$('#multipleArticle'),
        zoneBefore = form.find('.js-before'),
        articleBtn = form.find('#articleplus');
        articleHtml ='<div class=\"well relative\"><span class=\"label label-warning\">Article N° @@</span><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Référence de l Article</label><div class=\"col-sm-4\"><select id=\"cityselect\" name=\"article[@@][ref]\" class=\"form-control\">";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ref", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ref", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></div></div><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Quantité</label><div class=\"col-sm-4\"><input type=\"text\" name=\"article[@@][quantite]\" class=\"form-control\"></div></div></div>';

        articleBtn.on('click', function(){
        \tvar i = Article_number++,
        \thtml = articleHtml;

            html = html.replace('@@', i);
            html = html.replace('@@', i-1);
            html = html.replace('@@', i-1);
            zoneBefore.before(html);
            return false;
        });

    })(jQuery);
</script>
";
        
        $__internal_c99599be761588a36be8ff4dfc8fe6dcc1c2d8c45d75b5918dccbdf33534d594->leave($__internal_c99599be761588a36be8ff4dfc8fe6dcc1c2d8c45d75b5918dccbdf33534d594_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/MesExpression_besoin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  93 => 26,  87 => 25,  68 => 12,  66 => 11,  60 => 8,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Ajout d'un Besoin*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-plus"></span> Exprimer un nouveau Besoin </h3>*/
/* */
/* <form style="margin-left:200px;width:800px;" id="multipleArticle" class="form-horizontal" action="{{ path('mesExpression_besoin_create') }}" method="post" >*/
/* <div class="well relative">*/
/*         <span class="label label-warning">Article N° 1</span>*/
/*     {% include "gestionStock/MesExpression_besoin/formAr_eb.html.twig" %}*/
/* </div>*/
/*     </br>*/
/* <div class ="js-before">*/
/*     <div class="form-group">*/
/*       <div class="col-md-offset-4 col-md-4">*/
/*         <button class="btn btn-success" id="articleplus"><span class="glyphicon glyphicon-plus"></span> ajouter un Article</button>*/
/*         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Valider</button>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* </form>*/
/* */
/* {% endblock body %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/*         var Article_number=2,*/
/*         form = $('#multipleArticle'),*/
/*         zoneBefore = form.find('.js-before'),*/
/*         articleBtn = form.find('#articleplus');*/
/*         articleHtml ='<div class="well relative"><span class="label label-warning">Article N° @@</span><div class="form-group"><label for="" class="col-sm-4 control-label">Référence de l Article</label><div class="col-sm-4"><select id="cityselect" name="article[@@][ref]" class="form-control">{% for item in articles %}<option value="{{ item.ref }}">{{ item.ref}}</option>{% endfor %}</select></div></div><div class="form-group"><label for="" class="col-sm-4 control-label">Quantité</label><div class="col-sm-4"><input type="text" name="article[@@][quantite]" class="form-control"></div></div></div>';*/
/* */
/*         articleBtn.on('click', function(){*/
/*         	var i = Article_number++,*/
/*         	html = articleHtml;*/
/* */
/*             html = html.replace('@@', i);*/
/*             html = html.replace('@@', i-1);*/
/*             html = html.replace('@@', i-1);*/
/*             zoneBefore.before(html);*/
/*             return false;*/
/*         });*/
/* */
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
