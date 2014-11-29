<?php

/* maketareaBundle:HorasClase:new.html.twig */
class __TwigTemplate_a4e6ffca69dd4a90c165de27f34212bd9f666e9f8fabfa5bff530f272b379a6b extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("nva_hora_ajax");
        echo " id=\"form-nva-horaclase\" class=\"fdark\" >
    <legend>Agregar un curso al horario</legend>
    <div class=\"fdark-errs\">
    
    </div>
    <fieldset class=\"fdark-fset\">
        <select name=\"materiaid\" class=\"fdark-inpt fdark-inpt-big\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allcursos"]) ? $context["allcursos"] : $this->getContext($context, "allcursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 11
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "materia"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </select>
        <br><br>
        
        <select name=\"dia\" class=\"fdark-inpt fdark-inpt-big\">
            <option value=\"Lunes\">Lunes</option>
            <option value=\"Martes\">Martes</option>
            <option value=\"Miercoles\">Miercoles</option>
            <option value=\"Jueves\">Jueves</option>
            <option value=\"Viernes\">Viernes</option>
        </select>
        
        <br><br>
        <label>Hora de inicio:</label><br>
        <select id=\"hora\" name=\"horainicio\" class=\"fdark-inpt\">
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
        <select id=\"min\" name=\"mininicio\" class=\"fdark-inpt\">
            <option>00</option>
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
        </select>
        
        <br><br>
        <label>Hora de fin:</label><br>
        <select id=\"hora\" name=\"horafin\" class=\"fdark-inpt\">
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
        <select id=\"min\" name=\"minfin\" class=\"fdark-inpt\">
            <option>00</option>
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
        </select>
        
    </fieldset>
    <fieldset class=\"fdark-submit-area\">
        <br>
        <button type=\"button\" class=\"fdark-btn\" onclick=\"showAddHoraclase()\">Cancelar</button>
        <button type=\"submit\" class=\"fdark-btn\">Guardar</button>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:HorasClase:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  37 => 11,  33 => 10,  23 => 3,  19 => 1,);
    }
}
