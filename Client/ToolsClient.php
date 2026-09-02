<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\GetToolsAgents;
use TeamBlue\TensicAI\SDK\Endpoint\GetToolsClassifiers;
use TeamBlue\TensicAI\SDK\Endpoint\GetToolsOpenaiCompatModelsLlmId;
use TeamBlue\TensicAI\SDK\Endpoint\PostToolsClassifier;
use TeamBlue\TensicAI\SDK\Endpoint\PostToolsMcpProbe;
use TeamBlue\TensicAI\SDK\Endpoint\PostToolsOllamaCloudEmbeddings;
use TeamBlue\TensicAI\SDK\Endpoint\PostToolsOllamaCloudModels;
use TeamBlue\TensicAI\SDK\Endpoint\PostToolsOllamaModels;
use TeamBlue\TensicAI\SDK\Endpoint\PostToolsOllamaPull;
use TeamBlue\TensicAI\SDK\Endpoint\PostToolsOpenaiCompatDiscover;
use TeamBlue\TensicAI\SDK\Model\ClassifierModel;
use TeamBlue\TensicAI\SDK\Model\ClassifierResponse;
use TeamBlue\TensicAI\SDK\Model\MCPProbeRequest;
use TeamBlue\TensicAI\SDK\Model\OllamaCloudInstanceModel;
use TeamBlue\TensicAI\SDK\Model\OllamaInstanceModel;
use TeamBlue\TensicAI\SDK\Model\OllamaModelInfo;
use TeamBlue\TensicAI\SDK\Model\OllamaModelPullRequest;
use TeamBlue\TensicAI\SDK\Model\OllamaModelPullResponse;
use TeamBlue\TensicAI\SDK\Model\OpenAICompatDiscoverRequest;
use TeamBlue\TensicAI\SDK\Model\Tool;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class ToolsClient extends AbstractClient implements ToolsClientInterface
{
    /**
     * Get Tools
     *
     * List all registered agent tools.
     *
     * @return array<Tool>
     */
    #[EndpointAttribute(GetToolsAgents::class)]
    public function getToolsAgents(): array
    {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetToolsAgents::fromRecordData(
                [],
            ),
        );

        return array_map(
            Tool::fromArray(...),
            $response,
        );
    }

    /**
     * List Classifiers
     *
     * List the registered zero-shot classifiers.  These are registry rows now, not a hard-coded list of HuggingFace ids: the models run outside the core, so what is available is whatever an operator registered rather than whatever this build happened to ship.
     */
    #[EndpointAttribute(GetToolsClassifiers::class)]
    public function getToolsClassifiers(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetToolsClassifiers::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * List Openai Compatible Models
     *
     * List models from an OpenAI-compatible endpoint using a saved LLM&#39;s credentials (admin only).
     */
    #[EndpointAttribute(GetToolsOpenaiCompatModelsLlmId::class)]
    public function getToolsOpenaiCompatModelsLlmId(
        int $llmId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetToolsOpenaiCompatModelsLlmId::fromRecordData(
                ['llm_id' => $llmId],
            ),
        );

        return $response;
    }

    /**
     * Classifier
     *
     * Classify text into provided labels using zero-shot classification.
     */
    #[EndpointAttribute(PostToolsClassifier::class)]
    public function postToolsClassifier(
        ClassifierModel $body,
    ): ClassifierResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostToolsClassifier::fromRecordData(
                ['body' => $body],
            ),
        );

        return ClassifierResponse::fromArray($response);
    }

    /**
     * Probe Mcp Server
     *
     * Probe an MCP server or gateway to discover available tools/services.
     */
    #[EndpointAttribute(PostToolsMcpProbe::class)]
    public function postToolsMcpProbe(
        MCPProbeRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostToolsMcpProbe::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Get Ollama Cloud Embedding Models
     *
     * List embedding-capable models available on Ollama Cloud.
     *
     * @return array<OllamaModelInfo>
     */
    #[EndpointAttribute(PostToolsOllamaCloudEmbeddings::class)]
    public function postToolsOllamaCloudEmbeddings(
        OllamaCloudInstanceModel $body,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            PostToolsOllamaCloudEmbeddings::fromRecordData(
                ['body' => $body],
            ),
        );

        return array_map(
            OllamaModelInfo::fromArray(...),
            $response,
        );
    }

    /**
     * Get Ollama Cloud Models
     *
     * List models available on Ollama Cloud.
     *
     * @return array<OllamaModelInfo>
     */
    #[EndpointAttribute(PostToolsOllamaCloudModels::class)]
    public function postToolsOllamaCloudModels(
        OllamaCloudInstanceModel $body,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            PostToolsOllamaCloudModels::fromRecordData(
                ['body' => $body],
            ),
        );

        return array_map(
            OllamaModelInfo::fromArray(...),
            $response,
        );
    }

    /**
     * Get Ollama Models
     *
     * Connect to an Ollama instance and retrieve all available models.
     *
     * @return array<OllamaModelInfo>
     */
    #[EndpointAttribute(PostToolsOllamaModels::class)]
    public function postToolsOllamaModels(
        OllamaInstanceModel $body,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            PostToolsOllamaModels::fromRecordData(
                ['body' => $body],
            ),
        );

        return array_map(
            OllamaModelInfo::fromArray(...),
            $response,
        );
    }

    /**
     * Pull Ollama Model
     *
     * Pull (download/install) a model to an Ollama instance.
     */
    #[EndpointAttribute(PostToolsOllamaPull::class)]
    public function postToolsOllamaPull(
        OllamaModelPullRequest $body,
    ): OllamaModelPullResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostToolsOllamaPull::fromRecordData(
                ['body' => $body],
            ),
        );

        return OllamaModelPullResponse::fromArray($response);
    }

    /**
     * Discover Openai Compatible Models
     *
     * List models from an OpenAI-compatible endpoint by URL + key (admin only).  Backs the image / speech-to-text \&quot;Import from endpoint\&quot; UI. Passes through the non-standard &#x60;media_type&#x60; field the AI Factory generator platform returns (&#x60;image&#x60; | &#x60;audio-stt&#x60;) so the importer can pre-classify; it&#39;s absent for plain OpenAI / vLLM endpoints (the admin picks the type).
     */
    #[EndpointAttribute(PostToolsOpenaiCompatDiscover::class)]
    public function postToolsOpenaiCompatDiscover(
        OpenAICompatDiscoverRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostToolsOpenaiCompatDiscover::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }
}
