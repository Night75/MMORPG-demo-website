<?php

namespace Ldc\SliderImageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SliderImageType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add("image","file",array("required" => false))
			->add("title","text", array(	"trim" => true))
			->add("description","text",array(	"trim" => true))
			->add("url","text");
	}
	
	public function getName()
	{
		return "event";
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ldc\SliderImageBundle\Entity\SliderImage',
        ));
    }
}
