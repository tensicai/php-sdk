<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\PostSearch;
use TensicAI\SDK\Model\SearchRequest;
use TensicAI\SDK\Model\SearchResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class SearchClient extends AbstractClient implements SearchClientInterface
{
    /**
     * Smart Search
     *
     * Translate a natural-language query into a structured search using the system LLM.
     */
    #[EndpointAttribute(PostSearch::class)]
    public function postSearch(
        SearchRequest $body,
    ): SearchResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostSearch::fromRecordData(
                ['body' => $body],
            ),
        );

        return SearchResponse::fromArray($response);
    }

    /**
     * Smart Search
     *
     * Translate a natural-language query into a structured search using the system LLM.
     */
    #[EndpointAttribute(PostSearch::class)]
    public function postSearch(
        SearchRequest $body,
    ): SearchResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostSearch::fromRecordData(
                ['body' => $body],
            ),
        );

        return SearchResponse::fromArray($response);
    }
}
