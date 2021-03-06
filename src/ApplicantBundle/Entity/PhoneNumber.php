<?php

namespace ApplicantBundle\Entity;

/**
 * PhoneNumber
 */
class PhoneNumber
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $telNo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ApplicantBundle\Entity\Applicant
     */
    private $applicant;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return PhoneNumber
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set telNo
     *
     * @param string $telNo
     *
     * @return PhoneNumber
     */
    public function setTelNo($telNo)
    {
        $this->telNo = $telNo;

        return $this;
    }

    /**
     * Get telNo
     *
     * @return string
     */
    public function getTelNo()
    {
        return $this->telNo;
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
     * Set applicant
     *
     * @param \ApplicantBundle\Entity\Applicant $applicant
     *
     * @return PhoneNumber
     */
    public function setApplicant(\ApplicantBundle\Entity\Applicant $applicant = null)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \ApplicantBundle\Entity\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }
}
