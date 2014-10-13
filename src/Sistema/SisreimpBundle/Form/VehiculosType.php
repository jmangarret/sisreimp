<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VehiculosType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('idContribuyente', 'entity', array(
                    'class' => 'SistemaSisreimpBundle:Contribuyente',))
                ->add('placa')
                ->add('marca')
                ->add('modelo')
                ->add('tipo', 'entity', array(
                    'class' => 'SistemaSisreimpBundle:tipoVehiculo',))
                //->add('tipo')
                ->add('color')
                ->add('numerop')
                ->add('ano')
                ->add('serial')
                ->add('costo')
               // ->add('status','choice',array('choices'=>array(''=>'Seleccione..',1=>'Activo',0=>'Inactivo')))
             //   ->add('status')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\Vehiculos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_sisreimpbundle_vehiculos';
    }
}
