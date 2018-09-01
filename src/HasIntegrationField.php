<?php

namespace RobinDrost\PrismicIntegrationField;

trait HasIntegrationField
{
    public function toIntegrationField() : array
    {
        $integrationField = new IntegrationField;

        $integrationField->setId($this->id);
        $integrationField->setTitle($this->title);
        $integrationField->setDescription($this->description);
        $integrationField->setImagePath($this->image_path);
        $integrationField->setUpdatedAt($this->updated_at->timestamp);
        $integrationField->setBlob([
            'id' => $this->id,
        ]);

        return $integrationField->toArray();
    }
}
