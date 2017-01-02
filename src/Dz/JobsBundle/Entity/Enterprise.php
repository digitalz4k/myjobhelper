<?php

namespace Dz\JobsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Enterprise
 *
 * @ORM\Table(name="enterprise")
 * @ORM\Entity(repositoryClass="Dz\JobsBundle\Repository\EnterpriseRepository")
 */
class Enterprise
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
     * @ORM\Column(name="enterprise_name", type="string", length=255)
     */
    private $enterpriseName;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_logo_url", type="text")
     */
    private $enterpriseLogoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_description", type="string", length=255)
     */
    private $enterpriseDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_referent_fullname", type="string", length=255)
     */
    private $enterpriseReferentFullname;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_referent_email", type="text")
     */
    private $enterpriseReferentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_referent_phone", type="text")
     */
    private $enterpriseReferentPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_address", type="string", length=255)
     */
    private $enterpriseAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_city", type="text")
     */
    private $enterpriseCity;

    /**
     * @var int
     *
     * @ORM\Column(name="enterprise_zip", type="integer")
     */
    private $enterpriseZip;

    /**
     * @var string
     *
     * @ORM\Column(name="enterprise_country", type="text")
     */
    private $enterpriseCountry;

    /**
     * @var array
     *
     * @ORM\Column(name="enterprise_geolocation_coords", type="simple_array", nullable=true)
     */
    private $enterpriseGeolocationCoords;

    /**
    * @ORM\OneToMany(targetEntity="Dz\JobsBundle\Entity\Application", mappedBy="enterprise")
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
     * Set enterpriseName
     *
     * @param string $enterpriseName
     *
     * @return Enterprise
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->enterpriseName = $enterpriseName;

        return $this;
    }

    /**
     * Get enterpriseName
     *
     * @return string
     */
    public function getEnterpriseName()
    {
        return $this->enterpriseName;
    }

    /**
     * Set enterpriseLogoUrl
     *
     * @param string $enterpriseLogoUrl
     *
     * @return Enterprise
     */
    public function setEnterpriseLogoUrl($enterpriseLogoUrl)
    {
        $this->enterpriseLogoUrl = $enterpriseLogoUrl;

        return $this;
    }

    /**
     * Get enterpriseLogoUrl
     *
     * @return string
     */
    public function getEnterpriseLogoUrl()
    {
        return $this->enterpriseLogoUrl;
    }

    /**
     * Set enterpriseDescription
     *
     * @param string $enterpriseDescription
     *
     * @return Enterprise
     */
    public function setEnterpriseDescription($enterpriseDescription)
    {
        $this->enterpriseDescription = $enterpriseDescription;

        return $this;
    }

    /**
     * Get enterpriseDescription
     *
     * @return string
     */
    public function getEnterpriseDescription()
    {
        return $this->enterpriseDescription;
    }

    /**
     * Set enterpriseReferentFullname
     *
     * @param string $enterpriseReferentFullname
     *
     * @return Enterprise
     */
    public function setEnterpriseReferentFullname($enterpriseReferentFullname)
    {
        $this->enterpriseReferentFullname = $enterpriseReferentFullname;

        return $this;
    }

    /**
     * Get enterpriseReferentFullname
     *
     * @return string
     */
    public function getEnterpriseReferentFullname()
    {
        return $this->enterpriseReferentFullname;
    }

    /**
     * Set enterpriseReferentEmail
     *
     * @param string $enterpriseReferentEmail
     *
     * @return Enterprise
     */
    public function setEnterpriseReferentEmail($enterpriseReferentEmail)
    {
        $this->enterpriseReferentEmail = $enterpriseReferentEmail;

        return $this;
    }

    /**
     * Get enterpriseReferentEmail
     *
     * @return string
     */
    public function getEnterpriseReferentEmail()
    {
        return $this->enterpriseReferentEmail;
    }

    /**
     * Set enterpriseReferentPhone
     *
     * @param string $enterpriseReferentPhone
     *
     * @return Enterprise
     */
    public function setEnterpriseReferentPhone($enterpriseReferentPhone)
    {
        $this->enterpriseReferentPhone = $enterpriseReferentPhone;

        return $this;
    }

    /**
     * Get enterpriseReferentPhone
     *
     * @return string
     */
    public function getEnterpriseReferentPhone()
    {
        return $this->enterpriseReferentPhone;
    }

    /**
     * Set enterpriseAddress
     *
     * @param string $enterpriseAddress
     *
     * @return Enterprise
     */
    public function setEnterpriseAddress($enterpriseAddress)
    {
        $this->enterpriseAddress = $enterpriseAddress;

        return $this;
    }

    /**
     * Get enterpriseAddress
     *
     * @return string
     */
    public function getEnterpriseAddress()
    {
        return $this->enterpriseAddress;
    }

    /**
     * Set enterpriseCity
     *
     * @param string $enterpriseCity
     *
     * @return Enterprise
     */
    public function setEnterpriseCity($enterpriseCity)
    {
        $this->enterpriseCity = $enterpriseCity;

        return $this;
    }

    /**
     * Get enterpriseCity
     *
     * @return string
     */
    public function getEnterpriseCity()
    {
        return $this->enterpriseCity;
    }

    /**
     * Set enterpriseZip
     *
     * @param integer $enterpriseZip
     *
     * @return Enterprise
     */
    public function setEnterpriseZip($enterpriseZip)
    {
        $this->enterpriseZip = $enterpriseZip;

        return $this;
    }

    /**
     * Get enterpriseZip
     *
     * @return int
     */
    public function getEnterpriseZip()
    {
        return $this->enterpriseZip;
    }

    /**
     * Set enterpriseCountry
     *
     * @param string $enterpriseCountry
     *
     * @return Enterprise
     */
    public function setEnterpriseCountry($enterpriseCountry)
    {
        $this->enterpriseCountry = $enterpriseCountry;

        return $this;
    }

    /**
     * Get enterpriseCountry
     *
     * @return string
     */
    public function getEnterpriseCountry()
    {
        return $this->enterpriseCountry;
    }

    /**
     * Set enterpriseGeolocationCoords
     *
     * @param array $enterpriseGeolocationCoords
     *
     * @return Enterprise
     */
    public function setEnterpriseGeolocationCoords($enterpriseGeolocationCoords)
    {
        $this->enterpriseGeolocationCoords = $enterpriseGeolocationCoords;

        return $this;
    }

    /**
     * Get enterpriseGeolocationCoords
     *
     * @return array
     */
    public function getEnterpriseGeolocationCoords()
    {
        return $this->enterpriseGeolocationCoords;
    }

    /**
     * Add application
     *
     * @param \Dz\JobsBundle\Entity\Application $application
     *
     * @return Enterprise
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
