<?php
namespace XDT\AWS\Tools\Util;

use ReflectionClass;

/**
 * Represents a container for constant values.
 */
abstract class Struct
{
    /**
     * @var array
     */
    private static $constants = [];
    
    /**
     * Returns the constant values as an array
     * 
     * Does not return constants that have names starting with an _ underscore
     * character.
     * 
     * @return array
     */
    public static function toArray()
    {
        $called = get_called_class();
        if (!isset(self::$constants[$called])) {
            self::$constants[$called] = [];
            $ref = new ReflectionClass($called);
            foreach($ref->getConstants() as $key => $value) {
                if (strpos($key, "_") !== 0) {
                    self::$constants[$called][$key] = $value;
                }
            }
        }
        
        return self::$constants[$called];
    }

    /**
     * Returns whether the struct has a constant with the given name
     * 
     * @param string $constant The name of the constant
     *
     * @return bool
     */
    public static function has($constant)
    {
        $values = static::toArray();
        
        return isset($values[$constant]);
    }

    /**
     * Returns whether the struct has a constant with the given value
     * 
     * @param mixed $value The value
     *
     * @return bool
     */
    public static function contains($value)
    {
        return in_array($value, static::toArray());
    }

    /**
     * Returns the names of the constants
     * 
     * @return array
     */
    public static function keys()
    {
        return array_keys(static::toArray());
    }

    /**
     * Returns an array of the constant values
     * 
     * @return array
     */
    public static function values()
    {
        return array_values(static::toArray());
    }
}