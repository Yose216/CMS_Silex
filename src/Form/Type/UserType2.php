<?php

namespace cms\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text')
            ->add('password', 'repeated', array(
                'type'            => 'password',
                'invalid_message' => 'Les Mots de passe ne sont pas les mêmes',
                'options'         => array('required' => true),
                'first_options'   => array('label' => 'Password'),
                'second_options'  => array('label' => 'Repeat password'),
            ))
            ->add('role', 'choice');
    }
	

    public function getName()
    {
        return 'user';
    }
}
