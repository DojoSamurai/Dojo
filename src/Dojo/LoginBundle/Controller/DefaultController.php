<?php

namespace Dojo\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DojoLoginBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
        SecurityContext::AUTHENTICATION_ERROR,
        $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
        );
        return $this->render('DojoLoginBundle:Default:login.html.twig', array(
        'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
        'error' => $error
        ));
    }   
    
    public function dashboardAction()
    {
        $usuario = $this->get('security.context')->getToken()->getUser();
        $nombre = $usuario->getNombre();
        $idusuario = $usuario->getId();
        
        $asignaturas = $this->obtenerAsignaturasPorUsuario($idusuario);
        
        return $this->render('DojoFrontendBundle:Default:alumnos.html.twig', array("usuario" =>$nombre, 
            "asignaturas" => $asignaturas));
    }    
    
    protected function obtenerAsignaturasPorUsuario()
    {
       // $asignaturas = array("Política y ciudadanía","Informática", "Trabajo y cuidadanía");
        $asignaturas = $this->getDoctrine()
        ->getRepository('DojoBackendBundle:Asignaturas')
        ->findAll();
        return $asignaturas;
    }
}
