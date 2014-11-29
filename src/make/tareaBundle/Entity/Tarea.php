<?php

namespace make\tareaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="make\tareaBundle\Entity\TareaRepository")
 */
class Tarea
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
     * @ORM\Column(name="titulo", type="string", length=500)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=2000)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrega", type="datetime")
     */
    private $fechaEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=50)
     */
    private $estado;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="tareas")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     */
    private $usuario;
    
    /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="tareas")
     * @ORM\JoinColumn(name="id_curso", referencedColumnName="id")
     */
    private $curso;
    
    /**
     * @ORM\OneToMany(targetEntity="Enlace", mappedBy="tarea", cascade={"persist", "remove"})
     */
    private $enlaces;
    
    /**
     * @ORM\OneToMany(targetEntity="Documento", mappedBy="tarea", cascade={"persist", "remove"})
     */
    private $documentos;
    
    /**
     * @ORM\OneToMany(targetEntity="Imagen", mappedBy="tarea", cascade={"persist", "remove"})
     */
    private $imagenes;
    
    
    public function __construct()
    {
        $this->enlaces    = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documentos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->imagenes   = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titulo
     *
     * @param string $titulo
     * @return Tarea
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tarea
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Tarea
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Tarea
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set usuario
     *
     * @param \make\tareaBundle\Entity\Usuario $usuario
     * @return Tarea
     */
    public function setUsuario(\make\tareaBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \make\tareaBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set curso
     *
     * @param \make\tareaBundle\Entity\Curso $curso
     * @return Tarea
     */
    public function setCurso(\make\tareaBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \make\tareaBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Add enlaces
     *
     * @param \make\tareaBundle\Entity\Enlace $enlaces
     * @return Tarea
     */
    public function addEnlace(\make\tareaBundle\Entity\Enlace $enlaces)
    {
        $this->enlaces[] = $enlaces;

        return $this;
    }

    /**
     * Remove enlaces
     *
     * @param \make\tareaBundle\Entity\Enlace $enlaces
     */
    public function removeEnlace(\make\tareaBundle\Entity\Enlace $enlaces)
    {
        $this->enlaces->removeElement($enlaces);
    }

    /**
     * Get enlaces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnlaces()
    {
        return $this->enlaces;
    }

    /**
     * Add documentos
     *
     * @param \make\tareaBundle\Entity\Documento $documentos
     * @return Tarea
     */
    public function addDocumento(\make\tareaBundle\Entity\Documento $documentos)
    {
        $this->documentos[] = $documentos;

        return $this;
    }

    /**
     * Remove documentos
     *
     * @param \make\tareaBundle\Entity\Documento $documentos
     */
    public function removeDocumento(\make\tareaBundle\Entity\Documento $documentos)
    {
        $this->documentos->removeElement($documentos);
    }

    /**
     * Get documentos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocumentos()
    {
        return $this->documentos;
    }

    /**
     * Add imagenes
     *
     * @param \make\tareaBundle\Entity\Imagen $imagenes
     * @return Tarea
     */
    public function addImagene(\make\tareaBundle\Entity\Imagen $imagenes)
    {
        $this->imagenes[] = $imagenes;

        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param \make\tareaBundle\Entity\Imagen $imagenes
     */
    public function removeImagene(\make\tareaBundle\Entity\Imagen $imagenes)
    {
        $this->imagenes->removeElement($imagenes);
    }

    /**
     * Get imagenes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }
}
