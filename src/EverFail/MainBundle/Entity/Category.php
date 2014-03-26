<?php

namespace EverFail\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var string
     */
    private $categoryName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $minStock;

    /**
     * @var integer
     */
   // private $stock;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set categoryName
     *
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
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
     * Set minStock
     *
     * @param integer $minStock
     * @return Category
     */
    public function setMinStock($minStock)
    {
        $this->minStock = $minStock;

        return $this;
    }

    /**
     * Get minStock
     *
     * @return integer 
     */
    public function getMinStock()
    {
        return $this->minStock;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Category
     */
//    public function setStock($stock)
//    {
//        $this->stock = $stock;
//
//        return $this;
//    }

    /**
     * Get stock
     *
     * @return integer 
     */
//    public function getStock()
//    {
//        return $this->stock;
//    }

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
     * String representation of Category
     *
     * @return string
     */
	public function __toString()
	{
		return "$this->categoryName";
	}
}
