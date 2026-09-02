<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\GetLlmsQuery;
use TeamBlue\TensicAI\SDK\Model\LLMModel;
use TeamBlue\TensicAI\SDK\Model\LLMTestRequest;
use TeamBlue\TensicAI\SDK\Model\LLMUpdate;
use TeamBlue\TensicAI\SDK\Model\PageLLMModel;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface LLMsClientInterface
{
    public const string TAG = 'LLMs';

    /**
     * Api Delete Llm
     *
     * Delete a user-owned or legacy platform LLM.
     */
    public function deleteLlmsLlmId(
        int $llmId,
    ): mixed;

    /**
     * Api Get Llms
     *
     * List LLMs. Non-admins see team-accessible and self-created LLMs.
     */
    public function getLlms(
        GetLlmsQuery|null $query = null,
    ): PageLLMModel;

    /**
     * Api Get Llm
     *
     * Get an LLM by ID. Non-admins see team-accessible and self-created LLMs.
     */
    public function getLlmsLlmId(
        int $llmId,
    ): LLMModel;

    /**
     * Api Edit Llm
     *
     * Update a user-owned or legacy platform LLM.
     */
    public function patchLlmsLlmId(
        int $llmId,
        LLMUpdate $body,
    ): mixed;

    /**
     * Api Create Llm
     *
     * Register a user-owned LLM when manager policy allows user creation.
     */
    public function postLlms(
        LLMModel $body,
    ): mixed;

    /**
     * Api Test Llm
     *
     * Test an LLM provider connection with a candidate config, before saving.  Body: &#x60;&#x60;{class_name, options}&#x60;&#x60; — &#x60;&#x60;options&#x60;&#x60; a dict (or JSON string) with the api_key in plaintext, exactly as POST /llms receives it. Builds the LlamaIndex LLM from the class + options and runs a minimal completion to verify the credentials/endpoint actually work. Persists nothing.
     */
    public function postLlmsTest(
        LLMTestRequest|null $body = null,
    ): mixed;

    /**
     * Api Test Llm
     *
     * Test an LLM provider connection with a candidate config, before saving.  Body: &#x60;&#x60;{class_name, options}&#x60;&#x60; — &#x60;&#x60;options&#x60;&#x60; a dict (or JSON string) with the api_key in plaintext, exactly as POST /llms receives it. Builds the LlamaIndex LLM from the class + options and runs a minimal completion to verify the credentials/endpoint actually work. Persists nothing.
     */
    public function postLlmsTest(
        LLMTestRequest|null $body = null,
    ): mixed;
}
