<?php

/* gestionStock/Expression_besoin/index.html.twig */
class __TwigTemplate_91e84db6785061c059b821d4cfcf29bcdcfde3698041241b2401ace57dce3d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Expression_besoin/index.html.twig", 1);
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
        $__internal_340c81989d75251ea60ada5d46227c000aa7b545899bdeb3ffbcfe67ffb52105 = $this->env->getExtension("native_profiler");
        $__internal_340c81989d75251ea60ada5d46227c000aa7b545899bdeb3ffbcfe67ffb52105->enter($__internal_340c81989d75251ea60ada5d46227c000aa7b545899bdeb3ffbcfe67ffb52105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Expression_besoin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340c81989d75251ea60ada5d46227c000aa7b545899bdeb3ffbcfe67ffb52105->leave($__internal_340c81989d75251ea60ada5d46227c000aa7b545899bdeb3ffbcfe67ffb52105_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_87e9e147f6f7e927470def1464c6ee4211e22c79b4d0303332333534b9a736e7 = $this->env->getExtension("native_profiler");
        $__internal_87e9e147f6f7e927470def1464c6ee4211e22c79b4d0303332333534b9a736e7->enter($__internal_87e9e147f6f7e927470def1464c6ee4211e22c79b4d0303332333534b9a736e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Liste des Besoins
";
        
        $__internal_87e9e147f6f7e927470def1464c6ee4211e22c79b4d0303332333534b9a736e7->leave($__internal_87e9e147f6f7e927470def1464c6ee4211e22c79b4d0303332333534b9a736e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e176ec2e616dbabdeeed72ebbd7741a3e81cfc6426f1374f547ecc8eb81595f4 = $this->env->getExtension("native_profiler");
        $__internal_e176ec2e616dbabdeeed72ebbd7741a3e81cfc6426f1374f547ecc8eb81595f4->enter($__internal_e176ec2e616dbabdeeed72ebbd7741a3e81cfc6426f1374f547ecc8eb81595f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-list-alt\"></span> Liste des Besoins</h3>
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
        echo $this->env->getExtension('routing')->getPath("expression_besoin_new");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
               <li><a href=\"#\" id=\"js-accord\"><span class=\"glyphicon glyphicon-ok-circle\"></span> Accorder</a></li>
               <li><a href=\"#\" id=\"js-desaccord\"><span class=\"glyphicon glyphicon-ban-circle\"></span> Désaccorder</a></li>
                <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row --> 
        <table class=\"table table-striped table-hover table-bordered\">
            <thead>
            <tr>
                <th class=\"hidden-print\"><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                <th>Nom Employe</th>
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"date\">Date Emission <span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Accord</th>
            </tr>
            </thead>
            <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " Besoins</em>
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
            <label for=\"\" class=\"col-sm-5 control-label\">Employe</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[employe]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) ? $context["employes"] : $this->getContext($context, "employes")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
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
            <label for=\"\" class=\"col-sm-5 control-label\">Date Emission</label>
            <div class=\"col-sm-6\">
              <input type=\"Date\" name=\"searchParam[dateEmission]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Accord</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[accord]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                <option value=\"true\">Oui</option>
                <option value=\"false\">Non</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Lignes par page</label>
            <div class=\"col-sm-6\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"select2 no-search\">
                  <option value=\"10\" ";
        // line 91
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 92
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 93
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 94
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
        
        $__internal_e176ec2e616dbabdeeed72ebbd7741a3e81cfc6426f1374f547ecc8eb81595f4->leave($__internal_e176ec2e616dbabdeeed72ebbd7741a3e81cfc6426f1374f547ecc8eb81595f4_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a83412c2ecd385b6047c85d9881bd63a23a2f7639a522f1c45a22eeaaa83b45 = $this->env->getExtension("native_profiler");
        $__internal_6a83412c2ecd385b6047c85d9881bd63a23a2f7639a522f1c45a22eeaaa83b45->enter($__internal_6a83412c2ecd385b6047c85d9881bd63a23a2f7639a522f1c45a22eeaaa83b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions */
      function getCheckedRows () {
        var exps = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          exps.push(\$(this).val());
        });
        return exps.join(',');
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
        // line 132
        echo $this->env->getExtension('routing')->getPath("expression_besoin_ajax");
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
          accordBtn = form.find('#js-accord'),
          desaccordBtn = form.find('#js-desaccord'),
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

      /* delete a livraison */
      deleteBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 193
        echo $this->env->getExtension('routing')->getPath("expression_besoin_remove");
        echo "';
        ajaxPost('delete');
      });
      form.on('submit', ajaxPost);

      /* éffecter l'Accord */
      accordBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment Effectuer l\\'accord des Besoins pour les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 201
        echo $this->env->getExtension('routing')->getPath("expression_besoin_accord");
        echo "';
        ajaxPost('accord');
      });
      form.on('submit', ajaxPost);

      /* éffecter le désaccord */
      desaccordBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment Effectuer le désaccord des Besoins pour les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 209
        echo $this->env->getExtension('routing')->getPath("expression_besoin_desaccord");
        echo "';
        ajaxPost('desaccord');
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
        
        $__internal_6a83412c2ecd385b6047c85d9881bd63a23a2f7639a522f1c45a22eeaaa83b45->leave($__internal_6a83412c2ecd385b6047c85d9881bd63a23a2f7639a522f1c45a22eeaaa83b45_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Expression_besoin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 209,  311 => 201,  300 => 193,  236 => 132,  211 => 110,  205 => 109,  181 => 94,  175 => 93,  169 => 92,  163 => 91,  138 => 68,  127 => 66,  123 => 65,  104 => 49,  81 => 29,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Liste des Besoins*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-list-alt"></span> Liste des Besoins</h3>*/
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
/*                <li><a href="{{ path('expression_besoin_new') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></li>*/
/*                <li><a href="#" id="js-accord"><span class="glyphicon glyphicon-ok-circle"></span> Accorder</a></li>*/
/*                <li><a href="#" id="js-desaccord"><span class="glyphicon glyphicon-ban-circle"></span> Désaccorder</a></li>*/
/*                 <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </div><!-- /.row --> */
/*         <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th class="hidden-print"><input id="checkall" type="checkbox" value=""></th>*/
/*                 <th>Nom Employe</th>*/
/*                 <th class="sortable"><a href="#" class="js-sort" data-order="date">Date Emission <span class="glyphicon glyphicon-sort pull-right"></span></a></th>*/
/*                 <th>Accord</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="dataContainer"></tbody>*/
/*         </table>*/
/*         <div class="caption">*/
/*           <strong>Total:</strong> <em>{{ entitiesLength }} Besoins</em>*/
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
/*             <label for="" class="col-sm-5 control-label">Employe</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[employe]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in employes %}*/
/*                   <option value="{{ item.nom }}">{{ item.nom }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Date Emission</label>*/
/*             <div class="col-sm-6">*/
/*               <input type="Date" name="searchParam[dateEmission]" class="form-control">*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Accord</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[accord]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 <option value="true">Oui</option>*/
/*                 <option value="false">Non</option>*/
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
/*         var exps = [];*/
/*         dataContainer.find('input:checkbox:checked').each(function() {*/
/*           exps.push($(this).val());*/
/*         });*/
/*         return exps.join(',');*/
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
/*         jsFormUrl = '{{ path('expression_besoin_ajax') }}';*/
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
/*           accordBtn = form.find('#js-accord'),*/
/*           desaccordBtn = form.find('#js-desaccord'),*/
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
/*       /* delete a livraison *//* */
/*       deleteBtn.on('click', function(){*/
/*         if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;*/
/*         jsFormUrl='{{ path('expression_besoin_remove') }}';*/
/*         ajaxPost('delete');*/
/*       });*/
/*       form.on('submit', ajaxPost);*/
/* */
/*       /* éffecter l'Accord *//* */
/*       accordBtn.on('click', function(){*/
/*         if (!isSelected() || !confirmation('voullez-vous vraiment Effectuer l\'accord des Besoins pour les adhérants séléctionnées')) return false;*/
/*         jsFormUrl='{{ path('expression_besoin_accord') }}';*/
/*         ajaxPost('accord');*/
/*       });*/
/*       form.on('submit', ajaxPost);*/
/* */
/*       /* éffecter le désaccord *//* */
/*       desaccordBtn.on('click', function(){*/
/*         if (!isSelected() || !confirmation('voullez-vous vraiment Effectuer le désaccord des Besoins pour les adhérants séléctionnées')) return false;*/
/*         jsFormUrl='{{ path('expression_besoin_desaccord') }}';*/
/*         ajaxPost('desaccord');*/
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
/* */
