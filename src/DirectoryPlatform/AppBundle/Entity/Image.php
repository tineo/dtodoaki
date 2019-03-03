<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\ImageRepository")
 * @ORM\Table(name="directory_platform_images")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class Image
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Listing", inversedBy="images")
	 * @ORM\JoinColumn(name="listing_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $listing;

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
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param mixed $image
	 */
	public function setImage(File $image)
	{
		$this->image = $image;

		if ($image) {
			$this->modified = new \DateTime('now');
		}

		return $this;
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