<?php

namespace Dojo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulos
 */
class Modulos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $asignaturaID;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Modulos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set asignaturaID
     *
     * @param integer $asignaturaID
     * @return Modulos
     */
    public function setAsignaturaID($asignaturaID)
    {
        $this->asignaturaID = $asignaturaID;

        return $this;
    }

    /**
     * Get asignaturaID
     *
     * @return integer 
     */
    public function getAsignaturaID()
    {
        return $this->asignaturaID;
    }
}
