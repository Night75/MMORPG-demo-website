<?php

namespace Ldc\SurveyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnswerType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add("answer","text",array(
				"label" => "Reponses",
			));
	}
	
	public function getName()
	{
		return "answer_type";
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ldc\SurveyBundle\Entity\Answer',
        ));
    }
}
