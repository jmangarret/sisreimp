<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TiposImpuestosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idrubrotributario','entity', array(
                'class' => 'SistemaSisreimpBundle:RubrosTributarios',))
            ->add('nombre')
            ->add('tipo','choice', 
                array(
                'choices' => array( 'UT' => 'Por Unidad Tributaria', 
                                    'PORC' => 'Por Porcentaje', 
                                    'MONTO' => 'Por Monto o Tarifa Fija')
                )
            )
            ->add('valorAplicable')
            ->add('status','choice', 
                array(
                'choices' => array( '1' => 'Activo', 
                                    '0' => 'Inactivo',)                                     
                )
            );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\TiposImpuestos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistemasisreimpbundle_tiposimpuestos';
    }
}
