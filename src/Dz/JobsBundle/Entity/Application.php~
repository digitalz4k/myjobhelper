<?php

namespace Dz\JobsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="Dz\JobsBundle\Repository\ApplicationRepository")
 */
class Application
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
     * @ORM\Column(name="application_job", type="string", length=255)
     */
    private $applicationJob;

    /**
     * @var string
     *
     * @ORM\Column(name="application_description", type="string", length=255)
     */
    private $applicationDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="application_link", type="text")
     */
    private $applicationLink;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="application_date", type="datetime")
     */
    private $applicationDate;

    /**
     * @ORM\Column(name="application_status", type="string", columnDefinition="enum('en attente', 'validée', 'refusée')")
     */
    private $applicationStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="application_salary", type="integer")
     */
    private $applicationSalary;

    /**
     * @var int
     *
     * @ORM\Column(name="application_experience_required", type="integer")
     */
    private $applicationExperienceRequired;

    /**
     * @var string
     *
     * @ORM\Column(name="application_type", type="string", length=255)
     */
    private $applicationType;

    /**
     * @var string
     *
     * @ORM\Column(name="application_contract", type="string", columnDefinition="enum('CDI', 'Freelance', 'CDD', 'Stage', 'Interim')")
     */
    private $applicationContract;

    /**
     * @var bool
     *
     * @ORM\Column(name="application_accept_disabled", type="boolean")
     */
    private $applicationAcceptDisabled;

    /**
     * @var string
     *
     * @ORM\Column(name="application_tags", type="string", length=255)
     */
    private $applicationTags;

    /**
     * @ORM\ManyToOne(targetEntity="Dz\JobsBundle\Entity\Board", inversedBy="board")
     * @ORM\JoinColumn(name="application_from", referencedColumnName="id")
     */
    private $applicationFrom;

    /**
     * @ORM\ManyToOne(targetEntity="Dz\JobsBundle\Entity\Enterprise", inversedBy="applications")
     * @ORM\JoinColumn(name="application_enterprise_id", referencedColumnName="id")
     */
    private $applicationEnterpriseId;


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
     * Set applicationJob
     *
     * @param string $applicationJob
     *
     * @return Application
     */
    public function setApplicationJob($applicationJob)
    {
        $this->applicationJob = $applicationJob;

        return $this;
    }

    /**
     * Get applicationJob
     *
     * @return string
     */
    public function getApplicationJob()
    {
        return $this->applicationJob;
    }

    /**
     * Set applicationDescription
     *
     * @param string $applicationDescription
     *
     * @return Application
     */
    public function setApplicationDescription($applicationDescription)
    {
        $this->applicationDescription = $applicationDescription;

        return $this;
    }

    /**
     * Get applicationDescription
     *
     * @return string
     */
    public function getApplicationDescription()
    {
        return $this->applicationDescription;
    }

    /**
     * Set applicationLink
     *
     * @param string $applicationLink
     *
     * @return Application
     */
    public function setApplicationLink($applicationLink)
    {
        $this->applicationLink = $applicationLink;

        return $this;
    }

    /**
     * Get applicationLink
     *
     * @return string
     */
    public function getApplicationLink()
    {
        return $this->applicationLink;
    }

    /**
     * Set applicationDate
     *
     * @param \DateTime $applicationDate
     *
     * @return Application
     */
    public function setApplicationDate($applicationDate)
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    /**
     * Get applicationDate
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * Set applicationStatus
     *
     * @param string $applicationStatus
     *
     * @return Application
     */
    public function setApplicationStatus($applicationStatus)
    {
        $this->applicationStatus = $applicationStatus;

        return $this;
    }

    /**
     * Get applicationStatus
     *
     * @return string
     */
    public function getApplicationStatus()
    {
        return $this->applicationStatus;
    }

    /**
     * Set applicationSalary
     *
     * @param integer $applicationSalary
     *
     * @return Application
     */
    public function setApplicationSalary($applicationSalary)
    {
        $this->applicationSalary = $applicationSalary;

        return $this;
    }

    /**
     * Get applicationSalary
     *
     * @return int
     */
    public function getApplicationSalary()
    {
        return $this->applicationSalary;
    }

    /**
     * Set applicationExperienceRequired
     *
     * @param integer $applicationExperienceRequired
     *
     * @return Application
     */
    public function setApplicationExperienceRequired($applicationExperienceRequired)
    {
        $this->applicationExperienceRequired = $applicationExperienceRequired;

        return $this;
    }

    /**
     * Get applicationExperienceRequired
     *
     * @return int
     */
    public function getApplicationExperienceRequired()
    {
        return $this->applicationExperienceRequired;
    }

    /**
     * Set applicationType
     *
     * @param string $applicationType
     *
     * @return Application
     */
    public function setApplicationType($applicationType)
    {
        $this->applicationType = $applicationType;

        return $this;
    }

    /**
     * Get applicationType
     *
     * @return string
     */
    public function getApplicationType()
    {
        return $this->applicationType;
    }

    /**
     * Set applicationContract
     *
     * @param string $applicationContract
     *
     * @return Application
     */
    public function setApplicationContract($applicationContract)
    {
        $this->applicationContract = $applicationContract;

        return $this;
    }

    /**
     * Get applicationContract
     *
     * @return string
     */
    public function getApplicationContract()
    {
        return $this->applicationContract;
    }

    /**
     * Set applicationAcceptDisabled
     *
     * @param boolean $applicationAcceptDisabled
     *
     * @return Application
     */
    public function setApplicationAcceptDisabled($applicationAcceptDisabled)
    {
        $this->applicationAcceptDisabled = $applicationAcceptDisabled;

        return $this;
    }

    /**
     * Get applicationAcceptDisabled
     *
     * @return bool
     */
    public function getApplicationAcceptDisabled()
    {
        return $this->applicationAcceptDisabled;
    }

    /**
     * Set applicationTags
     *
     * @param string $applicationTags
     *
     * @return Application
     */
    public function setApplicationTags($applicationTags)
    {
        $this->applicationTags = $applicationTags;

        return $this;
    }

    /**
     * Get applicationTags
     *
     * @return string
     */
    public function getApplicationTags()
    {
        return $this->applicationTags;
    }

    /**
     * Set applicationFrom
     *
     * @param integer $applicationFrom
     *
     * @return Application
     */
    public function setApplicationFrom($applicationFrom)
    {
        $this->applicationFrom = $applicationFrom;

        return $this;
    }

    /**
     * Get applicationFrom
     *
     * @return int
     */
    public function getApplicationFrom()
    {
        return $this->applicationFrom;
    }

    /**
     * Get applicationEnterpriseId
     *
     * @return int
     */
    public function getapplicationEnterpriseId()
    {
        return $this->applicationEnterpriseId;
    }

    /**
     * Set applicationEnterpriseId
     *
     * @param integer $applicationEnterpriseId
     *
     * @return Application
     */
    public function setapplicationEnterpriseId($applicationEnterpriseId)
    {
        $this->applicationEnterpriseId = $applicationEnterpriseId;

        return $this;
    }
}
