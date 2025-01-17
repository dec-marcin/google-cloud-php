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

// [START cloudresourcemanager_v3_generated_Folders_UndeleteFolder_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\ResourceManager\V3\Folder;
use Google\Cloud\ResourceManager\V3\FoldersClient;
use Google\Rpc\Status;

/**
 * Cancels the deletion request for a folder. This method may be called on a
 * folder in any state. If the folder is in the
 * [ACTIVE][google.cloud.resourcemanager.v3.Folder.State.ACTIVE] state the
 * result will be a no-op success. In order to succeed, the folder's parent
 * must be in the
 * [ACTIVE][google.cloud.resourcemanager.v3.Folder.State.ACTIVE] state. In
 * addition, reintroducing the folder into the tree must not violate folder
 * naming, height, and fanout constraints described in the
 * [CreateFolder][google.cloud.resourcemanager.v3.Folders.CreateFolder]
 * documentation. The caller must have `resourcemanager.folders.undelete`
 * permission on the identified folder.
 *
 * @param string $formattedName The resource name of the folder to undelete.
 *                              Must be of the form `folders/{folder_id}`. Please see
 *                              {@see FoldersClient::folderName()} for help formatting this field.
 */
function undelete_folder_sample(string $formattedName): void
{
    // Create a client.
    $foldersClient = new FoldersClient();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $foldersClient->undeleteFolder($formattedName);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Folder $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
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
    $formattedName = FoldersClient::folderName('[FOLDER]');

    undelete_folder_sample($formattedName);
}
// [END cloudresourcemanager_v3_generated_Folders_UndeleteFolder_sync]
