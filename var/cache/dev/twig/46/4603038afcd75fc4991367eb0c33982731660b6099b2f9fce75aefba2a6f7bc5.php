<?php

/* gestionStock/Ar_entree/index.html.twig */
class __TwigTemplate_245dd6433e09207c287c336ce506753d245a750c6fee9f6da09b5111b2644f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Ar_entree/index.html.twig", 1);
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
        $__internal_f5b85efe81f7a498198dc6d390640c68538da2ef16d3e516346c0393941b77d8 = $this->env->getExtension("native_profiler");
        $__internal_f5b85efe81f7a498198dc6d390640c68538da2ef16d3e516346c0393941b77d8->enter($__internal_f5b85efe81f7a498198dc6d390640c68538da2ef16d3e516346c0393941b77d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Ar_entree/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b85efe81f7a498198dc6d390640c68538da2ef16d3e516346c0393941b77d8->leave($__internal_f5b85efe81f7a498198dc6d390640c68538da2ef16d3e516346c0393941b77d8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_147199b0acbe2d095821e6e5e86eabc7b2c39a26d200a753f895f834046fa7eb = $this->env->getExtension("native_profiler");
        $__internal_147199b0acbe2d095821e6e5e86eabc7b2c39a26d200a753f895f834046fa7eb->enter($__internal_147199b0acbe2d095821e6e5e86eabc7b2c39a26d200a753f895f834046fa7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Liste des Entrees d'Articles
";
        
        $__internal_147199b0acbe2d095821e6e5e86eabc7b2c39a26d200a753f895f834046fa7eb->leave($__internal_147199b0acbe2d095821e6e5e86eabc7b2c39a26d200a753f895f834046fa7eb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30520b278ede4a33076933e7015d9d8e4d41b7ee7beccb4279607310a9c4210c = $this->env->getExtension("native_profiler");
        $__internal_30520b278ede4a33076933e7015d9d8e4d41b7ee7beccb4279607310a9c4210c->enter($__internal_30520b278ede4a33076933e7015d9d8e4d41b7ee7beccb4279607310a9c4210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-list-alt\"></span> Liste des Entrees des Articles</h3>
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
        echo $this->env->getExtension('routing')->getPath("ar_entree_new");
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
                <th>Référence Entree</th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"date\">Date d'Entree <span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
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
        echo " Entrée d'Article</em>
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
            <label for=\"\" class=\"col-sm-5 control-label\">Référence d'Entrée</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[refEntr]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refEntrees"]) ? $context["refEntrees"] : $this->getContext($context, "refEntrees")));
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
          </div>          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Date d'Entree</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[entree]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entrees"]) ? $context["entrees"] : $this->getContext($context, "entrees")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
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
        // line 89
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Lignes par page</label>
            <div class=\"col-sm-6\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"select2 no-search\">
                  <option value=\"10\" ";
        // line 96
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 97
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 98
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 99
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
        
        $__internal_30520b278ede4a33076933e7015d9d8e4d41b7ee7beccb4279607310a9c4210c->leave($__internal_30520b278ede4a33076933e7015d9d8e4d41b7ee7beccb4279607310a9c4210c_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2bd3d230e809db644da7a0b52d1b36f9293d25af0a4e3919dc2a06366912fa8d = $this->env->getExtension("native_profiler");
        $__internal_2bd3d230e809db644da7a0b52d1b36f9293d25af0a4e3919dc2a06366912fa8d->enter($__internal_2bd3d230e809db644da7a0b52d1b36f9293d25af0a4e3919dc2a06366912fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
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
        // line 137
        echo $this->env->getExtension('routing')->getPath("ar_entree_ajax");
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
        // line 196
        echo $this->env->getExtension('routing')->getPath("ar_entree_remove");
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
        
        $__internal_2bd3d230e809db644da7a0b52d1b36f9293d25af0a4e3919dc2a06366912fa8d->leave($__internal_2bd3d230e809db644da7a0b52d1b36f9293d25af0a4e3919dc2a06366912fa8d_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Ar_entree/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 196,  269 => 137,  244 => 115,  238 => 114,  214 => 99,  208 => 98,  202 => 97,  196 => 96,  187 => 89,  176 => 87,  172 => 86,  163 => 79,  152 => 77,  148 => 76,  138 => 68,  127 => 66,  123 => 65,  104 => 49,  81 => 29,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Liste des Entrees d'Articles*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-list-alt"></span> Liste des Entrees des Articles</h3>*/
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
/*                <li><a href="{{ path('ar_entree_new') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></li>*/
/*                 <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </div><!-- /.row --> */
/*         <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th class="hidden-print"><input id="checkall" type="checkbox" value=""></th>*/
/*                 <th>Référence Entree</th>*/
/*                 <th class="sortable"><a href="#" class="js-sort" data-order="date">Date d'Entree <span class="glyphicon glyphicon-sort pull-right"></span></a></th>*/
/*                 <th>Article</th>*/
/*                 <th>Référence de l'Article</th>*/
/*                 <th>Quantite</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="dataContainer"></tbody>*/
/*         </table>*/
/*         <div class="caption">*/
/*           <strong>Total:</strong> <em>{{ entitiesLength }} Entrée d'Article</em>*/
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
/*             <label for="" class="col-sm-5 control-label">Référence d'Entrée</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[refEntr]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in refEntrees %}*/
/*                   <option value="{{ item.ref }}">{{ item.ref }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>          <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Date d'Entree</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[entree]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in entrees %}*/
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
/*         jsFormUrl = '{{ path('ar_entree_ajax') }}';*/
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
/*         jsFormUrl='{{ path('ar_entree_remove') }}';*/
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
