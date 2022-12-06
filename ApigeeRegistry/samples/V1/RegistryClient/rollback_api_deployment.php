<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START apigeeregistry_v1_generated_Registry_RollbackApiDeployment_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ApigeeRegistry\V1\ApiDeployment;
use Google\Cloud\ApigeeRegistry\V1\RegistryClient;

/**
 * Sets the current revision to a specified prior
 * revision. Note that this creates a new revision with a new revision ID.
 *
 * @param string $formattedName The deployment being rolled back. Please see
 *                              {@see RegistryClient::apiDeploymentName()} for help formatting this field.
 * @param string $revisionId    The revision ID to roll back to.
 *                              It must be a revision of the same deployment.
 *
 *                              Example: `c7cfa2a8`
 */
function rollback_api_deployment_sample(string $formattedName, string $revisionId): void
{
    // Create a client.
    $registryClient = new RegistryClient();

    // Call the API and handle any network failures.
    try {
        /** @var ApiDeployment $response */
        $response = $registryClient->rollbackApiDeployment($formattedName, $revisionId);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = RegistryClient::apiDeploymentName(
        '[PROJECT]',
        '[LOCATION]',
        '[API]',
        '[DEPLOYMENT]'
    );
    $revisionId = '[REVISION_ID]';

    rollback_api_deployment_sample($formattedName, $revisionId);
}
// [END apigeeregistry_v1_generated_Registry_RollbackApiDeployment_sync]