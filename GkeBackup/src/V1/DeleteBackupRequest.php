<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DeleteBackup.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.DeleteBackupRequest</code>
 */
class DeleteBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the Backup resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. If provided, this value must match the current value of the
     * target Backup's [etag][google.cloud.gkebackup.v1.Backup.etag] field or the
     * request is rejected.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';
    /**
     * Optional. If set to true, any VolumeBackups below this Backup will also be
     * deleted. Otherwise, the request will only succeed if the Backup has no
     * VolumeBackups.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $force = false;

    /**
     * @param string $name Required. Name of the Backup resource.
     *                     Format: `projects/&#42;/locations/&#42;/backupPlans/&#42;/backups/*`
     *                     Please see {@see BackupForGKEClient::backupName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeBackup\V1\DeleteBackupRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the Backup resource.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;`
     *     @type string $etag
     *           Optional. If provided, this value must match the current value of the
     *           target Backup's [etag][google.cloud.gkebackup.v1.Backup.etag] field or the
     *           request is rejected.
     *     @type bool $force
     *           Optional. If set to true, any VolumeBackups below this Backup will also be
     *           deleted. Otherwise, the request will only succeed if the Backup has no
     *           VolumeBackups.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the Backup resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the Backup resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. If provided, this value must match the current value of the
     * target Backup's [etag][google.cloud.gkebackup.v1.Backup.etag] field or the
     * request is rejected.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. If provided, this value must match the current value of the
     * target Backup's [etag][google.cloud.gkebackup.v1.Backup.etag] field or the
     * request is rejected.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. If set to true, any VolumeBackups below this Backup will also be
     * deleted. Otherwise, the request will only succeed if the Backup has no
     * VolumeBackups.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. If set to true, any VolumeBackups below this Backup will also be
     * deleted. Otherwise, the request will only succeed if the Backup has no
     * VolumeBackups.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

