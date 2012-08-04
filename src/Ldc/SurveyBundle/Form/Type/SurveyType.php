<?php

namespace Ldc\SurveyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ldc\SurveyBundle\Form\Type\AnswerType;

class SurveyType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add("question","text")
			->add('answers', 'collection', array(
				'type'  => new AnswerType,  
				'prototype' => true,
				'allow_add' => true));
	}
	
	public function getName()
	{
		return "survey_type";
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ldc\SurveyBundle\Entity\Survey',
        ));
    }
}
