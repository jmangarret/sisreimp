<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EspectaculosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idContribuyente')
            ->add('clase')
            ->add('tipo')
            ->add('genero')
            ->add('fecha')
            ->add('detalle')
            ->add('direccion')
            ->add('horaDesde')
            ->add('horaHasta')
            ->add('idImpuestoEspectaculoGratuito')
            ->add('idImpuestoCobroEntradas')
            ->add('cantTotalEntradas')
            ->add('valorTotalEntradas')
            ->add('status')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\Espectaculos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_SisreimpBundle_espectaculos';
    }
}
