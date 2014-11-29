<?php

/* maketareaBundle:Tarea:edit.html.twig */
class __TwigTemplate_9cc89d19e391a497a18015265842c8622bc90545d2dc448dc76bc037e7aa1c93 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "maketareaBundle:Tarea:new.html.twig");
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "maketareaBundle:App:menuapp.html.twig");
        echo "
    <article class=\"columnas no-lateral-pads\">
        <div class=\"col-left70 doc-editor\">
            <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documento"]) ? $context["documento"] : $this->getContext($context, "documento")), "titulo"), "html", null, true);
        echo "</h1>
            <span>editor</span>
        </div>
        <div class=\"col-right30 tools-editor\">
            <div class=\"title\">
                \" ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "titulo"), "html", null, true);
        echo " \"
            </div>
            <div class=\"subtools columnas\">
                <div class=\"subtool col-left33\">ENLACES</div>
                <div class=\"subtool col-center34\">DOCUMENTOS</div>
                <div class=\"subtool col-right33\">DETALLES</div>
            </div>
            ";
        // line 21
        echo twig_include($this->env, $context, "maketareaBundle:Documento:new.html.twig");
        echo "
            <br><br><br>
            <div class=\"docslist\">
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "documentos"));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 25
            echo "                    <div class=\"docitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app-tarea", array("idtarea" => $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "id"), "iddoc" => $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "titulo"), "html", null, true);
            echo "</a></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
        </div>
    </article>
    
";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Tarea:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  72 => 25,  68 => 24,  62 => 21,  52 => 14,  44 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
