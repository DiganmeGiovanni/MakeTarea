<?php

namespace make\tareaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="make\tareaBundle\Entity\DocumentoRepository")
 */
class Documento
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
     * @ORM\Column(name="titulo", type="string", length=3000)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="string", length=500000)
     */
    private $contenido;
    
    /**
     * @ORM\ManyToOne(targetEntity="Tarea", inversedBy="documentos")
     * @ORM\JoinColumn(name="id_tarea", referencedColumnName="id")
     */
    private $tarea;


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
     * @return Documento
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
     * Set contenido
     *
     * @param string $contenido
     * @return Documento
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set tarea
     *
     * @param \make\tareaBundle\Entity\Tarea $tarea
     * @return Documento
     */
    public function setTarea(\make\tareaBundle\Entity\Tarea $tarea = null)
    {
        $this->tarea = $tarea;

        return $this;
    }

    /**
     * Get tarea
     *
     * @return \make\tareaBundle\Entity\Tarea 
     */
    public function getTarea()
    {
        return $this->tarea;
    }
}
