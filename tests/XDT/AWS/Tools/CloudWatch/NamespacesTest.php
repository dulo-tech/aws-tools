<?php
namespace XDT\AWS\Tools\Tests\CloudWatch;

use XDT\AWS\Tools\CloudWatch\Namespaces;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass XDT\AWS\Tools\CloudWatch\Namespaces
 */
class NamespacesTest
    extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::validate
     */
    public function testValidate()
    {
        $this->assertTrue(
            Namespaces::validate(Namespaces::AUTO_SCALING)
        );
        $this->assertTrue(
            Namespaces::validate(Namespaces::AMAZON_ROUTE_53)
        );
        $this->assertTrue(
            Namespaces::validate("Custom/Namespace")
        );
        $this->assertTrue(
            Namespaces::validate(str_repeat("c", Namespaces::_MIN_LENGTH))
        );
        $this->assertTrue(
            Namespaces::validate(str_repeat("c", Namespaces::_MAX_LENGTH))
        );
    }

    /**
     * @covers ::validate
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInvalidArgumentMinLength()
    {
        Namespaces::validate("");
    }

    /**
     * @covers ::validate
     * @expectedException \InvalidArgumentException
     */
    public function testValidateInvalidArgumentMaxLength()
    {
        Namespaces::validate(str_repeat("c", Namespaces::_MAX_LENGTH + 1));
    }

    /**
     * @covers ::validate
     * @expectedException InvalidArgumentException
     */
    public function testValidateInvalidArgumentBadChars()
    {
        Namespaces::validate("Custom Namespace");
    }
}