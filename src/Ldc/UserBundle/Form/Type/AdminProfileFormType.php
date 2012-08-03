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
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdminProfileFormType extends AbstractType
{
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      //  $this->buildUserForm($builder, $options);
        $builder
			->add('roles','choice',array(
					'choices' => array('ROLE_ADMIN'=>"ROLE_ADMIN","ROLE_USER"=>"ROLE_USER"), 
					"multiple" => true
				));   
    }

    public function getName()
    {
        return 'admin_profile';
    }
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' =>  'Ldc\UserBundle\Entity\User',
        ));
    }
}
