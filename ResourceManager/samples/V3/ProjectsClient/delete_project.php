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

// [START cloudresourcemanager_v3_generated_Projects_DeleteProject_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\ResourceManager\V3\Project;
use Google\Cloud\ResourceManager\V3\ProjectsClient;
use Google\Rpc\Status;

/**
 * Marks the project identified by the specified
 * `name` (for example, `projects/415104041262`) for deletion.
 *
 * This method will only affect the project if it has a lifecycle state of
 * [ACTIVE][google.cloud.resourcemanager.v3.Project.State.ACTIVE].
 *
 * This method changes the Project's lifecycle state from
 * [ACTIVE][google.cloud.resourcemanager.v3.Project.State.ACTIVE]
 * to
 * [DELETE_REQUESTED][google.cloud.resourcemanager.v3.Project.State.DELETE_REQUESTED].
 * The deletion starts at an unspecified time,
 * at which point the Project is no longer accessible.
 *
 * Until the deletion completes, you can check the lifecycle state
 * checked by retrieving the project with [GetProject]
 * [google.cloud.resourcemanager.v3.Projects.GetProject],
 * and the project remains visible to [ListProjects]
 * [google.cloud.resourcemanager.v3.Projects.ListProjects].
 * However, you cannot update the project.
 *
 * After the deletion completes, the project is not retrievable by
 * the  [GetProject]
 * [google.cloud.resourcemanager.v3.Projects.GetProject],
 * [ListProjects]
 * [google.cloud.resourcemanager.v3.Projects.ListProjects], and
 * [SearchProjects][google.cloud.resourcemanager.v3.Projects.SearchProjects]
 * methods.
 *
 * This method behaves idempotently, such that deleting a `DELETE_REQUESTED`
 * project will not cause an error, but also won't do anything.
 *
 * The caller must have `resourcemanager.projects.delete` permissions for this
 * project.
 *
 * @param string $formattedName The name of the Project (for example, `projects/415104041262`). Please see
 *                              {@see ProjectsClient::projectName()} for help formatting this field.
 */
function delete_project_sample(string $formattedName): void
{
    // Create a client.
    $projectsClient = new ProjectsClient();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $projectsClient->deleteProject($formattedName);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Project $result */
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
    $formattedName = ProjectsClient::projectName('[PROJECT]');

    delete_project_sample($formattedName);
}
// [END cloudresourcemanager_v3_generated_Projects_DeleteProject_sync]
