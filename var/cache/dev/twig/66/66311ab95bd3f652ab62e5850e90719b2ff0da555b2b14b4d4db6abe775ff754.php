<?php

/* default/menu.html.twig */
class __TwigTemplate_4c2b5db016dd0c1784dc709b79bef196626abe8b724b74a2fec2a371f9b8970b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f6163d841e529da8040e468e607cc60aefab0af645fd8a4a28bfbd04fc9db42 = $this->env->getExtension("native_profiler");
        $__internal_6f6163d841e529da8040e468e607cc60aefab0af645fd8a4a28bfbd04fc9db42->enter($__internal_6f6163d841e529da8040e468e607cc60aefab0af645fd8a4a28bfbd04fc9db42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menu.html.twig"));

        // line 1
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        echo " 

";
        // line 3
        $context["articleMenu"] = array(0 => "article", 1 => "article_show", 2 => "article_new", 3 => "article_edit");
        echo " 
";
        // line 4
        $context["article_userMenu"] = array(0 => "article_user", 1 => "article_user_show");
        echo " 

";
        // line 6
        $context["fournisseurMenu"] = array(0 => "fournisseur", 1 => "fournisseur_show", 2 => "fournisseur_new", 3 => "fournisseur_edit");
        echo " 
";
        // line 7
        $context["categoryMenu"] = array(0 => "category", 1 => "category_show", 2 => "category_new", 3 => "category_edit");
        echo " 
";
        // line 8
        $context["serviceMenu"] = array(0 => "service", 1 => "service_show", 2 => "service_new", 3 => "service_edit");
        echo " 
";
        // line 9
        $context["configMenu"] = array(0 => "config");
        echo " 
";
        // line 10
        $context["userMenu"] = array(0 => "ben_users", 1 => "ben_show_user", 2 => "ben_new_user", 3 => "ben_edit_user");
        echo " 
";
        // line 11
        $context["departementMenu"] = array(0 => "departement", 1 => "departement_show", 2 => "departement_new", 3 => "departement_edit");
        echo " 
";
        // line 12
        $context["livraisonMenu"] = array(0 => "livraison", 1 => "livraison_show", 2 => "livraison_new", 3 => "livraison_edit");
        echo " 
";
        // line 13
        $context["ligneMenu"] = array(0 => "ligne", 1 => "ligne_show", 2 => "ligne_new", 3 => "ligne_edit");
        echo " 
";
        // line 14
        $context["entreeMenu"] = array(0 => "entree", 1 => "entree_show", 2 => "entree_new", 3 => "entree_edit");
        echo " 
";
        // line 15
        $context["ArticleEntreeMenu"] = array(0 => "ar_entree", 1 => "ar_entree_show", 2 => "ar_entree_new", 3 => "ar_entree_edit");
        echo " 
";
        // line 16
        $context["sortieMenu"] = array(0 => "sortie", 1 => "sortie_show", 2 => "sortie_new", 3 => "sortie_edit");
        echo " 
";
        // line 17
        $context["ArticleSortieMenu"] = array(0 => "ar_sortie", 1 => "ar_sortie_show", 2 => "ar_sortie_new", 3 => "ar_sortie_edit");
        echo " 
";
        // line 18
        $context["Besoin"] = array(0 => "expression_besoin_show", 1 => "expression_besoin", 2 => "expression_besoin_new");
        echo " 
";
        // line 19
        $context["MesExpBesoin"] = array(0 => "mesExpression_besoin", 1 => "mesExpression_besoin_show", 2 => "mesExpression_besoin_new");
        echo " 



<nav id=\"adminmenu\">
    <ul class=\"top-menu\">
        ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ben_users");
            echo "\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Employes</span></a></li>
        ";
        }
        // line 28
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["fournisseurMenu"]) ? $context["fournisseurMenu"] : $this->getContext($context, "fournisseurMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fournisseur");
            echo "\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Fournisseurs</span></a></li>
        ";
        }
        // line 31
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["articleMenu"]) ? $context["articleMenu"] : $this->getContext($context, "articleMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("article");
            echo "\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Articles</span></a></li>
        ";
        }
        // line 34
        echo "        ";
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER"))) {
            // line 35
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["article_userMenu"]) ? $context["article_userMenu"] : $this->getContext($context, "article_userMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("article_user");
            echo "\"><span class=\"glyphicon glyphicon-th-list block\"></span> <span class=\"menu-title\">Articles</span></a></li>
        ";
        }
        // line 37
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["categoryMenu"]) ? $context["categoryMenu"] : $this->getContext($context, "categoryMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("category");
            echo "\"><span class=\"glyphicon glyphicon-th block\"></span> <span class=\"menu-title\">Catégories</span></a></li>
        ";
        }
        // line 40
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["serviceMenu"]) ? $context["serviceMenu"] : $this->getContext($context, "serviceMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("service");
            echo "\"><span class=\"glyphicon glyphicon-th-large block\"></span> <span class=\"menu-title\">Services</span></a></li>
        ";
        }
        // line 43
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["departementMenu"]) ? $context["departementMenu"] : $this->getContext($context, "departementMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("departement");
            echo "\"><span class=\"glyphicon glyphicon-home block\"></span> <span class=\"menu-title\">Départemets</span></a></li>
        ";
        }
        // line 46
        echo "        ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER"))) {
            // line 47
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["livraisonMenu"]) ? $context["livraisonMenu"] : $this->getContext($context, "livraisonMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\"><span class=\"glyphicon glyphicon-shopping-cart block\"></span> <span class=\"menu-title\">Livraisons</span></a></li>
        ";
        }
        // line 49
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["ligneMenu"]) ? $context["ligneMenu"] : $this->getContext($context, "ligneMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ligne");
            echo "\"><span class=\" glyphicon glyphicon-list block\"></span> <span class=\"menu-title\">Lignes des Livraisons</span></a></li>
        ";
        }
        // line 52
        echo "        ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER"))) {
            // line 53
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["entreeMenu"]) ? $context["entreeMenu"] : $this->getContext($context, "entreeMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("entree");
            echo "\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Entrees</span></a></li>
        ";
        }
        // line 55
        echo "        ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER"))) {
            // line 56
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["ArticleEntreeMenu"]) ? $context["ArticleEntreeMenu"] : $this->getContext($context, "ArticleEntreeMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ar_entree");
            echo "\"><span class=\"glyphicon glyphicon-list block\"></span> <span class=\"menu-title\">Articles Entrees</span></a></li>
        ";
        }
        // line 58
        echo "        ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER"))) {
            // line 59
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["sortieMenu"]) ? $context["sortieMenu"] : $this->getContext($context, "sortieMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sortie");
            echo "\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Sorties</span></a></li>
        ";
        }
        // line 61
        echo "        ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER"))) {
            // line 62
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["ArticleSortieMenu"]) ? $context["ArticleSortieMenu"] : $this->getContext($context, "ArticleSortieMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ar_sortie");
            echo "\"><span class=\"glyphicon glyphicon-list block\"></span> <span class=\"menu-title\">Articles Sorties</span></a></li>
        ";
        }
        // line 64
        echo "
        ";
        // line 65
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER"))) {
            echo " 
        <li class=\"";
            // line 66
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["Besoin"]) ? $context["Besoin"] : $this->getContext($context, "Besoin")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("expression_besoin");
            echo "\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Besoins</span></a></li>
        ";
        }
        // line 68
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo " 
        <li class=\"";
            // line 69
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["MesExpBesoin"]) ? $context["MesExpBesoin"] : $this->getContext($context, "MesExpBesoin")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("mesExpression_besoin");
            echo "\"><span class=\"glyphicon glyphicon-pencil block\"></span> <span class=\"menu-title\">Exprimer Besoin</span></a></li>
        ";
        }
        // line 71
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
        <li class=\"";
            // line 72
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["configMenu"]) ? $context["configMenu"] : $this->getContext($context, "configMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("config");
            echo "\"><span class=\"glyphicon glyphicon-wrench block\"></span> <span class=\"menu-title\">Préférences</span></a>
        </li>
        ";
        }
        // line 75
        echo "        
        <li class=\"not-current\"><a href=\"#\" id=\"trigger-shelf\"><span class=\"glyphicon glyphicon-chevron-left block\"></span>  <span class=\"menu-title\">Collapse menu</span></a></li>
    </ul>
