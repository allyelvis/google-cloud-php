<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/common.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defined a customer managed encryption key that will be used to encrypt Backup
 * artifacts.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.EncryptionKey</code>
 */
class EncryptionKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Google Cloud KMS encryption key. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`
     *
     * Generated from protobuf field <code>string gcp_kms_encryption_key = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $gcp_kms_encryption_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcp_kms_encryption_key
     *           Optional. Google Cloud KMS encryption key. Format:
     *           `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Google Cloud KMS encryption key. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`
     *
     * Generated from protobuf field <code>string gcp_kms_encryption_key = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGcpKmsEncryptionKey()
    {
        return $this->gcp_kms_encryption_key;
    }

    /**
     * Optional. Google Cloud KMS encryption key. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`
     *
     * Generated from protobuf field <code>string gcp_kms_encryption_key = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGcpKmsEncryptionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcp_kms_encryption_key = $var;

        return $this;
    }

}

