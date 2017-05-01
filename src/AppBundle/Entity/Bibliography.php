<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bibliography
 *
 * @ORM\Table(name="bibliography")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BibliographyRepository")
 */
class Bibliography
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
     * @ORM\Column(name="bibliographyName", type="string", length=255)
     */
    private $bibliographyName;

    /**
     * @var string
     *
     * @ORM\Column(name="textSummary", type="text")
     */
    private $textSummary;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;


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
     * Set bibliographyName
     *
     * @param string $bibliographyName
     *
     * @return Bibliography
     */
    public function setBibliographyName($bibliographyName)
    {
        $this->bibliographyName = $bibliographyName;

        return $this;
    }

    /**
     * Get bibliographyName
     *
     * @return string
     */
    public function getBibliographyName()
    {
        return $this->bibliographyName;
    }

    /**
     * Set textSummary
     *
     * @param string $textSummary
     *
     * @return Bibliography
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
     * Set status
     *
     * @param string $status
     *
     * @return Bibliography
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Bibliography
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
}

