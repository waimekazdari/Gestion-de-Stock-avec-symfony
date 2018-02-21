<?php

/* default/menu.html.twig */
class __TwigTemplate_986352d45bfeee72ce628aa9bb34a3d9f248f4d26072eeb6a370bb12823d8c00 extends Twig_Template
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
        // line 1
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
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


<nav id=\"adminmenu\">
    <ul class=\"top-menu\">
        <li class=\"";
        // line 13
        if (!twig_in_filter((isset($context["route"]) ? $context["route"] : null), (isset($context["articleMenu"]) ? $context["articleMenu"] : null))) {
            echo "not-";
        }
        echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Articles</span></a></li>
        ";
        // line 14
        if (( !$this->env->getExtension('security')->isGranted("ROLE_MANAGER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : null), (isset($context["personneMenu"]) ? $context["personneMenu"] : null))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Catégories</span></a>
        </li>
        <li class=\"";
            // line 17
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : null), (isset($context["testMenu"]) ? $context["testMenu"] : null))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-file block\"></span> <span class=\"menu-title\">Fournisseurs</span></a></li>
        ";
        }
        // line 19
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
            echo " 
        <li class=\"";
            // line 20
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : null), (isset($context["medsMenu"]) ? $context["medsMenu"] : null))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-leaf block\"></span> <span class=\"menu-title\">Medicaments</span></a></li>
        ";
        }
        // line 22
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "        <li class=\"";
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : null), (isset($context["userMenu"]) ? $context["userMenu"] : null))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-user block\"></span> <span class=\"menu-title\">Employes</span></a></li>
        <li class=\"";
            // line 24
            if (!twig_in_filter((isset($context["route"]) ? $context["route"] : null), (isset($context["configMenu"]) ? $context["configMenu"] : null))) {
                echo "not-";
            }
            echo "current\"><a href=\"\"><span class=\"glyphicon glyphicon-wrench block\"></span> <span class=\"menu-title\">Préférences</span></a>
        </li>
        ";
        }
        // line 27
        echo "        <li class=\"not-current\"><a href=\"#\" id=\"trigger-shelf\"><span class=\"glyphicon glyphicon-chevron-left block\"></span>  <span class=\"menu-title\">Collapse menu</span></a></li>
    </ul>
</nav>
";
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
        return array (  105 => 27,  97 => 24,  90 => 23,  87 => 22,  80 => 20,  75 => 19,  68 => 17,  60 => 15,  58 => 14,  52 => 13,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
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
/*         <li class="{% if route not in configMenu %}not-{% endif %}current"><a href=""><span class="glyphicon glyphicon-wrench block"></span> <span class="menu-title">Préférences</span></a>*/
/*         </li>*/
/*         {% endif %}*/
/*         <li class="not-current"><a href="#" id="trigger-shelf"><span class="glyphicon glyphicon-chevron-left block"></span>  <span class="menu-title">Collapse menu</span></a></li>*/
/*     </ul>*/
/* </nav>*/
/* */
