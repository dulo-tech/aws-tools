<?php
namespace XDT\AWS\Tools\CloudWatch;

use XDT\AWS\Tools\Util\Struct;
use InvalidArgumentException;

/**
 * The CloudWatch statistic set values.
 * 
 * @see http://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/API_StatisticSet.html
 */
class Statistics
    extends Struct
{
    const AVERAGE      = "Average";
    const MAXIMUM      = "Maximum";
    const MINIMUM      = "Minimum";
    const SAMPLE_COUNT = "SampleCount";
    const SUM          = "Sum";

    /**
     * Validates a statistic value
     *
     * Throws an exception when invalid. Always returns true.
     *
     * @param string $statistic The statistic to validate
     *
     * @return boolean
     *
     * @throws InvalidArgumentException
     */
    public static function validate($statistic)
    {
        if (!static::contains($statistic)) {
            throw new InvalidArgumentException(sprintf(
                'The statistic "%s" is not valid.',
                $statistic
            ));
        }

        return true;
    }
}