<?php

/* gestionStock/admin/index.html.twig */
class __TwigTemplate_39d9ba0f6d7cb1f8d8ef8d824ae494d57c6fad51c6015ca26756f4ca9095c62b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/admin/index.html.twig", 1);
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
        $__internal_138fd04984a2e1d9563238d9ddb3f5aeba500121cf0cf05cbf39c07a8be44a97 = $this->env->getExtension("native_profiler");
        $__internal_138fd04984a2e1d9563238d9ddb3f5aeba500121cf0cf05cbf39c07a8be44a97->enter($__internal_138fd04984a2e1d9563238d9ddb3f5aeba500121cf0cf05cbf39c07a8be44a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_138fd04984a2e1d9563238d9ddb3f5aeba500121cf0cf05cbf39c07a8be44a97->leave($__internal_138fd04984a2e1d9563238d9ddb3f5aeba500121cf0cf05cbf39c07a8be44a97_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa8a481c5e24c83e94421d27c8a09c3f2fe0086d2c0ecef7aff539a222ba725e = $this->env->getExtension("native_profiler");
        $__internal_fa8a481c5e24c83e94421d27c8a09c3f2fe0086d2c0ecef7aff539a222ba725e->enter($__internal_fa8a481c5e24c83e94421d27c8a09c3f2fe0086d2c0ecef7aff539a222ba725e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Tableau des Employes
";
        
        $__internal_fa8a481c5e24c83e94421d27c8a09c3f2fe0086d2c0ecef7aff539a222ba725e->leave($__internal_fa8a481c5e24c83e94421d27c8a09c3f2fe0086d2c0ecef7aff539a222ba725e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34905b14e74e20a6abf14b5bf752923c550f43ce092866b110ee95635a566aff = $this->env->getExtension("native_profiler");
        $__internal_34905b14e74e20a6abf14b5bf752923c550f43ce092866b110ee95635a566aff->enter($__internal_34905b14e74e20a6abf14b5bf752923c550f43ce092866b110ee95635a566aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h3><span class=\"glyphicon glyphicon-user\"></span> Gestion des Employes</h3>
        <form  id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
          <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\"> 
            <div class=\"row hide-print\">
              <div class=\"col-md-5 form-group\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"Search\">
                  <div class=\"input-group-btn\">
                  <button class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-search\"></span></button>
                  </div><!-- /btn-group -->
                </div><!-- /input-group -->
              </div><!-- /.col-md-6 -->

              <div class=\"col-md-2\">
                <div class=\"col-md-9\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"form-control\">
                  <option value=\"10\" ";
        // line 23
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 24
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 25
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 26
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
                  <span class=\"dropdown-arrow dropdown-arrow-inverse\"></span>
                  <ul class=\"dropdown-menu dropdown-inverse\">
                      <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ben_new_user");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un utilisateur</a></li>
                      <li><a href=\"#\" class=\"js-enable\" data-action=\"1\"><span class=\"glyphicon glyphicon-ok-circle\"></span> Activer</a></li>
                      <li><a href=\"#\" class=\"js-enable\" data-action=\"0\"><span class=\"glyphicon glyphicon-ban-circle\"></span> Désctiver</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"USER\"><span class=\"glyphicon glyphicon-user\"></span> Promouvoire à user</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"MANAGER\"><span class=\"glyphicon glyphicon-user\"></span> Promouvoire à manager</a></li>
                      <li><a href=\"#\" class=\"js-promote\" data-action=\"ADMIN\"><span class=\"glyphicon glyphicon-user\"></span> Promouvoire à Admin</a></li>
                      <li class=\"divider\"></li>
                      <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ben_users_export");
        echo "\"><span class=\"glyphicon glyphicon-export\"></span> Exporter vers csv</a></li>
                      <li><a id=\"btnPrint\"><span class=\"glyphicon glyphicon-print\"></span> imprimer</a></li>
                      <li><a href=\"#\" id=\"js-delete\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a></li>
                  </ul>
                </div>
              </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->

            <table class=\"table table-striped table-hover table-bordered\">
                <thead>
                    <tr>
                        <th><input id=\"checkall\" type=\"checkbox\" value=\"\"></th>
                        <th>Nom </th>
                        <th>Tél</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th class=\"hide-print\">action</th>
                    </tr>
                </thead>
                <tbody id=\"dataContainer\"></tbody>
            </table>
            <div>
              <em><strong>Total:</strong> ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " utilisateur</em>
            </div>
        </form>
   
<div class=\"clearfix\"></div> 
";
        
        $__internal_34905b14e74e20a6abf14b5bf752923c550f43ce092866b110ee95635a566aff->leave($__internal_34905b14e74e20a6abf14b5bf752923c550f43ce092866b110ee95635a566aff_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05bf5a3752feadf6b40c1698f684792206d1411131fad578235042175d72297e = $this->env->getExtension("native_profiler");
        $__internal_05bf5a3752feadf6b40c1698f684792206d1411131fad578235042175d72297e->enter($__internal_05bf5a3752feadf6b40c1698f684792206d1411131fad578235042175d72297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions 
      function getUrl(id){
        var url = '";
        // line 82
        echo $this->env->getExtension('routing')->getPath("ben_show_user", array("id" => 1111));
        echo "';
        return url.replace(\"1111\", id);
      }
      function updateLink (link) {
        moreBtn.attr('href', link);
      }*/
      function getCheckedRows () {
        var users = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          users.push(\$(this).val());
        });
        return users.join(',');
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
        jsFormUrl = \"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("ben_users_ajax");
        echo "\";
      }
      function ajaxPost(action) {
        container.addClass('working');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            container.removeClass('working');
            init();
            if(!action){
              dataContainer.empty().hide().html(data).fadeIn();
            }else ajaxPost();
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
          dataContainer = form.find('#dataContainer');
          enableBtn = form.find('.js-enable'),
          promoteBtn = form.find('.js-promote'),
          deleteBtn = form.find('#js-delete'),
          pageInput = form.find('#pagenumber'),
          perPageBtn = form.find('#js-perpage'),
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\");

      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });

      /* number of rows per page */
      perPageBtn.on('change', ajaxPost);

      /* enable or disable a user*/
      enableBtn.on('click', function(){
        var url = '";
        // line 151
        echo $this->env->getExtension('routing')->getPath("ben_enable_users", array("etat" => 1111));
        echo "',
            etat = \$(this).data('action');
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('enable');
      });

      /* promote a user */
      promoteBtn.on('click', function(){
        var url='";
        // line 159
        echo $this->env->getExtension('routing')->getPath("ben_promote_users", array("role" => 1111));
        echo "',
            etat = \$(this).data('action');
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('promote');
      });

      /* delete a user */
      deleteBtn.on('click', function(){
        if(!isSelected() ||!confirmation()) return false;
        jsFormUrl = '";
        // line 168
        echo $this->env->getExtension('routing')->getPath("ben_remove_users");
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
        
        $__internal_05bf5a3752feadf6b40c1698f684792206d1411131fad578235042175d72297e->leave($__internal_05bf5a3752feadf6b40c1698f684792206d1411131fad578235042175d72297e_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 168,  260 => 159,  249 => 151,  200 => 105,  174 => 82,  165 => 76,  159 => 75,  146 => 68,  121 => 46,  111 => 39,  93 => 26,  87 => 25,  81 => 24,  75 => 23,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Tableau des Employes*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* <h3><span class="glyphicon glyphicon-user"></span> Gestion des Employes</h3>*/
/*         <form  id="jsForm" role="form" method="post" action="">*/
/*           <input id="pagenumber" type="hidden" name="searchParam[page]" value="1"> */
/*             <div class="row hide-print">*/
/*               <div class="col-md-5 form-group">*/
/*                 <div class="input-group">*/
/*                   <input type="text" name="searchParam[keyword]" class="form-control" placeholder="Search">*/
/*                   <div class="input-group-btn">*/
/*                   <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>*/
/*                   </div><!-- /btn-group -->*/
/*                 </div><!-- /input-group -->*/
/*               </div><!-- /.col-md-6 -->*/
/* */
/*               <div class="col-md-2">*/
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
/*               <div class="col-lg-5">*/
/*                 <div class="btn-group pull-right">              */
/*                   <button class="btn btn-primary "><span class="glyphicon glyphicon-cog"></span>  Selectioner une action</button>*/
/*                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*                     <span class="caret"></span>*/
/*                   </button>*/
/*                   <span class="dropdown-arrow dropdown-arrow-inverse"></span>*/
/*                   <ul class="dropdown-menu dropdown-inverse">*/
/*                       <li><a href="{{ path('ben_new_user') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter un utilisateur</a></li>*/
/*                       <li><a href="#" class="js-enable" data-action="1"><span class="glyphicon glyphicon-ok-circle"></span> Activer</a></li>*/
/*                       <li><a href="#" class="js-enable" data-action="0"><span class="glyphicon glyphicon-ban-circle"></span> Désctiver</a></li>*/
/*                       <li><a href="#" class="js-promote" data-action="USER"><span class="glyphicon glyphicon-user"></span> Promouvoire à user</a></li>*/
/*                       <li><a href="#" class="js-promote" data-action="MANAGER"><span class="glyphicon glyphicon-user"></span> Promouvoire à manager</a></li>*/
/*                       <li><a href="#" class="js-promote" data-action="ADMIN"><span class="glyphicon glyphicon-user"></span> Promouvoire à Admin</a></li>*/
/*                       <li class="divider"></li>*/
/*                       <li><a href="{{ path('ben_users_export') }}"><span class="glyphicon glyphicon-export"></span> Exporter vers csv</a></li>*/
/*                       <li><a id="btnPrint"><span class="glyphicon glyphicon-print"></span> imprimer</a></li>*/
/*                       <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*                   </ul>*/
/*                 </div>*/
/*               </div><!-- /.col-lg-2 -->*/
/*             </div><!-- /.row -->*/
/* */
/*             <table class="table table-striped table-hover table-bordered">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th><input id="checkall" type="checkbox" value=""></th>*/
/*                         <th>Nom </th>*/
/*                         <th>Tél</th>*/
/*                         <th>Email</th>*/
/*                         <th>Adresse</th>*/
/*                         <th class="hide-print">action</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody id="dataContainer"></tbody>*/
/*             </table>*/
/*             <div>*/
/*               <em><strong>Total:</strong> {{ entitiesLength }} utilisateur</em>*/
/*             </div>*/
/*         </form>*/
/*    */
/* <div class="clearfix"></div> */
/* {% endblock body %}*/
/* */
/*  {% block javascripts %}*/
/* {{ parent() }}*/
/* <script> */
/*     (function($) {*/
/* */
/*       /* helper functions */
/*       function getUrl(id){*/
/*         var url = '{{ path('ben_show_user', {'id': 1111 }) }}';*/
/*         return url.replace("1111", id);*/
/*       }*/
/*       function updateLink (link) {*/
/*         moreBtn.attr('href', link);*/
/*       }*//* */
/*       function getCheckedRows () {*/
/*         var users = [];*/
/*         dataContainer.find('input:checkbox:checked').each(function() {*/
/*           users.push($(this).val());*/
/*         });*/
/*         return users.join(',');*/
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
/*         jsFormUrl = "{{ path('ben_users_ajax') }}";*/
/*       }*/
/*       function ajaxPost(action) {*/
/*         container.addClass('working');*/
/*         $.ajax({ */
/*           type: "POST", */
/*           data: form.serialize(),*/
/*           url: jsFormUrl, */
/*           success: function(data){ */
/*             container.removeClass('working');*/
/*             init();*/
/*             if(!action){*/
/*               dataContainer.empty().hide().html(data).fadeIn();*/
/*             }else ajaxPost();*/
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
/*       var container= $('.container'),*/
/*           form = $('#jsForm'),*/
/*           dataContainer = form.find('#dataContainer');*/
/*           enableBtn = form.find('.js-enable'),*/
/*           promoteBtn = form.find('.js-promote'),*/
/*           deleteBtn = form.find('#js-delete'),*/
/*           pageInput = form.find('#pagenumber'),*/
/*           perPageBtn = form.find('#js-perpage'),*/
/*           jsFormUrl = '',*/
/*           checkboxBtn = form.find("input:checkbox");*/
/* */
/*       /* pagination *//*     */
/*       form.on('click', '.js-page', function(){*/
/*           pageInput.val($(this).data('page'));*/
/*           ajaxPost();*/
/*       });*/
/* */
/*       /* number of rows per page *//* */
/*       perPageBtn.on('change', ajaxPost);*/
/* */
/*       /* enable or disable a user*//* */
/*       enableBtn.on('click', function(){*/
/*         var url = '{{ path('ben_enable_users', {'etat': 1111 }) }}',*/
/*             etat = $(this).data('action');*/
/*         jsFormUrl = url.replace("1111", etat);*/
/*         ajaxPost('enable');*/
/*       });*/
/* */
/*       /* promote a user *//* */
/*       promoteBtn.on('click', function(){*/
/*         var url='{{ path('ben_promote_users', {'role': 1111 }) }}',*/
/*             etat = $(this).data('action');*/
/*         jsFormUrl = url.replace("1111", etat);*/
/*         ajaxPost('promote');*/
/*       });*/
/* */
/*       /* delete a user *//* */
/*       deleteBtn.on('click', function(){*/
/*         if(!isSelected() ||!confirmation()) return false;*/
/*         jsFormUrl = '{{ path('ben_remove_users') }}';*/
/*         ajaxPost('delete');*/
/*       });*/
/*       form.on('submit', ajaxPost);*/
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
