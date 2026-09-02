<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class PostProjectsProjectIDEmbeddingsIngestUpload implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/projects/{projectID}/embeddings/ingest/upload';
    private int $projectID;

    public function projectID(): int
    {
        return $this->projectID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['projectID' => 'projectID'];
    }
}
