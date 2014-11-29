<?php

/* maketareaBundle:Default:index.html.twig */
class __TwigTemplate_8e3c4bcd512f13bcbaf87c566b18e970a9c47c0e7d55b145dc33d833d7c556c5 extends Twig_Template
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
        echo twig_include($this->env, $context, "maketareaBundle:Default:menuIndex.html.twig");
        echo "
    <article>
        <div class='columnas'>
            <div class='col-left70 content-centered'>
                <h1>make Tarea</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class='col-right30 content-centered'>
                <br><br><br>
                <a class='blue-button button-big' href=\"#') }}\">
                    Iniciar Sesion
                </a>
                <br><br><br>
                <a class='blue-button button-big' href=\"#') }}\">Crear cuenta</a>
            </div>
        </div>
        <h2>Funciones simples:</h2>
        <a href=\"#\">
            Ver una lista de todos los usuarios.
        </a><br>
        <a href=\"#\">
            Ver todas las tareas registradas
        </a>
        
    </article>
    
";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,);
    }
}
