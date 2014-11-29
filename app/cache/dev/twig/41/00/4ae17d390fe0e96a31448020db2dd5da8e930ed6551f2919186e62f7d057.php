<?php

/* maketareaBundle:App:menuapp.html.twig */
class __TwigTemplate_41004ae17d390fe0e96a31448020db2dd5da8e930ed6551f2919186e62f7d057 extends Twig_Template
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
        echo "<header>
    <nav class=\"columnas\">
        <div class=\"col-left50\">
            <a class=\"nav-btn\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\">makeTarea</a>
            <a class=\"nav-btn\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("make-calendar");
        echo "\">makeCalendar</a>
            <a class=\"nav-btn\" href=\"javascript: void(0)\" onclick=\"newTask()\">Nueva Tarea</a>
        </div>
        <div class=\"col-right50 content-right\">
            <a class=\"nav-btn menu-right\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellidop"), "html", null, true);
        echo "</a>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:App:menuapp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
