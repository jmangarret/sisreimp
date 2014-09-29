<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposImpuestos
 *
 * @ORM\Table("tiposimpuestos")
 * @ORM\Entity(repositoryClass="Sistema\SisreimpBundle\Entity\TiposImpuestosRepository")
 */
class TiposImpuestos
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
     * @var integer
     *     
     * @ORM\ManyToOne(targetEntity="RubrosTributarios", inversedBy="tiposImpuestos")
     * @ORM\JoinColumn(name="idrubrotributario", referencedColumnName="id")
    */  
    private $idRubroTributario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=30)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_aplicable", type="decimal")
     */
    private $valorAplicable;

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
     * Set idRubroTributario
     *
     * @param integer $idRubroTributario
     * @return TiposImpuestos
     */
    public function setIdRubroTributario($idRubroTributario)
    {
        $this->idRubroTributario = $idRubroTributario;

        return $this;
    }

    /**
     * Get idRubroTributario
     *
     * @return integer 
     */
    public function getIdRubroTributario()
    {
        return $this->idRubroTributario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TiposImpuestos
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
     * Set tipo
     *
     * @param string $tipo
     * @return TiposImpuestos
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
     * Set valorAplicable
     *
     * @param string $valorAplicable
     * @return TiposImpuestos
     */
    public function setValorAplicable($valorAplicable)
    {
        $this->valorAplicable = $valorAplicable;

        return $this;
    }

    /**
     * Get valorAplicable
     *
     * @return string 
     */
    public function getValorAplicable()
    {
        return $this->valorAplicable;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TiposImpuestos
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
     * Set rubro
     *
     * @param \Sistema\SisreimpBundle\Entity\RubrosTributarios $rubro
     * @return TiposImpuestos
     */
    public function setRubro(\Sistema\SisreimpBundle\Entity\RubrosTributarios $rubro = null)
    {
        $this->rubro = $rubro;

        return $this;
    }

    /**
     * Get rubro
     *
     * @return \Sistema\SisreimpBundle\Entity\RubrosTributarios 
     */
    public function getRubro()
    {
        return $this->rubro;
    }
}
