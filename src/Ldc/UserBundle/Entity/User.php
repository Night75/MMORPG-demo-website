<?php
// src/Sdz/UserBundle/Entity/User.php

namespace Ldc\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="ldc_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @var date $birthday
     *
     * @ORM\Column(name="birthday", type="date")
	 * 
     */
	protected $birthday;
	
	/**
     * @var string $signature
     *
     * @ORM\Column(name="signature",type="string",length=255,nullable=true)
	 *
     */
	protected $signature;
	
	/**
     * @var string $gender
     *
     * @ORM\Column(name="gender",type="string",length=255)
	 * 
     */
	protected $gender;
	
		
	/**
     * @var datetime $register_date
     *
     * @ORM\Column(name="register_date",type="datetime", nullable=false)
	 * 
     */
	protected $register_date;
	
	/**
     * @var string
     */
    protected $username;
	
	public function __construct(){
		$this->register_date = new \Datetime();
		parent::__construct(); 
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set register_date
     *
     * @param datetime $registerDate
     */
    public function setRegisterDate($registerDate)
    {
        $this->register_date = $registerDate;
    }
	
    /**
     * Get register_date
     *
     * @return datetime 
     */
    public function getRegisterDate()
    {
        return $this->register_date;
    }

    /**
     * Set birthday
     *
     * @param date $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return date 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set signature
     *
     * @param string $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * Get signature
     *
     * @return string 
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }
}