<?php
namespace XDT\AWS\Tools\Tests\Amazon\CloudWatch;

use XDT\AWS\Tools\CloudWatch\Statistics;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass XDT\AWS\Tools\CloudWatch\Statistics
 */
class StatisticsTest
    extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::validate
     */
    public function testValidate()
    {
        $this->assertTrue(
            Statistics::validate(Statistics::AVERAGE)
        );
        $this->assertTrue(
            Statistics::validate(Statistics::MAXIMUM)
        );
    }

    /**
     * @covers ::validate
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInvalidArgument()
    {
        Statistics::validate("test");
    }
}