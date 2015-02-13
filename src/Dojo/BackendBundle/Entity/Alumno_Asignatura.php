<?php

namespace Dojo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno_Asignatura
 */
class Alumno_Asignatura
{
    /**
     * @var integer
     */
    private $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Usuarios", inversedBy="Alumno_Asignatura")
     * @JoinTable(name="Alumno_Asignatura",
     *      joinColumns={@JoinColumn(name="usuario_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="alumno_asignatura_id", referencedColumnName="id")}
     *      )
     */    
    private $alumnoId;

    /**
     * @ORM\ManyToMany(targetEntity="Asignaturas", inversedBy="Alumno_Asignatura")
     * @JoinTable(name="Alumno_Asignatura",
     *      joinColumns={@JoinColumn(name="asignatura_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="alumno_asignatura_id", referencedColumnName="id")}
     *      )
     */    
    private $asignaturaId;


    public function __construct()
    {
        $this->alumnoId = new ArrayCollection();
        $this->asignaturaId = new ArrayCollection();
    }
    
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
     * Set alumnoId
     *
     * @param integer $alumnoId
     * @return Alumno_Asignatura
     */
    public function setAlumnoId($alumnoId)
    {
        $this->alumnoId = $alumnoId;

        return $this;
    }

    /**
     * Get alumnoId
     *
     * @return integer 
     */
    public function getAlumnoId()
    {
        return $this->alumnoId;
    }

    /**
     * Set asignaturaId
     *
     * @param integer $asignaturaId
     * @return Alumno_Asignatura
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
