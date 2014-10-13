<?php

namespace Sistema\SisreimpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActividadesEmpresaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD
            ->add('idDeclaracion')
            ->add('idActividad')
            ->add('ingresoBruto')
=======
            ->add('idEmpresa')
            ->add('idActividad')
            ->add('fechaInicio')
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
            ->add('status')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\SisreimpBundle\Entity\ActividadesEmpresa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
<<<<<<< HEAD
        return 'sistema_sisreimpbundle_actividadesempresa';
=======
        return 'sistema_SisreimpBundle_actividadesempresa';
>>>>>>> f61603c4178bde61c131191bc46546d83fa407b1
    }
}
