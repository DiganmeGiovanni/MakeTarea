<?php

namespace make\tareaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    
    public function loginAction(Request $req)
    {
        $session = $req->getSession();
        
        // Obtiene errores de login, si es que hay alguno
        if ($req->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) 
        {
            $error = $req->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        else
        {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render(
            'maketareaBundle:Default:login.html.twig', 
            array(
                // Username introducido por el usuario
                'last_username' => $session->get(SecurityContext::LAST_USERNAME), 
                'error'         => $error
            )
        );
    }
}