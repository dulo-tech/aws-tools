<?php
namespace XDT\AWS\Tools\Tests\Amazon\CloudWatch;

use XDT\AWS\Tools\CloudWatch\Units;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass XDT\AWS\Tools\CloudWatch\Units
 */
class UnitsTest
    extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::validate
     */
    public function testValidate()
    {
        $this->assertTrue(
            Units::validate(Units::NONE)
        );
        $this->assertTrue(
            Units::validate(Units::COUNT)
        );
    }

    /**
     * @covers ::validate
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInvalidArgument()
    {
        Units::validate("test");
    }
}