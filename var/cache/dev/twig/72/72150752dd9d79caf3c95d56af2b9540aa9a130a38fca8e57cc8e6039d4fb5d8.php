<?php

/* gestionStock/Service/index.html.twig */
class __TwigTemplate_ae7670d65873db93c4b0c5d4e3b079eee2c4ccda60a930a2dc084514e9178c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gestionStock/Service/index.html.twig", 1);
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
        $__internal_b6ee1dbd52f98245d7c9fc0aa3eaef51023470d93a9aeadc9253b546a5ee5b5e = $this->env->getExtension("native_profiler");
        $__internal_b6ee1dbd52f98245d7c9fc0aa3eaef51023470d93a9aeadc9253b546a5ee5b5e->enter($__internal_b6ee1dbd52f98245d7c9fc0aa3eaef51023470d93a9aeadc9253b546a5ee5b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionStock/Service/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ee1dbd52f98245d7c9fc0aa3eaef51023470d93a9aeadc9253b546a5ee5b5e->leave($__internal_b6ee1dbd52f98245d7c9fc0aa3eaef51023470d93a9aeadc9253b546a5ee5b5e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca924a7233d2d23187ef800ab650955197089d8454d9d762882a5971f431d413 = $this->env->getExtension("native_profiler");
        $__internal_ca924a7233d2d23187ef800ab650955197089d8454d9d762882a5971f431d413->enter($__internal_ca924a7233d2d23187ef800ab650955197089d8454d9d762882a5971f431d413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Liste des Services
";
        
        $__internal_ca924a7233d2d23187ef800ab650955197089d8454d9d762882a5971f431d413->leave($__internal_ca924a7233d2d23187ef800ab650955197089d8454d9d762882a5971f431d413_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57c382ac63cfef4dad3176339424dfa65ac3a3e1c8887376e4fa9ae519d04d83 = $this->env->getExtension("native_profiler");
        $__internal_57c382ac63cfef4dad3176339424dfa65ac3a3e1c8887376e4fa9ae519d04d83->enter($__internal_57c382ac63cfef4dad3176339424dfa65ac3a3e1c8887376e4fa9ae519d04d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h3><span class=\"glyphicon glyphicon-list-alt\"></span> Liste des Services</h3>
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
        echo $this->env->getExtension('routing')->getPath("service_new");
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
                <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"libele\">Service <span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                <th>Département</th>
            </tr>
            </thead>
            <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>Total:</strong> <em>";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " Service</em>
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
            <label for=\"\" class=\"col-sm-5 control-label\">Nom Service</label>
            <div class=\"col-sm-6\">
              <input type=\"text\" name=\"searchParam[libele]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Département</label>
            <div class=\"col-sm-6\">
              <select id=\"cityselect\" name=\"searchParam[departement]\" class=\"select2 search\">
                <option value=\"\">Tous</option>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departements"]) ? $context["departements"] : $this->getContext($context, "departements")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
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
        // line 71
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-5 control-label\">Lignes par page</label>
            <div class=\"col-sm-6\">
                <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"select2 no-search\">
                  <option value=\"10\" ";
        // line 78
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                  <option value=\"20\" ";
        // line 79
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                  <option value=\"50\" ";
        // line 80
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                  <option value=\"100\" ";
        // line 81
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
        
        $__internal_57c382ac63cfef4dad3176339424dfa65ac3a3e1c8887376e4fa9ae519d04d83->leave($__internal_57c382ac63cfef4dad3176339424dfa65ac3a3e1c8887376e4fa9ae519d04d83_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4f6ce204d559e412545044bcc79b5d429866f5c97483460818a15de64314c5c = $this->env->getExtension("native_profiler");
        $__internal_e4f6ce204d559e412545044bcc79b5d429866f5c97483460818a15de64314c5c->enter($__internal_e4f6ce204d559e412545044bcc79b5d429866f5c97483460818a15de64314c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions */
      function getCheckedRows () {
        var services = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          services.push(\$(this).val());
        });
        return services.join(',');
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
        // line 119
        echo $this->env->getExtension('routing')->getPath("service_ajax");
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

      /* delete a service */
      deleteBtn.on('click', function(){
        if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 178
        echo $this->env->getExtension('routing')->getPath("service_remove");
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
        
        $__internal_e4f6ce204d559e412545044bcc79b5d429866f5c97483460818a15de64314c5c->leave($__internal_e4f6ce204d559e412545044bcc79b5d429866f5c97483460818a15de64314c5c_prof);

    }

    public function getTemplateName()
    {
        return "gestionStock/Service/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 178,  223 => 119,  198 => 97,  192 => 96,  168 => 81,  162 => 80,  156 => 79,  150 => 78,  141 => 71,  130 => 69,  126 => 68,  101 => 46,  81 => 29,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block title %}*/
/* Liste des Services*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h3><span class="glyphicon glyphicon-list-alt"></span> Liste des Services</h3>*/
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
/*                <li><a href="{{ path('service_new') }}"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></li>*/
/*                 <li><a href="#" id="js-delete"><span class="glyphicon glyphicon-trash"></span> Supprimer</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </div><!-- /.row --> */
/*         <table class="table table-striped table-hover table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th class="hidden-print"><input id="checkall" type="checkbox" value=""></th>*/
/*                 <th class="sortable"><a href="#" class="js-sort" data-order="libele">Service <span class="glyphicon glyphicon-sort pull-right"></span></a></th>*/
/*                 <th>Département</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="dataContainer"></tbody>*/
/*         </table>*/
/*         <div class="caption">*/
/*           <strong>Total:</strong> <em>{{ entitiesLength }} Service</em>*/
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
/*             <label for="" class="col-sm-5 control-label">Nom Service</label>*/
/*             <div class="col-sm-6">*/
/*               <input type="text" name="searchParam[libele]" class="form-control">*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="" class="col-sm-5 control-label">Département</label>*/
/*             <div class="col-sm-6">*/
/*               <select id="cityselect" name="searchParam[departement]" class="select2 search">*/
/*                 <option value="">Tous</option>*/
/*                 {% for item in departements %}*/
/*                   <option value="{{ item.label }}">{{ item.label }}</option>*/
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
/*         var services = [];*/
/*         dataContainer.find('input:checkbox:checked').each(function() {*/
/*           services.push($(this).val());*/
/*         });*/
/*         return services.join(',');*/
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
/*         jsFormUrl = '{{ path('service_ajax') }}';*/
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
/*       /* delete a service *//* */
/*       deleteBtn.on('click', function(){*/
/*         if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;*/
/*         jsFormUrl='{{ path('service_remove') }}';*/
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
