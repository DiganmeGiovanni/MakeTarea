<?php

/* maketareaBundle:Documento:new.html.twig */
class __TwigTemplate_663a567f857c6cb63b8acd98dc1cbe69bca89af123415dbde285d36adba3424f extends Twig_Template
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
<!-- Formulario para nuevo documento, solo solicita el nombre del doc -->
<form method=\"POST\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("nvo_doc_ajax");
        echo "\" id=\"form-nvo-doc\" class=\"fdark\">
    <fieldset class=\"fdark-fset\">
        <input class=\"fdark-inpt\" name=\"titulo\" placeholder=\"Nuevo documento\" style=\"width: 70%\">
        <input name=\"idtarea\" type=\"hidden\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "id"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"fdark-btn\" >Agregar</button>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Documento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }
}
