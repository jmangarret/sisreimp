<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeclaracionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idEmpresa')
            ->add('fecha')
            ->add('fechaDesde')
            ->add('fechaHasta')
            ->add('status')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\Declaracion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_sisreimpbundle_declaracion';
    }
}
