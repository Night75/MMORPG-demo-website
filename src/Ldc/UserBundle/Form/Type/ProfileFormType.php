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
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      //  $this->buildUserForm($builder, $options);
        $builder
       		->add("image","file",array("required" => false))
        	->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
			->add("signature","textarea",array("required" => false)) 
	        ->add('current_password', 'password', array(
	            'label' => 'form.current_password',
	            'translation_domain' => 'FOSUserBundle',
	            'mapped' => false,
	            'constraints' => new UserPassword(),
	        ));
    }

    public function getName()
    {
        return 'ldc_user_profile';
    }
}
