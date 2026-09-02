<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteTeamsTeamIdEmbeddingsEmbeddingId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/teams/{team_id}/embeddings/{embedding_id}';
    private int $teamId;
    private int $embeddingId;

    public function teamId(): int
    {
        return $this->teamId;
    }

    public function embeddingId(): int
    {
        return $this->embeddingId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'team_id' => $this->teamId,
            'embedding_id' => $this->embeddingId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'team_id' => 'teamId',
            'embedding_id' => 'embeddingId',
        ];
    }
}
