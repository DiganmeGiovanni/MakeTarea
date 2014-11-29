<?php

namespace make\tareaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query\ResultSetMapping;

use make\tareaBundle\Entity\Tarea;
use make\tareaBundle\Entity\Usuario;

class CalendarController extends Controller
{
    
    public function calendarAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $cursos = $this->getCursosFor($user);
        
        $year = 2014;
        $month= 05;
        $day  = 30;
        
        $params = array(
                    'user'        => $user,
                    'cursos'      => $cursos,
                    'year'       => $year,
                    'month'      => $month,
                    'day'        => $day,
                );
        
        return $this->render('maketareaBundle:App:make-calendar.html.twig', $params);
    }
    
    /**
     */
    public function calendardayAction($day, $month, $year)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $cursos = $this->getCursosFor($user);
        
        // Obtenemos las tareas de la fecha solicitada
        $date = $year.'-'.$month.'-'.$day;
        $fecha = new \Datetime($date);
        $tareashoy = $this->getDayTasks($fecha, $user);
        
        $params = array(
                    'user'        => $user,
                    'cursos'      => $cursos,
                    'day'         => $day,
                    'month'       => $month,
                    'year'        => $year,
                    'tareashoy'   => $tareashoy,
                );
        
        return $this->render('maketareaBundle:App:make-calendar-day.html.twig', $params);
    }
    
    public function getDayTasks(\Datetime $fecha, Usuario $user)
    {
        $tareas = array();
        foreach ($user->getTareas() as $tarea) {
            $tareas[] = $tarea;
        }
        
        return $tareas;
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
}