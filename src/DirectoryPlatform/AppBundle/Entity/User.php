<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\UserRepository")
 * @ORM\Table(name="directory_platform_users")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToMany(targetEntity="Post", mappedBy="user")
	 */
	private $posts;

	/**
	 * @ORM\OneToMany(targetEntity="Listing", mappedBy="user")
	 */
	private $listings;

	/**
	 * @ORM\OneToMany(targetEntity="Review", mappedBy="user")
	 */
	private $reviews;

	/**
	 * @ORM\OneToMany(targetEntity="Favorite", mappedBy="user")
	 */
	private $favorites;

	/**
	 * @ORM\OneToOne(targetEntity="Profile", mappedBy="user")
	 **/
	private $profile;

	/**
	 * @ORM\Column(type="boolean", nullable=true, name="is_verified")
	 */
	private $isVerified;

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

	public function getUsername() {
		return $this->username;
	}

	public function getDisplayName() {
		if ($this->getProfile()) {
			if (!empty($this->getProfile()->getFirstName()) && !empty($this->getProfile()->getLastName())) {
				return $this->getProfile()->getFirstName() . ' ' . $this->getProfile()->getLastName();
			}
		}

		return $this->getUsername();
	}

	/**
	 * @return mixed
	 */
	public function getProfile()
	{
		return $this->profile;
	}

	/**
	 * @param mixed $profile
	 */
	public function setProfile($profile)
	{
		$this->profile = $profile;
	}

	public function getListings()
    {
	    return $this->listings;
    }

    public function setListings($listings)
    {
        $this->listings = $listings;
    }

	/**
	 * @return mixed
	 */
	public function getIsVerified()
	{
		return $this->isVerified;
	}

	/**
	 * @param mixed $isVerified
	 */
	public function setIsVerified($isVerified)
	{
		$this->isVerified = $isVerified;
	}
}