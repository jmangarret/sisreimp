<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

<<<<<<< HEAD
class VehiculosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idContribuyente')
            ->add('placa')
            ->add('marca')
            ->add('modelo')
            ->add('tipo')
            ->add('color')
            ->add('numerop')
            ->add('ano')
            ->add('serial')
            ->add('costo')
            ->add('status')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
=======
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
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\Vehiculos'
        ));
    }

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getName()
    {
        return 'sistema_sisreimpbundle_vehiculos';
    }
=======
    public function getName() {
        return 'sistema_sisreimpbundle_vehiculos';
    }

>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
}
