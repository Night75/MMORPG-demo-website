<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ldc\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	parent::buildForm($builder, $options);
        $builder
            ->add('username',"text", array('error_bubbling'=>false))
            ->add('email', 'email', array('error_bubbling'=>false))
			->add('gender','choice',array('choices' => array('M'=>"M","F"=>"F")))
			->add('birthday','birthday',array(
				'format' => 'dd-MM-yyyy',
				'years' => range(date("Y")-60,date("Y")-12)
			))
			->add( 'plainPassword', 'repeated', array( 'type' => 'password',
			 'invalid_message' => 'Les deux champs de mot de passe doivent correspondre' ))
			 ->add("signature","textarea",array("required" => false))
		 	->add("image","file",array("required" => false))
			->add('captcha', 'captcha', array("invalid_message" => "Erreur dans le captcha"));
			
           /* ->add('plainPassword', 'repeated', 
											            array('type' => 'password',
											            "first_name" => "Mot de passe", 
											            "second_name" => "confirmation du mot de passe" ,
											            "invalid_message" => "Les mots de passes sont differents",
											             'error_bubbling' => false))*/;
    }

    public function getName()
    {
        return 'ldc_user_registration';
    }
}
