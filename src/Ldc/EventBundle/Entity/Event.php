<?php

namespace Ldc\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\ExecutionContext;
use Symfony\Component\Httpfoundation\Response;
/**
 * Ldc\EventBundle\Entity\Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ldc\EventBundle\Entity\EventRepository")
 * @Assert\Callback(methods={"dateValide"})
 */
class Event
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
     * @var datetime $date_event
     *
     * @ORM\Column(name="date_event", type="datetime", unique=true)
     */
    private $date_event;

    
	
    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
	 * @Assert\NotBlank(message="Veuillez attribuer un titre")
     */
    private $title;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
	 * @Assert\NotBlank(message="Veuillez attribuer une description")
     */
    private $description;

	/**
     * @var datetime $date_created
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $date_created;
    
	/**
     *
     * @ORM\ManyToOne(targetEntity="Ldc\UserBundle\Entity\User")
     */
    private $author;
	
	public function __construct()
	{
		$this->setDateCreated(new \Datetime);
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
     * Set date_event
     *
     * @param datetime $dateEvent
     */
    public function setDateEvent($dateEvent)
    {
        $this->date_event = $dateEvent;
    }

    /**
     * Get date_event
     *
     * @return datetime 
     */
    public function getDateEvent()
    {
        return $this->date_event;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return Article
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
     * Set author
     *
     * @param Ldc/UserBundle/Entity/User $author
     * @return Event
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
	
	public function dateValide(ExecutionContext $context)
	{
		$dateEvent = $this->getDateEvent();
		$dateToday = new \Datetime("now");
		$dateDiff = $dateEvent->diff($dateToday);
		
		//Si la date de l'evenement est superieure a la date d'aujourd'hui
		if($dateDiff->format("%R") == "+")
		{
			$context->addViolationAtSubPath('date_event', "La date de l'evenement ne peut etre dans le passe", array(), null);
		}
	}
}