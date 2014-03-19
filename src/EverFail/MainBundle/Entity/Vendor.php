<?php

namespace EverFail\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendor
 */
class Vendor
{
    /**
     * @var string
     */
    private $vendorName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set vendorName
     *
     * @param string $vendorName
     * @return Vendor
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    /**
     * Get vendorName
     *
     * @return string 
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Vendor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * String representation of Vendor
     *
     * @return string
     */
	public function __toString()
	{
		return $this->vendorName;
	}
}
