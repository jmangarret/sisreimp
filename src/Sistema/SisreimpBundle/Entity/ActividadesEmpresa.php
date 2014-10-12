<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadesEmpresa
 *
 * @ORM\Table("actividades_empresa")
 * @ORM\Entity
 */
class ActividadesEmpresa
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
	 * @ORM\ManyToOne(targetEntity="Declaracion", inversedBy="ActividadesEmpresas")
     * @ORM\JoinColumn(name="iddeclaracion", referencedColumnName="id")     * 
     */
    private $idDeclaracion;

    /**
     * @var integer
     *
	 * @ORM\ManyToOne(targetEntity="Clasificacion", inversedBy="ActividadesEmpresas")
     * @ORM\JoinColumn(name="idactividad", referencedColumnName="id")     * 

     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="ingreso_bruto", type="decimal")
     */
    private $ingresoBruto;

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
     * Set idDeclaracion
     *
     * @param \Sistema\SisreimpBundle\Entity\Declaracion $idDeclaracion
     * @return ActividadesEmpresa
     */
    public function setIdDeclaracion(\Sistema\SisreimpBundle\Entity\Declaracion $idDeclaracion = null)
    {
        $this->idDeclaracion = $idDeclaracion;

        return $this;
    }

    /**
     * Get idDeclaracion
     *
     * @return \Sistema\SisreimpBundle\Entity\Declaracion 
     */
    public function getIdDeclaracion()
    {
        return $this->idDeclaracion;
    }

    /**
     * Set idActividad
     *
     * @param integer $idActividad
     * @return ActividadesEmpresa
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return integer 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set ingresoBruto
     *
     * @param string $ingresoBruto
     * @return ActividadesEmpresa
     */
    public function setIngresoBruto($ingresoBruto)
    {
        $this->ingresoBruto = $ingresoBruto;

        return $this;
    }

    /**
     * Get ingresoBruto
     *
     * @return string 
     */
    public function getIngresoBruto()
    {
        return $this->ingresoBruto;
    }


    /**
     * Set status
     *
     * @param integer $status
     * @return ActividadesEmpresa
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
