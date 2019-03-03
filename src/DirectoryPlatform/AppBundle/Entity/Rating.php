<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\RatingRepository")
 * @ORM\Table(name="directory_platform_ratings")
 * @ORM\HasLifecycleCallbacks()
 */
class Rating
{
	const TYPE_OVERVIEW = 'OVERVIEW';

	const TYPE_SERVICE = 'SERVICE';

	const TYPE_PRICING = 'PRICING';

	const TYPES = [
		[
			'id' => self::TYPE_OVERVIEW,
			'label' => 'Overview',
			'max' => 5,
		],
		[
			'id' => self::TYPE_SERVICE,
			'label' => 'Service',
			'max' => 5,
		],
		[
			'id' => self::TYPE_PRICING,
			'label' => 'Pricing',
			'max' => 5,
		],
	];

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Review", inversedBy="ratings")
	 * @ORM\JoinColumn(name="review_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $review;

	/**
	 * @ORM\Column(type="text")
	 */
	private $type;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $value;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $max;

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
	public function getReview()
	{
		return $this->review;
	}

	/**
	 * @param Review $review
	 */
	public function setReview(Review $review)
	{
		$this->review = $review;
	}

	/**
	 * @return mixed
	 */
	public function getMax()
	{
		return $this->max;
	}

	/**
	 * @param mixed $max
	 */
	public function setMax($max)
	{
		$this->max = $max;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}

	/**
	 * @return mixed
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	public function getLabel() {
		foreach(self::TYPES as $type) {
			if ($this->getType() == $type['id']) {
				return $type['label'];
			}
		}
	}
}