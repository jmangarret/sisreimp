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
<<<<<<< HEAD
	 * @ORM\ManyToOne(targetEntity="Declaracion", inversedBy="ActividadesEmpresas")
     * @ORM\JoinColumn(name="iddeclaracion", referencedColumnName="id")     * 
     */
    private $idDeclaracion;
=======
     * @ORM\Column(name="idEmpresa", type="integer")
     */
    private $idEmpresa;
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1

    /**
     * @var integer
     *
<<<<<<< HEAD
	 * @ORM\ManyToOne(targetEntity="Clasificacion", inversedBy="ActividadesEmpresas")
     * @ORM\JoinColumn(name="idactividad", referencedColumnName="id")     * 

=======
     * @ORM\Column(name="idActividad", type="integer")
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
     */
    private $idActividad;

    /**
<<<<<<< HEAD
     * @var string
     *
     * @ORM\Column(name="ingreso_bruto", type="decimal")
     */
    private $ingresoBruto;
=======
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="date")
     */
    private $fechaInicio;
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1

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
<<<<<<< HEAD
     * Set idDeclaracion
     *
     * @param \Sistema\SisreimpBundle\Entity\Declaracion $idDeclaracion
     * @return ActividadesEmpresa
     */
    public function setIdDeclaracion(\Sistema\SisreimpBundle\Entity\Declaracion $idDeclaracion = null)
    {
        $this->idDeclaracion = $idDeclaracion;
=======
     * Set idEmpresa
     *
     * @param integer $idEmpresa
     * @return ActividadesEmpresa
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get idDeclaracion
     *
     * @return \Sistema\SisreimpBundle\Entity\Declaracion 
     */
    public function getIdDeclaracion()
    {
        return $this->idDeclaracion;
=======
     * Get idEmpresa
     *
     * @return integer 
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
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
<<<<<<< HEAD
     * Set ingresoBruto
     *
     * @param string $ingresoBruto
     * @return ActividadesEmpresa
     */
    public function setIngresoBruto($ingresoBruto)
    {
        $this->ingresoBruto = $ingresoBruto;
=======
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return ActividadesEmpresa
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get ingresoBruto
     *
     * @return string 
     */
    public function getIngresoBruto()
    {
        return $this->ingresoBruto;
    }


=======
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
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
<<<<<<< HEAD

=======
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
}
