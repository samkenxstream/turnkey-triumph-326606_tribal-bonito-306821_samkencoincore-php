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

// [START cloudbuild_v2_generated_RepositoryManager_BatchCreateRepositories_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Build\V2\BatchCreateRepositoriesResponse;
use Google\Cloud\Build\V2\CreateRepositoryRequest;
use Google\Cloud\Build\V2\Repository;
use Google\Cloud\Build\V2\RepositoryManagerClient;
use Google\Rpc\Status;

/**
 * Creates multiple repositories inside a connection.
 *
 * @param string $formattedParent             The connection to contain all the repositories being created.
 *                                            Format: projects/&#42;/locations/&#42;/connections/*
 *                                            The parent field in the CreateRepositoryRequest messages
 *                                            must either be empty or match this field. Please see
 *                                            {@see RepositoryManagerClient::connectionName()} for help formatting this field.
 * @param string $formattedRequestsParent     The connection to contain the repository. If the request is part
 *                                            of a BatchCreateRepositoriesRequest, this field should be empty or match
 *                                            the parent specified there. Please see
 *                                            {@see RepositoryManagerClient::connectionName()} for help formatting this field.
 * @param string $requestsRepositoryRemoteUri Git Clone HTTPS URI.
 * @param string $requestsRepositoryId        The ID to use for the repository, which will become the final
 *                                            component of the repository's resource name. This ID should be unique in
 *                                            the connection. Allows alphanumeric characters and any of
 *                                            -._~%!$&'()*+,;=&#64;.
 */
function batch_create_repositories_sample(
    string $formattedParent,
    string $formattedRequestsParent,
    string $requestsRepositoryRemoteUri,
    string $requestsRepositoryId
): void {
    // Create a client.
    $repositoryManagerClient = new RepositoryManagerClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $requestsRepository = (new Repository())
        ->setRemoteUri($requestsRepositoryRemoteUri);
    $createRepositoryRequest = (new CreateRepositoryRequest())
        ->setParent($formattedRequestsParent)
        ->setRepository($requestsRepository)
        ->setRepositoryId($requestsRepositoryId);
    $requests = [$createRepositoryRequest,];

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $repositoryManagerClient->batchCreateRepositories($formattedParent, $requests);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var BatchCreateRepositoriesResponse $result */
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
    $formattedParent = RepositoryManagerClient::connectionName(
        '[PROJECT]',
        '[LOCATION]',
        '[CONNECTION]'
    );
    $formattedRequestsParent = RepositoryManagerClient::connectionName(
        '[PROJECT]',
        '[LOCATION]',
        '[CONNECTION]'
    );
    $requestsRepositoryRemoteUri = '[REMOTE_URI]';
    $requestsRepositoryId = '[REPOSITORY_ID]';

    batch_create_repositories_sample(
        $formattedParent,
        $formattedRequestsParent,
        $requestsRepositoryRemoteUri,
        $requestsRepositoryId
    );
}
// [END cloudbuild_v2_generated_RepositoryManager_BatchCreateRepositories_sync]
