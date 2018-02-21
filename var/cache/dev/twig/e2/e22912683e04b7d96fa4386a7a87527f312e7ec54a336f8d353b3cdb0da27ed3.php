<?php

/* default/pagination.html.twig */
class __TwigTemplate_2f23f36449d6500c7d77cf0fe3776be070178c64a8255f85d1267efe59f74476 extends Twig_Template
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
        $__internal_eab3936e8a339803019436aa27feb3d1ab951f270e52238dcecf22eed9d3aaa6 = $this->env->getExtension("native_profiler");
        $__internal_eab3936e8a339803019436aa27feb3d1ab951f270e52238dcecf22eed9d3aaa6->enter($__internal_eab3936e8a339803019436aa27feb3d1ab951f270e52238dcecf22eed9d3aaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/pagination.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) > 1)) {
            // line 2
            echo "<tr class=\"mypagination hide-print\">
    <td colspan=\"10\">
      <div class=\"text-center\">
          <ul class=\"pagination\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 7
                echo "            <li";
                if ($this->getAttribute($context["p"], "is_current", array())) {
                    echo " class=\"active\"";
                }
                echo ">
              <a href=\"#\" class=\"js-page\" data-page=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "page_number", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "label", array()), "html", null, true);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "          </ul>
      </div>
    </td>
</tr>
";
        }
        
        $__internal_eab3936e8a339803019436aa27feb3d1ab951f270e52238dcecf22eed9d3aaa6->leave($__internal_eab3936e8a339803019436aa27feb3d1ab951f270e52238dcecf22eed9d3aaa6_prof);

    }

    public function getTemplateName()
    {
        return "default/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  41 => 8,  34 => 7,  30 => 6,  24 => 2,  22 => 1,);
    }
}
/* {% if pagination|length > 1 %}*/
/* <tr class="mypagination hide-print">*/
/*     <td colspan="10">*/
/*       <div class="text-center">*/
/*           <ul class="pagination">*/
/*             {% for p in pagination %}*/
/*             <li{% if p.is_current %} class="active"{% endif %}>*/
/*               <a href="#" class="js-page" data-page="{{ p.page_number }}" >{{ p.label }}</a>*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*       </div>*/
/*     </td>*/
/* </tr>*/
/* {% endif %}*/
