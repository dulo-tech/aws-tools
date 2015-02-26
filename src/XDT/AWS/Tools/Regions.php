<?php
namespace XDT\AWS\Tools;

use XDT\AWS\Tools\Util\Struct;
use InvalidArgumentException;

/**
 * The standard AWS regions.
 * 
 * @see http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html
 */
class Regions
    extends Struct
{
    const APNorthEast1  = "ap-northeast-1";
    const APSouthEast1  = "ap-southeast-1";
    const APSouthEast2  = "ap-southeast-2";
    const EUCentral1    = "eu-central-1";
    const EUWest1       = "eu-west-1";
    const SouthAmerica1 = "sa-east-1";
    const USEast1       = "us-east-1";
    const USWest1       = "us-west-1";
    const USWest2       = "us-west-2";

    /**
     * Validates a region value
     *
     * Throws an exception when invalid. Always returns true.
     *
     * @param string $region The region to validate
     *
     * @return boolean
     *
     * @throws InvalidArgumentException
     */
    public static function validate($region)
    {
        if (!static::contains($region)) {
            throw new InvalidArgumentException(sprintf(
                'The region "%s" is not valid.',
                $region
            ));
        }

        return true;
    }
}