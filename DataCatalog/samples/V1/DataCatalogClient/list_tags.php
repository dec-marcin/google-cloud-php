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

// [START datacatalog_v1_generated_DataCatalog_ListTags_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\DataCatalog\V1\DataCatalogClient;
use Google\Cloud\DataCatalog\V1\Tag;

/**
 * Lists tags assigned to an [Entry][google.cloud.datacatalog.v1.Entry].
 * The [columns][google.cloud.datacatalog.v1.Tag.column] in the response are
 * lowercased.
 *
 * @param string $formattedParent The name of the Data Catalog resource to list the tags of.
 *
 *                                The resource can be an [Entry][google.cloud.datacatalog.v1.Entry]
 *                                or an [EntryGroup][google.cloud.datacatalog.v1.EntryGroup]
 *                                (without `/entries/{entries}` at the end). Please see
 *                                {@see DataCatalogClient::entryName()} for help formatting this field.
 */
function list_tags_sample(string $formattedParent): void
{
    // Create a client.
    $dataCatalogClient = new DataCatalogClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $dataCatalogClient->listTags($formattedParent);

        /** @var Tag $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $formattedParent = DataCatalogClient::entryName(
        '[PROJECT]',
        '[LOCATION]',
        '[ENTRY_GROUP]',
        '[ENTRY]'
    );

    list_tags_sample($formattedParent);
}
// [END datacatalog_v1_generated_DataCatalog_ListTags_sync]
