<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/membership.proto

namespace Google\Apps\Chat\V1\Membership;

use UnexpectedValueException;

/**
 * Represents a user's permitted actions in a Chat space. More enum values
 * might be added in the future.
 *
 * Protobuf type <code>google.chat.v1.Membership.MembershipRole</code>
 */
class MembershipRole
{
    /**
     * Default value. For [users][google.chat.v1.Membership.member]: they
     * aren't a member of the space, but can be invited. For
     * [Google Groups][google.chat.v1.Membership.group_member]: they're always
     *  assigned this role (other enum values might be used in the future).
     *
     * Generated from protobuf enum <code>MEMBERSHIP_ROLE_UNSPECIFIED = 0;</code>
     */
    const MEMBERSHIP_ROLE_UNSPECIFIED = 0;
    /**
     * A member of the space. The user has basic permissions, like sending
     * messages to the space. In 1:1 and unnamed group conversations, everyone
     * has this role.
     *
     * Generated from protobuf enum <code>ROLE_MEMBER = 1;</code>
     */
    const ROLE_MEMBER = 1;
    /**
     * A space manager. The user has all basic permissions plus administrative
     * permissions that let them manage the space, like adding or removing
     * members. Only supported in
     * [SpaceType.SPACE][google.chat.v1.Space.SpaceType].
     *
     * Generated from protobuf enum <code>ROLE_MANAGER = 2;</code>
     */
    const ROLE_MANAGER = 2;

    private static $valueToName = [
        self::MEMBERSHIP_ROLE_UNSPECIFIED => 'MEMBERSHIP_ROLE_UNSPECIFIED',
        self::ROLE_MEMBER => 'ROLE_MEMBER',
        self::ROLE_MANAGER => 'ROLE_MANAGER',
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


