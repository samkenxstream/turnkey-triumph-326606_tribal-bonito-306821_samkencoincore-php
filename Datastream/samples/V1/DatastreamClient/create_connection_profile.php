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

// [START datastream_v1_generated_Datastream_CreateConnectionProfile_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Datastream\V1\ConnectionProfile;
use Google\Cloud\Datastream\V1\DatastreamClient;
use Google\Rpc\Status;

/**
 * Use this method to create a connection profile in a project and location.
 *
 * @param string $formattedParent              The parent that owns the collection of ConnectionProfiles. Please see
 *                                             {@see DatastreamClient::locationName()} for help formatting this field.
 * @param string $connectionProfileId          The connection profile identifier.
 * @param string $connectionProfileDisplayName Display name.
 */
function create_connection_profile_sample(
    string $formattedParent,
    string $connectionProfileId,
    string $connectionProfileDisplayName
): void {
    // Create a client.
    $datastreamClient = new DatastreamClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $connectionProfile = (new ConnectionProfile())
        ->setDisplayName($connectionProfileDisplayName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $datastreamClient->createConnectionProfile(
            $formattedParent,
            $connectionProfileId,
            $connectionProfile
        );
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var ConnectionProfile $result */
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
    $formattedParent = DatastreamClient::locationName('[PROJECT]', '[LOCATION]');
    $connectionProfileId = '[CONNECTION_PROFILE_ID]';
    $connectionProfileDisplayName = '[DISPLAY_NAME]';

    create_connection_profile_sample(
        $formattedParent,
        $connectionProfileId,
        $connectionProfileDisplayName
    );
}
// [END datastream_v1_generated_Datastream_CreateConnectionProfile_sync]
