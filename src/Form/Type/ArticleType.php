<?php

namespace cms\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\Extension\Core\Type\DateType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('content', 'textarea')
			->add('image', 'file', array(
                    'data_class' => null
			))
			->add('dateArt','date', array(
    			'widget' => 'choice'
			));
    }

    public function getName()
    {
        return 'article';
    }
}