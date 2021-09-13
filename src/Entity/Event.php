<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\Timestamps;
use DateTime;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class Event
{
    use Timestamps;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var Int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     *
     * @var String
     */
    private $title;

    /**
     * @ORM\Column(type="text", length=300)
     *
     * @var String
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    private $date;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var String
     */
    private $address;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var String
     */
    private $lat;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var String
     */
    private $lon;

    /**
     * @ORM\Column(type="smallint")
     *
     * @var Int
     */
    private $maxAttendants;

    /**
     * @ORM\Column(type="smallint")
     *
     * @var Int
     */
    private $nbAttendants;

    /**
     * @ORM\Column(type="string", length=50)
     *
     * @var String
     */
    private $author;

    public function __construct()
    {
        $this->nbAttendants = 0;
    }

    /**
     * Get the value of id
     *
     * @return  Int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of title
     *
     * @return  String
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  String  $title
     *
     * @return  self
     */
    public function setTitle(String $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  String
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  String  $description
     *
     * @return  self
     */
    public function setDescription(String $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date
     *
     * @return  DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param  DateTime  $date
     *
     * @return  self
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of address
     *
     * @return  String
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @param  String  $address
     *
     * @return  self
     */
    public function setAddress(String $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of lat
     *
     * @return  String
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set the value of lat
     *
     * @param  String  $lat
     *
     * @return  self
     */
    public function setLat(String $lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get the value of lon
     *
     * @return  String
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set the value of lon
     *
     * @param  String  $lon
     *
     * @return  self
     */
    public function setLon(String $lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get the value of maxAttendants
     *
     * @return  Int
     */
    public function getMaxAttendants()
    {
        return $this->maxAttendants;
    }

    /**
     * Set the value of maxAttendants
     *
     * @param  Int  $maxAttendants
     *
     * @return  self
     */
    public function setMaxAttendants(Int $maxAttendants)
    {
        $this->maxAttendants = $maxAttendants;

        return $this;
    }

    /**
     * Get the value of author
     *
     * @return  String
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @param  String  $author
     *
     * @return  self
     */
    public function setAuthor(String $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of nbAttendants
     *
     * @return  Int
     */
    public function getNbAttendants()
    {
        return $this->nbAttendants;
    }

    /**
     * Set the value of nbAttendants
     *
     * @param  Int  $nbAttendants
     *
     * @return  self
     */
    public function setNbAttendants(Int $nbAttendants)
    {
        $this->nbAttendants = $nbAttendants;

        return $this;
    }
}
