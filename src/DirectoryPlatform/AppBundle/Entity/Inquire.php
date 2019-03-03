<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\InquireRepository")
 * @ORM\Table(name="directory_platform_inquires")
 * @ORM\HasLifecycleCallbacks()
 */
class Inquire
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="inquires")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
	 */
	private $user;	

	/**
	 * @ORM\ManyToOne(targetEntity="Listing", inversedBy="inquires")
	 * @ORM\JoinColumn(name="listing_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $listing;		

	/**
	 * @ORM\Column(type="text")
	 */
	private $name;	

	/**
	 * @ORM\Column(type="text")
	 */
	private $email;

	/**
	 * @ORM\Column(type="text")
	 */
	private $message;	

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
	 * @return User
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
	 * @return Listing
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
	public function getAuthorName()
	{		
		if (!empty($this->name)) {
			return $this->name;
		}

		return $this->getUser()->getDisplayName();		
	}

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
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param mixed $name
	 */
	public function setEmail($email)
	{
		$this->email = $email;
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

	public function getCreated() 
	{
		return $this->created;
	}
}