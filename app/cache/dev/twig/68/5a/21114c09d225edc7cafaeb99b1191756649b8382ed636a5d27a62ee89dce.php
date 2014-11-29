<?php

/* maketareaBundle:Curso:nuevo.html.twig */
class __TwigTemplate_685a21114c09d225edc7cafaeb99b1191756649b8382ed636a5d27a62ee89dce extends Twig_Template
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
        echo "
<!-- formulario para nueva materia -->
<form method='POST' action=";
        // line 3
        echo $this->env->getExtension('routing')->getPath("nvo_curso_ajax");
        echo " id=\"form-nvo-curso\" class=\"fdark\" >
    <legend>Nuevo Curso</legend>
    <div class=\"fdark-errs\">
    
    </div>
    <fieldset class=\"fdark-fset\">
        <input name=\"materia\" class=\"fdark-inpt fdark-inpt-big\" placeholder=\"Nombre del curso\"><br><br>
        <input name=\"nomprofesor\" class=\"fdark-inpt fdark-inpt-big\" placeholder=\"Nombre del profesor\" ><br><br>
        <input name=\"apeprofesor\" class=\"fdark-inpt fdark-inpt-big\" placeholder=\"Apellido del profesor\" ><br><br>
        <input name=\"email\" class=\"fdark-inpt fdark-inpt-big\" type=\"email\" placeholder=\"email@example.com\" ><br><br>
    </fieldset>
    <fieldset class=\"fdark-submit-area\">
        <br>
        <button type=\"button\" class=\"fdark-btn\" onclick=\"showNvoCursoForm()\">Cancelar</button>
        <button type=\"submit\" class=\"fdark-btn\">Guardar</button>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Curso:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
