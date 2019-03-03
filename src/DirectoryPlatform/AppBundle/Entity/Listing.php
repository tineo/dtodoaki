<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

use DirectoryPlatform\AppBundle\Entity\Rating;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\ListingRepository")
 * @ORM\Table(name="directory_platform_listings")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 * @UniqueEntity("slug")
 */
class Listing
{
	const HEADER_NONE = 'NONE';

	const HEADER_SINGLE_IMAGE = 'SINGLE_IMAGE';

    const HEADER_GALLERY = 'GALLERY';

    const HEADER_MAP = 'MAP';

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="listings")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $user;

	/**
	 * @ORM\ManyToOne(targetEntity="Category", inversedBy="listings")
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $category;

	/**
	 * @ORM\ManyToOne(targetEntity="Location", inversedBy="listings")
	 * @ORM\JoinColumn(name="location_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $location;

	/**
	 * @ORM\ManyToMany(targetEntity="Amenity", inversedBy="listings")
	 * @ORM\JoinTable(name="directory_platform_listing_amenity")
	 */
	private $amenities;

	/**
	 * @ORM\OneToMany(targetEntity="Review", mappedBy="listing")
	 */
	private $reviews;

	/**
	 * @ORM\OneToMany(targetEntity="Field", mappedBy="listing", cascade={"persist"}, orphanRemoval=true)
	 */
	private $fields;

	/**
	 * @ORM\OneToMany(targetEntity="Favorite", mappedBy="listing", cascade={"persist"}, orphanRemoval=true)
	 */
	private $favorites;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="listing", cascade={"persist"}, orphanRemoval=true)
     */
    private $images;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $name;

    /**
     * @ORM\Column(name="type", type="string")
     */
    private $header = self::HEADER_NONE;

	/**
	 * @ORM\Column(type="string", nullable=true, unique=true, length=100)
	 */
	private $slug;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $description;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $address;

	/**
	 * @ORM\Column(type="decimal", precision=7, scale=2, nullable=true)
	 */
	private $price;

	/**
	 * @ORM\Column(type="float", precision=7, scale=7, nullable=true)
	 */
	private $latitude;

	/**
	 * @ORM\Column(type="float", precision=7, scale=7, nullable=true)
	 */
	private $longitude;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $videoYoutube;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $openingHours;

	/**
	 * @ORM\Column(type="boolean", nullable=true, name="is_verified")
	 */
	private $isVerified;

	/**
	 * @ORM\Column(type="boolean", nullable=true, name="is_featured")
	 */
	private $isFeatured;

	/**
	 * @ORM\Column(type="datetime", nullable=true, name="featured_until")
	 */
	private $featuredUntil;

	/**
	 * @ORM\Column(type="boolean", nullable=true, name="is_published")
	 */
	private $isPublished;

	/**
	 * @ORM\Column(type="datetime", nullable=true, name="published_until")
	 */
	private $publishedUntil;

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
		$this->favorites = new ArrayCollection();
		$this->images = new ArrayCollection();
		$this->fields = new ArrayCollection();
	}

	public function __toString() {
		return $this->getName();
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
	 * Add image
	 *
	 * @param Image $image
	 * @return Listing
	 */
	public function addImage(Image $image)
	{
		$this->images->add($image);
		$image->setListing($this);

		return $this;
	}

	/**
	 * Remove image
	 *
	 * @param Image $image
	 */
	public function removeImage(Image $image)
	{
		$this->images->removeElement($image);
	}

	public function getImages()
	{
		return $this->images;
	}

	public function getFeaturedImage()
    {
		if (!$this->images->isEmpty()) {
			return $this->images->first();
		}

		return null;
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
	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * @param mixed $category
	 */
	public function setCategory($category)
	{
		$this->category = $category;
	}

	/**
	 * @return mixed
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * @param mixed $location
	 */
	public function setLocation($location)
	{
		$this->location = $location;
	}

	/**
	 * @return mixed
	 */
	public function getAmenities()
	{
		return $this->amenities;
	}

	/**
	 * @param mixed $amenities
	 */
	public function setAmenities($amenities)
	{
		$this->amenities = $amenities;
	}

	/**
	 * @return mixed
	 */
	public function getReviews()
	{
		return $this->reviews;
	}

	/**
	 * @param mixed $reviews
	 */
	public function setReviews($reviews)
	{
		$this->reviews = $reviews;
	}

	/**
	 * @return mixed
	 */
	public function getFields()
	{
		return $this->fields;
	}

	/**
	 * @param mixed $fields
	 */
	public function setFields($fields)
	{
		$this->fields = $fields;
	}

	/**
	 * @param Field $field
	 * @return Listing
	 */
	public function addField(Field $field)
	{
		$this->fields->add($field);
		$field->setListing($this);
		return $this;
	}

	/**
	 * @param Field $field
	 */
	public function removeField(Field $field)
	{
		$this->fields->removeElement($field);
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
	public function getHeader()
	{
		return $this->header;
	}

	/**
	 * @param mixed $header
	 */
	public function setHeader($header)
	{
		$this->header = $header;
	}

	/**
	 * @return string
	 */
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * @param $slug
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;
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
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param mixed $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}

	/**
	 * @return mixed
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price)
	{
		$this->price = $price;
	}

	/**
	 * @return mixed
	 */
	public function getVideoYoutube()
	{
		return $this->videoYoutube;
	}

	/**
	 * @param mixed $videoYoutube
	 */
	public function setVideoYoutube($videoYoutube)
	{
		$this->videoYoutube = $videoYoutube;
	}

	/**
	 * @return mixed
	 */
	public function getOpeningHours()
	{
		return $this->openingHours;
	}

	/**
	 * @param mixed $openingHours
	 */
	public function setOpeningHours($openingHours)
	{
		$this->openingHours = $openingHours;
	}

	/**
	 * @return mixed
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * @param mixed $latitude
	 */
	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
	}

	/**
	 * @return mixed
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * @param mixed $longitude
	 */
	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
	}

	/**
	 * @return mixed
	 */
	public function getCreated()
	{
		return $this->created;
	}

	/**
	 * @param mixed $created
	 */
	public function setCreated($created)
	{
		$this->created = $created;
	}

	public function isFavoriteByUser($user)
	{
		if ($user) {
			foreach ($this->favorites as $favorite) {
				if ($favorite->getUser() == $user) {
					return true;
				}
			}
		}

		return false;
	}

	/**
	 * @return mixed
	 */
	public function getFavorites()
	{
		return $this->favorites;
	}

	/**
	 * @param mixed $favorites
	 */
	public function setFavorites($favorites)
	{
		$this->favorites = $favorites;
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

	/**
	 * @return mixed
	 */
	public function getIsFeatured()
	{
		return $this->isFeatured;
	}

	/**
	 * @param mixed $isFeatured
	 */
	public function setIsFeatured($isFeatured)
	{
		$this->isFeatured = $isFeatured;
	}

	/**
	 * @return mixed
	 */
	public function getFeaturedUntil()
	{
		return $this->featuredUntil;
	}

	/**
	 * @param mixed $featuredUntil
	 */
	public function setFeaturedUntil($featuredUntil)
	{
		$this->featuredUntil = $featuredUntil;
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
	public function getPublishedUntil()
	{
		return $this->publishedUntil;
	}

	/**
	 * @param mixed $publishedUntil
	 */
	public function setPublishedUntil($publishedUntil)
	{
		$this->publishedUntil = $publishedUntil;
	}

	/**
	 * @return mixed
	 */
	public function getModified()
	{
		return $this->modified;
	}

	/**
	 * @param mixed $modified
	 */
	public function setModified($modified)
	{
		$this->modified = $modified;
	}

	public function getRatingPercent() 
	{
		if (!$this->getReviews()) {
			return null;
		}

		$total = 0;
		$count = 0;

		/** @var Review $review */
		foreach($this->getReviews() as $review) {
			if (!$review->getIsPublished()) {
				continue;
			}

			$total += $review->getRatingPercentTotal();
			$count++;
		}

		if ($count == 0) {
			return null;
		}

		return (int) ($total / $count);
	}

	public function getRating() 
	{
		if (!$this->getReviews()) {
			return null;
		}

		$total = 0;
		$count = 0;

		/** @var Review $review */
		foreach($this->getReviews() as $review) {
			if (!$review->getIsPublished()) {
				continue;
			}

			$rating = $review->getRatingTotal();

			if ($rating != null) {
				$total += $rating;
				$count++;
			}
		}

		if (0 === $count) {
			return null;
		}

		return $total / $count;
	}

	public function getRatingOverview() 
	{	
		$result = []; 

		foreach (Rating::TYPES as $type) {
			$result[$type['id']] = [
				'count' => 0,
				'percent' => 0,
				'label' => $type['label'],
			];
		}

		foreach ($this->getReviews() as $review) {
			if (!$review->getIsPublished()) {
				continue;
			}

			foreach($review->getRatings() as $rating) {				
				$result[$rating->getType()]['count'] += 1;
				$result[$rating->getType()]['percent'] += 100 / $rating->getMax() * $rating->getValue();	 

				if (1 !== $result[$rating->getType()]['count']) {
					$result[$rating->getType()]['percent'] = (int) ($result[$rating->getType()]['percent'] / 2);
				}							
			}
		}

		return $result; 
	}
}