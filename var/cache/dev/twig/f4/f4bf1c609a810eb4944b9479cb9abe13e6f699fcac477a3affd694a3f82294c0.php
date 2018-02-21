<?php

/* gestionStock/Ar_sortie/index.html.twig */
class __TwigTemplate_7dc019f311f710bc7a0e217dd916540bf03d941b74dd842240bfe1fa9ce2ae95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_sortie/index.html.twig", 1);
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
        $__internal_a8dd229d5112c1cc412b7f2d1edcbcdd3caa464e55cbea5f2a8b38ed4942e211 = $this->env->getExtension("native_profiler");
        $__internal_a8dd229d5112c1cc412b7f2d1edcbcdd3caa464e55cbea5f2a8b38ed4942e211->enter($__internal_a8dd229d5112c1cc412b7f2d1edcbcdd3caa464e55cbea5f2a8b38ed4942e211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_sortie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8dd229d5112c1cc412b7f2d1edcbcdd3caa464e55cbea5f2a8b38ed4942e211->leave($__internal_a8dd229d5112c1cc412b7f2d1edcbcdd3caa464e55cbea5f2a8b38ed4942e211_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_903d646310a65cd5ada6cdcca56ef77107ca5f86fcae9c1fbc593af47608c87d = $this->env->getExtension("native_profiler");
        $__internal_903d646310a65cd5ada6cdcca56ef77107ca5f86fcae9c1fbc593af47608c87d->enter($__internal_903d646310a65cd5ada6cdcca56ef77107ca5f86fcae9c1fbc593af47608c87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Liste des Sorties d'Articles
";
        
        $__internal_903d646310a65cd5ada6cdcca56ef77107ca5f86fcae9c1fbc593af47608c87d->leave($__internal_903d646310a65cd5ada6cdcca56ef77107ca5f86fcae9c1fbc593af47608c87d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc386cd220bc4a601a367c8c0fcb358c539fc4373d168705f1b60c69689187e7 = $this->env->getExtension("native_profiler");
        $__internal_dc386cd220bc4a601a367c8c0fcb358c539fc4373d168705f1b60c69689187e7->enter($__internal_dc386cd220bc4a601a367c8c0fcb358c539fc4373d168705f1b60c69689187e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-list-alt\"></span> Liste des Sorties des Articles</h3>
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
        echo $this->env->getExtension('routing')->getPath("ar_sortie_new");
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
                <th>Référence sortie</th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"date\">Date de Sortie <span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Article</th>
                <th>Référence de l'Article</th>
                <th>Quantite</th>
            </tr>
            </thead>
            <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " sortie d'Article</em>
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
            <label for=\"\" class=\"col-sm-5 control-label\">Référence de l'Article</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[article]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ref", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ref", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Identifiant de la Sortie</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[refEntr]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refSorties"]) ? $context["refSorties"] : $this->getContext($context, "refSorties")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ref", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ref", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Date de Sortie</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[sortie]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorties"]) ? $context["sorties"] : $this->getContext($context, "sorties")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 88
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Lignes par page</label>
            <div class=\"col-sm-6\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"select2 no-search\">
                  <option value=\"10\" ";
        // line 97
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 98
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 99
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 100
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 100)) {
            echo "selected";
        }
        echo ">100</option>
                </select>
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
        
        $__internal_dc386cd220bc4a601a367c8c0fcb358c539fc4373d168705f1b60c69689187e7->leave($__internal_dc386cd220bc4a601a367c8c0fcb358c539fc4373d168705f1b60c69689187e7_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_300f0ae805bb59629b5d4d6c83da08168b5e7c276bd48ab4b9f4479f52a5fb78 = $this->env->getExtension("native_profiler");
        $__internal_300f0ae805bb59629b5d4d6c83da08168b5e7c276bd48ab4b9f4479f52a5fb78->enter($__internal_300f0ae805bb59629b5d4d6c83da08168b5e7c276bd48ab4b9f4479f52a5fb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
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
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '";
        // line 138
        echo $this->env->getExtension('routing')->getPath("ar_sortie_ajax");
        echo "';
      }
      function ajaxPost(action, callback) {
        container.addClass('working');
        searchModal.modal('hide');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            container.removeClass('working');
            if(callback) callback(data);
            init();
            if(!action){ 
            dataContainer.empty().hide().html(data).fadeIn();}
            else ajaxPost();
          },
          error:function(){
              alert('service denied');
              container.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
          var container= \$('.container'),
          form = \$('#jsForm'),
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
        // line 197
        echo $this->env->getExtension('routing')->getPath("ar_sortie_remove");
        echo "';
        ajaxPost('delete');
      });
      form.on('submit', ajaxPost);
     

      /* submit the form after loading the page*/
      init();
      setTimeout(ajaxPost, 1);

      /* dropdown sub menu */
      \$('.dropdown-submenu').hover(function() {
        \$(this).find('.dropdown-menu').toggleClass('open');
      });

    })(jQuery);
