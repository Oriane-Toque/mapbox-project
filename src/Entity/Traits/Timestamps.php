<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;

trait Timestamps
{

    /**
     * @ORM\Column(type="datetime_immutable", options={"default": "CURRENT_TIMESTAMP"})
     *
     * @var DateTimeImmutable
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable", options={"default": "CURRENT_TIMESTAMP"}, nullable=true)
     *
     * @var DateTimeImmutable
     */
    private $updatedAt;

    /**
     * Get the value of createdAt
     *
     * @return  DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param  DateTimeImmutable  $createdAt
     *
     * @return  self
     */
    public function setCreatedAt(DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of updatedAt
     *
     * @return  DateTimeImmutable
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param  DateTimeImmutable  $updatedAt
     *
     * @return  self
     */
    public function setUpdatedAt(DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @ORM\PrePersist()
     */
    public function persistTimestamps()
    {

        $this->createdAt = new DateTimeImmutable();
    }

    /**
     * @ORM\PreUpdate()
     */
    public function updateTimestamps()
    {

        $this->updatedAt = new DateTimeImmutable();
    }
}
