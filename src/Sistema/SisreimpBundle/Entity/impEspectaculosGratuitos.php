<?php

namespace Sistema\SisreimpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * impEspectaculosGratuitos
 *
 * @ORM\Table("imp_espectaculos_ratuito")
 * @ORM\Entity
 */
class impEspectaculosGratuitos
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
     * @var string
     *
     * @ORM\Column(name="nombreTipoEspectaculo", type="string", length=255)
     */
    private $nombreTipoEspectaculo;

    /**
     * @var integer
     *
     * @ORM\Column(name="valorUt", type="integer")
     */
    private $valorUt;

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
     * Set nombreTipoEspectaculo
     *
     * @param string $nombreTipoEspectaculo
     * @return impEspectaculosGratuitos
     */
    public function setNombreTipoEspectaculo($nombreTipoEspectaculo)
    {
        $this->nombreTipoEspectaculo = $nombreTipoEspectaculo;

        return $this;
    }

    /**
     * Get nombreTipoEspectaculo
     *
     * @return string 
     */
    public function getNombreTipoEspectaculo()
    {
        return $this->nombreTipoEspectaculo;
    }

    /**
     * Set valorUt
     *
     * @param integer $valorUt
     * @return impEspectaculosGratuitos
     */
    public function setValorUt($valorUt)
    {
        $this->valorUt = $valorUt;

        return $this;
    }

    /**
     * Get valorUt
     *
     * @return integer 
     */
    public function getValorUt()
    {
        return $this->valorUt;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return impEspectaculosGratuitos
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
