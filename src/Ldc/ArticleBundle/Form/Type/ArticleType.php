<?php

namespace Ldc\ArticleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add("image","file")
			->add("title","text")
			->add("content","textarea",array(
				"trim" => true
			));
	}
	
	public function getName()
	{
		return "event";
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ldc\ArticleBundle\Entity\Article',
        ));
    }
}
