<?php
// src/Sdz/UserBundle/Entity/User.php

namespace Ldc\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="ldc_user")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Ldc\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
	
	const DEFAULT_IMAGE = "default.png";
	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @var string $image
     *
     * @ORM\Column(name="image", type="string", nullable=true)
	 * @Assert\Image(
     *     maxSize = "1024k",
	 * 	   maxSizeMessage ="Le fichier ne doit pas depasser 1024Ko",
     *     mimeTypesMessage = "Veuillez uploader un fichier image"
	 * )
     */
    private $image;
	
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
	
	/**
     * @var string
     */
	protected $previous_image;
	
	public function __construct(){
		$this->setRegisterDate(new \Datetime());
		$this->setLastLogin(new \Datetime());
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
	
	/**
     * Set image
     *
     * @param string $image
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
	
	
	  /**
     * Set previousImage
     *
     * @param string $previousImage
     * @return Article
     */
    public function setPreviousImage($image)
    {
        $this->previous_image = $image;
        return $this;
    }

    /**
     * Get previousImage
     *
     * @return string 
     */
    public function getPreviousImage()
    {
        return $this->previous_image;
    }
	
	public function getFullImagePath() {
        return null === $this->image ? null : $this->getUploadRootDir(). $this->image;
    }
 
    public function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir()."../bundles/ldcwebsite/images/users/";
    }
 
    public function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../www/upload/';
    }
 
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function uploadImage() {
    	
  		//L'utilisateur vient de se connecter, le PreUpdate() n'a lieu que pour mettre a jour la date de connection
  		//Il n'est meme pas dans la page d'edition de profil pour uploader une image! 
		if((!empty($this->id)) && empty($this->previous_image)){
			return; 
		}	
		
        // -------------- Cas de l'Ajout ou Edition d'article ===> Image chargee
        if (!empty($this->image)) {
			$imageExtension = pathinfo($this->image->getClientOriginalName() , PATHINFO_EXTENSION);
			$imageName = uniqid() ."." .$imageExtension;   
			
	        if(!$this->id){
	            $this->image->move($this->getTmpUploadRootDir(),$imageName);	
	        } 
			
	        //------- Cas de l'Edition d'article ===> Image changee	
	        else{
				if($this->previous_image !== self::DEFAULT_IMAGE){
					@unlink($this->getUploadRootDir() .$this->previous_image);
				}
	            $this->image->move($this->getUploadRootDir(),$imageName);
	        }
	        $this->setImage($imageName); //Nom de l'image precede d'un prefixe
        }
		// -------------- Cas de l'Edition d'article ===> Image inchangee
		else if($this->previous_image !== null){	
			$this->setImage($this->previous_image);
		}
		else{
			$this->setImage(self::DEFAULT_IMAGE);
		}
    }
	
	/**
     * @ORM\PostPersist()
     */
    public function moveImage()
    {
        if ($this->image === null || $this->image === self::DEFAULT_IMAGE ) {
            return;
        }
        if(!is_dir($this->getUploadRootDir())){
            mkdir($this->getUploadRootDir());
        }
        copy($this->getTmpUploadRootDir().$this->image, $this->getFullImagePath());
        unlink($this->getTmpUploadRootDir().$this->image);
    }
 
    /**
     * @ORM\PreRemove()
     */
    public function removeImage()
    {
    	if(is_file($this->getFullImagePath())){
    		unlink($this->getFullImagePath());
    	}
        //rmdir($this->getUploadRootDir());
    }
	
}