</script>
";
        
        $__internal_300f0ae805bb59629b5d4d6c83da08168b5e7c276bd48ab4b9f4479f52a5fb78->leave($__internal_300f0ae805bb59629b5d4d6c83da08168b5e7c276bd48ab4b9f4479f52a5fb78_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_sortie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 197,  270 => 138,  245 => 116,  239 => 115,  215 => 100,  209 => 99,  203 => 98,  197 => 97,  188 => 90,  177 => 88,  173 => 87,  163 => 79,  152 => 77,  148 => 76,  138 => 68,  127 => 66,  123 => 65,  104 => 49,  81 => 29,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Liste des Sorties d'Articles*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-list-alt"></span> Liste des Sorties des Articles</h3>*/
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
/*                <li><a href="{{ path('ar_sortie_new') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></li>*/
/*                 <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </div><!-- /.row --> */
/*         <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th class="hidden-print"><input id="checkall" type="checkbox" value=""></th>*/
/*                 <th>Référence sortie</th>*/
/*                 <th class="sortable"><a href="#" class="js-sort" data-order="date">Date de Sortie <span class="glyphicon glyphicon-sort pull-right"></span></a></th>*/
/*                 <th>Article</th>*/
/*                 <th>Référence de l'Article</th>*/
/*                 <th>Quantite</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="dataContainer"></tbody>*/
/*         </table>*/
/*         <div class="caption">*/
/*           <strong>Total:</strong> <em>{{ entitiesLength }} sortie d'Article</em>*/
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
/*             <label for="" class="col-sm-5 control-label">Référence de l'Article</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[article]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in articles %}*/
/*                   <option value="{{ item.ref }}">{{ item.ref }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Identifiant de la Sortie</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[refEntr]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in refSorties %}*/
/*                   <option value="{{ item.ref }}">{{ item.ref }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Date de Sortie</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[sortie]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in sorties %}*/
/*                   <option value="{{ item.date }}">{{ item.date }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Lignes par page</label>*/
/*             <div class="col-sm-6">*/
/*                 <select id="js-perpage" name="searchParam[perPage]" class="select2 no-search">*/
/*                   <option value="10" {% if app_config.rows_per_page == 10 %}selected{% endif %}>10</option>*/
/*                   <option value="20" {% if app_config.rows_per_page == 20 %}selected{% endif %}>20</option>*/
/*                   <option value="50" {% if app_config.rows_per_page == 50 %}selected{% endif %}>50</option>*/
/*                   <option value="100" {% if app_config.rows_per_page == 100 %}selected{% endif %}>100</option>*/
/*                 </select>*/
/*             </div>*/
/*           </div>*/
/* */
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
/*         pageInput.val('1');*/
/*         checkboxBtn.prop("checked",false);*/
/*         jsFormUrl = '{{ path('ar_sortie_ajax') }}';*/
/*       }*/
/*       function ajaxPost(action, callback) {*/
/*         container.addClass('working');*/
/*         searchModal.modal('hide');*/
/*         $.ajax({ */
/*           type: "POST", */
/*           data: form.serialize(),*/
/*           url: jsFormUrl, */
/*           success: function(data){ */
/*             container.removeClass('working');*/
/*             if(callback) callback(data);*/
/*             init();*/
/*             if(!action){ */
/*             dataContainer.empty().hide().html(data).fadeIn();}*/
/*             else ajaxPost();*/
/*           },*/
/*           error:function(){*/
/*               alert('service denied');*/
/*               container.removeClass('working');*/
/*           }*/
/*         });*/
/*         return false;*/
/*       }*/
/* */
/*       /* ajax dashboard*//* */
/*           var container= $('.container'),*/
/*           form = $('#jsForm'),*/
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
/*         jsFormUrl='{{ path('ar_sortie_remove') }}';*/
/*         ajaxPost('delete');*/
/*       });*/
/*       form.on('submit', ajaxPost);*/
/*      */
/* */
/*       /* submit the form after loading the page*//* */
/*       init();*/
/*       setTimeout(ajaxPost, 1);*/
/* */
/*       /* dropdown sub menu *//* */
/*       $('.dropdown-submenu').hover(function() {*/
/*         $(this).find('.dropdown-menu').toggleClass('open');*/
/*       });*/
/* */
/*     })(jQuery);*/
/* </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
