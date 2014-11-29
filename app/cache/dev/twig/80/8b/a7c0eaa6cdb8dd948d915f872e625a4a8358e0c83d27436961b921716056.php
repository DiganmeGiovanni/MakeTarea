<?php

/* maketareaBundle:Default:menuIndex.html.twig */
class __TwigTemplate_808ba7c0eaa6cdb8dd948d915f872e625a4a8358e0c83d27436961b921716056 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("maketarea_homepage");
        echo "\">make Tarea</a>
            <a class=\"nav-btn\" href=\"#\">Caracteristicas</a>
            <a class=\"nav-btn\" href=\"#\">Acerca de</a>
        </div>
        <div class=\"col-right50 content-right\">
            <a class=\"nav-btn\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\">Iniciar sesión</a>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Default:menuIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  24 => 4,  19 => 1,);
    }
}
