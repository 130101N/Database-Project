<?php

namespace Proxies\__CG__\ApplicantBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class School extends \ApplicantBundle\Entity\School implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'name', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'address', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'totStudents', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'totVacancies', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'startDate', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'id', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'applicant');
        }

        return array('__isInitialized__', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'name', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'address', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'totStudents', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'totVacancies', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'startDate', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'id', '' . "\0" . 'ApplicantBundle\\Entity\\School' . "\0" . 'applicant');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (School $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotStudents($totStudents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotStudents', array($totStudents));

        return parent::setTotStudents($totStudents);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotStudents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotStudents', array());

        return parent::getTotStudents();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotVacancies($totVacancies)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotVacancies', array($totVacancies));

        return parent::setTotVacancies($totVacancies);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotVacancies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotVacancies', array());

        return parent::getTotVacancies();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($startDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', array($startDate));

        return parent::setStartDate($startDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', array());

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addApplicant(\ApplicantBundle\Entity\Applicant $applicant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addApplicant', array($applicant));

        return parent::addApplicant($applicant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeApplicant(\ApplicantBundle\Entity\Applicant $applicant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeApplicant', array($applicant));

        return parent::removeApplicant($applicant);
    }

    /**
     * {@inheritDoc}
     */
    public function getApplicant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApplicant', array());

        return parent::getApplicant();
    }

}
