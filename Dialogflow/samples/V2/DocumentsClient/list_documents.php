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

// [START dialogflow_v2_generated_Documents_ListDocuments_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Dialogflow\V2\Document;
use Google\Cloud\Dialogflow\V2\DocumentsClient;

/**
 * Returns the list of all documents of the knowledge base.
 *
 * @param string $formattedParent The knowledge base to list all documents for.
 *                                Format: `projects/<Project ID>/locations/<Location
 *                                ID>/knowledgeBases/<Knowledge Base ID>`. Please see
 *                                {@see DocumentsClient::knowledgeBaseName()} for help formatting this field.
 */
function list_documents_sample(string $formattedParent): void
{
    // Create a client.
    $documentsClient = new DocumentsClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $documentsClient->listDocuments($formattedParent);

        /** @var Document $element */
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
    $formattedParent = DocumentsClient::knowledgeBaseName('[PROJECT]', '[KNOWLEDGE_BASE]');

    list_documents_sample($formattedParent);
}
// [END dialogflow_v2_generated_Documents_ListDocuments_sync]
