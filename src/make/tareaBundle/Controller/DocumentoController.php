<?php

namespace make\tareaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\HttpFoundation\Request;

use make\tareaBundle\Entity\Tarea;
use make\tareaBundle\Entity\Usuario;
use make\tareaBundle\Entity\Documento;

class DocumentoController extends Controller
{
    
    public function nuevoAction(Request $req)
    {
        //$this->redirect($this->generateUrl('app'));
        if ($req->getMethod() == "POST")
        {
            // Get req params
            $docname = $req->request->get('titulo');
            $idtarea = $req->request->get('idtarea');
            
            // Obtain task
            $em = $this->getDoctrine()->getManager();
            $tarea = $em->getRepository('maketareaBundle:Tarea')->find($idtarea);
            
            $documento = new Documento;
            $documento->setTitulo($docname);
            $documento->setContenido('Contenido de prueba');
            $documento->setTarea($tarea);
            
            $tarea->addDocumento($documento);
            
            $em->persist($tarea);
            $em->flush();
            
            $routeParams = array(
                'idtarea' => $idtarea, 
                'iddoc'   => $documento->getId(),
            );
            
            $url = $this->generateUrl('app-tarea', $routeParams);
            return $this->redirect($url);
        }
    }
    
}