<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*Para relacion uno a muchos*/
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ramos
 *
 * @ORM\Table("ramos")
 * @ORM\Entity
 */
class Ramos
{
    /**
     * @ORM\OneToMany(targetEntity="Clasificacion", mappedBy="idRamo")
     */
     protected $ramos;
     public function __construct()
     {
<<<<<<< HEAD
        $this->ramos = new ArrayCollection();
=======
        $this->tiposImpuestos = new ArrayCollection();
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
     }
    /*Para relacion uno a muchos*/

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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * @return Ramos
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Ramos
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
     * Set status
     *
     * @param integer $status
     * @return Ramos
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    
    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Add ramos
     *
     * @param \Sistema\SisreimpBundle\Entity\Clasificacion $ramos
     * @return Ramos
     */
    public function addRamo(\Sistema\SisreimpBundle\Entity\Clasificacion $ramos)
    {
        $this->ramos[] = $ramos;

        return $this;
    }

    /**
     * Remove ramos
     *
     * @param \Sistema\SisreimpBundle\Entity\Clasificacion $ramos
     */
    public function removeRamo(\Sistema\SisreimpBundle\Entity\Clasificacion $ramos)
    {
        $this->ramos->removeElement($ramos);
    }

    /**
     * Get ramos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRamos()
    {
        return $this->ramos;
    }
}
