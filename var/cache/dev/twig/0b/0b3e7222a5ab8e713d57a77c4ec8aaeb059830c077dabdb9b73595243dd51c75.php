<?php

/* gestionStock/Entree/new.html.twig */
class __TwigTemplate_c742be8a1a3730363b31b2e2cd29284611130369143bb6458725fb5b64a9099c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Entree/new.html.twig", 1);
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
        $__internal_14cd9993f45f379ec778c6912393e0fc03129daa2ec2b7b40132627fa3378c43 = $this->env->getExtension("native_profiler");
        $__internal_14cd9993f45f379ec778c6912393e0fc03129daa2ec2b7b40132627fa3378c43->enter($__internal_14cd9993f45f379ec778c6912393e0fc03129daa2ec2b7b40132627fa3378c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Entree/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14cd9993f45f379ec778c6912393e0fc03129daa2ec2b7b40132627fa3378c43->leave($__internal_14cd9993f45f379ec778c6912393e0fc03129daa2ec2b7b40132627fa3378c43_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_107926f451e6fff7ade45babd906503055946c0d54110af3d646e978ebf96c16 = $this->env->getExtension("native_profiler");
        $__internal_107926f451e6fff7ade45babd906503055946c0d54110af3d646e978ebf96c16->enter($__internal_107926f451e6fff7ade45babd906503055946c0d54110af3d646e978ebf96c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Ajout d'une Entree
";
        
        $__internal_107926f451e6fff7ade45babd906503055946c0d54110af3d646e978ebf96c16->leave($__internal_107926f451e6fff7ade45babd906503055946c0d54110af3d646e978ebf96c16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_96fddd1de4cf40a847ccac0b83731455c352d2601adc4acbb050bf8d6264babf = $this->env->getExtension("native_profiler");
        $__internal_96fddd1de4cf40a847ccac0b83731455c352d2601adc4acbb050bf8d6264babf->enter($__internal_96fddd1de4cf40a847ccac0b83731455c352d2601adc4acbb050bf8d6264babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-plus\"></span> Ajout d'une nouvelle Entree </h3>

<form style=\"margin-left:200px;width:800px;\" id=\"multipleArticle\" class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("entree_create");
        echo "\" method=\"post\" >

    ";
        // line 10
        $this->loadTemplate("gestionStock/Entree/form.html.twig", "gestionStock/Entree/new.html.twig", 10)->display($context);
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
        
        $__internal_96fddd1de4cf40a847ccac0b83731455c352d2601adc4acbb050bf8d6264babf->leave($__internal_96fddd1de4cf40a847ccac0b83731455c352d2601adc4acbb050bf8d6264babf_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee6d2be56996e599389070b3091bf361674a91bd1f1b59ed8ecedcd877f61243 = $this->env->getExtension("native_profiler");
        $__internal_ee6d2be56996e599389070b3091bf361674a91bd1f1b59ed8ecedcd877f61243->enter($__internal_ee6d2be56996e599389070b3091bf361674a91bd1f1b59ed8ecedcd877f61243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ee6d2be56996e599389070b3091bf361674a91bd1f1b59ed8ecedcd877f61243->leave($__internal_ee6d2be56996e599389070b3091bf361674a91bd1f1b59ed8ecedcd877f61243_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Entree/new.html.twig";
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
/* Ajout d'une Entree*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-plus"></span> Ajout d'une nouvelle Entree </h3>*/
/* */
/* <form style="margin-left:200px;width:800px;" id="multipleArticle" class="form-horizontal" action="{{ path('entree_create') }}" method="post" >*/
/* */
/*     {% include "gestionStock/Entree/form.html.twig" %}*/
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
