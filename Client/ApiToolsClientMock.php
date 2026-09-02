<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\ClassifierModel;
use TeamBlue\TensicAI\SDK\Model\MCPProbeRequest;
use TeamBlue\TensicAI\SDK\Model\OllamaCloudInstanceModel;
use TeamBlue\TensicAI\SDK\Model\OllamaInstanceModel;
use TeamBlue\TensicAI\SDK\Model\OllamaModelPullRequest;
use TeamBlue\TensicAI\SDK\Model\OpenAICompatDiscoverRequest;

use function func_get_args;

final class ApiToolsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ToolsClientInterface> */
    public function mockInterface(): string
    {
        return ToolsClientInterface::class;
    }

    /** @see ToolsClient::getToolsAgents() */
    public function getToolsAgents(): self
    {
        ($this->persister)('getToolsAgents', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::getToolsClassifiers() */
    public function getToolsClassifiers(): self
    {
        ($this->persister)('getToolsClassifiers', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::getToolsOpenaiCompatModelsLlmId() */
    public function getToolsOpenaiCompatModelsLlmId(
        int $llmId,
    ): self {
        ($this->persister)('getToolsOpenaiCompatModelsLlmId', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::postToolsClassifier() */
    public function postToolsClassifier(
        ClassifierModel $body,
    ): self {
        ($this->persister)('postToolsClassifier', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::postToolsMcpProbe() */
    public function postToolsMcpProbe(
        MCPProbeRequest $body,
    ): self {
        ($this->persister)('postToolsMcpProbe', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::postToolsOllamaCloudEmbeddings() */
    public function postToolsOllamaCloudEmbeddings(
        OllamaCloudInstanceModel $body,
    ): self {
        ($this->persister)('postToolsOllamaCloudEmbeddings', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::postToolsOllamaCloudModels() */
    public function postToolsOllamaCloudModels(
        OllamaCloudInstanceModel $body,
    ): self {
        ($this->persister)('postToolsOllamaCloudModels', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::postToolsOllamaModels() */
    public function postToolsOllamaModels(
        OllamaInstanceModel $body,
    ): self {
        ($this->persister)('postToolsOllamaModels', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::postToolsOllamaPull() */
    public function postToolsOllamaPull(
        OllamaModelPullRequest $body,
    ): self {
        ($this->persister)('postToolsOllamaPull', ...func_get_args());

        return $this;
    }

    /** @see ToolsClient::postToolsOpenaiCompatDiscover() */
    public function postToolsOpenaiCompatDiscover(
        OpenAICompatDiscoverRequest $body,
    ): self {
        ($this->persister)('postToolsOpenaiCompatDiscover', ...func_get_args());

        return $this;
    }
}
