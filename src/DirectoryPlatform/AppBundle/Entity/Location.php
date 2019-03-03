<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\LocationRepository")
 * @ORM\Table(name="directory_platform_locations")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class Location
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Assert\File(mimeTypes={"image/png", "image/jpeg", "image/pjpeg"})
	 * @Vich\UploadableField(mapping="image", fileNameProperty="image_name")
	 */
	private $image;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true, name="image_name")
	 */
	private $imageName;

	/**
	 * @ORM\ManyToOne(targetEntity="Location", inversedBy="locations")
	 * @ORM\JoinColumn(name="location_id", referencedColumnName="id", onDelete="SET NULL")
	 */
	public $location;

	/**
	 * @ORM\OneToMany(targetEntity="Location", mappedBy="location")
	 */
	public $locations;

	/**
	 * @ORM\OneToMany(targetEntity="Listing", mappedBy="location")
	 */
	public $listings;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $name;

	/**
	 * @ORM\Column(length=255, unique=true)
	 */
	protected $slug;

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
		$this->listings = new ArrayCollection();
		$this->locations = new ArrayCollection();
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
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param File $image
	 */
	public function setImage(File $image)
	{
		$this->image = $image;

		if ($image) {
			$this->modified = new \DateTime('now');
		}
	}

	/**
	 * @return mixed
	 */
	public function getImageName()
	{
		return $this->imageName;
	}

	/**
	 * @param mixed $imageName
	 */
	public function setImageName($imageName)
	{
		$this->imageName = $imageName;
	}

	/**
	 * @return mixed
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * @param Location $location
	 */
	public function setLocation(Location $location)
	{
		$this->location = $location;
	}

	/**
	 * @return mixed
	 */
	public function getLocations()
	{
		return $this->locations;
	}

	/**
	 * @param mixed $locations
	 */
	public function setLocations($locations)
	{
		$this->locations = $locations;
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
}