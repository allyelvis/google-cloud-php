<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\WindowsNodeConfig;

use UnexpectedValueException;

/**
 * Possible OS version that can be used.
 *
 * Protobuf type <code>google.container.v1.WindowsNodeConfig.OSVersion</code>
 */
class OSVersion
{
    /**
     * When OSVersion is not specified
     *
     * Generated from protobuf enum <code>OS_VERSION_UNSPECIFIED = 0;</code>
     */
    const OS_VERSION_UNSPECIFIED = 0;
    /**
     * LTSC2019 specifies to use LTSC2019 as the Windows Servercore Base Image
     *
     * Generated from protobuf enum <code>OS_VERSION_LTSC2019 = 1;</code>
     */
    const OS_VERSION_LTSC2019 = 1;
    /**
     * LTSC2022 specifies to use LTSC2022 as the Windows Servercore Base Image
     *
     * Generated from protobuf enum <code>OS_VERSION_LTSC2022 = 2;</code>
     */
    const OS_VERSION_LTSC2022 = 2;

    private static $valueToName = [
        self::OS_VERSION_UNSPECIFIED => 'OS_VERSION_UNSPECIFIED',
        self::OS_VERSION_LTSC2019 => 'OS_VERSION_LTSC2019',
        self::OS_VERSION_LTSC2022 => 'OS_VERSION_LTSC2022',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OSVersion::class, \Google\Cloud\Container\V1\WindowsNodeConfig_OSVersion::class);
