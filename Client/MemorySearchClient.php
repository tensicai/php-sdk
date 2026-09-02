<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDMemorySearch;
use TeamBlue\TensicAI\SDK\Model\MemorySearchRequest;
use TeamBlue\TensicAI\SDK\Model\MemorySearchResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class MemorySearchClient extends AbstractClient implements MemorySearchClientInterface
{
    /**
     * Memory Search Query
     *
     * Run the agent&#39;s &#x60;search_memories&#x60; tool and return its raw text result.
     */
    #[EndpointAttribute(PostProjectsProjectIDMemorySearch::class)]
    public function postProjectsProjectIDMemorySearch(
        int $projectID,
        MemorySearchRequest $body,
    ): MemorySearchResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDMemorySearch::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return MemorySearchResponse::fromArray($response);
    }
}
