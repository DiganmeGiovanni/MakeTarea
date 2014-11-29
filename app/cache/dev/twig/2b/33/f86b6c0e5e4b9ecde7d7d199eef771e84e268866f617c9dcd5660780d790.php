<?php

/* maketareaBundle:App:app.html.twig */
class __TwigTemplate_2b33f86b6c0e5e4b9ecde7d7d199eef771e84e268866f617c9dcd5660780d790 extends Twig_Template
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
    <article class=\"columnas no-lateral-pads\">
        
        <div class=\"card-cont app-container\">
            <div class=\"card-cont-title columnas\">
                <div class=\"col-left70 content-left\">
                    <span>Tareas pendientes</span>
                </div>
                <div class=\"col-right30 content-right\">
                    <a href=\"#\" onclick=\"newTask()\"><span class=\"card-title-icon fa fa-file-text-o\"></span></a>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("make-calendar");
        echo "\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                </div>
            </div>
            <div class=\"card-cont-cards\">
                
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tareas"));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 23
            echo "            ";
            if ((((twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d")) && ($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "estado") != "Terminada")) && ($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "estado") != "Cancelada"))) {
                // line 25
                echo "                ";
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d"))) {
                    // line 26
                    echo "                    <div class=\"info-card st-urgent\">
                        <div class=\"columnas\">
                            <div class=\"col-left70\">
                                <span class=\"info-card-title\">";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "titulo"), "html", null, true);
                    echo " PRI</span>
                            </div>
                            <div class=\"col-right30 content-right\">
                                <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app-tarea", array("idtarea" => $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "id"), "iddoc" => 1)), "html", null, true);
                    echo "\"><span class=\"info-card-icon fa fa-edit\"></span></a>
                                <a href=\"#\"><span class=\"info-card-icon fa fa-check-square-o\"></span></a>
                            </div>
                        </div>
                        <span class=\"info-card-subtitle\">";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d"), "html", null, true);
                    echo "</span>
                        <p class=\"info-card-content\">
                            ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "descripcion"), "html", null, true);
                    echo "
                        </p>
                    </div>
                ";
                } elseif (((twig_date_format_filter($this->env, "now", "Y-m") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m")) && ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "d") - twig_date_format_filter($this->env, "now", "d")) <= 1))) {
                    // line 43
                    echo "                    <div class=\"info-card st-urgent\">
                        <div class=\"columnas\">
                            <div class=\"col-left70\">
                                <span class=\"info-card-title\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "titulo"), "html", null, true);
                    echo " SEG</span>
                            </div>
                            <div class=\"col-right30 content-right\">
                                <a href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app-tarea", array("idtarea" => $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "id"), "iddoc" => 1)), "html", null, true);
                    echo "\"><span class=\"info-card-icon fa fa-edit\"></span></a>
                                <a href=\"#\"><span class=\"info-card-icon fa fa-check-square-o\"></span></a>
                            </div>
                        </div>
                        <span class=\"info-card-subtitle\">";
                    // line 53
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d"), "html", null, true);
                    echo "</span>
                        <p class=\"info-card-content\">
                            ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "descripcion"), "html", null, true);
                    echo "
                        </p>
                    </div>
                ";
                }
                // line 59
                echo "            ";
            }
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "            
            
            ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tareas"));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 63
            echo "                ";
            if ((($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "estado") != "Terminada") && ($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "estado") != "Cancelada"))) {
                // line 64
                echo "                    ";
                if ((((twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d")) && (twig_date_format_filter($this->env, "now", "Y-m") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m"))) && ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "d") - twig_date_format_filter($this->env, "now", "d")) > 1))) {
                    // line 67
                    echo "                    <div class=\"info-card st-normal\">
                        <div class=\"columnas\">
                            <div class=\"col-left70\">
                                <span class=\"info-card-title\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "titulo"), "html", null, true);
                    echo "</span>
                            </div>
                            <div class=\"col-right30 content-right\">
                                <a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app-tarea", array("idtarea" => $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "id"), "iddoc" => 1)), "html", null, true);
                    echo "\"><span class=\"info-card-icon fa fa-edit\"></span></a>
                                <a href=\"#\"><span class=\"info-card-icon fa fa-check-square-o\"></span></a>
                            </div>
                        </div>
                        <span class=\"info-card-subtitle\">";
                    // line 77
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d"), "html", null, true);
                    echo "</span>
                        <p class=\"info-card-content\">
                            ";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "descripcion"), "html", null, true);
                    echo "
                        </p>
                    </div>
                    ";
                }
                // line 83
                echo "                ";
            }
            // line 84
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            
            ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tareas"));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 87
            echo "                ";
            if (((twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d")) && ($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "estado") == "Cancelada"))) {
                // line 89
                echo "                <div class=\"info-card st-canceled\">
                    <div class=\"columnas\">
                        <div class=\"col-left70\">
                            <span class=\"info-card-title\">";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "titulo"), "html", null, true);
                echo "</span>
                        </div>
                        <div class=\"col-right30 content-right\">
                            <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app-tarea", array("idtarea" => $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "id"), "iddoc" => 1)), "html", null, true);
                echo "\"><span class=\"info-card-icon fa fa-edit\"></span></a>
                            <a href=\"#\"><span class=\"info-card-icon fa fa-check-square-o\"></span></a>
                        </div>
                    </div>
                    <span class=\"info-card-subtitle\">";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d"), "html", null, true);
                echo "</span>
                    <p class=\"info-card-content\">
                        ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "descripcion"), "html", null, true);
                echo "
                    </p>
                </div>
                ";
            }
            // line 105
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                
            ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tareas"));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 108
            echo "                ";
            if (((twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d")) && ($this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "estado") == "Terminada"))) {
                // line 110
                echo "                <div class=\"info-card st-completed\">
                <div class=\"columnas\">
                        <div class=\"col-left70\">
                            <span class=\"info-card-title\">";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "titulo"), "html", null, true);
                echo "</span>
                        </div>
                        <div class=\"col-right30 content-right\">
                            <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app-tarea", array("idtarea" => $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "id"), "iddoc" => 1)), "html", null, true);
                echo "\"><span class=\"info-card-icon fa fa-edit\"></span></a>
                            <a href=\"#\"><span class=\"info-card-icon fa fa-check-square-o\"></span></a>
                        </div>
                    </div>
                    <span class=\"info-card-subtitle\">";
                // line 120
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "fechaEntrega"), "Y-m-d"), "html", null, true);
                echo "</span>
                    <p class=\"info-card-content\">
                        ";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarea"]) ? $context["tarea"] : $this->getContext($context, "tarea")), "descripcion"), "html", null, true);
                echo "
                    </p>
                </div>
                ";
            }
            // line 126
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "            </div>
        </div>
        
        <div class=\"card-cont app-container\">
            <div class=\"card-cont-title columnas\">
                <div class=\"col-left70 content-left\">
                    <span>Clases de manana</span>
                </div>
                <div class=\"col-right30 content-right\">
                    <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("horarios");
        echo "\"><span class=\"card-title-icon fa fa-calendar\"></span></a>
                </div>
            </div>
            <div class=\"card-cont-cards\">
                ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proxClases"]) ? $context["proxClases"] : $this->getContext($context, "proxClases")));
        foreach ($context['_seq'] as $context["_key"] => $context["clase"]) {
            // line 141
            echo "                    <div class=\"info-card st-normal\">
                        <div>
                            <span class=\"info-card-title\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clase"]) ? $context["clase"] : $this->getContext($context, "clase")), "materia"), "html", null, true);
            echo "</span>
                        </div>
                        <span class=\"info-card-subtitle\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clase"]) ? $context["clase"] : $this->getContext($context, "clase")), "hora"), "html", null, true);
            echo "</span>
                        <p class=\"info-card-content\">
                            <span>PROFESOR: </span><b>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clase"]) ? $context["clase"] : $this->getContext($context, "clase")), "profesor"), "html", null, true);
            echo "</b><br>
                            <span>TAREAS PENDIENTES: </span>  <b>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clase"]) ? $context["clase"] : $this->getContext($context, "clase")), "tarcount"), "html", null, true);
            echo "</b>
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                
            </div>
        </div>
        
        <div class=\"card-cont app-container\">
            <div class=\"card-cont-title\">
                <span>Ultimas alertas</span>
            </div>
            <div class=\"card-cont-cards\">
                ";
        // line 161
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 162
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
            echo "</span><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "            </div>
        </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:App:app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 164,  347 => 162,  343 => 161,  332 => 152,  322 => 148,  318 => 147,  313 => 145,  308 => 143,  304 => 141,  300 => 140,  293 => 136,  282 => 127,  276 => 126,  269 => 122,  264 => 120,  257 => 116,  251 => 113,  246 => 110,  243 => 108,  239 => 107,  236 => 106,  230 => 105,  223 => 101,  218 => 99,  211 => 95,  205 => 92,  200 => 89,  197 => 87,  193 => 86,  190 => 85,  184 => 84,  181 => 83,  174 => 79,  169 => 77,  162 => 73,  156 => 70,  151 => 67,  148 => 64,  145 => 63,  141 => 62,  132 => 60,  129 => 59,  122 => 55,  117 => 53,  110 => 49,  104 => 46,  99 => 43,  92 => 38,  87 => 36,  80 => 32,  74 => 29,  69 => 26,  66 => 25,  63 => 23,  59 => 22,  51 => 17,  38 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
