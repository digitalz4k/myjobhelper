<?php

namespace Dz\JobsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Board
 *
 * @ORM\Table(name="board")
 * @ORM\Entity(repositoryClass="Dz\JobsBundle\Repository\BoardRepository")
 */
class Board
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
     * @ORM\Column(name="board_name", type="string", length=255)
     */
    private $boardName;

    /**
     * @var string
     *
     * @ORM\Column(name="board_link", type="text")
     */
    private $boardLink;

    /**
     * @var string
     *
     * @ORM\Column(name="board_profile_link", type="text")
     */
    private $boardProfileLink;

    /**
     * @ORM\OneToMany(targetEntity="Dz\JobsBundle\Entity\Application", mappedBy="board")
     */
    private $applications;

    public function __construct ()
    {
        $this->applications = new ArrayCollection();
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
     * Set boardName
     *
     * @param string $boardName
     *
     * @return Board
     */
    public function setBoardName($boardName)
    {
        $this->boardName = $boardName;

        return $this;
    }

    /**
     * Get boardName
     *
     * @return string
     */
    public function getBoardName()
    {
        return $this->boardName;
    }

    /**
     * Set boardLink
     *
     * @param string $boardLink
     *
     * @return Board
     */
    public function setBoardLink($boardLink)
    {
        $this->boardLink = $boardLink;

        return $this;
    }

    /**
     * Get boardLink
     *
     * @return string
     */
    public function getBoardLink()
    {
        return $this->boardLink;
    }

    /**
     * Set boardProfileLink
     *
     * @param string $boardProfileLink
     *
     * @return Board
     */
    public function setBoardProfileLink($boardProfileLink)
    {
        $this->boardProfileLink = $boardProfileLink;

        return $this;
    }

    /**
     * Get boardProfileLink
     *
     * @return string
     */
    public function getBoardProfileLink()
    {
        return $this->boardProfileLink;
    }

    /**
     * Add application
     *
     * @param \Dz\JobsBundle\Entity\Application $application
     *
     * @return Board
     */
    public function addApplication(\Dz\JobsBundle\Entity\Application $application)
    {
        $this->applications[] = $application;

        return $this;
    }

    /**
     * Remove application
     *
     * @param \Dz\JobsBundle\Entity\Application $application
     */
    public function removeApplication(\Dz\JobsBundle\Entity\Application $application)
    {
        $this->applications->removeElement($application);
    }

    /**
     * Get applications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplications()
    {
        return $this->applications;
    }
}
