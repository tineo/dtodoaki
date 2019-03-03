<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\ReviewRepository")
 * @ORM\Table(name="directory_platform_reviews")
 * @ORM\HasLifecycleCallbacks()
 */
class Review
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="reviews")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $user;

	/**
	 * @ORM\ManyToOne(targetEntity="Listing", inversedBy="reviews")
	 * @ORM\JoinColumn(name="listing_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $listing;

	/**
	 * @ORM\OneToMany(targetEntity="Rating", mappedBy="review")
	 */
	private $ratings;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $name;

	/**
	 * @ORM\Column(type="text")
	 */
	private $description;

	/**
	 * @ORM\Column(type="boolean", nullable=true, name="is_published")
	 */
	private $isPublished;

	/**
	 * @ORM\Column(name="created", type="datetime")
	 */
	private $created;

	/**
	 * @ORM\Column(name="modified", type="datetime", nullable=true)
	 */
	private $modified;

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
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param mixed $user
	 */
	public function setUser($user)
	{
		$this->user = $user;
	}

	/**
	 * @return mixed
	 */
	public function getListing()
	{
		return $this->listing;
	}

	/**
	 * @param mixed $listing
	 */
	public function setListing($listing)
	{
		$this->listing = $listing;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->getListing()->getName();
	}

	public function getAuthor() {
		if ($this->getUser()) {
			return $this->getUser()->getDisplayName();
		}

		return $this->getName();
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
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getRatings()
	{
		return $this->ratings;
	}

	/**
	 * @param mixed $ratings
	 */
	public function setRatings($ratings)
	{
		$this->ratings = $ratings;
	}

	/**
	 * @return mixed
	 */
	public function getIsPublished()
	{
		return $this->isPublished;
	}

	/**
	 * @param mixed $isPublished
	 */
	public function setIsPublished($isPublished)
	{
		$this->isPublished = $isPublished;
	}

	/**
	 * @return mixed
	 */
	public function getCreated()
	{
		return $this->created;
	}

	public function getRatingPercentTotal() 
	{
		if (!$this->getRatings()) {
			return null;
		}

		$max = 0;
		$total = 0;

		/** @var Rating $rating */
		foreach ($this->getRatings() as $rating) {
			$total += 100 / $rating->getMax() * $rating->getValue();
		}

		return $total / count($this->getRatings());		
	}

	public function getRatingTotal() 
	{
		if (!$this->getRatings()) {
			return null;
		}

		$max = 0;
		$total = 0;
		$base = 5;

		/** @var Rating $rating */
		foreach ($this->getRatings() as $rating) {
			$max += $rating->getMax();
			$total += $rating->getValue();
		}

		$ratio = ($max / $base);

		if ($ratio == 0) {
			return null;
		}

		return $total / $ratio;
	}
}