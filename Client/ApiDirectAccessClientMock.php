<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\OpenAIChatCompletionRequest;
use TensicAI\SDK\Model\OpenAICompletionRequest;
use TensicAI\SDK\Model\OpenAIEmbeddingRequest;
use TensicAI\SDK\Model\OpenAIModerationRequest;

use function func_get_args;

final class ApiDirectAccessClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<DirectAccessClientInterface> */
    public function mockInterface(): string
    {
        return DirectAccessClientInterface::class;
    }

    /** @see DirectAccessClient::getDirectModels() */
    public function getDirectModels(): self
    {
        ($this->persister)('getDirectModels', ...func_get_args());

        return $this;
    }

    /** @see DirectAccessClient::getV1Models() */
    public function getV1Models(): self
    {
        ($this->persister)('getV1Models', ...func_get_args());

        return $this;
    }

    /** @see DirectAccessClient::getV1ModelsModelId() */
    public function getV1ModelsModelId(
        string $modelId,
    ): self {
        ($this->persister)('getV1ModelsModelId', ...func_get_args());

        return $this;
    }

    /** @see DirectAccessClient::postV1ChatCompletions() */
    public function postV1ChatCompletions(
        OpenAIChatCompletionRequest $body,
    ): self {
        ($this->persister)('postV1ChatCompletions', ...func_get_args());

        return $this;
    }

    /** @see DirectAccessClient::postV1Completions() */
    public function postV1Completions(
        OpenAICompletionRequest $body,
    ): self {
        ($this->persister)('postV1Completions', ...func_get_args());

        return $this;
    }

    /** @see DirectAccessClient::postV1Embeddings() */
    public function postV1Embeddings(
        OpenAIEmbeddingRequest $body,
    ): self {
        ($this->persister)('postV1Embeddings', ...func_get_args());

        return $this;
    }

    /** @see DirectAccessClient::postV1Moderations() */
    public function postV1Moderations(
        OpenAIModerationRequest $body,
    ): self {
        ($this->persister)('postV1Moderations', ...func_get_args());

        return $this;
    }
}
