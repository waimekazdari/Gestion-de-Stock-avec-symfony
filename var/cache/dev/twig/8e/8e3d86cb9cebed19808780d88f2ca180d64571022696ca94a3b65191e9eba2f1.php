<?php

/* gestionStock/Article/index.html.twig */
class __TwigTemplate_ff8b0eeab178aa080df66315efc9c5ef20a8e401c722f76600796e786db79d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Article/index.html.twig", 1);
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
        $__internal_7b4e8b761b664c7ed301089247339e07b2386e38de2d5342ae984fb98815ba56 = $this->env->getExtension("native_profiler");
        $__internal_7b4e8b761b664c7ed301089247339e07b2386e38de2d5342ae984fb98815ba56->enter($__internal_7b4e8b761b664c7ed301089247339e07b2386e38de2d5342ae984fb98815ba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b4e8b761b664c7ed301089247339e07b2386e38de2d5342ae984fb98815ba56->leave($__internal_7b4e8b761b664c7ed301089247339e07b2386e38de2d5342ae984fb98815ba56_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_53d8c0b3aa6cb51228dbd3478c568165a830d7b869109a7db888a91f0d6f2e27 = $this->env->getExtension("native_profiler");
        $__internal_53d8c0b3aa6cb51228dbd3478c568165a830d7b869109a7db888a91f0d6f2e27->enter($__internal_53d8c0b3aa6cb51228dbd3478c568165a830d7b869109a7db888a91f0d6f2e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Liste des Articles
";
        
        $__internal_53d8c0b3aa6cb51228dbd3478c568165a830d7b869109a7db888a91f0d6f2e27->leave($__internal_53d8c0b3aa6cb51228dbd3478c568165a830d7b869109a7db888a91f0d6f2e27_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9667e5853aeab09819d2619ff7d7bc29b79aa5daf83e5aaa44d3950bac7b5b0 = $this->env->getExtension("native_profiler");
        $__internal_d9667e5853aeab09819d2619ff7d7bc29b79aa5daf83e5aaa44d3950bac7b5b0->enter($__internal_d9667e5853aeab09819d2619ff7d7bc29b79aa5daf83e5aaa44d3950bac7b5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-list-alt\"></span> Liste des Articles</h3>
<form  id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
        <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\"> 
        <input id=\"sortBy\" type=\"hidden\" name=\"searchParam[sortBy]\" value=\"all\"> 
        <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[sortDir]\" value=\"ASC\"> 

        <div class=\"row hidden-print\">
          <div class=\"col-md-5 form-group\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"Search\">
              <div class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
          </div><!-- /.col-md-6 -->
          <div class=\"col-md-7\">
            <div class=\"btn-group pull-right\">                       
              <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span>  Selectioner une action</button>
              <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\"><span class=\"glyphicon glyphicon-search\"></span> Recherche avancée</a></li>
               <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
                <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row --> 
        <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th class=\"hidden-print\"><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                <th>Article</th>
                <th>Référence</th>
                <th>Code</th>
                <th>Catégorie</th>
                <th>Code Catégorie</th>
            </tr>
            </thead>
            <tbody id=\"dataContainer\">";
        // line 46
        $this->loadTemplate("gestionStock/Article/ajaxliste.html.twig", "gestionStock/Article/index.html.twig", 46)->display($context);
        echo "</tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " Articles</em>
        </div>
<!-- Modal advanced search -->
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h4 class=\"modal-title\" id=\"searchModalLabel\">Recherche avancée</h4>
      </div>
      <div class=\"modal-body form-horizontal\">
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Référence</label>
            <div class=\"col-sm-6\">
              <input type=\"text\" name=\"searchParam[ref]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Code</label>
            <div class=\"col-sm-6\">
              <input type=\"text\" name=\"searchParam[code]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Catégorie</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[categorie]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              </select>
            </div>
          </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
      </div>
    </div>
  </div>
</div>
</form>

";
        
        $__internal_d9667e5853aeab09819d2619ff7d7bc29b79aa5daf83e5aaa44d3950bac7b5b0->leave($__internal_d9667e5853aeab09819d2619ff7d7bc29b79aa5daf83e5aaa44d3950bac7b5b0_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d5285e4e700a399715961cdb2d721a5ab98893347cd879276d52aac89b1a0b0 = $this->env->getExtension("native_profiler");
        $__internal_2d5285e4e700a399715961cdb2d721a5ab98893347cd879276d52aac89b1a0b0->enter($__internal_2d5285e4e700a399715961cdb2d721a5ab98893347cd879276d52aac89b1a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions */
      function getCheckedRows () {
        var articles = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          articles.push(\$(this).val());
        });
        return articles.join(',');
      }
      function isSelected () {
        if (!getCheckedRows()) {
          alert('vous devez selectionner au moin un adhérant');
          return false;
        };
        return true;
      }
      function init(){
        jsFormUrl =null;
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '";
        // line 117
        echo $this->env->getExtension('routing')->getPath("article_ajax");
        echo "';
      }
      function ajaxPost(action, callback) {
        form.addClass('working');
        searchModal.modal('hide');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            form.removeClass('working');
            if(callback) callback(data);
            init();
            if(!action) dataContainer.empty().hide().html(data).fadeIn();
            else ajaxPost();
          },
          error:function(){
              form.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
      var form = \$('#jsForm'),
          dataContainer = form.find('#dataContainer'),
          deleteBtn = form.find('#js-delete'),
          pageInput = form.find('#pagenumber'),
          sortByInput = form.find('#sortBy'),
          sortDirInput = form.find('#sortDir'),
          sortBtn = form.find('.js-sort'),
          searchModal = form.find('#searchModal'),
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\");


      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });

      /* change sort order */
      sortBtn.on('click', function(){
        var th = \$(this).parent();
        th.addClass('sorted').toggleClass('asc').siblings().removeClass('sorted');
        sortByInput.val(\$(this).data('order'));
        if (th.hasClass('asc')) sortDirInput.val('ASC');
        else sortDirInput.val('DESC');
        ajaxPost();
        return false;
      });

      /* delete a article */
      deleteBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 173
        echo $this->env->getExtension('routing')->getPath("article_remove");
        echo "';
        ajaxPost('delete');
      });
      form.on('submit', ajaxPost);
      /* submit the form after loading the page*/
      init();
      ajaxPost();

    })(jQuery);
