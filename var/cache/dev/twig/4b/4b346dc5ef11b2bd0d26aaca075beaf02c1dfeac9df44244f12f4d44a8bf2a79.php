<?php

/* gestionStock/Livraison/new.html.twig */
class __TwigTemplate_692a29db1409cf8029619184a586ce2e97b0a8947561fb369db99ced5fc3b21e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Livraison/new.html.twig", 1);
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
        $__internal_820b2eba0ed0cdd17c5fda760088d5095ade9080ba15012910eb8a7df87be80c = $this->env->getExtension("native_profiler");
        $__internal_820b2eba0ed0cdd17c5fda760088d5095ade9080ba15012910eb8a7df87be80c->enter($__internal_820b2eba0ed0cdd17c5fda760088d5095ade9080ba15012910eb8a7df87be80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Livraison/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_820b2eba0ed0cdd17c5fda760088d5095ade9080ba15012910eb8a7df87be80c->leave($__internal_820b2eba0ed0cdd17c5fda760088d5095ade9080ba15012910eb8a7df87be80c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fa698542468b1cc205895f7ffc57f2b3dccacb28ebadc1bf6a5a1d4f2f6e5d6 = $this->env->getExtension("native_profiler");
        $__internal_0fa698542468b1cc205895f7ffc57f2b3dccacb28ebadc1bf6a5a1d4f2f6e5d6->enter($__internal_0fa698542468b1cc205895f7ffc57f2b3dccacb28ebadc1bf6a5a1d4f2f6e5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Ajout d'une Livraison
";
        
        $__internal_0fa698542468b1cc205895f7ffc57f2b3dccacb28ebadc1bf6a5a1d4f2f6e5d6->leave($__internal_0fa698542468b1cc205895f7ffc57f2b3dccacb28ebadc1bf6a5a1d4f2f6e5d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c63888e740ea1d28f9a70b3cb7bbcb35f439b1f2d5858e6107b59965adbdabe0 = $this->env->getExtension("native_profiler");
        $__internal_c63888e740ea1d28f9a70b3cb7bbcb35f439b1f2d5858e6107b59965adbdabe0->enter($__internal_c63888e740ea1d28f9a70b3cb7bbcb35f439b1f2d5858e6107b59965adbdabe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'une nouvelle Livraison </h3>

<form style=\"margin-left:200px;width:800px;\" id=\"multipleArticle\" class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("livraison_create");
        echo "\" method=\"post\" >

    ";
        // line 10
        $this->loadTemplate("gestionStock/Livraison/form.html.twig", "gestionStock/Livraison/new.html.twig", 10)->display($context);
        // line 11
        echo "    </br>
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
        
        $__internal_c63888e740ea1d28f9a70b3cb7bbcb35f439b1f2d5858e6107b59965adbdabe0->leave($__internal_c63888e740ea1d28f9a70b3cb7bbcb35f439b1f2d5858e6107b59965adbdabe0_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31b2d324d57f9adc1534da0b84f41daf58113721c776762f0be797cdd8fd85b6 = $this->env->getExtension("native_profiler");
        $__internal_31b2d324d57f9adc1534da0b84f41daf58113721c776762f0be797cdd8fd85b6->enter($__internal_31b2d324d57f9adc1534da0b84f41daf58113721c776762f0be797cdd8fd85b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        var Article_number=1,
        form = \$('#multipleArticle'),
        zoneBefore = form.find('.js-before'),
        articleBtn = form.find('#articleplus');
        articleHtml ='<div class=\"well relative\"><span class=\"label label-warning\">Article N° @@</span><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Référence de l Article</label><div class=\"col-sm-4\"><select id=\"cityselect\" name=\"article[@@][ref]\" class=\"form-control\">";
        // line 31
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
        echo "</select></div></div><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Quantité</label><div class=\"col-sm-4\"><input type=\"text\" name=\"article[@@][quantite]\" class=\"form-control\"></div></div><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Prix</label><div class=\"col-sm-4\"><input type=\"text\" name=\"article[@@][prix]\" class=\"form-control\"></div></div><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Duree</label><div class=\"col-sm-4\"><input type=\"text\" name=\"article[@@][duree]\" class=\"form-control\"></div></div><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Délai de la  Garantie</label><div class=\"col-sm-4\"><input type=\"Date\" name=\"article[@@][dateGarantie]\" class=\"form-control\"></div></div></div>';

        articleBtn.on('click', function(){
        \tvar i = Article_number++,
        \thtml = articleHtml;

            html = html.replace('@@', i);
            html = html.replace('@@', i);
            html = html.replace('@@', i);
            html = html.replace('@@', i);
            html = html.replace('@@', i);
            html = html.replace('@@', i);
            zoneBefore.before(html);
            return false;
        });

    })(jQuery);
</script>
";
        
        $__internal_31b2d324d57f9adc1534da0b84f41daf58113721c776762f0be797cdd8fd85b6->leave($__internal_31b2d324d57f9adc1534da0b84f41daf58113721c776762f0be797cdd8fd85b6_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Livraison/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  91 => 24,  85 => 23,  67 => 11,  65 => 10,  60 => 8,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Ajout d'une Livraison*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'une nouvelle Livraison </h3>*/
/* */
/* <form style="margin-left:200px;width:800px;" id="multipleArticle" class="form-horizontal" action="{{ path('livraison_create') }}" method="post" >*/
/* */
/*     {% include "gestionStock/Livraison/form.html.twig" %}*/
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
/*         var Article_number=1,*/
/*         form = $('#multipleArticle'),*/
/*         zoneBefore = form.find('.js-before'),*/
/*         articleBtn = form.find('#articleplus');*/
/*         articleHtml ='<div class="well relative"><span class="label label-warning">Article N° @@</span><div class="form-group"><label for="" class="col-sm-4 control-label">Référence de l Article</label><div class="col-sm-4"><select id="cityselect" name="article[@@][ref]" class="form-control">{% for item in articles %}<option value="{{ item.ref }}">{{ item.ref}}</option>{% endfor %}</select></div></div><div class="form-group"><label for="" class="col-sm-4 control-label">Quantité</label><div class="col-sm-4"><input type="text" name="article[@@][quantite]" class="form-control"></div></div><div class="form-group"><label for="" class="col-sm-4 control-label">Prix</label><div class="col-sm-4"><input type="text" name="article[@@][prix]" class="form-control"></div></div><div class="form-group"><label for="" class="col-sm-4 control-label">Duree</label><div class="col-sm-4"><input type="text" name="article[@@][duree]" class="form-control"></div></div><div class="form-group"><label for="" class="col-sm-4 control-label">Délai de la  Garantie</label><div class="col-sm-4"><input type="Date" name="article[@@][dateGarantie]" class="form-control"></div></div></div>';*/
/* */
/*         articleBtn.on('click', function(){*/
/*         	var i = Article_number++,*/
/*         	html = articleHtml;*/
/* */
/*             html = html.replace('@@', i);*/
/*             html = html.replace('@@', i);*/
/*             html = html.replace('@@', i);*/
/*             html = html.replace('@@', i);*/
/*             html = html.replace('@@', i);*/
/*             html = html.replace('@@', i);*/
/*             zoneBefore.before(html);*/
/*             return false;*/
/*         });*/
/* */
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
