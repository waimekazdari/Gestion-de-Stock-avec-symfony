<?php

/* default/pagination.html.twig */
class __TwigTemplate_45e4f2b2cdede76cd630a3e399eb2644d771369b7f35bc81dfb6e377d21eb71a extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            echo "<tr class=\"mypagination hide-print\">
    <td colspan=\"10\">
      <div class=\"text-center\">
          <ul class=\"pagination\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
        return array (  49 => 11,  38 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
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
