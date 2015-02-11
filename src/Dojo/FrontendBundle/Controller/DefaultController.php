<?php

namespace Dojo\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DojoFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
    
      public function alumnosAction()
    {
        $idAlumno = app.usuario.Id;
        $asignaturas = $this->getDoctrine()
        ->getRepository('DojoBackendBundle:Asignaturas')
        ->BuscarAsignaturasParaAlumno($idAlumno);
        return $this->render('DojoFrontendBundle::alumnos.html.twig', array('asignaturas' => $asignaturas));
    }
      
}
