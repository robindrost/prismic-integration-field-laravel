<?php

namespace RobinDrost\PrismicIntegrationField\Tests;

use PHPUnit\Framework\TestCase;
use RobinDrost\PrismicIntegrationField\IntegrationField;

class IntegrationFieldTest extends TestCase
{
    const TEST_ID = 'test_id';
    const TEST_TITLE = 'test_title';
    const TEST_DESCRIPTION = 'test_description';
    const TEST_IMAGE_PATH = 'test_image_path';
    const TEST_UPDATED_AT = 123456789;

    /**
     * @test
     */
    public function itCanSetAndGetAnId()
    {
        $integrationField = new IntegrationField;

        $integrationField->setId(self::TEST_ID);
        $this->assertEquals($integrationField->getId(), self::TEST_ID);
    }

    /**
     * @test
     */
    public function itCanSetAndGetATitle()
    {
        $integrationField = new IntegrationField;

        $integrationField->setTitle(self::TEST_TITLE);
        $this->assertEquals($integrationField->getTitle(), self::TEST_TITLE);
    }

    /**
     * @test
     */
    public function itCanSetAndGetADescription()
    {
        $integrationField = new IntegrationField;

        $integrationField->setDescription(self::TEST_DESCRIPTION);
        $this->assertEquals($integrationField->getDescription(), self::TEST_DESCRIPTION);
    }

    /**
     * @test
     */
    public function itCanSetAndGetAnImagePath()
    {
        $integrationField = new IntegrationField;

        $integrationField->setImagePath(self::TEST_IMAGE_PATH);
        $this->assertEquals($integrationField->getImagePath(), self::TEST_IMAGE_PATH);
    }

    /**
     * @test
     */
    public function itCanSetAndGetAUpdatedAt()
    {
        $integrationField = new IntegrationField;

        $integrationField->setUpdatedAt(self::TEST_UPDATED_AT);
        $this->assertEquals($integrationField->getUpdatedAt(), self::TEST_UPDATED_AT);
    }

    /**
     * @test
     */
    public function itCanSetAndGetABlob()
    {
        $integrationField = new IntegrationField;

        $integrationField->setBlob([]);
        $this->assertEquals($integrationField->getBlob(), []);
    }
}
