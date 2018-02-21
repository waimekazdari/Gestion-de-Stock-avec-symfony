<?php

/* gestionStock/Departement/index.html.twig */
class __TwigTemplate_adf023fce54d39129b40434ac9f72dfa75d55634bc08e8320494037cfcfdf504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Departement/index.html.twig", 1);
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
        $__internal_156629dbc2fbf66dfd120fb765efce795c22bbece969b9e29793251e095f7e74 = $this->env->getExtension("native_profiler");
        $__internal_156629dbc2fbf66dfd120fb765efce795c22bbece969b9e29793251e095f7e74->enter($__internal_156629dbc2fbf66dfd120fb765efce795c22bbece969b9e29793251e095f7e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Departement/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_156629dbc2fbf66dfd120fb765efce795c22bbece969b9e29793251e095f7e74->leave($__internal_156629dbc2fbf66dfd120fb765efce795c22bbece969b9e29793251e095f7e74_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c349250f71ba11156abcd5acf0864ca1d18c1641b0c3ad5e3c28306b62a6597 = $this->env->getExtension("native_profiler");
        $__internal_5c349250f71ba11156abcd5acf0864ca1d18c1641b0c3ad5e3c28306b62a6597->enter($__internal_5c349250f71ba11156abcd5acf0864ca1d18c1641b0c3ad5e3c28306b62a6597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Liste des Départements
";
        
        $__internal_5c349250f71ba11156abcd5acf0864ca1d18c1641b0c3ad5e3c28306b62a6597->leave($__internal_5c349250f71ba11156abcd5acf0864ca1d18c1641b0c3ad5e3c28306b62a6597_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7e508d77fee9beaaf10528784471dd1699a66ad48ef5b5b11368ae99fe2f464 = $this->env->getExtension("native_profiler");
        $__internal_c7e508d77fee9beaaf10528784471dd1699a66ad48ef5b5b11368ae99fe2f464->enter($__internal_c7e508d77fee9beaaf10528784471dd1699a66ad48ef5b5b11368ae99fe2f464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-list-alt\"></span> Liste des Départements</h3>
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

               <div class=\"col-md-2\">
                <div class=\"col-md-9\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"form-control\">
                  <option value=\"10\" ";
        // line 25
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 26
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 27
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 28
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 100)) {
            echo "selected";
        }
        echo ">100</option>
                </select>
                </div>
              </div>

          <div class=\"col-lg-5\">
            <div class=\"btn-group pull-right\">                       
              <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-cog\"></span>  Selectioner une action</button>
              <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
               <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("departement_new");
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
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"libele\">Département <span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
            </tr>
            </thead>
            <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " Départements</em>
        </div>
</form>

";
        
        $__internal_c7e508d77fee9beaaf10528784471dd1699a66ad48ef5b5b11368ae99fe2f464->leave($__internal_c7e508d77fee9beaaf10528784471dd1699a66ad48ef5b5b11368ae99fe2f464_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c31a05d7e108436b440d2c70bb37cad92bc2e1a6ba14eae42b0fcfb51a148408 = $this->env->getExtension("native_profiler");
        $__internal_c31a05d7e108436b440d2c70bb37cad92bc2e1a6ba14eae42b0fcfb51a148408->enter($__internal_c31a05d7e108436b440d2c70bb37cad92bc2e1a6ba14eae42b0fcfb51a148408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions */
      function getCheckedRows () {
        var departements = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          departements.push(\$(this).val());
        });
        return departements.join(',');
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
        // line 84
        echo $this->env->getExtension('routing')->getPath("departement_ajax");
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
          perPageBtn = form.find('#js-perpage'),
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

      /* number of rows per page */
      perPageBtn.on('change', ajaxPost);

      /* delete a departement */
      deleteBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 147
        echo $this->env->getExtension('routing')->getPath("departement_remove");
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
        
        $__internal_c31a05d7e108436b440d2c70bb37cad92bc2e1a6ba14eae42b0fcfb51a148408->leave($__internal_c31a05d7e108436b440d2c70bb37cad92bc2e1a6ba14eae42b0fcfb51a148408_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Departement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 147,  174 => 84,  149 => 62,  143 => 61,  131 => 56,  112 => 40,  95 => 28,  89 => 27,  83 => 26,  77 => 25,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Liste des Départements*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-list-alt"></span> Liste des Départements</h3>*/
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
/* */
/*                <div class="col-md-2">*/
/*                 <div class="col-md-9">*/
/*                 <select id="js-perpage" name="searchParam[perPage]" class="form-control">*/
/*                   <option value="10" {% if app_config.rows_per_page == 10 %}selected{% endif %}>10</option>*/
/*                   <option value="20" {% if app_config.rows_per_page == 20 %}selected{% endif %}>20</option>*/
/*                   <option value="50" {% if app_config.rows_per_page == 50 %}selected{% endif %}>50</option>*/
/*                   <option value="100" {% if app_config.rows_per_page == 100 %}selected{% endif %}>100</option>*/
/*                 </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*           <div class="col-lg-5">*/
/*             <div class="btn-group pull-right">                       */
/*               <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span>  Selectioner une action</button>*/
/*               <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*                 <span class="caret"></span>*/
/*               </button>*/
/*               <ul class="dropdown-menu" role="menu">*/
/*                <li><a href="{{ path('departement_new') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></li>*/
/*                 <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </div><!-- /.row --> */
/*         <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th class="hidden-print"><input id="checkall" type="checkbox" value=""></th>*/
/*                 <th class="sortable"><a href="#" class="js-sort" data-order="libele">Département <span class="glyphicon glyphicon-sort pull-right"></span></a></th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="dataContainer"></tbody>*/
/*         </table>*/
/*         <div class="caption">*/
/*           <strong>Total:</strong> <em>{{ entitiesLength }} Départements</em>*/
/*         </div>*/
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
/*         var departements = [];*/
/*         dataContainer.find('input:checkbox:checked').each(function() {*/
/*           departements.push($(this).val());*/
/*         });*/
/*         return departements.join(',');*/
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
/*         jsFormUrl = '{{ path('departement_ajax') }}';*/
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
/*           perPageBtn = form.find('#js-perpage'),*/
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
/*       /* number of rows per page *//* */
/*       perPageBtn.on('change', ajaxPost);*/
/* */
/*       /* delete a departement *//* */
/*       deleteBtn.on('click', function(){*/
/*         if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;*/
/*         jsFormUrl='{{ path('departement_remove') }}';*/
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
/* */
