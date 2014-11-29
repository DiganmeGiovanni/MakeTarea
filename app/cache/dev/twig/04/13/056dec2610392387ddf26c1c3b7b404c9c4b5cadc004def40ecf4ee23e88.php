<?php

/* maketareaBundle:Tarea:new.html.twig */
class __TwigTemplate_0413056dec2610392387ddf26c1c3b7b404c9c4b5cadc004def40ecf4ee23e88 extends Twig_Template
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
<!-- formulario para nueva tarea -->
<form method=\"POST\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("nva_tarea_ajax");
        echo "\" id=\"form-nva-tarea\" class=\"fdark\">
    <legend>Nueva Tarea</legend>
    <div class=\"fdark-errs\">
        
    </div>
    <fieldset class=\"fdark-fset\" style=\"position: relative\">
        <input id=\"task-title\" class=\"fdark-inpt fdark-inpt-big\" name=\"titulo\" placeholder=\"Titulo\">
        <br><br>
        <textarea id=\"task-desc\" class=\"fdark-txt fdark-inpt-big\" name=\"descripcion\" rows=\"7\" placeholder=\"Descripcion\"></textarea>
        <br><br>
        <div class=\"columnas\" style=\"text-align: left\">
            <div class=\"col-left50\" style=\"padding-left: 12px\">
                <label>Materia:</label><br>
                <select id=\"materia\" name=\"curso\" class=\"fdark-inpt fdark-inpt-big\">
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 18
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                </select>
            </div>
            <div class=\"col-right50\" style=\"padding-left: 20px\">
                <label>Estado de la tarea:</label><br>
                <select id=\"status\" name=\"status\" class=\"fdark-inpt fdark-inpt-big\">
                    <option>Pendiente</option>
                    <option>Iniciada</option>
                    <option>Terminada</option>
                </select>
            </div>
        </div>
        <div id=\"fecha-label\">-  Fecha de entrega  -</div>
        <div id=\"task-date\" class=\"columnas\">
            <input id=\"fecha\" name=\"fecha\" class=\"fdark-inpt fdark-inpt-big\" type=\"date\" placeholder=\"Fecha de entrega\" required>
            <select id=\"hora\" name=\"hora\" class=\"fdark-inpt fdark-inpt-big\">
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>00</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
            </select>
            <select id=\"min\" name=\"min\" class=\"fdark-inpt\">
                <option>00</option>
                <option>10</option>
                <option>20</option>
                <option>30</option>
                <option>40</option>
                <option>50</option>
            </select>
            <div id=\"time-box\"></div>
        </div>
        
    </fieldset>
    <fieldset class=\"fdark-submit-area\">
        <br>
        <button type=\"button\" class=\"fdark-btn\" onclick=\"cancelTask()\">Cancelar</button>
        <button type=\"submit\" class=\"fdark-btn\" onclick=\"addTarea()\"  >Guardar</button>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Tarea:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  44 => 18,  40 => 17,  23 => 3,  19 => 1,);
    }
}
