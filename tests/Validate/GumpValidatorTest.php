<?php

namespace Phossa2\Validate;

/**
 * GumpValidator test case.
 */
class GumpValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var GumpValidator
     */
    private $object;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new GumpValidator();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * Tests GumpValidator->validate()
     */
    public function testValidate()
    {
        $this->assertTrue(true);
    }

    /**
     * Tests GumpValidator->filter()
     */
    public function testFilter()
    {
    }

    /**
     * Tests GumpValidator->getError()
     */
    public function testGetError()
    {
    }
}

