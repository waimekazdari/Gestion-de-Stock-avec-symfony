<?php

/* default/marcos.html */
class __TwigTemplate_99b197a7469e804bd713414d8bd0a3af3e0ca3b3abe7871a5b6ce63dca000ac5 extends Twig_Template
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
        $__internal_3ef2e2372c585ff957a372079a3119da42cad4ba41efe782ae82fd388b167548 = $this->env->getExtension("native_profiler");
        $__internal_3ef2e2372c585ff957a372079a3119da42cad4ba41efe782ae82fd388b167548->enter($__internal_3ef2e2372c585ff957a372079a3119da42cad4ba41efe782ae82fd388b167548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/marcos.html"));

        // line 4
        echo "
";
        
        $__internal_3ef2e2372c585ff957a372079a3119da42cad4ba41efe782ae82fd388b167548->leave($__internal_3ef2e2372c585ff957a372079a3119da42cad4ba41efe782ae82fd388b167548_prof);

    }

    // line 1
    public function getinput($__name__ = null, $__value__ = null, $__type__ = null, $__size__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c3bd2ea2858e9ba8b9146e5af3d7a601cda5c7a602913af0239b201c3e23a317 = $this->env->getExtension("native_profiler");
            $__internal_c3bd2ea2858e9ba8b9146e5af3d7a601cda5c7a602913af0239b201c3e23a317->enter($__internal_c3bd2ea2858e9ba8b9146e5af3d7a601cda5c7a602913af0239b201c3e23a317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input"));

            // line 2
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            echo "\" size=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), 20)) : (20)), "html", null, true);
            echo "\" />
";
            
            $__internal_c3bd2ea2858e9ba8b9146e5af3d7a601cda5c7a602913af0239b201c3e23a317->leave($__internal_c3bd2ea2858e9ba8b9146e5af3d7a601cda5c7a602913af0239b201c3e23a317_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function gettextarea($__name__ = null, $__value__ = null, $__rows__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "rows" => $__rows__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0cd82f0097f2459d68cc0c417d37298b4f917f4b5ef72fda60581deae6d2424a = $this->env->getExtension("native_profiler");
            $__internal_0cd82f0097f2459d68cc0c417d37298b4f917f4b5ef72fda60581deae6d2424a->enter($__internal_0cd82f0097f2459d68cc0c417d37298b4f917f4b5ef72fda60581deae6d2424a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textarea"));

            // line 6
            echo "    <textarea name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("rows", $context)) ? (_twig_default_filter((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows")), 10)) : (10)), "html", null, true);
            echo "\" cols=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("cols", $context)) ? (_twig_default_filter((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")), 40)) : (40)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            echo "</textarea>
";
            
            $__internal_0cd82f0097f2459d68cc0c417d37298b4f917f4b5ef72fda60581deae6d2424a->leave($__internal_0cd82f0097f2459d68cc0c417d37298b4f917f4b5ef72fda60581deae6d2424a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "default/marcos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  71 => 5,  48 => 2,  30 => 1,  22 => 4,);
    }
}
/* {% macro input(name, value, type, size) %}*/
/*     <input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />*/
/* {% endmacro %}*/
/* */
/* {% macro textarea(name, value, rows) %}*/
/*     <textarea name="{{ name }}" rows="{{ rows|default(10) }}" cols="{{ cols|default(40) }}">{{ value|e }}</textarea>*/
/* {% endmacro %}*/