</nav>
";
        
        $__internal_6f6163d841e529da8040e468e607cc60aefab0af645fd8a4a28bfbd04fc9db42->leave($__internal_6f6163d841e529da8040e468e607cc60aefab0af645fd8a4a28bfbd04fc9db42_prof);

    }

    public function getTemplateName()
    {
        return "default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 75,  300 => 72,  295 => 71,  286 => 69,  281 => 68,  272 => 66,  268 => 65,  265 => 64,  255 => 62,  252 => 61,  242 => 59,  239 => 58,  229 => 56,  226 => 55,  216 => 53,  213 => 52,  203 => 50,  200 => 49,  190 => 47,  187 => 46,  177 => 44,  174 => 43,  164 => 41,  161 => 40,  151 => 38,  148 => 37,  138 => 35,  135 => 34,  125 => 32,  122 => 31,  112 => 29,  109 => 28,  99 => 26,  97 => 25,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 4,  27 => 3,  22 => 1,);
    }
}
/* {% set route = app.request.attributes.get('_route') %} */
/* */
/* {% set articleMenu = ['article','article_show','article_new','article_edit'] %} */
/* {% set article_userMenu = ['article_user','article_user_show'] %} */
/* */
/* {% set fournisseurMenu = ['fournisseur','fournisseur_show','fournisseur_new','fournisseur_edit'] %} */
/* {% set categoryMenu = ['category','category_show','category_new','category_edit'] %} */
/* {% set serviceMenu = ['service','service_show','service_new','service_edit'] %} */
/* {% set configMenu = ['config'] %} */
/* {% set userMenu = ['ben_users','ben_show_user','ben_new_user','ben_edit_user'] %} */
/* {% set departementMenu = ['departement','departement_show','departement_new','departement_edit'] %} */
/* {% set livraisonMenu = ['livraison','livraison_show','livraison_new','livraison_edit'] %} */
/* {% set ligneMenu = ['ligne','ligne_show','ligne_new','ligne_edit'] %} */
/* {% set entreeMenu = ['entree','entree_show','entree_new','entree_edit'] %} */
/* {% set ArticleEntreeMenu = ['ar_entree','ar_entree_show','ar_entree_new','ar_entree_edit'] %} */
/* {% set sortieMenu = ['sortie','sortie_show','sortie_new','sortie_edit'] %} */
/* {% set ArticleSortieMenu = ['ar_sortie','ar_sortie_show','ar_sortie_new','ar_sortie_edit'] %} */
/* {% set Besoin = ['expression_besoin_show','expression_besoin','expression_besoin_new'] %} */
/* {% set MesExpBesoin = ['mesExpression_besoin','mesExpression_besoin_show','mesExpression_besoin_new'] %} */
/* */
/* */
/* */
/* <nav id="adminmenu">*/
/*     <ul class="top-menu">*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in userMenu %}not-{% endif %}current"><a href="{{path('ben_users')}}"><span class="glyphicon glyphicon-user block"></span> <span class="menu-title">Employes</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in fournisseurMenu %}not-{% endif %}current"><a href="{{path('fournisseur')}}"><span class="glyphicon glyphicon-user block"></span> <span class="menu-title">Fournisseurs</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in articleMenu %}not-{% endif %}current"><a href="{{path('article')}}"><span class="glyphicon glyphicon-file block"></span> <span class="menu-title">Articles</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_USER") or is_granted("ROLE_MANAGER") %}*/
/*         <li class="{% if route not in article_userMenu %}not-{% endif %}current"><a href="{{path('article_user')}}"><span class="glyphicon glyphicon-th-list block"></span> <span class="menu-title">Articles</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in categoryMenu %}not-{% endif %}current"><a href="{{path('category')}}"><span class="glyphicon glyphicon-th block"></span> <span class="menu-title">Catégories</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in serviceMenu %}not-{% endif %}current"><a href="{{path('service')}}"><span class="glyphicon glyphicon-th-large block"></span> <span class="menu-title">Services</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in departementMenu %}not-{% endif %}current"><a href="{{path('departement')}}"><span class="glyphicon glyphicon-home block"></span> <span class="menu-title">Départemets</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") or is_granted("ROLE_MANAGER")  %}*/
/*         <li class="{% if route not in livraisonMenu %}not-{% endif %}current"><a href="{{path('livraison')}}"><span class="glyphicon glyphicon-shopping-cart block"></span> <span class="menu-title">Livraisons</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in ligneMenu %}not-{% endif %}current"><a href="{{path('ligne')}}"><span class=" glyphicon glyphicon-list block"></span> <span class="menu-title">Lignes des Livraisons</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") or is_granted("ROLE_MANAGER") %}*/
/*         <li class="{% if route not in entreeMenu %}not-{% endif %}current"><a href="{{path('entree')}}"><span class="glyphicon glyphicon-file block"></span> <span class="menu-title">Entrees</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") or is_granted("ROLE_MANAGER") %}*/
/*         <li class="{% if route not in ArticleEntreeMenu %}not-{% endif %}current"><a href="{{path('ar_entree')}}"><span class="glyphicon glyphicon-list block"></span> <span class="menu-title">Articles Entrees</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") or is_granted("ROLE_MANAGER") %}*/
/*         <li class="{% if route not in sortieMenu %}not-{% endif %}current"><a href="{{path('sortie')}}"><span class="glyphicon glyphicon-file block"></span> <span class="menu-title">Sorties</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") or is_granted("ROLE_MANAGER") %}*/
/*         <li class="{% if route not in ArticleSortieMenu %}not-{% endif %}current"><a href="{{path('ar_sortie')}}"><span class="glyphicon glyphicon-list block"></span> <span class="menu-title">Articles Sorties</span></a></li>*/
/*         {% endif %}*/
/* */
/*         {% if is_granted("ROLE_ADMIN") or is_granted("ROLE_MANAGER") %} */
/*         <li class="{% if route not in Besoin %}not-{% endif %}current"><a href="{{path('expression_besoin')}}"><span class="glyphicon glyphicon-file block"></span> <span class="menu-title">Besoins</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_USER") %} */
/*         <li class="{% if route not in MesExpBesoin %}not-{% endif %}current"><a href="{{path('mesExpression_besoin')}}"><span class="glyphicon glyphicon-pencil block"></span> <span class="menu-title">Exprimer Besoin</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %} */
/*         <li class="{% if route not in configMenu %}not-{% endif %}current"><a href="{{path('config')}}"><span class="glyphicon glyphicon-wrench block"></span> <span class="menu-title">Préférences</span></a>*/
/*         </li>*/
/*         {% endif %}*/
/*         */
/*         <li class="not-current"><a href="#" id="trigger-shelf"><span class="glyphicon glyphicon-chevron-left block"></span>  <span class="menu-title">Collapse menu</span></a></li>*/
/*     </ul>*/
/* </nav>*/
/* */
