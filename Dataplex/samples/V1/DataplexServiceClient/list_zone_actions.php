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

// [START dataplex_v1_generated_DataplexService_ListZoneActions_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Dataplex\V1\Action;
use Google\Cloud\Dataplex\V1\DataplexServiceClient;

/**
 * Lists action resources in a zone.
 *
 * @param string $formattedParent The resource name of the parent zone:
 *                                `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}`. Please see
 *                                {@see DataplexServiceClient::zoneName()} for help formatting this field.
 */
function list_zone_actions_sample(string $formattedParent): void
{
    // Create a client.
    $dataplexServiceClient = new DataplexServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $dataplexServiceClient->listZoneActions($formattedParent);

        /** @var Action $element */
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
    $formattedParent = DataplexServiceClient::zoneName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]');

    list_zone_actions_sample($formattedParent);
}
// [END dataplex_v1_generated_DataplexService_ListZoneActions_sync]
