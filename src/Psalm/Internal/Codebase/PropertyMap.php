<?php
namespace Psalm\Internal\Codebase;

use function strtolower;

/**
 * @internal
 */
class PropertyMap
{
    /**
     * @var array<string, array<string, string>>|null
     */
    private static $property_map;

    /**
     * Gets the method/function call map
     *
     * @return array<string, array<string, string>>
     */
    public static function getPropertyMap(): array
    {
        if (self::$property_map !== null) {
            return self::$property_map;
        }

        /** @var array<string, array<string, string>> */
        $property_map = require(__DIR__ . '/../PropertyMap.php');

        self::$property_map = [];

        foreach ($property_map as $key => $value) {
            $cased_key = strtolower($key);
            self::$property_map[$cased_key] = $value;
        }

        return self::$property_map;
    }

    /**
     * @param   string $class_name
     *
     */
    public static function inPropertyMap($class_name): bool
    {
        return isset(self::getPropertyMap()[strtolower($class_name)]);
    }
}
