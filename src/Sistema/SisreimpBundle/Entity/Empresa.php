<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table("empresa")
 * @ORM\Entity(repositoryClass="Sistema\SisreimpBundle\Entity\EmpresaRepository")
 */
class Empresa
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
     * @ORM\Column(name="contribuyente_id", type="integer")
     */
    private $contribuyenteId;

    /**
     * @var string
     *
     * @ORM\Column(name="rif", type="string", length=12)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="razonSocial", type="string", length=255)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoContribuyente", type="string", length=20)
     */
    private $tipoContribuyente;

    /**
     * @var string
     *
     * @ORM\Column(name="organizacionEconomica", type="string", length=255)
     */
    private $organizacionEconomica;

    /**
     * @var string
     *
     * @ORM\Column(name="organizacionJuridica", type="string", length=255)
     */
    private $organizacionJuridica;

    /**
     * @var string
     *
     * @ORM\Column(name="representanteLegal", type="string", length=255)
     */
    private $representanteLegal;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonos", type="string", length=255)
     */
    private $telefonos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRegistro", type="datetime")
     */
    private $fechaRegistro;

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
     * Set contribuyenteId
     *
     * @param integer $contribuyenteId
     * @return Empresa
     */
    public function setContribuyenteId($contribuyenteId)
    {
        $this->contribuyenteId = $contribuyenteId;

        return $this;
    }

    /**
     * Get contribuyenteId
     *
     * @return integer 
     */
    public function getContribuyenteId()
    {
        return $this->contribuyenteId;
    }

    /**
     * Set rif
     *
     * @param string $rif
     * @return Empresa
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
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return Empresa
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set tipoContribuyente
     *
     * @param string $tipoContribuyente
     * @return Empresa
     */
    public function setTipoContribuyente($tipoContribuyente)
    {
        $this->tipoContribuyente = $tipoContribuyente;

        return $this;
    }

    /**
     * Get tipoContribuyente
     *
     * @return string 
     */
    public function getTipoContribuyente()
    {
        return $this->tipoContribuyente;
    }

    /**
     * Set organizacionEconomica
     *
     * @param string $organizacionEconomica
     * @return Empresa
     */
    public function setOrganizacionEconomica($organizacionEconomica)
    {
        $this->organizacionEconomica = $organizacionEconomica;

        return $this;
    }

    /**
     * Get organizacionEconomica
     *
     * @return string 
     */
    public function getOrganizacionEconomica()
    {
        return $this->organizacionEconomica;
    }

    /**
     * Set organizacionJuridica
     *
     * @param string $organizacionJuridica
     * @return Empresa
     */
    public function setOrganizacionJuridica($organizacionJuridica)
    {
        $this->organizacionJuridica = $organizacionJuridica;

        return $this;
    }

    /**
     * Get organizacionJuridica
     *
     * @return string 
     */
    public function getOrganizacionJuridica()
    {
        return $this->organizacionJuridica;
    }

    /**
     * Set representanteLegal
     *
     * @param string $representanteLegal
     * @return Empresa
     */
    public function setRepresentanteLegal($representanteLegal)
    {
        $this->representanteLegal = $representanteLegal;

        return $this;
    }

    /**
     * Get representanteLegal
     *
     * @return string 
     */
    public function getRepresentanteLegal()
    {
        return $this->representanteLegal;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empresa
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
     * Set telefonos
     *
     * @param string $telefonos
     * @return Empresa
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set fechaInicio
     *
     * @param string $fechaInicio
     * @return Empresa
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return string 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Empresa
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Empresa
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
