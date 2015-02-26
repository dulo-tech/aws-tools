<?php
namespace XDT\AWS\Tools\CloudWatch;

use InvalidArgumentException;

/**
 * Validates CloudWatch metric names.
 * 
 * @see http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/cloudwatch_concepts.html#Metric
 */
class Metrics
{
    const MAX_LENGTH = 255;
    const MIN_LENGTH = 1;

    /**
     * Validates a metric name
     *
     * Throws an exception when invalid. Always returns true.
     *
     * @param string $metric The metric to validate
     *
     * @return boolean
     *
     * @throws InvalidArgumentException
     */
    public static function validate($metric)
    {
        $len = strlen((string)$metric);
        if ($len < self::MIN_LENGTH || $len > self::MAX_LENGTH) {
            throw new InvalidArgumentException(sprintf(
                "Metric is %d characters long. Must be equal to or between %d and %d.",
                $len,
                self::MIN_LENGTH,
                self::MAX_LENGTH
            ));
        }
        
        return true;
    }
}