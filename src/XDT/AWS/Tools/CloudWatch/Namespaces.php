<?php
namespace XDT\AWS\Tools\CloudWatch;

use XDT\AWS\Tools\Util\Struct;
use InvalidArgumentException;

/**
 * The default CloudWatch namespaces.
 * 
 * @see http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/aws-namespaces.html
 * @see http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/cloudwatch_concepts.html
 */
class Namespaces
    extends Struct
{
    const AUTO_SCALING                          = "AWS/AutoScaling";
    const AWS_BILLING                           = "AWS/Billing";
    const AMAZON_CLOUDFRONT                     = "AWS/CloudFront";
    const AMAZON_DYNAMODB                       = "AWS/DynamoDB";
    const AMAZON_ELASTICACHE                    = "AWS/ElastiCache";
    const AMAZON_ELASTIC_BLOCK_STORE            = "AWS/EBS";
    const AMAZON_ELASTIC_COMPUTE_CLOUD          = "AWS/EC2";
    const ELASTIC_LOAD_BALANCING                = "AWS/ELB";
    const AMAZON_ELASTIC_MAPREDUCE              = "AWS/ElasticMapReduce";
    const AMAZON_KINESIS                        = "AWS/Kinesis";
    const AWS_OPSWORKS                          = "AWS/OpsWorks";
    const AMAZON_REDSHIFT                       = "AWS/Redshift";
    const AMAZON_RELATIONAL_DATABASE_SERVICE    = "AWS/RDS";
    const AMAZON_ROUTE_53                       = "AWS/Route53";
    const AMAZON_SIMPLE_NOTIFICATION_SERVICE    = "AWS/SNS";
    const AMAZON_SIMPLE_QUEUE_SERVICE           = "AWS/SQS";
    const AMAZON_SIMPLE_WORKFLOW_SERVICE        = "AWS/SWF";
    const AWS_STORAGE_GATEWAY                   = "AWS/StorageGateway";
    
    const _MAX_LENGTH = 255;
    const _MIN_LENGTH = 1;

    /**
     * Validates a namespace value
     * 
     * Throws an exception when invalid. Always returns true.
     * 
     * @param string $namespace The namespace to validate
     *                          
     * @return boolean
     * 
     * @throws InvalidArgumentException
     */
    public static function validate($namespace)
    {
        $len = strlen((string)$namespace);
        if ($len < self::_MIN_LENGTH || $len > self::_MAX_LENGTH) {
            throw new InvalidArgumentException(sprintf(
                "Namespace is %d characters long. Must be equal to or between %d and %d.",
                $len,
                self::_MIN_LENGTH,
                self::_MAX_LENGTH
            ));
        }
        
        if (preg_match('~[^\w.-/#:]~', $namespace)) {
            throw new InvalidArgumentException(sprintf(
                'Namespace "%s" can only contain the characters: "0-9A-Za-z", ".", "-", "_", "/", "#", and ":".',
                $namespace
            ));
        }
        
        return true;
    }
}