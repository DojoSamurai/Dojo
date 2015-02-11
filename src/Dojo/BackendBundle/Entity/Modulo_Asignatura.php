<?php

namespace Dojo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulo_Asignatura
 */
class Modulo_Asignatura
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $moduloId;

    /**
     * @var integer
     */
    private $asignaturaId;


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
     * Set moduloId
     *
     * @param integer $moduloId
     * @return Modulo_Asignatura
     */
    public function setModuloId($moduloId)
    {
        $this->moduloId = $moduloId;

        return $this;
    }

    /**
     * Get moduloId
     *
     * @return integer 
     */
    public function getModuloId()
    {
        return $this->moduloId;
    }

    /**
     * Set asignaturaId
     *
     * @param integer $asignaturaId
     * @return Modulo_Asignatura
     */
    public function setAsignaturaId($asignaturaId)
    {
        $this->asignaturaId = $asignaturaId;

        return $this;
    }

    /**
     * Get asignaturaId
     *
     * @return integer 
     */
    public function getAsignaturaId()
    {
        return $this->asignaturaId;
    }
}
