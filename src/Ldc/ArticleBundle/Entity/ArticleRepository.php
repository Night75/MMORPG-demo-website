<?php

namespace Ldc\ArticleBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
	public function getArticlesLimit($offsetPage,$articlesPerPage)
	{
		$qb = $this->createQueryBuilder("a");
		$qb->orderBy("a.date_created","desc")
			->setFirstResult(2); 
		$q = $qb->getQuery();
		
		$offset = ($offsetPage-1)*$articlesPerPage;
		$q->setFirstResult($offset);
		$q->setMaxResults($articlesPerPage);
		 return $q->getResult();
	}
}