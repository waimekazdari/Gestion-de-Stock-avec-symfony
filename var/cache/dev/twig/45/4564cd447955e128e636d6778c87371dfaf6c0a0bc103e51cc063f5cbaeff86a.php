<?php

/* gestionStock/Expression_besoin/new.html.twig */
class __TwigTemplate_389174693a9a88f9a95459051bc4c843b70082ce172eae5a6529331648ff0e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Expression_besoin/new.html.twig", 1);
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
        $__internal_41b47b1d9040d72030a2abbd2afce29dd14d0effab8deeb2e30ce052860df549 = $this->env->getExtension("native_profiler");
        $__internal_41b47b1d9040d72030a2abbd2afce29dd14d0effab8deeb2e30ce052860df549->enter($__internal_41b47b1d9040d72030a2abbd2afce29dd14d0effab8deeb2e30ce052860df549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41b47b1d9040d72030a2abbd2afce29dd14d0effab8deeb2e30ce052860df549->leave($__internal_41b47b1d9040d72030a2abbd2afce29dd14d0effab8deeb2e30ce052860df549_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd2b739a38013cfb2d85c9d7dd39f48c0878a1816704f4d0915889c05dd39655 = $this->env->getExtension("native_profiler");
        $__internal_cd2b739a38013cfb2d85c9d7dd39f48c0878a1816704f4d0915889c05dd39655->enter($__internal_cd2b739a38013cfb2d85c9d7dd39f48c0878a1816704f4d0915889c05dd39655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Ajout d'une Besoin
";
        
        $__internal_cd2b739a38013cfb2d85c9d7dd39f48c0878a1816704f4d0915889c05dd39655->leave($__internal_cd2b739a38013cfb2d85c9d7dd39f48c0878a1816704f4d0915889c05dd39655_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_170ff818507c472a6b28859c96a747501901b491bcd5793e2b61f5221ebfcffd = $this->env->getExtension("native_profiler");
        $__internal_170ff818507c472a6b28859c96a747501901b491bcd5793e2b61f5221ebfcffd->enter($__internal_170ff818507c472a6b28859c96a747501901b491bcd5793e2b61f5221ebfcffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-plus\"></span> Exprimer un nouveau Besoin </h3>

<form style=\"margin-left:200px;width:800px;\" id=\"multipleArticle\" class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("expression_besoin_create");
        echo "\" method=\"post\" >
<div class=\"well relative\">
        <span class=\"label label-warning\">Article N° 1</span>
    ";
        // line 11
        $this->loadTemplate("gestionStock/Expression_besoin/formAr_eb.html.twig", "gestionStock/Expression_besoin/new.html.twig", 11)->display($context);
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
        
        $__internal_170ff818507c472a6b28859c96a747501901b491bcd5793e2b61f5221ebfcffd->leave($__internal_170ff818507c472a6b28859c96a747501901b491bcd5793e2b61f5221ebfcffd_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8bb500fe8edfaa7921d1b1f29384ee245689b953562f54505840cb9160acb9d = $this->env->getExtension("native_profiler");
        $__internal_e8bb500fe8edfaa7921d1b1f29384ee245689b953562f54505840cb9160acb9d->enter($__internal_e8bb500fe8edfaa7921d1b1f29384ee245689b953562f54505840cb9160acb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e8bb500fe8edfaa7921d1b1f29384ee245689b953562f54505840cb9160acb9d->leave($__internal_e8bb500fe8edfaa7921d1b1f29384ee245689b953562f54505840cb9160acb9d_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/new.html.twig";
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
/* Ajout d'une Besoin*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-plus"></span> Exprimer un nouveau Besoin </h3>*/
/* */
/* <form style="margin-left:200px;width:800px;" id="multipleArticle" class="form-horizontal" action="{{ path('expression_besoin_create') }}" method="post" >*/
/* <div class="well relative">*/
/*         <span class="label label-warning">Article N° 1</span>*/
/*     {% include "gestionStock/Expression_besoin/formAr_eb.html.twig" %}*/
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
