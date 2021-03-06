<?php

namespace RobinDrost\PrismicIntegrationField\Contracts;

use Illuminate\Contracts\Support\Arrayable;

interface IntegrationField extends Arrayable
{
    /**
     * @param mixed $id
     */
    public function setId($id) : IntegrationField;

    /**
     * @return mixed
     */
    public function getId() : string;

    /**
     * @param string $title
     */
    public function setTitle(string $title) : IntegrationField;

    /**
     * @return string
     */
    public function getTitle() : string;

    /**
     * @param string $description
     */
    public function setDescription(string $description) : IntegrationField;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $url
     */
    public function setImageUrl(string $url) : IntegrationField;

    /**
     * @return string
     */
    public function getImageUrl() : string;

    /**
     * @param int $timestamp
     */
    public function setUpdatedAt(int $timestamp) : IntegrationField;

    /**
     * @return int
     */
    public function getUpdatedAt() : int;

    /**
     * Define an array of fields to be returned from Prismic.
     *
     * @param array $data
     */
    public function setBlob(array $data) : IntegrationField;

    /**
     * Get an array of fields defined to be returned from Prismic.
     *
     * @return array
     */
    public function getBlob() : array;

    /**
     * Return the integration field as an array.
     *
     * @return array
     */
    public function toArray() : array;
}
