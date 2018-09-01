<?php

namespace RobinDrost\PrismicIntegrationField\Contracts;

interface ModelToIntegrationField
{
    /**
     * Return an array with the required integration field values.
     *
     * @return array
     */
    public function toIntegrationField() : IntegrationField;
}
