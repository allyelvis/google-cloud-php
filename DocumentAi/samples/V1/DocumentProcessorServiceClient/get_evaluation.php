<?php
/*
 * Copyright 2023 Google LLC
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

// [START documentai_v1_generated_DocumentProcessorService_GetEvaluation_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DocumentAI\V1\Client\DocumentProcessorServiceClient;
use Google\Cloud\DocumentAI\V1\Evaluation;
use Google\Cloud\DocumentAI\V1\GetEvaluationRequest;

/**
 * Retrieves a specific evaluation.
 *
 * @param string $formattedName The resource name of the [Evaluation][google.cloud.documentai.v1.Evaluation] to get.
 *                              `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}/evaluations/{evaluation}`
 *                              Please see {@see DocumentProcessorServiceClient::evaluationName()} for help formatting this field.
 */
function get_evaluation_sample(string $formattedName): void
{
    // Create a client.
    $documentProcessorServiceClient = new DocumentProcessorServiceClient();

    // Prepare the request message.
    $request = (new GetEvaluationRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var Evaluation $response */
        $response = $documentProcessorServiceClient->getEvaluation($request);
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
    $formattedName = DocumentProcessorServiceClient::evaluationName(
        '[PROJECT]',
        '[LOCATION]',
        '[PROCESSOR]',
        '[PROCESSOR_VERSION]',
        '[EVALUATION]'
    );

    get_evaluation_sample($formattedName);
}
// [END documentai_v1_generated_DocumentProcessorService_GetEvaluation_sync]
