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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
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
    public function setDescription(string $description)
    {
        $this->description = $description;
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
    public function setImageUrl(string $url)
    {
        $this->imageUrl = $url;
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
    public function setUpdatedAt(int $timestamp)
    {
        $this->updatedAt = $timestamp;
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
    public function setBlob(array $data)
    {
        $this->blob = $data;
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
            'updated_at' => $this->getUpdatedAt(),
            'blob' => $this->getBlob(),
        ];
    }
}
