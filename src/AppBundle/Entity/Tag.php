<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="tagName", type="string", length=255)
     */
    private $tagName;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="noOfVotes", type="integer", nullable=true)
     */
    private $noOfVotes;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tag")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="Reference", mappedBy="referenceTags")
     */
    private $tagReferences;

    public function __construct()
    {
        $this->tagReferences = new ArrayCollection();
    }

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
     * Set tagName
     *
     * @param string $tagName
     *
     * @return tag
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }

    /**
     * Get tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return tag
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
     * Set noOfVotes
     *
     * @param integer $noOfVotes
     *
     * @return tag
     */
    public function setNoOfVotes($noOfVotes)
    {
        $this->noOfVotes = $noOfVotes;

        return $this;
    }

    /**
     * Get noOfVotes
     *
     * @return int
     */
    public function getNoOfVotes()
    {
        return $this->noOfVotes;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return ArrayCollection|Reference[]
     */
    public function getTagReferences()
    {
        return $this->tagReferences;
    }

}

