<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class tipoVehiculoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD
            ->add('tipo','choice',array('choices'=>array(''=>'Seleccione..','1'=>'Carro','2'=>'Camioneta')))
            ->add('montoImpuesto')
            ->add('porcAlicuota')
            ->add('status')
=======
            ->add('tipo','choice',array('choices'=>array(''=>'Seleccione..','Carro'=>'Carro','Camioneta'=>'Camioneta')))
            ->add('montoImpuesto')
            ->add('porcAlicuota')
            //->add('status')
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\tipoVehiculo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_sisreimpbundle_tipovehiculo';
    }
}
