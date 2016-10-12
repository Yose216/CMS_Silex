<?php

namespace cms\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('content', 'textarea')
			->add('image', 'file', array(
                    'data_class' => null
			));
    }

    public function getName()
    {
        return 'article';
    }
}