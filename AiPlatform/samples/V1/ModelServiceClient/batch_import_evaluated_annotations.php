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

// [START aiplatform_v1_generated_ModelService_BatchImportEvaluatedAnnotations_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\BatchImportEvaluatedAnnotationsResponse;
use Google\Cloud\AIPlatform\V1\EvaluatedAnnotation;
use Google\Cloud\AIPlatform\V1\ModelServiceClient;

/**
 * Imports a list of externally generated EvaluatedAnnotations.
 *
 * @param string $formattedParent The name of the parent ModelEvaluationSlice resource.
 *                                Format:
 *                                `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}/slices/{slice}`
 *                                Please see {@see ModelServiceClient::modelEvaluationSliceName()} for help formatting this field.
 */
function batch_import_evaluated_annotations_sample(string $formattedParent): void
{
    // Create a client.
    $modelServiceClient = new ModelServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $evaluatedAnnotations = [new EvaluatedAnnotation()];

    // Call the API and handle any network failures.
    try {
        /** @var BatchImportEvaluatedAnnotationsResponse $response */
        $response = $modelServiceClient->batchImportEvaluatedAnnotations(
            $formattedParent,
            $evaluatedAnnotations
        );
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
    $formattedParent = ModelServiceClient::modelEvaluationSliceName(
        '[PROJECT]',
        '[LOCATION]',
        '[MODEL]',
        '[EVALUATION]',
        '[SLICE]'
    );

    batch_import_evaluated_annotations_sample($formattedParent);
}
// [END aiplatform_v1_generated_ModelService_BatchImportEvaluatedAnnotations_sync]
