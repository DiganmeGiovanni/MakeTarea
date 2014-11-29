<?php

namespace make\tareaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query\ResultSetMapping;

use make\tareaBundle\Entity\Tarea;
use make\tareaBundle\Entity\Usuario;

class AppController extends Controller
{
     
    public function appAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $proximasClases = $this->getClasesManana($user);
        $cursos = $this->getCursosFor($user);
        
        $year = 2014;
        $month= 05;
        $day  = 30;
        
        $params = array(
                    'user'        => $user,
                    'proxClases'  => $proximasClases,
                    'cursos'      => $cursos,
                    'formMsg'    => false,
                    'formMensaje'=> 'Probando mensajes',
                    'year'       => $year,
                    'month'      => $month,
                    'day'        => $day,
                );
        
        return $this->render('maketareaBundle:App:app.html.twig', $params);
    }
    
    /**
     * Obtiene todos los cursos que tiene un determinado
     * usuario
     *
     * @param usuario $user
     */
    public function getCursosFor(Usuario $user)
    {
        $cursos = array();
        
        foreach ($user->getHorarios() as $horario) 
        {
            $cursos[] = $horario->getCurso();
        }
        
        return $cursos;
    }
    
    /**
     * Obtiene las clases para el siguiente dia habil.
     * ej. Si es lunes, devolvera las clases del Martes,
     *     si es viernes devolvera las clases del Lunes
     *
     * @param  Usuario $user
     * @return Un array de objetos Curso, con las proximas clases
     */
    public function getClasesManana(Usuario $user)
    {
        $proxClases = array();
        $sigDia = $this->getSigDia();
        $horarios = $user->getHorarios();
        
        foreach ($horarios as $horario) 
        {
            $curso = $horario->getCurso();
            $horasClase = $curso->getHorasClase();
            
            foreach ($horasClase as $horaClase) 
            {
                if ($horaClase->getDia() === $sigDia) 
                {
                    $hora = $horaClase->getHoraInicio();
                    $diahora = $horaClase->getDia().' a las '.$hora->format('H:i').' hrs.';
                    
                    $clase = array(
                        "materia" => $curso->getMateria(),
                        "hora"    => $diahora,
                        "profesor"=> $curso->getNomProfesor().' '.$curso->getapeProfesor(),
                        "tarcount"=> $curso->getTareas()->count(),
                    );
                    
                    $proxClases[] = $clase;
                }
            }
        }
        
        return $proxClases;
    }
    
    /**
     * Obtiene el siguiente dia habil despues de hoy
     *
     * @return string siguiente dia habil
     */
    public function getSigDia()
    {
        $currDay = date("D");
        switch ($currDay) {
            case 'Mon':
                return "Martes";
                break;
            case 'Tue':
                return "Miercoles";
                break;
            case 'Wed':
                return "Jueves";
                break;
            case 'Thu':
                return "Viernes";
                break;
            case 'Fri':
                return "Lunes";
                break;
            case 'Sat':
                return "Lunes";
                break;
            case 'Sun':
                return "Lunes";
                break;
            default:
                return "Viernes";
                break;
        }
    }
    
    /*public function getAllTareasFor(Usuario $user)
    {
        $em = $this->getDoctrine()->getManager();
        
        $sql = 'SELECT * FROM Tarea WHERE id_usuario='.$user->getId();
        $rsm = new ResultSetMapping();
        
        //$qDQL = 'SELECT t FROM make\tareaBundle\Entity\Tarea t WHERE t.usuario->getId()='.$user->getId();
        //$query = $em->createQuery($qDQL);
        $query = $em->createNativeQuery($sql, $rsm);
        return $query->getResult();
        //return $sql;
    }*/
}