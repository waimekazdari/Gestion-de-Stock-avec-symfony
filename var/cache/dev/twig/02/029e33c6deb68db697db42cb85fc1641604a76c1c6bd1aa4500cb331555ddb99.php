<?php

/* default/pagination.html.twig */
class __TwigTemplate_eb3a3f82b08b6b375af483eddad6ecced98885257e09f5f9fefc52d24ee54bf1 extends Twig_Template
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
        $__internal_ff2d078e139b6ecdc997d221d58c00bd39629026c529eb02a94f609e81900a60 = $this->env->getExtension("native_profiler");
        $__internal_ff2d078e139b6ecdc997d221d58c00bd39629026c529eb02a94f609e81900a60->enter($__internal_ff2d078e139b6ecdc997d221d58c00bd39629026c529eb02a94f609e81900a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/pagination.html.twig"));

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
        
        $__internal_ff2d078e139b6ecdc997d221d58c00bd39629026c529eb02a94f609e81900a60->leave($__internal_ff2d078e139b6ecdc997d221d58c00bd39629026c529eb02a94f609e81900a60_prof);

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
