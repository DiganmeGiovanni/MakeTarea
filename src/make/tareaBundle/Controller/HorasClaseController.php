<?php

namespace make\tareaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use make\tareaBundle\Entity\Curso;
use make\tareaBundle\Entity\HoraClase;

/**
 */
class HorasClaseController extends Controller
{
    
    public function nuevoAction(Request $req)
    {
        if ($req->getMethod() == "POST") 
        {
            // Get params
            $idmateria = $req->request->get('materia');
            $dia       = $req->request->get('dia');
            $horaini   = $req->request->get('horainicio');
            $minini    = $req->request->get('mininicio');
            $horafin   = $req->request->get('horafin');
            $minfin    = $req->request->get('horamin');
            
            // Create and format DateTime for hora inicio and fin
            $inicio = new \DateTime;
            $inicio->setTime($horainicio, $mininicio);
            
            $fin = new \DateTime;
            $fin->setTime($horafin, $minfin);
            
            $horaclase = new HoraClase;
            $HoraClase->setDia($dia);
            $horaclase->setHoraInicio($inicio);
            $horaclase->setHoraFun($fin);
            
            $em = $this->getDoctrine()->getManager();
            $materia = $em->getRepository('maketareaBundle:Curso')->find($idmateria);
            
            $horaclase->setCurso($materia);
            $materia->addHoraClase($horaclase);
            
            $em->persist($materia);
            
            $user = $this->get('security.context')->getToken()->getUser();
            $cursos = $this->getCursosFor($user);
            
            $em = $this->getDoctrine()->getManager();
            $allcursos = $em->getRepository('maketareaBundle:Curso')->findall();
            
            $params = array(
                'user'      => $user,
                'cursos'    => $cursos,
                'allcursos' => $allcursos,
            );
            
            return $this->render('maketareaBundle:Horarios:horarios.html.twig', $params);
        }
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