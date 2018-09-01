<?php

namespace RobinDrost\PrismicIntegrationField;

use \RobinDrost\PrismicIntegrationField\Contracts\IntegrationField as IntegrationFieldContract;

class IntegrationField implements IntegrationFieldContract
{

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var int
     */
    protected $updatedAt;

    /**
     * @var array
     */
    protected $blob;

    /**
     * @inheritDoc
     */
    public function setId($id) : IntegrationFieldContract
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getId() : string
    {
        return (string)$this->id;
    }

    /**
     * @inheritDoc
     */
    public function setTitle(string $title) : IntegrationFieldContract
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @inheritDoc
     */
    public function setDescription(string $description) : IntegrationFieldContract
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @inheritDoc
     */
    public function setImageUrl(string $url) : IntegrationFieldContract
    {
        $this->imageUrl = $url;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getImageUrl() : string
    {
        return $this->imageUrl;
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(int $timestamp) : IntegrationFieldContract
    {
        $this->updatedAt = $timestamp;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt() : int
    {
        return $this->updatedAt;
    }

    /**
     * @inheritDoc
     */
    public function setBlob(array $data) : IntegrationFieldContract
    {
        $this->blob = $data;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getBlob() : array
    {
        return $this->blob;
    }

    /**
     * @inheritDoc
     */
    public function toArray() : array
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'image_url' => $this->getImageUrl(),
            'last_update' => $this->getUpdatedAt(),
            'blob' => $this->getBlob(),
        ];
    }

    /**
     * Helper method that return a new instance.
     *
     * @return IntegrationFieldContract
     */
    public static function create() : IntegrationFieldContract
    {
        return new static;
    }
}
