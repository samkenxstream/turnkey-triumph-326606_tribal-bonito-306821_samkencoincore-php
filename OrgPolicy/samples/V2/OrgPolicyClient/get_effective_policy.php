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

// [START orgpolicy_v2_generated_OrgPolicy_GetEffectivePolicy_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\OrgPolicy\V2\OrgPolicyClient;
use Google\Cloud\OrgPolicy\V2\Policy;

/**
 * Gets the effective `Policy` on a resource. This is the result of merging
 * `Policies` in the resource hierarchy and evaluating conditions. The
 * returned `Policy` will not have an `etag` or `condition` set because it is
 * a computed `Policy` across multiple resources.
 * Subtrees of Resource Manager resource hierarchy with 'under:' prefix will
 * not be expanded.
 *
 * @param string $formattedName The effective policy to compute. See `Policy` for naming rules. Please see
 *                              {@see OrgPolicyClient::policyName()} for help formatting this field.
 */
function get_effective_policy_sample(string $formattedName): void
{
    // Create a client.
    $orgPolicyClient = new OrgPolicyClient();

    // Call the API and handle any network failures.
    try {
        /** @var Policy $response */
        $response = $orgPolicyClient->getEffectivePolicy($formattedName);
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
    $formattedName = OrgPolicyClient::policyName('[PROJECT]', '[POLICY]');

    get_effective_policy_sample($formattedName);
}
// [END orgpolicy_v2_generated_OrgPolicy_GetEffectivePolicy_sync]
