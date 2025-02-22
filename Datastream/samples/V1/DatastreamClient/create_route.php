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

// [START datastream_v1_generated_Datastream_CreateRoute_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Datastream\V1\DatastreamClient;
use Google\Cloud\Datastream\V1\Route;
use Google\Rpc\Status;

/**
 * Use this method to create a route for a private connectivity configuration
 * in a project and location.
 *
 * @param string $formattedParent         The parent that owns the collection of Routes. Please see
 *                                        {@see DatastreamClient::privateConnectionName()} for help formatting this field.
 * @param string $routeId                 The Route identifier.
 * @param string $routeDisplayName        Display name.
 * @param string $routeDestinationAddress Destination address for connection
 */
function create_route_sample(
    string $formattedParent,
    string $routeId,
    string $routeDisplayName,
    string $routeDestinationAddress
): void {
    // Create a client.
    $datastreamClient = new DatastreamClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $route = (new Route())
        ->setDisplayName($routeDisplayName)
        ->setDestinationAddress($routeDestinationAddress);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $datastreamClient->createRoute($formattedParent, $routeId, $route);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Route $result */
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
    $formattedParent = DatastreamClient::privateConnectionName(
        '[PROJECT]',
        '[LOCATION]',
        '[PRIVATE_CONNECTION]'
    );
    $routeId = '[ROUTE_ID]';
    $routeDisplayName = '[DISPLAY_NAME]';
    $routeDestinationAddress = '[DESTINATION_ADDRESS]';

    create_route_sample($formattedParent, $routeId, $routeDisplayName, $routeDestinationAddress);
}
// [END datastream_v1_generated_Datastream_CreateRoute_sync]
