<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContribuyenteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rif')
            ->add('nombre')
            ->add('telefono')
            ->add('direccion')
            ->add('tipo')
            ->add('status','choice', 
                array(
                'choices' => array( '1' => 'Activo', 
                                    '0' => 'Inactivo',)                                     
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\Contribuyente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistemasisreimpbundle_contribuyente';
    }
}