</script>
";
        
        $__internal_2d5285e4e700a399715961cdb2d721a5ab98893347cd879276d52aac89b1a0b0->leave($__internal_2d5285e4e700a399715961cdb2d721a5ab98893347cd879276d52aac89b1a0b0_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 173,  204 => 117,  178 => 94,  172 => 93,  153 => 80,  142 => 78,  138 => 77,  107 => 49,  101 => 46,  81 => 29,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Liste des Articles*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-list-alt"></span> Liste des Articles</h3>*/
/* <form  id="jsForm" role="form" method="post" action="">*/
/*         <input id="pagenumber" type="hidden" name="searchParam[page]" value="1"> */
/*         <input id="sortBy" type="hidden" name="searchParam[sortBy]" value="all"> */
/*         <input id="sortDir" type="hidden" name="searchParam[sortDir]" value="ASC"> */
/* */
/*         <div class="row hidden-print">*/
/*           <div class="col-md-5 form-group">*/
/*             <div class="input-group">*/
/*               <input type="text" name="searchParam[keyword]" class="form-control" placeholder="Search">*/
/*               <div class="input-group-btn">*/
/*               <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>*/
/*               </div><!-- /btn-group -->*/
/*             </div><!-- /input-group -->*/
/*           </div><!-- /.col-md-6 -->*/
/*           <div class="col-md-7">*/
/*             <div class="btn-group pull-right">                       */
/*               <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span>  Selectioner une action</button>*/
/*               <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*                 <span class="caret"></span>*/
/*               </button>*/
/*               <ul class="dropdown-menu" role="menu">*/
/*                 <li><a href="#" data-toggle="modal" data-target="#searchModal"><span class="glyphicon glyphicon-search"></span> Recherche avancée</a></li>*/
/*                <li><a href="{{ path('article_new') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></li>*/
/*                 <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </div><!-- /.row --> */
/*         <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th class="hidden-print"><input id="checkall" type="checkbox" value=""></th>*/
/*                 <th>Article</th>*/
/*                 <th>Référence</th>*/
/*                 <th>Code</th>*/
/*                 <th>Catégorie</th>*/
/*                 <th>Code Catégorie</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="dataContainer">{% include "gestionStock/Article/ajaxliste.html.twig"%}</tbody>*/
/*         </table>*/
/*         <div class="caption">*/
/*           <strong>Total:</strong> <em>{{ entitiesLength }} Articles</em>*/
/*         </div>*/
/* <!-- Modal advanced search -->*/
/* <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*         <h4 class="modal-title" id="searchModalLabel">Recherche avancée</h4>*/
/*       </div>*/
/*       <div class="modal-body form-horizontal">*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Référence</label>*/
/*             <div class="col-sm-6">*/
/*               <input type="text" name="searchParam[ref]" class="form-control">*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Code</label>*/
/*             <div class="col-sm-6">*/
/*               <input type="text" name="searchParam[code]" class="form-control">*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Catégorie</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[categorie]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in categories %}*/
/*                   <option value="{{ item.label }}">{{ item.label }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="submit" class="btn btn-primary">Rechercher</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </form>*/
/* */
/* {% endblock body %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*       /* helper functions *//* */
/*       function getCheckedRows () {*/
/*         var articles = [];*/
/*         dataContainer.find('input:checkbox:checked').each(function() {*/
/*           articles.push($(this).val());*/
/*         });*/
/*         return articles.join(',');*/
/*       }*/
/*       function isSelected () {*/
/*         if (!getCheckedRows()) {*/
/*           alert('vous devez selectionner au moin un adhérant');*/
/*           return false;*/
/*         };*/
/*         return true;*/
/*       }*/
/*       function init(){*/
/*         jsFormUrl =null;*/
/*         pageInput.val('1');*/
/*         checkboxBtn.prop("checked",false);*/
/*         jsFormUrl = '{{ path('article_ajax') }}';*/
/*       }*/
/*       function ajaxPost(action, callback) {*/
/*         form.addClass('working');*/
/*         searchModal.modal('hide');*/
/*         $.ajax({ */
/*           type: "POST", */
/*           data: form.serialize(),*/
/*           url: jsFormUrl, */
/*           success: function(data){ */
/*             form.removeClass('working');*/
/*             if(callback) callback(data);*/
/*             init();*/
/*             if(!action) dataContainer.empty().hide().html(data).fadeIn();*/
/*             else ajaxPost();*/
/*           },*/
/*           error:function(){*/
/*               form.removeClass('working');*/
/*           }*/
/*         });*/
/*         return false;*/
/*       }*/
/* */
/*       /* ajax dashboard*//* */
/*       var form = $('#jsForm'),*/
/*           dataContainer = form.find('#dataContainer'),*/
/*           deleteBtn = form.find('#js-delete'),*/
/*           pageInput = form.find('#pagenumber'),*/
/*           sortByInput = form.find('#sortBy'),*/
/*           sortDirInput = form.find('#sortDir'),*/
/*           sortBtn = form.find('.js-sort'),*/
/*           searchModal = form.find('#searchModal'),*/
/*           jsFormUrl = '',*/
/*           checkboxBtn = form.find("input:checkbox");*/
/* */
/* */
/*       /* pagination *//*     */
/*       form.on('click', '.js-page', function(){*/
/*           pageInput.val($(this).data('page'));*/
/*           ajaxPost();*/
/*       });*/
/* */
/*       /* change sort order *//* */
/*       sortBtn.on('click', function(){*/
/*         var th = $(this).parent();*/
/*         th.addClass('sorted').toggleClass('asc').siblings().removeClass('sorted');*/
/*         sortByInput.val($(this).data('order'));*/
/*         if (th.hasClass('asc')) sortDirInput.val('ASC');*/
/*         else sortDirInput.val('DESC');*/
/*         ajaxPost();*/
/*         return false;*/
/*       });*/
/* */
/*       /* delete a article *//* */
/*       deleteBtn.on('click', function(){*/
/*         if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;*/
/*         jsFormUrl='{{ path('article_remove') }}';*/
/*         ajaxPost('delete');*/
/*       });*/
/*       form.on('submit', ajaxPost);*/
/*       /* submit the form after loading the page*//* */
/*       init();*/
/*       ajaxPost();*/
/* */
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
