<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\ClaimRepository")
 * @ORM\Table(name="directory_platform_claims")
 * @ORM\HasLifecycleCallbacks()
 */
class Claim
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="claims")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $user;

	/**
	 * @ORM\ManyToOne(targetEntity="Listing", inversedBy="claims")
	 * @ORM\JoinColumn(name="listing_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $listing;

	/**
	 * @ORM\Column(type="text")
	 */
	private $message;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true, name="is_approved")
	 */
	private $isApproved;

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
	 * @param User $user
	 */
	public function setUser(User $user)
	{
		$this->user = $user;
	}

	/**
	 * @return mixed
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * @param mixed $message
	 */
	public function setMessage($message)
	{
		$this->message = $message;
	}
	
	/**
	 * @return mixed
	 */
	public function getListing()
	{
		return $this->listing;
	}

	/**
	 * @param Listing $listing
	 */
	public function setListing(Listing $listing)
	{
		$this->listing = $listing;
	}

	/**
	 * @return mixed
	 */
	public function getIsApproved()
	{
		return $this->isApproved;
	}

	/**
	 * @param $isApproved
	 */
	public function setIsApproved($isApproved)
	{
		$this->isApproved = $isApproved;
	}	
}