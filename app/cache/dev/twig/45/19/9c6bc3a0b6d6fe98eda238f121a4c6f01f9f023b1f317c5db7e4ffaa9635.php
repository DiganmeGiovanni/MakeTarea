<?php

/* maketareaBundle:App:make-calendar-day.html.twig */
class __TwigTemplate_45199c6bc3a0b6d6fe98eda238f121a4c6f01f9f023b1f317c5db7e4ffaa9635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("maketareaBundle::principal.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "maketareaBundle::principal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "maketareaBundle:Tarea:new.html.twig");
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "maketareaBundle:App:menuapp.html.twig");
        echo "
    <article class=\"no-lateral-pads\">
        <div class=\"toolbar\" style=\"text-align: center\">
            <button>Dia</button>
            <button>Mes</button>
            <button>Semana</button>
            ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "
        </div>
    
        <div class=\"daytasks\">
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tareashoy"]) ? $context["tareashoy"] : $this->getContext($context, "tareashoy")));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 18
            echo "                <br><br>
                <div class=\"task columnas\">
                    <div class=\"day col-left10\">
                        <span class=\"day\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaentrega"), "d"), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"info col-right90\">
                        <span class=\"title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "titulo"), "html", null, true);
            echo "</span><br>
                        <p class=\"descripcion\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "descripcion"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "     
        </div>
         
    </article>
    
";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:App:make-calendar-day.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  77 => 25,  73 => 24,  67 => 21,  62 => 18,  58 => 17,  47 => 13,  38 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
