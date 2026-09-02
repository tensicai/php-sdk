<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\OpenAIChatCompletionRequest;
use TeamBlue\TensicAI\SDK\Model\OpenAIChatCompletionResponse;
use TeamBlue\TensicAI\SDK\Model\OpenAICompletionRequest;
use TeamBlue\TensicAI\SDK\Model\OpenAIEmbeddingRequest;
use TeamBlue\TensicAI\SDK\Model\OpenAIEmbeddingResponse;
use TeamBlue\TensicAI\SDK\Model\OpenAIModerationRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface DirectAccessClientInterface
{
    public const string TAG = 'DirectAccess';

    /**
     * List Accessible Models
     *
     * List all models/generators the user can access via direct endpoints.
     */
    public function getDirectModels(): mixed;

    /**
     * List Models
     *
     * OpenAI-compatible model listing endpoint.
     */
    public function getV1Models(): mixed;

    /**
     * Retrieve Model
     *
     * OpenAI-compatible single-model retrieve (client.models.retrieve()).
     */
    public function getV1ModelsModelId(
        string $modelId,
    ): mixed;

    /**
     * Chat Completions
     *
     * OpenAI-compatible chat completions endpoint for direct LLM access.
     */
    public function postV1ChatCompletions(
        OpenAIChatCompletionRequest $body,
    ): OpenAIChatCompletionResponse;

    /**
     * Completions
     *
     * Legacy text-completion endpoint — adapts the prompt to a single user turn.
     */
    public function postV1Completions(
        OpenAICompletionRequest $body,
    ): mixed;

    /**
     * Embeddings
     *
     * OpenAI-compatible embeddings endpoint.
     */
    public function postV1Embeddings(
        OpenAIEmbeddingRequest $body,
    ): OpenAIEmbeddingResponse;

    /**
     * Moderations
     *
     * OpenAI-compatible moderation. Uses the platform&#39;s built-in content check for the &#x60;flagged&#x60; signal; category granularity is coarse (the platform does not classify into OpenAI&#39;s full taxonomy), so category flags/scores are returned as zeros.
     */
    public function postV1Moderations(
        OpenAIModerationRequest $body,
    ): mixed;
}
