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

// [START policytroubleshooter_v1_generated_IamChecker_TroubleshootIamPolicy_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\PolicyTroubleshooter\V1\IamCheckerClient;
use Google\Cloud\PolicyTroubleshooter\V1\TroubleshootIamPolicyResponse;

/**
 * Checks whether a member has a specific permission for a specific resource,
 * and explains why the member does or does not have that permission.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function troubleshoot_iam_policy_sample(): void
{
    // Create a client.
    $iamCheckerClient = new IamCheckerClient();

    // Call the API and handle any network failures.
    try {
        /** @var TroubleshootIamPolicyResponse $response */
        $response = $iamCheckerClient->troubleshootIamPolicy();
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END policytroubleshooter_v1_generated_IamChecker_TroubleshootIamPolicy_sync]
