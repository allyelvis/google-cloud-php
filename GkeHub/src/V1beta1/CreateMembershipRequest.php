<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `GkeHubMembershipService.CreateMembership` method.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.CreateMembershipRequest</code>
 */
class CreateMembershipRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent (project and location) where the Memberships will be created.
     * Specified in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Required. Client chosen ID for the membership. `membership_id` must be a valid RFC
     * 1123 compliant DNS label:
     *   1. At most 63 characters in length
     *   2. It must consist of lower case alphanumeric characters or `-`
     *   3. It must start and end with an alphanumeric character
     * Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     * with a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string membership_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $membership_id = '';
    /**
     * Required. The membership to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Membership resource = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent (project and location) where the Memberships will be created.
     *           Specified in the format `projects/&#42;&#47;locations/&#42;`.
     *     @type string $membership_id
     *           Required. Client chosen ID for the membership. `membership_id` must be a valid RFC
     *           1123 compliant DNS label:
     *             1. At most 63 characters in length
     *             2. It must consist of lower case alphanumeric characters or `-`
     *             3. It must start and end with an alphanumeric character
     *           Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     *           with a maximum length of 63 characters.
     *     @type \Google\Cloud\GkeHub\V1beta1\Membership $resource
     *           Required. The membership to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent (project and location) where the Memberships will be created.
     * Specified in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent (project and location) where the Memberships will be created.
     * Specified in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Client chosen ID for the membership. `membership_id` must be a valid RFC
     * 1123 compliant DNS label:
     *   1. At most 63 characters in length
     *   2. It must consist of lower case alphanumeric characters or `-`
     *   3. It must start and end with an alphanumeric character
     * Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     * with a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string membership_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMembershipId()
    {
        return $this->membership_id;
    }

    /**
     * Required. Client chosen ID for the membership. `membership_id` must be a valid RFC
     * 1123 compliant DNS label:
     *   1. At most 63 characters in length
     *   2. It must consist of lower case alphanumeric characters or `-`
     *   3. It must start and end with an alphanumeric character
     * Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     * with a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string membership_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMembershipId($var)
    {
        GPBUtil::checkString($var, True);
        $this->membership_id = $var;

        return $this;
    }

    /**
     * Required. The membership to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Membership resource = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\Membership|null
     */
    public function getResource()
    {
        return isset($this->resource) ? $this->resource : null;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Required. The membership to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Membership resource = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\Membership $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\Membership::class);
        $this->resource = $var;

        return $this;
    }

}
