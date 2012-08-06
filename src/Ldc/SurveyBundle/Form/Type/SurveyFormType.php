<?php

namespace Ldc\SurveyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class SurveyFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add("answers","entity",array(
				"class" => 'Ldc\SurveyBundle\Entity\Answer',
				"query_builder" => function(EntityRepository $er){
					return $er->createQueryBuilder('a');
				},
				"expanded" => true,
			));
	}
	
	public function getName()
	{
		return "survey_form_type";
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ldc\SurveyBundle\Entity\Survey',
        ));
    }
}
