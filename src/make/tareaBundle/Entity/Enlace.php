<?php

namespace make\tareaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enlace
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="make\tareaBundle\Entity\EnlaceRepository")
 */
class Enlace
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
     * @ORM\Column(name="link", type="string", length=5000)
     */
    private $link;

    /**
     * @ORM\ManyToOne(targetEntity="Tarea", inversedBy="enlaces")
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
     * Set link
     *
     * @param string $link
     * @return Enlace
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set tarea
     *
     * @param \make\tareaBundle\Entity\Tarea $tarea
     * @return Enlace
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
