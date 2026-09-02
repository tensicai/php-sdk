<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\ClassifierModel;
use TensicAI\SDK\Model\ClassifierResponse;
use TensicAI\SDK\Model\MCPProbeRequest;
use TensicAI\SDK\Model\OllamaCloudInstanceModel;
use TensicAI\SDK\Model\OllamaInstanceModel;
use TensicAI\SDK\Model\OllamaModelInfo;
use TensicAI\SDK\Model\OllamaModelPullRequest;
use TensicAI\SDK\Model\OllamaModelPullResponse;
use TensicAI\SDK\Model\OpenAICompatDiscoverRequest;
use TensicAI\SDK\Model\Tool;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ToolsClientInterface
{
    public const string TAG = 'Tools';

    /**
     * Get Tools
     *
     * List all registered agent tools.
     *
     * @return array<Tool>
     */
    public function getToolsAgents(): array;

    /**
     * List Classifiers
     *
     * List the registered zero-shot classifiers.  These are registry rows now, not a hard-coded list of HuggingFace ids: the models run outside the core, so what is available is whatever an operator registered rather than whatever this build happened to ship.
     */
    public function getToolsClassifiers(): mixed;

    /**
     * List Openai Compatible Models
     *
     * List models from an OpenAI-compatible endpoint using a saved LLM&#39;s credentials (admin only).
     */
    public function getToolsOpenaiCompatModelsLlmId(
        int $llmId,
    ): mixed;

    /**
     * Classifier
     *
     * Classify text into provided labels using zero-shot classification.
     */
    public function postToolsClassifier(
        ClassifierModel $body,
    ): ClassifierResponse;

    /**
     * Probe Mcp Server
     *
     * Probe an MCP server or gateway to discover available tools/services.
     */
    public function postToolsMcpProbe(
        MCPProbeRequest $body,
    ): mixed;

    /**
     * Get Ollama Cloud Embedding Models
     *
     * List embedding-capable models available on Ollama Cloud.
     *
     * @return array<OllamaModelInfo>
     */
    public function postToolsOllamaCloudEmbeddings(
        OllamaCloudInstanceModel $body,
    ): array;

    /**
     * Get Ollama Cloud Models
     *
     * List models available on Ollama Cloud.
     *
     * @return array<OllamaModelInfo>
     */
    public function postToolsOllamaCloudModels(
        OllamaCloudInstanceModel $body,
    ): array;

    /**
     * Get Ollama Models
     *
     * Connect to an Ollama instance and retrieve all available models.
     *
     * @return array<OllamaModelInfo>
     */
    public function postToolsOllamaModels(
        OllamaInstanceModel $body,
    ): array;

    /**
     * Pull Ollama Model
     *
     * Pull (download/install) a model to an Ollama instance.
     */
    public function postToolsOllamaPull(
        OllamaModelPullRequest $body,
    ): OllamaModelPullResponse;

    /**
     * Discover Openai Compatible Models
     *
     * List models from an OpenAI-compatible endpoint by URL + key (admin only).  Backs the image / speech-to-text \&quot;Import from endpoint\&quot; UI. Passes through the non-standard &#x60;media_type&#x60; field the AI Factory generator platform returns (&#x60;image&#x60; | &#x60;audio-stt&#x60;) so the importer can pre-classify; it&#39;s absent for plain OpenAI / vLLM endpoints (the admin picks the type).
     */
    public function postToolsOpenaiCompatDiscover(
        OpenAICompatDiscoverRequest $body,
    ): mixed;
}
