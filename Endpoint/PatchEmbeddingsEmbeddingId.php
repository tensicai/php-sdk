<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\EmbeddingUpdate;

class PatchEmbeddingsEmbeddingId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/embeddings/{embedding_id}';
    private int $embeddingId;
    private EmbeddingUpdate $body;

    public function embeddingId(): int
    {
        return $this->embeddingId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'embedding_id' => $this->embeddingId,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['embedding_id' => 'embeddingId'];
    }
}
