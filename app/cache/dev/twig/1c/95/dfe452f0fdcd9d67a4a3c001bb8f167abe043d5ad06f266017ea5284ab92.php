<?php

/* maketareaBundle:Horarios:horarios.html.twig */
class __TwigTemplate_1c95dfe452f0fdcd9d67a4a3c001bb8f167abe043d5ad06f266017ea5284ab92 extends Twig_Template
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
        
        ";
        // line 9
        echo twig_include($this->env, $context, "maketareaBundle:Curso:nuevo.html.twig");
        echo "
        ";
        // line 10
        echo twig_include($this->env, $context, "maketareaBundle:HorasClase:new.html.twig");
        echo "
        <div class=\"col-left30 materias card-cont app-container\">
            <div class=\"card-cont-title columnas\">
                <div class=\"col-left70 content-left\">
                    <span>Materias</span>
                </div>
                <div class=\"col-right30 content-right\">
                    <a href=\"javascript: void(0)\" onclick=\"showNvoCursoForm()\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                </div>
            </div>
            
            <div class=\"card-cont-cards\">
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 23
            echo "                    <div class=\"info-card st-normal\">
                        <div>
                            <span class=\"info-card-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
            echo "</span>
                        </div>
                        <span class=\"info-card-subtitle\">Profesor(a): ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nomProfesor"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "apeProfesor"), "html", null, true);
            echo "</span>
                        <p class=\"info-card-content\">
                            <span><b>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "emailProfesor"), "html", null, true);
            echo "</span></b><br>
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
        </div>
        
        <div class=\"col-right70 horarios card-cont\">
            <div class=\"titlebar\">
                <div class=\"card-cont-title columnas\">
                    <div class=\"col-left70 content-left\">
                        <span>HORARIOS</span>
                    </div>
                    <div class=\"col-right30 content-right\">
                        <a href=\"javascript: void(0)\" onclick=\"showAddHoraclase()\" ><span class=\"card-title-icon fa fa-calendar\"></span></a>
                    </div>
                </div>
            </div>
            <div class=\"weekhorario columnas\">
                <div class=\"weekday\">
                    <div class=\"card-cont-title columnas\">
                        <div class=\"col-left70 content-left\">
                            <span>Lunes</span>
                        </div>
                        <div class=\"col-right30 content-right\">
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("horarios");
        echo "\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                        </div>
                    </div>
                    <div class=\"dayhorarios\">
                    ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 59
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "horasClase"));
            foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                // line 60
                echo "                            ";
                if (($this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "dia") == "Lunes")) {
                    // line 61
                    echo "                                <div class=\"info-card st-normal\">
                                    <div>
                                        <span class=\"info-card-title\">";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
                    echo "</span>
                                    </div>
                                    <span class=\"info-card-subtitle\">A las: ";
                    // line 65
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "horaInicio"), "H:i"), "html", null, true);
                    echo "</span>
                                    <p class=\"info-card-content\">
                                        <span>Profesor(a): <b>";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nomProfesor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "apeProfesor"), "html", null, true);
                    echo "</b></span><br>
                                    </p>
                                </div>
                            ";
                }
                // line 71
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </div>
                </div>
                
                <div class=\"weekday\">
                    <div class=\"card-cont-title columnas\">
                        <div class=\"col-left70 content-left\">
                            <span>Martes</span>
                        </div>
                        <div class=\"col-right30 content-right\">
                            <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("horarios");
        echo "\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                        </div>
                    </div>
                    <div class=\"dayhorarios\">
                    ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 87
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "horasClase"));
            foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                // line 88
                echo "                            ";
                if (($this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "dia") == "Martes")) {
                    // line 89
                    echo "                                <div class=\"info-card st-normal\">
                                    <div>
                                        <span class=\"info-card-title\">";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
                    echo "</span>
                                    </div>
                                    <span class=\"info-card-subtitle\">A las: ";
                    // line 93
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "horaInicio"), "H:i"), "html", null, true);
                    echo "</span>
                                    <p class=\"info-card-content\">
                                        <span>Profesor(a): <b>";
                    // line 95
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nomProfesor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "apeProfesor"), "html", null, true);
                    echo "</b></span><br>
                                    </p>
                                </div>
                            ";
                }
                // line 99
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                    </div>
                </div>
                
                <div class=\"weekday\">
                    <div class=\"card-cont-title columnas\">
                        <div class=\"col-left70 content-left\">
                            <span>Miercoles</span>
                        </div>
                        <div class=\"col-right30 content-right\">
                            <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("horarios");
        echo "\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                        </div>
                    </div>
                    <div class=\"dayhorarios\">
                    ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 115
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "horasClase"));
            foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                // line 116
                echo "                            ";
                if (($this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "dia") == "Miercoles")) {
                    // line 117
                    echo "                                <div class=\"info-card st-normal\">
                                    <div>
                                        <span class=\"info-card-title\">";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
                    echo "</span>
                                    </div>
                                    <span class=\"info-card-subtitle\">A las: ";
                    // line 121
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "horaInicio"), "H:i"), "html", null, true);
                    echo "</span>
                                    <p class=\"info-card-content\">
                                        <span>Profesor(a): <b>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nomProfesor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "apeProfesor"), "html", null, true);
                    echo "</b></span><br>
                                    </p>
                                </div>
                            ";
                }
                // line 127
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    </div>
                </div>
                
                <div class=\"weekday\">
                    <div class=\"card-cont-title columnas\">
                        <div class=\"col-left70 content-left\">
                            <span>Jueves</span>
                        </div>
                        <div class=\"col-right30 content-right\">
                            <a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("horarios");
        echo "\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                        </div>
                    </div>
                    <div class=\"dayhorarios\">
                    ";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 143
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "horasClase"));
            foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                // line 144
                echo "                            ";
                if (($this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "dia") == "Jueves")) {
                    // line 145
                    echo "                                <div class=\"info-card st-normal\">
                                    <div>
                                        <span class=\"info-card-title\">";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
                    echo "</span>
                                    </div>
                                    <span class=\"info-card-subtitle\">A las: ";
                    // line 149
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "horaInicio"), "H:i"), "html", null, true);
                    echo "</span>
                                    <p class=\"info-card-content\">
                                        <span>Profesor(a): <b>";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nomProfesor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "apeProfesor"), "html", null, true);
                    echo "</b></span><br>
                                    </p>
                                </div>
                            ";
                }
                // line 155
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                    </div>
                </div>
                
                <div class=\"weekday\">
                    <div class=\"card-cont-title columnas\">
                        <div class=\"col-left70 content-left\">
                            <span>Viernes</span>
                        </div>
                        <div class=\"col-right30 content-right\">
                            <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("horarios");
        echo "\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                        </div>
                    </div>
                    <div class=\"dayhorarios\">
                    ";
        // line 170
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 171
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "horasClase"));
            foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                // line 172
                echo "                            ";
                if (($this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "dia") == "Viernes")) {
                    // line 173
                    echo "                                <div class=\"info-card st-normal\">
                                    <div>
                                        <span class=\"info-card-title\">";
                    // line 175
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
                    echo "</span>
                                    </div>
                                    <span class=\"info-card-subtitle\">A las: ";
                    // line 177
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "horaInicio"), "H:i"), "html", null, true);
                    echo "</span>
                                    <p class=\"info-card-content\">
                                        <span>Profesor(a): <b>";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nomProfesor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "apeProfesor"), "html", null, true);
                    echo "</b></span><br>
                                    </p>
                                </div>
                            ";
                }
                // line 183
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                    </div>
                </div>
                
            </div>
        </div>
    </article>
    
";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Horarios:horarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 185,  424 => 184,  418 => 183,  409 => 179,  404 => 177,  399 => 175,  395 => 173,  392 => 172,  387 => 171,  383 => 170,  376 => 166,  365 => 157,  359 => 156,  353 => 155,  344 => 151,  339 => 149,  334 => 147,  330 => 145,  327 => 144,  322 => 143,  318 => 142,  311 => 138,  300 => 129,  294 => 128,  288 => 127,  279 => 123,  274 => 121,  269 => 119,  265 => 117,  262 => 116,  257 => 115,  253 => 114,  246 => 110,  235 => 101,  229 => 100,  223 => 99,  214 => 95,  209 => 93,  204 => 91,  200 => 89,  197 => 88,  192 => 87,  188 => 86,  181 => 82,  170 => 73,  164 => 72,  158 => 71,  149 => 67,  144 => 65,  139 => 63,  135 => 61,  132 => 60,  127 => 59,  123 => 58,  116 => 54,  93 => 33,  83 => 29,  76 => 27,  71 => 25,  67 => 23,  63 => 22,  48 => 10,  44 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
