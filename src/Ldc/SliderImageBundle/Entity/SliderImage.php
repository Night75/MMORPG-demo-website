<?php

namespace Ldc\SliderImageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Ldc\SliderImageBundle\Entity\SliderImage
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Ldc\SliderImageBundle\Entity\SliderImageRepository")
 */
class SliderImage
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
	 * @Assert\MaxLength(limit=45, message = "Le titre ne peut depasser {{limit}} caracteres")
	 * @Assert\NotBlank(message = "Le titre ne peut etre vide.")
     */
    private $title;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
	 * @Assert\NotBlank(message = "La description ne peut etre vide.")
     */
    private $description;

    /**
     * @var datetime $date_created
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $date_created;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url; //NON FONCTIONNEL = @Assert\Url(message = "Veuillez inserer une URL valide", protocols = {"http" ,"https"} )
	
	 /**
     *
     * @ORM\ManyToOne(targetEntity="Ldc\UserBundle\Entity\User")
     */
    private $author;
	
	private $previous_image;
    
	 public function __construct()
	 {
	 	$this->setDateCreated(new \Datetime());
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
     * Set image
     *
     * @param string $image
     * @return SliderImage
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
     * Set title
     *
     * @param string $title
     * @return SliderImage
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SliderImage
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date_created
     *
     * @param datetime $dateCreated
     * @return SliderImage
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;
        return $this;
    }

    /**
     * Get date_created
     *
     * @return datetime 
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return SliderImage
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl($length = null)
    {
    	if($length){
    		$url = substr($this->url,0,$length);
    		if(strlen($this->url) > $length){
				$url .= "...";
    		}
    		return $url;
    	}
        return $this->url;
    }
	
	/**
     * Set author
     *
     * @param Ldc/UserBundle/Entity/User $author
     * @return Article
     */
    public function setAuthor( $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return Ldc/UserBundle/Entity/User 
     */
    public function getAuthor()
    {
        return $this->author;
    }
	
	  /**
     * Set image
     *
     * @param string $image
     * @return Article
     */
    public function setPreviousImage($image)
    {
        $this->previous_image = $image;
        return $this;
    }

    /**
     * Get image
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
        return $this->getTmpUploadRootDir()."../bundles/ldcwebsite/images/slider/";
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
     
        // -------------- Cas de l'Ajout ou Edition d'article ===> Image chargee
        if ($this->image !== null) {     
	        if(!$this->id){
	            $this->image->move($this->getTmpUploadRootDir(), $this->image->getClientOriginalName());
	        } 
			
	        //------- Cas de l'Edition d'article ===> Image changee	
	        else{
				if($this->previous_image !== "default.jpg"){
					@unlink($this->getUploadRootDir() .$this->previous_image);
				}
	            $this->image->move($this->getUploadRootDir(), $this->image->getClientOriginalName());
	        }
	        $this->setImage($this->image->getClientOriginalName());
        }
	
		// -------------- Cas de l'Edition d'article ===> Image inchangee
		else if($this->previous_image !== null){	
			$this->setImage($this->previous_image);
		}
    }
	
	/**
     * @ORM\PostPersist()
     */
    public function moveImage()
    {
        if (null === $this->image) {
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