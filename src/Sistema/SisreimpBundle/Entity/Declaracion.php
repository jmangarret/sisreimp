<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Declaracion
 *
 * @ORM\Table("declaracion_empresa")
 * @ORM\Entity
 */
class Declaracion
{
	 /**
	 * @ORM\OneToMany(targetEntity="ActividadesEmpresa", mappedBy="idDeclaracion")
	 */
	 protected $actividadesempresas;
	 public function __construct(){
	  $this->actividadesempresas = new ArrayCollection();
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
     * @var integer
     *
	 * @ORM\ManyToOne(targetEntity="Empresa", inversedBy="declaraciones")
     * @ORM\JoinColumn(name="idempresa", referencedColumnName="id")     * 
     */
    private $idEmpresa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desde", type="date")
     */
    private $fechaDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hasta", type="date")
     */
    private $fechaHasta;

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
     * Set idEmpresa
     *
     * @param integer $idEmpresa
     * @return Declaracion
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return integer 
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Declaracion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     * @return Declaracion
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime 
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     * @return Declaracion
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime 
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Declaracion
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

    /**
     * Add actividadesempresas
     *
     * @param \Sistema\SisreimpBundle\Entity\ActividadesEmpresa $actividadesempresas
     * @return Declaracion
     */
    public function addActividadesEmpresa(\Sistema\SisreimpBundle\Entity\ActividadesEmpresa $actividadesempresas)
    {
        $this->actividadesempresas[] = $actividadesempresas;

        return $this;
    }

    /**
     * Remove actividadesempresas
     *
     * @param \Sistema\SisreimpBundle\Entity\ActividadesEmpresa $actividadesempresas
     */
    public function removeActividadesEmpresas(\Sistema\SisreimpBundle\Entity\ActividadesEmpresa $actividadesempresas)
    {
        $this->actividadesempresas->removeElement($actividadesempresas);
    }

    /**
     * Get actividadesempresas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividadesEmpresas()
    {
        return $this->actividadesempresas;
    }
}
