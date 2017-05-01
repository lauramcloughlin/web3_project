<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reference
 *
 * @ORM\Table(name="reference")
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReferenceRepository")
 */
class Reference
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfAuthor", type="string", length=255)
     */
    private $nameOfAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="yearPublished", type="string", length=255)
     */
    private $yearPublished;

    /**
     * @var string
     *
     * @ORM\Column(name="titleOfReference", type="string", length=255)
     */
    private $titleOfReference;

    /**
     * @var string
     *
     * @ORM\Column(name="cityPublished", type="string", length=255)
     */
    private $cityPublished;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=255)
     */
    private $publisher;

    /**
     * @var string
     *
     * @ORM\Column(name="pagesUsed", type="string", length=255)
     */
    private $pagesUsed;

    /**
     * @var string
     *
     * @ORM\Column(name="textSummary", type="text")
     */
    private $textSummary;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetimetz")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLastEdited", type="datetimetz")
     */
    private $dateLastEdited;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameOfAuthor
     *
     * @param string $nameOfAuthor
     *
     * @return Reference
     */
    public function setNameOfAuthor($nameOfAuthor)
    {
        $this->nameOfAuthor = $nameOfAuthor;

        return $this;
    }

    /**
     * Get nameOfAuthor
     *
     * @return string
     */
    public function getNameOfAuthor()
    {
        return $this->nameOfAuthor;
    }

    /**
     * Set yearPublished
     *
     * @param string $yearPublished
     *
     * @return Reference
     */
    public function setYearPublished($yearPublished)
    {
        $this->yearPublished = $yearPublished;

        return $this;
    }

    /**
     * Get yearPublished
     *
     * @return string
     */
    public function getYearPublished()
    {
        return $this->yearPublished;
    }

    /**
     * Set titleOfReference
     *
     * @param string $titleOfReference
     *
     * @return Reference
     */
    public function setTitleOfReference($titleOfReference)
    {
        $this->titleOfReference = $titleOfReference;

        return $this;
    }

    /**
     * Get titleOfReference
     *
     * @return string
     */
    public function getTitleOfReference()
    {
        return $this->titleOfReference;
    }

    /**
     * Set cityPublished
     *
     * @param string $cityPublished
     *
     * @return Reference
     */
    public function setCityPublished($cityPublished)
    {
        $this->cityPublished = $cityPublished;

        return $this;
    }

    /**
     * Get cityPublished
     *
     * @return string
     */
    public function getCityPublished()
    {
        return $this->cityPublished;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     *
     * @return Reference
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set pagesUsed
     *
     * @param string $pagesUsed
     *
     * @return Reference
     */
    public function setPagesUsed($pagesUsed)
    {
        $this->pagesUsed = $pagesUsed;

        return $this;
    }

    /**
     * Get pagesUsed
     *
     * @return string
     */
    public function getPagesUsed()
    {
        return $this->pagesUsed;
    }

    /**
     * Set textSummary
     *
     * @param string $textSummary
     *
     * @return Reference
     */
    public function setTextSummary($textSummary)
    {
        $this->textSummary = $textSummary;

        return $this;
    }

    /**
     * Get textSummary
     *
     * @return string
     */
    public function getTextSummary()
    {
        return $this->textSummary;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Reference
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Reference
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Reference
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateLastEdited
     *
     * @param \DateTime $dateLastEdited
     *
     * @return Reference
     */
    public function setDateLastEdited($dateLastEdited)
    {
        $this->dateLastEdited = $dateLastEdited;

        return $this;
    }

    /**
     * Get dateLastEdited
     *
     * @return \DateTime
     */
    public function getDateLastEdited()
    {
        return $this->dateLastEdited;
    }
}

