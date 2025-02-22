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

// [START cloudiot_v1_generated_DeviceManager_ListDeviceConfigVersions_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Iot\V1\DeviceManagerClient;
use Google\Cloud\Iot\V1\ListDeviceConfigVersionsResponse;

/**
 * Lists the last few versions of the device configuration in descending
 * order (i.e.: newest first).
 *
 * @param string $formattedName The name of the device. For example,
 *                              `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
 *                              `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`. Please see
 *                              {@see DeviceManagerClient::deviceName()} for help formatting this field.
 */
function list_device_config_versions_sample(string $formattedName): void
{
    // Create a client.
    $deviceManagerClient = new DeviceManagerClient();

    // Call the API and handle any network failures.
    try {
        /** @var ListDeviceConfigVersionsResponse $response */
        $response = $deviceManagerClient->listDeviceConfigVersions($formattedName);
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
    $formattedName = DeviceManagerClient::deviceName(
        '[PROJECT]',
        '[LOCATION]',
        '[REGISTRY]',
        '[DEVICE]'
    );

    list_device_config_versions_sample($formattedName);
}
// [END cloudiot_v1_generated_DeviceManager_ListDeviceConfigVersions_sync]
