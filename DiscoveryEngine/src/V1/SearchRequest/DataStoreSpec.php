<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A struct to define data stores to filter on in a search call.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.DataStoreSpec</code>
 */
class DataStoreSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of
     * [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $data_store = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data_store
     *           Required. Full resource name of
     *           [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     *           `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of
     * [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataStore()
    {
        return $this->data_store;
    }

    /**
     * Required. Full resource name of
     * [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataStore($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_store = $var;

        return $this;
    }

}


