<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Espectaculos
 *
 * @ORM\Table("espectaculos")
 * @ORM\Entity
 */
class Espectaculos
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
     * @ORM\Column(name="idContribuyente", type="integer")
     */
    private $idContribuyente;

    /**
     * @var string
     *
     * @ORM\Column(name="clase", type="string", length=100)
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=100)
     */
    private $genero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=255)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="horaDesde", type="string", length=10)
     */
    private $horaDesde;

    /**
     * @var string
     *
     * @ORM\Column(name="horaHasta", type="string", length=10)
     */
    private $horaHasta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idImpuestoEspectaculoGratuito", type="integer")
     */
    private $idImpuestoEspectaculoGratuito;

    /**
     * @var integer
     *
     * @ORM\Column(name="idImpuestoCobroEntradas", type="integer")
     */
    private $idImpuestoCobroEntradas;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantTotalEntradas", type="integer")
     */
    private $cantTotalEntradas;

    /**
     * @var string
     *
     * @ORM\Column(name="valorTotalEntradas", type="decimal")
     */
    private $valorTotalEntradas;

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
     * @return Espectaculos
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
     * Set clase
     *
     * @param string $clase
     * @return Espectaculos
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Espectaculos
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
     * Set genero
     *
     * @param string $genero
     * @return Espectaculos
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Espectaculos
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
     * Set detalle
     *
     * @param string $detalle
     * @return Espectaculos
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Espectaculos
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
     * Set horaDesde
     *
     * @param string $horaDesde
     * @return Espectaculos
     */
    public function setHoraDesde($horaDesde)
    {
        $this->horaDesde = $horaDesde;

        return $this;
    }

    /**
     * Get horaDesde
     *
     * @return string 
     */
    public function getHoraDesde()
    {
        return $this->horaDesde;
    }

    /**
     * Set horaHasta
     *
     * @param string $horaHasta
     * @return Espectaculos
     */
    public function setHoraHasta($horaHasta)
    {
        $this->horaHasta = $horaHasta;

        return $this;
    }

    /**
     * Get horaHasta
     *
     * @return string 
     */
    public function getHoraHasta()
    {
        return $this->horaHasta;
    }

    /**
     * Set idImpuestoEspectaculoGratuito
     *
     * @param integer $idImpuestoEspectaculoGratuito
     * @return Espectaculos
     */
    public function setIdImpuestoEspectaculoGratuito($idImpuestoEspectaculoGratuito)
    {
        $this->idImpuestoEspectaculoGratuito = $idImpuestoEspectaculoGratuito;

        return $this;
    }

    /**
     * Get idImpuestoEspectaculoGratuito
     *
     * @return integer 
     */
    public function getIdImpuestoEspectaculoGratuito()
    {
        return $this->idImpuestoEspectaculoGratuito;
    }

    /**
     * Set idImpuestoCobroEntradas
     *
     * @param integer $idImpuestoCobroEntradas
     * @return Espectaculos
     */
    public function setIdImpuestoCobroEntradas($idImpuestoCobroEntradas)
    {
        $this->idImpuestoCobroEntradas = $idImpuestoCobroEntradas;

        return $this;
    }

    /**
     * Get idImpuestoCobroEntradas
     *
     * @return integer 
     */
    public function getIdImpuestoCobroEntradas()
    {
        return $this->idImpuestoCobroEntradas;
    }

    /**
     * Set cantTotalEntradas
     *
     * @param integer $cantTotalEntradas
     * @return Espectaculos
     */
    public function setCantTotalEntradas($cantTotalEntradas)
    {
        $this->cantTotalEntradas = $cantTotalEntradas;

        return $this;
    }

    /**
     * Get cantTotalEntradas
     *
     * @return integer 
     */
    public function getCantTotalEntradas()
    {
        return $this->cantTotalEntradas;
    }

    /**
     * Set valorTotalEntradas
     *
     * @param string $valorTotalEntradas
     * @return Espectaculos
     */
    public function setValorTotalEntradas($valorTotalEntradas)
    {
        $this->valorTotalEntradas = $valorTotalEntradas;

        return $this;
    }

    /**
     * Get valorTotalEntradas
     *
     * @return string 
     */
    public function getValorTotalEntradas()
    {
        return $this->valorTotalEntradas;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Espectaculos
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
