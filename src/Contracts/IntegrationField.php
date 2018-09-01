<?php

namespace RobinDrost\PrismicIntegrationField\Contracts;

interface IntegrationField
{
    /**
     * @param mixed $id
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param string $title
     */
    public function setTitle(string $title);

    /**
     * @return string
     */
    public function getTitle() : string;

    /**
     * @param string $description
     */
    public function setDescription(string $description);

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $path
     */
    public function setImagePath(string $path);

    /**
     * @return string
     */
    public function getImagePath() : string;

    /**
     * @param int $timestamp
     */
    public function setUpdatedAt(int $timestamp);

    /**
     * @return int
     */
    public function getUpdatedAt() : int;

    /**
     * Define an array of fields to be returned from Prismic.
     *
     * @param array $data
     */
    public function setBlob(array $data);

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
