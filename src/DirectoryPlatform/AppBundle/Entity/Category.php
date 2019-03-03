<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\CategoryRepository")
 * @ORM\Table(name="directory_platform_categories")
 * @ORM\HasLifecycleCallbacks()
 */
class Category
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
	 */
	private $posts;

	/**
	 * @ORM\OneToMany(targetEntity="Listing", mappedBy="category")
	 */
	private $listings;

	/**
	 * @ORM\ManyToOne(targetEntity="Category", inversedBy="categories")
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="SET NULL")
	 */
	public $category;

	/**
	 * @ORM\OneToMany(targetEntity="Category", mappedBy="category")
	 */
	public $categories;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $name;

	/**
	 * @ORM\Column(length=255, unique=true)
	 */
	protected $slug;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $fontIcon;

	/**
	 * @ORM\Column(name="created", type="datetime")
	 */
	private $created;

	/**
	 * @ORM\Column(name="modified", type="datetime", nullable=true)
	 */
	private $modified;

	public function __construct()
	{
		$this->categories = new ArrayCollection();
	}

	public function __toString()
	{
		return $this->name;
	}

	/**
	 * @ORM\PrePersist
	 */
	public function onPrePersist()
	{
		$this->created = new \DateTime('now');
		$this->modified = new \DateTime('now');
	}

	/**
	 * @ORM\PreUpdate
	 */
	public function onPreUpdate()
	{
		$this->modified = new \DateTime('now');
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * @param Category $category
	 */
	public function setCategory(Category $category)
	{
		$this->category = $category;
	}

	/**
	 * @return mixed
	 */
	public function getCategories()
	{
		return $this->categories;
	}

	/**
	 * @param mixed $categories
	 */
	public function setCategories($categories)
	{
		$this->categories = $categories;
	}

	/**
	 * @return mixed
	 */
	public function getListings()
	{
		return $this->listings;
	}

	/**
	 * @param mixed $listings
	 */
	public function setListings($listings)
	{
		$this->listings = $listings;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * @param mixed $slug
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}

	/**
	 * @return mixed
	 */
	public function getFontIcon()
	{
		return $this->fontIcon;
	}

	/**
	 * @param mixed $fontIcon
	 */
	public function setFontIcon($fontIcon)
	{
		$this->fontIcon = $fontIcon;
	}
}