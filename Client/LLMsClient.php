<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteLlmsLlmId;
use TeamBlue\TensicAI\SDK\Endpoint\GetLlms;
use TeamBlue\TensicAI\SDK\Endpoint\GetLlmsLlmId;
use TeamBlue\TensicAI\SDK\Endpoint\PatchLlmsLlmId;
use TeamBlue\TensicAI\SDK\Endpoint\PostLlms;
use TeamBlue\TensicAI\SDK\Endpoint\PostLlmsTest;
use TeamBlue\TensicAI\SDK\Model\GetLlmsQuery;
use TeamBlue\TensicAI\SDK\Model\LLMModel;
use TeamBlue\TensicAI\SDK\Model\LLMTestRequest;
use TeamBlue\TensicAI\SDK\Model\LLMUpdate;
use TeamBlue\TensicAI\SDK\Model\PageLLMModel;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class LLMsClient extends AbstractClient implements LLMsClientInterface
{
    /**
     * Api Delete Llm
     *
     * Delete a user-owned or legacy platform LLM.
     */
    #[EndpointAttribute(DeleteLlmsLlmId::class)]
    public function deleteLlmsLlmId(
        int $llmId,
    ): mixed {
        return $this->performRequest(
            DeleteLlmsLlmId::fromRecordData(
                ['llm_id' => $llmId],
            ),
        );
    }

    /**
     * Api Get Llms
     *
     * List LLMs. Non-admins see team-accessible and self-created LLMs.
     */
    #[EndpointAttribute(GetLlms::class)]
    public function getLlms(
        GetLlmsQuery|null $query = null,
    ): PageLLMModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetLlms::fromRecordData(
                ['query' => $query],
            ),
        );

        return PageLLMModel::fromArray($response);
    }

    /**
     * Api Get Llm
     *
     * Get an LLM by ID. Non-admins see team-accessible and self-created LLMs.
     */
    #[EndpointAttribute(GetLlmsLlmId::class)]
    public function getLlmsLlmId(
        int $llmId,
    ): LLMModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetLlmsLlmId::fromRecordData(
                ['llm_id' => $llmId],
            ),
        );

        return LLMModel::fromArray($response);
    }

    /**
     * Api Edit Llm
     *
     * Update a user-owned or legacy platform LLM.
     */
    #[EndpointAttribute(PatchLlmsLlmId::class)]
    public function patchLlmsLlmId(
        int $llmId,
        LLMUpdate $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PatchLlmsLlmId::fromRecordData(
                [
                    'llm_id' => $llmId,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Api Create Llm
     *
     * Register a user-owned LLM when manager policy allows user creation.
     */
    #[EndpointAttribute(PostLlms::class)]
    public function postLlms(
        LLMModel $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostLlms::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Api Test Llm
     *
     * Test an LLM provider connection with a candidate config, before saving.  Body: &#x60;&#x60;{class_name, options}&#x60;&#x60; — &#x60;&#x60;options&#x60;&#x60; a dict (or JSON string) with the api_key in plaintext, exactly as POST /llms receives it. Builds the LlamaIndex LLM from the class + options and runs a minimal completion to verify the credentials/endpoint actually work. Persists nothing.
     */
    #[EndpointAttribute(PostLlmsTest::class)]
    public function postLlmsTest(
        LLMTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostLlmsTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Api Test Llm
     *
     * Test an LLM provider connection with a candidate config, before saving.  Body: &#x60;&#x60;{class_name, options}&#x60;&#x60; — &#x60;&#x60;options&#x60;&#x60; a dict (or JSON string) with the api_key in plaintext, exactly as POST /llms receives it. Builds the LlamaIndex LLM from the class + options and runs a minimal completion to verify the credentials/endpoint actually work. Persists nothing.
     */
    #[EndpointAttribute(PostLlmsTest::class)]
    public function postLlmsTest(
        LLMTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostLlmsTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }
}
