<?php

/* default/menu.html.twig */
class __TwigTemplate_7152d8e80f2cbe6c2d3c2da87d0802ed1edc1ff5869aad4ccd8527f690bf8c47 extends Twig_Template
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
        $__internal_cadff347bd5c9099a1c7c8874799ae05a927ccdd1e54ef4ce55807ceaa63d3be = $this->env->getExtension("native_profiler");
        $__internal_cadff347bd5c9099a1c7c8874799ae05a927ccdd1e54ef4ce55807ceaa63d3be->enter($__internal_cadff347bd5c9099a1c7c8874799ae05a927ccdd1e54ef4ce55807ceaa63d3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menu.html.twig"));

        // line 1
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        echo " 

";
        // line 3
        $context["articleMenu"] = array(0 => "article", 1 => "article_elegible", 2 => "article_show", 3 => "article_new", 4 => "article_edit");
        echo " 
";
        // line 4
        $context["personneMenu"] = array(0 => "meds", 1 => "meds_elegible", 2 => "meds_show", 3 => "meds_new", 4 => "meds_edit");
        echo " 
";
        // line 5
        $context["consultationMenu"] = array(0 => "consultation", 1 => "consultation_elegible", 2 => "consultation_show", 3 => "consultation_new", 4 => "consultation_edit");
        echo " 
";
        // line 6
        $context["testMenu"] = array(0 => "test", 1 => "test_elegible", 2 => "test_show", 3 => "test_new", 4 => "test_edit");
        echo " 
";
        // line 7
        $context["configMenu"] = array(0 => "config");
        echo " 
";
        // line 8
        $context["userMenu"] = array(0 => "ben_users", 1 => "ben_show_user", 2 => "ben_new_user", 3 => "ben_edit_user");
        echo " 
";
        // line 9
        $context["userExpBesoin"] = array(0 => "expression_besoin_new");
        echo " 
";
        // line 10
        $context["Besoin"] = array(0 => "expression_besoin_show", 1 => "expression_besoin");
        echo " 


<nav id=\"adminmenu\">
    <ul class=\"top-menu\">
        <li class=\"";
        // line 15
        if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["articleMenu"]) ? $context["articleMenu"] : $this->getContext($context, "articleMenu")))) {
            echo "not-";
        }
        echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Articles</span></a></li>
        ";
        // line 16
        if (( !$this->env->getExtension('security')->isGranted("ROLE_MANAGER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 17
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["personneMenu"]) ? $context["personneMenu"] : $this->getContext($context, "personneMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Catégories</span></a>
        </li>
        <li class=\"";
            // line 19
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["testMenu"]) ? $context["testMenu"] : $this->getContext($context, "testMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Fournisseurs</span></a></li>
        ";
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
            echo " 
        <li class=\"";
            // line 22
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["medsMenu"]) ? $context["medsMenu"] : $this->getContext($context, "medsMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-leaf block\"></span> <span class=\"menu-title\">Medicaments</span></a></li>
        ";
        }
        // line 24
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Employes</span></a></li>
        ";
            // line 26
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo " 
        <li class=\"";
                // line 27
                if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["Besoin"]) ? $context["Besoin"] : $this->getContext($context, "Besoin")))) {
                    echo "not-";
                }
                echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Besoins</span></a></li>
        ";
            }
            // line 29
            echo "        ";
            if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MANAGER")) || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
                echo " 
        <li class=\"";
                // line 30
                if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["userExpBesoin"]) ? $context["userExpBesoin"] : $this->getContext($context, "userExpBesoin")))) {
                    echo "not-";
                }
                echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-plus block\"></span> <span class=\"menu-title\">Exprimer Besoin</span></a></li>
        ";
            }
            // line 32
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["configMenu"]) ? $context["configMenu"] : $this->getContext($context, "configMenu")))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-wrench block\"></span> <span class=\"menu-title\">Préférences</span></a>
        </li>
        ";
        }
        // line 35
        echo "        <li class=\"not-current\"><a href=\"#\" id=\"trigger-shelf\"><span class=\"glyphicon glyphicon-chevron-left block\"></span>  <span class=\"menu-title\">Collapse menu</span></a></li>
    </ul>
</nav>
";
        
        $__internal_cadff347bd5c9099a1c7c8874799ae05a927ccdd1e54ef4ce55807ceaa63d3be->leave($__internal_cadff347bd5c9099a1c7c8874799ae05a927ccdd1e54ef4ce55807ceaa63d3be_prof);

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
        return array (  140 => 35,  131 => 32,  124 => 30,  119 => 29,  112 => 27,  108 => 26,  101 => 25,  98 => 24,  91 => 22,  86 => 21,  79 => 19,  71 => 17,  69 => 16,  63 => 15,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  22 => 1,);
    }
}
/* {% set route = app.request.attributes.get('_route') %} */
/* */
/* {% set articleMenu = ['article','article_elegible','article_show','article_new','article_edit'] %} */
/* {% set personneMenu = ['meds','meds_elegible','meds_show','meds_new','meds_edit'] %} */
/* {% set consultationMenu = ['consultation','consultation_elegible','consultation_show','consultation_new','consultation_edit'] %} */
/* {% set testMenu = ['test','test_elegible','test_show','test_new','test_edit'] %} */
/* {% set configMenu = ['config'] %} */
/* {% set userMenu = ['ben_users','ben_show_user','ben_new_user','ben_edit_user'] %} */
/* {% set userExpBesoin = ['expression_besoin_new'] %} */
/* {% set Besoin = ['expression_besoin_show','expression_besoin'] %} */
/* */
/* */
/* <nav id="adminmenu">*/
/*     <ul class="top-menu">*/
/*         <li class="{% if route not in articleMenu %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-file block"></span> <span class="menu-title">Articles</span></a></li>*/
/*         {% if not is_granted("ROLE_MANAGER") or is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in personneMenu %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-user block"></span> <span class="menu-title">Catégories</span></a>*/
/*         </li>*/
/*         <li class="{% if route not in testMenu %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-file block"></span> <span class="menu-title">Fournisseurs</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_MANAGER") %} */
/*         <li class="{% if route not in medsMenu %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-leaf block"></span> <span class="menu-title">Medicaments</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*         <li class="{% if route not in userMenu %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-user block"></span> <span class="menu-title">Employes</span></a></li>*/
/*         {% if is_granted("ROLE_ADMIN") %} */
/*         <li class="{% if route not in Besoin %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-file block"></span> <span class="menu-title">Besoins</span></a></li>*/
/*         {% endif %}*/
/*         {% if is_granted("ROLE_ADMIN") or is_granted("ROLE_MANAGER") or is_granted("ROLE_USER") %} */
/*         <li class="{% if route not in userExpBesoin %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-plus block"></span> <span class="menu-title">Exprimer Besoin</span></a></li>*/
/*         {% endif %}*/
/*         <li class="{% if route not in configMenu %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-wrench block"></span> <span class="menu-title">Préférences</span></a>*/
/*         </li>*/
/*         {% endif %}*/
/*         <li class="not-current"><a href="#" id="trigger-shelf"><span class="glyphicon glyphicon-chevron-left block"></span>  <span class="menu-title">Collapse menu</span></a></li>*/
/*     </ul>*/
/* </nav>*/
/* */
