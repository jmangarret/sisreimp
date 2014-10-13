<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Contribuyente
 *
 * @ORM\Table("contribuyente")
 * @ORM\Entity(repositoryClass="Sistema\SisreimpBundle\Entity\ContribuyenteRepository")
 */
class Contribuyente
{    
     /**
     * @ORM\OneToMany(targetEntity="Vehiculos", mappedBy="idContribuyente")
     */
     protected $vehiculos;

     /**
     * @ORM\OneToMany(targetEntity="Empresa", mappedBy="idContribuyente")
     */
     protected $empresas;
     
     public function __construct()
     {
        $this->vehiculos = new ArrayCollection();
        $this->empresas = new ArrayCollection();
     }  
    
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
     * @ORM\Column(name="rif", type="string", length=20)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=30)
     */
    private $tipo;

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
     * Set rif
     *
     * @param string $rif
     * @return Contribuyente
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Contribuyente
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
     * Set telefono
     *
     * @param string $telefono
     * @return Contribuyente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Contribuyente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Contribuyente
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Contribuyente
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
        return $this->getRif(). " ".$this->getNombre();
    }

    /**
     * Add empresas
     *
     * @param \Sistema\SisreimpBundle\Entity\Empresa $empresas
     * @return Contribuyente
     */
    public function addEmpresas(\Sistema\SisreimpBundle\Entity\Empresa $empresas)
    {
        $this->empresas[] = $empresas;

        return $this;
    }

    /**
     * Remove empresas
     *
     * @param \Sistema\SisreimpBundle\Entity\Empresa $empresas
     */
    public function removeEmpresas(\Sistema\SisreimpBundle\Entity\Empresa $empresas)
    {
        $this->empresas->removeElement($empresas);
    }

    /**
     * Get empresas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpresas()
    {
        return $this->empresas;
    }    
    
    /**
     * Add vehiculos
     *
     * @param \Sistema\SisreimpBundle\Entity\Vehiculos $vehiculos
     * @return Contribuyente
     */
    public function addVehiculos(\Sistema\SisreimpBundle\Entity\Vehiculos $vehiculos)
    {
        $this->vehiculos[] = $vehiculos;

        return $this;
    }

    /**
     * Remove vehiculos
     *
     * @param \Sistema\SisreimpBundle\Entity\Vehiculos $vehiculos
     */
    public function removeVehiculos(\Sistema\SisreimpBundle\Entity\Vehiculos $vehiculos)
    {
        $this->vehiculos->removeElement($vehiculos);
    }

    /**
     * Get vehiculos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehiculos()
    {
        return $this->vehiculos;
    }    
}
