<?php
namespace XDT\AWS\Tools\Tests\Amazon\CloudWatch;

use XDT\AWS\Tools\CloudWatch\Metrics;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass XDT\AWS\Tools\CloudWatch\Metrics
 */
class MetricsTest
    extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::validate
     */
    public function testValidate()
    {
        $this->assertTrue(
            Metrics::validate("Latency")
        );
        $this->assertTrue(
            Metrics::validate("Request Time")
        );
    }

    /**
     * @covers ::validate
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInvalidArgumentMinLength()
    {
        Metrics::validate("");
    }

    /**
     * @covers ::validate
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInvalidArgumentMaxLength()
    {
        Metrics::validate(str_repeat("c", Metrics::MAX_LENGTH + 1));
    }
}