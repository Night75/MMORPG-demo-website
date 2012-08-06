<?php

namespace Ldc\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ldc\SurveyBundle\Entity\Answer
 *
 * @ORM\Table()
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="Ldc\SurveyBundle\Entity\AnswerRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Answer
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
     * @var string $answer
     *
     * @ORM\Column(name="answer", type="string", length=255)
     */
    private $answer;

    /**
     * @var integer $total
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

	/**
     * @ORM\ManyToOne(targetEntity="Ldc\SurveyBundle\Entity\Survey", inversedBy="answers")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;
	
	public function __construct()
	{
		$this->total = 0;
	}
	
	public function __toString()
	{
		return $this->answer;	
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
     * Set answer
     *
     * @param string $answer
     * @return Answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Answer
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }
	
	/**
	 */
	 public function incrementTotal(){
	 	if(!$this->total){
	 		$this->total = 1;
	 	} else {
	 		$this->total++;
	 	}
	 }
	 
	 /**
     * Get total
     *
     * @return Ldc\SurveyBundle\Entity\Survey 
     */
	 public function getSurvey()
	 {
	 	return $this->survey;
	 }
	  
	 /**
     * Set survey
     *
     * @param Ldc/SurveyBundle/Entity/Survey $survey
     * @return Answer
     */
	 public function setSurvey(Ldc\SurveyBundle\Entity\Survey $survey)
	 {
	 	$this->survey =$survey;
		return $this;
	 }
	
}