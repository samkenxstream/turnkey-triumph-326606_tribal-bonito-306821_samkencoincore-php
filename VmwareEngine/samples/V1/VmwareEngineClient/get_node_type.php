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

// [START vmwareengine_v1_generated_VmwareEngine_GetNodeType_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\VmwareEngine\V1\NodeType;
use Google\Cloud\VmwareEngine\V1\VmwareEngineClient;

/**
 * Gets details of a single `NodeType`.
 *
 * @param string $formattedName The resource name of the node type to retrieve.
 *                              Resource names are schemeless URIs that follow the conventions in
 *                              https://cloud.google.com/apis/design/resource_names.
 *                              For example:
 *                              `projects/my-proj/locations/us-central1-a/nodeTypes/standard-72`
 *                              Please see {@see VmwareEngineClient::nodeTypeName()} for help formatting this field.
 */
function get_node_type_sample(string $formattedName): void
{
    // Create a client.
    $vmwareEngineClient = new VmwareEngineClient();

    // Call the API and handle any network failures.
    try {
        /** @var NodeType $response */
        $response = $vmwareEngineClient->getNodeType($formattedName);
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
    $formattedName = VmwareEngineClient::nodeTypeName('[PROJECT]', '[LOCATION]', '[NODE_TYPE]');

    get_node_type_sample($formattedName);
}
// [END vmwareengine_v1_generated_VmwareEngine_GetNodeType_sync]
