<?php

namespace AppBundle\Repository;

/**
 * BibliographyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BibliographyRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllLecturerBibs()
    {
        return $this->createQueryBuilder('bibliography')
            ->andWhere('bibliography.userid = :userid')
            ->setParameter('userid', 2)
            ->getQuery()
            ->execute();
    }

}
