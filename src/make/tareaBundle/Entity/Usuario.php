<?php

namespace make\tareaBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="make\tareaBundle\Entity\UsuarioRepository")
 */
class Usuario implements UserInterface, \Serializable
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
     * @ORM\Column(name="nombre", type="string", length=150)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidop", type="string", length=150)
     */
    private $apellidop;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidom", type="string", length=150)
     */
    private $apellidom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=400)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;
    
    /**
     * @ORM\OneToMany(targetEntity="Tarea", mappedBy="usuario", cascade={"persist", "remove"})
     */
    private $tareas;
    
    /**
     * @ORM\OneToMany(targetEntity="Horarios", mappedBy="usuario", cascade={"persist",  "remove"})
     */
    private $horarios;
    
    public function __construct()
    {
        $this->tareas   = new \Doctrine\Common\Collections\ArrayCollection();
        $this->horarios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set apellidop
     *
     * @param string $apellidop
     * @return Usuario
     */
    public function setApellidop($apellidop)
    {
        $this->apellidop = $apellidop;

        return $this;
    }

    /**
     * Get apellidop
     *
     * @return string 
     */
    public function getApellidop()
    {
        return $this->apellidop;
    }

    /**
     * Set apellidom
     *
     * @param string $apellidom
     * @return Usuario
     */
    public function setApellidom($apellidom)
    {
        $this->apellidom = $apellidom;

        return $this;
    }

    /**
     * Get apellidom
     *
     * @return string 
     */
    public function getApellidom()
    {
        return $this->apellidom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add tareas
     *
     * @param \make\tareaBundle\Entity\Tarea $tareas
     * @return Usuario
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
     * Add horarios
     *
     * @param \make\tareaBundle\Entity\Horarios $horarios
     * @return Usuario
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
    
// UserInterface methods:
    
    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return null;
    }
    
    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_USER', 'ROLE_ADMIN');
    }
    
    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->email;
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
        
    }
    
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password
            // see section on salt below
            // $this->salt,
        ));
        //return null;
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
        //return null;
    }
    
}
