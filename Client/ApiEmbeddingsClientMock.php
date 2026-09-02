<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\EmbeddingModel;
use TensicAI\SDK\Model\EmbeddingUpdate;
use TensicAI\SDK\Model\GetEmbeddingsQuery;

use function func_get_args;

final class ApiEmbeddingsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<EmbeddingsClientInterface> */
    public function mockInterface(): string
    {
        return EmbeddingsClientInterface::class;
    }

    /** @see EmbeddingsClient::deleteEmbeddingsEmbeddingId() */
    public function deleteEmbeddingsEmbeddingId(
        int $embeddingId,
    ): self {
        ($this->persister)('deleteEmbeddingsEmbeddingId', ...func_get_args());

        return $this;
    }

    /** @see EmbeddingsClient::getEmbeddings() */
    public function getEmbeddings(
        GetEmbeddingsQuery|null $query = null,
    ): self {
        ($this->persister)('getEmbeddings', ...func_get_args());

        return $this;
    }

    /** @see EmbeddingsClient::getEmbeddingsEmbeddingId() */
    public function getEmbeddingsEmbeddingId(
        int $embeddingId,
    ): self {
        ($this->persister)('getEmbeddingsEmbeddingId', ...func_get_args());

        return $this;
    }

    /** @see EmbeddingsClient::patchEmbeddingsEmbeddingId() */
    public function patchEmbeddingsEmbeddingId(
        int $embeddingId,
        EmbeddingUpdate $body,
    ): self {
        ($this->persister)('patchEmbeddingsEmbeddingId', ...func_get_args());

        return $this;
    }

    /** @see EmbeddingsClient::postEmbeddings() */
    public function postEmbeddings(
        EmbeddingModel $body,
    ): self {
        ($this->persister)('postEmbeddings', ...func_get_args());

        return $this;
    }
}
