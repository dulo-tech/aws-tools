<?php
namespace XDT\AWS\Tools\Tests\Amazon;

use XDT\AWS\Tools\Regions;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass XDT\AWS\Tools\Regions
 */
class RegionsTest
    extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::validate
     */
    public function testValidate()
    {
        $this->assertTrue(
            Regions::validate(Regions::USEast1)
        );
        $this->assertTrue(
            Regions::validate(Regions::APNorthEast1)
        );
    }

    /**
     * @covers ::validate
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInvalidArgument()
    {
        Regions::validate("test");
    }
}