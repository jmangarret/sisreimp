<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasificacion
 *
 * @ORM\Table("actividades_economicas")
 * @ORM\Entity
 */
class Clasificacion
{
	 /**
	 * @ORM\OneToMany(targetEntity="ActividadesEmpresa", mappedBy="Clasificacion")
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
     * @ORM\ManyToOne(targetEntity="Ramos", inversedBy="ramos")
     * @ORM\JoinColumn(name="idramo", referencedColumnName="id")
    */ 
    private $idRamo;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     */
    private $codigo;

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
     * @var string
     *
     * @ORM\Column(name="alicuota", type="decimal")
     */
    private $alicuota;

    /**
     * @var string
     *
     * @ORM\Column(name="minimo_tributario", type="decimal")
     */
    private $minimoTributario;

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
     * Set idRamo
     *
     * @param integer $idRamo
     * @return Clasificacion
     */
    public function setIdRamo($idRamo)
    {
        $this->idRamo = $idRamo;

        return $this;
    }

    /**
     * Get idRamo
     *
     * @return integer 
     */
    public function getIdRamo()
    {
        return $this->idRamo;
    }

    /**
     * Set codigo
     *
     * @param integer $codigo
     * @return Clasificacion
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Clasificacion
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
     * @return Clasificacion
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
     * Set alicuota
     *
     * @param string $alicuota
     * @return Clasificacion
     */
    public function setAlicuota($alicuota)
    {
        $this->alicuota = $alicuota;

        return $this;
    }

    /**
     * Get alicuota
     *
     * @return string 
     */
    public function getAlicuota()
    {
        return $this->alicuota;
    }

    /**
     * Set minimoTributario
     *
     * @param string $minimoTributario
     * @return Clasificacion
     */
    public function setMinimoTributario($minimoTributario)
    {
        $this->minimoTributario = $minimoTributario;

        return $this;
    }

    /**
     * Get minimoTributario
     *
     * @return string 
     */
    public function getMinimoTributario()
    {
        return $this->minimoTributario;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Clasificacion
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
     * @return Clasificacion
     */
    public function addActividadesempresa(\Sistema\SisreimpBundle\Entity\ActividadesEmpresa $actividadesempresas)
    {
        $this->actividadesempresas[] = $actividadesempresas;

        return $this;
    }

    /**
     * Remove actividadesempresas
     *
     * @param \Sistema\SisreimpBundle\Entity\ActividadesEmpresa $actividadesempresas
     */
    public function removeActividadesempresa(\Sistema\SisreimpBundle\Entity\ActividadesEmpresa $actividadesempresas)
    {
        $this->actividadesempresas->removeElement($actividadesempresas);
    }

    /**
     * Get actividadesempresas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividadesempresas()
    {
        return $this->actividadesempresas;
    }
	
	public function __toString()
    {
        return $this->getNombre(). " ".$this->getCodigo();
    }
}
