<?php
require_once 'src/Phossa2/Validate/GumpValidator.php';

/**
 * GumpValidator test case.
 */
class GumpValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     * @var GumpValidator
     */
    private $gumpValidator;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
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

