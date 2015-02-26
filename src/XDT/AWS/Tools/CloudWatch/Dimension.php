<?php
namespace XDT\AWS\Tools\CloudWatch;

use InvalidArgumentException;

/**
 * Represents a CloudWatch dimension.
 *
 * The Dimension data type further expands on the identity of a metric
 * using a Name, Value pair.
 * 
 * @see http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-cw-dimension.html
 */
class Dimension
{
    const MIN_LENGTH_NAME  = 1;
    const MAX_LENGTH_NAME  = 255;
    const MIN_LENGTH_VALUE = 1;
    const MAX_LENGTH_VALUE = 255;
    
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $value;

    /**
     * Constructor
     * 
     * @param string $name  The name of the dimension
     * @param string $value The dimension value
     */
    public function __construct($name, $value)
    {
        $this->setName($name);
        $this->setValue($value);
    }

    /**
     * Returns the name of the dimension
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name of the dimension
     * 
     * Length constraints: Minimum length of 1. Maximum length of 255.
     * 
     * @param string $name The name of the dimension
     * 
     * @return $this
     */
    public function setName($name)
    {
        $len = strlen($name);
        if ($len < self::MIN_LENGTH_NAME || $len > self::MAX_LENGTH_NAME) {
            throw new InvalidArgumentException(sprintf(
                "Dimension name is %d characters long. Must be equal to or between %d and %d.",
                $len,
                self::MIN_LENGTH_NAME,
                self::MAX_LENGTH_NAME
            ));
        }
        $this->name = $name;
        
        return $this;
    }

    /**
     * Returns the dimension value
     * 
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the dimension value
     * 
     * @param string $value The value representing the dimension measurement
     * 
     * @return $this
     */
    public function setValue($value)
    {
        $len = strlen($value);
        if ($len < self::MIN_LENGTH_VALUE || $len > self::MAX_LENGTH_VALUE) {
            throw new InvalidArgumentException(sprintf(
                "Dimension value is %d characters long. Must be equal to or between %d and %d.",
                $len,
                self::MIN_LENGTH_VALUE,
                self::MAX_LENGTH_VALUE
            ));
        }
        $this->value = $value;
        
        return $this;
    }
}