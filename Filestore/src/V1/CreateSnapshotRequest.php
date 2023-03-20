<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateSnapshotRequest creates a snapshot.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.CreateSnapshotRequest</code>
 */
class CreateSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Filestore Instance to create the snapshots of, in the format
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID to use for the snapshot.
     * The ID must be unique within the specified instance.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string snapshot_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $snapshot_id = '';
    /**
     * Required. A snapshot resource.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Snapshot snapshot = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $snapshot = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The Filestore Instance to create the snapshots of, in the format
     *           `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *     @type string $snapshot_id
     *           Required. The ID to use for the snapshot.
     *           The ID must be unique within the specified instance.
     *           This value must start with a lowercase letter followed by up to 62
     *           lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *     @type \Google\Cloud\Filestore\V1\Snapshot $snapshot
     *           Required. A snapshot resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Filestore Instance to create the snapshots of, in the format
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The Filestore Instance to create the snapshots of, in the format
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The ID to use for the snapshot.
     * The ID must be unique within the specified instance.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string snapshot_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSnapshotId()
    {
        return $this->snapshot_id;
    }

    /**
     * Required. The ID to use for the snapshot.
     * The ID must be unique within the specified instance.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string snapshot_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshotId($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot_id = $var;

        return $this;
    }

    /**
     * Required. A snapshot resource.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Snapshot snapshot = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Filestore\V1\Snapshot|null
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    public function hasSnapshot()
    {
        return isset($this->snapshot);
    }

    public function clearSnapshot()
    {
        unset($this->snapshot);
    }

    /**
     * Required. A snapshot resource.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Snapshot snapshot = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Filestore\V1\Snapshot $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Snapshot::class);
        $this->snapshot = $var;

        return $this;
    }

}
