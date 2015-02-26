<?php
namespace XDT\AWS\Tools\CloudWatch;

use XDT\AWS\Tools\Util\Struct;
use InvalidArgumentException;

/**
 * Metrices units of measure.
 * 
 * @see http://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/API_MetricDatum.html
 */
class Units
    extends Struct
{
    const SECONDS           = "Seconds";
    const MICROSECONDS      = "Microseconds";
    const MILLISECONDS      = "Milliseconds";
    const BYTES             = "Bytes";
    const KILOBYTES         = "Kilobytes";
    const MEGABYTES         = "Megabytes";
    const GIGABYTES         = "Gigabytes";
    const TERABYTES         = "Terabytes";
    const BITS              = "Bits";
    const KILOBITS          = "Kilobits";
    const MEGABITS          = "Megabits";
    const GIGABITS          = "Gigabits";
    const TERABITS          = "Terabits";
    const PERCENT           = "Percent";
    const COUNT             = "Count";
    const BYTES_SECOND      = "Bytes/Second";
    const KILOBYTES_SECOND  = "Kilobytes/Second";
    const MEGABYTES_SECOND  = "Megabytes/Second";
    const GIGABYTES_SECOND  = "Gigabytes/Second";
    const TERABYTES_SECOND  = "Terabytes/Second";
    const BITS_SECOND       = "Bits/Second";
    const KILOBITS_SECOND   = "Kilobits/Second";
    const MEGABITS_SECOND   = "Megabits/Second";
    const GIGABITS_SECOND   = "Gigabits/Second";
    const TERABITS_SECOND   = "Terabits/Second";
    const COUNT_SECOND      = "Count/Second";
    const NONE              = "None";

    /**
     * Validates a unit value
     *
     * Throws an exception when invalid. Always returns true.
     *
     * @param string $unit The unit to validate
     *
     * @return boolean
     *
     * @throws InvalidArgumentException
     */
    public static function validate($unit)
    {
        if (!static::contains($unit)) {
            throw new InvalidArgumentException(sprintf(
                'The unit "%s" is not valid.',
                $unit
            ));
        }
        
        return true;
    }
}