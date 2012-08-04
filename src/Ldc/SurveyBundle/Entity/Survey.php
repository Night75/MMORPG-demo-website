<?php

namespace Ldc\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ldc\SurveyBundle\Entity\Answer;

/**
 * Ldc\SurveyBundle\Entity\Survey
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ldc\SurveyBundle\Entity\SurveyRepository")
 */
class Survey
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
     * @var datetime $date_created
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $date_created;

    /**
     * @var string $question
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;
	
	/**
     *
     * @ORM\ManyToOne(targetEntity="Ldc\UserBundle\Entity\User")
     */
    private $author;
	
	/**
     * @ORM\OneToMany(targetEntity="Ldc\SurveyBundle\Entity\Answer", mappedBy="survey", cascade={"persist"})
     */
    private $answers;
	
	
    public function __construct()
    {
        // Rappelez-vous, on a un attribut qui doit contenir un ArrayCollection, on doit l'initialiser dans le constructeur
        $this->date_created = new \Datetime;
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date_created
     *
     * @param datetime $dateCreated
     * @return Survey
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
     * Set question
     *
     * @param string $question
     * @return Survey
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
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
	
	public function addAnswer(Answer $answer)
    {
        $this->answer[] = $answer;
		$answer->setSurvey($this);
        return $this;
    }

    public function removeAnswer(Answer $answer)
    {
        $this->answers->removeElement($answer);
		$answer->setSurvey(null);
    }

    public function getAnswers()
    {
        return $this->answers;
    }
}