<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/exfiltration.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Exfiltration represents a data exfiltration attempt of one or more
 * sources to one or more targets.  Sources represent the source
 * of data that is exfiltrated, and Targets represents the destination the
 * data was copied to.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Exfiltration</code>
 */
class Exfiltration extends \Google\Protobuf\Internal\Message
{
    /**
     * If there are multiple sources, then the data is considered "joined" between
     * them. For instance, BigQuery can join multiple tables, and each
     * table would be considered a source.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ExfilResource sources = 1;</code>
     */
    private $sources;
    /**
     * If there are multiple targets, each target would get a complete copy of the
     * "joined" source data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ExfilResource targets = 2;</code>
     */
    private $targets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1\ExfilResource[]|\Google\Protobuf\Internal\RepeatedField $sources
     *           If there are multiple sources, then the data is considered "joined" between
     *           them. For instance, BigQuery can join multiple tables, and each
     *           table would be considered a source.
     *     @type \Google\Cloud\SecurityCenter\V1\ExfilResource[]|\Google\Protobuf\Internal\RepeatedField $targets
     *           If there are multiple targets, each target would get a complete copy of the
     *           "joined" source data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Exfiltration::initOnce();
        parent::__construct($data);
    }

    /**
     * If there are multiple sources, then the data is considered "joined" between
     * them. For instance, BigQuery can join multiple tables, and each
     * table would be considered a source.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ExfilResource sources = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * If there are multiple sources, then the data is considered "joined" between
     * them. For instance, BigQuery can join multiple tables, and each
     * table would be considered a source.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ExfilResource sources = 1;</code>
     * @param \Google\Cloud\SecurityCenter\V1\ExfilResource[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\ExfilResource::class);
        $this->sources = $arr;

        return $this;
    }

    /**
     * If there are multiple targets, each target would get a complete copy of the
     * "joined" source data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ExfilResource targets = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * If there are multiple targets, each target would get a complete copy of the
     * "joined" source data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.ExfilResource targets = 2;</code>
     * @param \Google\Cloud\SecurityCenter\V1\ExfilResource[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\ExfilResource::class);
        $this->targets = $arr;

        return $this;
    }

}
