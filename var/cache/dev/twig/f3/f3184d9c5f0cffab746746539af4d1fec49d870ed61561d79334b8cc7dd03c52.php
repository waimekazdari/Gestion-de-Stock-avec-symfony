<?php

/* gestionStock/Sortie/new.html.twig */
class __TwigTemplate_6f92e9cb54b47d1bd97853ca08c7cde586b310328485372c56f2e3554c9385ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Sortie/new.html.twig", 1);
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
        $__internal_146a317f633eb0e8721288aa692377ab24bd05de7899745f1d969238f6d66c8d = $this->env->getExtension("native_profiler");
        $__internal_146a317f633eb0e8721288aa692377ab24bd05de7899745f1d969238f6d66c8d->enter($__internal_146a317f633eb0e8721288aa692377ab24bd05de7899745f1d969238f6d66c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Sortie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146a317f633eb0e8721288aa692377ab24bd05de7899745f1d969238f6d66c8d->leave($__internal_146a317f633eb0e8721288aa692377ab24bd05de7899745f1d969238f6d66c8d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_554aeda56d92a55c0da7095715d091deda62721fa017f349ed85403e585a8140 = $this->env->getExtension("native_profiler");
        $__internal_554aeda56d92a55c0da7095715d091deda62721fa017f349ed85403e585a8140->enter($__internal_554aeda56d92a55c0da7095715d091deda62721fa017f349ed85403e585a8140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Ajout d'une Sortie
";
        
        $__internal_554aeda56d92a55c0da7095715d091deda62721fa017f349ed85403e585a8140->leave($__internal_554aeda56d92a55c0da7095715d091deda62721fa017f349ed85403e585a8140_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9db8c1237707932a156f84e3c3504da80ec0c8a069fdbaaf9fe96c8c8e60891 = $this->env->getExtension("native_profiler");
        $__internal_c9db8c1237707932a156f84e3c3504da80ec0c8a069fdbaaf9fe96c8c8e60891->enter($__internal_c9db8c1237707932a156f84e3c3504da80ec0c8a069fdbaaf9fe96c8c8e60891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'une nouvelle Sortie </h3>

<form style=\"margin-left:200px;width:800px;\" id=\"multipleArticle\" class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sortie_create");
        echo "\" method=\"post\" >

    ";
        // line 10
        $this->loadTemplate("gestionStock/Sortie/form.html.twig", "gestionStock/Sortie/new.html.twig", 10)->display($context);
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
        
        $__internal_c9db8c1237707932a156f84e3c3504da80ec0c8a069fdbaaf9fe96c8c8e60891->leave($__internal_c9db8c1237707932a156f84e3c3504da80ec0c8a069fdbaaf9fe96c8c8e60891_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25325332d299cc43e262bcd373ca21b2360d27912ccc45aeace97ea848f4d9fd = $this->env->getExtension("native_profiler");
        $__internal_25325332d299cc43e262bcd373ca21b2360d27912ccc45aeace97ea848f4d9fd->enter($__internal_25325332d299cc43e262bcd373ca21b2360d27912ccc45aeace97ea848f4d9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo "</select></div></div><div class=\"form-group\"><label for=\"\" class=\"col-sm-4 control-label\">Quantité</label><div class=\"col-sm-4\"><input type=\"text\" name=\"article[@@][quantite]\" class=\"form-control\"></div></div></div>';

        articleBtn.on('click', function(){
        \tvar i = Article_number++,
        \thtml = articleHtml;

            html = html.replace('@@', i);
            html = html.replace('@@', i);
            html = html.replace('@@', i);
            zoneBefore.before(html);
            return false;
        });

    })(jQuery);
</script>
";
        
        $__internal_25325332d299cc43e262bcd373ca21b2360d27912ccc45aeace97ea848f4d9fd->leave($__internal_25325332d299cc43e262bcd373ca21b2360d27912ccc45aeace97ea848f4d9fd_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Sortie/new.html.twig";
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
/* Ajout d'une Sortie*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'une nouvelle Sortie </h3>*/
/* */
/* <form style="margin-left:200px;width:800px;" id="multipleArticle" class="form-horizontal" action="{{ path('sortie_create') }}" method="post" >*/
/* */
/*     {% include "gestionStock/Sortie/form.html.twig" %}*/
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
/*         articleHtml ='<div class="well relative"><span class="label label-warning">Article N° @@</span><div class="form-group"><label for="" class="col-sm-4 control-label">Référence de l Article</label><div class="col-sm-4"><select id="cityselect" name="article[@@][ref]" class="form-control">{% for item in articles %}<option value="{{ item.ref }}">{{ item.ref}}</option>{% endfor %}</select></div></div><div class="form-group"><label for="" class="col-sm-4 control-label">Quantité</label><div class="col-sm-4"><input type="text" name="article[@@][quantite]" class="form-control"></div></div></div>';*/
/* */
/*         articleBtn.on('click', function(){*/
/*         	var i = Article_number++,*/
/*         	html = articleHtml;*/
/* */
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
