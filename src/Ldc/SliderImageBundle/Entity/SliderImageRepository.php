<?php

namespace Ldc\SliderImageBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SliderImageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SliderImageRepository extends EntityRepository
{
			
	public function getLastSliderImage()
	{
		$qb = $this->createQueryBuilder("s");
		$qb->orderBy("s.date_created","desc");
		$q = $qb->getQuery();
		
		//$q->setFirstResult(1);
		$q->setMaxResults(1);
		
		return $q->getOneOrNullResult();
	}
	
	public function countAll()
	{
		return $this->createQueryBuilder('s')
		 ->select('COUNT(s)')
		 ->getQuery()
		 ->getSingleScalarResult();
	}
}