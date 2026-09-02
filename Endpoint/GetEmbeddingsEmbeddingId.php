<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class GetEmbeddingsEmbeddingId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/embeddings/{embedding_id}';
    private int $embeddingId;

    public function embeddingId(): int
    {
        return $this->embeddingId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'embedding_id' => $this->embeddingId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['embedding_id' => 'embeddingId'];
    }
}
