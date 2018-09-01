<?php

namespace RobinDrost\PrismicIntegrationField\Tests;

use PHPUnit\Framework\TestCase;
use RobinDrost\PrismicIntegrationField\HasIntegrationField;
use RobinDrost\PrismicIntegrationField\Contracts\ModelToIntegrationField;
use RobinDrost\PrismicIntegrationField\IntegrationFieldCollection;

class IntegrationFieldCollectionTest extends TestCase
{
    /**
     * @test
     */
    public function itCanTransformACollectionToAnArrayOfIntegrationFields()
    {
        $stub = new class () implements ModelToIntegrationField
        {
            use HasIntegrationField;

            public $id = 'test';
            public $title = 'test';
            public $description = 'test';
            public $image_url = 'test';
            public $updated_at;

            public function __construct()
            {
                $this->updated_at = (object)[
                    'timestamp' => 1234567890,
                ];
            }

            public function newCollection()
            {
                return new IntegrationFieldCollection([$this]);
            }
        };

        $arr = $stub->newCollection()->toArray();

        $this->assertCount(1, $arr);
    }
}
