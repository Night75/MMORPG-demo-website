<?php

namespace Ldc\EventBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add("date_event","datetime",array(
				"years" => range(date("Y"),date("Y")+1)
			))
			->add("title","text")
			->add("description","textarea",array(
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
            'data_class' => 'Ldc\EventBundle\Entity\Event',
        ));
    }
}
