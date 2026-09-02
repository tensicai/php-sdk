<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteProjectsProjectIDEmbeddingsSource implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/projects/{projectID}/embeddings/{source}';
    private int $projectID;
    private string $source;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function source(): string
    {
        return $this->source;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'source' => $this->source,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'source' => 'source',
        ];
    }
}
