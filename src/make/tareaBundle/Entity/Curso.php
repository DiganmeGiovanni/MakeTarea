<?php

namespace make\tareaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="make\tareaBundle\Entity\CursoRepository")
 */
class Curso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="materia", type="string", length=400)
     */
    private $materia;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_profesor", type="string", length=150)
     */
    private $nomProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="ape_profesor", type="string", length=300)
     */
    private $apeProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="email_profesor", type="string", length=400)
     */
    private $emailProfesor;
    
    /**
     * @ORM\OneToMany(targetEntity="Tarea", mappedBy="curso", cascade={"persist", "remove"})
     */
    private $tareas;
    
    /**
     * @ORM\OneToMany(targetEntity="HorasClase", mappedBy="curso" , cascade={"persist", "remove"})
     */
    private $horasClase;
    
    /**
     * @ORM\OneToMany(targetEntity="Horarios", mappedBy="curso", cascade={"persist", "remove"})
     */
    private $horarios;
    
    public function __construct()
    {
        $this->tareas     = new \Doctrine\Common\Collections\ArrayCollection();
        $this->horasClase = new \Doctrine\Common\Collections\ArrayCollection();
        $this->horarios   = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set materia
     *
     * @param string $materia
     * @return Curso
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return string 
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set nomProfesor
     *
     * @param string $nomProfesor
     * @return Curso
     */
    public function setNomProfesor($nomProfesor)
    {
        $this->nomProfesor = $nomProfesor;

        return $this;
    }

    /**
     * Get nomProfesor
     *
     * @return string 
     */
    public function getNomProfesor()
    {
        return $this->nomProfesor;
    }

    /**
     * Set apeProfesor
     *
     * @param string $apeProfesor
     * @return Curso
     */
    public function setApeProfesor($apeProfesor)
    {
        $this->apeProfesor = $apeProfesor;

        return $this;
    }

    /**
     * Get apeProfesor
     *
     * @return string 
     */
    public function getApeProfesor()
    {
        return $this->apeProfesor;
    }

    /**
     * Set emailProfesor
     *
     * @param string $emailProfesor
     * @return Curso
     */
    public function setEmailProfesor($emailProfesor)
    {
        $this->emailProfesor = $emailProfesor;

        return $this;
    }

    /**
     * Get emailProfesor
     *
     * @return string 
     */
    public function getEmailProfesor()
    {
        return $this->emailProfesor;
    }

    /**
     * Add tareas
     *
     * @param \make\tareaBundle\Entity\Tarea $tareas
     * @return Curso
     */
    public function addTarea(\make\tareaBundle\Entity\Tarea $tareas)
    {
        $this->tareas[] = $tareas;

        return $this;
    }

    /**
     * Remove tareas
     *
     * @param \make\tareaBundle\Entity\Tarea $tareas
     */
    public function removeTarea(\make\tareaBundle\Entity\Tarea $tareas)
    {
        $this->tareas->removeElement($tareas);
    }

    /**
     * Get tareas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Add horasClase
     *
     * @param \make\tareaBundle\Entity\HorasClase $horasClase
     * @return Curso
     */
    public function addHorasClase(\make\tareaBundle\Entity\HorasClase $horasClase)
    {
        $this->horasClase[] = $horasClase;

        return $this;
    }

    /**
     * Remove horasClase
     *
     * @param \make\tareaBundle\Entity\HorasClase $horasClase
     */
    public function removeHorasClase(\make\tareaBundle\Entity\HorasClase $horasClase)
    {
        $this->horasClase->removeElement($horasClase);
    }

    /**
     * Get horasClase
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHorasClase()
    {
        return $this->horasClase;
    }

    /**
     * Add horarios
     *
     * @param \make\tareaBundle\Entity\Horarios $horarios
     * @return Curso
     */
    public function addHorario(\make\tareaBundle\Entity\Horarios $horarios)
    {
        $this->horarios[] = $horarios;

        return $this;
    }

    /**
     * Remove horarios
     *
     * @param \make\tareaBundle\Entity\Horarios $horarios
     */
    public function removeHorario(\make\tareaBundle\Entity\Horarios $horarios)
    {
        $this->horarios->removeElement($horarios);
    }

    /**
     * Get horarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHorarios()
    {
        return $this->horarios;
    }
}
