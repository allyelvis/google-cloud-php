<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/rank_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class RankService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
6google/cloud/discoveryengine/v1beta/rank_service.proto#google.cloud.discoveryengine.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"J
RankingRecord

id (	
title (	
content (	
score ("�
RankRequestL
ranking_config (	B4�A�A.
,discoveryengine.googleapis.com/RankingConfig
model (	
top_n (
query (	H
records (22.google.cloud.discoveryengine.v1beta.RankingRecordB�A)
!ignore_record_details_in_response ("S
RankResponseC
records (22.google.cloud.discoveryengine.v1beta.RankingRecord2�
RankService�
Rank0.google.cloud.discoveryengine.v1beta.RankRequest1.google.cloud.discoveryengine.v1beta.RankResponse"P���J"E/v1beta/{ranking_config=projects/*/locations/*/rankingConfigs/*}:rank:*R�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
\'com.google.cloud.discoveryengine.v1betaBRankServiceProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

