<?php

namespace make\tareaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="make\tareaBundle\Entity\ImagenRepository")
 */
class Imagen
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
     * @ORM\Column(name="imagen", type="blob")
     */
    private $imagen;
    
    /**
     * @ORM\ManyToOne(targetEntity="Tarea", inversedBy="imagenes")
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
     * Set imagen
     *
     * @param string $imagen
     * @return Imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set tarea
     *
     * @param \make\tareaBundle\Entity\Tarea $tarea
     * @return Imagen
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
