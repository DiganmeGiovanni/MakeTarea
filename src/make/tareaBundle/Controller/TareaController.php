<?php

namespace make\tareaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use make\tareaBundle\Entity\Tarea;
use make\tareaBundle\Entity\Usuario;
use make\tareaBundle\Entity\Documento;

/**
* Tarea controller
*
*/
class TareaController extends Controller
{
    
    public function nuevaAction(Request $req)
    {
        if ($req->getMethod() == "POST") 
        {
            $user = $this->get('security.context')->getToken()->getUser();
            
            // Get parameter from request
            $title = $req->request->get('titulo');
            $desc  = $req->request->get('descripcion');
            $curso = $req->request->get('curso');
            $status= $req->request->get('status');
            $fecha = $req->request->get('fecha');
            $hora  = $req->request->get('hora');
            $min   = $req->request->get('min');
            
            // Create and format DateTime for new Task
            $date = new \DateTime($fecha);
            $date->setTime($hora, $min);
            
            // Get the Curso for Tarea
            $em     = $this->getDoctrine()->getManager();
            $tcurso = $em->getRepository('maketareaBundle:Curso')->find($curso);
            
            // Create the new Tarea object
            $tarea = new Tarea;
            $tarea->setTitulo($title);
            $tarea->setDescripcion($desc);
            $tarea->setFechaEntrega($date);
            $tarea->setEstado($status);
            $tarea->setCurso($tcurso);
            $tarea->setUsuario($user);
            
            // Add new Tarea to the Usuario
            $user->addTarea($tarea);
            
            // Persist User and Tarea
            $em->persist($user);
            $em->flush();
            
            /*$response = array(
                "titulo"      => $title,
                "descripcion" => $desc,
                "curso"       => $curso,
                "status"      => $status,
                "fecha"       => $date,
                "tarea"       => $tarea,
                "curse"       => $tcurso->getMateria(),
            );
            
            return new Response(json_encode($response));*/
        }
        
        //return new Response(json_encode($response));
        return $this->redirect($this->generateUrl('app'));
    }
    
    public function edittaskAction($idtarea, $iddoc)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $cursos = $this->getCursosFor($user);
        
        $tarea = new Tarea;
        
        foreach ($user->getTareas() as $task) 
        {
            if ($task->getId() == $idtarea) 
            {
                $tarea = $task;
                break;
            }
        }
        
        $documento = new Documento;
        foreach ($tarea->getDocumentos() as $doc) {
            if ($doc->getId() == $iddoc) {
                $documento = $doc;
                break;
            }
        }
        
        $params = array(
            'tarea'     => $tarea,
            'user'      => $user,
            'cursos'    => $cursos,
            'documento' => $documento,
            'iddoc'     => $iddoc,
            'idtarea'   => $idtarea,
        );
        
        return $this->render('maketareaBundle:Tarea:edit.html.twig', $params);
        
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