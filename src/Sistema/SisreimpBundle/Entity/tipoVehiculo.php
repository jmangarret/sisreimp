<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/*Para relacion uno a muchos*/
use Doctrine\Common\Collections\ArrayCollection;

/**
 * tipoVehiculo
 *
 * @ORM\Table("tipoVehiculo")
 * @ORM\Entity(repositoryClass="Sistema\SisreimpBundle\Entity\tipoVehiculoRepository")
 */
class tipoVehiculo
{
          
       /**
     * @ORM\OneToMany(targetEntity="Vehiculos", mappedBy="tipo")
     */
     protected $vehiculos;
     public function __construct()
     {
        $this->vehiculos = new ArrayCollection();
     }
    
     
     /**
     * Get Vehiculos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
     public function __toString() {
         
            return $this->tipo;
         
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
     * @ORM\Column(name="tipo", type="string")
     */
    private $tipo;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_impuesto", type="float")
     */
    private $montoImpuesto;

    /**
     * @var float
     *
     * @ORM\Column(name="porc_alicuota", type="float")
     */
    private $porcAlicuota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
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
     * Set tipo
     *
     * @param string $tipo
     * @return tipoVehiculo
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
     * Set montoImpuesto
     *
     * @param float $montoImpuesto
     * @return tipoVehiculo
     */
    public function setMontoImpuesto($montoImpuesto)
    {
        $this->montoImpuesto = $montoImpuesto;

        return $this;
    }

    /**
     * Get montoImpuesto
     *
     * @return float 
     */
    public function getMontoImpuesto()
    {
        return $this->montoImpuesto;
    }

    /**
     * Set porcAlicuota
     *
     * @param float $porcAlicuota
     * @return tipoVehiculo
     */
    public function setPorcAlicuota($porcAlicuota)
    {
        $this->porcAlicuota = $porcAlicuota;

        return $this;
    }

    /**
     * Get porcAlicuota
     *
     * @return float 
     */
    public function getPorcAlicuota()
    {
        return $this->porcAlicuota;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return tipoVehiculo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
