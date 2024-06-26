<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space.proto

namespace Google\Apps\Chat\V1\Space;

use UnexpectedValueException;

/**
 * The type of space. Required when creating or updating a space. Output only
 * for other usage.
 *
 * Protobuf type <code>google.chat.v1.Space.SpaceType</code>
 */
class SpaceType
{
    /**
     * Reserved.
     *
     * Generated from protobuf enum <code>SPACE_TYPE_UNSPECIFIED = 0;</code>
     */
    const SPACE_TYPE_UNSPECIFIED = 0;
    /**
     * A place where people send messages, share files, and collaborate.
     * A `SPACE` can include Chat apps.
     *
     * Generated from protobuf enum <code>SPACE = 1;</code>
     */
    const SPACE = 1;
    /**
     * Group conversations between 3 or more people.
     * A `GROUP_CHAT` can include Chat apps.
     *
     * Generated from protobuf enum <code>GROUP_CHAT = 2;</code>
     */
    const GROUP_CHAT = 2;
    /**
     * 1:1 messages between two humans or a human and a Chat app.
     *
     * Generated from protobuf enum <code>DIRECT_MESSAGE = 3;</code>
     */
    const DIRECT_MESSAGE = 3;

    private static $valueToName = [
        self::SPACE_TYPE_UNSPECIFIED => 'SPACE_TYPE_UNSPECIFIED',
        self::SPACE => 'SPACE',
        self::GROUP_CHAT => 'GROUP_CHAT',
        self::DIRECT_MESSAGE => 'DIRECT_MESSAGE',
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


