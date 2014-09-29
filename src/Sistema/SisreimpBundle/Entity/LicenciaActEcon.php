<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LicenciaActEcon
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LicenciaActEcon
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
     * @ORM\Column(name="idEmpresa", type="integer")
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
     * @ORM\Column(name="vigenciaDesde", type="date")
     */
    private $vigenciaDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vigenciaHasta", type="date")
     */
    private $vigenciaHasta;

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
     * @return LicenciaActEcon
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
     * @return LicenciaActEcon
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
     * Set vigenciaDesde
     *
     * @param \DateTime $vigenciaDesde
     * @return LicenciaActEcon
     */
    public function setVigenciaDesde($vigenciaDesde)
    {
        $this->vigenciaDesde = $vigenciaDesde;

        return $this;
    }

    /**
     * Get vigenciaDesde
     *
     * @return \DateTime 
     */
    public function getVigenciaDesde()
    {
        return $this->vigenciaDesde;
    }

    /**
     * Set vigenciaHasta
     *
     * @param \DateTime $vigenciaHasta
     * @return LicenciaActEcon
     */
    public function setVigenciaHasta($vigenciaHasta)
    {
        $this->vigenciaHasta = $vigenciaHasta;

        return $this;
    }

    /**
     * Get vigenciaHasta
     *
     * @return \DateTime 
     */
    public function getVigenciaHasta()
    {
        return $this->vigenciaHasta;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return LicenciaActEcon
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
