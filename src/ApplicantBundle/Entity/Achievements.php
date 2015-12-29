<?php

namespace ApplicantBundle\Entity;

/**
 * Achievements
 */
class Achievements
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ApplicantBundle\Entity\ChildrenOfPastPupils
     */
    private $childrenOfPastPupils;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Achievements
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
     * Set description
     *
     * @param string $description
     *
     * @return Achievements
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set childrenOfPastPupils
     *
     * @param \ApplicantBundle\Entity\ChildrenOfPastPupils $childrenOfPastPupils
     *
     * @return Achievements
     */
    public function setChildrenOfPastPupils(\ApplicantBundle\Entity\ChildrenOfPastPupils $childrenOfPastPupils = null)
    {
        $this->childrenOfPastPupils = $childrenOfPastPupils;

        return $this;
    }

    /**
     * Get childrenOfPastPupils
     *
     * @return \ApplicantBundle\Entity\ChildrenOfPastPupils
     */
    public function getChildrenOfPastPupils()
    {
        return $this->childrenOfPastPupils;
    }
}
