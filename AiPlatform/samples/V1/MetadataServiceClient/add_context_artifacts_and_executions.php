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

// [START aiplatform_v1_generated_MetadataService_AddContextArtifactsAndExecutions_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\AddContextArtifactsAndExecutionsResponse;
use Google\Cloud\AIPlatform\V1\MetadataServiceClient;

/**
 * Adds a set of Artifacts and Executions to a Context. If any of the
 * Artifacts or Executions have already been added to a Context, they are
 * simply skipped.
 *
 * @param string $formattedContext The resource name of the Context that the Artifacts and
 *                                 Executions belong to. Format:
 *                                 `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
 *                                 Please see {@see MetadataServiceClient::contextName()} for help formatting this field.
 */
function add_context_artifacts_and_executions_sample(string $formattedContext): void
{
    // Create a client.
    $metadataServiceClient = new MetadataServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var AddContextArtifactsAndExecutionsResponse $response */
        $response = $metadataServiceClient->addContextArtifactsAndExecutions($formattedContext);
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
    $formattedContext = MetadataServiceClient::contextName(
        '[PROJECT]',
        '[LOCATION]',
        '[METADATA_STORE]',
        '[CONTEXT]'
    );

    add_context_artifacts_and_executions_sample($formattedContext);
}
// [END aiplatform_v1_generated_MetadataService_AddContextArtifactsAndExecutions_sync]
