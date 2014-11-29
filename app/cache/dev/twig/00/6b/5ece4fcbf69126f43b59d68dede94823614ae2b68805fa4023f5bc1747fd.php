<?php

/* maketareaBundle:App:make-calendar.html.twig */
class __TwigTemplate_006b5ece4fcbf69126f43b59d68dede94823614ae2b68805fa4023f5bc1747fd extends Twig_Template
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
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("make-calendar-day", array("day" => (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "month" => (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "year" => (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")))), "html", null, true);
        echo "\">Dia</a>
            <button>Mes</button>
            <button>Semana</button>
        </div>
        <div class=\"week columnas\">
            <div class=\"day\">
                <div class=\"dayinfo columnas\">
                    <div class=\"dayname col-left70\">
                        Lunes
                    </div>
                    <div class=\"daydate col-right30\">
                        28
                    </div>
                </div>
                <div class=\"list\">
                    <div class=\"entry urgent\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry urgent\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry completed\">
                        <br><br><br><br>
                    </div>
                </div>
            </div>
            <div class=\"day\">
                <div class=\"dayinfo columnas\">
                    <div class=\"dayname col-left70\">
                        Martes
                    </div>
                    <div class=\"daydate col-right30\">
                        29
                    </div>
                </div>
                <div class=\"list\">
                    <div class=\"entry urgent\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry canceled\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry completed\">
                        <br><br><br><br>
                    </div>
                </div>
            </div>
            <div class=\"day\">
                <div class=\"dayinfo columnas\">
                    <div class=\"dayname col-left70\">
                        Miercoles
                    </div>
                    <div class=\"daydate col-right30\">
                        30
                    </div>
                </div>
                <div class=\"list\">
                    <div class=\"entry urgent\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry urgent\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry urgent\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                </div>
            </div>
            <div class=\"day\">
                <div class=\"dayinfo columnas\">
                    <div class=\"dayname col-left70\">
                        Jueves
                    </div>
                    <div class=\"daydate col-right30\">
                        01
                    </div>
                </div>
                <div class=\"list\">
                    <div class=\"entry urgent\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry canceled\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry completed\">
                        <br><br><br><br>
                    </div>
                    
                </div>
            </div>
            <div class=\"day\">
                <div class=\"dayinfo columnas\">
                    <div class=\"dayname col-left70\">
                        Viernes
                    </div>
                    <div class=\"daydate col-right30\">
                        02
                    </div>
                </div>
                <div class=\"list\">
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry normal\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry canceled\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry canceled\">
                        <br><br><br><br>
                    </div>
                </div>
            </div>
            <div class=\"day\">
                <div class=\"dayinfo columnas\">
                    <div class=\"dayname col-left70\">
                        Sabado
                    </div>
                    <div class=\"daydate col-right30\">
                        03
                    </div>
                </div>
                <div class=\"list\">
                    <div class=\"entry\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry\">
                        <br><br><br><br>
                    </div>
                    <br><br><br><br><br><br>
                </div>
            </div>
            <div class=\"day\">
                <div class=\"dayinfo columnas\">
                    <div class=\"dayname col-left70\">
                        Domingo
                    </div>
                    <div class=\"daydate col-right30\">
                        04
                    </div>
                </div>
                <div class=\"list\">
                    <div class=\"entry\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry\">
                        <br><br><br><br>
                    </div>
                    <div class=\"entry\">
                        <br><br><br><br>
                    </div>
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>        
    </article>
    
";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:App:make-calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
