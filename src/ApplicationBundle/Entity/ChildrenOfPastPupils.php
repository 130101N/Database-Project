<?php

namespace ApplicationBundle\Entity;

/**
 * ChildrenOfPastPupils
 */
class ChildrenOfPastPupils
{
    /**
     * @var \DateTime
     */
    private $fromYear;

    /**
     * @var \DateTime
     */
    private $toYear;

    /**
     * @var integer
     */
    private $fromGrade;

    /**
     * @var integer
     */
    private $toGrade;

    /**
     * @var string
     */
    private $nameInFull;

    /**
     * @var string
     */
    private $nameInInitial;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ApplicationBundle\Entity\Applicant
     */
    private $applicant;

    /**
     * @var \ApplicationBundle\Entity\School
     */
    private $school;


    /**
     * Set fromYear
     *
     * @param \DateTime $fromYear
     *
     * @return ChildrenOfPastPupils
     */
    public function setFromYear($fromYear)
    {
        $this->fromYear = $fromYear;

        return $this;
    }

    /**
     * Get fromYear
     *
     * @return \DateTime
     */
    public function getFromYear()
    {
        return $this->fromYear;
    }

    /**
     * Set toYear
     *
     * @param \DateTime $toYear
     *
     * @return ChildrenOfPastPupils
     */
    public function setToYear($toYear)
    {
        $this->toYear = $toYear;

        return $this;
    }

    /**
     * Get toYear
     *
     * @return \DateTime
     */
    public function getToYear()
    {
        return $this->toYear;
    }

    /**
     * Set fromGrade
     *
     * @param integer $fromGrade
     *
     * @return ChildrenOfPastPupils
     */
    public function setFromGrade($fromGrade)
    {
        $this->fromGrade = $fromGrade;

        return $this;
    }

    /**
     * Get fromGrade
     *
     * @return integer
     */
    public function getFromGrade()
    {
        return $this->fromGrade;
    }

    /**
     * Set toGrade
     *
     * @param integer $toGrade
     *
     * @return ChildrenOfPastPupils
     */
    public function setToGrade($toGrade)
    {
        $this->toGrade = $toGrade;

        return $this;
    }

    /**
     * Get toGrade
     *
     * @return integer
     */
    public function getToGrade()
    {
        return $this->toGrade;
    }

    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return ChildrenOfPastPupils
     */
    public function setNameInFull($nameInFull)
    {
        $this->nameInFull = $nameInFull;

        return $this;
    }

    /**
     * Get nameInFull
     *
     * @return string
     */
    public function getNameInFull()
    {
        return $this->nameInFull;
    }

    /**
     * Set nameInInitial
     *
     * @param string $nameInInitial
     *
     * @return ChildrenOfPastPupils
     */
    public function setNameInInitial($nameInInitial)
    {
        $this->nameInInitial = $nameInInitial;

        return $this;
    }

    /**
     * Get nameInInitial
     *
     * @return string
     */
    public function getNameInInitial()
    {
        return $this->nameInInitial;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return ChildrenOfPastPupils
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @param \ApplicationBundle\Entity\Applicant $applicant
     *
     * @return ChildrenOfPastPupils
     */
    public function setApplicant(\ApplicationBundle\Entity\Applicant $applicant)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \ApplicationBundle\Entity\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * Set school
     *
     * @param \ApplicationBundle\Entity\School $school
     *
     * @return ChildrenOfPastPupils
     */
    public function setSchool(\ApplicationBundle\Entity\School $school = null)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \ApplicationBundle\Entity\School
     */
    public function getSchool()
    {
        return $this->school;
    }
}
