<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\GetDirectModels;
use TensicAI\SDK\Endpoint\GetV1Models;
use TensicAI\SDK\Endpoint\GetV1ModelsModelId;
use TensicAI\SDK\Endpoint\PostV1ChatCompletions;
use TensicAI\SDK\Endpoint\PostV1Completions;
use TensicAI\SDK\Endpoint\PostV1Embeddings;
use TensicAI\SDK\Endpoint\PostV1Moderations;
use TensicAI\SDK\Model\OpenAIChatCompletionRequest;
use TensicAI\SDK\Model\OpenAIChatCompletionResponse;
use TensicAI\SDK\Model\OpenAICompletionRequest;
use TensicAI\SDK\Model\OpenAIEmbeddingRequest;
use TensicAI\SDK\Model\OpenAIEmbeddingResponse;
use TensicAI\SDK\Model\OpenAIModerationRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class DirectAccessClient extends AbstractClient implements DirectAccessClientInterface
{
    /**
     * List Accessible Models
     *
     * List all models/generators the user can access via direct endpoints.
     */
    #[EndpointAttribute(GetDirectModels::class)]
    public function getDirectModels(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetDirectModels::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * List Models
     *
     * OpenAI-compatible model listing endpoint.
     */
    #[EndpointAttribute(GetV1Models::class)]
    public function getV1Models(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetV1Models::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Retrieve Model
     *
     * OpenAI-compatible single-model retrieve (client.models.retrieve()).
     */
    #[EndpointAttribute(GetV1ModelsModelId::class)]
    public function getV1ModelsModelId(
        string $modelId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetV1ModelsModelId::fromRecordData(
                ['model_id' => $modelId],
            ),
        );

        return $response;
    }

    /**
     * Chat Completions
     *
     * OpenAI-compatible chat completions endpoint for direct LLM access.
     */
    #[EndpointAttribute(PostV1ChatCompletions::class)]
    public function postV1ChatCompletions(
        OpenAIChatCompletionRequest $body,
    ): OpenAIChatCompletionResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostV1ChatCompletions::fromRecordData(
                ['body' => $body],
            ),
        );

        return OpenAIChatCompletionResponse::fromArray($response);
    }

    /**
     * Completions
     *
     * Legacy text-completion endpoint — adapts the prompt to a single user turn.
     */
    #[EndpointAttribute(PostV1Completions::class)]
    public function postV1Completions(
        OpenAICompletionRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostV1Completions::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Embeddings
     *
     * OpenAI-compatible embeddings endpoint.
     */
    #[EndpointAttribute(PostV1Embeddings::class)]
    public function postV1Embeddings(
        OpenAIEmbeddingRequest $body,
    ): OpenAIEmbeddingResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostV1Embeddings::fromRecordData(
                ['body' => $body],
            ),
        );

        return OpenAIEmbeddingResponse::fromArray($response);
    }

    /**
     * Moderations
     *
     * OpenAI-compatible moderation. Uses the platform&#39;s built-in content check for the &#x60;flagged&#x60; signal; category granularity is coarse (the platform does not classify into OpenAI&#39;s full taxonomy), so category flags/scores are returned as zeros.
     */
    #[EndpointAttribute(PostV1Moderations::class)]
    public function postV1Moderations(
        OpenAIModerationRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostV1Moderations::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }
}
