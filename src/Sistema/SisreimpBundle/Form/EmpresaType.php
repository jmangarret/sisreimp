<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contribuyenteId', 'hidden')
            ->add('rif')
            ->add('razonSocial')
            ->add('tipoContribuyente')
            ->add('organizacionEconomica')
            ->add('organizacionJuridica')
            ->add('representanteLegal')
            ->add('direccion','textarea')
            ->add('telefonos')
            ->add('fechaRegistro','hidden')
            ->add('status','hidden')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\Empresa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_sisreimpbundle_empresa';
    }
}
