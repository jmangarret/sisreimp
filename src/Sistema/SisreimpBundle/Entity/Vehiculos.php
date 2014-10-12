<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehiculos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vehiculos
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
     * @ORM\ManyToOne(targetEntity="contribuyente", inversedBy="vehiculos")
     * @ORM\JoinColumn(name="idcontribuyente", referencedColumnName="id")  
     */
    private $idContribuyente;

    /**
     * @var string
     *
     * @ORM\Column(name="placa", type="string", length=20)
     */
    private $placa;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=50)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=50)
     */
    private $modelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50)
     */
    private $color;

    /**
     * @var integer
     *
     * @ORM\Column(name="numerop", type="integer")
     */
    private $numerop;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano", type="integer")
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=100)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal")
     */
    private $costo;

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
     * Set idContribuyente
     *
     * @param integer $idContribuyente
     * @return Vehiculos
     */
    public function setIdContribuyente($idContribuyente)
    {
        $this->idContribuyente = $idContribuyente;

        return $this;
    }

    /**
     * Get idContribuyente
     *
     * @return integer 
     */
    public function getIdContribuyente()
    {
        return $this->idContribuyente;
    }

    /**
     * Set placa
     *
     * @param string $placa
     * @return Vehiculos
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * Get placa
     *
     * @return string 
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Vehiculos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Vehiculos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Vehiculos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Vehiculos
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set numerop
     *
     * @param integer $numerop
     * @return Vehiculos
     */
    public function setNumerop($numerop)
    {
        $this->numerop = $numerop;

        return $this;
    }

    /**
     * Get numerop
     *
     * @return integer 
     */
    public function getNumerop()
    {
        return $this->numerop;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return Vehiculos
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return Vehiculos
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set costo
     *
     * @param string $costo
     * @return Vehiculos
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Vehiculos
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
}
