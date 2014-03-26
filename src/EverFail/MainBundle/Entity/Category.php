<?php

namespace EverFail\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \EverFail\MainBundle\Controller\CategoryController;

/**
 * Category
 */
class Category {

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
	private $id;

	/**
	 * Set categoryName
	 *
	 * @param string $categoryName
	 * @return Category
	 */
	public function setCategoryName($categoryName) {
		$this->categoryName = $categoryName;

		return $this;
	}

	/**
	 * Get categoryName
	 *
	 * @return string 
	 */
	public function getCategoryName() {
		return $this->categoryName;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return Category
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string 
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set minStock
	 *
	 * @param integer $minStock
	 * @return Category
	 */
	public function setMinStock($minStock) {
		$this->minStock = $minStock;

		return $this;
	}

	/**
	 * Get minStock
	 *
	 * @return integer 
	 */
	public function getMinStock() {
		return $this->minStock;
	}

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get string representation
	 *
	 * @return string
	 */
	public function __toString() {
		return "$this->categoryName";
	}

	/**
	 * Get stock balance of this category
	 *
	 * @return integer
	 */
	public function getStock() {
		return CategoryController::getStock($this);
	}

}
