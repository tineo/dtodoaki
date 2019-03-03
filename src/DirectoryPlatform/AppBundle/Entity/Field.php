<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\FieldRepository")
 * @ORM\Table(name="directory_platform_fields")
 * @ORM\HasLifecycleCallbacks()
 */
class Field
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Listing", inversedBy="fields")
	 * @ORM\JoinColumn(name="listing_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $listing;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $dataKey;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	private $dataValue;

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
	 * @return Listing
	 */
	public function getListing()
	{
		return $this->listing;
	}

	/**
	 * @param Listing $listing
	 */
	public function setListing($listing)
	{
		$this->listing = $listing;
	}

	/**
	 * @return mixed
	 */
	public function getDataKey()
	{
		return $this->dataKey;
	}

	/**
	 * @param mixed $dataKey
	 */
	public function setDataKey($dataKey)
	{
		$this->dataKey = $dataKey;
	}

	/**
	 * @return mixed
	 */
	public function getDataValue()
	{
		return $this->dataValue;
	}

	/**
	 * @param mixed $dataValue
	 */
	public function setDataValue($dataValue)
	{
		$this->dataValue = $dataValue;
	}

	/**
	 * @param mixed $created
	 */
	public function setCreated($created)
	{
		$this->created = $created;
	}
	/**
	 * @return mixed
	 */
	public function getCreated()
	{
		return $this->created;
	}

	/**
	 * @param mixed $modified
	 */
	public function setModified($modified)
	{
		$this->modified = $modified;
	}

	/**
	 * @return mixed
	 */
	public function getModified()
	{
		return $this->modified;
	}
}