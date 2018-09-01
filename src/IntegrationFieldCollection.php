<?php

namespace RobinDrost\PrismicIntegrationField;

use Illuminate\Support\Collection;
use RobinDrost\PrismicIntegrationField\Contracts\ModelToIntegrationField;

class IntegrationFieldCollection extends Collection
{
    /**
     * Return the collection as an array of items transformed to
     * integration fields.
     *
     * @return void
     */
    public function toArray()
    {
        return array_map(function (ModelToIntegrationField $model) {
            return $model->toIntegrationField()->toArray();
        }, $this->sortByDesc('updated_at')->items);
    }
}
